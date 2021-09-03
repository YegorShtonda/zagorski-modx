<?php
/* Smarty version 3.1.33, created on 2019-08-19 17:50:15
  from '/home/zagorski/zagorski.com.ua/www/manager/templates/default/resource/weblink/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5ab72779cad2_43197308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a933823f66b302d253acdb0914ed0b776b93d31' => 
    array (
      0 => '/home/zagorski/zagorski.com.ua/www/manager/templates/default/resource/weblink/update.tpl',
      1 => 1550131966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5ab72779cad2_43197308 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="modx-panel-weblink-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }
}
}
