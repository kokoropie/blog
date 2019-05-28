<?php
/*************************
	*Author: Kaga Akatsuki
	*Date: 17/04/2019
*************************/

include_once DIR . '/functions/config.php';

if (isset($_POST['submit'])) {

  $username = addslashes(htmlspecialchars($_POST['username']));
  $old_password = empty($_POST['old_password']) ? NULL : md5($_POST['old_password']);
  $new_password = empty($_POST['new_password']) ? NULL : md5($_POST['new_password']);
  $re_new_password = empty($_POST['re_new_password']) ? NULL : md5($_POST['re_new_password']);

  $password = $cms['admin']['password'];

  if (!empty($old_password) || !empty($new_password) || !empty($re_new_password)) {
    if (empty($old_password) || empty($new_password) || empty($re_new_password)) {
      die(json_encode(array(
        'msg' => 'Vui Lòng Nhập Đầy Đủ Thông Tin!',
        'type' => 'error'
      )));
    } else  {
      if ($old_password != $password) {
        die(json_encode(array(
          'msg' => 'Mật Khẩu Cũ Không Chính Xác!',
          'type' => 'error'
        )));
      } else if ($new_password == $old_password) {
        die(json_encode(array(
          'msg' => 'Mật Khẩu Mới Phải Khác Mật Khẩu Cũ!',
          'type' => 'error'
        )));
      } else if ($new_password != $re_new_password) {
        die(json_encode(array(
          'msg' => 'Mật Khẩu Xác Minh Không Chính Xác!',
          'type' => 'error'
        )));
      } else {
        $password = $new_password;
      }
    }
  }

  $admin = addslashes(json_encode(array(
    'username' => $username,
    'password' => $password
  )));
  $db->query("INSERT INTO `log_admin` (`ip`, `action`, `time`) VALUES ('".ip()."', 'Cập Nhật Tài Khoản Admin', '".time()."')");
  $db->query("UPDATE `cms` SET `content` = '{$admin}' WHERE `name` = 'admin' ");

  echo json_encode([
    'msg' => 'Cập nhật thành công',
    'type' => 'success'
  ]);
}
