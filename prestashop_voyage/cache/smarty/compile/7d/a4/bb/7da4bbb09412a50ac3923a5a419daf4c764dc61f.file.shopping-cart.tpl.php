<?php /* Smarty version Smarty-3.1.19, created on 2016-03-08 13:48:09
         compiled from "C:\wamp\www\Dm_prestashop\prestashop_voyage\themes\default-bootstrap\modules\referralprogram\views\templates\hook\shopping-cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:245056deca0978b6c2-39575753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7da4bbb09412a50ac3923a5a419daf4c764dc61f' => 
    array (
      0 => 'C:\\wamp\\www\\Dm_prestashop\\prestashop_voyage\\themes\\default-bootstrap\\modules\\referralprogram\\views\\templates\\hook\\shopping-cart.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '245056deca0978b6c2-39575753',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'discount_display' => 0,
    'discount' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56deca09810d53_38720429',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56deca09810d53_38720429')) {function content_56deca09810d53_38720429($_smarty_tpl) {?>

<!-- MODULE ReferralProgram -->
<p id="referralprogram">
	<i class="icon-flag"></i>
	<?php echo smartyTranslate(array('s'=>'You have earned a voucher worth %s thanks to your sponsor!','sprintf'=>$_smarty_tpl->tpl_vars['discount_display']->value,'mod'=>'referralprogram'),$_smarty_tpl);?>

	<?php echo smartyTranslate(array('s'=>'Enter voucher name %s to receive the reduction on this order.','sprintf'=>$_smarty_tpl->tpl_vars['discount']->value->name,'mod'=>'referralprogram'),$_smarty_tpl);?>

	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('referralprogram','program',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'View your referral program.','mod'=>'referralprogram'),$_smarty_tpl);?>
</a>
</p>
<br />
<!-- END : MODULE ReferralProgram --><?php }} ?>
