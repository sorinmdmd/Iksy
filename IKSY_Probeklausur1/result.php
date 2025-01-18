<?php
require_once 'includes/startTemplate.inc.php';
require_once 'klassen/DbFunctions.inc.php';
require_once 'klassen/Sicherheit.inc.php';
require_once 'klassen/Projekt.php';
require_once 'klassen/Projektkosten.php';

session_start();

// Check if we have session data
if (!isset($_SESSION['ProjektNr'])) {
    header("Location: index.php");
    exit();
}

// Assign values to Smarty
$smarty->assign('ProjektNr', htmlspecialchars($_SESSION['ProjektNr'], ENT_QUOTES, 'UTF-8'));
$smarty->assign('Bezeichnung', htmlspecialchars($_SESSION['Bezeichnung'], ENT_QUOTES, 'UTF-8'));
$smarty->assign('AufwandTage', htmlspecialchars($_SESSION['AufwandTage'], ENT_QUOTES, 'UTF-8'));

// Calculate and assign costs
$cost = Projektkosten::calculateCost($_SESSION['AufwandTage']);
$smarty->assign('cost', htmlspecialchars($cost, ENT_QUOTES, 'UTF-8'));

$smarty->display('result.tpl');
?>