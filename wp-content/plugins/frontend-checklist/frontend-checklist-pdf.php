<?php
require('fpdf/tfpdf.php');
@session_start();

$listID = (int)$_GET['id'];
$name = $_GET['name'];

$pdf = new tFPDF();
$pdf->AddPage();
$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);

$pdf->SetFont('DejaVu','',20);
$pdf->Cell(0,20, 'My Daily Checklist', 0, 1, 'C');
$pdf->SetFont('DejaVu','',18);
date_default_timezone_set("Australia/Melbourne");
$pdf->Cell(0,10, 'Name: '.$name, 0, 1, 'C');
$pdf->SetFont('DejaVu','',12);
$pdf->Cell(0,5, 'Checklist printed on: '.date("d/m/y").' '. date("h:i:sa"), 0, 1, 'C');
$pdf->Cell(0,10, '', 0, 1, 'C');
$i = 0;
$pdf->SetFont('DejaVu','',16);
foreach($_SESSION['frontend-checklist-items'][$listID] as $item) {

    if ($_SESSION['frontend-checklist-sum'][$listID] & pow(2, $i)) $pdf->Cell(5,5,'✓', 1, 0);
	else $pdf->Cell(5,5,' ', 1, 0);
	
	$pdf->Cell(0,5,' '.strip_tags(htmlspecialchars_decode($item['text'])), 0, 1); //text
	$pdf->Cell(10,5,' ', 0, 1); //margin between checkboxes
	
	$i++;
}

$pdf->Output();
?>