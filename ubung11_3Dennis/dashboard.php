<?php

require __DIR__ . '/vendor/autoload.php';

use Smarty\Smarty;

$smarty = new Smarty();

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== "true"){
    header("Location: index.php");
    exit();
}else{
    $benutzername = $_SESSION['benutzername'] ?? "Gast";
    $smarty->assign('benutzername', $benutzername);
    $smarty->assign('ausgabe', session_id());
    
    $smarty->display('dashboard.tpl');
}
?>