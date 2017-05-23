<?php
$redis = new redis();
$redis -> connect('127.0.0.1',6379);
$redis -> flushAll();

$array_hmset = array(
    'number' => 10,
    'fruit' => 'cherry'
);
$redis -> hMset('myhash',$array_hmset);
var_dump($redis -> hIncrBy('myhash','number',5));           // int 10+5=15
var_dump($redis -> hIncrBy('myhash','number',-5));          // int 15-5=10
var_dump($redis -> hIncrBy('myhash','number_not_exist',2)); // int 2
var_dump($redis -> hIncrBy('myhash','fruit',5));            // boolean false ， 字符串会出现错误

//HINCRBYFLOAT 为哈希表中的字段值加上指定浮点数增量值

//HKEYS 获取哈希表中的所有字段名
var_dump($redis -> hKeys('myhash'));

//hVals 返回哈希表所有字段的值
var_dump($redis -> hVals('myhash'));
?>