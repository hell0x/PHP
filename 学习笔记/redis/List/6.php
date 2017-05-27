<?php
$redis = new redis();
$redis -> connect('127.0.0.1',6379);
$redis -> flushAll();

$redis -> lPush('favorite_fruit','cherry');
$redis -> lPush('favorite_fruit','apple');
$redis -> lPush('favorite_fruit','peach');
$redis -> lPush('favorite_fruit','grape');

//lIndex 用于通过索引获取列表中的元素。你也可以使用负数下标，以 -1 表示列表的最后一个元素
var_dump($redis->lIndex('favorite_fruit', '2'));

//lInsert 用于在列表的元素前或后插入元素
var_dump($redis -> lInsert('favorite_fruit','before','apple','Mango'));     // int 5
var_dump($redis -> lRange('favorite_fruit',0,-1));
//array (size=5)
//  0 => string 'grape' (length=5)
//  1 => string 'peach' (length=5)
//  2 => string 'Mango' (length=5)
//  3 => string 'apple' (length=5)
//  4 => string 'cherry' (length=6)
?>