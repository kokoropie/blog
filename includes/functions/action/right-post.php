<?php
/*************************
	*Author: Kaga Akatsuki
	*Date: 17/04/2019
*************************/

include_once DIR . '/functions/config.php';

$cat_id = $_POST['cat_id'];

$where = NULL;
if ($cat_id > 0) {
  $where = "`cat_id` = {$cat_id} AND";
}
if (empty($ss->get("logined"))) {
  $where .= " `status` = 'public' AND";
}

$data['view'] = $db->fetch_assoc("SELECT * FROM `post` WHERE {$where} `view` > 0 ORDER BY `view` DESC LIMIT 10");
$data['sticky'] = $db->fetch_assoc("SELECT * FROM `post` WHERE {$where} `sticky` = 1 ORDER BY `time` DESC LIMIT 10");
$data['like'] = $data['comment'] = array();

$where = NULL;
if ($cat_id > 0) {
  $where = "WHERE `cat_id` = {$cat_id} ";
  if (empty($ss->get("logined"))) {
    $where .= "AND `status` = 'public'";
  }
} else {
  if (empty($ss->get("logined"))) {
    $where = "WHERE `status` = 'public'";
  }
}

$tmp = $db->fetch_assoc("SELECT * FROM `post` {$where} ");

$tmp_like = $tmp_comment = array();

foreach ($tmp as $key => $value) {
  $like = $db->num_rows("SELECT * FROM `like` WHERE `post_id` = {$value['post_id']}");
  $comment = $db->num_rows("SELECT * FROM `comment` WHERE `post_id` = {$value['post_id']} AND `accept` = TRUE ");
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

$return = [
  'view' => '',
  'like' => '',
  'comment' => '',
  'sticky' => ''
];

foreach ($data as $key => $val) {
  if (count($data[$key]) > 0) {
    foreach ($val as $value) {
    $return[$key] .= '<div class="media">
      <div class="media-left">
        <a href="/post/' . $value['url'] . '.html">
          <img class="media-object" src="' . $value['thumbnail'] . '" width="64" height="64">
        </a>
      </div>
      <div class="media-body">
        <h4 class="media-heading"><a href="/post/' . $value['url'] . '.html" class="col-' . $theme . '">' . $value['name'] . '</a></h4>
        ' . $value['description'] . '
      </div>
    </div>';
    }
  } else {
  $return[$key] = '<div class="media">
    <div class="media-left">
      <a href="#404">
        <img class="media-object" src="/public/images/404.jpg" width="64" height="64">
      </a>
    </div>
    <div class="media-body">
      <h4 class="media-heading">Không Có Dữ Liệu</h4>
    </div>
  </div>';
  }
}

echo json_encode($return);
