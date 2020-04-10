<?php

//session_start();
include '../Modelo/ModelLogin.php';
$usuario = htmlspecialchars(addslashes($_POST['usuario']));
$password = htmlspecialchars(addslashes($_POST['password']));
$fun = new ModeloLogin();
$login = $fun->checklogin($usuario, $password);
$datos = $fun->getpermiso($_SESSION['tipousuario']);
if ($login) {
    header('Location: ../vistas/proyecto.php');
}

