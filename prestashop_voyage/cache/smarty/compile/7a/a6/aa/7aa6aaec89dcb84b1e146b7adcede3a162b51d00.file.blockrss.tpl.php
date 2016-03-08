<?php /* Smarty version Smarty-3.1.19, created on 2016-03-08 13:47:57
         compiled from "C:\wamp\www\Dm_prestashop\prestashop_voyage\themes\default-bootstrap\modules\blockrss\blockrss.tpl" */ ?>
<?php /*%%SmartyHeaderCode:903456dec9fd42d4e8-44028407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7aa6aaec89dcb84b1e146b7adcede3a162b51d00' => 
    array (
      0 => 'C:\\wamp\\www\\Dm_prestashop\\prestashop_voyage\\themes\\default-bootstrap\\modules\\blockrss\\blockrss.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '903456dec9fd42d4e8-44028407',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'rss_links' => 0,
    'rss_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56dec9fd516034_33559185',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dec9fd516034_33559185')) {function content_56dec9fd516034_33559185($_smarty_tpl) {?>

<!-- Block RSS module-->
<div id="rss_block_left" class="block">
	<p class="title_block"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</p>
	<div class="block_content">
		<?php if ($_smarty_tpl->tpl_vars['rss_links']->value) {?>
			<ul>
				<?php  $_smarty_tpl->tpl_vars['rss_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rss_link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rss_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rss_link']->key => $_smarty_tpl->tpl_vars['rss_link']->value) {
$_smarty_tpl->tpl_vars['rss_link']->_loop = true;
?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['rss_link']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['rss_link']->value['title'];?>
</a></li>
				<?php } ?>
			</ul>
		<?php } else { ?>
			<p><?php echo smartyTranslate(array('s'=>'No RSS feed added','mod'=>'blockrss'),$_smarty_tpl);?>
</p>
		<?php }?>
	</div>
</div>
<!-- /Block RSS module-->
<?php }} ?>
