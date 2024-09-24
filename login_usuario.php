<?php
$page = isset($_GET['page']) ? $_GET['page'] : 2; // Detecta la página actual, por ejemplo ?page=1
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylos.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Login</title>
</head>
<body  class="page-<?php echo $page; ?>">
<form class="col-5 m-4 shadow-lg rounded center " method="post">
  <?php 
     include "modelo/conexion.php" ; 
     include "controlador/controlador_iniciar_sesion.php";
   ?>
  <div class="mb-3 m-4 ">
    <label for="exampleInputEmail1" class="form-label">Usuario</label>
    <input name="usuario" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="mb-3 m-4">
    <label for="exampleInputPassword1" class="form-label">contraseña</label>
    <input name="contraseña" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button name="iniciar" type="submit" class="btn btn-primary m-4">Inicia Sesion</button>
</form>

    
</body>
</html>