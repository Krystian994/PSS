<?php
/* Smarty version 4.2.1, created on 2025-05-17 01:29:03
  from 'cms_template:a_menu' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6827ca3f690ca4_60214952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9278885944557b14f7c5b39f3ace99c4527f74d0' => 
    array (
      0 => 'cms_template:a_menu',
      1 => '1747437854',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6827ca3f690ca4_60214952 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.root_url.php','function'=>'smarty_function_root_url',),1=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.sitename.php','function'=>'smarty_function_sitename',),));
?>
<header id="header">
    <div class="inner">
        <a href="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
" class="logo"><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</a>
        <nav id="nav">
            <?php echo MenuManager::function_plugin(array('number_of_levels'=>1,'collapse'=>true),$_smarty_tpl);?>

        </nav>
    </div>
</header>

<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a><?php }
}
