
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
        $fun->id_ciudad = (htmlspecialchars($_POST['ciudad']));
        $fun->direccion = (htmlspecialchars($_POST['direccion']));
        $fun->telefono = (htmlspecialchars($_POST['telefono']));
        $fun->password = (htmlspecialchars($_POST['password1']));
        $fun->insertar();
        
    } catch (Exception $e) {
        echo "error: " . $e->getMessage();
        $_SESSION["rmensaje"] = $e->getMessage();
                 
    }
    

    header('Location: ../vistas/registro.php');
    