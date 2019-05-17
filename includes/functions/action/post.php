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

if (!empty($_GET['act'])) {
  $_GET['act'] = explode("-", $_GET['act']);
  $id = $_GET['act'][count($_GET['act']) - 1];
  if ($db->num_rows("SELECT * FROM `post` WHERE `post_id` = {$id}") > 0) {
    $post = $db->fetch_assoc("SELECT * FROM `post` WHERE `post_id` = {$id}", false);
    $url = $cms['url_home'] . '/post/' . rewrite_url($post['name'] . '-' . $post['post_id']) . '.html';
    if ($url != $cms['url']) {
      $display = '404.tpl';
    } else {
      if ($post['status'] == 'public' || ($post['status'] != 'public' && !empty($ss->get("logined")))) {
        $cat['sub'] = $db->fetch_assoc("SELECT `cat_id`, `by_id`, `name` FROM `category` WHERE `cat_id` = '{$post['cat_id']}' ", false);
        $cat['main'] = $db->fetch_assoc("SELECT `cat_id`, `by_id`, `name` FROM `category` WHERE `cat_id` = '{$cat['sub']['by_id']}' ", false);

        $where['main'] = $cat['main']['cat_id'];
        $where['sub'] = $cat['sub']['cat_id'];

        $breadcrumb[] = array(
          'url' => '/category/' . rewrite_url($cat['main']['name'] . '-' . $cat['main']['cat_id']) . '.html',
          'title' => $cat['main']['name']
        );
        $breadcrumb[] = array(
          'url' => '/category/' . rewrite_url($cat['sub']['name'] . '-' . $cat['sub']['cat_id']) . '.html',
          'title' => $cat['sub']['name']
        );
        $breadcrumb[] = array(
          'url' => '/post/' . rewrite_url($post['name'] . '-' . $post['cat_id']) . '.html',
          'title' => $post['name']
        );

        if ($post['description'] == NULL) {
          $post['description'] = mb_strlen(strip_tags($post['content'], 'img'), 'UTF-8') > 30 ? substr(strip_tags($post['content'], 'img'), 0, 30) . '...' : strip_tags($post['content'], 'img');
        }
        if ($post['thumbnail'] == NULL) {
          $post['thumbnail'] = '/public/images/user-img-background.jpg';
        }

        $title = $post['name'];
        $keywords = $post['keywords'];
        $description = $post['description'];
        $post['time'] = format_date($post['time']);
        $post['view']++;
        $db->query("UPDATE `post` SET `view` = {$post['view']} WHERE `post_id` = {$post['post_id']} ");
        $cms['thumbnail'] = $cms['url_home'] . $post['thumbnail'];

        $tmp = array();
        $p = $db->fetch_assoc("SELECT `post_id`,`name` FROM `post` WHERE `cat_id` = {$post['cat_id']} AND `status` = 'public' ORDER BY `time` DESC ");
        foreach ($p as $key => $value) {
          $tmp[$key] = $value['post_id'];
        }

        $current = array_search($post['post_id'], $tmp);

        if (isset($p[$current + 1])) {
          $post['prev'] = $p[$current + 1];
          $post['prev']['url'] = rewrite_url($post['prev']['name'] . '-' . $post['prev']['post_id']);
        } else {
          $post['prev'] = null;
        }
        if (isset($p[$current - 1])) {
          $post['next'] = $p[$current - 1];
          $post['next']['url'] = rewrite_url($post['next']['name'] . '-' . $post['next']['post_id']);
        } else {
          $post['next'] = null;
        }

        $post['like'] = $db->num_rows("SELECT * FROM `like` WHERE `post_id` = {$post['post_id']} ");
        $post['has_like'] = false;
        if ($db->num_rows("SELECT * FROM `like` WHERE `ip` = '".ip()."' AND `post_id` = {$post['post_id']} ")) {
          $post['has_like'] = true;
        }

        $post['data'] = $db->fetch_assoc("SELECT `post_id`, `name`, `thumbnail`, `description`, `content` FROM `post` WHERE `cat_id` = {$post['cat_id']} AND `post_id` != {$post['post_id']} ORDER BY RAND() LIMIT 10");

        foreach ($post['data'] as $key => $value) {
          if ($value['thumbnail'] == NULL) {
            $post['data'][$key]['thumbnail'] = '/public/images/user-img-background.jpg';
          }
          if ($value['description'] == NULL) {
            $post['data'][$key]['description'] = mb_strlen(strip_tags($value['content'], 'img'), 'UTF-8') > 10 ? substr(strip_tags($value['content'], 'img'), 0, 10) . '...' : strip_tags($value['content'], 'img');
          }
          $post['data'][$key]['url'] = rewrite_url($value['name'] . '-' . $value['post_id']);
        }

        $post['comment'] = $db->fetch_assoc("SELECT * FROM `comment` WHERE `post_id` = {$post['post_id']} ORDER BY `time` DESC");

        foreach ($post['comment'] as $key => $value) {
          $value['from'] = json_decode($value['from'], true);
          $post['comment'][$key]['from'] = $value['from']['name'] . (empty($value['from']['email']) ? NULL : ' - ' . $value['from']['email']);
          $post['comment'][$key]['time'] = format_date($value['time']);
        }

        $post['info']['name'] = $post['info']['email'] = NULL;

        if ($db->num_rows("SELECT * FROM `comment` WHERE `ip` = '".ip()."'") > 0) {
          $tmp = $db->fetch_assoc("SELECT `from` FROM `comment` WHERE `ip` = '".ip()."' ORDER BY `time` DESC", false);
          $post['info'] = json_decode($tmp['from'], true);
        }

        $script[] = '/public/js/comment.js';

        $show = array (
          'header.tpl',
          'post.tpl',
          'footer.tpl'
        );

        $smarty->assign("post", $post);
      } else {
        $display = '404.tpl';
      }
    }
  } else {
    $display = '404.tpl';
  }
} else {
  url("/");
}
