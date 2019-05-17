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

$breadcrumb[] = array(
  'url' => '/category',
  'title' => 'Chuyên Mục'
);

if (!empty($_GET['act'])) {
  $_GET['act'] = explode("-", $_GET['act']);
  $id = $_GET['act'][count($_GET['act']) - 1];
  if ($db->num_rows("SELECT * FROM `category` WHERE `cat_id` = {$id}") > 0) {
    $cat = $db->fetch_assoc("SELECT * FROM `category` WHERE `cat_id` = {$id}", false);
    $url = $cms['url_home'] . '/category/' . rewrite_url($cat['name'] . '-' . $cat['cat_id']) . '.html';
    if ($url != $cms['url']) {
      $display = '404.tpl';
    } else {
      if ($cat['by_id'] == 0) {
        $where['main'] = $cat['cat_id'];
        $title = $cat['name'];
        $cat['data'] = $db->fetch_assoc("SELECT *,
          (SELECT COUNT(`post_id`) FROM `post`
          WHERE `post`.`cat_id` = `category`.`cat_id` " . (empty($ss->get("logined")) ? "AND `post`.`status` = 'public'" : NULL) . ") as 'numb'
          FROM `category` WHERE `by_id` = {$id}
          ORDER BY `name` ASC");

        $breadcrumb[] = array(
          'url' => '/category/' . rewrite_url($cat['name'] . '-' . $cat['cat_id']) . '.html',
          'title' => $cat['name']
        );

        foreach ($cat['data'] as $key => $value) {
          $cat['data'][$key]['url'] = rewrite_url($value['name'] . '-' . $value['cat_id']);
        }

        $show = array(
          'header.tpl',
          'category/main.tpl',
          'footer.tpl'
        );

        $smarty->assign("cat", $cat);
      } else {
        $cate = $db->fetch_assoc("SELECT * FROM `category` WHERE `cat_id` = {$cat['by_id']}", false);
        $where['main'] = $cate['cat_id'];
        $where['sub'] = $cat['cat_id'];

        $title = $cat['name'] . ' | ' . $cate['name'];

        $cate['url'] = rewrite_url($cate['name'] . '-' . $cate['cat_id']);
        $cat['url'] = rewrite_url($cat['name'] . '-' . $cat['cat_id']);
        $breadcrumb[] = array(
          'url' => '/category/' . $cate['url'] . '.html',
          'title' => $cate['name']
        );
        $breadcrumb[] = array(
          'url' => '/category/' . $cat['url'] . '.html',
          'title' => $cat['name']
        );

        $cat['data'] = $db->fetch_assoc("SELECT * FROM `post` WHERE `cat_id` = '{$cat['cat_id']}' " . (empty($ss->get("logined")) ? "AND `status` = 'public'" : NULL) . " ORDER BY `time` DESC");

        foreach ($cat['data'] as $key => $value) {
          if ($value['thumbnail'] == NULL) {
            $cat['data'][$key]['thumbnail'] = '/public/images/user-img-background.jpg';
          }
          if ($value['description'] == NULL) {
            $cat['data'][$key]['description'] = mb_strlen(strip_tags($value['content'], 'img'), 'UTF-8') > 30 ? substr(strip_tags($value['content'], 'img'), 0, 30) . '...' : strip_tags($value['content'], 'img');
          }
          $cat['data'][$key]['time'] = format_date($value['time']);
          $cat['data'][$key]['url'] = rewrite_url($value['name'] . '-' . $value['post_id']);
          $cat['data'][$key]['like'] = $db->num_rows("SELECT * FROM `like` WHERE `post_id` = {$value['post_id']}");
          $cat['data'][$key]['comment'] = $db->num_rows("SELECT * FROM `comment` WHERE `post_id` = {$value['post_id']}");
          $cat['data'][$key]['has_like'] = false;
          if ($db->num_rows("SELECT * FROM `like` WHERE `post_id` = {$value['post_id']} AND `ip` = '".ip()."' ") > 0) {
            $cat['data'][$key]['has_like'] = true;
          }
        }

        $data['view'] = $db->fetch_assoc("SELECT * FROM `post` WHERE `cat_id` = '{$cat['cat_id']}' " . (empty($ss->get("logined")) ? "AND `status` = 'public'" : NULL) . " AND `view` > 0 ORDER BY `view` DESC LIMIT 10");
        $data['sticky'] = $db->fetch_assoc("SELECT * FROM `post` WHERE `cat_id` = '{$cat['cat_id']}' " . (empty($ss->get("logined")) ? "AND `status` = 'public'" : NULL) . " AND `sticky` = '1' ORDER BY `time` DESC LIMIT 10");
        $data['like'] = $data['comment'] = array();

        $tmp = $db->fetch_assoc("SELECT * FROM `post` WHERE `cat_id` = '{$cat['cat_id']}' " . (empty($ss->get("logined")) ? "AND `status` = 'public'" : NULL) . " ");

        $tmp_like = $tmp_comment = array();

        foreach ($tmp as $key => $value) {
          $like = $db->num_rows("SELECT * FROM `like` WHERE `post_id` = {$value['post_id']}");
          $comment = $db->num_rows("SELECT * FROM `comment` WHERE `post_id` = {$value['post_id']}");
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

        $show = array (
          'header.tpl',
          'category/sub.tpl',
          'footer.tpl'
        );

        $smarty->assign("cat", $cat);
        $smarty->assign("data", $data);
      }
    }
  } else {
    $display = '404.tpl';
  }
} else {
  $title = "Chuyên Mục";
  $keywords = "chuyên mục, chuyên, mục, chuyen muc, chuyen, muc";
  $description = "Chuyên mục";

  $where['main'] = 'category';

  $show = array(
    'header.tpl',
    'category/index.tpl',
    'footer.tpl'
  );
}
