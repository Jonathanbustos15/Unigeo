<!DOCTYPE html>

-
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link href="componentes/css/Stylecreauniversidad.css" rel="stylesheet" type="text/css"/>
        <link href="componentes/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php include("header.php"); ?>
        <title>Crear universidad</title>
    </head>
    <body>


        <div class="container cont">
            <div class="titulo" ><h4>Crear Noticia</h4></div>
            <div class="row">
                <div class="col-4 pt-5 logo_U">
                    <img src="componentes/images/Unigeo.png" width="300" alt="unigeo"/>
                </div>
                <!--panel derecho-->
                <div class="col-7  px-0">
                    <div class="container">
                        <form action="#" class="p-2 form">
                            <div></div>
                            <!--nombre-->
                            <div class="form-group pt-2">
                                <label for="titulo">Titulo</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo">
                            </div>

                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <textarea class="form-control rounded-0" id="descripcion" name="descripcion" rows="3"></textarea>
                            </div>
                           <!--universidad-->
                            <div class="form-group ">
                                <label for="faculta">Universidad</label>
                                <select class="custom-select form-control" name="facultad" id="inputGroupSelect01" placeholder="Facultad">
                                    <option selected="selected">Seleccione una opción</option>
                                    <option value="unacional">Universidad Nacional</option>
                                    <option value="udistrital">Universidad Distrital</option>
                                    <option value="ujaveriana">Universidad Javeriana</option>
                                </select>
                            </div>

                            <!--option sede-->
                            <div class="form-group pt-2">
                                <label for="sede">Sede</label>
                                <select class="custom-select form-control" name="sede" id="sede" placeholder="sede">
                                    <option selected="selected">Seleccione una opción</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div>
                                <div class="form-group py-4">
                                    <label for="foto">Adjuntar Foto</label>
                                    <input type="file" class="form-control-file" id="foto" name="foto">
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
