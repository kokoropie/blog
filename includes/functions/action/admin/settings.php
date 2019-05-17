<?php
/*************************
	*Author: Kaga Akatsuki
	*Date: 17/04/2019
*************************/

include_once DIR . '/functions/config.php';

if (isset($_POST['submit'])) {
  $thumbnail = false;
  if (isset($_FILES['file_thumbnail'])) {
    $thumbnail = true;
  }

  $favicon = false;
  if (isset($_FILES['file_favicon'])) {
    $favicon = true;
  }

  $title = addslashes(htmlspecialchars($_POST['title']));
  $title_now = addslashes(htmlspecialchars($_POST['title_now']));
  $keywords = addslashes(htmlspecialchars($_POST['keywords']));
  $description = addslashes(htmlspecialchars($_POST['description']));
  $title_now = str_replace($cms['title'], NULL, $title_now);

  if ($thumbnail) {
    $name = $_FILES['file_thumbnail']['name'];
    $tmp = $_FILES['file_thumbnail']['tmp_name'];
    $type = explode('/', $_FILES['file_thumbnail']['type'])[0];
    if ($type == "image") {
      $file_thumbnail = dir_file(DIR_ROOT . 'upload', $name);
      move_uploaded_file($tmp, $file_thumbnail);
      $file_thumbnail = str_replace(DIR_ROOT, '/', $file_thumbnail);
      //$db->query("UPDATE `cms` SET `content` = '{$file_thumbnail}' WHERE `name` = 'thumbnail' ");
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

  if ($favicon) {
    $name = $_FILES['file_favicon']['name'];
    $tmp = $_FILES['file_favicon']['tmp_name'];
    $type = explode('/', $_FILES['file_favicon']['type'])[0];
    if ($type == "image") {
      $file_favicon = dir_file(DIR_ROOT . 'upload', $name);
      move_uploaded_file($tmp, $file_favicon);
      $file_favicon = str_replace(DIR_ROOT, '/', $file_favicon);
      //$db->query("UPDATE `cms` SET `content` = '{$file_favicon}' WHERE `name` = 'favicon' ");
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

  $db->query("UPDATE `cms` SET `content` = '{$title}' WHERE `name` = 'title' ");
  $db->query("UPDATE `cms` SET `content` = '{$keywords}' WHERE `name` = 'keywords' ");
  $db->query("UPDATE `cms` SET `content` = '{$description}' WHERE `name` = 'description' ");

  $return = [
    'title' => $title_now . $title,
    'success' => 'true',
    'msg' => 'Cập nhật thành công',
    'type' => 'success'
  ];
  if ($thumbnail) {
    $return['src']['thumbnail'] = $file_thumbnail;
  }
  if ($favicon) {
    $return['src']['favicon'] = $file_favicon;
  }

  echo json_encode($return);
}
