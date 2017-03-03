<?php
//BASEPATH自定义
define('APPPATH', __DIR__.DIRECTORY_SEPARATOR.'application'.DIRECTORY_SEPARATOR);

//加载主配置文件
function &get_config(Array $replace = array()){
	static $config;

	if(empty($config)){
		$file_path = APPPATH.'config/config.php';
		$found = FALSE;
		//如果配置文件存在则加载
		if(file_exists($file_path)){
			$found = TRUE;
			require($file_path);
		}
		//如果不存在报错
		if(!$found){
			exit('The configuration file does not exist.');
		}
		if(!isset($config) OR !is_array($config)){
			exit('Your config file does not appear to be formatted correctly.');
		}
	}

	//动态添加或替换
	foreach($replace as $key => $val){
		$config[$key] = $val;
	}

	return $config;
}

//获取特定配置值
function config_item($item){
	static $_config;
	if(empty($_config)){
		//引用不能直接分配给静态变量，要用数组
		$_config[0] = &get_config();
	}
	return isset($_config[0][$item]) ? $_config[0][$item] : NULL;
}
?>