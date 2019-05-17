<?php
/* Smarty version 3.1.34-dev-1, created on 2019-05-15 23:50:20
  from 'C:\xampp\htdocs\includes\smarty\templates\admin\comment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-1',
  'unifunc' => 'content_5cdc434c424cb1_83650503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4b1a4f539d303cc434ce7b78cff40ce1d7c7d5a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\includes\\smarty\\templates\\admin\\comment.tpl',
      1 => 1556986346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cdc434c424cb1_83650503 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover dataTable" data-table>
            <thead>
              <tr>
                <th>
                  <input type="checkbox" data-check="[data-target=checkbox]" id="check_all_1" onchange="document.getElementById('check_all_2').checked = this.checked" class="filled-in chk-col-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
" />
                  <label for="check_all_1"></label>
                </th>
                <th>ID</th>
                <th>TÊN</th>
                <th>BÀI VIẾT</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>
                  <input type="checkbox" data-check="[type=checkbox]:not([data-check])" id="check_all_2" onchange="document.getElementById('check_all_1').checked = this.checked" class="filled-in chk-col-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
" />
                  <label for="check_all_2"></label>
                </th>
                <th>ID</th>
                <th>TÊN</th>
                <th>BÀI VIẾT</th>
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
                  <input type="checkbox" data-target="checkbox" id="comment_id_<?php echo $_smarty_tpl->tpl_vars['value']->value['comment_id'];?>
" onchange="document.getElementById('real_' + this.id).checked = this.checked" class="filled-in chk-col-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
" />
                  <label for="comment_id_<?php echo $_smarty_tpl->tpl_vars['value']->value['comment_id'];?>
"></label>
                </td>
                <td>
                  <?php echo $_smarty_tpl->tpl_vars['value']->value['comment_id'];?>

                </td>
                <td><a href="/category/<?php echo $_smarty_tpl->tpl_vars['value']->value['post_id'];?>
.html" class="col-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['from'];?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['comment'];?>
</td>
              </tr>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
          </table>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comment']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
          <input type="checkbox" id="real_comment_id_<?php echo $_smarty_tpl->tpl_vars['value']->value['comment_id'];?>
" data-comment="<?php echo $_smarty_tpl->tpl_vars['value']->value['comment_id'];?>
" class="filled-in chk-col-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
" />
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }
}
