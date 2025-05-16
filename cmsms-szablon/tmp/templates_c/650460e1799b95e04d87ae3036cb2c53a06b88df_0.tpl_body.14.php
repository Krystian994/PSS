<?php
/* Smarty version 4.2.1, created on 2025-05-17 01:29:03
  from 'tpl_body:14' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6827ca3f49e3a0_20391009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '650460e1799b95e04d87ae3036cb2c53a06b88df' => 
    array (
      0 => 'tpl_body:14',
      1 => '1747438120',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6827ca3f49e3a0_20391009 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.global_content.php','function'=>'smarty_function_global_content',),));
echo smarty_function_global_content(array('name'=>'a_part_top'),$_smarty_tpl);?>

<?php echo smarty_function_global_content(array('name'=>'a_menu'),$_smarty_tpl);?>


<main id="main">
    <section id="banner">
        <div class="inner">
            <h1>Introspect: <span>A free + fully responsive site template by TEMPLATED</span></h1>
            <ul class="actions">
                <li><a href="#" class="button alt">Get Started</a></li>
            </ul>
        </div>
    </section>

    <section id="content">
        <?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
    </section>
</main>

<?php echo smarty_function_global_content(array('name'=>'a_part_bottom'),$_smarty_tpl);
}
}
