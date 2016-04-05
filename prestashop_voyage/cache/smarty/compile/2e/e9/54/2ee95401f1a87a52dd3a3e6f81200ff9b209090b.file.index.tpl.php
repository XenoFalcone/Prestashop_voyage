<?php /* Smarty version Smarty-3.1.19, created on 2016-03-08 14:35:01
         compiled from "/Users/admin/Documents/Sites/Dm_prestashop/prestashop_voyage/prestashop_voyage/themes/default-bootstrap/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62369272856ded505bc1828-00598293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ee95401f1a87a52dd3a3e6f81200ff9b209090b' => 
    array (
      0 => '/Users/admin/Documents/Sites/Dm_prestashop/prestashop_voyage/prestashop_voyage/themes/default-bootstrap/index.tpl',
      1 => 1457443971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62369272856ded505bc1828-00598293',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_HOME_TAB_CONTENT' => 0,
    'HOOK_HOME_TAB' => 0,
    'HOOK_HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56ded505be1754_24008340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ded505be1754_24008340')) {function content_56ded505be1754_24008340($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)) {?>
        <ul id="home-page-tabs" class="nav nav-tabs clearfix">
			<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value;?>

		</ul>
	<?php }?>
	<div class="tab-content"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value;?>
</div>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME']->value)) {?>
	<div class="clearfix"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>
</div>
<?php }?><?php }} ?>
