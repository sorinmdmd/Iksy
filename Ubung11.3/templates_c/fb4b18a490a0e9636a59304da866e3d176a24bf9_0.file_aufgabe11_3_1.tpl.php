<?php
/* Smarty version 5.4.3, created on 2025-01-16 11:51:36
  from 'file:aufgabe11_3_1.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6788f2c8101c90_91345347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb4b18a490a0e9636a59304da866e3d176a24bf9' => 
    array (
      0 => 'aufgabe11_3_1.tpl',
      1 => 1737028294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6788f2c8101c90_91345347 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/sorinotel/Documents/IKSY 1/Iksy/Ubung11.3/templates';
?><!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="./css/Forms.css">
<link rel="stylesheet" type="text/css" href="./css/Tables.css">

</head>
<body>
	<h2>Login Formular</h2>

	<?php if (((true && ($_smarty_tpl->hasVariable('PHP_SELF') && null !== ($_smarty_tpl->getValue('PHP_SELF') ?? null))))) {?>
	<form name="formular" action="<?php echo $_smarty_tpl->getValue('PHP_SELF');?>
" method="post">
		<label>Benutername</label>
		<input type="text" name="benutzername">
		<label>Passwort</label>
		<input type="password" name="passwort">
		<input type="submit" name="Button1" value="Abschicken">
	</form>
	<?php } else { ?> 
		<?php if (((true && ($_smarty_tpl->hasVariable('fehler') && null !== ($_smarty_tpl->getValue('fehler') ?? null))))) {?>
			<?php echo $_smarty_tpl->getValue('fehlertext');?>

		<?php } else { ?> 
		<?php echo $_smarty_tpl->getValue('ausgabe');?>

	<?php }
}?>
</body>
</html>
<?php }
}
