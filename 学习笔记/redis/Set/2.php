<?php
$redis = new redis();
$redis -> connect('127.0.0.1',6379);
$redis -> flushAll();

//sMove 将指定成员 member 元素从 source 集合移动到 destination 集合
$redis -> sAdd('myset','hello');
$redis -> sAdd('myset','foo');
$redis -> sAdd('myset','world');
$redis -> sAdd('myset','hi');
$redis -> sAdd('myset','welcome');
$redis -> sAdd('destinationSet','welcome');
var_dump($redis -> sMove('myset','destinationSet','foo'));  // boolean true
var_dump($redis -> sMembers('myset'));
//array (size=4)
//  0 => string 'hello' (length=5)
//  1 => string 'hi' (length=2)
//  2 => string 'world' (length=5)
//  3 => string 'welcome' (length=7)

//sPop 用于移除并返回集合中的一个随机元素
var_dump($redis->sPop('myset'));		//string hi
var_dump($redis->sMembers('myset'));
//array (size=3)
//0 => string 'world' (length=5)
//1 => string 'welcome' (length=7)
//2 => string 'hello' (length=5)

//sRandMember 用于返回集合中的一个随机元素

//sInter 返回所有给定集合的交集

//sInterStore 将给定集合之间的交集存储在指定的集合中。如果指定的集合已经存在，则将其覆盖


?>