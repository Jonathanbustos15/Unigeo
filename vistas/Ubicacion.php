<!DOCTYPE html>
<title>Ubicación</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<script src="componentes/js/bootstrap.js" type="text/javascript"></script>
<link href="componentes/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="componentes/css/Styleubicacion.css" rel="stylesheet" type="text/css"/>

<?php include("header.php"); ?>

<body>
    <section class="mg">
        <div class="container1">
            <div class="container2 row">
                <div class="col-4 mg1 p-4">
                    <div>
                        <form action="action">
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="">Valor</span>
                                </div>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Seleccione</option>
                                    <option value="1">1,000,000 - 2,000,000</option>
                                    <option value="2">2,000,000 - 3,000,000 </option>
                                    <option value="3">3,000,000 - 4,000,000</option>
                                </select>
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Universidad</span>
                                </div>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Seleccione</option>
                                    <option value="1">Fundacion universitaria San Jose</option>
                                    <option value="2">Universidad Nacional</option>
                                    <option value="3">Universidad Distrital</option>
                                </select>
                            </div>

<!--                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Sede</span>
                                </div>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Seleccione</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>-->

                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">carrera</span>
                                </div>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Seleccione</option>
                                    <option value="1">Ingenieria de sistemas</option>
                                    <option value="2">Administraccion de empresas</option>
                                    <option value="3">Contaduria publica</option>
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
                                    <option selected>Seleccione</option>
                                    <option value="1">Presencial</option>
                                    <option value="2">Semipresencial</option>
                                    <option value="3">Virtual</option>
                                </select>
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Localidad</span>
                                </div>
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Choose...</option>
                                    <option value="1">Fontibon</option>
                                    <option value="2">Kennedy</option>
                                    <option value="3">Chapinero</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-6 ml-3">
                    <div class="map">
                        <iframe src="https://qgiscloud.com/cristian_valencia/Unigeo/?bl=&st=&l=Google%20maps%2CUniversidades&t=Unigeo&e=-74.31279%2C4.53582%2C-73.84103%2C4.75167" width="1000" height="450" frameborder="0"></iframe>

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


