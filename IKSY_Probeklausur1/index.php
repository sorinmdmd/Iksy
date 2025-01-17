<?php
require_once 'includes/startTemplate.inc.php';
require_once 'klassen/DbFunctions.inc.php';
require_once 'klassen/Sicherheit.inc.php';
require_once 'klassen/Projekt.php';

session_start(); // Start session before any output

$link = DbFunctions::connectWithDatabase();
$PHP_SELF = $_SERVER['PHP_SELF'];
$nummer = $_POST['nummer'] ?? null;

// Generate CSRF token if it doesn't exist
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Assign token to Smarty BEFORE any form processing
$smarty->assign('csrf_token', $_SESSION['csrf_token']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // CSRF-Token validation
    if (!isset($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        die('CSRF Token invalid.');
    }
    
    // Rest of your processing code...
    $correct = Sicherheit::isNumericalMin($nummer, 1);
    
    if (!$correct) {
        $smarty->assign('error', htmlspecialchars('Bitte geben Sie eine Zahl größer als 0 ein.', ENT_QUOTES, 'UTF-8'));
    } else {
        $result = Projekt::getProject($link, $nummer);
        $_SESSION['result'] = $result;
        
        if (!empty($result)) {
            $_SESSION['ProjektNr'] = $result[0]['ProjektNr'];
            $_SESSION['Bezeichnung'] = $result[0]['Bezeichnung'];
            $_SESSION['ProjektartNr'] = $result[0]['ProjektartNr'];
            $_SESSION['AufwandTage'] = $result[0]['AufwandTage'];
            
            header("Location: result.php");
            exit();
        }
    }
}

$smarty->display('index.tpl');
?>