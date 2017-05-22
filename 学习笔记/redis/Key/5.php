<?php
$redis = new redis();
$redis->connect('127.0.0.1',6379);
$redis->flushAll();


$redis -> select(0);
$redis -> set('favorite_fruit','pineapple');
if($redis -> move('favorite_fruit',1)){
    $redis -> select(1);
    var_dump($redis -> get('favorite_fruit'));
}
?>