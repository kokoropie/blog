<?php
/*************************
	*Author: Kaga Akatsuki
	*Date: 17/04/2019
*************************/

include_once DIR . '/functions/config.php';

if (isset($_POST['submit'])) {
  $username = addslashes(htmlspecialchars($_POST['username']));
  $password = addslashes(htmlspecialchars($_POST['password']));
  if ($username == $cms['admin']['username'] && md5($password) == $cms['admin']['password']) {
    $ss->set("logined", time());
    $count->set_log(ip());
    echo '<meta http-equiv="refresh" content="0;url=/admin" />';
  } else {
    echo "Tài Khoản Hoặc Mật Khẩu Không Chính Xác!";
  }
}
