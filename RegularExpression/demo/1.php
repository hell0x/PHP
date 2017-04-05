<?php
$regex = '/^http:\/\/([\w.]+)\/([\w]+)\/([\w]+)\.html$/i';
// $regex = '#^http://([\w.]+)/([\w]+)/([\w]+)\.html$#';
$str = 'http://www.youku.com/show_page/id_ABCDEFG.html';
$matches = array();
if(preg_match($regex, $str, $matches)){
	echo "<pre>";
	print_r($matches);
	echo "</pre>";
}
?>