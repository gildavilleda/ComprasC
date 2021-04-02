$(document).ready(function(){
	mostrarSolicitudes();
});

function swichSuccessWarning(codstate) {
    /*
    Esta Funcion se utiliza para indicarle al Toast
    que Tipo de Alerta debe mostrar, si Satisfactorio o error
     */
    if (codstate === '0' || codstate === 0) {
        return 'error'
    } else {
        return 'success'
    }
}

function mostrarSolicitudes(){
//console.log("mostrarSolisicitudes en autoria Solicitud");
    $.ajax({
        url: './api/v1/ComSolicitud.php?Reasignacion=true',
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            console.log(json);
            if(json.length ==0){
                $('#contenedorSR').append('<div id="" class="card">' +
                    '    <div class="card" id="Modal">' +
                    '        <div class="modal-header text-center bg-warning">' +
                    '            <h4 class="modal-title w-100 font-weight-bold"">NO HAY SOLICITUDES</h4>' +
                    '            <button type="button" class="close" data-dismiss="modal" aria-label="Close"' +
                    '                    onclick="$(\'#Modal\').fadeOut();">' +
                    '                <span aria-hidden="true">&times;</span>' +
                    '            </button>' +
                    '        </div>' +
                    '        <br>' +
                    '        <div class="input-group mb-sm-4 col-sm-4 ">' +
                    '            <div class="input-group-prepend">' +
                    '            </div>' +
                    '        </div>' +
                    '        <div class="card-body text-center">' +
                    '            <h3>No hay solicitudes en este momento</h3>' +
                    '        </div>' +
                    '    </div>' +
                    '</div>');
                return 0;
            }
            $(json).each(function (index, item) {

                ComNumSolicitud=json[index].ComNumSolicitud;
				Solicitante=json[index].Solicitante;
				SegNumUsuarioSol=json[index].SegNumUsuarioSol;
				Encargado=json[index].Encargado;
				SegNumUsuarioEnc=json[index].SegNumUsuarioEnc;
				ComStrDepto=json[index].ComStrDepto;
				SegStrPuesto=json[index].SegStrPuesto;
				ComStrTitulo=json[index].ComStrTitulo;
				Fecha=json[index].Fecha;
				Hora=json[index].Hora;
				ComNumEstatus=json[index].ComNumEstatus;
				mostIdSolicitud=json[index].mostIdSolicitud;
                ComDictamenAdjunto=json[index].ComDictamenAdjunto;
                ComFichaAdjunto=json[index].ComFichaAdjunto;

                if(ComDictamenAdjunto == null){
                    adjuntoHTML ='No Adjunto'
                }else{
                    adjuntoHTML = '<a class="btn btn-danger col col-sm-6" href="./docs/'+ComDictamenAdjunto+'">Descargar</a>'
                }

                if(ComFichaAdjunto == null){
                    adjuntoHTMLFicha ='No Adjunto'
                }else{
                    adjuntoHTMLFicha = '<a class="btn btn-info col col-sm-6" href="./docs/'+ComFichaAdjunto+'">Descargar</a>'
                }

                $('#contenedorSR').append('<table class="table table-bordered">' +
        '          <tbody>' +
        '            <tr class="table-primary">' +
        '              <th scope="row">No. Solicitud de Pedido:</th>' +
        '              <td>' +
        '                <input style="border-width:0;color: black; background-color: #b8daff;" value ="'+mostIdSolicitud+'" type="text " disabled id="NoSolicitud"></input>\n' +
        '              </td>' +
        '' +
        '            </tr>' +
        '            <tr>' +
        '              <th scope="row">Nombre Solicitante:</th>' +
        '              <td>'+Solicitante+'</td>' +
        '            </tr>\n' +
        '\n' +
        '            <tr>\n' +
        '              <th scope="row">Departamento:</th>\n' +
        '              <td>'+ComStrDepto+'</td>\n' +
        '              <tr>\n' +
        '            <tr>\n' +
        '              <th scope="row">Puesto Solicitante:</th>\n' +
        '              <td>'+SegStrPuesto+'</td>\n' +
        '              <tr>\n' +
        '                <th scope="row">Estado:</th>\n' +
        '                <td>'+ComStrTitulo+'</td>\n' +
        '              </tr>\n' +
        '            </tr>\n' +
        '            <tr>\n' +
        '              <th scope="row">Fecha Creación:</th>\n' +
        '              <td>'+Fecha+' '+Hora+'</td>\n' +
        '            </tr>\n' +
        '            <tr>\n' +
        '              <th scope="row">Dictamen técnico:</th>\n' +
        '              <td>'+adjuntoHTML+'</td>\n' +
        '            </tr>\n' +
         '            <tr>\n' +
         '              <th scope="row">Ficha técnica:</th>\n' +
         '              <td>'+adjuntoHTMLFicha+'</td>\n' +
         '            </tr>\n' +
        '            <tr>\n' +
        '              <th scope="row">Adjunto:</th>\n' +
        '              <td>\n' +
        '                <div class="col-sm-12 offset-sm row">\n' +
        '                  <div class="col-sm-6">\n' +
        '                    <button class="btn btn-success btn-block" id="'+ComNumSolicitud+'" onclick="FormatoSolicitud(this.id)">Formato Solicitud de Pedido <i class="fas fa-download"></i></button>\n' +
        '                  </div>\n' +
        '                  <div class="col-sm-6">\n' +
        '                    <button class="btn btn-success btn-block">Ficha tecnica <i class="fas fa-download"></i></button>\n' +
        '                  </div>\n' +
        '                </div>\n' +
        '              </td>\n' +
        '            </tr>\n' +
        '            <tr>\n' +
        '              <th scope="row">Encardo:</th>\n' +
        '              <td>'+Encargado+'</td>\n' +
        '              <tr>\n' +
        '            <tr>\n' +
        '          </tbody>\n' +
        '<!-- Botones-------------------------------------------------------------------->\n' +
    '          <tr>\n' +
    '            <td class ="col-sm-12" colspan="2">\n' +
    '              <div class="col-sm-12 row">\n' +
    '                <div class="col-sm-6">\n' +
    '                  <button type="button" class="btn btn-warning btn-block" id="'+ComNumSolicitud+'" onclick="abrirModal(this.id)">\n' +
    '                    Agregar Seguimiento\n' +
    '                  </button>\n' +
    '                </div>\n' +
    '                <div class="col-sm-6">\n' +
    '                  <button type="button" class="btn btn-primary btn-block" id="'+ComNumSolicitud+'" onclick="abrirModalVerSeg(this.id)">\n' +
    '                    Ver Seguimientos\n' +
    '                  </button>\n' +
    '                </div>\n' +
    '              </div>\n' +
    '            </td>\n' +
    '            <tr>\n' +
    '              <tr>\n' +
    '            <td class ="col-sm-12" colspan="2">\n' +
    '              <div class="col-sm-10 row" style="text-align: center">             \n' +
    '                <div class="dropdown col col-sm-12 offset-sm-1">\n' +
    '                  <button class="btn dropdown-toggle btn-black btn-block" type="button" id="btnAsignarA'+ComNumSolicitud+'" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">\n' +
    '                    Asignar a \n' +
    '                  </button>\n' +
    '                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="btnEncargados'+ComNumSolicitud+'">\n' +
    '                  </div>\n' +
    '                </div>              \n' +
    '                \n' +
    '              </div>\n' +
    '            </td>\n' +
    '            <tr>\n' +
    '              <!-- Botones-------------------------------------------------------------------->'+
        '            </table>')

                selUsuarioCompras(ComNumSolicitud);
            });
        },
        error: function (data) {
            alert("No se lograron cargar los datos" + data.responseText);
        }
    });
}

