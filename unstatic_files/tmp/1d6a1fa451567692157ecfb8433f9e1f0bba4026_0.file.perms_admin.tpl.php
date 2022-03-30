<?php
/* Smarty version 4.1.0, created on 2022-03-30 10:55:51
  from 'C:\xampp3\htdocs\xampp\Web_Project\unstatic_files\views\perms_admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62441b178d4206_59457280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d6a1fa451567692157ecfb8433f9e1f0bba4026' => 
    array (
      0 => 'C:\\xampp3\\htdocs\\xampp\\Web_Project\\unstatic_files\\views\\perms_admin.tpl',
      1 => 1648579361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62441b178d4206_59457280 (Smarty_Internal_Template $_smarty_tpl) {
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
    <li><a href="rating_company.php">Evaluate a company</a></li>
    <li><a href="compare_company.php">See a company's stats</a></li>
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
    <li><a href="give_rights_representative.php">Give rights to a representative</a></li>
</ul>
<h3>a pilot account</h3>
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['crud']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>

    <li><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
_pilot.php"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
 a pilot</a></li>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
    <li><a href="see_stats_offer.php">See an offer's stats</a></li>
</ul>

<h3>an application</h3>
<ul>
    <li><a href="add_offer_wishlist.php">Add an offer to the wish-list</a></li>
    <li><a href="remove_offer_from_wishlist.php">Delete an offer from the wish-list</a></li>
    <li><a href="apply_offer.php">Apply to an offer</a></li>
    <li><a href="application_step_1.php">Inform that an application is on step 1</a></li>
    <li><a href="application_step_2.php">Inform that an application is on step 2</a></li>
    <li><a href="application_step_3.php">Inform that an application is on step 3</a></li>
    <li><a href="application_step_4.php">Inform that an application is on step 4</a></li>
    <li><a href="application_step_5.php">Inform that an application is on step 5</a></li>
    <li><a href="application_step_6.php">Inform that an application is on step 6</a></li>
</ul>

</body>
</html><?php }
}
