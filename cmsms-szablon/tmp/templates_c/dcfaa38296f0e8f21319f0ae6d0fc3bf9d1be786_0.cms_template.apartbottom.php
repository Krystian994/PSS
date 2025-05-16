<?php
/* Smarty version 4.2.1, created on 2025-05-17 01:29:03
  from 'cms_template:a_part_bottom' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6827ca3fbae595_52626432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcfaa38296f0e8f21319f0ae6d0fc3bf9d1be786' => 
    array (
      0 => 'cms_template:a_part_bottom',
      1 => '1747437861',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6827ca3fbae595_52626432 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.cms_module.php','function'=>'smarty_function_cms_module',),1=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.root_url.php','function'=>'smarty_function_root_url',),));
?>
<section id="footer">
    <div class="inner">
        <header><h2>Contact</h2></header>
        <?php echo smarty_function_cms_module(array('module'=>'FormBuilder','form'=>'contact_form'),$_smarty_tpl);?>
     </div>
</section>

<div class="copyright">
    Powered by <a href="https://templated.co/">Templated</a>.
</div>

<?php echo '<script'; ?>
 src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/template/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/template/assets/js/skel.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/template/assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/template/assets/js/main.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
