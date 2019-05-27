<?php
/*************************
	*Author: Kaga Akatsuki
	*Date: 17/04/2019
*************************/

class Count {

  private $dir, $log, $online, $count;

  function __construct($dir) {
		$this->dir = $dir;
    if (!is_dir($this->dir)) {
      mkdir($this->dir);

    }
    $this->log = $dir . "admin.log";
    $this->online = $dir . "online.log";
    $this->count = $dir . "count/";
	}

  public function get_log() {
    $tmp = json_decode(file_get_contents($this->log), true);
    $time = time();
    $logs = array();
    foreach ($tmp as $log => $ip) {
      $logs[] = array (
        'ip' => $ip,
        'time' => format_date($log, $time)
      );
    }

    asort($log);

    return $logs;
  }

  public function set_log($ip = NULL) {
    if (!file_exists($this->log) || !is_array(json_decode(file_get_contents($this->log), true))) {
      file_put_contents($this->log, json_encode(array()));

    }
    if (!empty($ip)) {
      $tmp = json_decode(file_get_contents($this->log), true);
      $tmp[time()] = $ip;
      $return = file_put_contents($this->log, json_encode($tmp));
      return $return;
    } else {
      return true;
    }
  }

  public function get_online($ip) {
    if (!file_exists($this->online) || !is_array(json_decode(file_get_contents($this->online), true))) {
      file_put_contents($this->online, json_encode(array()));

    }

    $online = json_decode(file_get_contents($this->online), true);
    $tmp = array();
    $onl = 0;
    $time = time();
    foreach ($online as $key => $value) {
      if ($key != $ip) {
        if ($time - $value > 300) continue;
        $tmp[$key] = $value;
        $onl++;
      }
    }
    $onl++;
    $tmp[$ip] = $time;

    file_put_contents($this->online, json_encode($tmp));

    return $onl;
  }

  public function get_count($true = true) {
    $today = $this->count . date("Y-m-d") . ".log";
    $yesterday = $this->count . date("Y-m-d", time() - 24 * 60 * 60) . ".log";

    $count = array (
      'today' => 0,
      'yesterday' => 0,
      'total' => 0,
      'date' => 0,
      'avg' => 0,
      'month' => 0,
      'week' => 0,
      'year' => 0
    );

    if (!is_dir($this->count)) {
      mkdir($this->count);

    }

    if (!file_exists($today)) {
      file_put_contents($today, json_encode(array()));

    }

    if (file_exists($yesterday)) {
      $count['yesterday'] = count(json_decode(file_get_contents($yesterday), true));
    }

    $tmp = json_decode(file_get_contents($today), true);
    if ($true) {
      $tmp[] = time();
      file_put_contents($today, json_encode($tmp));
    }
    $count['today'] = count($tmp);

    $tmp = glob($this->count . "*.log");
    $count['date'] = count($tmp);

    foreach ($tmp as $key => $value) {
      $count['total'] += count(json_decode(file_get_contents($value), true));
      foreach (json_decode(file_get_contents($value), true) as $time) {
        if (date("Y-W", $time) == date("Y-W")) {
          $count['week']++;
        }
      }
    }

    $tmp = glob($this->count . date("Y-m") . "-*.log");
    foreach ($tmp as $key => $value) {
      $count['month'] += count(json_decode(file_get_contents($value), true));
    }

    $tmp = glob($this->count . date("Y") . "-*.log");
    foreach ($tmp as $key => $value) {
      $count['year'] += count(json_decode(file_get_contents($value), true));
    }

    $count['avg'] = ceil($count['total'] / $count['date']);

    return $count;
  }

  public function default_count() {
    $today = $this->count . date("Y-m-d") . ".log";

    if (!is_dir($this->count)) {
      mkdir($this->count);

    }

    if (!file_exists($today)) {
      file_put_contents($today, json_encode(array()));

    }
  }
}
