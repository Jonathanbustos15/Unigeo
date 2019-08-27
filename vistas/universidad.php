<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php 
  include "Header.php";
?>

<body>
  <section class="container">
    <div Class="row">
      <div class="Col-1">
        <div class="table-responsive">
          <TABLE>
            <tr>
              <td colspan="1">
                <form class="well form-horizontal">
                  <fieldset>
                    <div class="form-group">
                      <label class="col-md-4 control-label">Ciudad </label>
                      <div class="col-md-8 inputGroupContainer">
                        <div class="input-group">
                          <span class="input-group-addon" style="max-width: 100%;"><i
                              class="glyphicon glyphicon-list"></i></span>
                          <select class="selectpicker form-control">
                            <option>Bogotá</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                </form>
              </td>
                </tr>
                      <tr>
                        <td colspan="1">
                          <form class="well form-horizontal">
                            <fieldset>
                              <div class="form-group">
                                <label class="col-md-4 control-label">Carrera</label>
                                <div class="col-md-8 inputGroupContainer">
                                  <div class="input-group"><span class="input-group-addon"><i
                                        class="glyphicon glyphicon-home"></i></span><input id="Carrera" name="Carrera"
                                      placeholder="Carrera" class="form-control" required="true" value="" type="text"></div>
                                </div>
                              </div>
                            </fieldset>
                          </form>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1">
                          <form class="well form-horizontal">
                            <fieldset>
                              <div class="form-group">
                                <label class="col-md-4 control-label">Universidad</label>
                                <div class="col-md-8 inputGroupContainer">
                                  <div class="input-group">
                                    <span class="input-group-addon" style="max-width: 100%;"><i
                                        class="glyphicon glyphicon-list"></i></span>
                                    <select class="selectpicker form-control">
                                      <option>Universidad San Jose</option>
                                      <option>Universidad Nacional</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </fieldset>
                          </form>
                        </td>
                      </tr>
                <tr>
                  <td colspan="1">
                    <form class="well form-horizontal">
                      <fieldset>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Costo</label>
                          <div class="col-md-8 inputGroupContainer">
                            <div class="input-group">
                              <span class="input-group-addon" style="max-width: 100%;"><i
                                  class="glyphicon glyphicon-list"></i></span>
                              <select class="selectpicker form-control">
                                <option>100.000 - 999.999</option>
                                <option>1.000.000 - 2.000.000</option>
                                <option>1.000.000 - 1.999.999</option>
                                <option>2.000.000 - 3.999.999</option>
                                <option>4.000.000 - 5.999.999</option>
                                <option>6.000.000 en adelante</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                  </td>
                </tr>
                <tr>
                  <td colspan="1">
                    <form class="well form-horizontal">
                      <fieldset>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Localidad</label>
                          <div class="col-md-8 inputGroupContainer">
                            <div class="input-group">
                              <span class="input-group-addon" style="max-width: 100%;"><i
                                  class="glyphicon glyphicon-list"></i></span>
                              <select class="selectpicker form-control">
                                <option>Chapinero</option>
                                <option>La Candelaria</option>
                                <option>Teusaquillo</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                  </td>
                </tr>
              </TABLE>
            </div>
        </div>
        <div class="col-9">
      <iframe width="100" height="100"
      style="border: 0px solid #AAA; width: 1200px; height: 453px;"
      src="http://mappinggis.com/webmapping/_l_web_plugins.html">
      </iframe>
        </div> 
      </div>  
    </section>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js">
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>