<?php
require __DIR__ . '/vendor/autoload.php';

use Smarty\Smarty;

$smarty = new Smarty();

$smarty->setTemplateDir('templates');
$smarty->setCompileDir('templates_c');
$smarty->setCacheDir(__DIR__ . '/cache');
$smarty->setConfigDir(__DIR__ . '/configs');
session_start();

echo "Debug: Script started<br>";

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Debug: User is logged in<br>";
    echo "HALLLOOO2";

    $smarty->assign("ausgabe", "Sie sind eingeloggt, Ihre Session ID lautet " . session_id());
    $smarty->assign("logoutlink", true);
} else {
    echo "Debug: User is not logged in<br>";
    $smarty->assign("ausgabe", "Sie sind nicht eingeloggt");
}

echo "Debug: Before displaying template<br>";
$smarty->display('aufgabe11_3_2.tpl');
echo "Debug: After displaying template<br>";
?>