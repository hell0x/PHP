<?php
/**
 * 单例模式
 */
class Singlemodel{
	//实例变量
	private static $_instance = null;

	//private 屏蔽掉通过new来实例化该对象
	private function __construct(){}

	//private 屏蔽掉通过clone来克隆对象
	private function __clone(){}

	//通过该方法获取实例，防止多次实例化
	public static function getInstance(){
		if(!self::$_instance instanceof self){
			self::$_instance = new self();
		}
		return self::$_instance;
	}
}
?>