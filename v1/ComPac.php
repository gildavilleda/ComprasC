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
//Procedimiento para agregar encabezado Solicitud

            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }

                $nombreArchivo = trim($_FILES['fileAdjuntoPac']['name']); //Tomo el nombre de la imagen y elimina espacion
                $nomGuardar= NULL;
                if($nombreArchivo != NULL) {
                    $patron = '[\s+]'; //Detecta espacion en blanco
                    $sustitución = '';
                    //preg_replace($patron, $sustitución, $cadena);
                    $nombreArchivo = preg_replace($patron, $sustitución, $nombreArchivo); //sustituye expresion regular
                    $fechaactual = date("m.d.y");   //Fecha Actual
                    $no_aleatorio = rand(10, 99); //Generamos dos Digitos aleatorio
                    $archivo = $_FILES['fileAdjuntoPac']['tmp_name']; //Tomo el archivo como tal
                    $ruta = "../../docs/"; // nombre de la capeta contenedora de las imagenes
                    $ruta = $ruta . "/" . $fechaactual . "_" . $no_aleatorio . $nombreArchivo; //completo ruta y nombre del archivo adjuntando otro formato para que no se repita el nombre del mismo
                    $nomGuardar = $fechaactual . "_" . $no_aleatorio . $nombreArchivo;
                    move_uploaded_file($archivo, $ruta); //se coloca el arvhico en la ruta
                }


                // procedimiento para agregar a BD
                $stmt = $Db->Sentencia("EXEC Com.sp_AgPac ?");
                $stmt->bindParam(1, $nomGuardar);
                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
                $stmt->closeCursor();
            } catch (PDOException $p) {
                echo $ObjectJson->Json(0, $p->getMessage(), null);
            }


        break;

    case 'PUT':
        //Procedimiento para modificar
        if(isset($_REQUEST['HdiaNumEstados'])){


            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }

                $stmt = $Db->Sentencia("EXEC Com.sp_ModEstadoCompras ?, ?");

                $stmt->bindParam(1, $_REQUEST{'ComNumSolicitud'});
                $stmt->bindParam(2, $_REQUEST{'HdiaNumEstados'});


                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
                $stmt->closeCursor();
            } catch (PDOException $p) {
                echo $ObjectJson->Json(0, $p->getMessage(), null);
            }
        }

        if(isset($_REQUEST['SegNumUsuarioEnc'])){


            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }

                $stmt = $Db->Sentencia("EXEC Com.sp_AsignarEncargado ?, ?");

                $stmt->bindParam(1, $_REQUEST{'ComNumSolicitud'});
                $stmt->bindParam(2, $_REQUEST{'SegNumUsuarioEnc'});


                $stmt->execute();
                $data = $stmt->fetchAll();
                $data = $data[0];
                echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
                $stmt->closeCursor();
            } catch (PDOException $p) {
                echo $ObjectJson->Json(0, $p->getMessage(), null);
            }
        }

        if(isset($_REQUEST['numTipoCompra'])){


            try {
                $Db = new Database();
                if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                    exit(0);
                }

                $stmt = $Db->Sentencia("EXEC Com.sp_ModTipoCompra ?, ?");

                $stmt->bindParam(1, $_REQUEST{'solicitud'});
                $stmt->bindParam(2, $_REQUEST{'numTipoCompra'});

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


            //$CitNumEspecialidad = $_REQUEST['CitNumEspecialidad'];
            $data = $Db->GetData("SELECT TOP(1)[ComNumPac]
                                        ,[ComStrAdjuntoPac]
                                        ,[ComDatCreacion]
                                        ,[ComStrUsuarioIng]
                                        ,[ComNumEstado]
                                        FROM [HNE001].[Com].[Pac] ORDER BY ComNumPac DESC", $_SESSION['dbUser'], $_SESSION['dbPass']);





        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}


