<?php /* Smarty version Smarty-3.1.19, created on 2016-03-08 13:48:10
         compiled from "C:\wamp\www\Dm_prestashop\prestashop_voyage\admin\themes\default\template\controllers\request_sql\list_action_export.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2772856deca0a5428f1-10782857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '069e1dc30ebfc1778775d61ba641c31cb2931eee' => 
    array (
      0 => 'C:\\wamp\\www\\Dm_prestashop\\prestashop_voyage\\admin\\themes\\default\\template\\controllers\\request_sql\\list_action_export.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2772856deca0a5428f1-10782857',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56deca0a571790_16751442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56deca0a571790_16751442')) {function content_56deca0a571790_16751442($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="btn btn-default">
	<i class="icon-cloud-upload"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
