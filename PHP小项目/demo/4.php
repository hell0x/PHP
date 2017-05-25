<?php
//1, 5, 10, 20, 50, 100元
//交易使用最少数量纸币的算法
function lessGiven($input){
	$money = array(1, 5, 10, 20, 50, 100);
	$times = 0;
	if($input >= 100){
		$times = floor(($input/100));
		$input -= ($times*100);
	}
	if(!$input)
		return $times;
	while($input){
		for($i=0; $i<count($money); $i++){
			if($input <= $money[$i])
				break;
		}
		if(!$i)
			return $times+1;
		// $best = strcmp(($money[$i] - $input), ($input - $money[$i-1]));
		$val1 = ($money[$i] - $input);
		$val2 = ($input - $money[$i-1]);
		$input = ($val1 > $val2) ? ($input-$money[$i-1]) : ($money[$i] - $input);
		$times++;
	}
	return $times;
}
$result = lessGiven(51);
echo $result;
?>