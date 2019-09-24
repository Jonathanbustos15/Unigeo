<!DOCTYPE html>
<title>Menu</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<script src="componentes/js/bootstrap.js" type="text/javascript"></script>
<link href="componentes/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="componentes/css/Styleubicacion.css" rel="stylesheet" type="text/css"/>

<?php include("header.php"); ?>

<body>
    <section class="mg">
        <div class="container1">
            <div class="row">
                <div class="col-4 mg1 p-4">
                    <div>
                        <form action="action">
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="">Valor</span>
                                </div>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Universidad</span>
                                </div>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Sede</span>
                                </div>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">carrera</span>
                                </div>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Tipo carrera</span>
                                </div>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Modalidad</span>
                                </div>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Localidad</span>
                                </div>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-6 a2 ml-5">
                    <div class="map">
                        <img src="componentes/images/Mapabpng.png" width="800" height="500" alt=""/>
                    </div>
                </div>

            </div>
        </div>
    </section>
   <section class="tab">
       
        <table class="table-hover table-responsive-sm">
            <tbody>
                <tr>
                    <th colspan="3">Detalles de la carrera</th>
                </tr>
                <tr>
                    <td>NOMBRE</td>
                    <td>SNIES</td>
                    <td>VALOR</td>
                   
                </tr>
                <tr>
                    <td>NOMBRE1</td>
                    <td>17892</td>
                    <td>$1564812</td>
                   
                </tr>
            </tbody>
        </table>
</html>
</body>


