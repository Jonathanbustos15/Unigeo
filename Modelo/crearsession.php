<?php
	session_start();
	$iduni=$_POST['valor'];
	$_SESSION['consulta']= $iduni;
	echo $iduni;
 ?>
