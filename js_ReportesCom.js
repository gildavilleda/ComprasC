$('#tbIReportesMostrar').DataTable( {


    "oSearch": {"bSmart": false,
        "bRegex": true,
        "sSearch": ""  },//busca un dato exacto
    dom: 'Blfrtip',
    buttons: [
        'print', 'pdf'
    ],
    "ajax": "./api/v1/ComReporte.php",
    "columns": [

        { "data": "ComDatFechaCreacion" },
        { "data": "ComIntRenAfec" },
        { "data": "ComNumCodInsu" },
        { "data": "ComStrUniMed" },
        { "data": "ComUnidadDeMedida" },
        { "data": "ComValorEstim" },
        { "data": "ComStrUniEjec" },
        { "data": "SegNumUsuarioEnc" },
        { "data": "SegNumUsuarioSol" },
        { "data": "ComStrDepto" },
        { "data": "ComStrDetalleComp" },
        { "data": "ComStrTitulo" },
        { "data": "ComStrDescrip" },
        { "data": "ComStrCreador" }

    ]
    
} );

