<!DOCTYPE html>
<title>Restablecer contraseña</title>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body>
        <div class="">
        </div>
        <div class="modal fade" id="restablecer">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title text-center">¿Olvidaste tu contraseña?</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form class="p-5" action="../controlador/ControlMail.php" name="registro" id="registro" method="post">

                            <div class="col-md-12">

                                <div class="panel-body">
                                    <div class="text-justify">
                                        <p class="rest">Digite su Email y le envieremos un link para restablecer su
                                            contraseña.</p>
                                        <div class="panel">
                                            <fieldset>
                                                <div class="form-group">
                                                    <input class="form-control " placeholder="Dirección de correo" name="emailr" type="emailr" required>

                                                </div>
                                                <input class="btn btn-lg btn-block btn-email" id="registro" value="Enviar" type="submit">
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-close" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
