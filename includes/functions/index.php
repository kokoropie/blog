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

include_once 'config.php';
include_once 'functions.php';

$keywords = NULL;
$description = NULL;
$title = "Trang Chủ";

$display = "index.tpl";

$script = array();
$script_array = array();
$script_text = NULL;

$show = array(
  'header.tpl',
  'footer.tpl'
);

if (isset($_GET['file'])) {
	switch ($_GET['file']) {
		case 'category':
      include 'index/category.php';
			break;

  	case 'post':
      include 'index/post.php';
  		break;

  	case 'admin':
      include 'index/admin.php';
  		break;

  	case 'search':
      include 'index/search.php';
  		break;

		default:
      $title = "Không Tìm Thấy Trang - 404";
			$display = "404.tpl";
			break;
	}
} else {
  $post = $db->fetch_assoc("SELECT * FROM `post` " . (empty($ss->get("logined")) ? "WHERE `status` = 'public'" : NULL) . " ORDER BY `time` DESC");

  foreach ($post as $key => $value) {
    if ($value['thumbnail'] == NULL) {
      $post[$key]['thumbnail'] = '/public/images/user-img-background.jpg';
    }
    if ($value['description'] == NULL) {
      $post[$key]['description'] = mb_strlen(strip_tags($value['content'], 'img'), 'UTF-8') > 30 ? substr(strip_tags($value['content'], 'img'), 0, 30) . '...' : strip_tags($value['content'], 'img');
    }
    $post[$key]['time'] = format_date($value['time']);
    $post[$key]['url'] = rewrite_url($value['name'] . '-' . $value['post_id']);
    $post[$key]['like'] = $db->num_rows("SELECT * FROM `like` WHERE `post_id` = {$value['post_id']}");
    $post[$key]['comment'] = $db->num_rows("SELECT * FROM `comment` WHERE `post_id` = {$value['post_id']}");
    $post[$key]['has_like'] = false;
    if ($db->num_rows("SELECT * FROM `like` WHERE `post_id` = {$value['post_id']} AND `ip` = '".ip()."' ") > 0) {
      $post[$key]['has_like'] = true;
    }
  }

  $data['view'] = $db->fetch_assoc("SELECT * FROM `post` WHERE " . (empty($ss->get("logined")) ? "`status` = 'public' AND" : NULL) . " `view` > 0 ORDER BY `view` DESC LIMIT 10");
  $data['sticky'] = $db->fetch_assoc("SELECT * FROM `post` WHERE " . (empty($ss->get("logined")) ? "`status` = 'public' AND" : NULL) . " `sticky` = '1' ORDER BY `time` DESC LIMIT 10");
  $data['like'] = $data['comment'] = array();

  $tmp = $db->fetch_assoc("SELECT * FROM `post` " . (empty($ss->get("logined")) ? "WHERE `status` = 'public'" : NULL) . " ");

  $tmp_like = $tmp_comment = array();

  foreach ($tmp as $key => $value) {
    $like = $db->num_rows("SELECT * FROM `like` WHERE `post_id` = {$value['post_id']}");
    $comment = $db->num_rows("SELECT * FROM `comment` WHERE `accept` = TRUE AND `post_id` = {$value['post_id']}");
    $tmp_like[$key] = $like;
    $tmp_comment[$key] = $comment;
  }

  arsort($tmp_like);
  arsort($tmp_comment);

  $i = 1;

  foreach ($tmp_like as $key => $value) {
    if ($value == 0) continue;
    $data['like'][] = $tmp[$key];
    $i++;
    if ($i > 10) break;
  }

  $i = 1;

  foreach ($tmp_comment as $key => $value) {
    if ($value == 0) continue;
    $data['comment'][] = $tmp[$key];
    $i++;
    if ($i > 10) break;
  }

  foreach ($data as $k => $val) {
    foreach ($val as $key => $value) {
      if ($value['thumbnail'] == NULL) {
        $data[$k][$key]['thumbnail'] = '/public/images/user-img-background.jpg';
      }
      if ($value['description'] == NULL) {
        $data[$k][$key]['description'] = mb_strlen(strip_tags($value['content'], 'img'), 'UTF-8') > 10 ? substr(strip_tags($value['content'], 'img'), 0, 10) . '...' : strip_tags($value['content'], 'img');
      }
      $data[$k][$key]['url'] = rewrite_url($value['name'] . '-' . $value['post_id']);
    }
  }

  $db->query("CREATE VIEW `list_comment` AS
    SELECT `comment`.*, `post`.`status` FROM `comment` INNER JOIN `post` ON `post`.`post_id` = `comment`.`post_id` WHERE `comment`.`accept` = TRUE ORDER BY `comment`.`time` DESC LIMIT 5");
  $comment = $db->fetch_assoc("SELECT * FROM `list_comment` ".(empty($ss->get("logined")) ? "WHERE `status` = 'public' " : NULL)." ");
  $db->query("DROP VIEW `list_comment`");
  foreach ($comment as $key => $value) {
    $value['from'] = json_decode($value['from'], true);
    $comment[$key]['from'] = $value['from']['name'] . (empty($value['from']['email']) ? NULL : ' - ' . $value['from']['email']);

    $tmp = $db->fetch_assoc("SELECT `name`, `post_id` FROM `post` WHERE `post_id` = {$value['post_id']} ", false);
    $comment[$key]['url'] = rewrite_url($tmp['name'] . '-' . $tmp['post_id']);

    $comment[$key]['time'] = format_date($value['time']);
  }

  $show = array (
    'header.tpl',
    'home.tpl',
    'footer.tpl'
  );

  $smarty->assign("post", $post);
  $smarty->assign("data", $data);
  $smarty->assign("comment", $comment);
}

if ((empty($_GET['file']) || $_GET['file'] != 'admin') && $index == "Kaga") {
  $cms['count'] = $count->get_count();
} else {
  $cms['count'] = $count->get_count(false);
}
$cms['count']['comment'] = $db->num_rows("SELECT * FROM `comment` ");
$cms['count']['comment_wait'] = $db->num_rows("SELECT * FROM `comment` WHERE `accept` = FALSE");

if ($display == "404.tpl") {
  $title = "Không Tìm Thấy Trang - 404";
}

$smarty->assign('cms', $cms);
$smarty->assign('keywords', keywords($cms['keywords'], $keywords));
$smarty->assign('description', description($cms['description'], $description));
$smarty->assign('title', title($cms['title'], $title));

$smarty->assign('script', $script);
$smarty->assign('script_array', $script_array);
$smarty->assign('script_text', $script_text);

$smarty->assign('theme', $theme);
$smarty->assign('breadcrumb', $breadcrumb);
$smarty->assign('where', $where);
$smarty->assign('categories', $categories);
