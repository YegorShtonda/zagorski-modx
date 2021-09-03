<?php
/* Smarty version 3.1.33, created on 2019-05-31 17:36:44
  from '/home/zagorski/zagorski.com.ua/www/manager/templates/default/element/tv/renders/input/richtext.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf13bfc40e460_47968522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25c31a4f444d505775ed13b79cee91d2384a6ca7' => 
    array (
      0 => '/home/zagorski/zagorski.com.ua/www/manager/templates/default/element/tv/renders/input/richtext.tpl',
      1 => 1550131966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf13bfc40e460_47968522 (Smarty_Internal_Template $_smarty_tpl) {
?><textarea id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" class="modx-richtext" onchange="MODx.fireResourceFormChange();"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>

<?php echo '<script'; ?>
 type="text/javascript">

Ext.onReady(function() {
    
    MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'));
    
});
<?php echo '</script'; ?>
><?php }
}
