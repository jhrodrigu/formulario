<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Batch Record">
  <meta name="author" content="Teenus SAS">

  <title>Microbiologia | Samara Cosmetics</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="js/jquery-3.6.0.min.js"></script>
  

</head>

<body class="fix-header fix-sidebar card-no-border">
  <div class="preloader">
    <!-- <svg class="circular" viewBox="25 25 50 50">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
    </svg> -->
  </div>

<div class="container mt-5">
  <div id="main-wrapper">
    <?php include('header.php'); ?>
    <div class="container-fluid">
      <div class="row page-titles">
        <h1 hidden>3</h1>
        <h1 class="text-themecolor m-b-0 m-t-0"><b>Microbiología</b></h1>
        <a href="../../microbiologia" style="background-color:#fff;color:#FF8D6D" class="btn waves-effect waves-light btn-danger pull-right btn-md" role="button">Cola de Trabajo</a>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div id="accordion">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link text-uppercase" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="width: 100%">
                  Información del producto
                </button>
              </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                <div class="contenedorInfo2">
                  <div class="contenedorInfo__group">
                    <label for="recipient-name" class="col-form-label">Fecha Programación</label>
                    <input type="date" class="form-control" id="in_fecha" width="50px" readonly>
                  </div>

                  <div class="contenedorInfo__group">
                    <label for="recipient-name" class="col-form-label">No Orden de Producción</label>
                    <input type="text" class="form-control" id="in_numero_orden" readonly>
                  </div>

                  <div class="contenedorInfo__group">
                    <label for="recipient-name" class="col-form-label">Referencia</label>
                    <input type="text" class="form-control" id="in_referencia" readonly>
                  </div>

                  <div class="contenedorInfo__group">
                    <table id="txtobservacionesTanques" class="itemInfo table table-striped table-bordered" style="width:80%; height: 30px;">
                      <thead>
                        <tr>
                          <th class="centrado">Tanque</th>
                          <th class="centrado">Cantidad</th>
                          <th class="centrado">Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr id="fila1">
                          <td class="centrado" id="tanque1"></td>
                          <td class="centrado" id="cantidad1"></td>
                          <td class="centrado" id="total1"></td>
                        </tr>
                        <tr id="fila2">
                          <td class="centrado" id="tanque2"></td>
                          <td class="centrado" id="cantidad2"></td>
                          <td class="centrado" id="total2"></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="contenedorInfo__group">
                    <label for="in_tamano_lote" class="col-form-label">Tamaño Lote (kg)</label>
                    <input type="text" class="form-control" id="in_tamano_lote" readonly>
                  </div>

                  <div class="contenedorInfo__group">
                    <label for="recipient-name" class="col-form-label">No. Lote</label>
                    <input type="text" class="form-control" id="in_numero_lote" readonly>
                  </div>

                  <div class="contenedorInfo__group">
                    <label for="recipient-name" class="col-form-label">Linea</label>
                    <input type="text" class="form-control" id="in_linea" readonly>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="width: 100%">
                  LIBERACIÓN MICROBIOLOGÍA
                </button>
              </h5>
            </div>
            <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                <div class="parametrosControl">
                  <h3 for="recipient-name" class="col-form-label" style="text-align: center;">Equipos</h3>
                </div>

                <div class="obj3 mb-3 ml-3 mr-3">
                  <label for="recipient-name" class="col-form-label envasadora">Identificación Incubadora</label>
                  <label for="recipient-name" class="col-form-label loteadora">Identificación Autoclave</label>
                  <label for="recipient-name" class="col-form-label loteadora">Identificación Cabina de Flujo Laminar</label>
                  <select class="selectpicker form-control sel_equipos sel_incubadora" id="sel_incubadora"></select>
                  <select class="selectpicker form-control sel_equipos sel_autoclave" id="sel_autoclave"></select>
                  <select class="selectpicker form-control sel_equipos sel_cabina" id="sel_cabina"></select>
                </div>

                <div class="parametrosControl">
                  <h3 for="recipient-name" class="col-form-label" style="text-align: center;">Análisis Microbiologico</h3>
                </div>

                <div class="col-md-12 align-self-center">
                  <div class="card">
                    <div class="card-block">
                      <div class="table-responsive">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th class="centrado">Análisis</th>
                              <th class="centrado">Especificación</th>
                              <th class="centrado">Método</th>
                              <th class="centrado">Resultado</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th>Recuento de Mesófilos Aerobios Totales</th>
                              <td id="mesofilos"></td>
                              <td class="metodo"></td>
                              <td><input type="text" id="inputMesofilos" class="form-control"></td>
                            </tr>
                            <tr>
                              <th>Pseudomona Aeruginosa</th>
                              <td id="pseudomona"></td>
                              <td class="metodo"></td>
                              <td><select class="selectpicker form-control pseudomona" id="pseudomona">
                                  <option value="0" selected hidden>Seleccionar</option>
                                  <option value="1">Ausencia</option>
                                  <option value="2">Presencia</option>
                                  <option value="3">No Aplica</option>
                                </select></td>
                            </tr>
                            <tr>
                              <th>Escherichia Coli y Coliformes Totales</th>
                              <td id="escherichia"></td>
                              <td class="metodo"></td>
                              <td><select class="selectpicker form-control escherichia" id="escherichia">
                                  <option value="0" selected hidden>Seleccionar</option>
                                  <option value="1">Ausencia</option>
                                  <option value="2">Presencia</option>
                                  <option value="3">No Aplica</option>
                                </select></td>
                            </tr>
                            <tr>
                              <th>Staphylococcus Aureus</th>
                              <td id="staphylococcus"></td>
                              <td class="metodo"></td>
                              <td><select class="selectpicker form-control staphylococcus" id="staphylococcus">
                                  <option value="0" selected hidden>Seleccionar</option>
                                  <option value="1">Ausencia</option>
                                  <option value="2">Presencia</option>
                                  <option value="3">No Aplica</option>
                                </select></td>
                            </tr>

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 align-self-center">
                  <div class="card">
                    <div class="card-block">
                      <div class="obj2 mb-3 ml-3 mr-3">
                        <label for="recipient-name" class="col-form-label envasadora">Fecha de Siembra</label>
                        <label for="recipient-name" class="col-form-label loteadora">Fecha de Resultados</label>
                        <input type="date" class="form-control" id="fechaSiembra"></input>
                        <input type="date" class="form-control" id="fechaResultados"></input>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="col-md-12 align-self-center">
                  <div class="card" style="height: 60px;">
                    <div class="card-block">
                      <form id="fmSolicitudConfirmacion">
                        <div style="text-align: center;">
                          <div class="form-check form-check-inline mr-3">
                            <input class="form-check-input" type="radio" name="rdbtnConfirmacion" id="btnRechazado" value="0" hidden>
                            <label class="form-check-label" for="btnRechazado">Rechazado</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="rdbtnConfirmacion" id="btnAceptado" value="1" hidden>
                            <label class="form-check-label" for="btnAceptado">Aprobado</label>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>


                <div class="col-md-12 align-self-center" id="observacionesLote">
                  <div class="card" style="height: 130px;">
                    <div class="card-block">
                      <form id="fmConfirmacion">
                        <div>
                          <label for="observacionesLoteRechazado">Motivo</label>
                          <input type="area" class="form-control" name="observacionesLoteRechazado" id="observacionesLoteRechazado" width="50%">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <div class="row" style="margin: 1%">
                  <div class="col-md-4 align-self-center">
                    <label for="microbiologia_realizado" class="col-form-label">Realizado Por</label>
                    <input type="text" class="form-control " id="microbiologia_realizado" readonly>
                  </div>

                  <div class="col-md-2 align-self-center" style="margin-top: 2.8%">
                    <input type="text" id="idbtn" hidden>
                    <input type="button" class="btn btn-danger microbiologia_realizado" id="microbiologia_realizado" onclick="cargar(this, 'firma1')" style="width: 100%; height: 38px;" value="Firmar">
                  </div>

                  <div class="col-md-4 align-self-center">
                    <label for="microbiologia_verificado" class="col-form-label">Verificado Por</label>
                    <input type="text" class="form-control" id="microbiologia_verificado" readonly>
                  </div>
                  <div class="col-md-2 align-self-center" style="margin-top: 2.8%">
                    <input type="button" class="btn btn-danger microbiologia_verificado" id="microbiologia_verificado" onclick="cargar(this, 'firma2')" style="width: 100%; height: 38px;" value="Firmar">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>




  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="js/main.js"></script>

 
</body>

</html>