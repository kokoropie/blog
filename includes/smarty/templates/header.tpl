<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title>{$title}</title>
  <meta name="keywords" content="{$keywords}" />
  <meta name="description" content="{$description}" />
  <meta property="og:url" content="{$cms.url}" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="{$title}" />
  <meta property="og:description" content="{$description}" />
  <meta property="og:image" content="{$cms.thumbnail}" />

  <!-- Favicon-->
  <link rel="icon" href="{$cms.favicon}" type="image/x-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
  <!-- Bootstrap Core Css -->
  <link href="/public/plugins/bootstrap/css/bootstrap.css?kaga={time()}" rel="stylesheet">
  <!-- Font Awesome Core Css -->
  <link href="/public/plugins/fontawesome/css/all.css?kaga={time()}" rel="stylesheet">
  <!-- Waves Effect Css -->
  <link href="/public/plugins/node-waves/waves.css?kaga={time()}" rel="stylesheet" />
  <!-- Animation Css -->
  <link href="/public/plugins/animate-css/animate.css?kaga={time()}" rel="stylesheet" />
  <!-- JQuery DataTable Css -->
  <link href="/public/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css?kaga={time()}" rel="stylesheet">
  <!-- Bootstrap Material Datetime Picker Css -->
  <link href="/public/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css?kaga={time()}" rel="stylesheet" />
  <!-- Bootstrap DatePicker Css -->
  <link href="/public/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css?kaga={time()}" rel="stylesheet" />
  <!-- Wait Me Css -->
  <link href="/public/plugins/waitme/waitMe.css?kaga={time()}" rel="stylesheet" />
  <!-- Bootstrap Select Css -->
  <link href="/public/plugins/bootstrap-select/css/bootstrap-select.css?kaga={time()}" rel="stylesheet" />
  <!-- Sweetalert Css -->
  <link href="/public/plugins/sweetalert/sweetalert.css?kaga={time()}" rel="stylesheet" />
  <!-- Colorpicker Css -->
  <link href="/public/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css?kaga={time()}" rel="stylesheet" />
  <!-- Dropzone Css -->
  <link href="/public/plugins/dropzone/dropzone.css?kaga={time()}" rel="stylesheet">
  <!-- Multi Select Css -->
  <link href="/public/plugins/multi-select/css/multi-select.css?kaga={time()}" rel="stylesheet">
  <!-- Bootstrap Spinner Css -->
  <link href="/public/plugins/jquery-spinner/css/bootstrap-spinner.css?kaga={time()}" rel="stylesheet">
  <!-- Bootstrap Tagsinput Css -->
  <link href="/public/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css?kaga={time()}" rel="stylesheet">
  <!-- noUISlider Css -->
  <link href="/public/plugins/nouislider/nouislider.min.css?kaga={time()}" rel="stylesheet" />
  <!-- Morris Css -->
  <link href="/public/plugins/morrisjs/morris.css?kaga={time()}" rel="stylesheet" />
  <!-- Light Gallery Plugin Css -->
  <link href="/public/plugins/light-gallery/css/lightgallery.css?kaga={time()}" rel="stylesheet">
  <!-- Share Buttons Plugin Css -->
  <link href="/public/plugins/jquery-sharebuttons/css/jquery.share-buttons.css?kaga={time()}" rel="stylesheet" />
  <!-- Custom Css -->
  <link href="/public/css/style.css?kaga={time()}" rel="stylesheet">
  <link href="/public/css/kaga.css?kaga={time()}" rel="stylesheet">
  <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
  <link href="/public/css/themes/all-themes.css?kaga={time()}" rel="stylesheet" />
</head>

<body class="theme-{$theme} lg-on">
  <div id="fb-root"></div>
  <script>
    (function(d, s, id, lang) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = "//connect.facebook.net/" + lang + "/sdk.js#xfbml=1&version=v2.4";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk', 'vi_VN'));
  </script>
  <!-- Page Loader -->
  <div class="page-loader-wrapper">
    <div class="loader">
      <div class="preloader">
        <div class="spinner-layer pl-{$theme}">
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
        <a class="navbar-brand" id="logo" href="{$cms.url_home}">{$cms.logo}</a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tìm Kiếm" href="javascript:void(0)" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
          {if isset($ss.logined)}
          <li>
            <a data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Có {$cms.count.comment_wait} Bình Luận Mới Cần Phê Duyệt" href="/admin/comment.html" id="count_comment_wait">
              <i class="material-icons">comment</i>
              <span class="label-count">{$cms.count.comment_wait}</span>
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
          {/if}
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
    {include file="sidebar.left.tpl"}
    {include file="sidebar.right.tpl"}
  </section>
  <section class="content">
    <div class="container-fluid">
