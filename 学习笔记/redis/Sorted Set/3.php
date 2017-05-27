<?php
$redis = new redis();
$redis -> connect('127.0.0.1',6379);
$redis -> flushAll();

$redis -> zAdd('myset',0,'hello');
$redis -> zAdd('myset',1,'world');
$redis -> zAdd('myset',1,'foo');      //  集合中的元素唯一，但是分数可以重复
$redis -> zAdd('myset',2,'hi');
$redis -> zAdd('myset',2.5,'welcome');
$redis -> zAdd('myset',3,'score');

//zRange 返回有序集中，指定区间内的成员
var_dump($redis ->zRange('myset',0,-1,'withScore'));
//array (size=6)
//  'hello' => float 0
//  'foo' => float 1
//  'world' => float 1
//  'hi' => float 2
//  'welcome' => float 2.5
//  'score' => float 3

//zRevRange 返回有序集中，指定区间内的成员(成员的位置按分数值递减(从大到小)来排列)

//zRangeByScore 返回有序集中，指定分数(score)区间内的成员

//zRevRangeByScore 返回有序集中指定分数区间内的所有的成员。有序集成员按分数值递减(从大到小)的次序排列

//zRemRangeByScore 移除有序集 key 中，所有 score 值介于 min 和 max 之间(包括等于 min 或 max )的成员
?>