<?php
/* Smarty version 3.1.34-dev-1, created on 2019-05-28 14:06:29
  from 'C:\Users\shell\Documents\GitHub\blog\includes\smarty\templates\admin\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-1',
  'unifunc' => 'content_5cecddf54e5208_60339328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9928f5c2e58cce3b3662ec12edb33f8e65f5aa0a' => 
    array (
      0 => 'C:\\Users\\shell\\Documents\\GitHub\\blog\\includes\\smarty\\templates\\admin\\login.tpl',
      1 => 1558987498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cecddf54e5208_60339328 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['cms']->value['favicon'];?>
" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="/public/plugins/bootstrap/css/bootstrap.css?kaga=<?php echo time();?>
" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="/public/plugins/node-waves/waves.css?kaga=<?php echo time();?>
" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="/public/plugins/animate-css/animate.css?kaga=<?php echo time();?>
" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="/public/css/style.css?kaga=<?php echo time();?>
" rel="stylesheet">
    <link href="/public/css/kaga.css?kaga=<?php echo time();?>
" rel="stylesheet">
  </head>

  <body class="login-page bg-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
">
    <div class="login-box">
      <div class="logo">
        <a href=""><b>ADMINCP</b></a>
      </div>
      <div class="card">
        <div class="body">
          <form action="/action/login.admin" method="POST" id="login">
            <div class="msg col-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
"><b id="msg"></b></div>
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
                <button class="btn btn-block bg-<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
 waves-effect" type="submit" name="submit" value="Login">ĐĂNG NHẬP</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Jquery Core Js -->
    <?php echo '<script'; ?>
 src="/public/plugins/jquery/jquery.min.js?kaga=<?php echo time();?>
"><?php echo '</script'; ?>
>

    <!-- Bootstrap Core Js -->
    <?php echo '<script'; ?>
 src="/public/plugins/bootstrap/js/bootstrap.js?kaga=<?php echo time();?>
"><?php echo '</script'; ?>
>

    <!-- Waves Effect Plugin Js -->
    <?php echo '<script'; ?>
 src="/public/plugins/node-waves/waves.js?kaga=<?php echo time();?>
"><?php echo '</script'; ?>
>

    <!-- Bootstrap Tags Input Plugin Js -->
    <?php echo '<script'; ?>
 src="/public/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js?kaga=<?php echo time();?>
"><?php echo '</script'; ?>
>

    <!-- Validation Plugin Js -->
    <?php echo '<script'; ?>
 src="/public/plugins/jquery-validation/jquery.validate.js?kaga=<?php echo time();?>
"><?php echo '</script'; ?>
>

    <!-- Custom Js -->
    <?php echo '<script'; ?>
 src="/public/js/admin.js?kaga=<?php echo time();?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/public/js/admin/login.js?kaga=<?php echo time();?>
"><?php echo '</script'; ?>
>


  </body>

</html>
<?php }
}
