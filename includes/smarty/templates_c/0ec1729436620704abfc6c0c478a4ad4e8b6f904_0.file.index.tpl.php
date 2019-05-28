<?php
/* Smarty version 3.1.34-dev-1, created on 2019-05-28 16:53:31
  from 'C:\Users\shell\Documents\GitHub\blog\includes\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-1',
  'unifunc' => 'content_5ced051bd83776_19284721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ec1729436620704abfc6c0c478a4ad4e8b6f904' => 
    array (
      0 => 'C:\\Users\\shell\\Documents\\GitHub\\blog\\includes\\smarty\\templates\\index.tpl',
      1 => 1558987498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ced051bd83776_19284721 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['show']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['value']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
