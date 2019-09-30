<!DOCTYPE html>

-
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
          <link href="componentes/css/Stylecrearcarrera.css" rel="stylesheet" type="text/css"/>
        <link href="componentes/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <title>Crear carrera</title>
      
    </head>
    <body>
        <?php include("header.php"); ?>

        <div class="container cont">
            <div class="titulo" ><h4>Creacion de carrera</h4></div>
            <div class="row">
                <div class="col-4 pt-5 logo_U">
                    <img src="componentes/images/UNIGEO_1.png" alt="unigeo"/>
                </div>
                <!--panel derecho-->

                <div class="col-7  px-0">
                    <div class="container">
                        <form action="#" class="p-3 form">
                            <!--faculta-->
                            <div class="form-group ">
                                <label for="faculta">Facultad </label>
                                <select class="custom-select form-control" name="facultad" id="inputGroupSelect01" placeholder="Facultad">
                                    <option selected="selected">Seleccione una opción</option>
                                    <option value="ingenieria">Ingenieria</option>
                                    <option value="diseño">Diseño</option>
                                    <option value="administracion">Administración</option>
                                </select>
                            </div>

                            <!--nombre-->
                            <div class="form-group ">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="Nombre" placeholder="Nombre">
                            </div>
                            
                            <!--nformacion-->
                            <div class="form-group ">
                                <label for="nformacion">Nivel de formación</label>
                                <select class="custom-select form-control" name="nformacion" id="inputGroupSelect01" placeholder="Facultad">
                                    <option selected="selected">Seleccione una opción</option>
                                    <option value="tecnico">Tecnico</option>
                                    <option value="tecnologo">Tenologo</option>
                                    <option value="profesional">Profesional</option>
                                </select>
                            </div>
                            
                            <!--Modalidad-->
                            <div class="form-group ">
                                <label for="nformacion">Modalidad</label>
                                <select class="custom-select form-control" name="modalidad" id="inputGroupSelect01" placeholder="Facultad">
                                    <option selected="selected">Seleccione una opción</option>
                                    <option value="presencial">Presencial</option>
                                    <option value="semipresencial">Semipresencial</option>
                                    <option value="virtual">virtual</option>
                                </select>
                            </div>
                            
                             <!--Duracion-->
                            <div class="form-group ">
                                <label for="nformacion">Duración</label>
                                <select class="custom-select form-control" name="duracion" id="inputGroupSelect01" placeholder="Facultad">
                                    <option selected="selected">Seleccione una opción</option>
                                    <option value="5">5 semestres</option>
                                    <option value="8">8 semestres</option>
                                    <option value="10">10 semestres</option>
                                </select>
                            </div>

                            <!--valor-->
                            <div class="form-group ">
                                <label for="valor">Valor</label>
                                <input type="text" class="form-control" id="valor" placeholder="Valor">
                            </div>
                            
                            <!--snies-->
                            <div class="form-group ">
                                <label for="snies">SNIES</label>
                                <input type="text" class="form-control" id="snies" placeholder="ESNIES">
                            </div>
                            
                             <!--snies-->
                            <div class="form-group ">
                                <label for="snies">Registro de calida</label>
                                <input type="text" class="form-control" id="snies" placeholder="Registro de calidad">
                            </div>
                            
                            <div class="py-3">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>  
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
</div>
</div>

</body>
</html>
