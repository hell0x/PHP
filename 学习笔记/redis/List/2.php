<?php
$redis = new redis();
$redis->connect('127.0.0.1', 6379);
//lPop 移除并返回列表的第一个元素
?>