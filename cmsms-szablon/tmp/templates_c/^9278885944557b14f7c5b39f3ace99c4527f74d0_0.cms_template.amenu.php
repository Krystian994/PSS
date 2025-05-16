<?php
/* Smarty version 4.2.1, created on 2025-05-17 00:44:51
  from 'cms_template:a_menu' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6827bfe3380e37_74461164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9278885944557b14f7c5b39f3ace99c4527f74d0' => 
    array (
      0 => 'cms_template:a_menu',
      1 => '1747435420',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6827bfe3380e37_74461164 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'Nav_menu' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\cmsms\\tmp\\templates_c\\^9278885944557b14f7c5b39f3ace99c4527f74d0_0.cms_template.amenu.php',
    'uid' => '9278885944557b14f7c5b39f3ace99c4527f74d0',
    'call_name' => 'smarty_template_function_Nav_menu_235440746827bfe335e6c2_25063402',
  ),
));
?>

<?php if ((isset($_smarty_tpl->tpl_vars['nodes']->value))) {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'Nav_menu', array('data'=>$_smarty_tpl->tpl_vars['nodes']->value,'depth'=>0), true);?>

<?php }
}
/* smarty_template_function_Nav_menu_235440746827bfe335e6c2_25063402 */
if (!function_exists('smarty_template_function_Nav_menu_235440746827bfe335e6c2_25063402')) {
function smarty_template_function_Nav_menu_235440746827bfe335e6c2_25063402(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('depth'=>1), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>
<ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'node');
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
if ($_smarty_tpl->tpl_vars['node']->value->type == 'sectionheader') {?><li class='sectionheader <?php echo $_smarty_tpl->tpl_vars['liclass']->value;?>
'><span><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</span><?php if ((isset($_smarty_tpl->tpl_vars['node']->value->children))) {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'Nav_menu', array('data'=>$_smarty_tpl->tpl_vars['node']->value->children,'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);
}?></li><?php } elseif ($_smarty_tpl->tpl_vars['node']->value->type == 'separator') {?><li><hr class='separator'/></li><?php } else { ?><li><a href="<?php echo $_smarty_tpl->tpl_vars['node']->value->url;?>
"><span><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</span></a><?php if ((isset($_smarty_tpl->tpl_vars['node']->value->children))) {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'Nav_menu', array('data'=>$_smarty_tpl->tpl_vars['node']->value->children,'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);
}?></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php
}}
/*/ smarty_template_function_Nav_menu_235440746827bfe335e6c2_25063402 */
}
