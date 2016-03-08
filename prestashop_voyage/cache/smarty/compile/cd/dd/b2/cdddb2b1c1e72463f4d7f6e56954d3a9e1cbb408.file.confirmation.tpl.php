<?php /* Smarty version Smarty-3.1.19, created on 2016-03-08 13:48:03
         compiled from "C:\wamp\www\Dm_prestashop\prestashop_voyage\themes\default-bootstrap\modules\cashondelivery\views\templates\hook\confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:534356deca0358a0b4-69989658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdddb2b1c1e72463f4d7f6e56954d3a9e1cbb408' => 
    array (
      0 => 'C:\\wamp\\www\\Dm_prestashop\\prestashop_voyage\\themes\\default-bootstrap\\modules\\cashondelivery\\views\\templates\\hook\\confirmation.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '534356deca0358a0b4-69989658',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shop_name' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56deca03685349_44101628',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56deca03685349_44101628')) {function content_56deca03685349_44101628($_smarty_tpl) {?>
<div class="box">
    <p><?php echo smartyTranslate(array('s'=>'Your order on','mod'=>'cashondelivery'),$_smarty_tpl);?>
 <span class="bold"><?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
</span> <?php echo smartyTranslate(array('s'=>'is complete.','mod'=>'cashondelivery'),$_smarty_tpl);?>

        <br />
        <?php echo smartyTranslate(array('s'=>'You have chosen the cash on delivery method.','mod'=>'cashondelivery'),$_smarty_tpl);?>

        <br /><span class="bold"><?php echo smartyTranslate(array('s'=>'Your order will be sent very soon.','mod'=>'cashondelivery'),$_smarty_tpl);?>
</span>
        <br /><?php echo smartyTranslate(array('s'=>'For any questions or for further information, please contact our','mod'=>'cashondelivery'),$_smarty_tpl);?>
 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact-form',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'customer support','mod'=>'cashondelivery'),$_smarty_tpl);?>
</a>.
    </p>
</div><?php }} ?>
