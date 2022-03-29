<?php
/* Smarty version 4.1.0, created on 2022-03-29 01:30:01
  from 'C:\xampp2\htdocs\xampp\Web_project\projetWeb-main\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624244f924aa55_27808478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90b27f9d1bb20c0f5b0b6d09d81b3973ef53d631' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\xampp\\Web_project\\projetWeb-main\\views\\index.tpl',
      1 => 1648506035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624244f924aa55_27808478 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Hi</h1>

    <h2>How would you like to identify yourself?</h2>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>

    <h3>As <a href="login_<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
.php"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</a></h3>    

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
</body>
</html><?php }
}
