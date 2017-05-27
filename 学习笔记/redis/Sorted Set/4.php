<?php
$redis = new redis();
$redis -> connect('127.0.0.1',6379);
$redis -> flushAll();

$redis -> zAdd('myset',0,'hello');      // score=0
$redis -> zAdd('myset',1,'world');      // score=2
$redis -> zAdd('myset',1,'foo');        // score=1
$redis -> zAdd('myset',2,'hi');         // score=2
$redis -> zAdd('myset',2.5,'welcome');  // score=2.5
$redis -> zAdd('myset',3,'score');      // score=3

$redis -> zAdd('otherset',0,'good');
$redis -> zAdd('otherset',1,'hello');
$redis -> zAdd('otherset',2,'world');

$array_set = array('myset','otherset');
//计算给定的一个或多个有序集的交集, 结果集中某个成员的分数值是所有给定集下该成员分数值之和
var_dump($redis ->zInter('destinationset',$array_set));    // int 2
var_dump($redis ->zRange('destinationset',0,-1,'withScore'));
//array (size=2)
//  'hello' => float 1
//  'world' => float 3
?>