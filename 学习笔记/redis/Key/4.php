<?php
$redis = new redis();
$redis->connect('127.0.0.1',6379);
$redis->flushAll();
$array_mset_keys = array(
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'four' => 4,
);
$redis -> mset($array_mset_keys);

var_dump($redis -> keys('*'));

var_dump($redis -> keys('*o*'));  

var_dump($redis->keys("o??"));

var_dump($redis->keys("t[wh]*")); 
?>