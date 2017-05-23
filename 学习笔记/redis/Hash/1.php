<?php
$redis = new redis();
$redis->connect('127.0.0.1', 6379);
$redis->flushAll();

//hset 为哈希表中的字段赋值
$redis->hset('hashone', 'name', 'xing');

//hsetnx 为哈希表中不存在的的字段赋值 

//hmset 同时将多个 field-value (字段-值)对设置到哈希表中

//hget 返回哈希表中指定字段的值

//返回哈希表中，一个或多个给定字段的值

//hGetAll 返回哈希表中，所有字段和值
$arr = array(
	'pats' => 'dog',
	'fruit' => 'cherry',
	'job' => 'programmer'
);
$redis->hMset('myhash', $arr);
var_dump($redis->hGetAll('myhash'));
?>