<?php
/*************************
	*Author: Kaga Akatsuki
	*Date: 17/04/2019
*************************/

include_once DIR . '/functions/config.php';

if (isset($_POST['submit'])) {
  foreach ($_POST['contact'] as $key => $value) {
    if (strlen($value) == 0) unset($_POST['contact'][$key]);
  }
  $contact = addslashes(json_encode($_POST['contact']));
  if ($db->query("UPDATE `cms` SET `content` = '{$contact}' WHERE `name` = 'contact'")) {
    echo json_encode([
      'msg' => 'Cập Nhật Thành Công!',
      'type' => 'success'
    ]);
  } else {
    echo json_encode([
      'msg' => 'Xảy Ra Lỗi!',
      'type' => 'error'
    ]);
  }
}
