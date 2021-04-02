function fnOpenForm(evt, formname) {
    var Count = 0;
    $("#content").hide();


    var permisos = $.getJSON("./api/v1/Permisos.php?SegStrNomPermiso=" + formname, function (data) {
        Count = data.data.length;

    });

    $.when(permisos).done(function () {
        console.log(Count);
        $("#content").empty();
        if (Count > 0) {
            $("#content").load('./forms/' + formname + '.php');
        } else {
            $("#content").load('./forms/FrmDenegado.php');
        }
        $("#content").show();
    }).fail(function () {
        if (permisos.status === 403) {
            location.reload();
        }
    });
}