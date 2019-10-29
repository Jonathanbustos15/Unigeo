<!DOCTYPE html>

<?php
require_once '../Conexion/Conexion.php';
?>

<html>

    <head>
        <title>Registro</title>
        <meta charset="UTF-8">
        <link href="componentes/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="componentes/css/message_growl_dark.css" rel="stylesheet" type="text/css"/>
        <link href="componentes/css/dhtmlxcalendar.css" rel="stylesheet" type="text/css"/>
        <script src="componentes/js/bootstrap.js" type="text/javascript"></script>
        <script src="componentes/js/message.js" type="text/javascript"></script>
        <script src="componentes/js/Unigeo.js" type="text/javascript"></script>
        <script src="componentes/js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="componentes/js/dhtmlxcalendar.js" type="text/javascript"></script>
        <script src="componentes/js/controlpass.js" type="text/javascript"></script>
        <link href="componentes/css/StyleRegistro.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0">

    </head>

    <body  onload="doOnLoad();">
        <?php
        include 'Header.php';
        ?>
        <h1>
            <?php
            if (!empty($_SESSION["gmensaje"])) {

                if ($_SESSION["gmensaje"]) {
                    echo '<script>boxB()</script>';
                    session_destroy();
                } else {
                    
                }
            }
            ?>
        </h1>
        <section class="border formulario container">
            <form class="px-5" action="../controlador/ControlRegistro.php" name="registro" id="registro" method="post" onSubmit="pass()">
                <!-- titulo -->
                <div class="p-3">
                    <h1>Registro</h1>
                    <hr class="col-12 border text-center" />
                </div>


                <!-- nombre -->
                <div class="form-group row">
                    <label for="nombre" class="d-none d-md-block col-sm-3 col-form-label">Nombre:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre">
                    </div>
                </div>

                <!-- apellido -->
                <div class="form-group row">
                    <label class="d-none d-md-block col-sm-3 col-form-label" for="apellido">Apellidos:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingrese su apellido">
                    </div>
                </div>

                <!-- Email -->
                <div class="form-group row">
                    <label class="d-none d-md-block col-sm-3 col-form-label" for="mail">Email:</label>
                    <div class="col-md-8">
                        <input type="email" class="form-control" name="mail" id="mail" aria-describedby="emailHelp" placeholder="Ingrese su email">
                        <!--  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small> -->
                    </div>
                </div>

                <!-- fechaNacimiento -->
                <div class="form-group row">
                    <label class="d-none d-md-block col-sm-3 col-form-label" for="fecha">Fecha de nacimiento:</label>
                    <div class="col-md-8">
                        <input type="tex" class="form-control" name="fecha" id="fecha" pattern="[0-9_-]{1,15}" required placeholder="fecha de nacimiento">
                    </div>
                </div>

                <!-- Localidad -->
                <div class="form-group row">
                    <label class="d-none d-md-block col-sm-3 col-form-label" for="Localidad">Localidad:
                    </label>
                    <div class="col-md-8">
                        <select class="custom-select" name="localidad" id="localidad">
                            <option disabled selected>Selecciona localidad</option>
                            <option>Chapinero</option>
                            <option>Teusaquillo</option>
                            <option>La Candelaria</option>
                            <option>Usaquén</option>
                        </select>
                    </div>
                </div>

                <!-- Sexo -->
                <div class="form-group row">
                    <label class="d-none d-md-block col-sm-3 col-form-label" for="sexo">Sexo:
                    </label>
                    <div class="col-md-8">
                        <select class="custom-select" name="sexo" id="sexo">
                            <option disabled selected>Selecciona Sexo</option>
                            <option>Masculino</option>
                            <option>Femenino</option>
                        </select>
                    </div>
                </div>

                <!-- contraseña -->
                <div class="form-group row">
                    <label class="d-none d-md-block col-sm-3 col-form-label" for="contraseña">Contraseña:</label>
                    <div class="col-md-4">
                        <input type="password" class="form-control" name="password1" id="password1" placeholder="Contraseña">
                    </div>
                    <div class="col-md-4">
                        <input type="password" class="form-control" name="password2" id="password2" placeholder="Confirme su contraseña">
                    </div>
                </div>
                <br>
                <div class="bt-sub form-group row">
                    <div class="">
                        <button type="button" id="enviar" name="enviar" class="bt-sub btn btn-outline-info" onclick="pass();" >Crear cuenta</button>
                    </div>
                    <!--                    <div id="pswd_info" class=""> 
                                            <div id="letter" class="invalid">Al menos <strong>1 letra</strong></span>
                                                <div id="capital" class="invalid">Al menos <strong>1 letra en mayuscula</strong></span>
                                                    <div id="number" class="invalid">Al menos <strong>1 numero</strong></span>
                                                        <div id="length" class="invalid">Al menos <strong>8 caracteres</strong></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                    <?php
                    if (!empty($_SESSION["ermensaje"])) {
                        $error = $_SESSION["ermensaje"];
                        echo '<script language="javascript">';

                        echo 'dhtmlx.alert({title: "Error!",
                              type: "confirm-error",
                              text: "' . $error . '"});';
                        echo '</script>';
                        session_destroy();
                    } else {
                        
                    }
                    ?>
            </form>
        </div>
    </section>


    <!--                          
    <?php
    include 'footer.php';
    ?>
            
                                </body>
    
                                </html>