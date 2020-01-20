<?php
require_once 'dompdf/autoload.inc.php';

ob_start();
include "lettermain.php";
$html = ob_get_clean();
ob_end_clean();
use Dompdf\Dompdf;
$dompdf = new DOMPDF();





$dompdf->loadHtml($html);

$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("letter.pdf",array("Attachment"=>0));
?>