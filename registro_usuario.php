
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Registro</title>
    <link rel="stylesheet" href="stylos.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body >
<a type="button" href="./login_usuario.php" class=" btn btn-success top-right btn-lg">Iniciar Sesion</a>
<form class="col-5 m-4 shadow-lg rounded center " method="post">
  <?php 
     include "modelo/conexion.php" ;
     include "controlador/controlador_registrar_usuario.php"; 
   ?>
  <div class="mb-3 m-4 ">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input name="nombre" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3 m-4 ">
    <label for="exampleInputEmail1" class="form-label">Apellido</label>
    <input name="apellido" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3 m-4 ">
    <label for="exampleInputEmail1" class="form-label">Usuario</label>
    <input name="usuario" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">elijan un nombre único, fácil de recordar y sin espacios.</div>
  </div>
  <div class="mb-3 m-4">
    <label for="exampleInputPassword1" class="form-label">contraseña</label>
    <input name="contraseña" type="password" class="form-control" id="exampleInputPassword1">
  </div>
 
  <button name="registrarme" type="submit" class="btn btn-primary m-4">registrarme</button>
</form>
</body>
</html>