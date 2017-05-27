<?php
$redis = new redis();
$redis -> connect('127.0.0.1',6379);
$redis -> flushAll();

$redis -> zAdd('myset',0,'hello');
$redis -> zAdd('myset',1,'world');
$redis -> zAdd('myset',1,'foo');      //集合中的元素唯一，但是分数可以重复
$redis -> zAdd('myset',2,'hi');
$redis -> zAdd('myset',2.5,'welcome');
$redis -> zAdd('myset',3,'score');

//1分到3分之间的值有5个
var_dump($redis->zCount('myset', 1, 3));	//int 5

//zScore 返回有序集合中，成员的分数值
var_dump($redis->zScore('myset', 'foo'));	//float 1

//zIncrBy 对有序集合中指定成员的分数加上增量increment
var_dump($redis->zIncrBy('myset', 0.6, 'wrold'));	//float 1.6
var_dump($redis->zIncrBy('myset', -1.2, 'score'));	//float 1.8
?>