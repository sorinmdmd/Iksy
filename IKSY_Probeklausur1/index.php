<?php

require_once 'includes/startTemplate.inc.php';
require_once 'klassen/DbFunctions.inc.php';
require_once 'klassen/Sicherheit.inc.php';
require_once 'klassen/Projekt.php';

$PHP_SELF = $_SERVER['PHP_SELF'];
$nummer = $_POST['nummer'] ?? null;

$link = DbFunctions::connectWithDatabase();

$result = null;
if (isset($nummer)) {
    session_start();
    echo session_id();
    $result = Projekt::getProject($link, $nummer);
    $_SESSION['result'] = $result;
    $smarty->assign('result', $result);
    var_dump($_SESSION['result']);
    header("Location: result.php");
}

$smarty->display('index.tpl');
