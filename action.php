<?php
/*************************
	*Author: Kaga Akatsuki
	*Date: 17/04/2019
*************************/

if (!empty($_GET['file'])) {
  include_once 'core/init.php';
  param_get_to_array();
  $file = DIR . '/functions/action';
  if (!empty($_GET['folder'])) {
    $file .= '/' . $_GET['folder'];
  }
  if (is_dir($file)) {
    $file .= '/' . $_GET['file'] . '.php';
    if (file_exists($file)) {
      include_once $file;
    }
  }
}
