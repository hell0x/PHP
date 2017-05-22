<?php
//append 追加值，key存在则追加到末尾，不存在就将key设为value
$redis = new redis();
$redis -> connect('127.0.0.1',6379);
$redis -> flushAll();

$redis->set('mykey', 'weixing');
$redis->append('mykey', ' is fighting');
var_dump($redis->get('mykey'));		//string 'weixing is fighting'

//不存在时
$redis->del('name');
$redis->append('name', 'xing');
var_dump($redis->get('name'));		//string 'xing'
?>