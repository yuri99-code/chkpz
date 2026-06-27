<?php
/* Smarty version 4.5.6, created on 2026-06-25 18:52:29
  from '/var/www/html/setup/templates/summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_6a3d78edcdff12_44584196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13b1dac7ad571c326e1cdebb359691b0d1ecd3a2' => 
    array (
      0 => '/var/www/html/setup/templates/summary.tpl',
      1 => 1782413024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a3d78edcdff12_44584196 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="assets/js/sections/summary.js"><?php echo '</script'; ?>
>
<form id="install" action="?action=summary" method="post">
    <h2><?php echo $_smarty_tpl->tpl_vars['_lang']->value['install_summary'];?>
</h2>

    <?php if ($_smarty_tpl->tpl_vars['failed']->value) {?>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['preinstall_failure'];?>
</p>
    <?php } else { ?>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['preinstall_success'];?>
</p>
    <?php }?>

    <ul class="checklist <?php if ($_smarty_tpl->tpl_vars['failed']->value) {?>failed<?php } else { ?>success<?php }?>">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['test']->value, 'result');
$_smarty_tpl->tpl_vars['result']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->do_else = false;
?>
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['result']->value['msg'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>
        <li class="<?php echo (($tmp = $_smarty_tpl->tpl_vars['result']->value['class'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"><?php echo $_smarty_tpl->tpl_vars['result']->value['msg'];?>
</li>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>

    <div class="setup_navbar">
        <?php if ($_smarty_tpl->tpl_vars['failed']->value) {?>
            <input type="button" onclick="MODx.go('summary');" value="&#xf021; <?php echo $_smarty_tpl->tpl_vars['_lang']->value['retry'];?>
" id="modx-next" class="button">
        <?php } else { ?>
            <input type="submit" id="modx-next" class="button" name="proceed" value="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['install'];?>
 &#xf054;" autofocus="autofocus">
        <?php }?>
        <input type="button" onclick="MODx.go('<?php echo $_smarty_tpl->tpl_vars['back']->value;?>
');" value="&#xf053; <?php echo $_smarty_tpl->tpl_vars['_lang']->value['back'];?>
" id="modx-back" class="button">
    </div>
</form>
<?php }
}
