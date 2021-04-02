$(document).ready(function() {
	verPDFPca();

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

//funcion para contar caracteres en input
function countChars(obj){
    var maxLength = 700;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);
    
    if(charRemain < 10){
        document.getElementById("charNum").innerHTML = '<span style="color: red;">'+charRemain+' Caracteres Restantes</span>';
    }else{
        document.getElementById("charNum").innerHTML = charRemain+' Caracteres Restantes';
    }
}

function agregarSinInsumo(){
	//$('#numUnidadMedidaSinCod').prop('hidden', false);
	//$('#inputCodInsumoUMedidaSinCod').prop('hidden', false);
	//$('#txtUnidadMedidaSincCod').prop('hidden', false);
	//$('#inputInsumoUMedidaSinCod').prop('hidden', false);

	//$('#ocultarSelUnidad').prop('hidden', true);
	//$('#selUnidadMedida').prop('hidden', true);
	$('#selUnidadMedida').append('<option value="'+0+'">NO APLICA</option>');
	$('#inputDescripcion').prop('readonly', false);
	$('#inputRenglon').prop('readonly', false);
	$('#inputCodInsumoUMedida').prop('readonly', false);


}





function anadirTabla(){
	//let renglonAnterior = $('#renglonAnterior').val();
	let inputUnidadEje = $('#inputUnidadEje').val();
	let inputNombreEje = $('#inputNombreEje').val();
	let inputNumero = $('#inputNumero').val();
	let inputCantSolicitada = $('#inputCantSolicitada').val();
	let inputCantAutorizada = $('#inputCantAutorizada').val();
	let inputCodInsumo = $('#inputCodInsumo').val();
	let selUnidadMedida = $('#selUnidadMedida').val();
	let inputDescripcion = $('#inputDescripcion').val();
	let inputRenglon = $('#inputRenglon').val();
	let inputEstimadoQ = $('#inputEstimadoQ').val();
	let selIncluidaPAC = $('#selIncluidaPAC').val();
	let selContratoAbierto = $('#selContratoAbierto').val();
	let inputCodInsumoUMedida= $('#inputCodInsumoUMedida').val();
	let inputUnidadMedida = $('#inputUnidadMedida').val();
	let totalValorQ = $('#totalValorQ').val();



	if($('#renglonAnterior').val() == null || $('#renglonAnterior').val() == "" ||$('#renglonAnterior').val() == undefined ){
		$('#renglonAnterior').val(inputRenglon);
	}

	if(inputCantSolicitada == '' || inputCantSolicitada == null ||inputCantSolicitada == undefined){
		Swal.fire({
		  icon: 'error',
		  title: 'Oops...',
		  text: 'Debe ingresar una cantidad',
		});
	}
	

	/*else if(inputCodInsumo == '' || inputCodInsumo == null || inputCodInsumo == undefined){
		Swal.fire({
		  icon: 'error',
		  title: 'Oops...',
		  text: 'Debe ingresar un codigo',
		});
	}*/

	else if(selIncluidaPAC == 0){
		Swal.fire({
		  icon: 'error',
		  title: 'Oops...',
		  text: 'Debe Seleccionar si esta incluido en el PAC o no',
		});
	}else if(selContratoAbierto ==0){
		Swal.fire({
		  icon: 'error',
		  title: 'Oops...',
		  text: 'Seleccione si es contrato Abierto o no',
		});
	}else if(inputEstimadoQ == '' || inputEstimadoQ == null || inputEstimadoQ == undefined){
		Swal.fire({
		  icon: 'error',
		  title: 'Oops...',
		  text: 'Debe ingresar Valor estimado',
		});
	}else if(selIncluidaPAC == 'N' && totalValorQ > 25000){
		Swal.fire({
		  icon: 'error',
		  title: 'Oops...',
		  text: 'El valor de compra supera los Q25,000.00 el insumo debe estar agregado en el PAC',
		});
	}else if($('#renglonAnterior').val() != ""){
		//console.log(parseInt($('#renglonAnterior').val()));
		if(parseInt($('#renglonAnterior').val()) != parseInt(inputRenglon)){
			//console.log(parseInt(inputRenglon));
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'No se puede agregar insumos con distinto renglon',
			});
		}else{
			$('#tbodyDetSolicitud').append('<tr>'
				+'<td>'+inputCantSolicitada+'</td>'
				+'<td></td>'
				+'<td>'+inputCodInsumo+'</td>'
				+'<td>'+inputCodInsumoUMedida+'</td>'//esto debe ir a otro lado de la tabla
				+'<td>'+inputDescripcion+'</td>'
				+'<td>'+inputRenglon+'</td>'
				+'<td>'+totalValorQ+'</td>'
				+'<td>'+selIncluidaPAC+'</td>'
				+'<td>'+selContratoAbierto+'</td>'
				+'<td hidden>'+selUnidadMedida+'</td>'
				+'<td><button class="btn btn-danger borrar"><i class="far fa-trash-alt"></i></button></td>'
				+'</tr>');

			$('#inputCantSolicitada').val('');
			$('#inputCantAutorizada').val('');
			$('#inputCodInsumo').val('');
			$('#selUnidadMedida').empty();
			$('#inputDescripcion').val('');
			$('#inputRenglon').val('');
			$('#inputEstimadoQ').val('');
			$('#selIncluidaPAC').val(0);
			$('#selContratoAbierto').val(0);
			$('#inputCodInsumoUMedida').prop('readonly', true);
			$('#inputDescripcion').prop('readonly', true);
			$('#inputRenglon').prop('readonly', true);
			$('#inputCodInsumoUMedida').val('');


			$('#numUnidadMedidaSinCod').prop('hidden', true);
			$('#inputCodInsumoUMedidaSinCod').prop('hidden', true);
			$('#txtUnidadMedidaSincCod').prop('hidden', true);
			$('#inputInsumoUMedidaSinCod').prop('hidden', true);

			$('#ocultarSelUnidad').prop('hidden', false);
			$('#selUnidadMedida').prop('hidden', false);
			$('#unidadMedidaOcultar').prop('hidden', false);
			$('#inputCodInsumoUMedida').prop('hidden', false);
		}
	}




}

