<?php
/* Smarty version 3.1.34-dev-1, created on 2019-05-28 16:53:31
  from 'C:\Users\shell\Documents\GitHub\blog\includes\smarty\templates\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-1',
  'unifunc' => 'content_5ced051be761a5_61342566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51ec06b5bdbba432b79329c7ee763d8a684df1fe' => 
    array (
      0 => 'C:\\Users\\shell\\Documents\\GitHub\\blog\\includes\\smarty\\templates\\dashboard.tpl',
      1 => 1558987498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ced051be761a5_61342566 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="">
  <div class="card profile-card">
    <div class="header">
      <i class="fas fa-chart-line"></i> THỐNG KÊ
    </div>
    <div class="profile-footer">
      <ul>
        <li>
          <span>Đang Truy Cập</span>
          <span><?php echo number_format($_smarty_tpl->tpl_vars['cms']->value['online']);?>
</span>
        </li>
        <li>
          <span>Lượt Truy Cập Hôm Nay</span>
          <span><?php echo number_format($_smarty_tpl->tpl_vars['cms']->value['count']['today']);?>
</span>
        </li>
        <li>
          <span>Lượt Truy Cập Hôm Qua</span>
          <span><?php echo number_format($_smarty_tpl->tpl_vars['cms']->value['count']['yesterday']);?>
</span>
        </li>
        <li>
          <span>Lượt Truy Cập Trong Tuần</span>
          <span><?php echo number_format($_smarty_tpl->tpl_vars['cms']->value['count']['week']);?>
</span>
        </li>
        <li>
          <span>Lượt Truy Cập Trong Tháng</span>
          <span><?php echo number_format($_smarty_tpl->tpl_vars['cms']->value['count']['month']);?>
</span>
        </li>
        <li>
          <span>Tổng Lượt Truy Cập</span>
          <span><?php echo number_format($_smarty_tpl->tpl_vars['cms']->value['count']['total']);?>
</span>
        </li>
        <li>
          <span>Lượt Truy Cập Trung Bình</span>
          <span><?php echo number_format($_smarty_tpl->tpl_vars['cms']->value['count']['avg']);?>
</span>
        </li>
      </ul>
    </div>
  </div>
</div>
<?php }
}
