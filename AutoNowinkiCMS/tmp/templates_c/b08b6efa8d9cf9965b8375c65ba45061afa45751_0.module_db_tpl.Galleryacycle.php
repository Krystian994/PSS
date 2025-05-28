<?php
/* Smarty version 4.2.1, created on 2025-05-28 16:17:27
  from 'module_db_tpl:Gallery;a_cycle' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_68371af7dcff81_24345023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b08b6efa8d9cf9965b8375c65ba45061afa45751' => 
    array (
      0 => 'module_db_tpl:Gallery;a_cycle',
      1 => 1748441844,
      2 => 'module_db_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68371af7dcff81_24345023 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="slides">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
    <?php if (!$_smarty_tpl->tpl_vars['image']->value->isdir) {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['image']->value->comment;?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->thumb;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->titlename;?>
" />
      </a>
    <?php }?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<div id="caption">&nbsp;</div>


<?php }
}
