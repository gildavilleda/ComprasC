$(document).ready(function(){
	mostrarSolicitudes();
});

function abrirModalVerSeg(solicitud){
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
					'        <div class="modal-header gradientP white-text text-center">' +
					'            <h4 class="modal-title w-100 font-weight-bold">NO HAY SEGUIMIENTOS</h4>' +
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
				console.log("Entre en each");
				
				ComNumSeguimiento=json[index].ComNumSeguimiento;
      			ComStrDescrip=json[index].ComStrDescrip;
      			ComStrArchivo=json[index].ComStrArchivo;
      			Fecha=json[index].Fecha;
				Hora=json[index].Hora;
      			SegStrNomUsuario=json[index].SegStrNomUsuario;
      			ComNumSolicitud=json[index].ComNumSolicitud;
      			

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


function mostrarSolicitudes(){

	$.ajax({
		url: './api/v1/ComSolicitud.php?SolicitudesUsuarios=6',
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

				ComNumSolicitud= json[index].ComNumSolicitud;
				SegStrNomUsuario= json[index].SegStrNomUsuario;
				ComStrDepto= json[index].ComStrDepto;
				SegStrPuesto= json[index].SegStrPuesto;
				ComStrTitulo= json[index].ComStrTitulo;
				Fecha= json[index].Fecha;
				Hora= json[index].Hora;
				Encargado= json[index].Encargado;
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
					'              <td>'+SegStrNomUsuario+'</td>' +
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
					'              <th scope="row">Encargado:</th>\n' +
					'              <td>'+Encargado+'</td>\n' +
					'            </tr>\n' +
					'          </tbody>\n' +
					'<!-- Botones-------------------------------------------------------------------->\n' +
					'          <tr>\n' +
					'            <td class ="col-sm-12" colspan="2">\n' +
					'              <div class="col-sm-12 row">\n' +
					'                <div class="col-sm-10 offset-sm-1" style="text-align: center">\n' +
					'                  <button type="button" class="btn btn-primary btn-lg" id="'+ComNumSolicitud+'" onclick="abrirModalVerSeg(this.id)">\n' +
					'                    Ver Seguimientos\n' +
					'                  </button>\n' +
					'                </div>\n' +
					'              </div>\n' +
					'            </td>\n' +
					'            <tr>\n' +
					'              <!-- Botones-------------------------------------------------------------------->\n' +
					'            </table>')
			});
		},
		error: function (data) {
			alert("No se lograron cargar los datos" + data.responseText);
		}
	});
}


function FormatoSolicitud(numSolCompra) {
    window.open('http://' + window.location.hostname + '/compras/runreports/ImpreSolCompra.php?NumSolicitud=' + numSolCompra);
}