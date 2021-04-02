<?php
/**
 * Created by PhpStorm.
 * User: Jasson Rodríguez
 * Date: 7/16/2019
 * Time: 2:37 PM
 */

class FuncRepoNomina
{
    protected $infoCita;

    function InfoRepoNomina($data)
    {
        //print_r($data);
        $this->infoCita = $data;
    }

    function RenderInfoNomina()
    {
        $matriz2 = $this->infoCita[0];
        ?>
        <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

        <html>
        <head>
            <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
            <title></title>
            <meta name="generator" content="LibreOffice 6.3.4.2 (Linux)"/>
            <meta name="author" content="Usuario"/>
            <meta name="created" content="2020-02-13T20:48:05"/>
            <meta name="changedby" content="Marisol Camey"/>
            <meta name="changed" content="2020-02-24T14:10:47"/>
            <meta name="AppVersion" content="16.0300"/>
            <meta name="DocSecurity" content="0"/>
            <meta name="HyperlinksChanged" content="false"/>
            <meta name="LinksUpToDate" content="false"/>
            <meta name="ScaleCrop" content="false"/>
            <meta name="ShareDoc" content="false"/>

            <style type="text/css">
                body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Calibri"; font-size:x-small }
                a.comment-indicator:hover + comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em;  }
                a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em;  }
                comment { display:none;  }
            </style>

        </head>

        <body>
        <table cellspacing="0" border="0">
            <colgroup width="69"></colgroup>
            <colgroup width="115"></colgroup>
            <colgroup width="114"></colgroup>
            <colgroup width="121"></colgroup>
            <colgroup width="79"></colgroup>
            <colgroup width="107"></colgroup>
            <colgroup width="153"></colgroup>
            <colgroup width="206"></colgroup>
            <colgroup width="161"></colgroup>
            <colgroup width="108"></colgroup>
            <colgroup span="6" width="79"></colgroup>
            <tr>
                <td colspan=9 height="101" align="center" valign=middle><font size=5 color="#000000">Reporte Nominal de Citas de pacientes en Consulta Externa y Hospital de Dia<br>Hospital Nacional Especializado de Villa Nueva</font></td>
                <td align="left" valign=middle><font size=6 color="#000000"><br></font></td>
                <td colspan=6 rowspan=9 align="left" valign=middle bgcolor="#FFFFFF"><font size=4 color="#000000"><br></font></td>
            </tr>
            <tr>
                <td height="24" align="left" valign=bottom><b><font size=4 color="#000000">Especialidad:</font></b></td>
                <td align="left" valign=bottom><b><font size=4 color="#000000"><br></font></b></td>
                <td align="left" valign=bottom><font size=4 color="#000000"><?php echo $matriz2['CitStrEspecialidad']; ?></font></td>
                <td align="left" valign=bottom><font size=4 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font size=4 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font size=4 color="#000000"><br></font></td>
                <td align="left" valign=bottom><b><font size=3 color="#000000">Fecha de Citas:</font></b></td>
                <td align="left" valign=bottom><font size=3 color="#000000"><?php echo $matriz2['FechaMostrar']; ?></font></td>
                <td align="left" valign=bottom><font size=4 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td height="24" align="left" valign=bottom><b><font size=4 color="#000000">No. de Clínica:</font></b></td>
                <td align="left" valign=bottom><b><font size=4 color="#000000"><br></font></b></td>
                <td align="left" valign=bottom sdval="1" sdnum="1033;"><font size=4 color="#000000"><?php echo $matriz2['CitStrNomClinica']; ?></font></td>
                <td align="left" valign=bottom><font size=4 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font size=4 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font size=4 color="#000000"><br></font></td>
                <td rowspan=2 align="left" valign=bottom><b><font size=4 color="#000000">No. de Consultas del día:</font></b></td>
                <td rowspan=2 align="center" valign=bottom sdval="10" sdnum="1033;"><font size=4 color="#000000"><?php echo $matriz2['Cantidad']; ?></font></td>
                <td align="left" valign=bottom><font size=4 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td height="24" align="left" valign=bottom><b><font size=4 color="#000000">Nombre del Clínico:</font></b></td>
                <td align="left" valign=bottom><b><font size=4 color="#000000"><br></font></b></td>
                <td align="left" valign=bottom><b><font size=4 color="#000000"><br></font></b></td>
                <td align="left" valign=bottom><font size=4 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font size=4 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font size=4 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font size=4 color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td height="20" align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-top: 2px solid #c00000; border-bottom: 1px solid #000000; border-left: 2px solid #c00000; border-right: 1px solid #000000" colspan=3 height="20" align="center" valign=middle><b><font color="#000000">No. de Expediente</font></b></td>
                <td style="border-top: 2px solid #c00000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b><font color="#000000">Hora de Consulta</font></b></td>
                <td style="border-top: 2px solid #c00000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #c00000" colspan=5 align="center" valign=middle><b><font color="#000000">Nombre y Apellido de Paciente</font></b></td>
            </tr>
            <?php foreach ($matriz2['ArrayContactos'] as $row) { ?>
                <tr>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 2px solid #c00000; border-right: 1px solid #000000" colspan=3 height="24" align="left" valign=middle><font size=4 color="#000000"><?php echo $row['CitStrRegMedico'] ?> </font></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle sdnum="1033;1033;H:MM"><?php echo $row['TiempoEntrada'] ?><font size=4 color="#000000"></font></b></td>
                    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #c00000" colspan=5 align="left" valign=middle><font size=4 color="#000000"><?php echo $row['Nombre'] ?></font></td>
                </tr>
            <?php }//Fin de Foreach
            ?>
            <tr>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 2px solid #c00000; border-right: 1px solid #000000" colspan=3 height="24" align="left" valign=middle><b><font size=4 color="#000000"></font></b></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle sdnum="1033;1033;H:MM"><font size=4 color="#000000"><br></font></b></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #c00000" colspan=5 align="left" valign=middle><b><font size=4 color="#000000"></font></b></td>
            </tr>

            <tr>
                <td style="border-top: 2px solid #c00000; border-bottom: 1px solid #000000; border-left: 2px solid #c00000; border-right: 1px solid #000000" colspan=2 height="71" align="center" valign=middle><b><font color="#000000">Fecha que Entrego Archivo a Enfermería</font></b></td>
                <td style="border-top: 2px solid #c00000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b><font color="#000000">Fecha que Recibe Enfermeria de Archivo</font></b></td>
                <td style="border-top: 2px solid #c00000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b><font color="#000000">Fecha que devuelve Enfermería a Archivo Central</font></b></td>
                <td style="border-top: 2px solid #c00000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #c00000" colspan=2 align="center" valign=middle><b><font color="#000000">Fecha que Recibe Expedientes Archivo Central de Enfermería</font></b></td>
                <td style="border-top: 2px solid #c00000; border-bottom: 1px solid #000000; border-left: 2px solid #c00000; border-right: 1px solid #000000" align="left" valign=middle><b><font color="#000000">No. de Expedientes Entregados a Enfermería</font></b></td>
                <td style="border-top: 2px solid #c00000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #c00000" align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 2px solid #c00000; border-right: 1px solid #000000" colspan=2 height="80" align="center" valign=middle><b><font color="#000000"><br></font></b></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b><font color="#000000"><br></font></b></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><b><font color="#000000"><br></font></b></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #c00000" colspan=2 align="center" valign=middle><b><font color="#000000"><br></font></b></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 2px solid #c00000; border-right: 1px solid #000000" align="left" valign=middle><b><font color="#000000">No. de Expedientes Recibidos en Archivo Central</font></b></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #c00000" align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-top: 1px solid #000000; border-bottom: 2px solid #c00000; border-left: 2px solid #c00000; border-right: 1px solid #000000" colspan=2 rowspan=2 height="158" align="center" valign=bottom><font color="#000000">Firma y sello de Responsable</font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 2px solid #c00000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 rowspan=2 align="center" valign=bottom><font color="#000000">Firma y sello de Responsable</font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 2px solid #c00000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 rowspan=2 align="center" valign=bottom><font color="#000000">Firma y sello de Responsable</font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 2px solid #c00000; border-left: 1px solid #000000; border-right: 2px solid #c00000" colspan=2 rowspan=2 align="center" valign=bottom><font color="#000000">Firma y sello de Responsable</font></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 2px solid #c00000; border-right: 1px solid #000000" align="left" valign=middle><b><font color="#000000">No. de Expedientes Pendientes de entregar por Enfermería</font></b></td>
                <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #c00000" align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-top: 1px solid #000000; border-bottom: 2px solid #c00000; border-left: 2px solid #c00000; border-right: 1px solid #000000" align="left" valign=middle><b><font color="#000000">No. de vales solicitados para la Clinica</font></b></td>
                <td style="border-top: 1px solid #000000; border-bottom: 2px solid #c00000; border-left: 1px solid #000000; border-right: 2px solid #c00000" align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td style="border-top: 2px solid #c00000; border-bottom: 2px solid #c00000; border-left: 2px solid #c00000; border-right: 2px solid #c00000" colspan=10 rowspan=5 height="100" align="left" valign=top><b><font color="#000000">Notas/Observaciones:</font></b></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
            <tr>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
                <td align="left" valign=bottom><font color="#000000"><br></font></td>
            </tr>
        </table>
        <!-- ************************************************************************** -->
        </body>

        </html>

        <?php
    }
}