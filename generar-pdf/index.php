<?php

require '../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

// Parámetros de configuración del documento
$margins =  array(0,0,0,0);
$html2pdf = new Html2Pdf('P', 'A4','en', true, 'UTF-8',$margins);

// Recoger la vista para convertirla en pdf
ob_start();
require_once './pdf-para-generar.php';
$html = ob_get_clean();


$html2pdf->writeHTML($html);

$html2pdf->output('pdfgenerado.pdf');