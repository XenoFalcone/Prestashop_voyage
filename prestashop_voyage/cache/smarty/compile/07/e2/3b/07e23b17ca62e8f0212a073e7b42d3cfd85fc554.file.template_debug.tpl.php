<?php /* Smarty version Smarty-3.1.19, created on 2016-04-05 10:26:49
         compiled from "C:\wamp\www\Dm_prestashop\prestashop_voyage\modules\templatedebug\views\templates\front\template_debug.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7499570376c95c9f00-70185977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07e23b17ca62e8f0212a073e7b42d3cfd85fc554' => 
    array (
      0 => 'C:\\wamp\\www\\Dm_prestashop\\prestashop_voyage\\modules\\templatedebug\\views\\templates\\front\\template_debug.tpl',
      1 => 1459259960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7499570376c95c9f00-70185977',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'debug_templates' => 0,
    'debug_template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_570376c961c580_38537339',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570376c961c580_38537339')) {function content_570376c961c580_38537339($_smarty_tpl) {?>
<div id="template_debug" class="bootstrap" style="padding: 30px;">
    <div class="row">
        <div class="col-12">
            <h2>Included Templates</h2>
            <table class="table table-condensed">
                <tbody>
                    <tr><th>#</th><th>Filename</th><tr>
                    <?php  $_smarty_tpl->tpl_vars['debug_template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['debug_template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['debug_templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['debug_template']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['debug_template']->key => $_smarty_tpl->tpl_vars['debug_template']->value) {
$_smarty_tpl->tpl_vars['debug_template']->_loop = true;
 $_smarty_tpl->tpl_vars['debug_template']->iteration++;
?>
                        <tr><td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['debug_template']->iteration, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td><td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['debug_template']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td></tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div><?php }} ?>
