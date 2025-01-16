<?php
/* Smarty version 5.4.3, created on 2025-01-16 17:24:56
  from 'file:dashboard.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_678940e89889a3_63102766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '498dc199749e5593b39a46cc738e2dfcf09c5b46' => 
    array (
      0 => 'dashboard.tpl',
      1 => 1737048294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_678940e89889a3_63102766 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/sorinotel/Documents/IKSY 1/Iksy/ubung11_3Dennis/templates';
?><html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h1>Dashboard</h1>
<p>Welcome, <?php echo $_smarty_tpl->getValue('benutzername');?>
</p>
<h3> Session ID : <?php echo $_smarty_tpl->getValue('ausgabe');?>
</h3>

<a href="./logout.php">Logout</a> 

</html><?php }
}
