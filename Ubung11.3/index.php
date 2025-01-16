<?php
require __DIR__ . '/vendor/autoload.php';

use Smarty\Smarty;

$smarty = new Smarty();

$smarty->setTemplateDir('templates');
$smarty->setCompileDir('templates_c');
$smarty->setCacheDir(__DIR__ . '/cache');
$smarty->setConfigDir(__DIR__ . '/configs');

$PHP_SELF = $_SERVER ['PHP_SELF'];
$REQUEST_METHOD = $_SERVER ['REQUEST_METHOD'];

if (! ($REQUEST_METHOD == "POST"))
{
    $smarty->assign ( 'PHP_SELF', $PHP_SELF );
} 
else
{
    $benutzername=$_POST['benutzername'];
    $passwort=$_POST['passwort'];
    if ($benutzername!=="admin" || $passwort!=="12345678") 
    {
        $smarty->assign("fehler", true);
        $smarty->assign("fehlertext", "Unzulässige Eingabe. Login Daten nicht korrekt.");
    }
    else
    {
        session_start();
        $_SESSION['loggedin']="true";
        $smarty->assign('ausgabe', "Sie wurden erfolgreich eingeloggt, $benutzername");
        header("Location: aufgabe11_3_2.php");
    }
}
echo $smarty->getTemplateDir(0); // Check where Smarty is looking for templates

$smarty->display ( 'aufgabe11_3_1.tpl' );
?>