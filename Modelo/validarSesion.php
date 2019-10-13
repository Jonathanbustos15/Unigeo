<?php
 require_once conexion.php;
 $conexion = conexion();

$email_usuario= $_POST['email_usuario'];
$password= $_POST['password'];

 $sql="SELECT nombre_usuario, email_usuario, password, id_tipo_usuario FROM usuario
          WHERE email_usuario='$email' and password='$pass'";

       echo $result=pg_query($sql);

 ?>
