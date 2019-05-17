<?php
/* Smarty version 3.1.34-dev-1, created on 2019-05-14 20:33:54
  from 'C:\xampp\htdocs\includes\smarty\templates\admin\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-1',
  'unifunc' => 'content_5cdac3c28a29b0_58158872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd21ea7cb87c43ad35c646b0e82e2472cf37ff611' => 
    array (
      0 => 'C:\\xampp\\htdocs\\includes\\smarty\\templates\\admin\\dashboard.tpl',
      1 => 1556975657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cdac3c28a29b0_58158872 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row clearfix">
  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="info-box bg-pink hover-expand-effect hover-zoom-effect not">
      <div class="icon">
        <i class="material-icons">account_box</i>
      </div>
      <div class="content" id="count_online">
        <div class="text">ĐANG TRUY CẬP</div>
        <div class="number" count-to data-from="0" data-to="<?php echo $_smarty_tpl->tpl_vars['cms']->value['online'];?>
" data-speed="1000" data-fresh-interval="20"><?php echo $_smarty_tpl->tpl_vars['cms']->value['online'];?>
</div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="info-box bg-light-green hover-expand-effect">
      <div class="icon">
        <i class="material-icons">forum</i>
      </div>
      <div class="content" id="count_comment">
        <div class="text">Bình Luận</div>
        <div class="number" count-to data-from="0" data-to="<?php echo $_smarty_tpl->tpl_vars['cms']->value['count']['comment'];?>
" data-speed="1000" data-fresh-interval="20">243</div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="info-box bg-cyan hover-expand-effect hover-zoom-effect  not">
      <div class="icon">
        <i class="material-icons">av_timer</i>
      </div>
      <div class="content" id="count_yesterday">
        <div class="text">LƯỢT TRUY CẬP HÔM QUA</div>
        <div class="number" count-to data-from="0" data-to="<?php echo $_smarty_tpl->tpl_vars['cms']->value['count']['yesterday'];?>
" data-speed="1000" data-fresh-interval="20"><?php echo $_smarty_tpl->tpl_vars['cms']->value['count']['yesterday'];?>
</div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="info-box bg-teal hover-expand-effect hover-zoom-effect not">
      <div class="icon">
        <i class="material-icons">visibility</i>
      </div>
      <div class="content" id="count_avg">
        <div class="text">LƯỢT TRUY CẬP TRUNG BÌNH</div>
        <div class="number" count-to data-from="0" data-to="<?php echo $_smarty_tpl->tpl_vars['cms']->value['count']['avg'];?>
" data-speed="1000" data-fresh-interval="20"><?php echo $_smarty_tpl->tpl_vars['cms']->value['count']['avg'];?>
</div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="info-box bg-indigo hover-expand-effect hover-zoom-effect not">
      <div class="icon">
        <i class="material-icons">visibility</i>
      </div>
      <div class="content" id="count_week">
        <div class="text">LƯỢT TRUY CẬP TRONG TUẦN</div>
        <div class="number" count-to data-from="0" data-to="<?php echo $_smarty_tpl->tpl_vars['cms']->value['count']['week'];?>
" data-speed="1000" data-fresh-interval="20"><?php echo $_smarty_tpl->tpl_vars['cms']->value['count']['week'];?>
</div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="info-box bg-amber hover-expand-effect hover-zoom-effect not">
      <div class="icon">
        <i class="material-icons">visibility</i>
      </div>
      <div class="content" id="count_year">
        <div class="text">LƯỢT TRUY CẬP TRONG NĂM</div>
        <div class="number" count-to data-from="0" data-to="<?php echo $_smarty_tpl->tpl_vars['cms']->value['count']['year'];?>
" data-speed="1000" data-fresh-interval="20"><?php echo $_smarty_tpl->tpl_vars['cms']->value['count']['year'];?>
</div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="info-box bg-lime hover-expand-effect hover-zoom-effect not">
      <div class="icon">
        <i class="material-icons">visibility</i>
      </div>
      <div class="content" id="count_total">
        <div class="text">TỔNG LƯỢT TRUY CẬP</div>
        <div class="number" count-to data-from="0" data-to="<?php echo $_smarty_tpl->tpl_vars['cms']->value['count']['total'];?>
" data-speed="1000" data-fresh-interval="20"><?php echo $_smarty_tpl->tpl_vars['cms']->value['count']['total'];?>
</div>
      </div>
    </div>
  </div>
</div>
<div class="row clearfix">
  <div class="col-md-12">
    <div class="card">
      <div class="header">
        <h2>THỐNG KÊ LƯỢT TRUY CẬP NGÀY <?php echo date("Y-m-d");?>
</h2>
      </div>
      <div class="body">
        <canvas id="dashboard_today_chart" height="100"></canvas>
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="card">
      <div class="header">
        <h2>THỐNG KÊ LƯỢT TRUY CẬP THÁNG <?php echo date("Y-m");?>
</h2>
      </div>
      <div class="body">
        <canvas id="dashboard_month_chart" height="100"></canvas>
      </div>
    </div>
  </div>
</div>
<?php }
}
