<?php /* Smarty version Smarty-3.1.19, created on 2016-03-29 16:04:13
         compiled from "C:\wamp\www\Prestashop_voyage\prestashop_voyage\backoffice\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2785956fa8b5dc4cb83-30449058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b06a70ad3cdd349c00b2f19595a086abb4c27635' => 
    array (
      0 => 'C:\\wamp\\www\\Prestashop_voyage\\prestashop_voyage\\backoffice\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1459259687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2785956fa8b5dc4cb83-30449058',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56fa8b5dc60408_52331503',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fa8b5dc60408_52331503')) {function content_56fa8b5dc60408_52331503($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>