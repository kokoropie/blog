<?php
/*************************
	*Author: Kaga Akatsuki
	*Date: 17/04/2019
*************************/

include_once DIR . '/functions/config.php';

$contact = array ();

foreach ($cms["contact"] as $key => $value) {
  $contact[$key] = array (
    'class' => $key,
    'link' => $value
  );
}
die(json_encode($contact));
