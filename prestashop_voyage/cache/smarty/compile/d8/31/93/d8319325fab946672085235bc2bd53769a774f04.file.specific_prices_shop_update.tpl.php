<?php /* Smarty version Smarty-3.1.19, created on 2016-03-08 13:48:08
         compiled from "C:\wamp\www\Dm_prestashop\prestashop_voyage\admin\themes\default\template\controllers\products\specific_prices_shop_update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1057256deca08380f75-66289187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8319325fab946672085235bc2bd53769a774f04' => 
    array (
      0 => 'C:\\wamp\\www\\Dm_prestashop\\prestashop_voyage\\admin\\themes\\default\\template\\controllers\\products\\specific_prices_shop_update.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1057256deca08380f75-66289187',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'option_list' => 0,
    'key_id' => 0,
    'row' => 0,
    'key_value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56deca083d3ed0_61709707',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56deca083d3ed0_61709707')) {function content_56deca083d3ed0_61709707($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['option_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<option value="<?php echo intval($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key_id']->value]);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key_value']->value], ENT_QUOTES, 'UTF-8', true);?>
</option>
<?php } ?><?php }} ?>
