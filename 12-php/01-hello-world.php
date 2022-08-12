<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?="Hello World" ?> </title>
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
          <a class="nav-link active" aria-current="page" href="#">01 Hello World</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <main class="container">
        <div class="row">
            <div class="col-md-6 offset-3 text-center">
            <?php echo "<h1 class='mt-5'>Hello World</h1>"; ?>
            <hr>
            <?php
            print('<p class="text-start text muted lh-lg">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto vel magni, officia neque similique distinctio impedit libero, quod reiciendis, pariatur provident. Iusto perspiciatis voluptas exercitationem delectus, facilis voluptate provident inventore soluta accusamus assumenda vel placeat at maiores nihil impedit ullam vero natus, cupiditate nisi, quaerat eaque excepturi sunt quisquam! Hic necessitatibus perferendis odio itaque nobis, ipsum ullam placeat dicta fugiat praesentium, nam maxime ex dignissimos? Deleniti sapiente corrupti veritatis a sed exercitationem beatae vitae, commodi perferendis! Maxime perferendis reprehenderit facilis, et possimus corrupti odit accusamus officiis quasi qui enim nemo vero recusandae ducimus veniam nihil reiciendis magnam expedita provident deleniti!
            </p>')
            ?>
           
            </div>
        </div>
    
    </main>
</body>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>