<?php
$redis = new redis();
$redis -> connect('127.0.0.1',6379);
$redis -> flushAll();

$redis -> zAdd('myset',0,'hello');
$redis -> zAdd('myset',1,'world');
$redis -> zAdd('myset',1,'foo');
$redis -> zAdd('myset',2,'hi');
$redis -> zAdd('myset',2.5,'welcome');
$redis -> zAdd('myset',3,'score');

//返回有序集中指定成员的排名
var_dump($redis->zRank('myset', 'welcome'));	//int 4

//zRevRank 返回有序集中成员的排名。其中有序集成员按分数值递减(从大到小)排序
?>