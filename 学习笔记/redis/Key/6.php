<?php
$redis = new redis();
$redis->connect('127.0.0.1',6379);

$redis->flushAll();
var_dump($redis -> type('fake_key'));			//int(0)

$redis -> set('favorite_fruit','banana');		
var_dump($redis -> type('favorite_fruit'));		//int(1)

$redis -> sAdd('favorite_singer','Jay Chou');
var_dump($redis -> type('favorite_singer'));	//int(2)

$redis -> lPush('program','PHP');
var_dump($redis -> type('program'));			//int(3)

$redis -> zAdd('pats','0','dog');
$redis -> zAdd('pats','1','cat');
$redis -> zAdd('pats','1','pig');
$redis -> zAdd('pats','2','fox');
var_dump($redis -> zRange('pats',0,-1));
var_dump($redis -> type('pats'));				//int(4)

$redis -> hSet('website','baidu','www.baidu.com');
var_dump($redis -> hGet('website','baidu'));
var_dump($redis -> type('website'));			//int(5)
?>