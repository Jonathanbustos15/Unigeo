<?php

	require_once "../Conexion/conexion.php";
	$conexion=conexion();

	$nit=$_POST['nit'];
	$nombre=$_POST['nombre'];
	$direccion=$_POST['direccion'];
	$cx=$_POST['cx'];
	$cy=$_POST['cy'];
  $telefono=$_POST['telefono'];
  $email=$_POST['email'];



	$sql="INSERT INTO universidad(nit, nombre, direccion, cx, cy, telefono, email, estado)
                      VALUES ('$nit', '$nombre', '$direccion', '$cx', '$cy', '$telefono', '$email', '1')";

	 echo $ejecutar=pg_query($sql);

 ?>