function abrirModal(solicitud){
	$('#modalSeguimiento').fadeIn();
	$('#NumSolicitudSeg').val(solicitud);
}

function selUsuarioCompras(NumSolicitud){
    //ComNumTipCompra
    let TipoUsuario = 28; // tipo rol
    $.ajax({
        url: './api/v1/ComEstatus.php?TipoUsuario='+TipoUsuario,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            $(json).each(function (index, item) {
                SegNumUsuario = json[index].SegNumUsuario;
                SegStrUsuario = json[index].SegStrUsuario;
                SegStrNomUsuario = json[index].SegStrNomUsuario;

                $('#btnEncargados'+NumSolicitud).append('<button class="btn btn-light btn-block" id="'+SegStrUsuario+'" value="'+NumSolicitud+'" onclick="Asignar(this.id,this.value)">'+SegStrNomUsuario+'</button>')
            });
        },
        error: function (data) {
            console.log("No se lograron cargar los datos(Especialidad)" + data.responseText);
        }
    });
}

function Asignar(idEncargado, numSolicitudA) {

    let esperaAsignacion = $.ajax({
        url: './api/v1/ComSolicitud.php?ComNumSolicitud='+numSolicitudA+'&SegNumUsuarioEnc='+idEncargado,
        type: "PUT",

        beforeSend: function () {

        },
        success: function (response) {
            $.toast({
                title: 'Informativo',
                subtitle: '1 segundo',
                content: response.state.strstate,
                type: swichSuccessWarning(response.state.codstate),
                pause_on_hover: true,
                delay: 5000
            });

            $("#btnGuardarLab").attr('disabled', false);


        },
        error: function (request, status, error) {
            console.log(request);
            $.toast({
                title: 'Ups!',
                subtitle: '1 segundo',
                content: ' ' + request.responseText,
                type: 'error',
                pause_on_hover: true,
                delay: 5000
            });
            $("#btnGuardarLab").text('GUARDAR').attr('disabled', false);

        }
    });//fin ajax PUT

    $.when(esperaAsignacion).done(function () {
        let datos = {
            ComStrUsuarioAsignar:idEncargado,
            ComNumSolicitud:numSolicitudA
        };
        $.ajax({
            url: './api/v1/ComSeguimientos.php',
            type: 'POST',
            data: datos,
            beforeSend: function () {

            },
            success: function (response) {
                $.toast({
                    title: 'Informativo',
                    subtitle: '1 segundo',
                    content: response.state.strstate,
                    type: swichSuccessWarning(response.state.codstate),
                    pause_on_hover: true,
                    delay: 5000
                });
            },
            error: function (request, status, error) {
                console.log(request);
                $.toast({
                    title: 'Ups!',
                    subtitle: '1 segundo',
                    content: ' ' + request.responseText,
                    type: 'error',
                    pause_on_hover: true,
                    delay: 5000
                });
                $("#btnGuardar").text('GUARDAR').attr('disabled', false);
            }
        });
    });
}


