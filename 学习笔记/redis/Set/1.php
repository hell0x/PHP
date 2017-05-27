<?php
$redis = new redis();
$redis -> connect('127.0.0.1',6379);
$redis -> flushAll();

//sAdd 将一个或多个成员加入到集合中
$redis->sAdd('myset', 'wei');
$redis->sAdd('myset', 'xing');
$redis->sAdd('myset', 'hello');
$redis->sAdd('myset', 'world');
$redis->sAdd('myset', 'wei');		//已存在的key被忽略

//sRem 移除集合中的一个或多个成员元素，不存在的成员元素会被忽略
var_dump($redis->sRem('myset', 'hello', 'world'));		//int 2

var_dump($redis->sMembers('myset'));
//array (size=2)
//  0 => string 'wei' (length=3)
//  1 => string 'xing' (length=4)

//sCard 返回集合中元素的数量
var_dump($redis->sCard('myset'));	//int 2
?>