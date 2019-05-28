<?php
/*************************
	*Author: Kaga Akatsuki
	*Date: 17/04/2019
*************************/

function title_to_keywords($title) {
  $keywords = str_replace(" ", ",", $title);
  $title = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ|À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'a', $title);
  $title = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ|È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'e', $title);
  $title = preg_replace("/(ì|í|ị|ỉ|ĩ|Ì|Í|Ị|Ỉ|Ĩ)/", 'i', $title);
  $title = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ|Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'o', $title);
  $title = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ|Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'u', $title);
  $title = preg_replace("/(đ|Đ)/", 'd', $title);
  $title = strtolower($title);
  $keywords .= "," . str_replace(" ", ",", $title);
  return $keywords;
}

function rewrite_url($text) {
  $text = html_entity_decode(trim($text), ENT_QUOTES, 'UTF-8');
  $text = str_replace(" ", "-", $text);
  $text = str_replace("--", "-", $text);
  $text = str_replace("@", "-", $text);
  $text = str_replace("/", "-", $text);
  $text = str_replace("\"", "", $text);
  $text = str_replace("'", "", $text);
  $text = str_replace("_", "", $text);
  $text = str_replace("<", "", $text);
  $text = str_replace(">", "", $text);
  $text = str_replace(", ", "", $text);
  $text = str_replace("?", "", $text);
  $text = str_replace(";", "", $text);
  $text = str_replace(".", "", $text);
  $text = str_replace("[", "", $text);
  $text = str_replace("]", "", $text);
  $text = str_replace("(", "", $text);
  $text = str_replace(")", "", $text);
  $text = str_replace("́", "", $text);
  $text = str_replace("̀", "", $text);
  $text = str_replace("̃", "", $text);
  $text = str_replace("̣", "", $text);
  $text = str_replace("̉", "", $text);
  $text = str_replace("*", "", $text);
  $text = str_replace("!", "", $text);
  $text = str_replace("$", "-", $text);
  $text = str_replace("&", "-and-", $text);
  $text = str_replace("%", "", $text);
  $text = str_replace("#", "", $text);
  $text = str_replace("^", "", $text);
  $text = str_replace("=", "", $text);
  $text = str_replace("+", "", $text);
  $text = str_replace("~", "", $text);
  $text = str_replace("`", "", $text);
  $text = str_replace("--", "-", $text);
  $text = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ|À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'a', $text);
  $text = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ|È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'e', $text);
  $text = preg_replace("/(ì|í|ị|ỉ|ĩ|Ì|Í|Ị|Ỉ|Ĩ)/", 'i', $text);
  $text = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ|Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'o', $text);
  $text = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ|Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'u', $text);
  $text = preg_replace("/(đ|Đ)/", 'd', $text);
  $text = strtolower($text);
  return $text;
}