function abrirModalVerSeg(solicitud){
    var adjuntoHTML;
    $('#contSeguimientos').empty();
    let esperaSeg = $.ajax({
        url: './api/v1/ComSeguimientos.php?ComNumSolicitud='+solicitud,
        type: "GET",
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        success: function (data) {
            var json = data.data;
            console.log(json.length);
            if(json.length == 0){
                $('#contSeguimientos').append('<div id="" class="card">' +
                    '    <div class="card" id="Modal">' +
                    '        <div class="modal-header text-center bg-warning">' +
                    '            <h4 class="modal-title w-100 font-weight-bold"">NO HAY SEGUIMIENTOS</h4>' +
                    '            <button type="button" class="close" data-dismiss="modal" aria-label="Close"' +
                    '                    onclick="$(\'#Modal\').fadeOut();">' +
                    '                <span aria-hidden="true">&times;</span>' +
                    '            </button>' +
                    '        </div>' +
                    '        <br>' +
                    '        <div class="input-group mb-sm-4 col-sm-4 ">' +
                    '            <div class="input-group-prepend">' +
                    '            </div>' +
                    '        </div>' +
                    '        <div class="card-body text-center">' +
                    '            <h3>No hay seguimientos en este momento</h3>' +
                    '        </div>' +
                    '    </div>' +
                    '</div>');
            }

            $(json).each(function (index, item) {

                ComNumSeguimiento=json[index].ComNumSeguimiento;
                ComStrDescrip=json[index].ComStrDescrip;
                ComStrArchivo=json[index].ComStrArchivo;
                Fecha=json[index].Fecha;
                Hora=json[index].Hora;
                SegStrNomUsuario=json[index].SegStrNomUsuario;
                ComNumSolicitud=json[index].ComNumSolicitud;

                if(ComStrArchivo == null){
                    adjuntoHTML ='No Adjunto'
                }else{
                    adjuntoHTML = '<a class="btn btn-info col col-sm-6" href="./docs/'+ComDictamenAdjunto+'">Descargar</a>'
                }

                $('#contSeguimientos').append('<table class="table table-bordered">' +
                    '          <tbody>' +
                    '            <tr class="table-primary">' +
                    '              <th scope="row">No.:</th>' +
                    '              <td>' +
                    '                <input style="border-width:0;color: black; background-color: #b8daff;" value ="'+ComNumSeguimiento+'" type="text " disabled id="NoSolicitud"></input>\n' +
                    '              </td>' +
                    '' +
                    '            </tr>' +
                    '            <tr>' +
                    '              <th scope="row">Descripcion:</th>' +
                    '              <td>'+ComStrDescrip+'</td>' +
                    '            </tr>\n' +

                    '              <th scope="row">Fecha Creación:</th>\n' +
                    '              <td>'+Fecha+' '+Hora+'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '            <tr>\n' +
                    '              <th scope="row">Adjunto:</th>\n' +
                    '              <td>'+adjuntoHTML+'</td>\n' +
                    '            </tr>\n' +
                    '            <tr>\n' +
                    '              <th scope="row">Crador Seguimiento:</th>\n' +
                    '              <td>'+SegStrNomUsuario+'</td>\n' +
                    '            </tr>\n' +
                    '          </tbody>\n' +
                    '            </table>')
            });
        },
        error: function (data) {
            alert("No se lograron cargar los datos" + data.responseText);
        }
    });

    $.when(esperaSeg).done(function(){
        $('#modalVerSeguimientos').fadeIn();
        $('#inputNoSolicitudVerS').val(solicitud);
    });

}

