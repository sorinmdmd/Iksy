<?php
/* Smarty version 5.4.3, created on 2025-01-16 17:33:49
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_678942fdeae531_22059759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9c1145462069130b56500ab943382e70f171545' => 
    array (
      0 => 'index.tpl',
      1 => 1737048797,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_678942fdeae531_22059759 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/sorinotel/Documents/IKSY 1/Iksy/databank1/templates';
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!-- datenbankZugriffRaum -->
    <title>Datenbankzugriff Raum</title>
</head>
<body>
    <h2>Zur Zeit sind folgende Räume in der Datenbank:</h2>
    <table border="0">
        <tr>
            <th>Raumnummer</th>
            <th>Name</th>
        </tr>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('raumHash'), 'name', false, 'raumNr');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('raumNr')->value => $_smarty_tpl->getVariable('name')->value) {
$foreach0DoElse = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->getValue('raumNr');?>
</td>
            <td><?php echo $_smarty_tpl->getValue('name');?>
</td>
        </tr>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </table>
</body>
</html><?php }
}
