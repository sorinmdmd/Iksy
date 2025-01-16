<?php
require __DIR__ . '/vendor/autoload.php';

use Smarty\Smarty;

$smarty = new Smarty();
session_start();
session_unset();
session_destroy();
$smarty->display('aufgabe11_3_3.tpl');
?>
