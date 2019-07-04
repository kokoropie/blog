<?php
/* Smarty version 3.1.34-dev-1, created on 2019-06-25 21:53:43
  from 'C:\xampp\htdocs\blog\includes\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-1',
  'unifunc' => 'content_5d123577eb0787_33762001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dd00b5af7f933f9aa135c9790edff6187d7ee7a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\blog\\includes\\smarty\\templates\\index.tpl',
      1 => 1561473077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d123577eb0787_33762001 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['show']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['value']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
