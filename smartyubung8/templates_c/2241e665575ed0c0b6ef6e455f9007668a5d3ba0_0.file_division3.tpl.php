<?php
/* Smarty version 5.4.3, created on 2025-01-14 12:18:21
  from 'file:division3.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6786560d908ab2_33914633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2241e665575ed0c0b6ef6e455f9007668a5d3ba0' => 
    array (
      0 => 'division3.tpl',
      1 => 1736856107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6786560d908ab2_33914633 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/sorinotel/Documents/IKSY 1/Iksy/smartyubung8/templates';
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!-- division3.tpl -->
    <title>Division</title>
    <link rel="stylesheet" href="../css/formular.css" type="text/css">
</head>
<body>
    <h2>Division zweier Zahlen</h2>
    <?php if (((true && ($_smarty_tpl->hasVariable('PHP_SELF') && null !== ($_smarty_tpl->getValue('PHP_SELF') ?? null))))) {?>
    <form name='division' action='<?php echo $_smarty_tpl->getValue('PHP_SELF');?>
' method='post'>
        <label for="i_zaehler">Zähler</label>
        <input type="number" name="zaehler" id="i_zaehler" size=12><br>
        <label for="i_nenner">Nenner</label>
        <input type="number" name="nenner" size=12><br>
        <input type="submit" name="Button1" value="Abschicken">
    </form>
    <?php } else { ?>
        <?php if (((true && ($_smarty_tpl->hasVariable('teilenDurchNullFehler') && null !== ($_smarty_tpl->getValue('teilenDurchNullFehler') ?? null))))) {?>
            Sie haben versucht durch Null zu teilen!
        <?php } else { ?>
            Der Quotient von <?php echo $_smarty_tpl->getValue('zaehler');?>
 und <?php echo $_smarty_tpl->getValue('nenner');?>
 ist: <?php echo $_smarty_tpl->getValue('quotient');?>

        <?php }?>
    <?php }?>
</body>
</html><?php }
}
