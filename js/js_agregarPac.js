$(document).ready(function() {

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


function agregarPac() {
    var parametros = new FormData($("#formularioEnv")[0]);
    $.ajax({
        url: './api/v1/ComPac.php',
        type: 'POST',
        data: parametros,
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
            $("#btnGuardar").text('GUARDAR').attr('disabled', true);

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
}
