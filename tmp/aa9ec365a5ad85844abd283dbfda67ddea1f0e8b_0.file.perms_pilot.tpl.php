<?php
/* Smarty version 4.1.0, created on 2022-03-29 00:34:52
  from 'C:\xampp2\htdocs\xampp\Web_project\projetWeb-main\views\perms_pilot.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6242380caf5f51_86853302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa9ec365a5ad85844abd283dbfda67ddea1f0e8b' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\xampp\\Web_project\\projetWeb-main\\views\\perms_pilot.tpl',
      1 => 1648506764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6242380caf5f51_86853302 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h2>Interact with:</h2>

    <h3>a company account</h3>
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['crud']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>

    <li><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
_company.php"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
 a company</a></li>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <li><a href="evaluate_company.php">Evaluate a company</a></li>
    <li><a href="see_stats_company.php">See a company's stats</a></li>
</ul>
<h3>a student account</h3>
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['crud']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>

    <li><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
_student.php"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
 a student</a></li>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <li><a href="see_stats_student.php">See a student's stats</a></li>
</ul>
<h3>a representative account</h3>
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['crud']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>

    <li><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
_representative.php"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
 a representative</a></li>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <li><a href="see_stats_representative.php">Give rights to a representative</a></li>
</ul>

<h3>an offer</h3>
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['crud']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>

    <li><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
_offer.php"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
 a offer</a></li>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <li><a href="see_stats_offer.php">See a offer's stats</a></li>
</ul>

<h3>an application</h3>
<ul>
    <li><a href="application_step_3.php">Inform that an application is on step 3</a></li>
    <li><a href="application_step_4.php">Inform that an application is on step 4</a></li>
</ul>
<?php echo '<?php'; ?>
 endif; <?php echo '?>';
}
}