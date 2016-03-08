<?php /* Smarty version Smarty-3.1.19, created on 2016-03-08 13:48:05
         compiled from "C:\wamp\www\Dm_prestashop\prestashop_voyage\themes\default-bootstrap\modules\mailalerts\views\templates\hook\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1544056deca05e715c7-82540698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f85468f34453cdcdc97e00e38002f18648957f0e' => 
    array (
      0 => 'C:\\wamp\\www\\Dm_prestashop\\prestashop_voyage\\themes\\default-bootstrap\\modules\\mailalerts\\views\\templates\\hook\\my-account.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1544056deca05e715c7-82540698',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56deca05eee3d1_49303077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56deca05eee3d1_49303077')) {function content_56deca05eee3d1_49303077($_smarty_tpl) {?>

<li class="mailalerts">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','account',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
" rel="nofollow">
    	<i class="icon-envelope"></i>
		<span><?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
</span>
	</a>
</li>
<?php }} ?>