/*funcion para eliminar fila*/
$(document).on('click', '.borrar', function (event) {
	event.preventDefault();
	$(this).closest('tr').remove();
});


function buscarInsumoGeneral(){
	let codInsumo = $('#inputCodInsumo').val();
	$('#selUnidadMedida').empty();
	$('#selUnidadMedida').append('<option>Seleccione Unidad de medida</option>');
	let esperaInsumo = $.ajax({
		url: './api/v1/Insumo.php?AlmacNumCodInsumo=' + codInsumo, //
		type: "GET",
		dataType: "json",
		contentType: "application/json; charset=utf-8",

		success: function (data) {
			var json = data.data;
			//console.log(json);
			$(json).each(function (index, item) {
				ComNumRenglon = json[index].ComNumRenglon;
				ComNumCodInsumo = json[index].ComNumCodInsumo;
				ComStrNomInsumo = json[index].ComStrNomInsumo;
				ComStrCaractInsu = json[index].ComStrCaractInsu;
				ComStrPresentInsu = json[index].ComStrPresentInsu;
				ComStrCantYUnidInsu = json[index].ComStrCantYUnidInsu;
				ComNumCodPresentInsu = json[index].ComNumCodPresentInsu;


				$('#selUnidadMedida').append('<option value="'+ComNumCodPresentInsu+'">'+ComStrPresentInsu+' '+ ComStrCantYUnidInsu+'</option>')
			});
		},
		error: function (data) {
			alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
		}
	});

	$.when(esperaInsumo).done(function () {
		$('#selUnidadMedida').prop('disabled', false);
	});
}

