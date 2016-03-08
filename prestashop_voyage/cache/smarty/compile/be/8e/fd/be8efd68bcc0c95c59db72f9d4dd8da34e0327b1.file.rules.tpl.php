<?php /* Smarty version Smarty-3.1.19, created on 2016-03-08 13:48:09
         compiled from "C:\wamp\www\Dm_prestashop\prestashop_voyage\themes\default-bootstrap\modules\referralprogram\views\templates\front\rules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:675956deca094f90a5-09279776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be8efd68bcc0c95c59db72f9d4dd8da34e0327b1' => 
    array (
      0 => 'C:\\wamp\\www\\Dm_prestashop\\prestashop_voyage\\themes\\default-bootstrap\\modules\\referralprogram\\views\\templates\\front\\rules.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '675956deca094f90a5-09279776',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'xml' => 0,
    'paragraph' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56deca095a95a3_70086866',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56deca095a95a3_70086866')) {function content_56deca095a95a3_70086866($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\wamp\\www\\Dm_prestashop\\prestashop_voyage\\tools\\smarty\\plugins\\modifier.replace.php';
?>

<h3><?php echo smartyTranslate(array('s'=>'Referral program rules','mod'=>'referralprogram'),$_smarty_tpl);?>
</h3>

<?php if (isset($_smarty_tpl->tpl_vars['xml']->value)) {?>
<div id="referralprogram_rules">
	<?php if (isset($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value})) {?><div class="rte"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value},"\'","'"),'\"','"');?>
</div><?php }?>
</div>
<?php }?>
<?php }} ?>
