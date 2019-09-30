<!DOCTYPE html>
<html>
    <title>Detalle Universidad</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="componentes/js/bootstrap.js" type="text/javascript"></script>
    <link href="componentes/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="componentes/css/Stylreguniversidad.css" rel="stylesheet" type="text/css"/>
     <?php include("header.php"); ?>


    <body>

        <div class="container">
            <div class="row bt">
                <div class="col-10">
                    <button type="submit" class="btn btn-info" name="sedes">Sedes</button>
                </div>  

                <div class="col-2">
                    <button type="submit" class="btn btn-success" name="asedes">Agregar Sede</button>
                </div>
            </div>
            <section class="tab">
                <div class="float-left">
                    <button type="submit" class="btn btn-secondary  m-5" name="registrar">Detalle</button>
                </div>
                <table class="table-hover table-responsive-sm">
                    <tbody>
                        <tr>
                            <th colspan="4">Detalle de Universidad</th>
                        </tr>
                        <tr>
                            <td>NOMBRES</td>
                            <td>TELEFONO</td>
                            <td>DIRECCIÓN</td>
                            <td>OPCIONES</td>

                        </tr>
                        <tr>
                            <td>Nombre 1</td>
                            <td>Telefono 1</td>
                            <td>Dirección 1</td>
                            <td>  <a class="btnb" href="#">Editar</a></td>
                        </tr>
                        <tr>
                            <td>Nombre 2</td>
                            <td>Telefono 2</td>
                            <td>Dirección 2</td>
                            <td>  <a class="btnb" href="#">Eliminar</a></td>
                        </tr>
                    </tbody>
                </table>
        </div>
</html>


