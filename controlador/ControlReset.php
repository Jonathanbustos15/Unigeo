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
$fun->sendmail($usuario, $nombre, $token);
$fun->newpas($usuario, $token, $fecven);


