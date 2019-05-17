<?php
/*************************
	*Author: Kaga Akatsuki
	*Date: 17/04/2019
*************************/

include_once 'functions.php';

$cms['url_home'] = (isset($_SERVER["HTTPS"]) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
$cms['admin'] = json_decode($cms['admin'], true);
$cms['contact'] = json_decode($cms['contact'], true);
$theme = $cms['theme'];

if ($db->num_rows("SELECT * FROM `theme` WHERE `ip` = '".ip()."' ") > 0) {
	$tmp = $db->fetch_assoc("SELECT `theme` FROM `theme` WHERE `ip` = '".ip()."'", false);
	$theme = $tmp['theme'];
}

$cms['themes'] = array();

$file_be = DIR_ROOT . '/public/css/themes/theme-';
$file_af = '.css';
$file = glob($file_be . '*' . $file_af);
foreach ($file as $key => $value) {
  $value = str_replace($file_af, NULL, $value);
  $value = str_replace($file_be, NULL, $value);
  $name = strtoupper(str_replace("-", ' ', $value));
  $cms['themes'][$value] = array(
    'name' => $name,
    'color' => $value
  );
}

$cms['ip'] = ip();

$cms['copyright_real'] = $cms['copyright'];
$cms['copyright'] = copyright($cms['copyright']);

$breadcrumb = array(
  array(
    'url' => '/',
    'title' => 'Trang Chủ'
  )
);

$categories['main'] = $db->fetch_assoc("SELECT * FROM `category` WHERE `by_id` = 0 ORDER BY `name` ASC");
$categories['sub'] = array();
foreach ($categories['main'] as $key => $value) {
  $categories['main'][$key]['url'] = rewrite_url($value['name'] . '-' . $value['cat_id']);
  $categories['main'][$key]['numb'] = $db->num_rows("SELECT * FROM `category`
  WHERE `by_id` = {$value['cat_id']}");
  if ($categories['main'][$key]['numb'] > 0) {
    $categories['sub'][$key] = $db->fetch_assoc("SELECT *,
      (SELECT COUNT(`post_id`) FROM `post`
      WHERE `post`.`cat_id` = `category`.`cat_id` AND `post`.`status` = 'public') as 'numb'
      FROM `category` WHERE `by_id` = {$value['cat_id']} ORDER BY `name` ASC");
  } else {
    $categories['sub'][$key] = array();
  }
}

foreach ($categories['sub'] as $key => $value) {
  foreach ($value as $key2 => $value2) {
    $categories['sub'][$key][$key2]['url'] = rewrite_url($value2['name'] . '-' . $value2['cat_id']);
  }
}

$cms['url'] = $cms['url_home'] . $_SERVER['REQUEST_URI'];
$cms['thumbnail'] = $cms['url_home'] . $cms['thumbnail'];

if (!file_exists(DIR_ROOT . 'data/admin.log')) {
  file_put_contents(DIR_ROOT . 'data/admin.log', "{}");
}

if (!is_array(json_decode(file_get_contents(DIR_ROOT . 'data/admin.log'), true))) {
  file_put_contents(DIR_ROOT . 'data/admin.log', "{}");
}

$cms['log'] = $count->get_log();
$cms['online'] = $count->get_online(ip());

$where = array(
  'main' => 'home',
  'sub' => NULL
);
