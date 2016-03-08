<?php /* Smarty version Smarty-3.1.19, created on 2016-03-08 13:48:36
         compiled from "C:\wamp\www\Dm_prestashop\prestashop_voyage\admin\themes\default\template\helpers\tree\tree_node_folder_checkbox_shops.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2250056deca244dca01-08393992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02f9d1d04054becae45bca6dca4c37fc07eeee9c' => 
    array (
      0 => 'C:\\wamp\\www\\Dm_prestashop\\prestashop_voyage\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_folder_checkbox_shops.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2250056deca244dca01-08393992',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'table' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56deca2492d245_52462607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56deca2492d245_52462607')) {function content_56deca2492d245_52462607($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\wamp\\www\\Dm_prestashop\\prestashop_voyage\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-folder-name-disable<?php }?>">
		<input type="checkbox" name="checkBoxShopGroupAsso_<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo smartyTranslate(array('s'=>'Group: %s','sprintf'=>htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl);?>
</label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>
