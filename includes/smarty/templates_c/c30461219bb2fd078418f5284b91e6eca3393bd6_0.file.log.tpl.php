<?php
/* Smarty version 3.1.34-dev-1, created on 2019-05-17 12:10:33
  from 'C:\xampp\htdocs\blog\includes\smarty\templates\admin\log.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-1',
  'unifunc' => 'content_5cde424984e971_13583837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c30461219bb2fd078418f5284b91e6eca3393bd6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\blog\\includes\\smarty\\templates\\admin\\log.tpl',
      1 => 1558069174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cde424984e971_13583837 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover dataTable" data-table>
            <thead>
              <tr>
                <th>IP</th>
                <th>THỜI GIAN</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>IP</th>
                <th>THỜI GIAN</th>
              </tr>
            </tfoot>
            <tbody>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cms']->value['log'], 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$__foreach_value_0_saved = $_smarty_tpl->tpl_vars['value'];
?>
              <tr id="log_<?php echo $_smarty_tpl->tpl_vars['value']->key;?>
">
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['ip'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['time'];?>
</td>
              </tr>
              <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved;
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
