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

$redis -> zAdd('otherset',0,'good');    // score=0
$redis -> zAdd('otherset',1,'hello');   // score=1
$redis -> zAdd('otherset',2,'world');   // score=2

$array_set = array('myset','otherset');
//计算给定的一个或多个有序集的并集, 结果集中某个成员的分数值是所有给定集下该成员分数值之和 
var_dump($redis ->zUnion('destinationset',$array_set));    // int 7
var_dump($redis ->zRange('destinationset',0,-1,'withScore'));
//array (size=7)
//  'good' => float 0
//  'foo' => float 1
//  'hello' => float 1
//  'hi' => float 2
//  'welcome' => float 2.5
//  'score' => float 3
//  'world' => float 3
?>