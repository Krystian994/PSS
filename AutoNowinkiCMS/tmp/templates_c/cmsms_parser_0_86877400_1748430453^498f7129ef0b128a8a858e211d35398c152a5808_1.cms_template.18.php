<?php
/* Smarty version 4.2.1, created on 2025-05-28 13:07:33
  from 'cms_template:18' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6836ee75db5787_29970113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '498f7129ef0b128a8a858e211d35398c152a5808' => 
    array (
      0 => 'cms_template:18',
      1 => '1748428071',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6836ee75db5787_29970113 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.global_content.php','function'=>'smarty_function_global_content',),1=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.title.php','function'=>'smarty_function_title',),2=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.description.php','function'=>'smarty_function_description',),));
echo smarty_function_global_content(array('name'=>'a_part_top'),$_smarty_tpl);?>


	<section id="main">
    <div class="inner">
      <header class="major special">
        <h1><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</h1>
        <p><?php echo smarty_function_description(array(),$_smarty_tpl);?>
</p>
      </header>

      

    </div>
  </section>
	
<?php echo smarty_function_global_content(array('name'=>'a_part_bottom'),$_smarty_tpl);
}
}
