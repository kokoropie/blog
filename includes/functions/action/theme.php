<?php
/*************************
	*Author: Kaga Akatsuki
	*Date: 17/04/2019
*************************/

include_once DIR . '/functions/config.php';

if (!empty($_POST['theme'])) {
  $theme = $_POST['theme'];

  if (array_key_exists($theme, $cms['themes'])) {
    if ($db->num_rows("SELECT * FROM `theme` WHERE `ip` = '{$cms['ip']}' ") > 0) {
      print_r($db->query("UPDATE `theme` SET `theme` = '{$theme}' WHERE `ip` = '{$cms['ip']}' "));
    } else {
      print_r($db->query("INSERT INTO `theme` (`theme`,`ip`) VALUES ('{$theme}', '{$cms['ip']}') "));
    }
    if (!empty($ss->get('logined'))) print_r($db->query("UPDATE `cms` SET `content` = '{$theme}' WHERE `name` = 'theme' "));
  }
}
