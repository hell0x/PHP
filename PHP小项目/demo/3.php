<?php
//冒泡排序
function bubbleSort($arr){
	$count = count($arr);
	if($count <= 1){
		return false;
	}
	for($i=0; $i<$count; $i++){
		for($j=$count-1; $j>$i; $j--){
			if($arr[$j] < $arr[$j-1]){
				$tmp = $arr[$j];
				$arr[$j] = $arr[$j-1];
				$arr[$j-1] = $tmp;
			}
		}
	}
	return $arr;
}

//选择排序
function selectSort($arr){
	$count = count($arr);
	if($count <= 1)
		return false;
	for($i=0; $i<$count; $i++){
		$k = $i;
		for($j=$i+1; $j<$count; $j++){
			if($arr[$j] < $arr[$k])
				$k = $j;
		}
		if($k != $i){
			$tmp = $arr[$i];
			$arr[$i] = $arr[$k];
			$arr[$k] = $tmp;
		}
	}
	return $arr;
}

//插入排序
function insertSort($arr){
	$count = count($arr);
	if($count <= 1)
		return false;
	for($i=1; $i<$count; $i++){
		$tmp = $arr[$i];
		for($j=$i-1; $j>=0; $j--){
			if($tmp < $arr[$j]){
				$arr[$j+1] = $arr[$j];
				$arr[$j] = $tmp;
			}else{
				break;
			}
		}
	}
	return $arr;
}

//快速排序
function quickSort($arr){
	if(count($arr) <= 1)
		return false;
	$key = $arr[0];
	$left_arr = array();
	$right_arr = array();
	for($i=1; $i<count($arr); $i++){
		if($arr[$i] <= $key){
			$left_arr[] = $arr[$i];
		}else{
			$right_arr[] = $arr[$i];
		}
	}
	$left_arr = quickSort($left_arr);
	$right_arr = quickSort($right_arr);
	return array_merge($left_arr, array($key), $right_arr);
}
?>