<?php

require __DIR__ . '/vendor/autoload.php';

use Smarty\Smarty;

$smarty = new Smarty();

$smarty->setTemplateDir(__DIR__ . '/templates');
$smarty->setCompileDir(__DIR__ . '/templates_c');
$smarty->setCacheDir(__DIR__ . '/cache');
$smarty->setConfigDir(__DIR__ . '/configs');

$PHP_SELF = $_SERVER ['PHP_SELF'];
$REQUEST_METHOD = $_SERVER ['REQUEST_METHOD'];

if (! ($REQUEST_METHOD == "POST"))
{
    $smarty->assign ( 'PHP_SELF', $PHP_SELF);
}else
{
    $benutzername = $_POST['benutzername'];
    $passwort=$_POST['passwort'];
    if ($benutzername!=="admin" || $passwort!=="1")
    {
        $smarty->assign("fehler", true);
        $smarty->assign("fehlertext", "Unzulässige Eingabe. Login Daten nicht korrekt.");
        $smarty->assign("benutzername", $benutzername);
    }
    else
    {
        session_start();
        $_SESSION['loggedin']="true";
        $_SESSION['benutzername'] = $benutzername;
        $smarty->assign('ausgabe',"ERFOLG");
        $smarty->assign("logoutlink", true);
        header("Location: dashboard.php");
    }
}
    $smarty->display('login.tpl');
?>

