<?php
//BASEPATH自定义
define('BASEPATH', __DIR__.DIRECTORY_SEPARATOR.'system'.DIRECTORY_SEPARATOR);

/**
 * 简易自动加载类函数
 * @param 类名
 * @param 类所在目录
 * @param 传递给类构造函数的参数
 */
function &load_class($class, $directory = "libraries", $param = NULL){

	static $_classes = array();

	//如果$_classes[$class]存在，则直接实例化
	if(isset($_classes[$class])){
		return $_classes[$class];
	}

	$name = FALSE;

	//查找指定目录下是否存在指定类，如果存在则载入
	$file = BASEPATH.$directory.DIRECTORY_SEPARATOR.$class.'.php';
	if(file_exists($file)){
		if(class_exists($class, FALSE) === FALSE){
			$name = $class;
			require_once($file);
		}
	}

	if($name === FALSE){
		exit('Unable to locate the specified class: '.$class.'.php');
	}

	$_classes[$class] = isset($param) ? new $name($param) : $name();
	return $_classes[$class];
}
?>