<?php
/* Smarty version 4.5.6, created on 2026-05-02 17:26:45
  from '/var/www/html/manager/templates/default/resource/create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_69f633d5170ea5_61015874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4f4897b32344cf009692d2a7a6179c17630fa48' => 
    array (
      0 => '/var/www/html/manager/templates/default/resource/create.tpl',
      1 => 1771320406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69f633d5170ea5_61015874 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="modx-panel-resource-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = $_smarty_tpl->tpl_vars['tvOutput']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hidden']->value, 'tv', false, NULL, 'tv', array (
));
$_smarty_tpl->tpl_vars['tv']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tv']->value) {
$_smarty_tpl->tpl_vars['tv']->do_else = false;
?>
    <input type="hidden" id="tvdef<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['tv']->value->default_text, ENT_QUOTES, 'UTF-8', true);?>
" />
    <?php echo $_smarty_tpl->tpl_vars['tv']->value->get('formElement');?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php echo (($tmp = $_smarty_tpl->tpl_vars['onDocFormPrerender']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo (($tmp = $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>

<?php }
}
}
