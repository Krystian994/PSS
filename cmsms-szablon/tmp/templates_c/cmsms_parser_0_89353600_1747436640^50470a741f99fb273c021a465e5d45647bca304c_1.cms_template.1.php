<?php
/* Smarty version 4.2.1, created on 2025-05-17 01:04:00
  from 'cms_template:1' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6827c460dd4491_62865333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50470a741f99fb273c021a465e5d45647bca304c' => 
    array (
      0 => 'cms_template:1',
      1 => '1747436008',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6827c460dd4491_62865333 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.global_content.php','function'=>'smarty_function_global_content',),1=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.title.php','function'=>'smarty_function_title',),));
echo smarty_function_global_content(array('name'=>"a_part_top"),$_smarty_tpl);?>


	<section id="content">
		<h1><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h1>
		
	</section>
	
<?php echo smarty_function_global_content(array('name'=>"a_part_bottom"),$_smarty_tpl);
}
}
