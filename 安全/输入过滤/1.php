<?php
session_start();
if($_POST['submit'] == "go"){
	//验证token
	if($_POST['token'] == $_SESSION['token']){
		//防xss攻击，去除HTML和PHP标记
		$name = strip_tags($_POST['name']);
		//防止缓冲区溢出攻击
		$name = substr($name, 0, 40);
		//清除16进制字符
		$name = cleanHex($name);
	}else{

	}
}
$token = md5(uniqid(rand(), true));
$_SESSION['token'] = $token;
function cleanHex($input){
	$clean = preg_replace("![\][xX][A-Fa-f0-9]{1,3}!", "", $input);
	return $clean;
}
?>