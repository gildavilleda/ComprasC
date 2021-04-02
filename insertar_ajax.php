<?php

    $nom = $_POST ["inputNombreReg"];
    $foto = $_FILES["inputImagen"];

    if ($foto["type"] == "image/jpg" or $foto["type"] == "image/jpng"){

        $nom_encriptado = md5($foto["tmp_name"]).".jpg";
        $ruta = "../fotos/codVideo" .$nom_encriptado;
        move_uploaded_file($foto["tmp_name"], $ruta);
        mysql_query("insert into paciente (nom_pac, foto_pac) value('', '$nom','$nom_encriptado')");

    }
