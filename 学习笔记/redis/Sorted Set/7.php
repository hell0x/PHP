<?php
$redis = new redis();
$redis -> connect('127.0.0.1',6379);
$redis -> flushAll();

$redis -> zAdd('myset',0,'hello');      // rank=0
$redis -> zAdd('myset',1,'world');      // rank=2
$redis -> zAdd('myset',1,'foo');        // rank=1
$redis -> zAdd('myset',2,'hi');         // rank=3
$redis -> zAdd('myset',2.5,'welcome');  // rank=4
$redis -> zAdd('myset',3,'score');      // rank=5

//移除有序集中指定排名(rank)区间内的所有成员
var_dump($redis ->zRemRangeByRank('myset',1,3));    // int 3

var_dump($redis ->zRange('myset',0,-1,'withScore'));
//array (size=3)
//  'hello' => float 0
//  'welcome' => float 2.5
//  'score' => float 3
?>