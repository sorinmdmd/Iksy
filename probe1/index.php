<?php
session_start(); // Start session before any output

require_once 'klassen/includes/startTemplate.inc.php';
require_once 'klassen/DbFunctions.inc.php';
require_once 'klassen/Sicherheit.inc.php';
require_once 'klassen/TCPDF/tcpdf.php';
require_once 'klassen/Umzugkosten.php';
require_once 'klassen/Kundendaten.php';

DEFINE('MIN', 1);
DEFINE('MAX_ENTFERNUNG', value: 500);
DEFINE('MAX_ARBEITSZEIT', 48);
DEFINE("ENCODING", "UTF-8");

$link = DbFunctions::connectWithDatabase();
$ueberschrift = "Aufgabe Umzugsunternehmen";
$smarty->assign('ueberschrift', htmlentities($ueberschrift));

$PHP_SELF = $_SERVER['PHP_SELF'];
$REQUEST_METHOD = $_SERVER['REQUEST_METHOD'];

$kunden = Kundendaten::holeKundendaten($link); //HASH

if (!($REQUEST_METHOD == 'POST')) {
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(64));
    }
    $smarty->assign('csrf_token', $_SESSION['csrf_token']);
    $smarty->assign('kunden', $kunden);
    $smarty->assign('PHP_SELF', $PHP_SELF);
} else {
    if (!isset($_POST["csrf_token"]) || !isset($_SESSION["csrf_token"]) || $_POST["csrf_token"] != $_SESSION["csrf_token"]) {
        unset($_SESSION["csrf_token"]);
        die("CSRF Token ungültig!");
    }

    $kundennummer = $_POST['kundennummer'];
    $teamsize = $_POST['teamsize'];
    $entfernung = $_POST['entfernung'];
    $arbeitszeit = $_POST['arbeitszeit'];
    $lastenaufzug = isset($_POST['lastenaufzug']);
    $pdf = isset($_POST['pdf']);

    $correct = Sicherheit::isNumericalMin($arbeitszeit, MIN);
    $correct = $correct && Sicherheit::isNumericalInBoundary($entfernung, MIN, MAX_ENTFERNUNG);
    $correct = $correct && Sicherheit::isNumericalInBoundary($arbeitszeit, MIN, MAX_ARBEITSZEIT);
    $correct = $correct && Sicherheit::isCorrectTeamgroesse($teamsize);

    if (!$correct) {
        $smarty->assign('error', true);
    } else {
        $kosten = htmlspecialchars(Umzugkosten::getKosten($arbeitszeit, $teamsize, $entfernung, $lastenaufzug), ENT_QUOTES, 'UTF-8');
        $ort = htmlspecialchars(Kundendaten::holeOrt($link, $kundennummer), ENT_QUOTES, 'UTF-8');
        $name = htmlspecialchars(Kundendaten::holeName($link, $kundennummer), ENT_QUOTES, 'UTF-8');

        $ausgabe = "Die Gebühren des Kunden $name aus $ort betragen $kosten Euro.";

        if ($pdf) {
            $xTextStart = 10;
            $pdf = new TCPDF();
            $pdf->AddPage();
            $pdf->SetFont('Helvetica', "b", 14);
            $pdf->SetXY($xTextStart, 30);
            $pdf->Cell(16, 3, mb_convert_encoding($ueberschrift, ENCODING));
            $pdf->SetFont('Helvetica', "", 10);
            $pdf->SetXY($xTextStart, 40);
            $pdf->Cell(16, 3, mb_convert_encoding($ausgabe, ENCODING));
            $pdf->Output();
            exit();
        }
        //Mai intaii asta
        $smarty->assign('ausgabeText', htmlentities($ausgabe));
    }
}
$smarty->display('index.tpl');
?>