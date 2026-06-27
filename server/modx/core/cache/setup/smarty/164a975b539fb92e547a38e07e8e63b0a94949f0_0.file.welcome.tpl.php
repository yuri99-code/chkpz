<?php
/* Smarty version 4.5.6, created on 2026-06-25 18:51:58
  from '/var/www/html/setup/templates/welcome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_6a3d78ce21e495_87916118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '164a975b539fb92e547a38e07e8e63b0a94949f0' => 
    array (
      0 => '/var/www/html/setup/templates/welcome.tpl',
      1 => 1782413024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a3d78ce21e495_87916118 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="welcome" action="?action=welcome" method="post">

    <div class="content-wrap">

        <h2><?php echo $_smarty_tpl->tpl_vars['_lang']->value['config_key'];?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['config_key_override'];?>
</p>

        <div class="labelHolder">
            <label for="config_key"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['config_key'];?>
</label>
            <input type="text" name="config_key" id="config_key" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['config_key']->value, ENT_QUOTES, 'UTF-8', true);?>
" style="width:250px" />

            <?php if ($_smarty_tpl->tpl_vars['writableError']->value) {?>
            <span class="field_error"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['config_not_writable_err'];?>
</span>
            <?php }?>
        </div>
    </div>

    <div class="setup_navbar">
       <input type="button" onclick="MODx.go('language');" value="&#xf053; <?php echo $_smarty_tpl->tpl_vars['_lang']->value['back'];?>
" id="modx-back" class="button">
       <input type="submit" name="proceed" value="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['next'];?>
 &#xf054;" id="modx-next" class="button" autofocus="autofocus">
    </div>
</form>
<?php }
}
