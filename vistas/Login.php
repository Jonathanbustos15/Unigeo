<!DOCTYPE html>
<html>
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
        <?php
        session_start();

        if (!empty($_SESSION['usuario'])) {
            session_destroy();
        }
        include("header.php");
        ?>
        <!-- formulario -->
        <section class="formulario container">

            <div class="row">
                <div class="panel_left col-4 d-xm-none">
                    <img src="componentes/images/unigeo.png" height="280px" alt="Logo"/>
                </div>

                <div class="panel_right col-8">
                    <div>
                        <p class="col-md-12 ">Inicio de sesion</p>

                    </div>

                    <form class="p-4" id="login" action="../Controlador/ControlLogin.php" name="login" method="post">
                        <!-- titulo -->

                        <!-- nombre -->
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="usuario" name="usuario"  placeholder="Usuario">
                            </div>
                        </div>

                        <!-- apellido-->
                        <div class="form-group row ">
                            <div class="col-md-12">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                            </div>
                        </div>

                        <div class="bt-sub">
                            <button type="submit"  id="login" class="bt-sub btn btn-info btn-block">Ingresar</button>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label check" for="customCheck1">Recordarme en este equipo</label>
                        </div>

                        <div class="">
                            <a class="px-2 a-rest" href="#restablecer" data-toggle="modal" data-target="#restablecer">¿Olvidó
                                sucontraseña?</a>
                            <a class="px-1 a-rest" href="registro.php">Crear cuenta</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <div class="container">
            <?php
            include 'resetmodal.php';
            if (!empty($_SESSION["mensajeu"])) {
                echo "<span class=' m-3 px-5 alert-danger'>" . $_SESSION["mensajeu"] . "</span>";
                session_destroy();
            }
            ?>

            <script type="text/javascript">
                $(".alert-danger").delay(8000).slideUp(200, function () {
                    $(this).alert('close');
                });
            </script>
        </div>
        <?php
        include "footer.php";
        ?>
    </body>
</html>