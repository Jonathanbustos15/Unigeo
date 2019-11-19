<?php
session_start();
require_once "../Conexion/conexion.php";
$conexion=conexion();

 $usuario = $_POST['usuario'];
 $password = $_POST['password'];

 $query = "SELECT id_tipo_usuario
        FROM usuario WHERE email_usuario = '$usuario' AND password = '$password'";

        $ejecutar = pg_query($query);
 				$ver = pg_fetch_array($ejecutar);

   if ($ver > 0 ) {
     $_SESSION['rol'] = $ver;
     header("location: ./tablaUniversidades.php");
   }else {
      echo 'DATOS INCORECTOS';
   }

 ?>
