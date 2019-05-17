<?php
/*************************
	*Author: Kaga Akatsuki
	*Date: 17/04/2019
*************************/

/* Don't Change */
define('DIR_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/');

/* Config Folder For Includes File */
define('DIR', DIR_ROOT . 'includes');

/* Config Smarty */
define('SMARTY_DEBUGGING', 0); // Show Debug Smarty
define('SMARTY_CACHING', false); // Active Cache Smarty ()
define('SMARTY_CACHE_LIFETIME', 300); // Time Cache Smarty

/* Config Database */
define('HOST', 'localhost'); // Localhost
define('USER', 'root'); // Username
define('PASS', ''); // Password
define('NAME', 'blog'); // Name Database
define('CHARSET', 'utf8'); // Don't Change
