<?php
require '../vendor/autoload.php';
/*
 * Libreria Html2Pdf
 */
use Spipu\Html2Pdf\Html2Pdf;

$html2pdf =  new Html2Pdf();

//  Recoger la vista imprimir
ob_start();
require_once 'pdf_para_generar.php';
$html = ob_get_clean();

$html2pdf->writeHTML($html);
$html2pdf->output('pdf_generado.pdf');