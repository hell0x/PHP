<?php
//mset 同时设置一个或多个 key-value 对, 会覆盖
$redis = new redis();
$redis -> connect('127.0.0.1',6379);
$redis -> flushAll();

$arr = array(
	'year' => 2017,
	'month' => 5,
	'day' => 23
);
$redis->mset($arr);
var_dump($redis->key('*'));

//Msetnx 所有给定 key 都不存在时，同时设置一个或多个 key-value 对。
//即使只有一个key已存在，MSETNX也会拒绝所有传入key的设置操作
//MSETNX是原子性的，所有字段要么全被设置，要么全不被设置
$arr2 = array(
	'day' => 20,
	'hour' => 23,
	'minute' => 20
);
$redis->msetnx($arr2);		//有旧值，不能覆盖
?>