<!DOCTYPE html>

-->
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link href="componentes/css/Stylecreauniversidad.css" rel="stylesheet" type="text/css"/>

        <title></title>
    </head>
    <body>
        <?php include("header.php"); ?>

        <div class="container cont">
            <div class="row">
                <div class="col-4 pt-5">
                    <img src="componentes/images/UNIGEO_1.png" alt="unigeo"/>
                </div>
                <!--panel derecho-->
                <div class="col-8  px-0">
                    <div class="container">

                        <form action="#" class="p-3 form">
                            <div></div>
                            <!--nombre-->
                            <div class="form-group">
                                <label for="enombre">Nombre</label>
                                <input type="email" class="form-control" id="Nombre" placeholder="Nombre">
                            </div>
                        </form>  
                        <div>
                            <select class="custom-select p-3 form" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<