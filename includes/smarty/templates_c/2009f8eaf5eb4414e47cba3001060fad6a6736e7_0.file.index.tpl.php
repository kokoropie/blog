<?php
/* Smarty version 3.1.34-dev-1, created on 2019-05-28 10:09:44
  from 'C:\Users\shell\Documents\GitHub\blog\includes\smarty\templates\category\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-1',
  'unifunc' => 'content_5ceca678a43ad3_49898816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2009f8eaf5eb4414e47cba3001060fad6a6736e7' => 
    array (
      0 => 'C:\\Users\\shell\\Documents\\GitHub\\blog\\includes\\smarty\\templates\\category\\index.tpl',
      1 => 1558987498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ceca678a43ad3_49898816 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover dataTable" data-table>
            <thead>
              <tr>
                <th>TÊN</th>
                <th>CHUYÊN MỤC CON</th>
                <?php if (!empty($_smarty_tpl->tpl_vars['ss']->value['logined'])) {?>
                <th>HÀNH ĐỘNG</th>
                <?php }?>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>TÊN</th>
                <th>CHUYÊN MỤC CON</th>
                <?php if (!empty($_smarty_tpl->tpl_vars['ss']->value['logined'])) {?>
                <th>HÀNH ĐỘNG</th>
                <?php }?>
              </tr>
            </tfoot>
            <tbody>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value['main'], 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
              <tr>
               <td><a href="/category/<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
.html" class="col-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a></td>
               <td><?php echo number_format($_smarty_tpl->tpl_vars['value']->value['numb']);?>
</td>
               <?php if (!empty($_smarty_tpl->tpl_vars['ss']->value['logined'])) {?>
               <td><a href="/admin/edit-category.<?php echo $_smarty_tpl->tpl_vars['value']->value['cat_id'];?>
.html" class="col-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
">Sửa Chuyên Mục</a> | <a href="/admin/delete-category.<?php echo $_smarty_tpl->tpl_vars['value']->value['cat_id'];?>
.html" class="col-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
">Xóa Chuyên Mục</a></td>
               <?php }?>
              </tr>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }
}
