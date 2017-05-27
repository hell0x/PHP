<?php
$redis = new redis();
$redis -> connect('127.0.0.1',6379);
$redis -> flushAll();

$redis -> lPush('favorite_fruit','cherry');
$redis -> lPush('favorite_fruit','apple');
$redis -> lPush('favorite_fruit','peach');
$redis -> lPush('favorite_fruit','grape');

// The first case : 若 source 和 desitination 相同，则尾旋转操作
var_dump($redis -> brpoplpush('favorite_fruit','favorite_fruit',2));   // cherry ,并没有返回 time
var_dump($redis -> lRange('favorite_fruit',0,-1));
//array (size=4)
//  0 => string 'cherry' (length=6)
//  1 => string 'grape' (length=5)
//  2 => string 'peach' (length=5)
//  3 => string 'apple' (length=5)

// The second case ： 移动操作
var_dump($redis -> brpoplpush('favorite_fruit','other_list',2));   // apple ，并没有返回 time
var_dump($redis -> lRange('favorite_fruit',0,-1));
//array (size=3)
//  0 => string 'cherry' (length=6)
//  1 => string 'grape' (length=5)
//  2 => string 'peach' (length=5)

var_dump($redis -> lRange('other_list',0,-1));
//array (size=1)
//  0 => string 'apple' (length=5)

var_dump($redis -> brpoplpush('fake_key','desination_key',2));  // 等待 2s 后返回 false  ，并没有返回 time
?>