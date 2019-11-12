<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="componentes/js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="componentes/js/popper.min.js" type="text/javascript"></script>
        <script src="componentes/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="componentes/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="componentes/css/Stylehead.css" rel="stylesheet" type="text/css"/>

    </head>
    <?php session_start(); ?>
    <body>
        <div class="menu">
            <nav class="navbar fixed-top navbar-expand-md nav-bg heade">

                <button type="button" class="navbar-toggler navbar-dark" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <img src="componentes/images/UNIGEO1.png" width="180px" alt=""/>
                <a href="Login.php" class="navbar-brand"></a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <?php
                        if (empty($_SESSION['usuario'])) {
                            ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Inicio
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="login.php">Iniciar sesión</a>
                                    <a class="dropdown-item" href="registro.php">Registrarse</a>
                                </div>
                            </li>
                            <?php
                        } else {
                            ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Universidad
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="crearuniversidad.php">Crear universidad</a>
                                    <a class="dropdown-item" href="detuniversidad.php">Detalle de universidad</a>
                                    <a class="dropdown-item" href="universidad.php">Editar universidad</a>
                                    <a class="dropdown-item" href="ubicacion.php">ubicación</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sede
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="crearsede.php">Crear sede</a>
                                    <a class="dropdown-item" href="detuniversidad.php">Detalle de sede</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Carrera
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="crearcarrera.php">Crear carrera</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Noticias
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="noticias.php">Noticias</a>
                                    <a class="dropdown-item" href="noticias2.php">Noticias 2</a>
                                    <a class="dropdown-item" href="crearnoticia.php">Crear noticias</a>
                                </div>
                            </li>

                        </div>


                        <div class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo $_SESSION['usuario']; ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#restablecer" data-toggle="modal" data-target="#restablecer">Restablecer contraseña</a>
                                    <a class="dropdown-item" href="cerrar_sesion.php">Cerrar sesión</a>
                                </div>
                            </li>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="imgjose ml-auto d-none d-md-block">
                    <img src="componentes/images/SanjoseLog2_1.png"  width="180px" alt=""/>
                </div>
            </nav>
        </div>
        <?php
        if (!empty($_SESSION['usuario'])) {
            include 'resetmodal.php';
        }
        ?>
    </body>
</html>                              