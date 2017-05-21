<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * PHP字符串翻转函数，用多字节字符串函数处理
 */
function str_rev_gb($str, $encode){
	$len = mb_strlen($str, $encode);
	$string = '';
	for($i = $len-1; $i>=0; $i--)
		$string .= mb_substr($str, $i, 1, $encode);
	return $string;
}
/**
 * 正则表达式翻转函数
 * @var string
 */
function utf8_strrev($str){
  preg_match_all('/./us', $str, $ar);
  return implode('', array_reverse($ar[0]));
}
$str = "hello魏星world";
echo utf8_strrev($str);
// echo str_rev_gb($str, 'UTF-8');

?>