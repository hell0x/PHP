<?php
//lPush 将一个或多个值插入到列表头部
//lPushX 将一个或多个值插入到已存在的列表头部，列表不存在时操作无效
$redis = new redis();
$redis->connect('127.0.0.1', 6379);
$redis->flushAll();

var_dump($redis->lPush('fruit', 'apple'));	//int 1
var_dump($redis->lPush('fruit', 'banana'));	//int 2
var_dump($redis->lPushx('fruit', 'cherry'));	//int 3
var_dump($redis->lRange('fruit', 0, -1));
//  array (size=3)
//      0 => string 'cherry' (length=5)
//      1 => string 'banana' (length=6)
//      2 => string 'apple' (length=6)

//rPush 将一个或多个值插入到列表的尾部(最右边)如果列表不存在，一个空列表会被创建并执行 RPUSH 操作
//rPushx 将一个或多个值插入到已存在的列表尾部(最右边)
?>