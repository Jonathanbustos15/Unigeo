
<?php
	require_once "../Conexion/conexion.php";
	$conexion=conexion();
	$id_universidad=$_POST['id_universidad'];

	$sql="DELETE from universidad where id_universidad='$id_universidad'";
	echo $result=pg_query($sql);
 ?>
