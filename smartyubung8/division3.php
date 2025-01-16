<?php
//division3.php

require __DIR__ . '/vendor/autoload.php';

use Smarty\Smarty;
$smarty = new Smarty();

$PHP_SELF = $_SERVER['PHP_SELF'];
$REQUEST_METHOD = $_SERVER['REQUEST_METHOD'];
if ($REQUEST_METHOD != "POST") {
    $smarty->assign('PHP_SELF', $PHP_SELF);
} else {
    $zaehler = $_POST['zaehler'];
    $nenner = $_POST['nenner'];
    if ($nenner == 0) {
        $teilenDurchNullFehler = true;
        $smarty->assign('teilenDurchNullFehler', $teilenDurchNullFehler);
    } else {
        $quotient = $zaehler / $nenner;
        $smarty->assign('zaehler', $zaehler);
        $smarty->assign('nenner', $nenner);
        $smarty->assign('quotient', $quotient);
    }
}
$smarty->display('division3.tpl');
?>