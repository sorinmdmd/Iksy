<?php
/* Smarty version 5.4.3, created on 2025-01-14 11:39:49
  from 'file:division2.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67864d05997634_56619047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5705c6b6634df67c8717168a23dea2bbe6a29fc1' => 
    array (
      0 => 'division2.tpl',
      1 => 1736854736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67864d05997634_56619047 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/sorinotel/Documents/IKSY 1/Iksy/smartyubung8/templates';
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Division (Teil 2)</title>
</head>
<body>
    <h2>Division zweier Zahlen: Das Ergebnis</h2>
    <?php if (((true && ($_smarty_tpl->hasVariable('teilenDurchNullFehler') && null !== ($_smarty_tpl->getValue('teilenDurchNullFehler') ?? null))))) {?>
        Sie haben versucht durch Null zu teilen!
    <?php } else { ?>
        Der Quotient von <?php echo $_smarty_tpl->getValue('zaehler');?>
 und <?php echo $_smarty_tpl->getValue('nenner');?>
 ist: <?php echo $_smarty_tpl->getValue('quotient');?>

    <?php }?>
</body>
</html>
<?php }
}