function buscarInsumoEspecifico(codigoUnico){

	$.ajax({
		url: './api/v1/Insumo.php?AlmacNumCodPresentInsu=' + codigoUnico,
		type: "GET",
		dataType: "json",
		contentType: "application/json; charset=utf-8",

		success: function (data) {
			var json = data.data;
			console.log(json);
			$(json).each(function (index, item) {
				ComNumRenglon = json[index].ComNumRenglon;
				ComNumCodInsumo = json[index].ComNumCodInsumo;
				ComStrNomInsumo = json[index].ComStrNomInsumo;
				ComStrCaractInsu = json[index].ComStrCaractInsu;
				ComStrPresentInsu = json[index].ComStrPresentInsu;
				ComStrCantYUnidInsu = json[index].ComStrCantYUnidInsu;
				ComNumCodPresentInsu = json[index].ComNumCodPresentInsu;

				$('#inputCodInsumoUMedida').val(ComStrPresentInsu+ " "+ ComStrCantYUnidInsu);
				$('#inputDescripcion').val(ComStrNomInsumo+': '+ComStrCaractInsu);
				$('#inputRenglon').val(ComNumRenglon);

			});

		},
		error: function (data) {
			alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
		}
	});
}

//Habilitar campos desabilitados
function habilitarInput(id){
	$('#'+id+'').prop('readonly', false);
}

