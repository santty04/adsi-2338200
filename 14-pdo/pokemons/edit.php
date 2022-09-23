<?php $title = 'Edit pokemon '?>
<?php include 'includes/header.inc'?>
<main class="container">
        <section class="row">
            <div class="col-md-6 offset-md-3 my-5">
                <h1 class="text-center">
                <i class="fa-solid fa-pen"></i>
                    Edit Pokemon
                </h1>
                <hr>
                <a href="index.php" class="btn btn-lg btn-outline-dark">
                    <i class="fa fa-arrow-left"></i>
                    Back</a>
                    
                    <?php $id = $_GET['id'] ?>
                    <?php $pokemon = showPokemon($conx, $id)?>
                    <?php foreach($pokemon as $pk):?>

                    <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3 text-center">
                        <figure class="figure">
                            <img src="<?php echo $pk['image'] ?>" width="240" id="preview"class="figure-img img-fluid img-thumbnailrounded">
                        </figure>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-dark btn-upload form-control" type="button">
                            <i class="fa fa-upload"></i>
                             Select Image  
                            </button>
                        <input type="file" class="form-control d-none" id="image" name="image" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $pk['name'] ?>" placeholder="Name Of Pokemon" required>
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">type:</label>
                        <select name="type" id="" class="form-select">
                            <option value="">Select a Type...</option>
                            <option value="Normal" <?php if($pk['type'] == 'Normal'): ?> selected <?php endif ?> >Normal</option>
                            <option value="Electric" <?php if($pk['type'] == 'Electric'): ?> selected <?php endif ?>>Electric</option>
                            <option value="Fire" <?php if($pk['type'] == 'Fire'): ?> selected <?php endif ?>>Fire</option>
                            <option value="Ground" <?php if($pk['type'] == 'Ground'): ?> selected <?php endif ?>>Ground</option>
                            <option value="Grass" <?php if($pk['type'] == 'Grass'): ?> selected <?php endif ?>>Grass</option>
                            <option value="Ghost" <?php if($pk['type'] == 'Ghost'): ?> selected <?php endif ?>>Ghost</option>
                            <option value="Dragon" <?php if($pk['type'] == 'Dragon'): ?> selected <?php endif ?>>Dragon</option>
                            <option value="Poison" <?php if($pk['type'] == 'Poison'): ?> selected <?php endif ?>>Poison</option>
                            <option value="Rock" <?php if($pk['type'] == 'Rock'): ?> selected <?php endif ?>>Rock</option>
                            <option value="Water" <?php if($pk['type'] == 'Water'): ?> selected <?php endif ?>>Water</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="strenght" class="form-label">Strenght:</label>
                        <input type="number" class="form-control" id="strenght" value="<?php echo $pk['strength']?>" name="strenght" placeholder="Strenght" required>
                    </div>
                    <div class="mb-3">
                        <label for="stamina" class="form-label">Stamina:</label>
                        <input type="number" class="form-control" id="stamina" value="<?php echo $pk['stamina']?>" name="stamina" placeholder="Stamina" required>
                    </div>
                    <div class="mb-3">
                        <label for="speed" class="form-label">Speed:</label>
                        <input type="number" class="form-control" id="speed" value="<?php echo $pk['speed']?>" name="speed" placeholder="Speed" required>
                    </div>
                    <div class="mb-3">
                        <label for="accuracy" class="form-label">Accuracy:</label>
                        <input type="number" class="form-control" id="accuracy" value="<?php echo $pk['accuracy']?>" name="accuracy" placeholder="Accuracy" required>
                    </div>
                    <div class="mb-3">
                        <label for="trainer_id" class="form-label">Trainer</label>
                        <select name="trainer_id" id="trainer_id" class="form-control">
                            <option value="">Select a Trainer...</option>
                            <?php $trainers = listAllTrainers($conx) ?>
                            <?php foreach($trainers as $trainer): ?>
                            <option value="<?php echo $trainer['id']?>" <?php if($pk['trainer_id'] == $trainer['id']): ?> selected <?php endif?>> <?php echo $trainer['name']?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-succes bg-success form-control">
                                <i class="fa fa-save"></i>
                                Edit
                        </button>
                    </div>
                    <div class="mb-3">
                        <button type="reset" class="btn btn-dark bg-dark form-control">
                                <i class="fa fa-eraser"></i>
                                Clear
                        </button>
                    </div>
                    
                </form>
                <?php endforeach ?>
                <?php 
                    if($_POST){
                        // var_dump($_POST);
                        // echo "<hr>";
                        // var_dump($_FILES);
                        $id = $_GET['id'];
                        $name = $_POST['name'];
                        $type = $_POST['type'];
                        $strength = $_POST['strenght'];
                        $stamina = $_POST['stamina'];
                        $speed = $_POST['speed'];
                        $accuracy = $_POST['accuracy'];
                        $trainer_id = $_POST['trainer_id'];
                        // Upload image
                        if(!empty($_FILES['image']['name'])){
                            $path = "public/images/";
                            $image = $path.time().".".pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                        } else {
                            $image = null;
                        }
                        if(updatePokemon($conx, $id, $name, $type, $strength, $stamina, $speed, $accuracy, $image, $trainer_id)){
                            if($image != null) {
                                move_uploaded_file($_FILES['image']['tmp_name'], $image);
                            }
                            $_SESSION['message'] = "Pokemon : $name was update!";
                            echo "<script>
                                    window.location.replace('index.php')
                            </script>";
                            
                        } else {
                            $_SESSION['error'] = "Pokemon Name: $name already exist!";
                        }
                    }
                ?>
            </div>
        </section>
        <?php $conx = null?>
        <?php include 'includes/scripts.inc'?>

        <script>
        $(document).ready(function () {
            // -----------------------
            $('.btn-upload').click(function() {
                $('#image').click();
            });
            // -----------------------
            $('#image').change(function(event) {
                let reader = new FileReader()
                reader.onload = function(event) {
                    $('#preview').attr('src', event.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            })
            // ------------------------
            <?php if (isset($_SESSION['error'])):?>
            Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: '<?php echo $_SESSION['error']?>',
            showConfirmButton: true,
            
            })
            <?php endif?>
            <?php unset($_SESSION['error'])?>
        });
    </script>
</body>
</html>