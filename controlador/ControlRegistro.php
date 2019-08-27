
<html>

    <head>
        <title>Registro</title>
        <meta charset="UTF-8">

        <link href="../web/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <!--<link href="../web/css/StyleRegistro.css" rel="stylesheet" type="text/css"/>-->
        <script src="../web/js/bootstrap.js" type="text/javascript"></script>
        <script src="../web/js/message.js" type="text/javascript"></script>
        <link href="../web/css/message_growl_dark.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0   ">
    </head>
    <?php
    include '../Modelo/ModelRegistro.php';
    require_once '../Modelo/Conexion.php';
    $fun = new ModelRegistro();
    try {
        $fun->nombre = (htmlspecialchars($_POST['nombre']));
        $fun->apellido = (htmlspecialchars($_POST['apellido']));
        $fun->email = (htmlspecialchars($_POST['mail']));
        $fun->fecnacimiento = (htmlspecialchars($_POST['fecha']));
        $fun->localidad = (htmlspecialchars($_POST['localidad']));
        $fun->sexo = (htmlspecialchars($_POST['sexo']));
        $fun->password = (htmlspecialchars($_POST['password1']));
        $fun->insertar();
        
        if ($fun->mensaje) {
            $_SESSION["gmensaje"] = true;
        }
    } catch (Exception $e) {
        echo "error: " . $e->getMessage();
    }

    header('Location: ../web/registro.php');
    