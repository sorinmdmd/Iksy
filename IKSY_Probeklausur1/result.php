<?php

require_once 'includes/startTemplate.inc.php';
require_once 'klassen/DbFunctions.inc.php';
require_once 'klassen/Sicherheit.inc.php';
require_once 'klassen/Projekt.php';
session_start();

$result = $_SESSION['result'] ?? null;
$smarty->assign('result', $result);  // Assign to Smarty

$smarty->display('result.tpl');

