<?php
/* Smarty version 5.4.3, created on 2025-01-12 18:29:29
  from 'file:euro1_result.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67840a09ca4df3_26280881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35ab542ef4590c276446e1d67608f211bf11b2ae' => 
    array (
      0 => 'euro1_result.tpl',
      1 => 1736706454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67840a09ca4df3_26280881 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/sorinotel/Documents/IKSY 1/Iksy/smarty/templates';
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Euro-Dollar Umrechnung: Ergebnis</title>
</head>
<body>
    <h2>Euro-Dollar Umrechnung: Das Ergebnis</h2>
    <p>
        <?php echo $_smarty_tpl->getValue('eurobetrag');?>
 Euro entspricht bei einem Kurs von <?php echo $_smarty_tpl->getValue('kurs');?>
 <?php echo $_smarty_tpl->getValue('dollarbetrag');?>
 Dollar!
    </p>
</body>
</html><?php }
}
