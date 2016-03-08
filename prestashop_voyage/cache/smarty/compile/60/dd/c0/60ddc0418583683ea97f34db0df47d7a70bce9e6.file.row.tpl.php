<?php /* Smarty version Smarty-3.1.19, created on 2016-03-08 13:48:25
         compiled from "C:\wamp\www\Dm_prestashop\prestashop_voyage\admin\themes\default\template\helpers\kpi\row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2251256deca19d0ee70-80499306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60ddc0418583683ea97f34db0df47d7a70bce9e6' => 
    array (
      0 => 'C:\\wamp\\www\\Dm_prestashop\\prestashop_voyage\\admin\\themes\\default\\template\\helpers\\kpi\\row.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2251256deca19d0ee70-80499306',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'kpis' => 0,
    'col' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56deca19dd1e68_76102441',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56deca19dd1e68_76102441')) {function content_56deca19dd1e68_76102441($_smarty_tpl) {?>
<div class="panel kpi-container">
	<div class="kpi-refresh"><button class="close refresh" type="button" onclick="refresh_kpis();"><i class="process-icon-refresh" style="font-size:1em"></i></button></div>
	<div class="row">
		<?php $_smarty_tpl->tpl_vars['col'] = new Smarty_variable((int)(12/count($_smarty_tpl->tpl_vars['kpis']->value)), null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kpis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['kpi']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['kpi']['iteration']++;
?>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['kpi']['iteration']>$_smarty_tpl->tpl_vars['col']->value+1) {?>
				</div>
				<div class="row">
			<?php }?>
			<div class="col-sm-6 col-lg-<?php echo $_smarty_tpl->tpl_vars['col']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</div>
		<?php } ?>
	</div>
</div>
<?php }} ?>
