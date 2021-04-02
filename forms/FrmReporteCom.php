<div id="Reportes" class="card" style="margin-top: 50px">
    <div class="modal-header text-center text-white green-grad">
        <h3 class="modal-title w-100 font-weight-bold">Reporte General Compras</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                onclick="$('#Reportes').fadeOut();"
        <span aria-hidden="true" class="text-white">&times;</span>
    </div>
    
    <!--<form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="Buscar" placeholder="Buscar" aria-label="Buscar" id="buscarcodigoInsumo">
        <button class="btn btn-success my-2 my-sm-0" type="button" onclick="controlInventario();">Buscar prueba</button>
    </form>-->

<div class="row">
        <div class="col-sm-12">
            <table id="tbIReportesMostrar" class="table table-sm table-hover w3-border" width="99%">
                <thead class="primary-color text-white">
		<tr>
                    <th class="">Fecha</th>
                    <th class="">Renglon Afectado</th>
                    <th class="">Código de Insumo</th>
                    <th class="">Unidad de Medida</th>
                    <th class="">Descripción del Insumo</th>
                    <th class="">Unidad Ejecutora</th>
                    <th class="">Usuario Solicitante</th>
                    <th class="">Departamento</th>
                    <th class="">Usuario</th>
                    <th class="">Descripción</th>
                    <th class="">Creador Solicitud</th>
                    <th class="">Numer de Solicitud</th>
                </tr>
                </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
</div>
<script src="./js/js_ReportesCom.js"></script>
