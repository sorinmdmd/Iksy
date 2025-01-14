<?php
/* Smarty version 5.4.3, created on 2025-01-14 11:22:07
  from 'file:division.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_678648dfd7c1e0_60090987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab151c63278424db4b3005d42f9c286a4c2dde17' => 
    array (
      0 => 'division.tpl',
      1 => 1736853725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_678648dfd7c1e0_60090987 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/sorinotel/Documents/IKSY 1/Iksy/smartyubung8/templates';
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Division</title>
    <link rel="stylesheet" href="../css/formular.css" type="text/css">
</head>
<body>
    <h2>Division zweier Zahlen</h2>
    <form name="division" action="./division1.php" method="post">
        <label for="i_zaehler">Zähler</label>
        <input type="number" name="zaehler" id="i_zaehler" size="12"><br>
        <label for="i_nenner">Nenner</label>
        <input type="number" name="nenner" id="i_nenner" size="12"><br>
        <input type="submit" name="Button1" value="Abschicken">
    </form>
</body>
</html>
<?php }
}
