<?php
$redis = new redis();
$redis->connect('127.0.0.1', 6379);

//删除单个key
$redis->set('name', 'xing');
var_dump($redis->get('name'));
$redis->del('name');
var_dump($redis->get('name'));

//删除不存在的key
if(!$redis->exists('name')){
	var_dump($redis->del('name'));
}

//删除多个key
$arr = array(
	'key1' => 'val1',
	'key2' => 'val2',
	'key3' => 'val3'
);
$redis->mset($arr);		//存储多个值
$array_mget = array('key1', 'key2', 'key3');
var_dump($redis->mget($array_mget));
$redis -> del($array_mget);		//删除多个key
var_dump($redis->mget($array_mget));
?>