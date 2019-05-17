<?php
/*************************
	*Author: Kaga Akatsuki
	*Date: 17/04/2019
*************************/

$smarty->debugging = SMARTY_DEBUGGING;
$smarty->caching = SMARTY_CACHING;
$smarty->cache_lifetime = SMARTY_CACHE_LIFETIME;

$smarty->setCompileDir(DIR . '/smarty/templates_c/');
$smarty->setConfigDir(DIR . '/smarty/configs/');
$smarty->setCacheDir(DIR . '/smarty/cache/');
$smarty->setTemplateDir(DIR . '/smarty/templates/');

require_once DIR . '/functions/index.php';
