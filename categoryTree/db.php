<?php
error_reporting(0);
class db{
	private static $_instance;
	private static $_conn;

	private function __construct(){}

	public static function getInstance(){
		//如果没有实例化则自己实例化
		if(!(self::$_instance instanceof self)){
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	public static function connect(){
		//如果没有连接
		if(!self::$_conn){
			//实例化
			self::$_conn = new mysqli('127.0.0.1', 'root', '', 'category');

			mysql_query(self::$_conn, "set names UTF8");
		}

		return self::$_conn;
	}
}
?>
