<?php /* Smarty version Smarty-3.1.19, created on 2016-03-08 13:47:33
         compiled from "C:\wamp\www\Dm_prestashop\prestashop_voyage\admin\themes\default\template\controllers\attachments\helpers\list\list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3244156dec9e536ea79-75317657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6053d44b76b5b6155974a95c4701559ea6d66f9b' => 
    array (
      0 => 'C:\\wamp\\www\\Dm_prestashop\\prestashop_voyage\\admin\\themes\\default\\template\\controllers\\attachments\\helpers\\list\\list_action_delete.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3244156dec9e536ea79-75317657',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'id_attachment' => 0,
    'product_attachements' => 0,
    'product_list' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56dec9e54fed70_08106898',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dec9e54fed70_08106898')) {function content_56dec9e54fed70_08106898($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="<?php if (isset($_smarty_tpl->tpl_vars['product_attachements']->value[htmlspecialchars($_smarty_tpl->tpl_vars['id_attachment']->value, ENT_QUOTES, 'UTF-8', true)])) {?>if (attachments.confirmProductAttached('<?php echo $_smarty_tpl->tpl_vars['product_list']->value[htmlspecialchars($_smarty_tpl->tpl_vars['id_attachment']->value, ENT_QUOTES, 'UTF-8', true)];?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};<?php } else { ?>return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')<?php }?>"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete">
	<i class="icon-trash"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
