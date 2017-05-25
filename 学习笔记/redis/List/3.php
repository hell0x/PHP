<?php
$redis = new redis();
$redis -> connect('127.0.0.1',6379);
$redis -> flushAll();

//移出并获取列表的第一个元素， 如果列表没有元素会阻塞列表直到等待超时或发现可弹出元素为止
// This first case: 非阻塞行为，最少有一个非空列表
$redis -> lPush('favorite_fruit','cherry');
$redis -> lPush('favorite_fruit','banana');
$redis -> lPush('favorite_fruit','apple');

$redis -> lPush('pats','dog');
$redis -> lPush('pats','cat');
$redis -> lPush('pats','rabbit');

var_dump($redis -> blPop('favorite_fruit',3));
//  array (size=2)
//      0 => string 'favorite_fruit' (length=14)
//      1 => string 'apple' (length=5)

$array_blpop = array('favorite_fruit','pats');
var_dump($redis -> blPop($array_blpop,3));          // 优先弹出第一个非空列表的头元素
//  array (size=2)
//      0 => string 'favorite_fruit' (length=14)
//      1 => string 'banana' (length=6)

var_dump($redis -> lRange('favorite_fruit',0,-1));
//  array (size=1)
//      0 => string 'cherry' (length=6)

// This second case: 阻塞行为, 所有给定key都不存在或包含空列表
var_dump($redis -> blPop('fake_key',2));    // 阻塞链接， 2s 之后超时结束，返回 array (size=0) empty

//brPop 移出并获取列表的最后一个元素， 如果列表没有元素会阻塞列表直到等待超时或发现可弹出元素为止
?>