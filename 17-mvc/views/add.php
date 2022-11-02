<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>MVC - Adicionar Usuario </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-md-1 mt-5">
        <h1> <i class="fa fa-plus"></i> Adicionar Usuario</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="./">
                <i class="fa fa-users"></i>
                Lista de Usuarios
              </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Adicionar Usuario
            </li>
          </ol>
        </nav>
        <form action="./" method="post" enctype="multipart/form-data">
              <input type="hidden" name="method" value="store">
                <div class="form-group">
                  <label for="names">Nombre Completo:</label>
                  <input type="text" class="form-control" name="names" required>
                </div>
                <!--  -->
                <div class="form-group">
                  <label for="birthdate">Fecha Nacimiento:</label>
                  <input type="date" class="form-control" name="birthdate" placeholder="yyyy-mm-dd" required>
                </div>
                <!--  -->
                <div class="form-group">
                  <label for="email">Correo Electrónico:</label>
                  <input type="email" class="form-control" name="email" required>
                </div>
                <!--  -->
                <div class="form-group">
                  <label for="photo">Foto:</label>
                  <input type="file" class="form-control-file" accept="image/*" name="photo" required>
                </div>
                <!--  -->
                <div class="form-group">
                  <label for="password">Contraseña:</label>
                  <input type="password" class="form-control" name="password" required>
                </div>
                <!--  -->
                <div class="form-group">
                  <button class="btn btn-success">
                      <i class="fa fa-save"></i>
                      Guardar
                  </button>
                  <button type="reset" class="btn btn-dark">
                      <i class="fa fa-eraser"></i>
                      Limpiar
                  </button>
                </div>
              </form>
      </div>
    </div>
  </div>
  
</body>
</html>