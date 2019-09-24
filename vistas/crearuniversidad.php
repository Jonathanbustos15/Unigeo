<!DOCTYPE html>

-->
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link href="componentes/css/Stylecreauniversidad.css" rel="stylesheet" type="text/css"/>
        <script>
            // Material Select Initialization
            $(document).ready(function () {
                $('.mdb-select').materialSelect();
                $('.select-wrapper.md-form.md-outline input.select-dropdown').bind('focus blur', function () {
                    $(this).closest('.select-outline').find('label').toggleClass('active');
                    $(this).closest('.select-outline').find('.caret').toggleClass('active');
                });
            });</script>
        <title></title>
    </head>
    <body>
        <?php include("header.php"); ?>

        <div class="container cont">
            <form>
                <div class="form-group"> 
                    <label for="nombre" class="control-label">Nombre</label>
                    <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" placeholder="Nombre">

                </div>    

                <div class="form-group"> 
                    <label for="nit" class="control-label">nit</label>
                    <input type="text" class="form-control form-control-sm" id="nit" name="nit" placeholder="NIT">
                </div>    


                <div class="row">
                    <div class="col-md-6 select-outline">

                        <select class="mdb-select md-form md-outline colorful-select dropdown-primary">
                            <option value="" disabled selected>Choose your option</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                        <label>Example label</label>

                    </div>
                </div>


                <div class="form-group"> <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Buy!</button>
                </div>     

            </form>


        </div>




    </body>




</html>
<