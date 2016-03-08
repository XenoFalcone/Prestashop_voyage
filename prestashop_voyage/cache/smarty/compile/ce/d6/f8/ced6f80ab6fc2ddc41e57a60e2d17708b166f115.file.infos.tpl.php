<?php /* Smarty version Smarty-3.1.19, created on 2016-03-08 13:48:03
         compiled from "C:\wamp\www\Dm_prestashop\prestashop_voyage\themes\default-bootstrap\modules\cheque\views\templates\hook\infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1923256deca03b4d748-84507467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ced6f80ab6fc2ddc41e57a60e2d17708b166f115' => 
    array (
      0 => 'C:\\wamp\\www\\Dm_prestashop\\prestashop_voyage\\themes\\default-bootstrap\\modules\\cheque\\views\\templates\\hook\\infos.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1923256deca03b4d748-84507467',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56deca03b7edb3_39532449',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56deca03b7edb3_39532449')) {function content_56deca03b7edb3_39532449($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/cheque/cheque.jpg" style="float:left; margin-right:15px;" width="86" height="49">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept payments by check.",'mod'=>'cheque'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses this payment method, the order status will change to 'Waiting for payment.'",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"You will need to manually confirm the order as soon as you receive a check.",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
