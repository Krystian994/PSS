<?php
/* Smarty version 4.2.1, created on 2025-05-17 00:10:13
  from 'C:\xampp\htdocs\cmsms\admin\themes\OneEleven\templates\shortcuts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6827b7c5ab61a5_73976089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2eb413b43a9f10623ed9e300f1d04e103df29709' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cmsms\\admin\\themes\\OneEleven\\templates\\shortcuts.tpl',
      1 => 1746469998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6827b7c5ab61a5_73976089 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.root_url.php','function'=>'smarty_function_root_url',),));
?>
<div class="shortcuts"><ul class="cf"><li class="help"><?php if ((isset($_smarty_tpl->tpl_vars['module_help_url']->value))) {?><a href="<?php echo $_smarty_tpl->tpl_vars['module_help_url']->value;?>
" title="<?php echo lang('module_help');?>
"><?php echo lang('module_help');?>
</a><?php } else { ?><a href="https://docs.cmsmadesimple.org/" rel="external" title="<?php echo lang('documentation');?>
"><?php echo lang('documentation');?>
</a><?php }?></li><?php if ((isset($_smarty_tpl->tpl_vars['myaccount']->value))) {?><li class="settings"><a href="myaccount.php?<?php echo $_smarty_tpl->tpl_vars['secureparam']->value;?>
" title="<?php echo lang('myaccount');?>
"><?php echo lang('myaccount');?>
</a></li><?php }
if ((isset($_smarty_tpl->tpl_vars['marks']->value))) {?><li class="favorites open"><a href="listbookmarks.php?<?php echo $_smarty_tpl->tpl_vars['secureparam']->value;?>
" title="<?php echo lang('bookmarks');?>
"><?php echo lang('bookmarks');?>
</a></li><?php }
$_smarty_tpl->_assignInScope('my_alerts', $_smarty_tpl->tpl_vars['theme']->value->get_my_alerts());
if (!empty($_smarty_tpl->tpl_vars['my_alerts']->value)) {
$_smarty_tpl->_assignInScope('num_alerts', count($_smarty_tpl->tpl_vars['my_alerts']->value));
if ($_smarty_tpl->tpl_vars['num_alerts']->value > 0) {
if ($_smarty_tpl->tpl_vars['num_alerts']->value > 10) {
$_smarty_tpl->_assignInScope('txt', '&#2295');
} else {
$_smarty_tpl->_assignInScope('num', 1+$_smarty_tpl->tpl_vars['num_alerts']->value);
$_smarty_tpl->_assignInScope('txt', ((string)$_smarty_tpl->tpl_vars['num_alerts']->value));
}?><li class="notifications"><a id="alerts" title="<?php echo lang('notifications_to_handle2',$_smarty_tpl->tpl_vars['num_alerts']->value);?>
"><span class="bubble"><?php echo $_smarty_tpl->tpl_vars['txt']->value;?>
</span></a></li><?php }
}?><li class="view-site"><a href="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/index.php" rel="external" target="_blank" title="<?php echo lang('viewsite');?>
"><?php echo lang('viewsite');?>
</a></li><li class="logout"><a href="logout.php?<?php echo $_smarty_tpl->tpl_vars['secureparam']->value;?>
" title="<?php echo lang('logout');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['is_sitedown']->value))) {?>onclick="return confirm('<?php echo strtr((string)lang('maintenance_warning'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
')"<?php }?>><?php echo lang('logout');?>
</a></li></ul></div><?php if ((isset($_smarty_tpl->tpl_vars['marks']->value))) {?><div class="dialog invisible" role="dialog" title="<?php echo lang('bookmarks');?>
"><?php if (is_array($_smarty_tpl->tpl_vars['marks']->value) && count($_smarty_tpl->tpl_vars['marks']->value) > 0) {?><h3><?php echo lang('user_created');?>
</h3><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marks']->value, 'mark');
$_smarty_tpl->tpl_vars['mark']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mark']->value) {
$_smarty_tpl->tpl_vars['mark']->do_else = false;
?><li><a<?php if ($_smarty_tpl->tpl_vars['mark']->value->bookmark_id > 0) {?> class="bookmark"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['mark']->value->url;?>
" title="<?php echo $_smarty_tpl->tpl_vars['mark']->value->title;?>
"><?php echo $_smarty_tpl->tpl_vars['mark']->value->title;?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }?><h3><?php echo lang('help');?>
</h3><ul><li><a rel="external" class="external" href="https://docs.cmsmadesimple.org" title="<?php echo lang('documentation');?>
"><?php echo lang('documentation');?>
</a></li><li><a rel="external" class="external" href="https://forum.cmsmadesimple.org" title="<?php echo lang('forums');?>
"><?php echo lang('forums');?>
</a></li><li><a rel="external" class="external" href="https://www.cmsmadesimple.org/support/documentation/chat/"><?php echo lang('chat');?>
</a></li></ul></div><?php }
if (!empty($_smarty_tpl->tpl_vars['my_alerts']->value)) {?><!-- alerts go here --><div id="alert-dialog" class="alert-dialog" role="dialog" title="<?php echo lang('alerts');?>
" style="display: none;"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['my_alerts']->value, 'one');
$_smarty_tpl->tpl_vars['one']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['one']->value) {
$_smarty_tpl->tpl_vars['one']->do_else = false;
?><li class="alert-box" data-alert-name="<?php echo $_smarty_tpl->tpl_vars['one']->value->get_prefname();?>
"><div class="alert-head ui-corner-all <?php if ($_smarty_tpl->tpl_vars['one']->value->priority == '_high') {?>ui-state-error red<?php } elseif ($_smarty_tpl->tpl_vars['one']->value->priority == '_normal') {?>ui-state-highlight orange<?php } else { ?>ui-state-highlightblue<?php }?>"><?php $_smarty_tpl->_assignInScope('icon', $_smarty_tpl->tpl_vars['one']->value->get_icon());
if ($_smarty_tpl->tpl_vars['icon']->value) {?><img class="alert-icon ui-icon" alt="" src="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
" title="<?php echo lang('remove_alert');?>
"/><?php } else { ?><span class="alert-icon ui-icon <?php if ($_smarty_tpl->tpl_vars['one']->value->priority != '_low') {?>ui-icon-alert<?php } else { ?>ui-icon-info<?php }?>" title="<?php echo lang('remove_alert');?>
"></span><?php }?><span class="alert-title"><?php echo (($tmp = $_smarty_tpl->tpl_vars['one']->value->get_title() ?? null)===null||$tmp==='' ? lang('alert') ?? null : $tmp);?>
</span><span class="alert-remove ui-icon ui-icon-close" title="<?php echo lang('remove_alert');?>
"></span><div class="alert-msg"><?php echo $_smarty_tpl->tpl_vars['one']->value->get_message();?>
</div></div></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><div id="alert-noalerts" class="information" style="display: none;"><?php echo lang('info_noalerts');?>
</div></div><?php }?><!-- alerts-end --><?php }
}
