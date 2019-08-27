<?php
include '../Modelo/ModelLogin.php';
$usuario = htmlspecialchars(addslashes($_POST['usuario']));
$password = htmlspecialchars(addslashes($_POST['password']));
$fun = new ModeloLogin();
$fun->checklogin($usuario, $password);

