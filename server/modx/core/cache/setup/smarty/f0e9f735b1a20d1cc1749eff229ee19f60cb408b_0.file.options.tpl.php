<?php
/* Smarty version 4.5.6, created on 2026-06-25 18:52:07
  from '/var/www/html/setup/templates/options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_6a3d78d7acb194_22337351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0e9f735b1a20d1cc1749eff229ee19f60cb408b' => 
    array (
      0 => '/var/www/html/setup/templates/options.tpl',
      1 => 1782413024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a3d78d7acb194_22337351 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="options" action="?action=options" method="post">

    <div class="content-wrap">
        <h2><?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_title'];?>
</h2>

        <div class="options">
            <div class="options-wrap">

                <label class="option-item">
                    <div class="option-item-input">
                        <input type="radio" class="hide" name="installmode" id="installmode0" value="0" <?php if ($_smarty_tpl->tpl_vars['installmode']->value == 0) {?> checked="checked" autofocus="autofocus" <?php }?> />
                        <i class="fa fas fa-gift"></i>
                        <span></span>
                    </div>
                    <div class="option-item-desc">
                        <div class="label"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_new_installation'];?>
</div>
                        <div class="desc">
                            <?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_install_new_copy'];?>
 <?php echo $_smarty_tpl->tpl_vars['app_name']->value;?>
 <br>
                            <strong><?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_install_new_note'];?>
</strong>
                        </div>
                    </div>
                </label>

                <label class="option-item">
                    <div class="option-item-input">
                        <input type="radio" class="hide" name="installmode" id="installmode1" value="1" <?php if ($_smarty_tpl->tpl_vars['installmode']->value == 1) {?> checked="checked" autofocus="autofocus" <?php }?> />
                        <i class="fa fas fa-upload"></i>
                        <span></span>
                    </div>
                    <div class="option-item-desc">
                        <div class="label"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_upgrade_existing'];?>
</div>
                        <div class="desc">
                            <?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_upgrade_existing_note'];?>

                        </div>
                    </div>
                </label>

                <label class="option-item">
                    <div class="option-item-input">
                        <input type="radio" class="hide" name="installmode" id="installmode3" value="3" <?php if ($_smarty_tpl->tpl_vars['installmode']->value == 3) {?> checked="checked" autofocus="autofocus" <?php }?> />
                        <i class="fa fas fa-upload"></i>
                        <span></span>
                    </div>
                    <div class="option-item-desc">
                        <div class="label"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_upgrade_advanced'];?>
</div>
                        <div class="desc">
                            <strong><?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_install_new_note'];?>
</strong>
                        </div>
                    </div>
                </label>

            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['installmode']->value == 0) {?>

        <h2><?php echo $_smarty_tpl->tpl_vars['_lang']->value['advanced_options'];?>
</h2>
        <div class="options advanced_options">
            <div class="options-wrap">

                <label class="option-item">
                    <div class="option-item-input">
                        <input type="text" name="new_folder_permissions" id="new_folder_permissions" value="<?php echo $_smarty_tpl->tpl_vars['new_folder_permissions']->value;?>
" size="5" maxlength="4" />
                    </div>
                    <div class="option-item-desc">
                        <div class="label"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_new_folder_permissions'];?>
</div>
                        <div class="desc">
                            <?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_new_folder_permissions_note'];?>

                        </div>
                    </div>
                </label>

                <label class="option-item">
                    <div class="option-item-input">
                        <input type="text" name="new_file_permissions" id="new_file_permissions" value="<?php echo $_smarty_tpl->tpl_vars['new_file_permissions']->value;?>
" size="5" maxlength="4" />
                    </div>
                    <div class="option-item-desc">
                        <div class="label"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_new_file_permissions'];?>
</div>
                        <div class="desc">
                            <?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_new_file_permissions_note'];?>

                        </div>
                    </div>
                </label>

                <label class="option-item">
                    <div class="option-item-input">
                        <input type="checkbox" name="send_poweredby_header" id="send_poweredby_header" value="1" checked="checked" />
                        <label for="send_poweredby_header"></label>
                    </div>
                    <div class="option-item-desc">
                        <div class="label"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_send_poweredby_header'];?>
</div>
                        <div class="desc">
                            <?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_send_poweredby_header_note'];?>

                        </div>
                    </div>
                </label>
            </div>
        </div>

        <?php }?>

        <?php if ((defined('MODX_SETUP_KEY') ? constant('MODX_SETUP_KEY') : null) == '@traditional@' && $_smarty_tpl->tpl_vars['unpacked']->value == 1 && $_smarty_tpl->tpl_vars['files_exist']->value == 1) {?>

        <input type="hidden" name="unpacked" id="unpacked" value="1" />

        <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['installmode']->value != 0) {?>
        <h2><?php echo $_smarty_tpl->tpl_vars['_lang']->value['advanced_options'];?>
</h2>
        <?php }?>

        <div class="options advanced_options">
            <div class="options-wrap">

                <label class="option-item">
                    <div class="option-item-input">
                        <input type="checkbox" name="unpacked" id="unpacked" value="1" <?php if ($_smarty_tpl->tpl_vars['unpacked']->value == 0) {?> disabled="disabled" <?php }
if ($_smarty_tpl->tpl_vars['unpacked']->value == 1) {?> checked="checked" <?php }?> />
                        <label for="unpacked"></label>
                    </div>
                    <div class="option-item-desc">
                        <div class="label"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_core_unpacked'];?>
</div>
                        <div class="desc">
                            <?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_core_unpacked_note'];?>

                        </div>
                    </div>
                </label>

                <label class="option-item">
                    <div class="option-item-input">
                        <input type="checkbox" name="inplace" id="inplace" value="1" <?php if ($_smarty_tpl->tpl_vars['files_exist']->value == 0) {?> disabled="disabled" <?php }
if ($_smarty_tpl->tpl_vars['files_exist']->value == 1) {?> checked="checked" <?php }?> />
                        <label for="inplace"></label>
                    </div>
                    <div class="option-item-desc">
                        <div class="label"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_core_inplace'];?>
</div>
                        <div class="desc">
                            <?php echo $_smarty_tpl->tpl_vars['_lang']->value['options_core_inplace_note'];?>

                        </div>
                    </div>
                </label>

            </div>
        </div>

        <?php }?>
    </div>

    <div class="setup_navbar">
        <input type="button" onclick="MODx.go('welcome');" value="&#xf053; <?php echo $_smarty_tpl->tpl_vars['_lang']->value['back'];?>
" id="modx-back" class="button">
        <input type="submit" name="proceed" value="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['next'];?>
 &#xf054;" id="modx-next" class="button" autofocus="autofocus">
    </div>
</form>
<?php }
}
