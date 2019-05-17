<?php
/*************************
	*Author: Kaga Akatsuki
	*Date: 17/04/2019
*************************/

include_once DIR . '/functions/config.php';

if (empty($_POST['type'])) {
  $count->default_count();

  $hour = $minute = 0;

  $time = array();

  $step = 60;

  while ($hour <= 24) {
    $time[] = ($hour) . ":" . ($minute);
    $minute += $step;
    if ($minute == 60) {
      $hour++;
      $minute = 0;
    }
    if ($hour == 24 && $minute > 0) break;
  }

  $dashboard = array();
  foreach ($time as $key => $value) {
    $dashboard[] = array(
      'time' => $value,
      'view' => 0
    );
  }

  $view = json_decode(file_get_contents(DIR_ROOT . 'data/count/' . date("Y-m-d") . '.log'), true);

  foreach ($view as $value) {
    foreach ($dashboard as $key => $val) {
      $time = explode(":", $val['time']);
      if ((date("H", $value)) == $time[0] && (date("i", $value)) >= $time[1] && (date("i", $value)) < $time[1] + $step) {
        $dashboard[$key]['view']++;
      }
      $dashboard[$key]['time'] = format_number($time[0]) . ":" . format_number($time[1]);
    }
  }

  $today = array(
    'labels' => array(),
    'data' => array()
  );
  foreach ($dashboard as $key => $value) {
    $today['labels'][] = $value['time'];
    $today['data'][] = $value['view'];
  }

  $data['today'] = $today;

  $month = array(
    'labels' => array(),
    'data' => array()
  );
  $m = date("m");
  $y = date("Y");
  if (($m <= 7 && ($m % 2) != 0) || ($m >= 8 && ($m % 2) == 0)) {
    $maxDay = 31;
  } else {
    $maxDay = 30;
  }
  if ($m == 2) {
    if ( $y % 4 == 0) {
      $maxDay = 29;
    } else {
      $maxDay = 28;
    }
  }

  $view = 0;
  for ($i = 1; $i <= $maxDay; $i++) {
    if (file_exists(DIR_ROOT . 'data/count/' . $y . '-' . $m . '-' . format_number($i) .'.log')) {
      $view = count(json_decode(file_get_contents(DIR_ROOT . 'data/count/' . $y . '-' . $m . '-' . format_number($i) .'.log'), true));
    }
    $month['labels'][] = $i;
    $month['data'][] = $view;
    $view = 0;
  }
  $data['month'] = $month;

  echo json_encode($data);
} else {
  $data = $cms['count'] = $count->get_count(false);
  $data['online'] = $count->get_online(ip());
  $data['comment'] = $db->num_rows("SELECT * FROM `comment` ");
  echo json_encode($data);
}
