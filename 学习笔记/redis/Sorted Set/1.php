<?php
$redis = new redis();
$redis -> connect('127.0.0.1',6379);
$redis -> flushAll();

//zAdd 将一个或多个成员元素及其分数值加入到有序集当中
$redis->zAdd('myset', 0, 'hello');
$redis -> zAdd('myset',1,'world');
$redis -> zAdd('myset',1,'foo');      //  集合中的元素唯一，但是分数可以重复
$redis -> zAdd('myset',2,'hi');
$redis -> zAdd('myset',2.5,'welcome');

//zRem 移除有序集中的一个或多个成员，不存在的成员将被忽略
$redis->zRem('myset', 'hi');

//zCard 计算集合中元素的数量
var_dump($redis->zCard('myset'));		//int 4
?>