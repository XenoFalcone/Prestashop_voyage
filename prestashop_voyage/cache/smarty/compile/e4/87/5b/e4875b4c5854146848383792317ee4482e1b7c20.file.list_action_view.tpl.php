<?php /* Smarty version Smarty-3.1.19, created on 2016-03-29 16:39:15
         compiled from "C:\wamp\www\Prestashop_voyage\prestashop_voyage\backoffice\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2174356fa93933a8da3-43301293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4875b4c5854146848383792317ee4482e1b7c20' => 
    array (
      0 => 'C:\\wamp\\www\\Prestashop_voyage\\prestashop_voyage\\backoffice\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1459259686,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2174356fa93933a8da3-43301293',
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
  'unifunc' => 'content_56fa939340a844_51809073',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fa939340a844_51809073')) {function content_56fa939340a844_51809073($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>