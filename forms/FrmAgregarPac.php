<div class="container-fluid">
    <div id="modalCrearSolicitud" class="card" style="margin-top: 50px">
        <div class="modal-header text-center text-white gradientP">
            <h3 class="modal-title w-100 font-weight-bold">AGREGAR PAC</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#modalCrearSolicitud').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
        </div>

        <div class="modal-body">



            <form name="formulario-envia" id="formularioEnv" enctype="multipart/form-data" method="POST">
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputImagen">Adjuntar PAC</label>
                        </div>
                        <input type="file" class="form-control" id="fileAdjuntoPac" name="fileAdjuntoPac">
                    </div>
                </div>
            </form>


        <div class="row">
            <div class="col col-sm-6 offset-md-2">
                <button class="btn btn-success btn-block" id="btnGuardar" onclick="agregarPac()">Guardar <i class="fas fa-save"></i></button>
            </div>
        </div>
        <br>

        <!--
            <div class="row">
                <div class="col col-sm-6">
                    <button class="btn btn-success btn-block">Formato Solicitud de Pedido <i class="fas fa-download"></i></button>
                </div>
                <div class="col col-sm-6">
                    <button class="btn btn-success btn-block">Ficha tecnica <i class="fas fa-download"></i></button>
                </div>
            </div>
        -->

    </div>
</div>




<script type="text/javascript" src="./js/js_agregarPac.js"></script>