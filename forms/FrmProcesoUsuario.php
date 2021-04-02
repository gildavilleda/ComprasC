<!-- Loading
<div class="d-flex justify-content-center">
    <div class="spinner-border text-success m-10" role="status" style="width: 15rem; height: 15rem;">
        <span class="sr-only">Loading...</span>
    </div>
  </div>-->

  <!-- Contenido-->
  <div id="vcontent" class="container" style="margin-top: 50px">
    <div id="InsumoEnt" class="card">
      <div class="modal-header text-center white-text gradientP">
        <h3 class="modal-title w-100 font-weight-bold">Solicitudes en Proceso</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
        onclick="$('#InsumoEnt').fadeOut();">
        <span aria-hidden="true" class="text-white">&times;</span>
      </button>
      </div>
        <div class="card-body">
            <div class="col-sm-10 offset-sm-1" id="contenedorSR">

            </div>
        </div>
    </div>
  </div>



    <!-- Modal -->
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
            <div class="row">
              <div class="input-group input-group-sm mb-sm-3 col-sm-11">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputRegistro">No.</label>
                </div>
                <input type="text" class="form-control" id="inputNoSolicitudEst">
              </div>
            </div>
            <div class="row">
              <div class="input-group input-group-sm mb-sm-3 col-sm-11">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputCUI">Seguimiento</label>
                </div>
                <textarea class="form-control" rows="4">

                </textarea>
              </div>
            </div>
            <div class="col col-sm-10">
            <button class="btn btn-success btn-block" id="btnEnviarSeg">Enviar Seguimiento</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Ver Estados-->
    <div class="modal" id="modalEstados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header gradientP white-text text-center">
            <h5 class="modal-title w-100 font-weight-bold" id="exampleModalLabel" style="place-content: center">Estados</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalEstados').fadeOut();">
              <span aria-hidden="true" class="text-white">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="input-group input-group-sm mb-sm-3 col-sm-11">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputRegistro">Solicitud No.</label>
                </div>
                <input type="text" class="form-control" id="inputNoSolicitudSeg">
              </div>
            </div>
            <div id="contEstados">
              <div id="circulo" style="background: red;">
                <p>Hola Pruebas.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Ver Seguimientos-->
    <div class="modal" id="modalVerSeguimientos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="overflow: auto">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header gradientP white-text text-center">
            <h5 class="modal-title w-100 font-weight-bold" id="exampleModalLabel">Seguimientos...</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalVerSeguimientos').fadeOut();">
              <span aria-hidden="true" class="text-white">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row" hidden>
              <div class="input-group input-group-sm mb-sm-3 col-sm-11">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputRegistro">Solicitud No.</label>
                </div>
                <input type="text" class="form-control" id="inputNoSolicitudVerS">
              </div>
            </div>
            <div id="contSeguimientos" class="col-sm-10 offset-sm-1">
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="./js/js_ProcesoUsuario.js"></script>