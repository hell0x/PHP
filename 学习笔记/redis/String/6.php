<?php
$redis = new redis();
$redis->connect('127.0.0.1', 6379);
$redis->flushAll();

//strlen 获取指定 key 所储存的字符串值的长度
$redis -> set('name','xing');
var_dump($redis -> strlen('name'));    // int 4

//incr 将 key 中储存的数字值增一
$redis->set('number', 10);
var_dump($redis->incr('number'));		//int 11
var_dump($redis -> get('number'));     // string '11'  , 其值在 redis 中是以字符串的形式保存的

//incrby 将key中储存的数字加上指定的增量值

//incrbyfloat
$redis -> set('number',10.2);
var_dump($redis -> incrByFloat('number',0.3));    // float 10.5
var_dump($redis -> get('number'));     // string '10.5'  , 其值在 redis 中是以字符串的形式保存的

//decr 将 key 中储存的数字值减一

//decrby 将 key 所储存的值减去指定的减量值

//setBit 对 key 所储存的字符串值，设置或清除指定偏移量上的位(bit)
$bit = 67;
echo decbin($bit);          // 1000011 , 转为二进制数
var_dump($redis ->setBit('bit_val',0,0));   // int 0 ,原来的空位都为 0
var_dump($redis ->setBit('bit_val',1,1));   // int 0
var_dump($redis ->setBit('bit_val',2,0));   // int 0
var_dump($redis ->setBit('bit_val',3,0));   // int 0
var_dump($redis ->setBit('bit_val',4,0));   // int 0
var_dump($redis ->setBit('bit_val',5,0));   // int 0
var_dump($redis ->setBit('bit_val',6,1));   // int 0
var_dump($redis ->setBit('bit_val',7,1));   // int 0

var_dump($redis -> get('bit_val'));         // string 大写字母 'C'，其 ASCII 值为67 ，二进制为 0100 0011

//getBit 对 key 所储存的字符串值，获取指定偏移量上的位(bit)
?>