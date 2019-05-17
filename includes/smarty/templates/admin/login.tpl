<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>{$title}</title>
    <!-- Favicon-->
    <link rel="icon" href="{$cms.favicon}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="/public/plugins/bootstrap/css/bootstrap.css?kaga={time()}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="/public/plugins/node-waves/waves.css?kaga={time()}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="/public/plugins/animate-css/animate.css?kaga={time()}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="/public/css/style.css?kaga={time()}" rel="stylesheet">
    <link href="/public/css/kaga.css?kaga={time()}" rel="stylesheet">
  </head>

  <body class="login-page bg-{$theme}">
    <div class="login-box">
      <div class="logo">
        <a href=""><b>ADMINCP</b></a>
      </div>
      <div class="card">
        <div class="body">
          <form action="/action/login.admin" method="POST" id="login">
            <div class="msg col-{$theme}"><b id="msg"></b></div>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="material-icons">person</i>
              </span>
              <div class="form-line focused">
                <input type="text" id="username" class="form-control" name="username" placeholder="Tài Khoản" required autofocus>
              </div>
            </div>
            <div class="input-group">
              <span class="input-group-addon">
                <i class="material-icons">lock</i>
              </span>
              <div class="form-line">
                <input type="password" id="password" class="form-control" name="password" placeholder="Mật Khẩu" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <button class="btn btn-block bg-{$theme} waves-effect" type="submit" name="submit" value="Login">ĐĂNG NHẬP</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="/public/plugins/jquery/jquery.min.js?kaga={time()}"></script>

    <!-- Bootstrap Core Js -->
    <script src="/public/plugins/bootstrap/js/bootstrap.js?kaga={time()}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="/public/plugins/node-waves/waves.js?kaga={time()}"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="/public/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js?kaga={time()}"></script>

    <!-- Validation Plugin Js -->
    <script src="/public/plugins/jquery-validation/jquery.validate.js?kaga={time()}"></script>

    <!-- Custom Js -->
    <script src="/public/js/admin.js?kaga={time()}"></script>
    <script src="/public/js/admin/login.js?kaga={time()}"></script>


  </body>

</html>
