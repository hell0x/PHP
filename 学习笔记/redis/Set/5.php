<?php
$redis = new redis();
$redis -> connect('127.0.0.1',6379);
$redis -> flushAll();

$redis -> sAdd('myset','hello');
$redis -> sAdd('myset','foo');
$redis -> sAdd('myset','world');
$redis -> sAdd('myset','hi');
$redis -> sAdd('myset','welcome');

//sIsMember 判断成员元素是否是集合的成员
var_dump($redis->sIsMember('myset', 'hello'));		//true
var_dump($redis->sIsMember('myset', 'good'));		//false
?>