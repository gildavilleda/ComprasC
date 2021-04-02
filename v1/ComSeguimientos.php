<?php
/**
 * Created by PhpStorm.
 * User: jrodriguez
 * Date: 13/03/2020
 * Time: 17:21 PM
 */
require_once '../../functions/Database.php';
require_once '../../functions/JsonObject.php';
session_start();

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header("Content-Type: application/json; charset=UTF-8");

$ObjectJson = new JsonObject();


if (!isset($_SESSION['dbUser'])) {
    echo $ObjectJson->Json('0', 'Usuario no autenticado', null);
    http_response_code(403);
    exit(0);
}

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
//Procedimiento para agregar
        //seguimiento asiganr usuairo
        if (isset($_REQUEST['ComStrUsuarioAsignar'])) {
            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }

                $stmt = $Db->Sentencia("EXEC Com.sp_AgSeguimientoAsignacion ?, ?");

                $stmt->bindParam(1, $_REQUEST{'ComStrUsuarioAsignar'});
                $stmt->bindParam(2, $_REQUEST{'ComNumSolicitud'});

                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
                $stmt->closeCursor();
            } catch (PDOException $p) {
                echo $ObjectJson->Json(0, $p->getMessage(), null);
            }
        }
            //seguimiento de cambio de estado
        if (isset($_REQUEST['numEstado'])) {
            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }

                $stmt = $Db->Sentencia("EXEC Com.sp_AgSeguimientoCambioEstado ?, ?");

                $stmt->bindParam(1, $_REQUEST{'numEstado'});
                $stmt->bindParam(2, $_REQUEST{'solicitud'});

                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
                $stmt->closeCursor();
            } catch (PDOException $p) {
                echo $ObjectJson->Json(0, $p->getMessage(), null);
            }
        }

            //seguimiento de cambio de Tipo de Compra
        if (isset($_REQUEST['numTipoCompra'])) {
            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }

                $stmt = $Db->Sentencia("EXEC Com.sp_AgSeguimientoCambioTipoCompra ?, ?");

                $stmt->bindParam(1, $_REQUEST{'numTipoCompra'});
                $stmt->bindParam(2, $_REQUEST{'solicitud'});

                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
                $stmt->closeCursor();
            } catch (PDOException $p) {
                echo $ObjectJson->Json(0, $p->getMessage(), null);
            }
        }
        //seguimiento agregado desde pantalla dar seguimiento
        if (isset($_REQUEST['NumSolicitudSeg'])) {
            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }
                //procedimiento para renombrar archivo y moverlo a la carpeta del servidor
                $nombreArchivo = trim($_FILES['adjuntoDictamen']['name']); //Tomo el nombre de la imagen y elimina espacion
                $nomGuardar= NULL;
                if($nombreArchivo != NULL) {
                    $patron = '[\s+]'; //Detecta espacion en blanco
                    $sustitución = '';
                    //preg_replace($patron, $sustitución, $cadena);
                    $nombreArchivo = preg_replace($patron, $sustitución, $nombreArchivo); //sustituye expresion regular
                    $fechaactual = date("m.d.y");   //Fecha Actual
                    $no_aleatorio = rand(10, 99); //Generamos dos Digitos aleatorio
                    $archivo = $_FILES['adjuntoDictamen']['tmp_name']; //Tomo el archivo como tal
                    $ruta = "../../docs/"; // nombre de la capeta contenedora de las imagenes
                    $ruta = $ruta . "/" . $fechaactual . "_" . $no_aleatorio . $nombreArchivo; //completo ruta y nombre del archivo adjuntando otro formato para que no se repita el nombre del mismo
                    $nomGuardar = $fechaactual . "_" . $no_aleatorio . $nombreArchivo;
                    move_uploaded_file($archivo, $ruta); //se coloca el arvhico en la ruta
                }

                // procedimiento para agregar a BD

                $stmt = $Db->Sentencia("EXEC Com.sp_AgSeguimiento ?, ?, ?");

                $stmt->bindParam(1, $_REQUEST{'textSegumiento'});
                $stmt->bindParam(2, $_REQUEST{'NumSolicitudSeg'});
                $stmt->bindParam(3, $nomGuardar);

                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
                $stmt->closeCursor();
            } catch (PDOException $p) {
                echo $ObjectJson->Json(0, $p->getMessage(), null);
            }
        }

        break;

    case 'PUT':
        //Procedimiento para modificar
        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC cita.sp_ModMedico ?, ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'CitNumMedico'});
            $stmt->bindParam(2, $_REQUEST{'CitStrNombre'});
            $stmt->bindParam(3, $_REQUEST{'CitStrApellido'});
            $stmt->bindParam(4, $_REQUEST{'CitStrDireccion'});
            $stmt->bindParam(5, $_REQUEST{'CitStrTelefono'});
            $stmt->bindParam(6, $_REQUEST{'CitStrCorreoElec'});

            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $p->getMessage(), null);
        }
        break;
    case 'DELETE':
//Procedimiento para Eliminar
        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC cita.sp_elimMedico ?");

            $stmt->bindParam(1, $_REQUEST{'CitNumMedico'});

            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, $p->getMessage(), null);
        }
        break;

    case 'GET':
//Procedimiento para Mostrar
        $Db = new Database();
        if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }

        if(isset($_REQUEST['ComNumSolicitud'])){
            $ComNumSolicitud = $_REQUEST['ComNumSolicitud'];
            $data = $Db->GetData("SELECT * FROM Com.vw_seguimiento WHERE ComNumSolicitud = '$ComNumSolicitud' order by ComNumSeguimiento asc ", $_SESSION['dbUser'], $_SESSION['dbPass']);

        } else if (isset($_REQUEST['CitNumMedico'])) {
            $CitNumMedico = $_REQUEST['CitNumMedico'];
            $data = $Db->GetData("SELECT * FROM cita.vw_MedicoEspecialidad WHERE CitNumMedico = '$CitNumMedico'", $_SESSION['dbUser'], $_SESSION['dbPass']);

        } else {
            //si no se manda ninguna variable
            $data = $Db->GetData("SELECT * FROM cita.Medico", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }



        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}