<!DOCTYPE html>
<title>Login</title>
<meta charset="UTF-8">

<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="css/stylereset.css" type="text/css" />
<script src="js/Unigeo.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>

<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

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
    <!-- formulario -->

    <section class="formulario container">

        <div class="row">
           
            <div class="panel_right col-8">
                <div>
                    <p class="col-md-12 ">Restablecer contraseña</p>

                </div>

                <form class="p-4" action="../Controlador/ControlReset.php" method="post">
                    <!-- titulo -->


                    <!-- contraseña1 -->
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input type="password" class="form-control" id="usuario" name="password1"  placeholder="contraseña">
                        </div>
                    </div>

                    <!-- contraseña2-->
                    <div class="form-group row ">
                        <div class="col-md-12">
                            <input type="password" class="form-control" id="password" name="password2" value="80161528" placeholder="Repita contraseña">
                        </div>
                    </div>
                   
                    <br>


                    <div class="row">
                        <div class="bt-sub">
                            <button type="submit" class="bt-sub btn btn-info">Restablecer</button>
                        
                    </div>
                </form>
            </div>
        </div>
        <?php
        session_start();
        if (!empty($_SESSION["mensajeu"])) {
            echo "<span class='m-5 px-5 text-danger'>" . $_SESSION["mensajeu"] . "</span>";
            session_destroy();
        }
        ?>
    </section>

   
<?php
include "footer.php";
?>
</body>



</html>