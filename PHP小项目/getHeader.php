<?php
//得到header投信息
function getHeader(){
	$headers = array();
	if(function_exists('getallheaders')){
		$headers = getallheaders();
	}elseif(function_exists('http_get_request_headers')){
		$headers = http_get_request_headers();
	}else{
		foreach($_SERVER as $key => $val){
			if(strstr($key, 'HTTP_')){
				var_dump($key);
				$newk = ucwords(strtolower(str_replace('_', '-', substr($key, 5))));
				$headers[$newk] = $val;
			}
		}
	}
	return $headers;
}
var_dump(getHeader());
?>