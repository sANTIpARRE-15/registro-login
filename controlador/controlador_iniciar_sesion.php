<?php 
if (isset($_POST["iniciar"])) {
   if (empty($_POST["usuario"]) && empty($_POST["contraseña"])) {
    echo "<div class='alert alert-warning' role='alert'>Todos los campos deben estar registrados</div>";
   } else {
    $usuario=$_POST["usuario"];
    $contraseña=$_POST["contraseña"];
    $sql=$conexion->query("select * FROM usuarios where usuario='$usuario' and contraseña='$contraseña'"); 
    if ($datos=$sql->fetch_object()) {
       header("location:inicio.php");
    } else {
        echo "<div class='alert alert-danger' role='alert'>Acceso denegado</div>";
    }
    

   }
   


?>
<script>
    // Esta línea de JavaScript reemplaza el estado de la historia del navegador sin recargar la página.
    // history.replaceState() cambia la URL actual, eliminando cualquier parámetro GET sin afectar el historial de navegación.
    // null: No se cambia el estado.
    // null: No se modifica el título de la página.
    // location.pathname: Mantiene la URL base (sin parámetros) sin recargar la página.
    history.replaceState(null, null, location.pathname);
    </script>


  <?php }