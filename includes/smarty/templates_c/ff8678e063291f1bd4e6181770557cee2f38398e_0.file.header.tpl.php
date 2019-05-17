<?php
/* Smarty version 3.1.34-dev-1, created on 2019-05-15 23:35:27
  from 'C:\xampp\htdocs\includes\smarty\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-1',
  'unifunc' => 'content_5cdc3fcf697721_41898309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff8678e063291f1bd4e6181770557cee2f38398e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\includes\\smarty\\templates\\header.tpl',
      1 => 1557938090,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sidebar.left.tpl' => 1,
    'file:sidebar.right.tpl' => 1,
  ),
),false)) {
function content_5cdc3fcf697721_41898309 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
  <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
  <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
  <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['cms']->value['url'];?>
" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" />
  <meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
  <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['cms']->value['thumbnail'];?>
" />

  <!-- Favicon-->
  <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['cms']->value['favicon'];?>
" type="image/x-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
  <!-- Bootstrap Core Css -->
  <link href="/public/plugins/bootstrap/css/bootstrap.css?kaga=<?php echo time();?>
" rel="stylesheet">
  <!-- Font Awesome Core Css -->
  <link href="/public/plugins/fontawesome/css/all.css?kaga=<?php echo time();?>
" rel="stylesheet">
  <!-- Waves Effect Css -->
  <link href="/public/plugins/node-waves/waves.css?kaga=<?php echo time();?>
" rel="stylesheet" />
  <!-- Animation Css -->
  <link href="/public/plugins/animate-css/animate.css?kaga=<?php echo time();?>
" rel="stylesheet" />
  <!-- JQuery DataTable Css -->
  <link href="/public/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css?kaga=<?php echo time();?>
" rel="stylesheet">
  <!-- Bootstrap Material Datetime Picker Css -->
  <link href="/public/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css?kaga=<?php echo time();?>
" rel="stylesheet" />
  <!-- Bootstrap DatePicker Css -->
  <link href="/public/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css?kaga=<?php echo time();?>
" rel="stylesheet" />
  <!-- Wait Me Css -->
  <link href="/public/plugins/waitme/waitMe.css?kaga=<?php echo time();?>
" rel="stylesheet" />
  <!-- Bootstrap Select Css -->
  <link href="/public/plugins/bootstrap-select/css/bootstrap-select.css?kaga=<?php echo time();?>
" rel="stylesheet" />
  <!-- Sweetalert Css -->
  <link href="/public/plugins/sweetalert/sweetalert.css?kaga=<?php echo time();?>
" rel="stylesheet" />
  <!-- Colorpicker Css -->
  <link href="/public/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css?kaga=<?php echo time();?>
" rel="stylesheet" />
  <!-- Dropzone Css -->
  <link href="/public/plugins/dropzone/dropzone.css?kaga=<?php echo time();?>
" rel="stylesheet">
  <!-- Multi Select Css -->
  <link href="/public/plugins/multi-select/css/multi-select.css?kaga=<?php echo time();?>
" rel="stylesheet">
  <!-- Bootstrap Spinner Css -->
  <link href="/public/plugins/jquery-spinner/css/bootstrap-spinner.css?kaga=<?php echo time();?>
" rel="stylesheet">
  <!-- Bootstrap Tagsinput Css -->
  <link href="/public/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css?kaga=<?php echo time();?>
" rel="stylesheet">
  <!-- noUISlider Css -->
  <link href="/public/plugins/nouislider/nouislider.min.css?kaga=<?php echo time();?>
" rel="stylesheet" />
  <!-- Morris Css -->
  <link href="/public/plugins/morrisjs/morris.css?kaga=<?php echo time();?>
" rel="stylesheet" />
  <!-- Light Gallery Plugin Css -->
  <link href="/public/plugins/light-gallery/css/lightgallery.css?kaga=<?php echo time();?>
" rel="stylesheet">
  <!-- Share Buttons Plugin Css -->
  <link href="/public/plugins/jquery-sharebuttons/css/jquery.share-buttons.css?kaga=<?php echo time();?>
" rel="stylesheet" />
  <!-- Custom Css -->
  <link href="/public/css/style.css?kaga=<?php echo time();?>
" rel="stylesheet">
  <link href="/public/css/kaga.css?kaga=<?php echo time();?>
" rel="stylesheet">
  <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
  <link href="/public/css/themes/all-themes.css?kaga=<?php echo time();?>
" rel="stylesheet" />
</head>

<body class="theme-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
 lg-on">
  <div id="fb-root"></div>
  <?php echo '<script'; ?>
>
    (function(d, s, id, lang) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = "//connect.facebook.net/" + lang + "/sdk.js#xfbml=1&version=v2.4";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk', 'vi_VN'));
  <?php echo '</script'; ?>
>
  <!-- Page Loader -->
  <div class="page-loader-wrapper">
    <div class="loader">
      <div class="preloader">
        <div class="spinner-layer pl-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div>
          <div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
      </div>
      <p>Vui Lòng Đợi...</p>
    </div>
  </div>
  <!-- #END# Page Loader -->
  <!-- Overlay For Sidebars -->
  <div class="overlay"></div>
  <!-- #END# Overlay For Sidebars -->
  <!-- Search Bar -->
  <div class="search-bar">
    <form method="get" action="/search">
      <div class="search-icon">
        <i class="material-icons">search</i>
      </div>
      <input type="text" name="q" placeholder="TÌM KIẾM">
      <div class="close-search">
        <i class="material-icons">close</i>
      </div>
    </form>
  </div>
  <!-- #END# Search Bar -->
  <!-- Top Bar -->
  <nav class="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
        <a href="javascript:void(0);" class="bars"></a>
        <a class="navbar-brand" id="logo" href="<?php echo $_smarty_tpl->tpl_vars['cms']->value['url_home'];?>
"><?php echo $_smarty_tpl->tpl_vars['cms']->value['logo'];?>
</a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tìm Kiếm" href="javascript:void(0)" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
          <?php if (isset($_smarty_tpl->tpl_vars['ss']->value['logined'])) {?>
          <li>
            <a data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Có <?php echo $_smarty_tpl->tpl_vars['cms']->value['count']['comment_wait'];?>
 Bình Luận Mới Cần Phê Duyệt" href="/admin/comment.html" id="count_comment_wait">
              <i class="material-icons">comment</i>
              <span class="label-count"><?php echo $_smarty_tpl->tpl_vars['cms']->value['count']['comment_wait'];?>
</span>
            </a>
          </li>
          <li>
            <a data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Thống Kê" href="/admin/dashboard.html">
              <i class="material-icons">insert_chart</i>
            </a>
          </li>
          <li>
            <a data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tạo Bài Viết Mới" href="/admin/add-post.html">
              <i class="material-icons">add_circle</i>
            </a>
          </li>
          <li>
            <a data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Lịch Sử Đăng Nhập" href="/admin/log.html">
              <i class="material-icons">history</i>
            </a>
          </li>
          <li class="pull-right">
            <a data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Thoát" href="/admin/logout.html">
              <i class="material-icons">exit_to_app</i>
            </a>
          </li>
          <li class="pull-right">
            <a data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Cài Đặt Khác" href="/admin/settings.html">
              <i class="material-icons">settings</i>
            </a>
          </li>
          <?php }?>
          <li class="pull-right">
            <a data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Cài Đặt" href="javascript:void(0)" class="js-right-sidebar" data-close="true">
              <i class="material-icons">settings_ethernet</i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section>
    <?php $_smarty_tpl->_subTemplateRender("file:sidebar.left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:sidebar.right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </section>
  <section class="content">
    <div class="container-fluid">
<?php }
}
