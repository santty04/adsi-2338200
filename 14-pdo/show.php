<?php require 'config/app.php' ?>
<?php include 'config/database.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show pokemon</title>
    <link rel="stylesheet" href="public/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/fontawesome.min.css">
</head>
<body>
<main class="container">
        <section class="row">
            <div class="col-md-8 offset-md-2 my-5">
                <h1 class="text-center">
                    <i class="fa-solid fa-person-swimming"></i>
                    Web App Pokemons
                </h1>
                <hr>
                <a href="index.php" class="btn btn-lg btn-outline-dark">
                    <i class="fa fa-arrow-left"></i>
                    Back</a>
                <h2 class="text-center">
                    Show Pokemons
                </h2>
                <div class="table-responsive">
                    <table class="table table-striped
                    table-hover	mt-5">
                        
                        <tbody class="table-group-divider">
                            <?php 
                                $id = $_GET['id'];
                                $pokemon = showPokemon($conx, $id);
                            ?>
                            <?php foreach($pokemon as $pk):?>
                            <tr>
                                <td colspan="2" class="text-center">
                                    <img src="<?php echo $pk['image']?>" width="220px">
                                </td>
                            </tr>
                            <tr>
                                <th>ID:</th>
                                <td><?php echo $pk['id']?></td>
                            </tr>
                            <tr>
                                <th>NAME:</th>
                                <td><?php echo $pk['name']?></td>
                            </tr>
                            <tr>
                                <th>TYPE:</th>
                                <td><?php echo $pk['type']?></td>
                            </tr>
                            <tr>
                                <th>STRENGTH:</th>
                                <td><?php echo $pk['strength']?></td>
                            </tr>
                            <tr>
                                <th>SPEED:</th>
                                <td><?php echo $pk['speed']?></td>
                            </tr>
                            <tr>
                                <th>Accuracy:</th>
                                <td><?php echo $pk['accuracy']?></td>
                            </tr>
                            <tr>
                                <th>TRAINER:</th>
                                <td><?php echo $pk['nametrainer']?></td>
                            </tr>
                        </tbody>
                        <?php endforeach?>
                    </table>
                </div>
                
            </div>
        </section>
        <?php $conx = null?>
        <script src="public/js/jquery-3.6.0.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
        <script src="public/js/bootstrap.bundle.min.js"></script>
        <script src="public/js/sweetalert2.js"></script>
</body>
</html>