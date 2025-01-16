<?php
// datenbankZugriffRaum.php

require 'vendor/autoload.php';

use Smarty\Smarty;

$smarty = new Smarty();

$smarty->setTemplateDir('templates');
$smarty->setCompileDir('templates_c');
$smarty->setCacheDir('cache');
$smarty->setConfigDir('configs');

$link = mysqli_connect('pav050.hs-bochum.de', 'wiInf', 'wiInf');

$query = "USE IKSYVorlesung";
mysqli_query($link, $query);

$query = "SELECT RaumNr, Name FROM Raum";
$result = mysqli_query($link, $query);

if (!$result) {
    $errorNumber = mysqli_errno($link);
    $errorText = mysqli_error($link);
}

$anzahlZeilen = mysqli_num_rows($result);
$raumHash = array();

for ($i = 0; $i < $anzahlZeilen; $i++) {
    $zeile = mysqli_fetch_row($result);
    $raumHash[$zeile[0]] = $zeile[1];
}

$smarty->assign('raumHash', $raumHash);
$smarty->display('index.tpl');
?>