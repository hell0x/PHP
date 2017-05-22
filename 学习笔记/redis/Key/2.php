<?php
$redis = new redis();
$redis->connect('127.0.0.1', 6379);
$redis->set('name', 'xing');
$redis->expire('name', 20);
sleep(2);
var_dump($redis->TTL('name'));
?>