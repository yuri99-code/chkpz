<?php
/* Smarty version 4.5.6, created on 2026-05-09 18:41:52
  from '/var/www/html/manager/templates/default/element/tv/renders/input/textarea.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_69ff7ff05da255_32890327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3a843e9ab359f8d31237cf3d95cd14721545c92' => 
    array (
      0 => '/var/www/html/manager/templates/default/element/tv/renders/input/textarea.tpl',
      1 => 1777879994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69ff7ff05da255_32890327 (Smarty_Internal_Template $_smarty_tpl) {
?><textarea id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>

<?php echo '<script'; ?>
>
// <![CDATA[
document.getElementById('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
').setAttribute('autocomplete', globalAutoCompleteSetting);

Ext.onReady(function() {
    const 
        defaultHeight = 140,
        fld = MODx.load({
        
        xtype: 'textarea',
        itemId: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
',
        applyTo: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
',
        <?php if ($_smarty_tpl->tpl_vars['tv']->value->get('value') != '') {?>
            value: '<?php echo strtr((string)$_smarty_tpl->tpl_vars['tv']->value->get('value'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
                       "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
                       "`" => "\\`", "\${" => "\\\$\{"));?>
',
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['textareaGrow'] == 1 || $_smarty_tpl->tpl_vars['params']->value['textareaGrow'] == 'true') {?>
            boxMinHeight: <?php if ($_smarty_tpl->tpl_vars['params']->value['inputHeight'] != '') {
echo $_smarty_tpl->tpl_vars['params']->value['inputHeight'];
} else { ?>defaultHeight<?php }?>,
            grow: true,
            growMin: <?php if ($_smarty_tpl->tpl_vars['params']->value['inputHeight'] != '') {
echo $_smarty_tpl->tpl_vars['params']->value['inputHeight'];
} else { ?>defaultHeight<?php }?>,
            growMax: 1200,
        <?php } else { ?>
            height: <?php if ($_smarty_tpl->tpl_vars['params']->value['inputHeight'] != '') {
echo $_smarty_tpl->tpl_vars['params']->value['inputHeight'];
} else { ?>defaultHeight<?php }?>,
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['params']->value['textareaResizable'] == 1 || $_smarty_tpl->tpl_vars['params']->value['textareaResizable'] == 'true') {?>
            ctCls: 'resizable',
        <?php }?>
        enableKeyEvents: true,
        msgTarget: 'under',
        allowBlank: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 1 || $_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 'true') {?>true<?php } else { ?>false<?php }?>,
    
        listeners: {
            keydown: {
                fn: MODx.fireResourceFormChange,
                scope: this
            }
        }
    });
    MODx.makeDroppable(fld);
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
});

// ]]>
<?php echo '</script'; ?>
>
<?php }
}
