<?php /* Smarty version Smarty-3.1.19, created on 2016-03-08 14:35:01
         compiled from "/Users/admin/Documents/Sites/Dm_prestashop/prestashop_voyage/prestashop_voyage/modules/blockbestsellers/views/templates/hook/blockbestsellers-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96963194856ded505662704-16098019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8deb37bb96beab980aaa9b60a83b0369c2c3326' => 
    array (
      0 => '/Users/admin/Documents/Sites/Dm_prestashop/prestashop_voyage/prestashop_voyage/modules/blockbestsellers/views/templates/hook/blockbestsellers-home.tpl',
      1 => 1457443971,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96963194856ded505662704-16098019',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'best_sellers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56ded50567a455_48349086',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ded50567a455_48349086')) {function content_56ded50567a455_48349086($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['best_sellers']->value)&&$_smarty_tpl->tpl_vars['best_sellers']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['best_sellers']->value,'class'=>'blockbestsellers tab-pane','id'=>'blockbestsellers'), 0);?>

<?php } else { ?>
<ul id="blockbestsellers" class="blockbestsellers tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No best sellers at this time.','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
