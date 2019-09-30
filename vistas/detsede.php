<!DOCTYPE html>
<html>
    <title>Detalle Sede</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php include("header.php"); ?>
    <script src="componentes/js/bootstrap.js" type="text/javascript"></script>
    <link href="componentes/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="componentes/css/Stylreguniversidad.css" rel="stylesheet" type="text/css"/>


    <body>

        <div class="container">
            <div class="row bt">
                <div class="col-8">
                    <button type="submit" class="btn btn-info" name="sedes">Registrar carreras</button>
                </div>  

                <div class="col">
                    <button type="submit" class="btn btn-success" name="asedes">Agregar carreras</button>
                </div>
            </div>
            <section class="tab">

                <table class="table-hover table-responsive-sm">
                    <tbody>
                        <tr >
                    <th class="mx-auto" colspan="6">Detalle Sede</th>
                    </tr>
                    <tr>
                        <td>NOMBRES</td>
                        <td>CANTIDAD DE ESTUDIANTES</td>
                        <td>INSTITUCIÓN</td>
                        <td>GRADO</td>
                        <td>TUTOR</td>
                        <td><a class="btnb" href="#">OPCIONES</a></td>

                    </tr>
                    <tr>
                        <td>Grupo 1</td>
                        <td>100</td>
                        <td>Institucion 1</td>
                        <td>Grado 1</td>
                        <td>Funcionario 1</td>
                        <td>  <a class="btnb" href="#">Editar</a></td>
                    </tr>
                    <tr>
                        <td>Grupo 2</td>
                        <td>100</td>
                        <td>Institucion 2</td>
                        <td>Grado 2</td>
                        <td>Funcionario 2</td>
                        <td>  <a class="btnb" href="#">Eliminar</a></td>
                    </tr>
                    </tbody>
                </table>
        </div>
</html>


