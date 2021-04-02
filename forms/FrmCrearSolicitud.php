<div class="container-fluid">
    <div id="modalCrearSolicitud" class="card" style="margin-top: 50px">
        <div class="modal-header text-center text-white gradientP">
            <h3 class="modal-title w-100 font-weight-bold">Solicitud de Pedido</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#modalCrearSolicitud').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
        </div>



        <!-- Modal Ver Seguimientos-->
        <div class="modal" id="modalVerPDF" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="overflow: auto">
            <div class="modal-dialog  modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center white-text gradientP">
                        <h5 class="modal-title w-100 font-weight-bold" id="exampleModalLabel">PAC</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalVerPDF').fadeOut();">
                            <span aria-hidden="true" class="text-white">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <iframe  style="width: 750px; height: 750px;" id="aPacIfrm"></iframe>

                    </div>
                </div>
            </div>
        </div>


        <div class="modal-body">
            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputRegistro">No. Solicitud</label>
                    </div>
                    <input type="text" class="form-control" id="NoSolicitud"
                           placeholder="" value="" disabled>
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputRegistro">Unidad Ejecutora</label>
                    </div>
                    <input type="text" class="form-control" id="inputUnidadEje"
                           placeholder="" value="285" disabled>
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCUI">Nombre de Unidad Ejecutora</label>
                    </div>
                    <input type="text" class="form-control" id="inputNombreEje"
                           placeholder="" value="Hospital Nacional Especializado de Villa Nueva" disabled>
                </div>
            </div>

            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputSegundoNombre">Cantidad Solicitada</label>
                    </div>
                    <input type="number" class="form-control" id="inputCantSolicitada" placeholder="">
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-2">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputSegundoApellido">Codigo de Insumo</label>
                    </div>
                    <input type="text" class="form-control" id="inputCodInsumo" placeholder="" onchange="buscarInsumoGeneral()">
                </div>

                <div class="row" style="place-content: flex-end; margin-right: 10px; margin-bottom: 5px;" >
                    <button class="btn btn-sm btn-success" onclick="agregarSinInsumo();" >No aplica código de insumo<i class="fas fa-search-plus"></i></button>
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="unidadMedida" id="ocultarSelUnidad">Cod. Unidad de Medida</label>
                    </div>
                    <select class="form-control" id="selUnidadMedida" disabled onchange="buscarInsumoEspecifico(this.value)">

                    </select>
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="unidadMedida" id="unidadMedidaOcultar"> Unidad de Medida</label>
                    </div>
                    <input type="text" class="form-control" id="inputCodInsumoUMedida" placeholder="" readonly ondblclick="habilitarInput(this.id)">

                </div>
            </div>



            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputApellidoCasada">Descripcion del bien o servicio solicitado</label>
                    </div>
                    <textarea class="form-control" rows="4" id="inputDescripcion"  ondblclick="habilitarInput(this.id)" readonly>

                </textarea>
                </div>
            </div>

            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputDireccion">Renglon afectado</label>
                    </div>
                    <input type="text" class="form-control" id="inputRenglon"
                           placeholder="" readonly ondblclick="habilitarInput(this.id)">
                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputTelefono">Valor estimado en Quetzales</label>
                    </div>
                    <input type="number" class="form-control" id="inputEstimadoQ" placeholder="">
                    <input type="hidden" id="totalValorQ">
                </div>

                <div class="input-group input-group-sm mb-sm-2 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputCorreoElectronico">Incluido en PAC</label>
                    </div>
                    <select class="custom-select" id="selIncluidaPAC">
                        <option value="0">Seleccione una opción</option>
                        <option value="S">SI</option>
                        <option value="N">NO</option>
                    </select>
                    <div class="btn-group">
                            <button class="btn btn-circle btn-danger" id="aPac" style="margin-left: 10px" >
                                <i class="fas fa-question-circle"></i>
                            </button>
                        </div>

                </div>
                <div class="input-group input-group-sm mb-sm-3 col-sm-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputReferido">¿Está en contrato abierto?</label>
                    </div>
                    <select class="custom-select" id="selContratoAbierto">
                        <option value="0">Seleccione una opción</option>
                        <option value="S">SI</option>
                        <option value="N">NO</option>
                    </select>
                </div>
            </div>
            <form name="formulario-envia" id="formularioEnv" enctype="multipart/form-data" method="POST">
                <div class="row">
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputImagen">Adjuntar dictamen técnico</label>
                        </div>
                        <input type="file" class="form-control" id="adjuntoDictamen" name="adjuntoDictamen">
                    </div>
                    <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputImagen">Adjuntar ficha técnica</label>
                        </div>
                        <input type="file" class="form-control" id="adjuntoFicha" name="adjuntoFicha">
                    </div>
                </div>

            </form>
            <input type="hidden" id="renglonAnterior">

            <div class="row" style="place-content: flex-end; margin-right: 10px">
                <button class="btn btn-md btn-success" onclick="anadirTabla()"><i class="fas fa-plus-circle"></i></button>
            </div>


        </div><!-- modal -->

        <table id="tblDetalleSolicitud" class="table table-hover">
            <thead class="stylish-color-dark text-white">
            <tr>
                <th scope="col">Cantidad Solicitada</th>
                <th scope="col">Cantidad Autorizada</th>
                <th scope="col">Codigo Insumo</th>
                <th scope="col">Unidad de Medida</th>
                <th scope="col">Descrpcion del bien o servicio solicitado</th>
                <th scope="col">Renglon afectado</th>
                <th scope="col">Valor estimado en Quetzales</th>
                <th scope="col">Incluído en PAC</th>
                <th scope="col">¿Está en contrato abierto?</th>
                <th scope="col">Eliminar</th>
            </tr>
            </thead>
            <tbody id="tbodyDetSolicitud">

            </tbody>
        </table>

        <div class="alert alert-warning" role="alert">
            Si el insumo se encuentra en contrato abierto  debe ir de la siguiente manera:
            <br>
            <b>Ejemplo:</b>
            <br>
            Renglón 1: Productos Medicinales y Farmaceuticos DNCAE No. 04-2018, paquete: 5, código de tipo de producto: 266 10 681 NOG 0000000
            <br>
            Renglón 2: Productos Medicinales y Farmaceuticos DNCAE No. 07-2017, paquete: 2, código de tipo de producto: 266 51 82 NOG 0000000
            <br>
            <b>Nota: La justificación/observaciones: debe dar respuesta a las siguientes preguntas: ¿Que? ¿Porque? y ¿Para que?<b>
        </div>
        <div class="row" style="place-content: center">
            <div class="input-group input-group-sm mb-sm-3 col-sm-8 offset-md-1">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputApellidoCasada">Observaciones</label>
                </div>
                <textarea class="form-control" rows="2" id="observaciones" maxlength="700" onkeyup="countChars(this);">

            </textarea>
            </div>
            <div class="col col-sm-2"><p id="charNum">0 caracteres</p></div>
        </div>

        <div class="row">
            <div class="col col-sm-6 offset-md-2">
                <button class="btn btn-success btn-block" id="btnGuardar" onclick="agregarSolicitud()">Guardar <i class="fas fa-save"></i></button>
                <button class="btn btn-warning btn-block" id="btnInsOtraSol" hidden>Agregar otra solicitud <i class="fas fa-broom"></i></button>
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




<script type="text/javascript" src="./js/js_CrearSolicitud.js"></script>