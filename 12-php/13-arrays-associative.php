<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?="Arrays Associative" ?> </title>
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
          <a class="nav-link active" aria-current="page" href="#">13 Arrays Associative</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <main class="container">
        <div class="row">
            <div class="col-md-6 offset-3 text-center">
            <?php echo "<h1 class='mt-5'>Arrays Associative</h1>"; ?>
            <hr>
            <?php 
                    $studends = array('Tanjiro Kamado'    => 16, 
                                      'Nezuko Kamado'     => 15, 
                                      'Zenitsu Agatsuma'  => 17,
                                      'Inosuke Hashibira' => 18);
                    $studends['Genya Shinazugawa'] = 20;
                    $studends['Kanao Tsuyuri']     = 19;

                    //var_dump($studends);
                ?>
                <div class="btn-group-vertical" style="width:15rem;">
                <?php foreach ($studends as $key => $value): ?>
                    <button type="button" class="btn btn-info text-start">
                        <?php echo $key ?>
                        <span class="badge rounded-pill bg-dark float-end">Age:<?php echo $value ?></span>
                    </button>
                <?php endforeach ?>
                </div>
            </div>
        </div>
    
    </main>
</body>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
