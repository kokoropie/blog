<?php
/* Smarty version 3.1.34-dev-1, created on 2019-06-25 21:53:44
  from 'C:\xampp\htdocs\blog\includes\smarty\templates\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-1',
  'unifunc' => 'content_5d1235781313d9_69086541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93cbb154b53dc6057d76bbfe8ba042e07b514e24' => 
    array (
      0 => 'C:\\xampp\\htdocs\\blog\\includes\\smarty\\templates\\dashboard.tpl',
      1 => 1561473077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1235781313d9_69086541 (Smarty_Internal_Template $_smarty_tpl) {
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
