<?php
/*************************
	*Author: Kaga Akatsuki
	*Date: 17/04/2019
*************************/

// Don't Change

require_once 'core/init.php';

$index = "Kaga";

include_once DIR . '/config.php';

file_put_contents("backup_database.sql", $db->backup());

$smarty->assign('ss', $_SESSION);
$smarty->assign('show', $show);
$smarty->display($display);
