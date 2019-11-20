<?php

include '../Modelo/ModelReset.php';
$fun = new ModelReset;
$codigo = htmlspecialchars(addslashes($_POST['codigo']));
$pass = htmlspecialchars(addslashes($_POST['password2']));
$fechaact = $fun->fechact();
$password = password_hash($pass, PASSWORD_DEFAULT);

if ($fun->consulta_codigo($codigo, $fechaact)) {
    $fun->restablece_pass($codigo, $fechaact, $password);
    header('Location: ../vistas/Login.php');
} else {
    $_SESSION["mensajeu"] = 'Codigo errado, vencido o ya usado';
    header('Location: ../vistas/Reset.php');
}