function agregarSolicitud() {
 var parametros = new FormData($("#formularioEnv")[0]);
    
	let inputUnidadEje = $('#inputUnidadEje').val();
	let inputNombreEje = $('#inputNombreEje').val();
	let inputNumero = $('#inputNumero').val();
	let inputCantSolicitada = $('#inputCantSolicitada').val();
	let inputCantAutorizada = $('#inputCantAutorizada').val();
	let inputCodInsumo = $('#inputCodInsumo').val();
	let selUnidadMedida = $('#selUnidadMedida').val();
	let inputDescripcion = $('#inputDescripcion').val();
	let inputRenglon = $('#inputRenglon').val();
	let inputEstimadoQ = $('#inputEstimadoQ').val();
	let selIncluidaPAC = $('#selIncluidaPAC').val();
	let selContratoAbierto = $('#selContratoAbierto').val();
	let observaciones = $('#observaciones').val();

	let inputCodInsumoUMedida = $('#inputCodInsumoUMedida').val();

	parametros.append("ComNumUniEjec", inputUnidadEje);
	parametros.append("ComStrNomUniEjec", inputNombreEje);
	parametros.append("ComStObserv", observaciones);

	/*let datos = {
		ComNumUniEjec: inputUnidadEje,
		ComStrNomUniEjec: inputNombreEje,
		ComStObserv: observaciones
		};
*/
	let esperaEncabezado = $.ajax({
		url: './api/v1/ComSolicitud.php',
		type: 'POST',
		data: parametros,
		contentType: false,
        processData: false,
		beforeSend: function () {
			//$("#btnGuardar").text('GUARDANDO...').prop('disabled', true);
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

			$('#btnGuardar').prop('hidden', true);
			$('#btnInsOtraSol').prop('hidden', false);
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

	$.when(esperaEncabezado).done(function () {
		let NoSolicitud = $('#NoSolicitud').val();
		var tableInfo = Array.prototype.map.call(document.querySelectorAll('#tbodyDetSolicitud tr'), function (tr) {
			return Array.prototype.map.call(tr.querySelectorAll('td'), function (td) {
				return td.innerHTML;
			});
		});

		console.log(tableInfo);

		for (let j = 0; j < tableInfo.length; j++) {
			console.log("solo nombre: " + tableInfo[j][1]);

			let datosDetalle = {
				ComIntRenAfec: tableInfo[j][5],
				ComNumCantiSoli: tableInfo[j][0],
				ComNumCantAut: tableInfo[j][1],
				inputCodInsumoUMedida: tableInfo[j][2],
				ComStrUniMed: tableInfo[j][9],
				ComNumValorEstim: tableInfo[j][6],
				ComCharContAbi: tableInfo[j][8],
				ComCharIncPac: tableInfo[j][7],
				ComNumSolicitud: NoSolicitud,
				ComUnidadDeMedida:tableInfo[j][3],
				ComDescripcionInsumo:tableInfo[j][4],

			};
			console.log("cada datosDetalle enviado");
			console.log(datosDetalle);

			$.ajax({
				url: './api/v1/ComSolicitud.php',
				type: 'POST',
				data: datosDetalle,
				beforeSend: function () {
					$("#btnGuardarRequisicion").text('GUARDANDO...').prop('disabled', true);
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
					$("#btnGuardarRequisicion").text('GUARDAR').attr('disabled', false);
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
					$("#btnGuardarRequisicion").text('GUARDAR').attr('disabled', false);
				}
			});
		}
	})
}

$('#inputEstimadoQ').change(function(){
	console.log("se ejecuta en estimado");
	let estimado = $('#inputEstimadoQ').val();
	let cantidad = $('#inputCantSolicitada').val();
	let total = parseFloat(estimado) * parseInt(cantidad);
	$('#totalValorQ').val(total);
});

$('#inputCantSolicitada').change(function(){
	console.log("se ejecuta en cantidad");
	let estimado = $('#inputEstimadoQ').val();
	let cantidad = $('#inputCantSolicitada').val();
	let total = parseFloat(estimado) * parseInt(cantidad);
	$('#totalValorQ').val(total);
});


function agregarImagen(NoSolicitud) {
    var parametros = new FormData($("#formularioEnv")[0]);
    parametros.append("NoSolicitud", NoSolicitud);

    $.ajax({
        data: parametros,
        url: './api/v1/ComSolicitud.php',
        type: "POST",
        contentType: false,
        processData: false,
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
				}
    })
}


function verPDFPca() {

	$.ajax({
		url: './api/v1/ComPac.php',
		type: "GET",
		dataType: "json",
		contentType: "application/json; charset=utf-8",

		success: function (data) {
			var json = data.data;
			console.log(json);
			$(json).each(function (index, item) {
				ComStrAdjuntoPac = json[index].ComStrAdjuntoPac;
			});
			$('#aPacIfrm').attr("src","./docs/" +ComStrAdjuntoPac );
		},
		error: function (data) {
			alert("No se lograron cargar los datos(InforAgenda)" + data.responseText);
		}
	});

}

$('#aPac').click(function () {
	$('#modalVerPDF').fadeIn();
});

$('#btnInsOtraSol').click(function () {
	InsOtraSolicitud();
});

function InsOtraSolicitud() {
	$('#tbodyDetSolicitud').empty(); //limpiar tabla

	$('#inputCantSolicitada').val('');
	$('#inputCantAutorizada').val('');
	$('#inputCodInsumo').val('');
	$('#selUnidadMedida').empty();
	$('#inputDescripcion').val('');
	$('#inputRenglon').val('');
	$('#inputEstimadoQ').val('');
	$('#selIncluidaPAC').val(0);
	$('#selContratoAbierto').val(0);
	$('#inputCodInsumoUMedida').prop('readonly', true);
	$('#inputDescripcion').prop('readonly', true);
	$('#inputRenglon').prop('readonly', true);
	$('#inputCodInsumoUMedida').val('');


	/*$('#numUnidadMedidaSinCod').prop('hidden', true);
	$('#inputCodInsumoUMedidaSinCod').prop('hidden', true);
	$('#txtUnidadMedidaSincCod').prop('hidden', true);
	$('#inputInsumoUMedidaSinCod').prop('hidden', true);*/

	$('#ocultarSelUnidad').prop('hidden', false);
	$('#selUnidadMedida').prop('hidden', false);
	$('#unidadMedidaOcultar').prop('hidden', false);
	$('#inputCodInsumoUMedida').prop('hidden', false);
	$('#observaciones').val('');
	$('#btnGuardar').prop('hidden', false);
	$('#btnInsOtraSol').prop('hidden', true);
}