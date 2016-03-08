<?php /* Smarty version Smarty-3.1.19, created on 2016-03-08 13:47:53
         compiled from "C:\wamp\www\Dm_prestashop\prestashop_voyage\themes\default-bootstrap\modules\blockcontact\blockcontact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:701456dec9f93e4004-17890544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35eb144cc8e722fd2aad34e701224a1b7e9b8144' => 
    array (
      0 => 'C:\\wamp\\www\\Dm_prestashop\\prestashop_voyage\\themes\\default-bootstrap\\modules\\blockcontact\\blockcontact.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '701456dec9f93e4004-17890544',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'telnumber' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56dec9f94e5f18_06486436',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dec9f94e5f18_06486436')) {function content_56dec9f94e5f18_06486436($_smarty_tpl) {?>

<div id="contact_block" class="block">
	<h4 class="title_block">
		<?php echo smartyTranslate(array('s'=>'Contact Us','mod'=>'blockcontact'),$_smarty_tpl);?>

	</h4>
	<div class="block_content clearfix">
		<p>
			<?php echo smartyTranslate(array('s'=>'Our support hotline is available 24/7.','mod'=>'blockcontact'),$_smarty_tpl);?>

		</p>
		<?php if ($_smarty_tpl->tpl_vars['telnumber']->value!='') {?>
			<p class="tel">
				<span class="label"><?php echo smartyTranslate(array('s'=>'Phone:','mod'=>'blockcontact'),$_smarty_tpl);?>
</span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['telnumber']->value, ENT_QUOTES, 'UTF-8', true);?>

			</p>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['email']->value!='') {?>
			<a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact our expert support team!','mod'=>'blockcontact'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Contact our expert support team!','mod'=>'blockcontact'),$_smarty_tpl);?>

			</a>
		<?php }?>
	</div>
</div><?php }} ?>
