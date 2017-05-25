<?php
$redis = new redis();
$redis->connect('127.0.0.1', 6379);
$redis->flushAll();

//lPop 移除并返回列表的第一个元素
$redis->lPush('fruit', 'apple');
$redis->lPush('fruit', 'cherry');
$redis->lPush('fruit', 'banana');
var_dump($redis->lPop('fruit'));	//banana
var_dump($redis->lRange('fruit', 0, -1));	//cherry, apple

//rPop 用于移除并返回列表的最后一个元素
?>