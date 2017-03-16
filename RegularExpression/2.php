<?php
$regex = '/HELLO/';
$str = 'hello world';
$matches = array();

if(preg_match($regex, $str, $matches)){
	echo "YES";
}else{
	echo "NO";
}

if(preg_match($regex.'i', $str, $matches)){
	echo "YES";
}else{
	echo "NO";
}
?>