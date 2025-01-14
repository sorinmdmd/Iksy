<?php
require __DIR__ . '/vendor/autoload.php';

use Smarty\Smarty;

$smarty = new Smarty();

$smarty->setTemplateDir(__DIR__ . '/templates');
$smarty->setCompileDir(__DIR__ . '/templates_c');
$smarty->setCacheDir(__DIR__ . '/cache');
$smarty->setConfigDir(__DIR__ . '/configs');

// Get input values
$kurs=$_POST['kurs'];
$eurobetrag = $_POST['eurobetrag'];

// Calculate dollar amount
$dollarbetrag = $kurs * $eurobetrag;

$smarty->assign('kurs', $kurs);
$smarty->assign('eurobetrag', $eurobetrag);
$smarty->assign('dollarbetrag', $dollarbetrag);
// Display the result template
$smarty->display('euro1_result.tpl');
