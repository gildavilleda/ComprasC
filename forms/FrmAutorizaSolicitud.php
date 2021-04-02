  <!-- Contenido-->
  <div id="vcontent" class="container" style="margin-top: 50px">
    <div id="SolAutorizada" class="card">
      <div class="modal-header text-center white-text gradientP">
        <h3 class="modal-title w-100 font-weight-bold">Autorizar Solicitudes</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
        onclick="$('#SolAutorizada').fadeOut();">
        <span aria-hidden="true" class="text-white">&times;</span>
        </button>
      </div>
      <div class="card-body">
        <div class="col-sm-10 offset-sm-1" id="contenedorSR">
          
        </div>
      </div>
    </div>
  </div>



  <!-- ModalSeg -->
  <div class="modal" id="modalSeguimiento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-header text-center white-text gradientP">
                  <h5 class="modal-title w-100 font-weight-bold" id="exampleModalLabel">Agregar Seguimiento</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalSeguimiento').fadeOut();">
                      <span aria-hidden="true" class="text-white">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form name="formulario-envia" id="formularioEnv" enctype="multipart/form-data" method="POST">
                      <div class="row" hidden>
                          <div class="input-group input-group-sm mb-sm-3 col-sm-11">
                              <div class="input-group-prepend">
                                  <label class="input-group-text" for="inputRegistro">No.</label>
                              </div>
                              <input type="text" class="form-control" id="NumSolicitudSeg" name="NumSolicitudSeg">
                          </div>
                      </div>
                      <div class="alert alert-warning" role="alert">
                          El apartado de adjuntar archivos es opcional, se permiten adjuntar: <b>imagenes, PDF's, xls, xlsx, csv</b>
                      </div>
                      <div class="row">
                          <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                              <div class="input-group-prepend">
                                  <label class="input-group-text" for="inputCUI" style="width: 150px; text-align: center">Adjuntar Archivo</label>
                              </div>
                              <input class="form-control" type="file" id="AdjuntoSeg" name="adjuntoDictamen">
                          </div>
                      </div>
                      <div class="row">
                          <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                              <div class="input-group-prepend">
                                  <label class="input-group-text" for="inputCUI" style="width: 150px; text-align: center">Seguimiento</label>
                              </div>
                              <textarea class="form-control" rows="4" id="textSegumiento" name="textSegumiento">

                            </textarea>
                          </div>
                      </div>

                  </form>
                  <div class="col col-sm-10" style="place-content: center">
                      <button class="btn btn-success btn-md" id="btnEnviarSeg" >Enviar Seguimiento</button>
                      <button class="btn btn-danger btn-md" id="btnRechazarSeg" >Rechazar</button>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Fin ModalSeg-->

    <script type="text/javascript" src="./js/js_AutorizaSolicitud.js"></script>


  KiLDrqwZ63