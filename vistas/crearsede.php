<!DOCTYPE html>

-
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link href="componentes/css/Stylecrearcarrera.css" rel="stylesheet" type="text/css"/>
        <link href="componentes/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <title>Crear sede</title>

    </head>
    <body>
        <?php include("header.php"); ?>

        <div class="container cont">
            <div class="titulo" ><h4>Nueva sede</h4></div>
            <div class="row">
                <div class="col-4 pt-5 logo_U">
                    <img src="componentes/images/UNIGEO_1.png" alt="unigeo"/>
                </div>
                <!--panel derecho-->

                <div class="col-7  px-0">
                    <div class="container">
                        <form action="#" class="p-3 form">

                            <!--nombre-->
                            <div class="form-group ">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="Nombre" placeholder="Nombre">
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

                            <!--telefono-->
                            <div class="form-group ">
                                <label for="telefono">Telefono</label>
                                <input type="tel" class="form-control" id="telefono" placeholder="Telefono">
                            </div>

                            <!--direccion-->
                            <div class="form-group ">
                                <label for="direccion">Direccion</label>
                                <input type="text" class="form-control" id="direccion" placeholder="Direccion">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-6">
                                    <label for="direccion">Coordenada X</label>
                                    <input type="text" class="form-control" id="inputUser" placeholder="Cordenada X">
                                </div>
                                <div class="form-group col-6">
                                    <label for="direccion">Coordenada Y</label>
                                    <input type="password" class="form-control" id="inputPass" placeholder="Cordenada Y">
                                </div>
                            </div>
                            <!--Email-->
                            <div class="form-group ">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="direccion" placeholder="Email">
                            </div>

                            <!--Facultades-->
                            <div class="form-group ">
                                <label for="nformacion">Facultades</label>
                                <select class="custom-select form-control" name="modalidad" id="inputGroupSelect01" placeholder="Facultad">
                                    <option selected="selected">Seleccione una opción</option>
                                    <option value="presencial">Arquitectura</option>
                                    <option value="semipresencial">Ingenieria</option>
                                    <option value="virtual">Ciencias Exactas</option>
                                </select>
                            </div>

                            <div class="py-3">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
</div>

</body>
</html>
