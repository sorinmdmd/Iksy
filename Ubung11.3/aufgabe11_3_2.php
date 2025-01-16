<?php
require __DIR__ . '/vendor/autoload.php';

use Smarty\Smarty;

$smarty = new Smarty();

$smarty->setTemplateDir('templates');
$smarty->setCompileDir('templates_c');
$smarty->setCacheDir(__DIR__ . '/cache');
$smarty->setConfigDir(__DIR__ . '/configs');
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

    $smarty->assign("ausgabe", "Sie sind eingeloggt, Ihre Session ID lautet " . session_id());
    $smarty->assign("logoutlink", true);
} else {
    $smarty->assign("ausgabe", "Sie sind nicht eingeloggt");
}

$smarty->display('aufgabe11_3_2.tpl');
?>