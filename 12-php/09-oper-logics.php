<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?="Oper Logics" ?> </title>
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
          <a class="nav-link active" aria-current="page" href="#">09 Oper Logics</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <main class="container">
        <div class="row">
            <div class="col-md-6 offset-3 text-center">
            <?php echo "<h1 class='mt-5'>Oper Logics</h1>"; ?>
            <hr>
            <table class="table table-bordered table-striped table-hover table-dark">
					<thead class="bg-secondary text-uppercase">
						<tr>
							<th>Operators</th>
							<th>Description</th>
							<th>Example</th>
							<th>Result</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> && </td>
							<td> AND </td>
							<td>$x = 6; $y = 3; ($x < 10 && $y > 1)</td>
							<td>
								<?php 
									$x = 6; 
									$y = 3;
									echo var_dump($x < 10 && $y > 1); 
								?>
							</td>
						</tr>
						<tr>
							<td> || </td>
							<td> OR </td>
							<td>$x = 6; $y = 3; ($x == 5 || $y == 5)</td>
							<td>
								<?php 
									$x = 6; 
									$y = 3;
									echo var_dump($x == 5 || $y == 5); 
								?>
							</td>
						</tr>
						<tr>
							<td> ! </td>
							<td> Not </td>
							<td>$x = 6; $y = 3; !($x == $y)</td>
							<td>
								<?php 
									$x = 6; 
									$y = 3;
									echo var_dump(!($x == $y)); 
								?>
							</td>
						</tr>
					</tbody>
				</table>

           
            </div>
        </div>
    
    </main>
</body>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>