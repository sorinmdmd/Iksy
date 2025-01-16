<?php
/* Smarty version 5.4.3, created on 2025-01-16 16:45:04
  from 'file:login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67893790232791_01211685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83634ffece9e70c6c177e1cd498794cd407008ba' => 
    array (
      0 => 'login.tpl',
      1 => 1737045189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67893790232791_01211685 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/sorinotel/Documents/IKSY 1/Iksy/ubung11_3Dennis/templates';
?><html>
<head>
    <title>Login</title>
</head>
<body>

<h1>Login</h1>

<form method='POST' action="<?php echo $_smarty_tpl->getValue('PHP_SELF');?>
">
    <label>Username</label>
    <input type="text" name="benutzername">
    <label>Password</label>
    <input type="password" name="passwort">
    <button type="submit" name="button1" value="Log in">Log in</button>
</form>

</body>
</html><?php }
}
