<?php
/*************************
	*Author: Kaga Akatsuki
	*Date: 17/04/2019
*************************/

function url($url) {
  header("location: " . $url);
  die();
}

function debug ($debug) {
  echo '<pre>';
  var_dump($debug);
  echo '</pre>';
  die();
}

function extension($name){
  if (isset($name)) {
    $ex = explode(".", $name);
    if (count($ex) > 0) {
      return '.' . $ex[count($ex) - 1];
    }
  }
}

function dir_file($dir, $file) {
  $date = [date('Y'), date('m'), date('d')];
  foreach ($date as $key => $value) {
    $dir .= '/' . $value;
    if (!is_dir($dir)) {
      mkdir($dir);
      chmod($dir, 0711);
    }
  }
  $ext = extension($file);
  $name = str_replace($ext, NULL, $file);
  $i = 1;
  while (file_exists($dir . '/' . $file)) {
    $file = $name . ' ('.$i.')' . $ext;
    $i++;
  }
  $dir .= '/' . $file;
  return $dir;
}

function format_number($numb = 0) {
  if (strlen($numb) == 1) {
    return "0" . $numb;
  } else {
    return $numb;
  }
}

function format_date($time, $now = 0) {
  if (empty($now)) $now = time();
  if ($now < $time) return "Lỗi";
  $m = $now - $time;
  if ($m < 10) {
    return "Vừa Xong";
  } elseif ($m < 86400 * 5) {
    $t = array(86400 => 'Ngày', 3600 => 'Giờ', 60 => 'Phút', 1 => 'Giây');
    foreach($t as $u => $s) {
      if ($u <= $m) {
        $v = floor($m / $u);
        return $v . ' ' . $s . ' Trước';
      }
    }
  } else {
    return date('Y-m-d H:i:s', $time);
  }
}

function _curl($url = NULL, $param = array(), $cookie = true) {
	if (!empty($url)) {
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6');
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		if ($cookie) curl_setopt($ch, CURLOPT_COOKIEFILE, dirname(__FILE__).'/'.$url.'.txt');
		if (count($param) > 0) {
			curl_setopt($ch, CURLOPT_POST, count($param));
			curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
		}
		if (curl_errno($ch)) {
			$res = "Lỗi: " . curl_error($ch);
		} else {
			$res = curl_exec($ch);
		}
		curl_close($ch);
		return $res;
	}
}

function ip () {
	if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
        $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    else if(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}

function title ($title, $t = NULL, $g = '|') {
	if (!empty($t)) {
		$title = $t . ' ' . trim($g) . ' ' . $title;
	}
	return $title;
}

function keywords ($keywords, $k = NULL) {
	if (!empty($k)) {
		$keywords .= $k;
	}

	return $keywords . ',';
}

function description ($description, $d = NULL) {
	if (!empty($d)) {
		if (mb_strlen($d, "UTF-8") > 30) {
			$d = substr($d, 0, 30) . '...';
		}
		$description = $d;
	}
	return $description;
}

function param_get_to_array () {
	if (!empty($_SERVER['REQUEST_URI'])) {
		$_SERVER['REQUEST_URI'] = str_replace($_SERVER['REDIRECT_URL'], NULL, $_SERVER['REQUEST_URI']);
		$_SERVER['REQUEST_URI'] = str_replace("?", NULL, $_SERVER['REQUEST_URI']);
		if (strlen($_SERVER['REQUEST_URI']) > 0) {
			$get = explode("&", $_SERVER['REQUEST_URI']);
			foreach ($get as $key => $value) {
				$tmp = explode("=", $value);
				$_REQUEST[$tmp[0]] = $tmp[1];
				$_GET[$tmp[0]] = $tmp[1];
			}
		}
	}
}
