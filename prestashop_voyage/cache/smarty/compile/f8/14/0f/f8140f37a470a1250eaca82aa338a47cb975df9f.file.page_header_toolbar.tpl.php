<?php /* Smarty version Smarty-3.1.19, created on 2016-04-05 11:16:26
         compiled from "C:\wamp\www\Prestashop_voyage\prestashop_voyage\backoffice\themes\default\template\controllers\modules\page_header_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86085703826a3a4555-21854846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8140f37a470a1250eaca82aa338a47cb975df9f' => 
    array (
      0 => 'C:\\wamp\\www\\Prestashop_voyage\\prestashop_voyage\\backoffice\\themes\\default\\template\\controllers\\modules\\page_header_toolbar.tpl',
      1 => 1459259684,
      2 => 'file',
    ),
    '7b71a9ebae185067a1de4a207bef7e1f500687f1' => 
    array (
      0 => 'C:\\wamp\\www\\Prestashop_voyage\\prestashop_voyage\\backoffice\\themes\\default\\template\\page_header_toolbar.tpl',
      1 => 1459259687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86085703826a3a4555-21854846',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'page_header_toolbar_title' => 0,
    'page_header_toolbar_btn' => 0,
    'breadcrumbs2' => 0,
    'toolbar_btn' => 0,
    'k' => 0,
    'table' => 0,
    'btn' => 0,
    'help_link' => 0,
    'tab_modules_open' => 0,
    'tab_modules_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5703826b029e14_08360447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5703826b029e14_08360447')) {function content_5703826b029e14_08360447($_smarty_tpl) {?>


<?php if (!isset($_smarty_tpl->tpl_vars['title']->value)&&isset($_smarty_tpl->tpl_vars['page_header_toolbar_title']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_smarty_tpl->tpl_vars['page_header_toolbar_title']->value, null, 0);?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['page_header_toolbar_btn']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['toolbar_btn'] = new Smarty_variable($_smarty_tpl->tpl_vars['page_header_toolbar_btn']->value, null, 0);?>
<?php }?>

<div class="bootstrap">
	<div class="page-head">
		
<h2 class="page-title">
	<?php echo smartyTranslate(array('s'=>'List of modules'),$_smarty_tpl);?>

</h2>


		
		<ul class="breadcrumb page-breadcrumb">
			
			<?php if ($_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['name']!='') {?>
				<li class="breadcrumb-container">
					<?php if ($_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['href']!='') {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['href'], ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['name'], ENT_QUOTES, 'UTF-8', true);?>

					<?php if ($_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['href']!='') {?></a><?php }?>
				</li>
			<?php }?>

			
			<?php if ($_smarty_tpl->tpl_vars['breadcrumbs2']->value['tab']['name']!=''&&$_smarty_tpl->tpl_vars['breadcrumbs2']->value['container']['name']!=$_smarty_tpl->tpl_vars['breadcrumbs2']->value['tab']['name']) {?>
				<li class="breadcrumb-current">
					<?php if ($_smarty_tpl->tpl_vars['breadcrumbs2']->value['tab']['href']!='') {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumbs2']->value['tab']['href'], ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumbs2']->value['tab']['name'], ENT_QUOTES, 'UTF-8', true);?>

					<?php if ($_smarty_tpl->tpl_vars['breadcrumbs2']->value['tab']['href']!='') {?></a><?php }?>
				</li>
			<?php }?>

			
			
			</ul>
		
		
<div class="page-bar toolbarBox">
	<div class="btn-toolbar">
		<ul class="nav nav-pills pull-right">
			<?php if (isset($_smarty_tpl->tpl_vars['upgrade_available']->value)&&count($_smarty_tpl->tpl_vars['upgrade_available']->value)) {?>
			<?php $_smarty_tpl->tpl_vars['modules'] = new Smarty_variable('', null, 0);?>
			<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['upgrade_available']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
				<?php $_smarty_tpl->tpl_vars['modules'] = new Smarty_variable(($_smarty_tpl->tpl_vars['modules']->value).($_smarty_tpl->tpl_vars['module']->value['name']).('|'), null, 0);?>
			<?php } ?>
			<?php $_smarty_tpl->tpl_vars['modules'] = new Smarty_variable(substr($_smarty_tpl->tpl_vars['modules']->value,0,-1), null, 0);?>
			<li>
				<a id="desc-module-update-all" class="toolbar_btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentIndex']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;updateAll=1" title="<?php echo smartyTranslate(array('s'=>'Update all'),$_smarty_tpl);?>
">
					<i class="process-icon-refresh"></i>
					<div><?php echo smartyTranslate(array('s'=>'Update all'),$_smarty_tpl);?>
</div>
				</a>
			</li>
			<?php } else { ?>
			<li>
				<a id="desc-module-check-and-update-all" class="toolbar_btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentIndex']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;check=1" title="<?php echo smartyTranslate(array('s'=>'Check for update'),$_smarty_tpl);?>
">
					<i class="process-icon-refresh"></i>
					<div><?php echo smartyTranslate(array('s'=>'Check for update'),$_smarty_tpl);?>
</div>
				</a>
			</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['add_permission']->value=='1'&&($_smarty_tpl->tpl_vars['context_mode']->value!=Context::MODE_HOST)) {?>
			<li>
				<a id="desc-module-new" class="toolbar_btn anchor" href="#" onclick="$('#module_install').slideToggle();" title="<?php echo smartyTranslate(array('s'=>'Add a new module'),$_smarty_tpl);?>
">
					<i class="process-icon-new"></i>
					<div><?php echo smartyTranslate(array('s'=>'Add a new module'),$_smarty_tpl);?>
</div>
				</a>
			</li>
			<?php } else { ?>
			<li>
				<a id="desc-module-new" class="toolbar_btn" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&addnewmodule" title="<?php echo smartyTranslate(array('s'=>'Add a new module'),$_smarty_tpl);?>
">
					<i class="process-icon-new"></i>
					<div><?php echo smartyTranslate(array('s'=>'Add a new module'),$_smarty_tpl);?>
</div>
				</a>
			</li>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['help_link']->value)) {?>
			<li>
				<a class="toolbar_btn  btn-help" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['help_link']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Help'),$_smarty_tpl);?>
">
					<i class="process-icon-help"></i>
					<div><?php echo smartyTranslate(array('s'=>'Help'),$_smarty_tpl);?>
</div>
				</a>
			</li>
			<?php }?>
		</ul>
	</div>
</div>

	</div>
</div>
<?php }} ?>
