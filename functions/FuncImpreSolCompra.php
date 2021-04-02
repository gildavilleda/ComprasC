<?php
/**
 * Created by PhpStorm.
 * User: Jasson Rodríguez
 * Date: 23/03/2020
 * Time: 9:07 PM
 */

class FuncImpreSolCompra
{
    protected $infoSol;

    function InfoImpre($data)
    {
        //print_r($data);
        $this->infoSol = $data;
    }

    function RenderImpreSolCompra()
    {
        $cont = 1;
        $matriz2 = $this->infoSol[0];
        ?>

        <!doctype html public "-//w3c//dtd xhtml 1.0 transitional//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd">
        <html xmlns:v="urn:schemas-microsoft-com:vml"
              xmlns:o="urn:schemas-microsoft-com:office:office"
              xmlns:x="urn:schemas-microsoft-com:office:excel"
              xmlns="http://www.w3.org/TR/REC-html40">

        <head>
            <meta http-equiv=Content-Type content="text/html; charset=utf-8">
            <meta name=ProgId content=Excel.Sheet>
            <meta name=Generator content="Aspose.Cell ">
            <link rel=File-List href="a98gq-ykhq9_files/filelist.xml">
            <link rel=Edit-Time-Data href="a98gq-ykhq9_files/editdata.mso">
            <link rel=OLE-Object-Data href="a98gq-ykhq9_files/oledata.mso">
            <!--[if gte mso 9]><xml>
                <o:DocumentProperties>
                    <o:Author>vlemus</o:Author>
                    <o:LastPrinted>2020-02-04T14:11:12Z</o:LastPrinted>
                    <o:Created>2018-08-22T08:07:00Z</o:Created>
                    <o:LastSaved>2020-08-06T10:14:28Z</o:LastSaved>
                </o:DocumentProperties>
            </xml><![endif]-->
            <style>
                <!--table
                {mso-displayed-decimal-separator:"\.";
                    mso-displayed-thousand-separator:"\,";}
                @page
                {
                    mso-header-data:"&CMINISTERIO DE SALUD PÚBLICA Y ASISTENCIA SOCIAL HOSPITAL NACIONAL ESPECIALIZADO DE VILLA NUEVA SOLICITUD DE PEDIDO";
                    mso-footer-data:"";
                    margin:0.75in 0.25in 0.75in 0.25in;
                    mso-header-margin:0.3in;
                    mso-footer-margin:0.3in;
                    mso-page-orientation:Portrait;
                    mso-horizontal-page-align:center;
                    mso-vertical-page-align:center;
                }
                @media print {
                    @page {
                        size: 230mm 345mm;
                    }
                }
                tr
                {mso-height-source:auto;
                    mso-ruby-visibility:none;}
                col
                {mso-width-source:auto;
                    mso-ruby-visibility:none;}
                br
                {mso-data-placement:same-cell;}
                .style0
                {

                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border:none;
                    mso-protection:locked visible;
                    mso-style-name:Normal;
                    mso-style-id:0;}
                .font0
                {
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif"; }
                .font1
                {
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif"; }
                .font2
                {
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif"; }
                .font3
                {
                    color:#000000;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif"; }
                .font4
                {
                    color:#000000;
                    font-size:8pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif"; }
                .font5
                {
                    color:#000000;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif"; }
                .font6
                {
                    color:#000000;
                    font-size:7pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif"; }
                .font7
                {
                    color:#000000;
                    font-size:10pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif"; }
                .font8
                {
                    color:#000000;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif"; }
                .font9
                {
                    color:#000000;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif"; }
                .font10
                {
                    color:#000000;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    text-decoration:underline;
                    font-family:"Arial","sans-serif"; }
                .font11
                {
                    color:#000000;
                    font-size:7pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif"; }
                .font12
                {
                    color:#000000;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    text-decoration:underline;
                    font-family:"Arial","sans-serif"; }
                .font13
                {
                    color:#000000;
                    font-size:6pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif"; }
                .font14
                {
                    color:#FFFFFF;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif"; }
                td
                {mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border:none;
                    mso-protection:locked visible;
                    mso-ignore:padding;}
                .style0
                {
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                    mso-style-name:"Normal";
                }
                .style1
                {
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style2
                {
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style3
                {
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style4
                {
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style5
                {
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style6
                {
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style7
                {
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style8
                {
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style9
                {
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style10
                {
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style11
                {
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style12
                {
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style13
                {
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style14
                {
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x15
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .style16
                {
                    mso-number-format:"0%";
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                    mso-style-name:"Percent";
                }
                .style17
                {
                    mso-number-format:"_-\0022Q\0022* \#\,\#\#0\.00_-\;\\-\0022Q\0022* \#\,\#\#0\.00_-\;_-\0022Q\0022* \0022-\0022??_-\;_-\@_-";
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                    mso-style-name:"Currency";
                }
                .style18
                {
                    mso-number-format:"_\(\0022$\0022* \#\,\#\#0_\)\;_\(\0022$\0022* \(\#\,\#\#0\)\;_\(\0022$\0022* \0022-\0022_\)\;_\(\@_\)";
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                    mso-style-name:"Currency [0]";
                }
                .style19
                {
                    mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \(\#\,\#\#0\.00\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                    mso-style-name:"Comma";
                }
                .style20
                {
                    mso-number-format:"_\(* \#\,\#\#0_\)\;_\(* \(\#\,\#\#0\)\;_\(* \0022-\0022_\)\;_\(\@_\)";
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                    mso-style-name:"Comma [0]";
                }
                .style21
                {
                    mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                    mso-style-name:"Millares 2";
                }
                .style22
                {
                    mso-number-format:"_-* \#\,\#\#0\.00_-\;\\-* \#\,\#\#0\.00_-\;_-* \0022-\0022??_-\;_-\@_-";
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:8pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                    mso-style-name:"Millares 2 2";
                }
                .style23
                {
                    mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                    mso-style-name:"Millares 3";
                }
                .style24
                {
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                    mso-style-name:"Normal 2";
                }
                .style25
                {
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:11pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Calibri","sans-serif";
                    mso-protection:locked visible;
                    mso-style-name:"Normal 2 2";
                }
                .style26
                {
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                    mso-style-name:"Normal 3";
                }
                .x27
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x28
                {
                    mso-style-parent:style17;
                    mso-number-format:"_-\0022Q\0022* \#\,\#\#0\.00_-\;\\-\0022Q\0022* \#\,\#\#0\.00_-\;_-\0022Q\0022* \0022-\0022??_-\;_-\@_-";
                    vertical-align:middle;
                    text-align: center;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x29
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:top;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x30
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:top;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x31
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:top;
                    white-space:normal;word-wrap:break-word;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x32
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x33
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x34
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x35
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:7pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x36
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x37
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    text-align: center;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x38
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:top;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x39
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    text-align: center;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:none;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x40
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    text-align: center;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x41
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    text-align: center;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:2px solid windowtext;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x42
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:top;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x43
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x44
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x45
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:8pt;
                    font-weight:200;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                    border-bottom: 1px solid windowtext;

                }
                .x46
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x47
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:normal;word-wrap:break-word;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x48
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x49
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x50
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:top;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x51
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:top;
                    white-space:normal;word-wrap:break-word;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x52
                {
                    mso-style-parent:style0;
                    mso-number-format:"\#\,\#\#0";
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x53
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x54
                {
                    mso-style-parent:style0;
                    mso-number-format:"\#\,\#\#0";
                    vertical-align:middle;
                    text-align: center;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x55
                {
                    mso-style-parent:style0;
                    mso-number-format:"\#\,\#\#0";
                    vertical-align:top;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x56
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
                    text-align: center;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x57
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x58
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:normal;word-wrap:break-word;
                    mso-pattern:auto;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x59
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:8pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x60
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:normal;word-wrap:break-word;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x61
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    text-align: center;
                    white-space:normal;word-wrap:break-word;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x62
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    text-align: center;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x63
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
                    text-align: center;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x64
                {
                    mso-style-parent:style0;
                    mso-number-format:"\@";
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x65
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:top;
                    white-space:normal;word-wrap:break-word;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    color:#000000;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x66
                {
                    mso-style-parent:style17;
                    mso-number-format:"_-\0022Q\0022* \#\,\#\#0\.00_-\;\\-\0022Q\0022* \#\,\#\#0\.00_-\;_-\0022Q\0022* \0022-\0022??_-\;_-\@_-";
                    vertical-align:middle;
                    text-align: center;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x67
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    text-align: center;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x68
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:8pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x69
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    text-align: center;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x70
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    text-align: center;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x71
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
                    text-align: center;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x72
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    text-align: center;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x73
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x74
                {
                    mso-style-parent:style0;
                    mso-number-format:"\@";
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x75
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:top;
                    white-space:normal;word-wrap:break-word;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x76
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:top;
                    white-space:normal;word-wrap:break-word;
                    mso-pattern:auto;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x77
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x78
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x79
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:normal;word-wrap:break-word;
                    mso-pattern:auto;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x80
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:8pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x81
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x82
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:left;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:8pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x83
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x84
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:normal;word-wrap:break-word;
                    mso-pattern:auto;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x85
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:8pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x86
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x87
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    text-align: center;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x88
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:middle;
                    white-space:normal;word-wrap:break-word;
                    mso-pattern:auto;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x89
                {
                    mso-style-parent:style0;
                    mso-number-format:"\@";
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x90
                {
                    mso-style-parent:style21;
                    mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x91
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x92
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:normal;word-wrap:break-word;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x93
                {
                    mso-style-parent:style21;
                    mso-number-format:"_\(* \#\,\#\#0\.00_\)\;_\(* \\\(\#\,\#\#0\.00\\\)\;_\(* \0022-\0022??_\)\;_\(\@_\)";
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x94
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:top;
                    white-space:normal;word-wrap:break-word;
                    mso-pattern:auto;
                    color:#000000;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x95
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:top;
                    white-space:normal;word-wrap:break-word;
                    mso-pattern:auto;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x96
                {
                    mso-style-parent:style21;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x97
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    text-decoration:underline;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x98
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x99
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x100
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:normal;word-wrap:break-word;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x101
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    text-decoration:underline;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x102
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:normal;word-wrap:break-word;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:7pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x103
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    mso-pattern:auto;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    text-decoration:underline;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x104
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    mso-pattern:auto;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    text-decoration:underline;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x106
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x107
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    mso-pattern:auto;
                    font-size:7pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x108
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    mso-pattern:auto;
                    font-size:8pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x109
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x110
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:7pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x111
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x112
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:normal;word-wrap:break-word;
                    mso-pattern:auto;
                    font-size:7pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x113
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:7pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x114
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:7pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x115
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x116
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x117
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    text-decoration:underline;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x118
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:none;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x119
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x120
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x121
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x122
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    text-decoration:underline;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:2px solid windowtext;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x123
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:7pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:none;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x124
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:top;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x125
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x126
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x127
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x128
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x129
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:7pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:none;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x130
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    text-decoration:underline;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x131
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;

                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    text-decoration:underline;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:2px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x132
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:normal;word-wrap:break-word;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x133
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:2px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x134
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:2px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x137
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    mso-pattern:auto;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    text-decoration:underline;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x138
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    mso-pattern:auto;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    text-decoration:underline;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x139
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x140
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    mso-pattern:auto;
                    font-size:7pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x141
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }

                .x146
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x149
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:normal;word-wrap:break-word;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:2px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x150
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x151
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:top;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x152
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:top;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:2px solid windowtext;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x153
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:2px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x154
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:2px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x155
                {
                    mso-style-parent:style0;
                    mso-number-format:"M\/d\/yyyy";
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x156
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:normal;word-wrap:break-word;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x157
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x158
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x159
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:normal;word-wrap:break-word;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x160
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:top;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x161
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:top;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x162
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:top;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x163
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:top;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:2px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x164
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:top;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x165
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:top;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x166
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:top;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x167
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x168
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:top;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x169
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x170
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:normal;word-wrap:break-word;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x171
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x172
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x173
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:none;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x174
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x175
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:1px solid windowtext;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x176
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x177
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x178
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x179
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x180
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x181
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:2px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x182
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:top;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x183
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:top;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x184
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:top;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x185
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x186
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x187
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:none;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x188
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x189
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x190
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x191
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x192
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x193
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x194
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:left;
                    vertical-align:bottom;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x195
                {
                    mso-style-parent:style0;
                    mso-number-format:"\@";
                    text-align:center;
                    vertical-align:middle;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x196
                {
                    mso-style-parent:style0;
                    mso-number-format:"\@";
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x197
                {
                    mso-style-parent:style0;
                    mso-number-format:"\@";
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x198
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:normal;word-wrap:break-word;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x199
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:normal;word-wrap:break-word;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x200
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:normal;word-wrap:break-word;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x201
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:left;
                    vertical-align:middle;
                    white-space:normal;word-wrap:break-word;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x202
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:left;
                    vertical-align:middle;
                    white-space:normal;word-wrap:break-word;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x203
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:left;
                    vertical-align:middle;
                    white-space:normal;word-wrap:break-word;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x204
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:normal;word-wrap:break-word;
                    mso-pattern:auto;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x205
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x206
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x207
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x208
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x209
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:1px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x210
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:1px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x211
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x212
                {
                    mso-style-parent:style0;
                    mso-number-format:"M\/d\/yyyy";
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x213
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:normal;word-wrap:break-word;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x214
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    text-decoration:underline;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:none;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x215
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    text-decoration:underline;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x216
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x217
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:normal;word-wrap:break-word;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x218
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x219
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:normal;word-wrap:break-word;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x220
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x221
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:2px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x222
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x223
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:8pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x224
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    mso-pattern:auto;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x225
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:2px solid windowtext;
                    border-left:1px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x226
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:2px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x227
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:2px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x228
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x229
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:top;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x230
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:2px solid windowtext;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x231
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:9pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:2px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x232
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:top;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:none;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x233
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:top;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:1px solid windowtext;
                    border-right:2px solid windowtext;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x234
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:top;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x235
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:top;
                    white-space:nowrap;
                    background:#D9D9D9;
                    mso-pattern:auto none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:2px solid windowtext;
                    border-bottom:none;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x236
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:normal;word-wrap:break-word;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-top:none;
                    border-right:none;
                    border-bottom:1px solid windowtext;
                    border-left:none;
                    mso-diagonal-down:none;
                    mso-diagonal-up:none;
                    mso-protection:locked visible;
                }
                .x237
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:middle;
                    white-space:normal;word-wrap:break-word;
                    mso-pattern:auto;
                    font-size:10pt;
                    font-weight:400;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection:locked visible;
                }
                .x238
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align: center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    border-bottom: none;
                    font-size:8pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    mso-protection: visible;
                }
                .x239
                {
                    mso-style-parent:style0;
                    mso-number-format:General;
                    text-align:center;
                    vertical-align:bottom;
                    white-space:nowrap;
                    background:#FFFFFF;
                    mso-pattern:auto none;
                    font-size:10pt;
                    font-weight:700;
                    font-style:normal;
                    font-family:"Arial","sans-serif";
                    border-bottom: none;
                    mso-protection:locked visible;
                }
                -->
            </style>
            <!--[if gte mso 9]><xml>
                <x:ExcelWorkbook>
                    <x:ExcelWorksheets>
                        <x:ExcelWorksheet>
                            <x:Name>FORMATO</x:Name>
                            <x:WorksheetOptions>
                                <x:StandardWidth>2592</x:StandardWidth>
                                <x:FitToPage/>
                                <x:Print>
                                    <x:FitWidth>0</x:FitWidth>
                                    <x:ValidPrinterInfo/>
                                    <x:PaperSizeIndex>1</x:PaperSizeIndex>
                                    <x:Scale>64</x:Scale>
                                    <x:HorizontalResolution>600</x:HorizontalResolution>
                                    <x:VerticalResolution>600</x:VerticalResolution>
                                </x:Print>
                                <x:Selected/>
                            </x:WorksheetOptions>
                        </x:ExcelWorksheet>
                    </x:ExcelWorksheets>
                    <x:WindowHeight>12576</x:WindowHeight>
                    <x:WindowWidth>23256</x:WindowWidth>
                    <x:WindowTopX>-108</x:WindowTopX>
                    <x:WindowTopY>-108</x:WindowTopY>
                    <x:RefModeR1C1/>
                    <x:TabRatio>600</x:TabRatio>
                    <x:ActiveSheet>0</x:ActiveSheet>
                </x:ExcelWorkbook>
            </xml><![endif]-->
        </head>
        <body link=blue vlink=purple >

        <table border=0 cellpadding=0 cellspacing=0 width=1113 style='border-collapse:
 collapse;table-layout:fixed;width:834pt'>
            <col width=27 style='mso-width-source:userset;width:20.25pt'>
            <col width=97 style='mso-width-source:userset;width:72.75pt'>
            <col width=80 style='mso-width-source:userset;width:60pt'>
            <col width=75 style='mso-width-source:userset;width:56.25pt'>
            <col width=68 style='mso-width-source:userset;width:51pt'>
            <col width=51 style='mso-width-source:userset;width:38.25pt'>
            <col width=17 span=2 style='mso-width-source:userset;width:12.75pt'>
            <col width=29 style='mso-width-source:userset;width:21.75pt'>
            <col width=51 style='mso-width-source:userset;width:38.25pt'>
            <col width=17 span=2 style='mso-width-source:userset;width:12.75pt'>
            <col width=29 style='mso-width-source:userset;width:21.75pt'>
            <col width=111 style='mso-width-source:userset;width:83.25pt'>
            <col width=125 style='mso-width-source:userset;width:93.75pt'>
            <col width=124 style='mso-width-source:userset;width:93pt'>
            <col width=91 style='mso-width-source:userset;width:68.25pt'>
            <col width=87 style='mso-width-source:userset;width:65.25pt'>
            <tr height=17 style='mso-height-source:userset;height:13.2pt' id='r0'>
                <td colspan=18 rowspan=5 height=88 class=x237 width=1113 style='height:66pt;'>MINISTERIO DE SALUD PÚBLICA Y ASISTENCIA SOCIAL <br>HOSPITAL NACIONAL ESPECIALIZADO DE VILLA NUEVA<br>SOLICITUD DE PEDIDO</td>
            </tr>
            <tr height=17 style='mso-height-source:userset;height:13.2pt' id='r1'>
            </tr>
            <tr height=17 style='mso-height-source:userset;height:13.2pt' id='r2'>
            </tr>
            <tr height=17 style='mso-height-source:userset;height:13.2pt' id='r3'>
            </tr>
            <tr height=17 style='mso-height-source:userset;height:13.2pt' id='r4'>
            </tr>
            <tr height=17 style='mso-height-source:userset;height:13.2pt' id='r5'>
                <td height=17 style='height:13.2pt;'></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class=x37></td>
            </tr>
            <tr height=17 style='mso-height-source:userset;height:12.75pt' id='r6'>
                <td colspan=3 height=17 class=x194 style='height:12.75pt;'>Código Unidad Ejecutora:</td>
                <td colspan=7 class=x205 style='border-bottom:1px solid windowtext;'>285</td>
                <td class=x239></td>
                <td class=x239></td>
                <td class=x239></td>
                <td colspan=2 class=x238>Correlativo Sección de Compras UE:</td>
                <td colspan=3 class=x213 style='border-bottom:1px solid windowtext;'><?php echo $matriz2['mostIdSolicitud']; ?></td>
            </tr>
            <tr height=24 style='mso-height-source:userset;height:18pt' id='r7'>
                <td colspan=3 height=24 class=x194 style='height:18pt;'>Nombre Unidad Ejecutora:</td>
                <td colspan=15 class=x205 style='border-bottom:1px solid windowtext;'>Hospital Nacional Especializado de Villa Nueva </td>
            </tr>
            <tr height=24 style='mso-height-source:userset;height:18pt' id='r8'>
                <td colspan=4 height=24 class=x194 style='height:18pt;'>Nombre Unidad/Depto./Sección solicitante:</td>
                <td colspan=14 class=x207 style='border-bottom:1px solid windowtext;'><?php echo $matriz2['ComStrDepto']; ?></td>
            </tr>
            <tr height=25 style='mso-height-source:userset;height:18.75pt' id='r9'>
                <td colspan=3 height=25 class=x194 style='height:18.75pt;'>Fecha de la solicitud:</td>
                <td colspan=7 class=x212 style='border-bottom:1px solid windowtext;'><?php echo $matriz2['Fecha']; ?></td>
                <td class=x155></td>
                <td class=x155></td>
                <td class=x155></td>
                <td class=x27>Teléfono/ext.</td>
                <td colspan=4 class=x211 style='border-bottom:1px solid windowtext;'>tel</td>
            </tr>
            <tr height=18 class=x71 style='mso-height-source:userset;height:13.8pt' id='r10'>
                <td height=18 class=x69 style='height:13.8pt;'></td>
                <td class=x69></td>
                <td class=x69></td>
                <td class=x69></td>
                <td class=x69></td>
                <td class=x69></td>
                <td class=x69></td>
                <td class=x69></td>
                <td class=x69></td>
                <td class=x69></td>
                <td class=x69></td>
                <td class=x69></td>
                <td class=x69></td>
                <td class=x69></td>
                <td class=x69></td>
                <td class=x69></td>
                <td class=x69></td>
                <td class=x72></td>
            </tr>
            <tr height=17 style='mso-height-source:userset;height:13.2pt' id='r11'>
                <td height=17 class=x62 style='height:13.2pt;'></td>
                <td class=x62></td>
                <td class=x62></td>
                <td class=x62></td>
                <td class=x62></td>
                <td class=x62></td>
                <td class=x62></td>
                <td class=x62></td>
                <td class=x62></td>
                <td class=x62></td>
                <td class=x62></td>
                <td class=x62></td>
                <td class=x62></td>
                <td class=x62></td>
                <td colspan=4 class=x208 style='border-right:2px solid windowtext;border-bottom:1px solid windowtext;'>USO EXCLUSIVO </td>
            </tr>
            <tr height=18 style='mso-height-source:userset;height:13.8pt' id='r12'>
                <td height=17 class=x63 style='height:13.05pt;'></td>
                <td class=x63></td>
                <td class=x63></td>
                <td class=x63></td>
                <td class=x63></td>
                <td class=x63></td>
                <td class=x63></td>
                <td class=x63></td>
                <td class=x63></td>
                <td class=x63></td>
                <td class=x69></td>
                <td class=x69></td>
                <td class=x69></td>
                <td></td>
                <td class=x149>Financiero</td>
                <td colspan=3 class=x225 style='border-right:2px solid windowtext;border-bottom:2px solid windowtext;'>Compras</td>
            </tr>
            <tr height=43 class=x59 style='mso-height-source:userset;height:32.25pt' id='r13'>
                <td height=41 class=x57 style='height:30.75pt;'>No.</td>
                <td class=x58 style='overflow:hidden;'>Cantidad Solicitada</td>
                <td class=x58 style='overflow:hidden;'>Cantidad Autorizada</td>
                <td class=x58 style='overflow:hidden;'>Codigo de Insumo</td>
                <td class=x58 style='overflow:hidden;'>Unidad de Medida</td>
                <td colspan=9 class=x204 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>Descripción del bien o servicio solicitado</td>
                <td class=x150>Renglón afectado</td>
                <td class=x60 style='overflow:hidden;'>Valor estimado en Quetzales</td>
                <td class=x60>Incluído en PAC</td>
                <td class=x60>¿Está en contrato abierto?</td>
                    <?php foreach ($matriz2['ArrayDetalle'] as $row) {

                    ?>
            </tr>
            <tr height=17 style='mso-height-source:userset;height:13.2pt' id='r9'>
                <td height=15 class=x44 style='height:11.7pt;'><?php echo $cont  ?></td>
                <td class=x52><?php echo $row['ComNumCantiSoli'] ?></td>
                <td class=x53><?php echo $row['ComNumCantAut'] ?></td>
                <td class=x45><?php echo $row['ComNumCodInsu'] ?></td>
                <td class=x47 ><?php echo $row['ComUnidadDeMedida'] ?></td>
                <td colspan=9 class=x201 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'><?php echo $row['ComDescripcionInsumo'] ?></td>
                <td class=x96><?php echo $row['ComIntRenAfec'] ?></td>
                <td class=x66><?php /*echo $row['ComNumValorEstim'] */?></td>
                <td class=x66><?php echo $row['ComCharIncPac'] ?></td>
                <td class=x28><?php echo $row['ComCharContAbi'] ?></td>
            </tr>
            <?php $cont ++;}//Fin de Foreach ?>

            <tr height=17 style='mso-height-source:userset;height:13.2pt' id='r15'>
                <td height=15 class=x46 style='height:11.7pt;'></td>
                <td class=x54></td>
                <td class=x46></td>
                <td class=x47></td>
                <td class=x47></td>
                <td colspan=9 class=x198 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>
                    ------------------------ULTIMA LINEA------------------------
                </td>
                <td class=x32></td>
                <td class=x32></td>
                <td class=x32></td>
                <td class=x70></td>
            </tr>
            </tr>
            <tr height=23 style='mso-height-source:userset;height:17.25pt' id='r27'>
                <td height=22 class=x69 style='height:16.5pt;'></td>
                <td class=x69></td>
                <td class=x69></td>
                <td class=x69></td>
                <td class=x69></td>
                <td class=x69></td>
                <td class=x69></td>
                <td class=x69></td>
                <td class=x69></td>
                <td class=x69></td>
                <td class=x69></td>
                <td class=x69></td>
                <td class=x69></td>
                <td class=x69></td>
                <td class=x69></td>
                <td class=x69></td>
                <td class=x69></td>
                <td class=x69></td>
            </tr>
            <tr height=17 style='mso-height-source:userset;height:13.2pt' id='r28'>
                <td colspan=3 height=17 class=x67 style='mso-ignore:colspan;height:13.2pt;'>Justificación/Observaciones:</td>
                <td colspan=15 rowspan=3 height=61 class=x170 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;height:46.2pt;'><?php echo $matriz2['ComStObserv']; ?>
                </td>
            </tr>
            <tr height=23 style='mso-height-source:userset;height:17.25pt' id='r29'>
                <td height=23 class=x33 style='height:17.25pt;'></td>
                <td class=x33></td>
                <td class=x33></td>
            </tr>
            <tr height=22 style='mso-height-source:userset;height:16.5pt' id='r30'>
                <td height=22 class=x33 style='height:16.5pt;'></td>
                <td class=x33></td>
                <td class=x33></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r31'>
                <td height=20 class=x33 style='height:15pt;'></td>
                <td class=x33></td>
                <td class=x33></td>
                <td class=x33></td>
                <td class=x33></td>
                <td class=x33></td>
                <td class=x33></td>
                <td class=x33></td>
                <td class=x33></td>
                <td class=x33></td>
                <td class=x33></td>
                <td class=x33></td>
                <td class=x33></td>
                <td class=x33></td>
                <td class=x33></td>
                <td class=x33></td>
                <td class=x33></td>
                <td class=x33></td>
            </tr>
            <tr height=22 style='mso-height-source:userset;height:16.5pt' id='r32'>
                <td colspan=2 height=22 class=x97 style='mso-ignore:colspan;height:16.5pt;'>Solicitante:</td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.25pt' id='r33'>
                <td height=19 class=x97 style='height:14.25pt;'></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x101></td>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.25pt' id='r34'>
                <td height=19 class=x97 style='height:14.25pt;'></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x101></td>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.25pt' id='r35'>
                <td height=19 class=x97 style='height:14.25pt;'></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x101></td>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.25pt' id='r36'>
                <td height=19 class=x97 style='height:14.25pt;'></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x101></td>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.25pt' id='r37'>
                <td colspan=4 height=18 class=x218 style='border-bottom:1px solid windowtext;height:13.5pt;'><?php echo $matriz2['SegStrNomUsuario']; ?></td>
                <td class=x100></td>
                <td colspan=5 class=x236 style='border-bottom:1px solid windowtext;'></td>
                <td class=x156></td>
                <td class=x156></td>
                <td class=x156></td>
                <td class=x100></td>
                <td colspan=4 class=x218 style='border-bottom:1px solid windowtext;'><?php echo $matriz2['SegStrPuesto']; ?></td>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.25pt' id='r38'>
                <td colspan=4 height=18 class=x171 style='height:13.5pt;'>Nombre completo </td>
                <td class=x98></td>
                <td colspan=5 class=x171>Firma y sello</td>
                <td class=x157></td>
                <td class=x157></td>
                <td class=x157></td>
                <td class=x98></td>
                <td colspan=4 class=x171>Cargo</td>
            </tr>
            <tr height=10 style='mso-height-source:userset;height:7.5pt' id='r39'>
                <td height=10 class=x49 style='height:7.5pt;'></td>
                <td class=x49></td>
                <td class=x49></td>
                <td class=x49></td>
                <td class=x49></td>
                <td class=x49></td>
                <td class=x49></td>
                <td class=x49></td>
                <td class=x49></td>
                <td class=x49></td>
                <td class=x49></td>
                <td class=x49></td>
                <td class=x49></td>
                <td class=x49></td>
                <td class=x49></td>
                <td class=x49></td>
                <td class=x49></td>
                <td class=x49></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r40'>
                <td colspan=2 height=20 class=x97 style='mso-ignore:colspan;height:15pt;'>Autorización:</td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r41'>
                <td height=20 class=x97 style='height:15pt;'></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r42'>
                <td height=20 class=x97 style='height:15pt;'></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r43'>
                <td height=20 class=x97 style='height:15pt;'></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r44'>
                <td height=20 class=x97 style='height:15pt;'></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r45'>
                <td height=20 class=x97 style='height:15pt;'></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
            </tr>
            <tr height=15 style='mso-height-source:userset;height:11.25pt' id='r46'>
                <td height=15 class=x97 style='height:11.25pt;'></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
                <td class=x97></td>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.25pt' id='r47'>
                <td colspan=4 height=18 class=x218 style='border-bottom:1px solid windowtext;height:13.5pt;'>Sr. Jhónnatan Enmanuel Alvarado Cruz</td>
                <td class=x69></td>
                <td colspan=5 class=x216 style='border-bottom:1px solid windowtext;'></td>
                <td class=x158></td>
                <td class=x158></td>
                <td class=x158></td>
                <td class=x69></td>
                <td colspan=4 class=x218 style='border-bottom:1px solid windowtext;'>Gerente Administrativo Financiero a.i.</td>
            </tr>
            <tr height=29 style='mso-height-source:userset;height:21.75pt' id='r48'>
                <td colspan=4 height=28 class=x219 style='height:21pt;'>Nombre Jefe Unidad solicitante Planta Central/Gerente Administrativo Financiero UE</td>
                <td class=x102></td>
                <td colspan=5 class=x217>Firma y sello</td>
                <td class=x159></td>
                <td class=x159></td>
                <td class=x159></td>
                <td class=x102></td>
                <td colspan=4 class=x217>Cargo</td>
            </tr>
            <tr height=18 style='mso-height-source:userset;height:13.8pt' id='r49'>
                <td height=16 class=x102 style='height:12.3pt;'></td>
                <td class=x102></td>
                <td class=x102></td>
                <td class=x102></td>
                <td class=x102></td>
                <td class=x102></td>
                <td class=x102></td>
                <td class=x102></td>
                <td class=x102></td>
                <td class=x102></td>
                <td class=x102></td>
                <td class=x102></td>
                <td class=x102></td>
                <td class=x102></td>
                <td class=x102></td>
                <td class=x102></td>
                <td class=x102></td>
                <td class=x112></td>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.25pt' id='r50'>
                <td colspan=17 height=17 class=x230 style='height:12.75pt;'>PARA USO EXCLUSIVO SECCIÓN FINANCIERA / SECCIÓN DE COMPRAS</td>
                <td class=x116></td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12pt' id='r51'>
                <td colspan=5 height=16 class=x214 style='height:12pt;'>Modalidad de compra</td>
                <td class=x117></td>
                <td class=x117></td>
                <td class=x117></td>
                <td class=x117></td>
                <td class=x117></td>
                <td class=x117></td>
                <td class=x117></td>
                <td class=x117></td>
                <td colspan=3 class=x215>Modalidad de pago</td>
                <td class=x117></td>
                <td class=x122></td>
            </tr>
            <tr height=13 style='mso-height-source:userset;height:9.75pt' id='r52'>
                <td height=13 class=x118 style='height:9.75pt;'></td>
                <td class=x119></td>
                <td class=x119></td>
                <td class=x119></td>
                <td class=x119></td>
                <td class=x119></td>
                <td class=x119></td>
                <td class=x119></td>
                <td class=x119></td>
                <td class=x119></td>
                <td class=x119></td>
                <td class=x119></td>
                <td class=x119></td>
                <td class=x119></td>
                <td class=x119></td>
                <td class=x119></td>
                <td class=x117></td>
                <td class=x122></td>
            </tr>
            <tr height=17 class=x37 style='mso-height-source:userset;height:13.2pt' id='r53'>
                <td height=17 class=x129 style='height:13.2pt;'>COMPRA DIRECTA<span style='mso-spacerun:yes;white-space:nowrap;'>&nbsp; </span></td>
                <td class=x35></td>
                <td class=x34></td>
                <td class=x35>COTIZACIÓN</td>
                <td class=x36></td>
                <td class=x123></td>
                <td class=x35></td>
                <td class=x35></td>
                <td class=x35></td>
                <td class=x35></td>
                <td class=x35></td>
                <td class=x35></td>
                <td class=x35></td>
                <td class=x35>FONDO ROTATIVO</td>
                <td class=x35></td>
                <td class=x36></td>
                <td class=x117></td>
                <td class=x122></td>
            </tr>
            <tr height=17 class=x37 style='mso-height-source:userset;height:13.2pt' id='r54'>
                <td height=17 class=x129 style='height:13.2pt;'>CONTRATO ABIERTO<span style='mso-spacerun:yes;white-space:nowrap;'>&nbsp; </span></td>
                <td class=x35></td>
                <td class=x34></td>
                <td class=x35>LICITACIÓN</td>
                <td class=x36></td>
                <td class=x123></td>
                <td class=x35></td>
                <td class=x35></td>
                <td class=x35></td>
                <td class=x35></td>
                <td class=x35></td>
                <td class=x35></td>
                <td class=x35></td>
                <td class=x35>ACREDITAMIENTO CTA.</td>
                <td class=x35></td>
                <td class=x36></td>
                <td class=x117></td>
                <td class=x122></td>
            </tr>
            <tr height=17 class=x37 style='mso-height-source:userset;height:13.2pt' id='r55'>
                <td height=16 class=x120 style='height:12.45pt;'></td>
                <td class=x121></td>
                <td class=x121></td>
                <td class=x121></td>
                <td class=x121></td>
                <td class=x121></td>
                <td class=x121></td>
                <td class=x121></td>
                <td class=x121></td>
                <td class=x121></td>
                <td class=x121></td>
                <td class=x121></td>
                <td class=x121></td>
                <td class=x121></td>
                <td class=x121></td>
                <td class=x121></td>
                <td class=x130></td>
                <td class=x131></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r56'>
                <td colspan=16 height=18 class=x206 style='border-bottom:1px solid windowtext;height:13.5pt;'>Código Programático</td>
                <td colspan=2 rowspan=8 height=166 class=x232 style='border-right:2px solid windowtext;height:124.5pt;'></td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12pt' id='r57'>
                <td colspan=2 height=14 class=x206 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;height:10.5pt;'>PROG.</td>
                <td class=x128>SUBP.</td>
                <td class=x128>PROY.</td>
                <td class=x128>ACT.</td>
                <td colspan=4 class=x191 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>OBRA</td>
                <td colspan=4 class=x191 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>RENGLÓN</td>
                <td class=x128>UB. GEO</td>
                <td class=x128>FTE. FIN</td>
                <td class=x128>MONTO TOTAL</td>
            </tr>
            <tr height=23 style='mso-height-source:userset;height:17.25pt' id='r58'>
                <td colspan=2 height=21 class=x206 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;height:15.75pt;'></td>
                <td class=x128></td>
                <td class=x128></td>
                <td class=x128></td>
                <td colspan=4 class=x191 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'></td>
                <td colspan=4 class=x191 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'></td>
                <td class=x128></td>
                <td class=x128></td>
                <td class=x127></td>
            </tr>
            <tr height=23 style='mso-height-source:userset;height:17.25pt' id='r59'>
                <td colspan=2 height=21 class=x229 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;height:15.75pt;'></td>
                <td class=x124></td>
                <td class=x124></td>
                <td class=x124></td>
                <td colspan=4 class=x182 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'></td>
                <td colspan=4 class=x182 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'></td>
                <td class=x38></td>
                <td class=x38></td>
                <td class=x127></td>
            </tr>
            <tr height=23 style='mso-height-source:userset;height:17.25pt' id='r60'>
                <td colspan=2 height=21 class=x229 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;height:15.75pt;'></td>
                <td class=x124></td>
                <td class=x124></td>
                <td class=x124></td>
                <td colspan=4 class=x182 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'></td>
                <td colspan=4 class=x182 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'></td>
                <td class=x38></td>
                <td class=x38></td>
                <td class=x127></td>
            </tr>
            <tr height=23 style='mso-height-source:userset;height:17.25pt' id='r61'>
                <td colspan=2 height=21 class=x229 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;height:15.75pt;'></td>
                <td class=x124></td>
                <td class=x124></td>
                <td class=x124></td>
                <td colspan=4 class=x182 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'></td>
                <td colspan=4 class=x182 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'></td>
                <td class=x38></td>
                <td class=x38></td>
                <td class=x127></td>
            </tr>
            <tr height=23 style='mso-height-source:userset;height:17.25pt' id='r62'>
                <td colspan=2 height=21 class=x229 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;height:15.75pt;'></td>
                <td class=x124></td>
                <td class=x124></td>
                <td class=x124></td>
                <td colspan=4 class=x182 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'></td>
                <td colspan=4 class=x182 style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'></td>
                <td class=x38></td>
                <td class=x38></td>
                <td class=x127></td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12pt' id='r63'>
                <td height=13 class=x165 style='height:9.75pt;'></td>
                <td class=x164></td>
                <td class=x164></td>
                <td class=x164></td>
                <td class=x164></td>
                <td class=x164></td>
                <td class=x164></td>
                <td class=x164></td>
                <td class=x164></td>
                <td class=x164></td>
                <td class=x164></td>
                <td class=x164></td>
                <td class=x164></td>
                <td class=x164></td>
                <td class=x164></td>
                <td class=x164></td>
            </tr>
            <tr height=6 style='mso-height-source:userset;height:4.95pt' id='r64'>
                <td colspan=3 rowspan=3 height=17 class=x185 style='height:13.35pt;'>Disponibilidad de Presupuesto:</td>
                <td class=x166></td>
                <td class=x166></td>
                <td rowspan=3 height=17 class=x189 style='height:13.35pt;'>SI</td>
                <td class=x167></td>
                <td class=x166></td>
                <td class=x166></td>
                <td rowspan=3 height=17 class=x189 style='height:13.35pt;'>NO</td>
                <td class=x167></td>
                <td class=x166></td>
                <td class=x166></td>
                <td class=x166></td>
                <td class=x166></td>
                <td class=x166></td>
                <td class=x168></td>
                <td class=x161></td>
            </tr>
            <tr height=6 style='mso-height-source:userset;height:4.95pt' id='r65'>
                <td class=x160></td>
                <td class=x160></td>
                <td rowspan=2 height=11 class=x180 style='border-bottom:2px solid windowtext;height:8.4pt;'></td>
                <td class=x162></td>
                <td class=x160></td>
                <td class=x169></td>
                <td class=x162></td>
                <td class=x160></td>
                <td class=x160></td>
                <td class=x160></td>
                <td class=x160></td>
                <td class=x151></td>
                <td class=x152></td>
            </tr>
            <tr height=6 style='mso-height-source:userset;height:4.95pt' id='r66'>
                <td class=x48></td>
                <td class=x48></td>
                <td class=x163></td>
                <td class=x160></td>
                <td class=x153></td>
                <td class=x163></td>
                <td class=x160></td>
                <td class=x125></td>
                <td class=x126></td>
                <td class=x126></td>
                <td class=x126></td>
                <td class=x146></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r67'>
                <td height=20 class=x39 style='height:15pt;'></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x39></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x41></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r68'>
                <td height=20 class=x39 style='height:15pt;'></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x39></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x41></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r69'>
                <td height=20 class=x39 style='height:15pt;'></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x39></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x41></td>
            </tr>
            <tr height=20 style='mso-height-source:userset;height:15pt' id='r70'>
                <td height=20 class=x39 style='height:15pt;'></td>
                <td colspan=5 class=x179 style='border-bottom:1px solid windowtext;'></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x39></td>
                <td colspan=3 class=x179 style='border-bottom:1px solid windowtext;'></td>
                <td class=x41></td>
            </tr>
            <tr height=16 style='mso-height-source:userset;height:12pt' id='r71'>
                <td height=16 class=x39 style='height:12pt;'></td>
                <td colspan=4 class=x188>Nombre, firma y sello Encargado (a) de Presupuesto</td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x39></td>
                <td colspan=3 class=x228>Nombre, firma y sello Encargado (a) de Compras</td>
                <td class=x41></td>
            </tr>
            <tr height=17 style='mso-height-source:userset;height:13.2pt' id='r72'>
                <td height=17 class=x39 style='height:13.2pt;'></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x39></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x40></td>
                <td class=x41></td>
            </tr>
            <tr height=18 style='mso-height-source:userset;height:13.8pt' id='r73'>
                <td colspan=2 height=16 class=x181 style='border-bottom:2px solid windowtext;height:12.3pt;'>Fecha:</td>
                <td class=x133></td>
                <td class=x133></td>
                <td class=x133></td>
                <td class=x133></td>
                <td class=x133></td>
                <td class=x133></td>
                <td class=x133></td>
                <td class=x154></td>
                <td class=x154></td>
                <td class=x154></td>
                <td class=x154></td>
                <td class=x153>Fecha:</td>
                <td class=x133></td>
                <td class=x133></td>
                <td class=x133></td>
                <td class=x134></td>
            </tr>
            <tr height=17 style='mso-height-source:userset;height:13.2pt' id='r74'>
                <td height=15 class=x99 style='height:11.7pt;'></td>
                <td class=x99></td>
                <td class=x99></td>
                <td class=x99></td>
                <td class=x99></td>
                <td class=x99></td>
                <td class=x99></td>
                <td class=x99></td>
                <td class=x99></td>
                <td class=x99></td>
                <td class=x99></td>
                <td class=x99></td>
                <td class=x99></td>
                <td class=x99></td>
                <td class=x99></td>
                <td class=x99></td>
                <td class=x99></td>
                <td class=x99></td>
            </tr>
            <tr height=23 style='mso-height-source:userset;height:17.25pt' id='r75'>
                <td colspan=2 height=23 class=x137 style='mso-ignore:colspan;height:17.25pt;'>Aprobación:</td>
                <td class=x104></td>
                <td class=x104></td>
                <td class=x104></td>
                <td class=x104></td>
                <td class=x104></td>
                <td class=x104></td>
                <td class=x104></td>
                <td class=x104></td>
                <td class=x104></td>
                <td class=x104></td>
                <td class=x104></td>
                <td class=x104></td>
                <td class=x104></td>
                <td class=x104></td>
                <td class=x104></td>
                <td class=x104></td>
            </tr>
            <tr height=15 style='mso-height-source:userset;height:11.25pt' id='r76'>
                <td height=15 class=x103 style='height:11.25pt;'></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
            </tr>
            <tr height=15 style='mso-height-source:userset;height:11.25pt' id='r77'>
                <td height=15 class=x103 style='height:11.25pt;'></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
            </tr>
            <tr height=15 style='mso-height-source:userset;height:11.25pt' id='r78'>
                <td height=15 class=x103 style='height:11.25pt;'></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
            </tr>
            <tr height=15 style='mso-height-source:userset;height:11.25pt' id='r79'>
                <td height=15 class=x103 style='height:11.25pt;'></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
            </tr>
            <tr height=15 style='mso-height-source:userset;height:11.25pt' id='r80'>
                <td height=15 class=x103 style='height:11.25pt;'></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
                <td class=x103></td>
            </tr>
            <tr height=19 style='mso-height-source:userset;height:14.25pt' id='r81'>
                <td colspan=5 height=18 class=x222 style='border-bottom:1px solid windowtext;height:13.5pt;'>Dr. Julio Francisco Hernández Regalado </td>
                <td class=x106></td>
                <td class=x106></td>
                <td class=x106></td>
                <td class=x106></td>
                <td colspan=6 class=x224 style='border-bottom:1px solid windowtext;'></td>
                <td class=x87></td>
                <td colspan=2 class=x224 style='border-bottom:1px solid windowtext;'>Director Ejecutivo</td>
            </tr>
            <tr height=17 style='mso-height-source:userset;height:13.2pt' id='r82'>
                <td colspan=5 height=16 class=x223 style='height:12.45pt;'>Nombre Jefe Departamento Administrativo Planta Central/Director U.E.</td>
                <td class=x87></td>
                <td class=x87></td>
                <td class=x87></td>
                <td class=x87></td>
                <td colspan=6 class=x220>Firma y sello</td>
                <td class=x107></td>
                <td colspan=2 class=x220>Cargo</td>
            </tr>
            <![if supportMisalignedColumns]>
            <tr height=0 style='display:none'>
                <td width=27 style='width:20.25pt'></td>
                <td width=97 style='width:72.75pt'></td>
                <td width=80 style='width:60pt'></td>
                <td width=75 style='width:56.25pt'></td>
                <td width=68 style='width:51pt'></td>
                <td width=51 style='width:38.25pt'></td>
                <td width=17 style='width:12.75pt'></td>
                <td width=17 style='width:12.75pt'></td>
                <td width=29 style='width:21.75pt'></td>
                <td width=51 style='width:38.25pt'></td>
                <td width=17 style='width:12.75pt'></td>
                <td width=17 style='width:12.75pt'></td>
                <td width=29 style='width:21.75pt'></td>
                <td width=111 style='width:83.25pt'></td>
                <td width=125 style='width:93.75pt'></td>
                <td width=124 style='width:93pt'></td>
                <td width=91 style='width:68.25pt'></td>
                <td width=87 style='width:65.25pt'></td>
            </tr>
            <![endif]>
        </table>

        </body>

        </html>


        <?php
    }
}