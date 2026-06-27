<?php
/* Smarty version 4.5.6, created on 2026-06-26 03:51:12
  from '/var/www/html/setup/templates/database.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_6a3df730897592_16171872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bc3abe6b747609893fe55d5f0f904cdbae19e4f' => 
    array (
      0 => '/var/www/html/setup/templates/database.tpl',
      1 => 1782413024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a3df730897592_16171872 (Smarty_Internal_Template $_smarty_tpl) {
if ((($tmp = $_smarty_tpl->tpl_vars['showHidden']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {
echo '<script'; ?>
>
    MODx.showHidden = true;
<?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
 src="assets/js/sections/database.js"><?php echo '</script'; ?>
>
<form id="install" action="?action=database" method="post">

    <h2 class="title"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['connection_connection_and_login_information'];?>
</h2>

    <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['connection_connection_note'];?>
</p>

    <p class="error"><?php echo (($tmp = $_smarty_tpl->tpl_vars['error_message']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>

    <div class="labelHolder">
        <div class="col">
            <label for="database-type"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['connection_database_type'];?>
</label>
        </div>
        <div class="col">
            <select id="database-type" name="database_type" autofocus="autofocus" class="custom-select">
                <option value="mysql" <?php if ((($tmp = $_smarty_tpl->tpl_vars['config']->value['database_type'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp) == "mysql") {?> selected="selected" <?php }?>>mysql </option>
            </select>
            <span class="version-msg" id="database-type-error"></span>
        </div>
    </div>
    <div class="labelHolder">
        <div class="col">
            <label for="database-server"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['connection_database_host'];?>
</label>
        </div>
        <div class="col">
            <input type="text" id="database-server" value="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['config']->value['database_server'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" name="database_server" />
            <span class="field_error" id="database-server-error"></span>
        </div>
    </div>
    <div class="labelHolder">
        <div class="col">
            <label for="dbase"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['connection_database_name'];?>
</label>
        </div>
        <div class="col">
            <input type="text" id="dbase" value="" name="dbase" />
            <span class="field_error" id="dbase-error"></span>
        </div>
    </div>
    <div class="labelHolder">
        <div class="col">
            <label for="database-user"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['connection_database_login'];?>
</label>
        </div>
        <div class="col">
            <input type="text" id="database-user" name="database_user" value="" autocomplete="new-password" />
            <span class="field_error" id="database-user-error"></span>
        </div>
    </div>
    <div class="labelHolder">
        <div class="col">
            <label for="database-password"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['connection_database_pass'];?>
</label>
        </div>
        <div class="col">
            <input id="database-password" type="password" name="database_password" value="" autocomplete="new-password" />
            <span class="field_error" id="database-password-error"></span>
        </div>
    </div>
    <div class="labelHolder">
        <div class="col">
            <label for="table-prefix"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['connection_table_prefix'];?>
</label>
        </div>
        <div class="col">
            <input type="text" id="table-prefix" value="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['config']->value['table_prefix'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" name="table_prefix" />
            <span class="field_error" id="tableprefix_error"></span>
        </div>
    </div>

    <div class="flex-center">
        <a href="javascript:void(0);" id="modx-testconn" class="button"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['btn_test'];?>
</a>
    </div>

    <div id="modx-db-step1-msg" class="modx-hidden2">
        <span class="title"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['db_connecting'];?>
</span>
        <span class="connect-msg"></span>
    </div>
    <p id="modx-db-info">
        <span>- <?php echo $_smarty_tpl->tpl_vars['_lang']->value['mysql_version_server_start'];?>
<span id="modx-db-server-version"></span></span>
        <span>- <?php echo $_smarty_tpl->tpl_vars['_lang']->value['mysql_version_client_start'];?>
<span id="modx-db-client-version"></span></span>
    </p>
    <div id="modx-db-step2" class="modx-hidden2">
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['config']->value['database_type'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp) == "mysql") {?>
        <div class="labelHolder">
            <div class="col">
                <label for="database-connection-charset"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['connection_character_set'];?>
</label>
            </div>
            <div class="col">
                <select id="database-connection-charset" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['config']->value['database_connection_charset'], ENT_QUOTES, 'UTF-8', true);?>
" name="database_connection_charset" class="custom-select"></select>
                <span class="field_error" id="database_connection_charset_error"></span>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['installmode']->value == 0) {?>
        <div class="labelHolder">
            <div class="col">
                <label for="database-collation"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['connection_collation'];?>
</label>
            </div>
            <div class="col">
                <select id="database-collation" value="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['config']->value['database_collation'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" name="database_collation" class="custom-select"></select>
                <span class="field_error" id="database_collation_error"></span>
            </div>
        </div>
        <?php }?>
        <?php }?>

        <div class="flex-center">
            <a href="javascript:void(0);" id="modx-testcoll" class="button"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['btn_test'];?>
</a>
        </div>

        <p id="modx-db-step2-msg" class="modx-hidden2">
            <span class="title"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['db_check_db'];?>
</span>
            <span class="result"></span>
        </p>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['installmode']->value == 0) {?>
    <div id="modx-db-step3" class="modx-hidden">
        <h2 class="title"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['connection_default_admin_user'];?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['connection_default_admin_note'];?>
</p>

        <div class="labelHolder">
            <div class="col">
                <label for="cmsadminemail"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['connection_default_admin_email'];?>
</label>
            </div>
            <div class="col">
                <input type="email" name="cmsadminemail" id="cmsadminemail" value="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['config']->value['cmsadminemail'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" required/>
                <span class="field_error" id="cmsadminemail_error"><?php echo (($tmp = $_smarty_tpl->tpl_vars['error_cmsadminemail']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</span>
            </div>
        </div>
        <div class="labelHolder">
            <div class="col">
                <label for="cmsadmin"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['connection_default_admin_login'];?>
</label>
            </div>
            <div class="col">
                <input type="text" name="cmsadmin" id="cmsadmin" value="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['config']->value['cmsadmin'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" required/>
                <span class="field_error" id="cmsadmin_error"><?php echo (($tmp = $_smarty_tpl->tpl_vars['error_cmsadmin']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</span>
            </div>
        </div>
        <div class="labelHolder">
            <div class="col">
                <label for="cmspassword"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['connection_default_admin_password'];?>
</label>
            </div>
            <div class="col">
                <input type="password" id="cmspassword" type="password" name="cmspassword" value="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['config']->value['cmspassword'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" required/>
                <span class="field_error" id="cmspassword_error"><?php echo (($tmp = $_smarty_tpl->tpl_vars['error_cmspassword']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</span>
            </div>
        </div>
        <div class="labelHolder">
            <div class="col">
                <label for="cmspasswordconfirm"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['connection_default_admin_password_confirm'];?>
</label>
            </div>
            <div class="col">
                <input type="password" id="cmspasswordconfirm" type="password" name="cmspasswordconfirm" value="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['config']->value['cmspasswordconfirm'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" required/>
                <span class="field_error" id="cmspasswordconfirm_error"><?php echo (($tmp = $_smarty_tpl->tpl_vars['error_cmspasswordconfirm']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</span>
            </div>
        </div>

    </div>
    <?php }?>
    <br />

    <?php if ((($tmp = $_smarty_tpl->tpl_vars['config']->value['unpacked'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp) == 1) {?>
    <input type="hidden" id="unpacked" name="unpacked" value="1" />
    <?php }?>
    <?php if ((($tmp = $_smarty_tpl->tpl_vars['config']->value['inplace'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp) == 1) {?>
    <input type="hidden" id="inplace" name="inplace" value="1" />
    <?php }?>
    <div class="setup_navbar">
        <input type="button" onclick="MODx.go('options');" value="&#xf053; <?php echo $_smarty_tpl->tpl_vars['_lang']->value['back'];?>
" id="modx-back" class="button" />
        <input type="submit" name="proceed" id="modx-next" class="modx-hidden button" value="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['next'];?>
 &#xf054;" class="button" />
    </div>
</form>
<?php }
}
