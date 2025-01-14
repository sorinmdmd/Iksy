<?php

require __DIR__ . '/vendor/autoload.php';

use Smarty\Smarty;

$smarty = new Smarty();
//division1.php
$zaehler=$_POST['zaehler'];
$nenner=$_POST['nenner'];
$quotient=$zaehler/$nenner;
$smarty->assign('zaehler', $zaehler);
$smarty->assign('nenner', $nenner);
$smarty->assign('quotient', $quotient);
$smarty->display('division2.tpl');;
?>