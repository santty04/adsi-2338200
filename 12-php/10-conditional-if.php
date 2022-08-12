<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?="Conditional" ?> </title>
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
          <a class="nav-link active" aria-current="page" href="#">10 Conditional</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <main class="container">
        <div class="row">
            <div class="col-md-6 offset-3 text-center">
            <?php echo "<h1 class='mt-5'>Conditional</h1>"; ?>
            <hr>
            <?php $day = date('D'); ?>
				<?php if ($day == "Mon"): ?>
					<span class="badge rounded-pill text-bg-info">Today is Monday</span>
				<?php elseif ($day == "Tue"): ?>
					<span class="badge rounded-pill text-bg-info">Today is Tuesday</span>
				<?php elseif ($day == "Wed"): ?>
					<span class="badge rounded-pill text-bg-info">Today is Wednesday</span>
				<?php elseif ($day == "Thu"): ?>
					<span class="badge rounded-pill text-bg-info">Today is Thursday</span>
				<?php elseif ($day == "Fri"): ?>
					<span class="badge rounded-pill text-bg-info">Today is Friday</span>
				<?php else: ?>
					<span class="badge rounded-pill text-bg-success">Happy Weekend!</span>
				<?php endif ?>
		

           
            </div>
        </div>
    
    </main>
</body>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>