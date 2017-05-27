<?php
$redis = new redis();
$redis -> connect('127.0.0.1',6379);
$redis -> flushAll();

//返回给定集合的并集
$redis -> sAdd('myset','hello');
$redis -> sAdd('myset','foo');
$redis -> sAdd('myset','world');
$redis -> sAdd('myset','hi');
$redis -> sAdd('myset','welcome');

$redis -> sAdd('otherset','hello');
$redis -> sAdd('otherset','world');
$redis -> sAdd('otherset','good');

// The first case : 集合都不为空 , 原集合不变
var_dump($redis -> sUnion('myset','otherset'));
//array (size=6)
//  0 => string 'world' (length=5)
//  1 => string 'hello' (length=5)
//  2 => string 'welcome' (length=7)
//  3 => string 'good' (length=4)
//  4 => string 'hi' (length=2)
//  5 => string 'foo' (length=3)

//sUnionStore 将给定集合的并集存储在指定的集合 destination 中。如果 destination 已经存在，则将其覆盖

?>