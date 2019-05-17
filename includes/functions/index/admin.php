<?php
/*************************
	*Author: Kaga Akatsuki
	*Date: 17/04/2019
*************************/

if (empty($index)) {
  $index = "Noop";
}

if ($index != "Kaga" ) {
  die();
}

$titleWeb = "AdminCP";
$title = NULL;

$breadcrumb[] = array(
  'url' => '/admin',
  'title' => $titleWeb
);

$theme = $cms['theme'];

if (isset($_GET['act'])) {
  $_GET['act'] = explode(".", $_GET['act']);
  $id = empty($_GET['act'][1]) ? NULL : $_GET['act'][1];
  $_GET['act'] = $_GET['act'][0];
  switch ($_GET['act']) {
    case 'login':
      if (empty($ss->get("logined"))) {
        $title = "Đăng Nhập";

        $display = "admin/login.tpl";
      } else {
        url("/admin/dashboard.html");
      }
      break;

    case 'logout':
      $ss->destroy();
      url("/");
      break;

    case 'dashboard':
      if (empty($ss->get('logined'))) {
        url("/admin/login.html");
      }
      $title = 'Thống Kê';

      $script[] = '/public/js/admin/dashboard.js';

      $show = array(
        'header.tpl',
        'admin/dashboard.tpl',
        'footer.tpl'
      );
      break;

    case 'settings':
      if (empty($ss->get('logined'))) {
        url("/admin/login.html");
      }
      $title = 'Cài Đặt Khác';

      $script[] = '/public/js/admin/admin.settings.js';

      $show = array(
        'header.tpl',
        'admin/settings.tpl',
        'footer.tpl'
      );
      break;

    case 'comment':
      if (empty($ss->get('logined'))) {
        url("/admin/login.html");
      }
      $title = 'Bình Luận';

      $comment = $db->fetch_assoc("SELECT * FROM `comment` ORDER BY `time` DESC");

      $script[] = '/public/js/admin/comment.js';

      $show = array(
        'header.tpl',
        'admin/comment.tpl',
        'footer.tpl'
      );

      $smarty->assign("comment", $comment);
      break;

    case 'add-category':
      if (empty($ss->get('logined'))) {
        url("/admin/login.html");
      }
      $title = 'Tạo Chuyên Mục';

      $script[] = '/public/js/admin/add.category.js';

      $show = array(
        'header.tpl',
        'admin/add.category.tpl',
        'footer.tpl'
      );
      break;

    case 'edit-category':
      if (empty($ss->get('logined'))) {
        url("/admin/login.html");
      }

      if (empty($id)) {
        url("/admin");
      }

      $title = 'Sửa Chuyên Mục';

      if ($db->num_rows("SELECT * FROM `category` WHERE `cat_id` = {$id} ") == 0) {
        $display = "404.tpl";
      }

      $cat = $db->fetch_assoc("SELECT * FROM `category` WHERE `cat_id` = {$id} ", false);

      $script[] = '/public/js/admin/edit.category.js';

      $show = array(
        'header.tpl',
        'admin/edit.category.tpl',
        'footer.tpl'
      );

      $smarty->assign("cat", $cat);
      break;

    case 'delete-category':
      if (empty($ss->get('logined'))) {
        url("/admin/login.html");
      }

      if (empty($id)) {
        url("/admin");
      }

      if ($db->num_rows("SELECT * FROM `category` WHERE `cat_id` = {$id} ") == 0) {
        $display = "404.tpl";
      } else {
        $cat = $db->fetch_assoc("SELECT `cat_id`, `by_id` FROM `category` WHERE `cat_id` = {$id} ", false);
        $db->query("DELETE FROM `category` WHERE `cat_id` = {$id} ");
        if ($cat['by_id'] == 0) {
          foreach ($db->fetch_assoc("SELECT `cat_id` FROM `category` WHERE `by_id` = {$id} ") as $value) {
            $db->query("DELETE FROM `category` WHERE `cat_id` = {$value['cat_id']} ");
            foreach ($db->fetch_assoc("SELECT `post_id` FROM `post` WHERE `cat_id` = {$value['cat_id']} ") as $val) {
              $db->query("DELETE FROM `post` WHERE `post_id` = {$val['post_id']} ");
              $db->query("DELETE FROM `like` WHERE `post_id` = {$val['post_id']} ");
              $db->query("DELETE FROM `comment` WHERE `post_id` = {$val['post_id']} ");
            }
          }
        } else {
          foreach ($db->fetch_assoc("SELECT `post_id` FROM `post` WHERE `cat_id` = {$cat['cat_id']} ") as $val) {
            $db->query("DELETE FROM `post` WHERE `post_id` = {$val['post_id']} ");
            $db->query("DELETE FROM `like` WHERE `post_id` = {$val['post_id']} ");
            $db->query("DELETE FROM `comment` WHERE `post_id` = {$val['post_id']} ");
          }
        }
        url("/");
      }
      break;

    case 'add-post':
      if (empty($ss->get('logined'))) {
        url("/admin/login.html");
      }
      $title = 'Tạo Bài Viết Mới';

      $script[] = '/public/js/admin/add.post.js';

      $show = array(
        'header.tpl',
        'admin/add.post.tpl',
        'footer.tpl'
      );
      break;

    case 'edit-post':
      if (empty($ss->get('logined'))) {
        url("/admin/login.html");
      }

      if (empty($id)) {
        url("/admin");
      }

      $title = 'Sửa Bài Viết';

      if ($db->num_rows("SELECT * FROM `post` WHERE `post_id` = {$id} ") == 0) {
        $display = "404.tpl";
      }

      $post = $db->fetch_assoc("SELECT * FROM `post` WHERE `post_id` = {$id} ", false);

      $script[] = '/public/js/admin/edit.post.js';

      $show = array(
        'header.tpl',
        'admin/edit.post.tpl',
        'footer.tpl'
      );

      $smarty->assign("post", $post);
      break;

    case 'delete-post':
      if (empty($ss->get('logined'))) {
        url("/admin/login.html");
      }

      if (empty($id)) {
        url("/admin");
      }

      if ($db->num_rows("SELECT * FROM `post` WHERE `post_id` = {$id} ") == 0) {
        $display = "404.tpl";
      } else {
        $db->query("DELETE FROM `post` WHERE `post_id` = {$id} ");
        $db->query("DELETE FROM `like` WHERE `post_id` = {$id} ");
        $db->query("DELETE FROM `comment` WHERE `post_id` = {$id} ");
        url("/");
      }
      break;

    case 'log':
      if (empty($ss->get('logined'))) {
        url("/admin/login.html");
      }
      $title = 'Lịch Sử Đăng Nhập';

      $show = array(
        'header.tpl',
        'admin/log.tpl',
        'footer.tpl'
      );
      break;

    default:
      $title = "Không Tìm Thấy Trang - 404";
      $display = "404.tpl";
      break;
  }

  $breadcrumb[] = array(
    'url' => '/admin/'.$_GET['act'].'.html',
    'title' => $title
  );

  $where['main'] = $_GET['act'];
} else {
  if (empty($ss->get('logined'))) {
    url("/admin/login.html");
  }
  url("/admin/dashboard.html");
}

$title = title($titleWeb, $title, '-');
