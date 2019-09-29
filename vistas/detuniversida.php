<!DOCTYPE html>
<html>
    <title>Menu</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php include("header.php"); ?>
    <script src="componentes/js/bootstrap.js" type="text/javascript"></script>
    <link href="componentes/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="componentes/css/Stylreguniversidad.css" rel="stylesheet" type="text/css"/>


    <body>

        <div class="container">
            <div class="row bt">
                <div class="col">
                    <button type="submit" class="btn btn-info" name="registrar">Registrar</button>
                </div>  
                <div class="col">
                    <button type="submit" class="btn btn-info" name="registrar">Ubicacion</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-success" name="registrar">Registro</button>
                </div>
            </div>
            <section class="tab">
                <div class="float-left">
                    <button type="submit" class="btn btn-secondary  m-5" name="registrar">Detalle</button>
                </div>
                <table class="table-hover table-responsive-sm">
                    <tbody>
                        <tr>
                            <th colspan="3">Universidad</th>
                        </tr>
                        <tr>
                            <td>NOMBRES</td>
                            <td>NIT</td>
                            <td>OPCIONES</td>

                        </tr>
                        <tr>
                            <td>Universidad 1</td>
                            <td>Universidad 2</td>
                            <td>  <a class="btnb" href="#">Editar</a></td>
                        </tr>
                        <tr>
                            <td>Universidad 1</td>
                            <td>Universidad 1</td>
                            <td>  <a class="btnb" href="#">Eliminar</a></td>
                        </tr>
                    </tbody>
                </table>
        </div>
</html>


