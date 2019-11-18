<html>
    <head>
    <a href="src/PHPMailer.php"></a>
    <title>mail</title>

</head>
<body>

</body>
</html>

<?php
require '../Modelo/ModelLogin.php';
$fun = new ModeloLogin();
$usuario = $_POST['emailr'];
$dts = array();
$dts = $fun->recpass($usuario);
$token = $fun->token();
$fecven = $fun->fechaven();
$nombre = $dts['nombre'];
$apellido = $dts['apellido'];
try {
    if ($fun->newpas($usuario, $token, $fecven)) {
        $fun->sendmail($usuario, $nombre, $token);
        $_SESSION['mensajeu'] = "Mensaje enviado correctamente";
        header('location: ../vistas/reset.php');
    }
} catch (Exception $exc) {
    $_SESSION['mensajeu'] = "El mensaje no puede ser enviado. Mailer Error: " . $exc->getTraceAsString();
    header('location: ../vistas/login.php');
}







