<?php
	require_once "../Conexion/conexion.php";
	$conexion=conexion();

	$id_universidad=$_POST['id_universidad'];
	$nit=$_POST['nit'];
	$nombre=$_POST['nombre'];
	$direccion=$_POST['direccion'];
	$cx=$_POST['cx'];
	$cy=$_POST['cy'];
  $telefono=$_POST['telefono'];
  $email=$_POST['email'];




	$sql="UPDATE universidad SET nit='$nit',
								nombre='$nombre',
								direccion='$direccion',
								cx='$cx',
								cy='$cy',
								telefono='$telefono',
								email='$email'
				WHERE id_universidad= '$id_universidad'";

	echo $result=pg_query($sql);

 ?>
