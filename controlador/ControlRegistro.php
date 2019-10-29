
<html>

    <head>
        <title>Registro</title>
        <meta charset="UTF-8">

        <link href="../vistas/componentes/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../vistas/componentes/js/message.js" type="text/javascript"></script>
        <link href="../vistas/componentes/css/message_growl_dark.css" rel="stylesheet" type="text/css"/>

        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    </head>
    <?php
    try {
        session_start();
        include '../Modelo/ModelRegistro.php';
        require_once '../conexion/conexion.php';
        $fun = new ModelRegistro();

        $fun->nombre = (htmlspecialchars($_POST['nombre']));
        $fun->apellido = (htmlspecialchars($_POST['apellido']));
        $fun->email = (htmlspecialchars($_POST['mail']));
        $fun->fecnacimiento = (htmlspecialchars($_POST['fecha']));
        //$fun->localidad = (htmlspecialchars($_POST['localidad']));
        //$fun->sexo = (htmlspecialchars($_POST['sexo']));
        $fun->password = (htmlspecialchars($_POST['password1']));
        $fun->insertar();

        if ($fun->mensaje) {
            //$_SESSION["gmensaje"] = true;
            $_SESSION["gmensaje"] = 'bien';
        }
    } catch (Exception $e) {
        echo "error: " . $e->getMessage();
        $_SESSION["gmensaje"] = $e->getMessage();
        $_SESSION["gmensaje"] = 'error';
    }
   
    echo "<span class='m-5 px-5 text-danger'>" .  $_SESSION["ermensaje"] . "</span>";

    //header('Location: ../vistas/newEmptyPHP.php');
    