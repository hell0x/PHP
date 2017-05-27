<?php
$redis = new redis();
$redis->connect('127.0.0.1', 6379);
$redis->flushAll();

//lSet 通过索引来设置元素的值
var_dump($redis -> lSet('favorite_fruit','1','pineapple'));   // 将第一个元素替换为 pineapple
var_dump($redis -> lRange('favorite_fruit',0,-1));
//  array (size=4)
//      0 => string 'grape' (length=5)
//      1 => string 'pineapple' (length=9)
//      2 => string 'apple' (length=5)
//      3 => string 'cherry' (length=6)

//lTrim 对一个列表进行修剪(trim)，就是说，让列表只保留指定区间内的元素，不在指定区间之内的元素都将被删除
$redis -> lPush('favorite_fruit','cherry');
$redis -> lPush('favorite_fruit','apple');
$redis -> lPush('favorite_fruit','peach');
$redis -> lPush('favorite_fruit','grape');

var_dump($redis -> lTrim('favorite_fruit',1,-1));
var_dump($redis -> lRange('favorite_fruit',0,-1));
//  array (size=3)
//      0 => string 'peach' (length=5)
//      1 => string 'apple' (length=5)
//      2 => string 'cherry' (length=6)
?>