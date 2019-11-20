<!DOCTYPE html>
<title>Login</title>
<meta charset="UTF-8">

<link href="componentes/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="componentes/css/message_growl_dark.css" rel="stylesheet" type="text/css"/>
<link href="componentes/css/dhtmlxcalendar.css" rel="stylesheet" type="text/css"/>
<link href="componentes/css/stylereset.css" rel="stylesheet" type="text/css"/>
<script src="componentes/js/Unigeo.js" type="text/javascript"></script>
<script src="componentes/js/bootstrap.min.js" type="text/javascript"></script>
<script src="componentes/js/message.js" type="text/javascript"></script>
<script src="componentes/js/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="componentes/js/dhtmlxcalendar.js" type="text/javascript"></script>
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


<body  onload="doOnLoad();">
    <?php session_start(); ?>

    <?php include("header.php"); ?>

    <!-- formulario -->

    <section class="formulario container">

        <div class="">

            <div class="panel_right">
                <div>
                    <p class="col-md-12 ">Restablecer contraseña</p>

                </div>

                <form class="p-4" action="../controlador/ControlRestablece.php" method="post" name="registro" id="registro" onSubmit="pass()">
                    <!-- titulo -->

                    <!-- codigo -->
                    <div class="form-group">
                        <div class="">
                            <input type="text" class="form-control" id="codigo" name="codigo" autocomplete="off" value="33c7a2daee" placeholder="Código de seguridad">
                        </div>
                    </div>

                    <!-- contraseña1 -->
                    <div class="form-group">
                        <div class="">
                            <input type="password" class="form-control" id="password1" name="password1"  placeholder="contraseña" value="Aaa111**">
                        </div>
                    </div>
                    <!-- contraseña2-->
                    <div class="form-group">
                        <div class="">
                            <input type="password" class="form-control" id="password2" name="password2" placeholder="Repita contraseña" value="Aaa111**">
                            <small id="passwordHelpBlock" class="form-text text-muted">
                                la contraseña debe tener de 8-16 caracteres e incluir al menos una minúscula una mayúscula y un número
                            </small>
                        </div>
                    </div>
                    <br>
                    <div class="">
                        <div class="bt-sub">
                            <!--<button type="submit" class="btn btn-info btn-block" >Restablecer</button>-->
                            <button type="button" id="enviar" name="enviar" class="btn btn-info btn-block" onclick="pass();" >Restablecer</button>
                        </div>
                </form>
            </div>
        </div>
        <?php
        if (!empty($_SESSION["mensajeu"])) {
            echo "<span class='m-5 py-2 text-danger'>" . $_SESSION["mensajeu"] . "</span>";
            session_destroy();
        }

        if (!empty($_SESSION["mensajer"])) {
            echo "<span class='m-5 py-2 text-success'>" . $_SESSION["mensajer"] . "</span>";
            session_destroy();
        }
        ?>
    </section>

    <?php
    include "footer.php";
    ?>
</body>



</html>