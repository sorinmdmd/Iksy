<?php
/* Smarty version 5.4.3, created on 2025-01-12 18:29:26
  from 'file:euro1_form.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67840a06ed28c5_27125719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55758af2af1fae75ff1599c3142fdf40037a3ae6' => 
    array (
      0 => 'euro1_form.tpl',
      1 => 1736706447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67840a06ed28c5_27125719 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/sorinotel/Documents/IKSY 1/Iksy/smarty/templates';
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Euro-Dollar Umrechnung</title>
    <link rel="stylesheet" href="../css/formular.css" type="text/css">
</head>
<body>
    <h2>Euro-Dollar Umrechnung</h2>
    <form name="euro1" action="euro1.php" method="post">
        <label for="i_kurs">Kurs</label>
        <input type="number" name="kurs" id="i_kurs" size=12 step="any"><br>
        <label for="i_eurobetrag">Euros</label>
        <input type="number" name="eurobetrag" id="i_eurobetrag" size=12 step="0.01"><br>
        <input type="submit" name="Button1" value="Abschicken">
    </form>
</body>
</html><?php }
}
