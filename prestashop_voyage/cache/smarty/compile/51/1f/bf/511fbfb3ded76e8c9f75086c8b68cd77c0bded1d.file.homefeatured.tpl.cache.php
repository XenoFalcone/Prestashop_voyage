<?php /* Smarty version Smarty-3.1.19, created on 2016-03-08 14:35:01
         compiled from "/Users/admin/Documents/Sites/Dm_prestashop/prestashop_voyage/prestashop_voyage/themes/default-bootstrap/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62712616956ded50555aa98-04564560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '511fbfb3ded76e8c9f75086c8b68cd77c0bded1d' => 
    array (
      0 => '/Users/admin/Documents/Sites/Dm_prestashop/prestashop_voyage/prestashop_voyage/themes/default-bootstrap/modules/homefeatured/homefeatured.tpl',
      1 => 1457443971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62712616956ded50555aa98-04564560',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56ded505576374_68198325',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ded505576374_68198325')) {function content_56ded505576374_68198325($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
