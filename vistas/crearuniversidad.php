<!DOCTYPE html>

-
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link href="componentes/css/Stylecreauniversidad.css" rel="stylesheet" type="text/css"/>
        <link href="componentes/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <?php include("header.php"); ?>

        <div class="container cont">
            <div class="titulo" ><h4>Creacion de universidad</h4></div>
            <div class="row">
                <div class="col-4 pt-5 logo_U">
                    <img src="componentes/images/UNIGEO_1.png" alt="unigeo"/>
                </div>
                <!--panel derecho-->
                <div class="col-7  px-0">
                    <div class="container">
                        <form action="#" class="p-3 form">
                            <div></div>
                            <!--nombre-->
                            <div class="form-group pt-4">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="Nombre" placeholder="Nombre">
                            </div>
                            <!--nit-->
                            <div class="form-group pt-4">
                                <label for="nit">NIT</label>
                                <input type="text" class="form-control" id="Nombre" placeholder="NIT">
                            </div>
                            <!--option universidad-->
                            <div class="form-group pt-4">
                                <label for="enombre">Tipo de universidad </label>
                                <select class="custom-select form-control" name="universidad" id="inputGroupSelect01" placeholder="NIT">
                                    <option selected="selected">Seleccione una opción</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div>
                                <div class="form-group py-4">
                                    <label for="exampleFormControlFile1">Adjuntar Foto</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            </div>
                            <div class="pb-5">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</body>
</html>
