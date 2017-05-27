<?php
$redis = new redis();
$redis->connect('127.0.0.1', 6379);
$redis->flushAll();

//lRange 返回列表中指定区间内的元素
$redis -> lPush('favorite_fruit','cherry');
$redis -> lPush('favorite_fruit','banana');
$redis -> lPush('favorite_fruit','apple');
$redis -> lPush('favorite_fruit','peach');
$redis -> lPush('favorite_fruit','pineapple');
$redis -> lPush('favorite_fruit','grape');
var_dump($redis->lRange('favorite_fruit', 1, 3));
//   array (size=3)
//      0 => string 'pineapple' (length=9)
//      1 => string 'peach' (length=5)
//      2 => string 'apple' (length=5)

//lRem 根据参数 COUNT 的值，移除列表中与参数 VALUE 相等的元素
var_dump($redis -> lRem('favorite_fruit','apple',2));   // int 2    // 从开头向结尾方向移除 2 个
var_dump($redis -> lRange('favorite_fruit',0,-1));
//array (size=4)
//  0 => string 'grape' (length=5)
//  1 => string 'peach' (length=5)
//  2 => string 'apple' (length=5)
//  3 => string 'cherry' (length=6)

var_dump($redis -> lRem('favorite_fruit','apple',-1));   // int1    // 从结尾向开头方向移除 1 个
var_dump($redis -> lRange('favorite_fruit',0,-1));
//array (size=3)
//  0 => string 'grape' (length=5)
//  1 => string 'peach' (length=5)
//  2 => string 'cherry' (length=6)

var_dump($redis -> lRem('favorite_fruit','peach',0));   // int 1    // 移除所有的 value
var_dump($redis -> lRange('favorite_fruit',0,-1));
//array (size=2)
//  0 => string 'grape' (length=5)
//  1 => string 'cherry' (length=6)
?>