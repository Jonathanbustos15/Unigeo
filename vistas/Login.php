<!DOCTYPE html>
<title>Login</title>
<meta charset="UTF-8">


<link href="componentes/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="componentes/js/Unigeo.js" type="text/javascript"></script>
<script src="componentes/js/bootstrap.js" type="text/javascript"></script>
<script src="componentes/js/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="componentes/js/popper.min.js" type="text/javascript"></script>
<link href="componentes/css/Stylelog.css" rel="stylesheet" type="text/css"/>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<script>
    $(window).scroll(function () {
        if ($(this).scrollTop() > 1) {
            $('header').addClass("sticky");
        } else {
            $('header').removeClass("sticky");
        }
    });
</script>



<body>
    <?php include("header.php");?>
    
    <!-- formulario -->

    <section class="formulario container">

        <div class="row">
            <div class="panel_left col-4 d-xm-none">
                <img src="componentes/images/unigeo.png" alt="Logo"/>
            </div>

            <div class="panel_right col-8">
                <div>
                    <p class="col-md-12 ">Inicio de sesion</p>

                </div>

                <form class="p-4" action="../Controlador/ControlLogin.php" method="post">
                    <!-- titulo -->

                    <!-- nombre -->
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="usuario" name="usuario" value="jeisonmzapata@outlook.com" placeholder="Usuario">
                        </div>
                    </div>

                    <!-- apellido-->
                    <div class="form-group row ">
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="password" name="password" value="80161528" placeholder="Contraseña">
                        </div>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label check" for="customCheck1">Recordarme en este equipo</label>
                    </div>
                    <br>


                    <div class="row">
                        <div class="bt-sub">
                            <button type="submit" class="bt-sub btn btn-info">Ingresar</button>
                        </div>
                        <div class="px-1 sm-col-right border-top">
                            <a class="px-3 a-rest" href="#restablecer" data-toggle="modal" data-target="#restablecer">¿Olvidó
                                sucontraseña?</a>
                            <a class="px-3 a-rest" href="registro.php">Crear cuenta</a>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        <?php
        if (!empty($_SESSION["mensajeu"])) {
              $_SESSION['mensajeu'] = 'Usuario o contraseña incorrecta, intenta de nuevo';
            echo "<span class='m-5 px-5 text-danger'>" . $_SESSION["mensajeu"] . "</span>";
            session_destroy();
        }
         echo "<span class='m-5 px-5 text-danger'>" . $_SESSION["mensajeu"] . "</span>";
        ?>
    </section>

    <aside>
        <!-- The Modal -->
        <div class="modal fade" id="restablecer">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title text-center">¿Olvidaste tu contraseña?</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form class="p-5" action="../controlador/controlReset.php" name="registro" id="registro" method="post">

                            <div class="col-md-12">

                                <div class="panel-body">
                                    <div class="text-justify">
                                        <p class="rest">Digite su Email y le envieremos un link para restablecer su
                                            contraseña.</p>
                                        <div class="panel">
                                            <fieldset>
                                                <div class="form-group">
                                                    <input class="form-control " placeholder="Dirección de correo"
                                                           name="emailr" type="emailr">
                                                </div>
                                                <input class="btn btn-lg btn-block btn-email"  value="Enviar" type="submit">
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            </for>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-close" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<?php
include "footer.php";
?>
</body>



</html>