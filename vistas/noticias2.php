<!DOCTYPE html>
<html>
    <title>noticias</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php include("header.php"); ?>
    <script src="componentes/js/bootstrap.js" type="text/javascript"></script>
    <link href="componentes/css/Stylenoticias2.css" rel="stylesheet" type="text/css"/>
    <link href="componentes/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <body>
        <div class="container">
            <div class="row bt">
                <div class="col-6">
                    <button type="submit" class="btn btn-info" name="registrar">Crear</button>
                </div>  
                <div class="col-6">
                    <button type="submit" class="btn btn-info" name="registrar">Ver</button>
                </div>
            </div>
        </div>
        <div class="container filt">
            <div>
                <form>
                    <div class="form-inline">
                        <div class="px-4"><h4>Filtrar:</h4></div>
                        <div class="form-group col-6">
                            <label for="universidad" class="col-form-label px-2">Universidad</label>
                            <input type="text" name="universidad" class="form-control form-control-sm" placeholder="Universidad">
                        </div>
                        <div class="form-group col-4">
                            <label for="fecha" class="col-form-label pr-2">Fecha</label>
                            <input type="date" class="form-control form-control-sm" name="fecha" placeholder="State">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="container notice">
            <div class="row">
                <div class="col-5">
                    <img class="imag"src="componentes/images/universidad_distrital.jpg" alt=""/>
                </div>
                <div class="col-6 info">
                    <div>
                        <ul class="">
                            <li class="list-group-item">Universidad:</li>
                            <li class="list-group-item">Sede:</li>
                            <li class="list-group-item">Titulo:</li>
                            <li class="list-group-item">Descripcion:</li>
                            <li class="list-group-item">Fecha:</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container notice">
            <div class="row">
                <div class="col-5">
                    <img class="imag" src="componentes/images/antonio.jpg" alt=""/>
                </div>
               
                <div class="col-6 info">
                    <div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Universidad:</li>
                            <li class="list-group-item">Sede:</li>
                            <li class="list-group-item">Titulo:</li>
                            <li class="list-group-item">Descripcion:</li>
                            <li class="list-group-item">Fecha:</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


