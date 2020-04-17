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
                <a href="proyecto.php" class="navbar-brand">
                    <img src="componentes/images/UNIGEO1.png" width="180px" alt=""/></a>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <?php
                        $permisos = ($_SESSION['permisos']);
                        if (empty($_SESSION['usuario'])) {
                            //header("Location: Login.php");
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
                                    <?php if ($permisos[0]["crear"] == 1) { ?>
                                        <a class="dropdown-item" href="crearuniversidad.php">Crear universidad</a>
                                    <?php }if ($permisos[1]["crear"] == 1) { ?>
                                        <a class="dropdown-item" href="crearsede.php">Crear Sede</a>
                                    <?php } 
                                      if ($permisos[0]["editar"] == 1) { ?>
                                        <a class="dropdown-item" href="edituniversidad.php">Editar universidad</a>
                                    <?php } ?>

                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Carrera
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php if ($permisos[2]["crear"] == 1) { ?>
                                        <a class="dropdown-item" href="crearcarrera.php">Crear carrera</a>
                                    <?php } 
                                        if ($permisos[2]["consultar"] == 1) { ?>
                                        <a class="dropdown-item" href="#">Consultar carrera</a>
                                    <?php } ?>
                                </div>
                            </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Ruta
                                </a>
                                <?php if ($permisos[4]["ver"] == 1) { ?>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="ubicacion.php">ubicación</a>
                                    </div>
                                <?php } ?>
                            </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Noticias
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php if ($permisos[5]["crear"] == 1) { ?>
                                        <a class="dropdown-item" href="crearnoticia.php">Crear noticias</a>
                                    <?php } if ($permisos[6]["ver"] == 1) { ?>
                                        <a class="dropdown-item" href="noticias2.php">Noticias</a>
                                    <?php } ?>    
                                </div>
                            </li>

                        </div>

                        <div class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php
                                    echo $_SESSION['usuario'];
                                    ?>
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