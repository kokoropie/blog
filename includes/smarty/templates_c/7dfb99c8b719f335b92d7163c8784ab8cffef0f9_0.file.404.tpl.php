<?php
/* Smarty version 3.1.34-dev-1, created on 2019-05-28 16:53:46
  from 'C:\Users\shell\Documents\GitHub\blog\includes\smarty\templates\404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-1',
  'unifunc' => 'content_5ced052a532781_34168902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7dfb99c8b719f335b92d7163c8784ab8cffef0f9' => 
    array (
      0 => 'C:\\Users\\shell\\Documents\\GitHub\\blog\\includes\\smarty\\templates\\404.tpl',
      1 => 1558987498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ced052a532781_34168902 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="vi">

  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

    <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['cms']->value['url'];?>
" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" />
    <meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
    <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['cms']->value['url_home'];?>
/public/images/404.png" />
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

    <!-- Custom Css -->
    <link href="/public/css/style.css?kaga=<?php echo time();?>
" rel="stylesheet">
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

    <?php echo '<script'; ?>
 src="/public/js/functions.js?kaga=<?php echo time();?>
"><?php echo '</script'; ?>
>
  </body>

</html>
<?php }
}
