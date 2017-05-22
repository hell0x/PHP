<?php
//EXPIREAT 以 UNIX 时间戳(unix timestamp)格式设置 key 的过期时间
$redis = new redis();
$redis->connect('127.0.0.1',6379);
$redis->set('w3ckey','redis');
$redis->expireAt('w3ckey',time()+10);
sleep(3);
var_dump($redis->TTL('w3ckey'));
?>