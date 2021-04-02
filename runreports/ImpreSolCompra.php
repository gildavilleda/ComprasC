<?php
session_start();
require_once '../functions/Database.php';
require_once '../functions/FuncImpreSolCompra.php';
require_once './../vendor/autoload.php';

use Spipu\Html2Pdf\Exception\ExceptionFormatter;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Html2Pdf;

$Db = new Database();
$ObjectJson = new JsonObject();
$html2pdf = new Html2Pdf('P', 'A4', 'fr');
$rep = new FuncImpreSolCompra();

if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
    echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
    exit(0);
}

$NumSolicitud = $_REQUEST['NumSolicitud'];


$data = $Db->GetData("	SELECT * FROM Com.vw_SolRecibidas WHERE ComNumSolicitud = $NumSolicitud", $_SESSION['dbUser'], $_SESSION['dbPass']);

$data[0]['ArrayDetalle'] = $Db->GetData("SELECT    ComDetSolicitud
				,ComIntRenAfec
				,ComNumCantiSoli
				,CASE WHEN ComNumCantAut = 0 THEN '' END ComNumCantAut
				,ComNumCodInsu
				,ComStrUniMed
				,ComNumValorEstim
			    ,CASE 
					WHEN ComCharContAbi = 'S' THEN 'SI'
					ELSE 'NO' END ComCharContAbi
			    ,CASE 
			        WHEN ComCharIncPac = 'S' THEN 'SI'
				    ELSE 'NO' END ComCharIncPac
				,ComNumSolicitud
				,ComUnidadDeMedida
				,ComDescripcionInsumo 
      FROM Com.ComDetSolicitud WHERE ComNumSolicitud= $NumSolicitud", $_SESSION['dbUser'], $_SESSION['dbPass']);
$rep->InfoImpre($data);
try {
    //ob_start();
    $rep->RenderImpreSolCompra();
    //$content = ob_get_clean();
    //$html2pdf->writeHTML($content);
} catch (Html2PdfException $e) {
    $html2pdf->clean();
    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}