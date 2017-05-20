<?php
function input_filter($key = "", $default, $function = "strip_tags"){
	if(strpos($key, ".") !== FALSE){
		list($method, $var) = explode(".", $key, 2);
		if(!in_array($method, array("get", "post"))){
			$method = "get";
		}
	}else{
		show_error("input_filter参数有误");
	}
	$v = ($method == "get") ? $_GET : $_POST;
	$result = isset($v[$var]) ? $v[$var] : null;
	if($result===null && isset($default))
		$result = $default;
	if(strpos($function, ",") !== FALSE){
		foreach(explode(',', $function) as $val)
			$result = $val($result);
	}else{
		echo "$function";
		$result = $function($result);
	}
	return $result;
}
?>