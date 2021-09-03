<?php
/* Smarty version 3.1.33, created on 2019-06-04 12:03:43
  from '/home/zagorski/zagorski.com.ua/www/core/components/mixedimage/elements/tv/input/tpl/mixedimage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf633ef5310d3_80402826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6870b04c4ecce2c7be8a4cc99c7f8d7dd6d20b93' => 
    array (
      0 => '/home/zagorski/zagorski.com.ua/www/core/components/mixedimage/elements/tv/input/tpl/mixedimage.tpl',
      1 => 1556115868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf633ef5310d3_80402826 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="hidden" id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->value, ENT_QUOTES, 'UTF-8', true);?>
" /> 
<div id="mixedimage<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" class="mixedimage"></div>

<?php if ($_smarty_tpl->tpl_vars['showPreview']->value === "true") {?>
	<div id="tv-image-preview-<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" class="modx-tv-image-preview">
		<?php if ($_smarty_tpl->tpl_vars['tv']->value->value) {?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['_config']->value['connectors_url'];?>
system/phpthumb.php?w=300&h=300&aoe=0&far=0&src=<?php echo $_smarty_tpl->tpl_vars['tv']->value->value;?>
&source=<?php echo $_smarty_tpl->tpl_vars['tv']->value->source;?>
" alt="" />
		<?php }?>
	</div>
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">

	mixedimage<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
 = MODx.load({
		
		xtype: 'mixedimage-panel'
		,renderTo: 'mixedimage<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
		,tvFieldId: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
		,tvId: '<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
		,value: '<?php echo $_smarty_tpl->tpl_vars['tv']->value->value;?>
'
		,res_id: <?php echo $_smarty_tpl->tpl_vars['res_id']->value;?>

		,res_alias: '<?php echo $_smarty_tpl->tpl_vars['res_alias']->value;?>
'
		,p_id: <?php echo $_smarty_tpl->tpl_vars['p_id']->value;?>

		,p_alias: '<?php echo $_smarty_tpl->tpl_vars['p_alias']->value;?>
'
		,tv_id: <?php echo $_smarty_tpl->tpl_vars['tv_id']->value;?>

		,ms_id: <?php echo $_smarty_tpl->tpl_vars['ms_id']->value;?>

		,acceptedMIMEtypes: <?php echo $_smarty_tpl->tpl_vars['MIME_TYPES']->value;?>

		,prefixFilename: <?php echo $_smarty_tpl->tpl_vars['prefixFilename']->value;?>

		,lex: <?php echo $_smarty_tpl->tpl_vars['jsonlex']->value;?>

		,source: '<?php echo $_smarty_tpl->tpl_vars['tv']->value->source;?>
'
		,showPreview: <?php echo $_smarty_tpl->tpl_vars['showPreview']->value;?>

		,removeFile: <?php echo $_smarty_tpl->tpl_vars['removeFile']->value;?>

		,ctx_path: '<?php echo $_smarty_tpl->tpl_vars['source_path']->value;?>
'
		,onlyEdit: <?php echo $_smarty_tpl->tpl_vars['onlyEdit']->value;?>

		,openPath: '<?php echo $_smarty_tpl->tpl_vars['openPath']->value;?>
'
		
	});
	

<?php echo '</script'; ?>
><?php }
}
