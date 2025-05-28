<?php
/* Smarty version 4.2.1, created on 2025-05-27 13:11:44
  from 'module_file_tpl:DesignManager;admin_delete_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_68359df04c5393_88925608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bba1e98db7c870f2da7b2a026574e531a700d58d' => 
    array (
      0 => 'module_file_tpl:DesignManager;admin_delete_template.tpl',
      1 => 1746470015,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68359df04c5393_88925608 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.form_start.php','function'=>'smarty_function_form_start',),1=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\admin\\plugins\\function.admin_icon.php','function'=>'smarty_function_admin_icon',),2=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\modifier.localedate_format.php','function'=>'smarty_modifier_localedate_format',),3=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.form_end.php','function'=>'smarty_function_form_end',),));
?>
<h3><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('delete_template');?>
</h3>

<?php if (count($_smarty_tpl->tpl_vars['tpl']->value->get_designs()) > 0 || $_smarty_tpl->tpl_vars['page_usage']->value > 0) {?>
<div class="pagewarning"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('warn_template_used');?>
</div>
<?php }?>

<?php echo smarty_function_form_start(array('tpl'=>$_smarty_tpl->tpl_vars['actionparams']->value['tpl']),$_smarty_tpl);?>

<fieldset>
  <div style="width: 49%; float: left;">
  <div class="pageoverflow">
    <p class="pagetext"><label for="tpl_name">*<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_name');?>
:</label></p>
    <p class="pageinput">
      <input id="tpl_name" type="text" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['tpl']->value->get_name();?>
" readonly="readonly"/>&nbsp;<?php echo smarty_function_admin_icon(array('name'=>'help_copytemplate_name','icon'=>'info.gif','class'=>'helpicon'),$_smarty_tpl);?>

    </p>
  </div>

  <?php if ((isset($_smarty_tpl->tpl_vars['type_list']->value))) {?>
  <div class="pageoverflow">
    <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_type');?>
:</p>
    <p class="pageinput">
      <?php echo $_smarty_tpl->tpl_vars['type_list']->value[$_smarty_tpl->tpl_vars['tpl']->value->get_type_id()];?>

    </p>
  </div>
  <?php }?>

  <?php if ((isset($_smarty_tpl->tpl_vars['category_list']->value))) {?>
  <div class="pageoverflow">
    <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_category');?>
:</p>
    <p class="pageinput">
      <?php echo $_smarty_tpl->tpl_vars['category_list']->value[(($tmp = $_smarty_tpl->tpl_vars['tpl']->value->get_category_id() ?? null)===null||$tmp==='' ? 0 ?? null : $tmp)];?>

    </p>
  </div>
  <?php }?>

  <?php if ((isset($_smarty_tpl->tpl_vars['design_list']->value))) {?>
  <div class="pageoverflow">
    <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_designs');?>
:</p>
    <p class="pageinput">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tpl']->value->get_designs(), 'dsn', false, NULL, 'dsn', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['dsn']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dsn']->value) {
$_smarty_tpl->tpl_vars['dsn']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_dsn']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_dsn']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_dsn']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_dsn']->value['total'];
?>
        <?php echo $_smarty_tpl->tpl_vars['design_list']->value[$_smarty_tpl->tpl_vars['dsn']->value];?>

        <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_dsn']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_dsn']->value['last'] : null)) {?><br/><?php }?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </p>
  </div>
  <?php }?>

  </div>
  <div style="width: 49%; float: right;">
  <?php if ($_smarty_tpl->tpl_vars['tpl']->value->get_id()) {?>
    <div class="pageoverflow">
      <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_created');?>
:</p>
      <p class="pageinput">
        <input type="text" id="tpl_created" value="<?php echo smarty_modifier_localedate_format($_smarty_tpl->tpl_vars['tpl']->value->get_created(),'%x %X');?>
" readonly="readonly"/>
      </p>
    </div>
    <div class="pageoverflow">
      <p class="pagetext"><label for="tpl_modified"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_modified');?>
:</label></p>
      <p class="pageinput">
        <input type="text" id="tpl_modified" value="<?php echo smarty_modifier_localedate_format($_smarty_tpl->tpl_vars['tpl']->value->get_modified(),'%x %X');?>
" readonly="readonly"/>
      </p>
    </div>
  <?php }?>

  <?php if ((isset($_smarty_tpl->tpl_vars['user_list']->value))) {?>
  <div class="pageoverflow">
    <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_owner');?>
:</p>
    <p class="pageinput">
      <?php echo $_smarty_tpl->tpl_vars['user_list']->value[$_smarty_tpl->tpl_vars['tpl']->value->get_owner_id()];?>

    </p>
  </div>
  <?php }?>

  </div></fieldset>

<div class="pagewarning"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('info_template_delete');?>
</div>

<div class="pageoverflow">
  <p class="pagetext"></p>
  <p class="pageinput">
     <input id="check1" type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
check1" value="1"/>&nbsp;<label for="check1"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('confirm_delete_template_1');?>
</label><br/>
     <input id="check2" type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
check2" value="1"/>&nbsp;<label for="check2"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('confirm_delete_template_2');?>
</label>
  </p>
</div>

<div class="pageoverflow">
  <p class="pagetext"></p>
  <p class="pageinput">
     <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
submit" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('submit');?>
"/>
     <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
cancel" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('cancel');?>
"/>
  </p>
</div>
<?php echo smarty_function_form_end(array(),$_smarty_tpl);?>

<?php }
}
