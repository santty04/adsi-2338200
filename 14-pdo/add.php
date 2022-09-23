<?php $title = 'Add pokemon '?>
<?php include 'includes/header.inc'?>
<main class="container">
        <section class="row">
            <div class="col-md-6 offset-md-3 my-5">
                <h1 class="text-center">
                <i class="fa-solid fa-plus"></i>
                    Add Pokemon
                </h1>
                <hr>
                <a href="index.php" class="btn btn-lg btn-outline-dark">
                    <i class="fa fa-arrow-left"></i>
                    Back</a>
                

                    <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3 text-center">
                        <figure class="figure">
                            <img src="public/images/pokeball.png" width="240" id="preview"class="figure-img img-fluid img-thumbnailrounded">
                        </figure>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-dark btn-upload form-control" type="button">
                            <i class="fa fa-upload"></i>
                             Select Image  
                            </button>
                        <input type="file" class="form-control d-none" id="image" name="image" accept="image/*" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name Of Pokemon" required>
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">type:</label>
                        <select name="type" id="" class="form-select">
                            <option value="">Select a Type...</option>
                            <option value="Normal">Normal</option>
                            <option value="Electric">Electric</option>
                            <option value="Fire">Fire</option>
                            <option value="Ground">Ground</option>
                            <option value="Grass">Grass</option>
                            <option value="Ghost">Ghost</option>
                            <option value="Dragon">Dragon</option>
                            <option value="Poison">Poison</option>
                            <option value="Rock">Rock</option>
                            <option value="Water">Water</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="strenght" class="form-label">Strenght:</label>
                        <input type="number" class="form-control" id="strenght" name="strenght" placeholder="Strenght" required>
                    </div>
                    <div class="mb-3">
                        <label for="stamina" class="form-label">Stamina:</label>
                        <input type="number" class="form-control" id="stamina" name="stamina" placeholder="Stamina" required>
                    </div>
                    <div class="mb-3">
                        <label for="speed" class="form-label">Speed:</label>
                        <input type="number" class="form-control" id="speed" name="speed" placeholder="Speed" required>
                    </div>
                    <div class="mb-3">
                        <label for="accuracy" class="form-label">Accuracy:</label>
                        <input type="number" class="form-control" id="accuracy" name="accuracy" placeholder="Accuracy" required>
                    </div>
                    <div class="mb-3">
                        <label for="trainer_id" class="form-label">Trainer</label>
                        <select name="trainer_id" id="trainer_id" class="form-control">
                            <option value="">Select a Trainer...</option>
                            <?php $trainers = listAllTrainers($conx) ?>
                            <?php foreach($trainers as $trainer): ?>
                            <option value="<?php echo $trainer['id']?>"><?php echo $trainer['name'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-succes bg-success form-control">
                                <i class="fa fa-save"></i>
                                Add
                        </button>
                    </div>
                    <div class="mb-3">
                        <button type="reset" class="btn btn-dark bg-dark form-control">
                                <i class="fa fa-eraser"></i>
                                Clear
                        </button>
                    </div>
                    
                </form>
                <?php 
                    if($_POST){
                        // var_dump($_POST);
                        // echo "<hr>";
                        // var_dump($_FILES);
                        $name = $_POST['name'];
                        $type = $_POST['type'];
                        $strength = $_POST['strenght'];
                        $stamina = $_POST['stamina'];
                        $speed = $_POST['speed'];
                        $accuracy = $_POST['accuracy'];
                        $trainer_id = $_POST['trainer_id'];
                        // Upload image
                        $path = "public/images/";
                        $image = $path.time().".".pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                        move_uploaded_file($_FILES['image']['tmp_name'], $image);

                        if(addPokemon($conx, $name, $type, $strength, $stamina, $speed, $accuracy, $image, $trainer_id)){
                            $_SESSION['message'] = "Pokemon : $name was added!";
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
        <script src="public/js/jquery-3.6.0.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
        <script src="public/js/bootstrap.bundle.min.js"></script>
        <script src="public/js/sweetalert2.js"></script>
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