<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link href="componentes/css/Styleproyecto.css" rel="stylesheet" type="text/css"/>
        <link href="componentes/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>Proyecto</title>
    </head>
    <body id="corpse">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Features</a>
                    <a class="nav-item nav-link" href="#">Pricing</a>
                    <a class="nav-item nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </div>
            </div>
        </nav>

        <input type="color" id="colo">

        <script>
            var fondo = document.getElementById("corpse");
            //var colorWeb=prompt("color");
            //var colorWeb = document.getElementById("colo").value;

            while (n < 3) {
                n++;
                x += n;
                corpse.style.backgroundColor = "# + 00000" + x;
            }



        </script>

        <header>
            <div class="container menu">
                <div class="row  ">
                    <div class="col-2 menusub">
                        Inicio
                    </div>
                    <div class="col-2 menusub">
                        Ruta
                    </div>
                    <div class="col-2 menusub">
                        Universidad
                    </div>
                    <div class="col-2 menusub">
                        Noticias
                    </div>
                    <div class="col-2 menusub">
                        Usuario
                    </div>
                </div>

            </div>
        </header>

    </body>
</html>
