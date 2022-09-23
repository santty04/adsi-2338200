<?php require 'config/app.php' ?>
<?php include 'config/database.php' ?>

<?php
if($_GET){
    $id = $_GET['id'];
    if(deletePokemon($conx, $id)){
        $_SESSION['message'] = "Pokemon was delete!";
        echo "<script>
                window.location.replace('index.php')
        </script>";
        
    } else {
        echo "Hola";
    }
}
?>

<?php $conx = null;?>