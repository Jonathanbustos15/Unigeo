<?php
session_start();
include '../Modelo/ModelReset.php';
$fun = new ModelReset;
$codigo = htmlspecialchars(addslashes($_POST['codigo']));
$password = htmlspecialchars(addslashes($_POST['password2']));
$fechaact = $fun->fechact;

echo $codigo . " " . $password . " " . $fechaact ;
