<!DOCTYPE html>
<title>Noticias</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<?php include("header.php"); ?>
<link href="componentes/css/Stylenoticias.css" rel="stylesheet" type="text/css"/>

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
                <button type="submit" class="btn btn-success" name="registrar">Agregar</button>
            </div>
        </div>
        <div class="tab">
            <table class="table-hover table-responsive-sm">
                <tbody>
                    <tr>
                        <th colspan="5">Noticias</th>
                    </tr>
                    <tr>
                        <td>Titulo</td>
                        <td>Descripcion</td>
                        <td>Universidad</td>
                        <td>Sede</td>
                        <td><a class="btnb" href="#">Opciones</a></td>
                    </tr>
                    <tr>
                        <td>Universidad 1</td>
                        <td>Universidad 2</td>
                        <td>Universidad 3</td>
                        <td>Universidad 4</td>
                        <td>  <a class="btnb" href="#">Editar</a></td>
                    </tr>
                    <tr>
                        <td>Universidad 1</td>
                        <td>Universidad 2</td>
                        <td>Universidad 3</td>
                        <td>Universidad 4</td>                        
                        <td>  <a class="btnb" href="#">Eliminar</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
</body>
</html>


