<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?="Challenge date" ?> </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-info navbar-primary sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">PHP & Bootstrap V5</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Main Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">25 Challenge date</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <main class="container">
        <div class="row">
            <div class="col-md-6 offset-3 text-center">
            <?php echo "<h1 class='mt-5'>Challenge date</h1>"; ?>
            <hr>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="bithdate">Birthdate: </label>
                    <input type="date" name="fecha" class="form-cntrol" placeholder="mm/dd/yyyy">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-outline-success">Calculate Age</button>
                </div>
            </form>
            <?php
                if($_POST){
                    // function edad($fecha){
                    //     $fecha = str_replace("/","-",$fecha);
                    //     $fecha = date('Y/m/d',strtotime($fecha));
                    //     $hoy = date('Y/m/d');
                    //     $edad = $hoy - $fecha;
                    //     return $edad; }
                    //     if (isset($_POST['fecha']))
                    //     echo "Tiene ".edad($_POST['fecha'])." Años"; 
                        
                    $fecha_nacimiento = $_POST['fecha'];
                    $dia_actual = date("Y-m-d");
                    $edad_diff = date_diff(date_create($fecha_nacimiento), date_create($dia_actual));
                    echo 'My age is: '.$edad_diff->format('%y').' Age';
                }
            ?>
            </div>
        </div>

    </main>
</body>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>