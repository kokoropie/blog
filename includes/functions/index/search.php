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

$titleWeb = "Tìm Kiếm";
$title = NULL;

$breadcrumb[] = array(
  'url' => '/search',
  'title' => $titleWeb
);

param_get_to_array();

$q = empty($_GET['q']) ? NULL : addslashes(htmlspecialchars(trim($_GET['q'])));
$q = trim($q, "+");
$q = urldecode($q);

if (empty($q)) {
  url("/");
}

$title = $q;

$breadcrumb[] = array(
  'url' => 'search?q=' . $q,
  'title' => $title
);

$query = NULL;
foreach (explode(' ', $q) as $value) {
  $query .= " `name` LIKE '%".$value."%' OR `description` LIKE '%".$value."%' OR `content` LIKE '%".$value."%' OR `keywords` LIKE '%".$value."%' OR";
}
$query = substr($query, 0, -2);

$result = $db->fetch_assoc("SELECT * FROM `post` WHERE ".(empty($ss->get("logined")) ? "`status` = 'public' AND " : NULL)." ({$query}) ORDER BY `view` DESC");

foreach ($result as $key => $value) {
  if ($value['description'] == NULL) {
    $result[$key]['description'] = mb_strlen(strip_tags($value['content'], 'img'), 'UTF-8') > 30 ? substr(strip_tags($value['content'], 'img'), 0, 30) . '...' : strip_tags($value['content'], 'img');
  }
  if ($value['thumbnail'] == NULL) {
    $result[$key]['thumbnail'] = '/public/images/user-img-background.jpg';
  }
  foreach (explode(' ', $q) as $v) {
    $result[$key]['name'] = str_replace($v, "<u>".$v."</u>", $result[$key]['name']);
    $result[$key]['keywords'] = str_replace($v, "<u>".$v."</u>", $result[$key]['keywords']);
    $result[$key]['description'] = str_replace($v, "<u>".$v."</u>", $result[$key]['description']);
    $result[$key]['content'] = str_replace($v, "<u>".$v."</u>", $result[$key]['content']);
  }
  $result[$key]['comment'] = $db->num_rows("SELECT * FROM `comment` WHERE `post_id` = {$value['post_id']} ");
  $result[$key]['like'] = $db->num_rows("SELECT * FROM `like` WHERE `post_id` = {$value['post_id']} ");
  $result[$key]['has_like'] = false;
  if ($db->num_rows("SELECT * FROM `like` WHERE `post_id` = {$value['post_id']} AND `ip` = '".ip()."' ") > 0) {
    $result[$key]['has_like'] = true;
  }

  $result[$key]['url'] = rewrite_url($value['name'] . '-' . $value['post_id']);
}

$title = title($titleWeb, $title, "|");
$keywords = 'tìm kiếm, search';
$where['main'] = 'search';

$show = array (
  'header.tpl',
  'search.tpl',
  'footer.tpl'
);

$smarty->assign("result", $result);
