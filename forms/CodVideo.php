<!-- Contenido-->
<div id="vcontent" class="container" style="margin-top: 50px">
    <div id="CodVideo" class="card">
        <div class="modal-header text-center white-text gradientP">
            <h3 class="modal-title w-100 font-weight-bold">Autorizar Solicitudes</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#v').fadeOut();">
                <span aria-hidden="truCodVideo" class="text-white">&times;</span>
            </button>
        </div>
        <div class="card-body">
            <form name="formulario-envia" id="formularioEnv" enctype="multipart/form-data" method="post">
                <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNombreReg">No.</label>
                    </div>
                    <input type="text" class="form-control" id="inputNombreReg">
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputImagen">No.</label>
                    </div>
                    <input type="file" class="form-control" id="inputImagen">
                </div>
                <div class="row">
                    <button type="button" name="btn" id="btnRegistrar" value="REGISTRAR" onclick="registrar_paciente();"></button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript" src="./js/js_CodVideo.js"></script><?php
