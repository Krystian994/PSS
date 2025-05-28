<?php
/* Smarty version 4.2.1, created on 2025-05-28 12:19:09
  from 'cms_template:a_menu' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6836e31d4dd356_71214858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9278885944557b14f7c5b39f3ace99c4527f74d0' => 
    array (
      0 => 'cms_template:a_menu',
      1 => '1748427533',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6836e31d4dd356_71214858 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'Nav_menu' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\cmsms\\tmp\\templates_c\\^9278885944557b14f7c5b39f3ace99c4527f74d0_0.cms_template.amenu.php',
    'uid' => '9278885944557b14f7c5b39f3ace99c4527f74d0',
    'call_name' => 'smarty_template_function_Nav_menu_8752149976836e31cca9244_50067582',
  ),
));
?>

<?php if ((isset($_smarty_tpl->tpl_vars['nodes']->value))) {?>
  <div class="pure-menu pure-menu-horizontal">
    <ul class="pure-menu-list">
      <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'Nav_menu', array('data'=>$_smarty_tpl->tpl_vars['nodes']->value,'depth'=>0), true);?>

    </ul>
  </div>
<?php }
}
/* smarty_template_function_Nav_menu_8752149976836e31cca9244_50067582 */
if (!function_exists('smarty_template_function_Nav_menu_8752149976836e31cca9244_50067582')) {
function smarty_template_function_Nav_menu_8752149976836e31cca9244_50067582(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('depth'=>1), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'node');
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
?>
    <li class="pure-menu-item 
      <?php if ((isset($_smarty_tpl->tpl_vars['node']->value->children))) {?>
        pure-menu-has-children pure-menu-allow-hover
      <?php }?>">
      <a href="<?php echo $_smarty_tpl->tpl_vars['node']->value->url;?>
" class="pure-menu-link"><?php echo $_smarty_tpl->tpl_vars['node']->value->menutext;?>
</a>
      
      <?php if ((isset($_smarty_tpl->tpl_vars['node']->value->children))) {?>
        <ul class="pure-menu-children">
          <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'Nav_menu', array('data'=>$_smarty_tpl->tpl_vars['node']->value->children,'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);?>

        </ul> 
      <?php }?>
    </li>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}}
/*/ smarty_template_function_Nav_menu_8752149976836e31cca9244_50067582 */
}
