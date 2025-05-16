<?php
/* Smarty version 4.2.1, created on 2025-05-17 01:41:33
  from 'cms_template:a_part_top' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6827cd2da53a49_51035817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e52a7ff02015b3437281cd41feed83ce74fdc3f' => 
    array (
      0 => 'cms_template:a_part_top',
      1 => '1747438890',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6827cd2da53a49_51035817 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.title.php','function'=>'smarty_function_title',),1=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.sitename.php','function'=>'smarty_function_sitename',),2=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.root_url.php','function'=>'smarty_function_root_url',),));
?>
<!DOCTYPE HTML>
<html>
<head>
    <title><?php echo smarty_function_title(array(),$_smarty_tpl);?>
 - <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/template/assets/css/main.css">
</head>
<body><?php }
}
