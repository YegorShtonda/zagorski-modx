<?php
/* Smarty version 3.1.33, created on 2019-05-31 13:03:21
  from '/home/zagorski/zagorski.com.ua/www/manager/templates/default/element/tv/renders/input/checkbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf0fbe96e1bc8_63906181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00d1818c4815baf41671146188387fbef4af7dd8' => 
    array (
      0 => '/home/zagorski/zagorski.com.ua/www/manager/templates/default/element/tv/renders/input/checkbox.tpl',
      1 => 1550131966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf0fbe96e1bc8_63906181 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
-cb"></div>

<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld = MODx.load({
    
        xtype: 'checkboxgroup'
        ,id: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,vertical: true
        ,columns: <?php if ((($tmp = @$_smarty_tpl->tpl_vars['params']->value['columns'])===null||$tmp==='' ? '' : $tmp)) {
echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['columns'])===null||$tmp==='' ? '' : $tmp);
} else { ?>1<?php }?>
        ,renderTo: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
-cb'
        ,name: 'tv-<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,width: '99%'
        ,allowBlank: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 1 || $_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 'true') {?>true<?php } else { ?>false<?php }?>
        ,hideMode: 'offsets'
        ,msgTarget: 'under'

        ,items: [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['opts']->value, 'item', false, 'k', 'cbs', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_cbs']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_cbs']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_cbs']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_cbs']->value['total'];
?>
        {
            name: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
[]'
            ,id: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
'
            ,boxLabel: '<?php echo strtr($_smarty_tpl->tpl_vars['item']->value['text'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
            ,checked: <?php if ($_smarty_tpl->tpl_vars['item']->value['checked']) {?>true<?php } else { ?>false<?php }?>
            ,inputValue: <?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>

            ,value: <?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>

        }<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_cbs']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_cbs']->value['last'] : null)) {?>,<?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>]
    });
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['opts']->value, 'item', false, 'k', 'cbs', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_cbs']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_cbs']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_cbs']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_cbs']->value['total'];
?>
    Ext.getCmp('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
').on('check',MODx.fireResourceFormChange);
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    Ext.get('tvdef<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
').dom.value = "<?php echo $_smarty_tpl->tpl_vars['cbdefaults']->value;?>
";
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
});
// ]]>
<?php echo '</script'; ?>
>
<?php }
}
