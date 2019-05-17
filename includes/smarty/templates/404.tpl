<!DOCTYPE html>
<html lang="vi">

  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>{$title}</title>

    <meta property="og:url" content="{$cms.url}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{$title}" />
    <meta property="og:description" content="{$description}" />
    <meta property="og:image" content="{$cms.url_home}/public/images/404.png" />
    <!-- Favicon-->
    <link rel="icon" href="{$cms.favicon}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="/public/plugins/bootstrap/css/bootstrap.css?kaga={time()}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="/public/plugins/node-waves/waves.css?kaga={time()}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="/public/css/style.css?kaga={time()}" rel="stylesheet">
  </head>

  <body class="four-zero-four" style="background: url(/public/images/404.png) no-repeat center;">
    <div class="four-zero-four-container">
      <div class="error-code">404</div>
      <div class="error-message">
        Trang Này Không Tồn Tại!
      </div>
      <div class="button-place">
        <a href="/" class="btn btn-lg waves-effect" style="color:#000"><b>VÀO TRANG CHỦ</b></a>
      </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="/public/plugins/jquery/jquery.min.js?kaga={time()}"></script>

    <!-- Bootstrap Core Js -->
    <script src="/public/plugins/bootstrap/js/bootstrap.js?kaga={time()}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="/public/plugins/node-waves/waves.js?kaga={time()}"></script>

    <script src="/public/js/functions.js?kaga={time()}"></script>
  </body>

</html>
