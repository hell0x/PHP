<?php
$regex = '/(?<=c)d(?=e)/';
$str = 'abcdefg';
$matches = array();
if(preg_match($regex, $str, $matches)){
	echo "<pre>";
	print_r($matches);
	echo "</pre>";
}
?>