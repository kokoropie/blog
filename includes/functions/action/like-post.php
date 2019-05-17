<?php
/*************************
	*Author: Kaga Akatsuki
	*Date: 17/04/2019
*************************/

include_once DIR . '/functions/config.php';

$post_id = $_POST['post_id'];
$ip = ip();

if ($db->num_rows("SELECT * FROM `like` WHERE `post_id` = {$post_id} AND `ip` = '{$ip}' ") > 0) {
  $db->query("DELETE FROM `like` WHERE `post_id` = {$post_id} AND `ip` = '{$ip}' ");
} else {
  $db->query("INSERT INTO `like` (`post_id`,`ip`,`time`) VALUES ({$post_id}, '{$ip}', '".time()."') ");
}
?><i class="material-icons">thumb_up</i>
<span><?=number_format($db->num_rows("SELECT * FROM `like` WHERE `post_id` = {$post_id} "))?> Thích</span>
