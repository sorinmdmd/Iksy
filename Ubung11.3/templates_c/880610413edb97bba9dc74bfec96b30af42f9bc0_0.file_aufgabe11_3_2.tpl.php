<?php
/* Smarty version 5.4.3, created on 2025-01-16 12:29:05
  from 'file:aufgabe11_3_2.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6788fb919eaf92_99181400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '880610413edb97bba9dc74bfec96b30af42f9bc0' => 
    array (
      0 => 'aufgabe11_3_2.tpl',
      1 => 1737027091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6788fb919eaf92_99181400 (\Smarty\Template $_smarty_tpl) {
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
	<h2>Login Prüfung</h2>

		<p><?php echo $_smarty_tpl->getValue('ausgabe');?>
</p>
		<?php if ((true && ($_smarty_tpl->hasVariable('logoutlink') && null !== ($_smarty_tpl->getValue('logoutlink') ?? null)))) {?>
			<a href="./aufgabe11_3_3.php">Logout</a>
		<?php }?>
</body>
</html>
<?php }
}
