<?php
$redis = new redis();
$redis->connect('127.0.0.1', 6379);
$redis->flushAll();

//set 设置指定key的值，会覆盖, 无视类型
$redis->set('name', 'wei');

//setnx 设置指定key的值,不覆盖
$redis->setnx('name', 'xing');

//setex 设置指定key的值及其过期时间, 会覆盖
//setex类型set+expire，但是setex是原子性操作，设置值和生存时间同时完成
$redis->set('mykey', 'redis');
$redis->setex('mykey', 20, 'haha');
var_dump($redis->get('mykey'));
sleep(2);
var_dump($redis->ttl('mykey'));
?>