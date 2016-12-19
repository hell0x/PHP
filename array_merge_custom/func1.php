<?php
/**
 * 多维数组合并，支持多数组，key值相同的项相加
 * @return array
 */
function func1(){
	$args = func_get_args();
	$array = array();
	foreach($args as $arg){
		if(is_array($arg)){
			foreach($arg as $k => $v){
				if(is_array($v)){
					$array[$k] = isset($array[$k]) ? $array[$k] : array();
					$array[$k] = func1($array[$k], $v);
				}else{
					$array[$k] = isset($array[$k]) ? $array[$k] : 0;
					$array[$k] = $array[$k] + $v;
				}
			}
		}
	}
	return $array;
}
?>