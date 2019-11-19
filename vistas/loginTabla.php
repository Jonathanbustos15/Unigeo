<?php
session_start();
require_once "../Conexion/conexion.php";
$conexion=conexion();

  if (isset($_SESSION['rol'])) {
  //  if ($_SESSION['rol'][0] == 1) {
      header("location: ./tablaUniversidades.php");
    }
//  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Usuario</title>
  </head>
  <body>
    <h1>Vamos a Ingresar</h1>
       <form class="" action="validaInicio.php" method="post">
         <label for=""> Usuario </label>
         <input type="text" name="usuario" value=""> <br>

         <label for=""> Contraseña </label>
         <input type="text" name="password" value="">

         <input type="submit" name="" value=" Entrar ">
       </form>
  </body>
</html>
