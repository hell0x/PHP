<?php
$regex = '/^(Weixing)[\w\s!]+\1$/';
// $regex = '/^(Chuanshanjia)[\w\s!]+\1$/'; 
// $str = 'wei xing fighting';
$str = 'Weixing code Weixing';
$matches = array();
if(preg_match($regex, $str, $matches)){
	echo "<pre>";
	print_r($matches);
	echo "</pre>";
}
?>