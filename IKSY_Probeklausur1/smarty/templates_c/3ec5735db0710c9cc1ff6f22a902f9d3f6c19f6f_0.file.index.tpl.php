<?php
/* Smarty version 4.2.0, created on 2025-01-17 18:56:38
  from '/Users/sorinotel/Documents/IKSY 1/Iksy/IKSY_Probeklausur1/smarty/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_678aa7e619eab4_96341070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ec5735db0710c9cc1ff6f22a902f9d3f6c19f6f' => 
    array (
      0 => '/Users/sorinotel/Documents/IKSY 1/Iksy/IKSY_Probeklausur1/smarty/templates/index.tpl',
      1 => 1737140077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678aa7e619eab4_96341070 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic HTML Page</title>
</head>
<body>
    <h1>Welcome to My Website</h1>
    <form  method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>
">
        <label for="nummer">Nummer</label>
        <input type="number" name="nummer" id="nummer">
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <br>
</body>
</html><?php }
}
