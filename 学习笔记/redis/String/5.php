<?php
$redis = new redis();
$redis->connect('127.0.0.1', 6379);
$redis->flushAll();

//get 获取key的值
$redis -> set('name','xing');
var_dump($redis -> get('name'));   // string 'xing'

//mget 返回多个key的值

//返回字符串的某一部分
$redis -> set('mykey','hello world');
echo $redis -> getRange('mykey',0,-1) . '</br>';    // 从开头到结束， hello world
echo $redis -> getRange('mykey',0,4) . '</br>';     // 从 0 到 4 ， hello
echo $redis -> getRange('mykey',-5,-1) . '</br>';   // 从 -5 到 -1 ， world
var_dump($redis -> getRange('mykey',-1,-5)). '</br> ';  // 从 -1 到 -5 ， "" ,不支持回绕操作
echo $redis -> getRange('mykey',0,100). '</br> ';   // 从 0 到 100 ， hello world ,若范围超过了字符串的长度，超过部分自动被忽略

//getSet 设置指定 key 的值，并返回 key 旧的值。
?>