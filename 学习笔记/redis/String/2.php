<?php
$redis = new redis();
$redis->connect('127.0.0.1', 6379);
$redis->flushAll();

//setRange 用指定的字符串覆盖给定 key 所储存的字符串值，覆盖的位置从偏移量 offset 开始。
$redis->set('mykey', 'hello world');
$redis->setRange('mykey', 6, 'redis');		//hello redis

//如果空字符串，则空白被填充
if(!$redis -> exists('fake_key')) {
    $redis -> setRange('fake_key',5,'redis');
    var_dump($redis -> get('fake_key'));  // string '�����redis' (length=10) ,空白处被 � 填充了。
}
?>