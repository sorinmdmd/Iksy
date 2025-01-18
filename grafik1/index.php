<?php

session_start();

require_once 'includes/startTemplate.inc.php';
require_once 'klassen/DbFunctions.inc.php';
require_once 'klassen/Sicherheit.inc.php';
require_once 'klassen/Umsatz.inc.php';
require_once ("./klassen/SVGGraph/autoloader.php");
require_once ("./klassen/tcpdf/tcpdf.php");

DEFINE("PATH_AND_FILENAME", "images/graph.svg");
DEFINE('ENCODING', "UTF-8");

$settings = array(
    #'auto_fit' => true,
    #'back_colour' => '#eee',
    #'back_stroke_width' => 0,
    #'back_stroke_colour' => '#eee',
    #'stroke_colour' => '#000',
    #'axis_colour' => '#333',
    #'axis_overlap' => 2,
    #'grid_colour' => '#666',
    #'label_colour' => '#000',
    #'axis_font' => 'Arial',
    #'axis_font_size' => 10,
    #'pad_right' => 20,
    #'pad_left' => 20,
    #'link_base' => '/',
    #'link_target' => '_top',
    #'project_angle' => 45,
    #'minimum_grid_spacing' => 20,
    #'show_subdivisions' => true,
    #'show_grid_subdivisions' => true,
    #'grid_subdivision_colour' => '#ccc',
    );

$width = 700;
$height = 300;
$type = 'BarGraph';

$link=DbFunctions::connectWithDatabase();
$erloesHash=Umsatz::holeErloese($link);
$colours = [ ['red', 'yellow'], ['blue', 'white'] ];

$graph = new Goat1000\SVGGraph\SVGGraph($width, $height, $settings);
$graph->colours($colours);
$graph->values($erloesHash);

$output=$graph->fetch($type);
file_put_contents(PATH_AND_FILENAME, $output);
$xTextStart=10;
$yTextStart=30;
$pdf= new TCPDF();
$pdf->AddPage();
$pdf->SetFont('Helvetica', "b", 14);
$pdf->SetXY($xTextStart, $yTextStart);
$ueberschrift = mb_convert_encoding("Umsatzübersicht", ENCODING);
$pdf->Cell(16, 3, $ueberschrift);
$pdf->SetFont('Helvetica', "", 10);
$yTextStart+=10;
$pdf->SetXY($xTextStart, $yTextStart);
$einleitungstext = mb_convert_encoding("Nachfolgend eine Übersicht der Umsätze nach Monaten:", ENCODING);
$pdf->Cell(16, 3, $einleitungstext);
$yTextStart+=10;
$pdf->ImageSVG(PATH_AND_FILENAME,$xTextStart,$yTextStart,175);
$pdf->Output();
exit();
?>