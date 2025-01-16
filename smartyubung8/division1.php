<?php
//division2_1.php
require __DIR__ . '/vendor/autoload.php';

use Smarty\Smarty;

$smarty = new Smarty();

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
$smarty->display('division2.tpl');
?>