<?php
    ini_set('session.use_strict_mode', 1);
    $sid = md5('wuxiancheng.cn');
    session_id($sid);
    session_start();
    var_dump($sid);
    var_dump(session_id());
    var_dump(session_id() === $sid);// always false
?>