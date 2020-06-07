<?php
require 'html2pdf/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;


ob_start();
require_once 'pdf.php';
$html = ob_get_clean();
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ob_end_clean();

$html2pdf = new Html2Pdf('P', 'LETTER', 'es', 'true', 'UTF-8');
$html2pdf->writeHTML($html);
$html2pdf->output('Contrato_id_'.$codigo_contrato.'.pdf','D');
