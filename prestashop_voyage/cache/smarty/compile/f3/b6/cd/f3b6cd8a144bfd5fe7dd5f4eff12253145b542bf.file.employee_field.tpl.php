<?php /* Smarty version Smarty-3.1.19, created on 2016-03-08 13:47:42
         compiled from "C:\wamp\www\Dm_prestashop\prestashop_voyage\admin\themes\default\template\controllers\logs\employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:633956dec9ee0f8f38-10339540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3b6cd8a144bfd5fe7dd5f4eff12253145b542bf' => 
    array (
      0 => 'C:\\wamp\\www\\Dm_prestashop\\prestashop_voyage\\admin\\themes\\default\\template\\controllers\\logs\\employee_field.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '633956dec9ee0f8f38-10339540',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56dec9ee1927e2_00755990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dec9ee1927e2_00755990')) {function content_56dec9ee1927e2_00755990($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
