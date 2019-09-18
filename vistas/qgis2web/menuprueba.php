<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Bootstrap 4 Static Navbar</title>
        <link href="../componentes/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      
        <script src="../componentes/js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="../componentes/js/popper.min.js" type="text/javascript"></script>
        <script src="../componentes/js/bootstrap.min.js" type="text/javascript"></script>
        <style type="text/css">
            .bs-example{
                margin: 20px;
            }
            .bg-nav
            {
                background-color:#45B6F2 ;

            }

        </style>
    </head>
    <body>
        <div class="bs-example">
            <nav class="navbar navbar-expand-md navbar-light bg-nav">
               
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                </button>
                <a href="#" class="navbar-brand">
                    <img src="../componentes/images/UNIGEO1.png" alt=""/>
                </a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="#" class="nav-item nav-link active">Home</a>
                        <a href="#" class="nav-item nav-link">Profile</a>
                        <a href="#" class="nav-item nav-link">Messages</a>
                        <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a>
                    </div>
                    <div class="navbar-nav ml-auto">
                        <a href="#" class="nav-item nav-link">Login</a>
                    </div>
                </div>
            </nav>
        </div>
    </body>
</html>                

