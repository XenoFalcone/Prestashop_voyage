<?php /* Smarty version Smarty-3.1.19, created on 2016-03-29 16:21:03
         compiled from "C:\wamp\www\Prestashop_voyage\prestashop_voyage\backoffice\themes\default\template\helpers\tree\tree_node_item_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3142256fa8f4f905c13-87948057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5949ef8b2ff2ce91b804d5e142b4c8a660549805' => 
    array (
      0 => 'C:\\wamp\\www\\Prestashop_voyage\\prestashop_voyage\\backoffice\\themes\\default\\template\\helpers\\tree\\tree_node_item_radio.tpl',
      1 => 1459259687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3142256fa8f4f905c13-87948057',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56fa8f4f9d8b44_65904581',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fa8f4f9d8b44_65904581')) {function content_56fa8f4f9d8b44_65904581($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
