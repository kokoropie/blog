<?php
/*************************
	*Author: Kaga Akatsuki
	*Date: 17/04/2019
*************************/

include_once DIR . '/functions/config.php';

if (isset($_POST['submit'])) {
  $id = addslashes(htmlspecialchars($_POST['cat_id']));
  $name = addslashes(htmlspecialchars($_POST['title']));
  $by_id = $_POST['by_id'];
  if ($db->num_rows("SELECT * FROM `category` WHERE `name` = '{$name}' AND `cat_id` != {$id} ") > 0) {
    echo json_encode(array(
      'success' => false,
      'type' => 'error',
      'msg' => 'Tiêu Đề Đã Tồn Tại!'
    ));
    die();
  }
  if ($db->num_rows("SELECT * FROM `post` WHERE `cat_id` != {$id} ") > 0 && $by_id == 0) {
    echo json_encode(array(
      'success' => false,
      'type' => 'error',
      'msg' => 'Chuyên Mục Con Này Có Bài Viết, Không Thể Chuyển Sang Chuyên Mục Mẹ!'
    ));
    die();
  }
  if ($db->num_rows("SELECT * FROM `category` WHERE `by_id` = {$id} ") > 0 && $by_id != 0) {
    echo json_encode(array(
      'success' => false,
      'type' => 'error',
      'msg' => 'Chuyên Mục Mẹ Này Có Chuyên Mục Con, Không Thể Chuyển Sang Chuyên Mục Con!'
    ));
    die();
  }
  if ($db->query("UPDATE `category` SET
    `name` = '{$name}',
    `by_id` = {$by_id}
    WHERE `cat_id` = {$id} ")) {
    $cat = '<select class="form-control show-tick" name="by_id">
      <option value="0">-- Chuyên Mục Mẹ --</option>';
    foreach ($db->fetch_assoc("SELECT `cat_id`, `name`FROM `category` WHERE `by_id` = 0 ORDER BY `name` ASC") as $key => $value) {
      $cat .= "\n".'<option value="' . $value['cat_id'] . '" '.($by_id == $value['cat_id'] ? "selected" : NULL).'>' . $value['name'] . '</option>';
    }
    $cat .= '</select>';
    $db->query("INSERT INTO `log_admin` (`ip`, `action`, `time`) VALUES ('".ip()."', 'Cập Nhật Chuyên Mục \"{$name}\"', '".time()."')");
    echo json_encode(array(
      'success' => true,
      'type' => 'success',
      'msg' => 'Cập Nhật Chuyên Mục Thành Công',
      'cat' => $cat
    ));
  } else {
    echo json_encode(array(
      'success' => false,
      'type' => 'error',
      'msg' => 'Lỗi: ' . $db->error()
    ));
  }
}
