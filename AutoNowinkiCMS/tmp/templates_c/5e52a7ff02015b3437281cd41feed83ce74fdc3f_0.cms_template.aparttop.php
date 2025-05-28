<?php
/* Smarty version 4.2.1, created on 2025-05-28 12:37:19
  from 'cms_template:a_part_top' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6836e75f82e668_39562244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e52a7ff02015b3437281cd41feed83ce74fdc3f' => 
    array (
      0 => 'cms_template:a_part_top',
      1 => '1748428633',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6836e75f82e668_39562244 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.cms_get_language.php','function'=>'smarty_function_cms_get_language',),1=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.title.php','function'=>'smarty_function_title',),2=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.sitename.php','function'=>'smarty_function_sitename',),3=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.metadata.php','function'=>'smarty_function_metadata',),4=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.root_url.php','function'=>'smarty_function_root_url',),5=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.cms_stylesheet.php','function'=>'smarty_function_cms_stylesheet',),));
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['process_pagedata'][0], array( array(),$_smarty_tpl ) );?>

<!DOCTYPE html>
<html lang="<?php echo smarty_function_cms_get_language(array(),$_smarty_tpl);?>
">

<head>
  <meta charset="utf-8">
  <title><?php echo smarty_function_title(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <?php echo smarty_function_metadata(array(),$_smarty_tpl);?>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/template/assets/css/main.css" />
  <?php echo smarty_function_cms_stylesheet(array(),$_smarty_tpl);?>

</head>

<body>
<header id="header">
  <div class="inner">
    <a href="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
" class="logo"><?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</a>
    <nav id="nav">
      <?php echo Navigator::function_plugin(array('template'=>"a_menu"),$_smarty_tpl);?>

    </nav>
  </div>
</header>

<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a><?php }
}
