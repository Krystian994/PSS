<?php
/* Smarty version 4.2.1, created on 2025-05-27 15:20:36
  from 'tpl_body:24' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6835bc2472ef74_47979818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad83cfdd496e0d74150f5e8179bf0ea1e88e3ac2' => 
    array (
      0 => 'tpl_body:24',
      1 => '1748352006',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6835bc2472ef74_47979818 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.global_content.php','function'=>'smarty_function_global_content',),));
echo smarty_function_global_content(array('name'=>'a_part_top'),$_smarty_tpl);?>


<section id="content">
	<?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
</section>

<?php echo smarty_function_global_content(array('name'=>'a_part_bottom'),$_smarty_tpl);
}
}
