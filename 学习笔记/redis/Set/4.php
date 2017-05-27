<?php
$redis = new redis();
$redis -> connect('127.0.0.1',6379);
$redis -> flushAll();

$redis -> sAdd('myset','hello');
$redis -> sAdd('myset','foo');
$redis -> sAdd('myset','world');
$redis -> sAdd('myset','hi');
$redis -> sAdd('myset','welcome');

$redis -> sAdd('otherset','hello');
$redis -> sAdd('otherset','world');
$redis -> sAdd('otherset','good');

//sDiff 返回给定集合之间的差集
var_dump($redis -> sDiff('myset','otherset'));  // 此处的差集指的是第一个集合的元素，不包含后面集合的元素
//array (size=3)
//  0 => string 'welcome' (length=7)
//  1 => string 'foo' (length=3)
//  2 => string 'hi' (length=2)

//sDiffStore 将给定集合之间的差集储存在指定的集合中
?>