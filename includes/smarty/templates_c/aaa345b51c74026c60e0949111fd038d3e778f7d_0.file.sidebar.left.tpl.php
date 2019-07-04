<?php
/* Smarty version 3.1.34-dev-1, created on 2019-06-25 21:53:44
  from 'C:\xampp\htdocs\blog\includes\smarty\templates\sidebar.left.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-1',
  'unifunc' => 'content_5d12357803d276_17415676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aaa345b51c74026c60e0949111fd038d3e778f7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\blog\\includes\\smarty\\templates\\sidebar.left.tpl',
      1 => 1561473077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d12357803d276_17415676 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar" data-main="<?php echo $_smarty_tpl->tpl_vars['where']->value['main'];?>
" data-sub="<?php echo $_smarty_tpl->tpl_vars['where']->value['sub'];?>
">
  <!-- Menu -->
  <div class="menu">
    <div>
      <ol class="breadcrumb breadcrumb-bg-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
 margin-0">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_1_saved = $_smarty_tpl->tpl_vars['value'];
?>
        <?php if ($_smarty_tpl->tpl_vars['value']->key == (count($_smarty_tpl->tpl_vars['breadcrumb']->value)-1)) {?>
        <li class="active"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</li>
        <?php } else { ?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a></li>
        <?php }?>
        <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ol>
    </div>
    <ul class="list">
      <li <?php if ($_smarty_tpl->tpl_vars['where']->value['main'] == "home") {?>class="active"<?php }?>>
        <a href="/">
          <i class="material-icons">home</i>
          <span>Home</span>
        </a>
      </li>
      <li class="header <?php if ($_smarty_tpl->tpl_vars['where']->value['main'] == "category") {?>active<?php }?>" id="list_category">
        <a href="/category">
          <i class="material-icons">widgets</i>
          <span>CHUYÊN MỤC (<b><?php echo number_format(count($_smarty_tpl->tpl_vars['categories']->value['main']));?>
</b>)</span>
        </a>
      </li>
      <?php if (isset($_smarty_tpl->tpl_vars['ss']->value['logined'])) {?>
      <li <?php if ($_smarty_tpl->tpl_vars['where']->value['main'] == "add-category") {?>class="active"<?php }?>>
        <a href="/admin/add-category.html">
          <i class="material-icons">add_box</i>
          <span>Tạo Chuyên Mục</span>
        </a>
      </li>
      <?php }?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value['main'], 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_2_saved = $_smarty_tpl->tpl_vars['value'];
?>
      <li <?php if ($_smarty_tpl->tpl_vars['where']->value['main'] == $_smarty_tpl->tpl_vars['value']->value['cat_id']) {?>class="active"<?php }?> id="li_cat_<?php echo $_smarty_tpl->tpl_vars['value']->value['cat_id'];?>
">
      <?php if ($_smarty_tpl->tpl_vars['value']->value['numb'] == 0) {?>
        <a href="/category/<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
.html">
          <i class="material-icons">dashboard</i>
          <span><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</span>
        </a>
      <?php } else { ?>
        <a href="javascript:void(0);" class="menu-toggle">
          <i class="material-icons">dashboard</i>
          <span><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
 (<b><?php echo number_format($_smarty_tpl->tpl_vars['value']->value['numb']);?>
</b>)</span>
        </a>
        <ul class="ml-menu">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value['sub'][$_smarty_tpl->tpl_vars['value']->key], 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
          <li <?php if ($_smarty_tpl->tpl_vars['where']->value['sub'] == $_smarty_tpl->tpl_vars['val']->value['cat_id']) {?>class="active"<?php }?>>
            <a href="/category/<?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
 (<b><?php echo number_format($_smarty_tpl->tpl_vars['val']->value['numb']);?>
</b>)</a>
          </li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      <?php }?>
      </li>
      <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_2_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
  <!-- #Menu -->
  <!-- Footer -->
  <div class="legal">
    <div class="copyright">
      Copyright &copy; <?php echo date('Y');?>

    </div>
    <div class="version">
      <b>Version: </b> 1.0.5
    </div>
    <div class="version">
      <b id="timer"><?php echo date("Y-m-d H:i:s");?>
</b>
    </div>
  </div>
  <!-- #Footer -->
</aside>
<!-- #END# Left Sidebar -->
<?php }
}
