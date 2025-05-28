<?php
/* Smarty version 4.2.1, created on 2025-05-28 16:00:48
  from 'module_file_tpl:Gallery;editfielddef.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6837171013e334_96532967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '597cdc9c4233feb48b3c2c720cbc32e40b8742da' => 
    array (
      0 => 'module_file_tpl:Gallery;editfielddef.tpl',
      1 => 1747431386,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6837171013e334_96532967 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pageoverflow">
<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
</div>
<?php echo $_smarty_tpl->tpl_vars['formstart']->value;
echo $_smarty_tpl->tpl_vars['hidden']->value;?>


<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_name']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_type']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_properties']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['properties_help']->value;?>
</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['properties']->value;?>
</p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_dirfield']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['dirfield']->value;?>
</p>
</div>

<div class="pageoverflow">
  <p class="pagetext"><?php echo $_smarty_tpl->tpl_vars['prompt_public']->value;?>
:</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['public']->value;?>
</p>
</div>

<div class="pageoverflow">
  <p class="pagetext">&nbsp;</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['submit']->value;
echo $_smarty_tpl->tpl_vars['cancel']->value;?>
</p>
	<p>&nbsp;</p>
</div>

<?php echo $_smarty_tpl->tpl_vars['formend']->value;
}
}
