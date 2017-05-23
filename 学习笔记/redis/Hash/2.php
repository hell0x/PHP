<?php
$redis = new redis();
$redis->connect('127.0.0.1', 6379);
$redis->flushAll();

//hdel 用于删除哈希表 key 中的一个或多个指定字段，不存在的字段将被忽略
$redis->hSet('hashone', 'name', 'xing');
var_dump($redis->hDel('hashone', 'name'));

//hLen 用于获取哈希表中字段的数量
$array_hmset = array(
    'pats' => 'dog',
    'fruit' => 'cherry',
    'job' => 'programmer'
);
$redis -> hMset('myhash',$array_hmset);
var_dump($redis -> hLen('myhash'));            // int 3
var_dump($redis -> hLen('hash_not_exists'));   // int 0 , 不存在的 hash 表返回 0

//hExists 用于查看哈希表的指定字段是否存在
var_dump($redis->hExists('myhash', 'fruit'));	//true
var_dump($redis->hExists('myhash', 'fake_key'));		//false
?>