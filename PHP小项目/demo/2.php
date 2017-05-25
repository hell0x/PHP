<?php
//二分查找递归方法
function bin_sch($arr, $low, $high, $k){
	if($low < $high){
		$mid = floor(($low + $high)/2);
		if($k == $arr[$mid])
			return $mid;
		elseif($k < $arr[$mid])
			return bin_sch($arr, $low, $mid-1, $k);
		else
			return bin_sch($arr, $mid+1, $high, $k);
	}
	return -1;
}

//二分法非递归方法
function bin_sch_two($arr, $low, $high, $k){
	while($low <= $high){
		$mid = floor(($low + $high) / 2);
		if($k == $arr[$mid])
			return $mid;
		elseif($k < $arr[$mid])
			$high = $mid - 1;
		else
			$low = $mid + 1;
	}
	return -1;
}
?>