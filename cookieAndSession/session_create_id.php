<?php
//PHP7
function my_session_start(){
	session_start();
	if(!empty($_SESSION['deleted_time']) && $_SESSION['deleted_time'] < time() -60){
		session_destroy();
		session_start();
	}
}

function my_session_regenerate_id(){
	if(session_status() != PHP_SESSION_ACTIVE){
		session_start();
	}
	$newid = session_create_id('weixing-');
	$_SESSION['deleted_time'] = time();
	session_commit();
	ini_set('session.use_strict_mode', 0);
	session_id($newid);
	session_start();
}

ini_set('session.use_strict_mode', 1);
my_session_start();
var_dump($_SESSION);

my_session_regenerate_id();
var_dump($_SESSION);
?>