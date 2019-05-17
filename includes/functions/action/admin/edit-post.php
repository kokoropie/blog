<?php
/*************************
	*Author: Kaga Akatsuki
	*Date: 17/04/2019
*************************/

include_once DIR . '/functions/config.php';

if (isset($_POST['submit'])) {
  $id = $_POST['post_id'];
  $name = addslashes(htmlspecialchars(trim($_POST['title'])));
  $content = isset($_POST['content']) ? addslashes(trim($_POST['content'])) : NULL;
  $keywords = empty($_POST['keywords']) ? title_to_keywords($name) : addslashes(htmlspecialchars(trim($_POST['keywords'])));
  $description = isset($_POST['description']) ? addslashes(htmlspecialchars(trim($_POST['description']))) : NULL;
  $cat_id = $_POST['cat_id'];
  $status = $_POST['status'];
  $sticky = empty($_POST['sticky']) ? 0 : 1;
  $thumbnail = NULL;
  $has_thumbnail = false;
  if (isset($_FILES['thumbnail'])) $has_thumbnail = true;
  if ($db->num_rows("SELECT * FROM `post` WHERE `name` = '{$name}' AND `post_id` != {$id}") > 0) {
    echo json_encode(array(
      'success' => false,
      'type' => 'error',
      'msg' => 'Tiêu Đề Đã Tồn Tại!'
    ));
    die();
  }
  if (empty($content)) {
    echo json_encode(array(
      'success' => false,
      'type' => 'error',
      'msg' => 'Chưa Nhập Nội Dung!'
    ));
    die();
  }
  if ($db->num_rows("SELECT * FROM `category` WHERE `cat_id` = {$cat_id} AND `by_id` != 0 ") == 0) {
    echo json_encode(array(
      'success' => false,
      'type' => 'error',
      'msg' => 'Chuyên Mục Không Tồn Tại Hoặc Không Phải Chuyên Mục Con!'
    ));
    die();
  }
  if ($has_thumbnail) {
    $name_thumbnail = $_FILES['thumbnail']['name'];
    $tmp = $_FILES['thumbnail']['tmp_name'];
    $type = explode('/', $_FILES['thumbnail']['type'])[0];
    if ($type == "image") {
      $dir = dir_file(DIR_ROOT . 'upload', $name_thumbnail);
      move_uploaded_file($tmp, $dir);
      $thumbnail = str_replace(DIR_ROOT, '/', $dir);
    } else {
      echo json_encode(
        array(
          'success' > false,
          'msg' => 'Chỉ Chấp Nhận File Ảnh!',
          'type' => 'error'
        )
      );
      die();
    }
  }
  if ($db->query("UPDATE `post` SET
    `name` = '{$name}',
    `content` = '{$content}',
    `cat_id` = {$cat_id},
    `keywords` = '{$keywords}',
    `description` = '{$description}',
    `thumbnail` = '{$thumbnail}',
    `status` = '{$status}',
    `sticky` = '{$sticky}'
    WHERE `post_id` = {$id} ")) {
    echo json_encode(array(
      'success' => true,
      'type' => 'success',
      'msg' => "Cập Nhật Bài Viết Thành Công"
    ));
  } else {
    echo json_encode(array(
      'success' => false,
      'type' => 'error',
      'msg' => 'Lỗi: ' . $db->error()
    ));
  }
}
