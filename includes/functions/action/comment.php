<?php
/*************************
	*Author: Kaga Akatsuki
	*Date: 17/04/2019
*************************/

include_once DIR . '/functions/config.php';

if (isset($_POST['submit'])) {
  $time = time();
  $ip = ip();
  $from = array(
    'name' => addslashes(htmlspecialchars(trim($_POST['name']))),
    'email' => empty($_POST['email']) ? NULL : addslashes(htmlspecialchars(trim($_POST['email'])))
  );
  $comment = addslashes(htmlspecialchars(trim($_POST['comment'])));
  $post_id = $_POST['post_id'];
  $query = $db->query("INSERT INTO `comment` (`post_id`,`ip`,`from`,`comment`,`time`)
  VALUES ({$post_id},'{$ip}','".addslashes(json_encode($from))."','{$comment}','{$time}') ");

  if ($query) {
    echo json_encode(array(
      'type' => 'success',
      'msg' => "Bình Luận Thành Công!\nAdmin Sẽ Kiểm Tra Trước Khi Hiển Thị!",
      'success' => true
    ));
  } else {
    echo json_encode(array(
      'type' => 'error',
      'msg' => "Bình Luận Thất Bại!",
      'success' => false
    ));
  }
}
