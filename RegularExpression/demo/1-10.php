<?php
//非负整数
$regex = '/^\d+$/';
$str = '23';
$mateches = array();
if(preg_match($regex, $str, $matches)){
	var_dump($matches);
}

//正整数
$regex = '/^[0-9]*[1-9][0-9]*$/';
$str = '12';
$mateches = array();
if(preg_match($regex, $str, $matches)){
	var_dump($matches);
}

//整数
$regex = '/^-?\d+$/';
$str = '-22';
$mateches = array();
if(preg_match($regex, $str, $matches)){
	var_dump($matches);
}

//email
$regex = '/[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+/';
$str = '327466897@qq.com';
$mateches = array();
if(preg_match($regex, $str, $matches)){
	var_dump($matches);
}

//url
$regex = '#^[a-zA-z]+://(\w+(-\w+)*)(\.(\w+(-\w+)*))*(\?\S*)?$#';
$str = 'http://www.baidu.com';
$mateches = array();
if(preg_match($regex, $str, $matches)){
	var_dump($matches);
}

//年-月-日
$regex = '/^(\d{2}|\d{4})-((0[1-9])|(1[1-2]))-(([0-2]([0-9]))|(3[1-2]))$/';
$str = '1994-07-19';
$mateches = array();
if(preg_match($regex, $str, $matches)){
	var_dump($matches);
}
?>