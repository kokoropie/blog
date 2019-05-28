<?php
/*************************
	*Author: Kaga Akatsuki
	*Date: 17/04/2019
*************************/

include_once 'config.php';
include_once DIR . '/classes/DB.php';
include_once DIR . '/classes/Session.php';
include_once DIR . '/classes/Count.php';
include_once DIR . '/smarty/libs/Smarty.class.php';

$db = new DB(HOST,USER,PASS,NAME);
$db->connect();
$db->set_charset(CHARSET);

$ss = new Session();
$ss->start();

$count = new Count(DIR_ROOT . 'data/');

$smarty = new Smarty();

include_once DIR . '/functions.php';

$setting = $db->fetch_assoc("SELECT * FROM `cms` ");
$cms = array();
foreach ($setting as $key => $value) {
	$cms[$value['name']] = $value['content'];
}

$cms['list_timezone'] = timezone_identifiers_list();

date_default_timezone_set($cms['timezone']);
