<?php
require __DIR__ . '/vendor/autoload.php';

use Smarty\Smarty;

$smarty = new Smarty();

$smarty->setTemplateDir(__DIR__ . '/templates');
$smarty->setCompileDir(__DIR__ . '/templates_c');
$smarty->setCacheDir(__DIR__ . '/cache');
$smarty->setConfigDir(__DIR__ . '/configs');

// Get input values
$kurs = isset($_POST['kurs']) ? (float) $_POST['kurs'] : 0;
$eurobetrag = isset($_POST['eurobetrag']) ? (float) $_POST['eurobetrag'] : 0;

// Calculate dollar amount
$dollarbetrag = $kurs * $eurobetrag;

// Assign values to Smarty variables
$smarty->assign('kurs', number_format($kurs, 2, ',', '.'));
$smarty->assign('eurobetrag', number_format($eurobetrag, 2, ',', '.'));
$smarty->assign('dollarbetrag', number_format($dollarbetrag, 2, ',', '.'));

// Display the result template
$smarty->display('euro1_result.tpl');
