<?php
/* Smarty version 3.1.34-dev-1, created on 2019-05-14 16:48:48
  from 'C:\xampp\htdocs\includes\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-1',
  'unifunc' => 'content_5cda8f00630a39_52151341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd59fe62686abc35fd8b3f04fc6964b1ef73943d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\includes\\smarty\\templates\\index.tpl',
      1 => 1555495414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cda8f00630a39_52151341 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['show']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['value']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
