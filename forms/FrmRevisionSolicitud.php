


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
        <h3 class="modal-title w-100 font-weight-bold">Revision Solicitudes</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
        onclick="$('#InsumoEnt').fadeOut();">
        <span aria-hidden="true" class="text-white">&times;</span>
      </button>
    </div>
    <div class="card-body">
      <div class="col-sm-10 offset-sm-1" id="contenedor">
        <table class="table table-bordered">
          <tbody>
            <tr class="table-primary">
              <th scope="row">No. Solicitud de Pedido:</th>
              <td>
                <input style="border-width:0;color: black; background-color: #b8daff;" value ="58" type="text " disabled id="NoSolicitud"></input>
              </td>

            </tr>
            <tr>
              <th scope="row">Nombre Solicitante:</th>
              <td>Virginia Posadas</td>
            </tr>

            <tr>
              <th scope="row">Puesto Solicitante:</th>
              <td>Jefe Departamento TIC</td>
              <tr>
                <th scope="row">Estado:</th>
                <td>Estado 2 (Por definir nombre)</td>
              </tr>
            </tr>
            <tr>
              <th scope="row">Fecha Creación:</th>
              <td>10-02-2020 09:50:01</td>
            </tr>
            <tr>
              <th scope="row">Adjunto:</th>
              <td>
                <div class="col-sm-12 offset-sm row">
                  <div class="col-sm-6">
                    <button class="btn btn-success btn-block">Formato Solicitud de Pedido <i class="fas fa-download"></i></button>
                  </div>
                  <div class="col-sm-6">
                    <button class="btn btn-success btn-block">Ficha tecnica <i class="fas fa-download"></i></button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">Encargado:</th>
              <td>Usuario Encargado Ejemplo</td>
            </tr>
          </tbody>
          <!-- Botones-------------------------------------------------------------------->
          <tr>
            <td class ="col-sm-12" colspan="2">
              <div class="col-sm-12 row">
                <div class="col-sm-6 ">
                  <button type="button" class="btn btn-warning btn-block" id="1" onclick="abrirModal(this.id)">
                    Agregar Seguimiento
                  </button>
                </div>
              
              
                <div class="col-sm-6">
                  <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal">
                    Confirmar Solicitud
                  </button>
                </div>
              </div>
            </td>
            <tr>
              <!-- Botones-------------------------------------------------------------------->
            </table>
          </div>
        </div>
      </div>
    </div>


    <!-- Modal -->
    <div class="modal" id="modalSeguimiento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
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
                <input type="text" class="form-control" id="inputNoSolicitudSeg">
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

    <script type="text/javascript" src="./js/js_RevisionSolicitud.js"></script>