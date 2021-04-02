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


        /*if (isset($_REQUEST['CitNumMedico']) != "") {
            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }


                $stmt = $Db->Sentencia("EXEC cita.sp_AgMedico ?, ?, ?, ?, ?");

                $stmt->bindParam(1, $_REQUEST{'CitStrNombre'});
                $stmt->bindParam(2, $_REQUEST{'CitStrApellido'});
                $stmt->bindParam(3, $_REQUEST{'CitStrDireccion'});
                $stmt->bindParam(4, $_REQUEST{'CitStrTelefono'});
                $stmt->bindParam(5, $_REQUEST{'CitStrCorreoElec'});

                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
                $stmt->closeCursor();
            } catch (PDOException $p) {
                echo $ObjectJson->Json(0, $p->getMessage(), null);
            }
        }*/

        break;

    case 'PUT':
        //Procedimiento para modificar
       /* try {
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
        }*/
        break;
    case 'DELETE':
//Procedimiento para Eliminar
       /* try {
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
        }*/
        break;

    case 'GET':
//Procedimiento para Mostrar
        $Db = new Database();
        if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }

        if(isset($_REQUEST['ComNumTipCompra'])){
            $ComNumTipCompra = $_REQUEST['ComNumTipCompra'];
            $data = $Db->GetData("SELECT * FROM Com.ComEstatus WHERE ComNumTipCompra = '$ComNumTipCompra'", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        if(isset($_REQUEST['TipoUsuario'])){
            $TipoUsuario = $_REQUEST['TipoUsuario'];
            $data = $Db->GetData("SELECT SegNumUsuario, SegStrUsuario, SegStrNomUsuario FROM seguridad.Usuario WHERE SegNumRol = '$TipoUsuario'", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }
        if(isset($_REQUEST['tipoCompra'])){
            $data = $Db->GetData("SELECT top(5) * FROM Com.ComTipoCompra order by CompNumTipCompra desc", $_SESSION['dbUser'], $_SESSION['dbPass']);
        }

        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}