function registra_paciente() {

    var parametro = new FormData($("#formularioEnv")[0]);
    $.ajax({
        data: parametros,
        url: './api/v1/insertar_ajax.php',
        type: "POST",
        contentType: false,
        processData: false,
        beforeSend: function () {

        },
        success: function (response) {
            alert(response);
        }
    })
}