function FormatoSolicitud(numSolCompra) {
    window.open('http://' + window.location.hostname + '/compras/runreports/ImpreSolCompra.php?NumSolicitud=' + numSolCompra);
}


$('#btnEnviarSeg').click(function () {
    var parametro = new FormData($("#formularioEnv")[0]);


    let esperaEncabezado = $.ajax({
        url: './api/v1/ComSeguimientos.php',
        type: 'POST',
        data: parametro,
        contentType: false,
        processData: false,
        beforeSend: function () {
            $("#btnGuardar").text('GUARDANDO...').prop('disabled', true);
        },
        success: function (response) {
            $.toast({
                title: 'Informativo',
                subtitle: '1 segundo',
                content: response.state.strstate,
                type: swichSuccessWarning(response.state.codstate),
                pause_on_hover: true,
                delay: 5000
            });
            $("#btnGuardar").text('GUARDAR').attr('disabled', false);
            let mensaje = response.state.strstate;
            console.log(mensaje);
            let partida = mensaje.split(":");
            console.log(partida);
            $('#NoSolicitud').val(partida[1]);

        },
        error: function (request, status, error) {
            console.log(request);
            $.toast({
                title: 'Ups!',
                subtitle: '1 segundo',
                content: ' ' + request.responseText,
                type: 'error',
                pause_on_hover: true,
                delay: 5000
            });
            $("#btnGuardar").text('GUARDAR').attr('disabled', false);
        }
    });

});