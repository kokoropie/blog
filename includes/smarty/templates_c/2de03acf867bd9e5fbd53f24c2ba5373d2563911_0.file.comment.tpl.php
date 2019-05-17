<?php
/* Smarty version 3.1.34-dev-1, created on 2019-05-17 16:54:48
  from 'C:\xampp\htdocs\blog\includes\smarty\templates\admin\comment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-1',
  'unifunc' => 'content_5cde84e883a2a5_98628555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2de03acf867bd9e5fbd53f24c2ba5373d2563911' => 
    array (
      0 => 'C:\\xampp\\htdocs\\blog\\includes\\smarty\\templates\\admin\\comment.tpl',
      1 => 1558086879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cde84e883a2a5_98628555 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th>
                  <input type="checkbox" data-check="[data-target=checkbox]" id="check_all_1" onchange="document.getElementById('check_all_2').checked = this.checked" class="filled-in chk-col-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
" />
                  <label for="check_all_1"></label>
                </th>
                <th>THÔNG TIN</th>
                <th>BÌNH LUẬN</th>
                <th>BÀI VIẾT</th>
                <th>THỜI GIAN</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>
                  <input type="checkbox" data-check="[data-target=checkbox]" id="check_all_2" onchange="document.getElementById('check_all_1').checked = this.checked" class="filled-in chk-col-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
" />
                  <label for="check_all_2"></label>
                </th>
                <th>THÔNG TIN</th>
                <th>BÌNH LUẬN</th>
                <th>BÀI VIẾT</th>
                <th>THỜI GIAN</th>
              </tr>
            </tfoot>
            <tbody>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comment']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
              <tr>
                <td>
                  <input type="checkbox" name="comment_id[<?php echo $_smarty_tpl->tpl_vars['value']->value['comment_id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['comment_id'];?>
" data-target="checkbox" id="comment_id_<?php echo $_smarty_tpl->tpl_vars['value']->value['comment_id'];?>
" class="filled-in chk-col-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
" />
                  <label for="comment_id_<?php echo $_smarty_tpl->tpl_vars['value']->value['comment_id'];?>
"></label>
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['from'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['comment'];?>
</td>
                <td><a href="/post/<?php echo $_smarty_tpl->tpl_vars['value']->value['post_url'];?>
.html" class="col-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['post_name'];?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['time'];?>
</td>
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
