<?php
/* Smarty version 3.1.33, created on 2019-07-11 08:31:36
  from 'C:\xampp\htdocs\heaven\w\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d26d7c8d6ed70_35264685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e803878856d62609bd712e4e327015def66208ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\heaven\\w\\view\\index.tpl',
      1 => 1562826283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d26d7c8d6ed70_35264685 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['test']->value;?>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
