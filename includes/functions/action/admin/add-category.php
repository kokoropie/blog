<?php
/*************************
	*Author: Kaga Akatsuki
	*Date: 17/04/2019
*************************/

include_once DIR . '/functions/config.php';

if (isset($_POST['submit'])) {
  $name = addslashes(htmlspecialchars($_POST['title']));
  $by_id = $_POST['by_id'];
  if ($db->num_rows("SELECT * FROM `category` WHERE `name` = '{$name}' ") > 0) {
    echo json_encode(array(
      'success' => false,
      'type' => 'error',
      'msg' => 'Tiêu Đề Đã Tồn Tại!'
    ));
    die();
  }
  if ($db->query("INSERT INTO `category` (`name`,`by_id`)
  VALUES ('{$name}',{$by_id})")) {
    $cat = '<select class="form-control show-tick" name="by_id">
      <option value="0">-- Chuyên Mục Mẹ --</option>';
    foreach ($db->fetch_assoc("SELECT `cat_id`, `name`FROM `category` WHERE `by_id` = 0 ORDER BY `name` ASC") as $key => $value) {
      $cat .= "\n".'<option value="' . $value['cat_id'] . '">' . $value['name'] . '</option>';
    }
    $cat .= '</select>';
    echo json_encode(array(
      'success' => true,
      'type' => 'success',
      'msg' => 'Tạo Chuyên Mục "'.$name.'" Thành Công',
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
