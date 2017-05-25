<?php
function str_rev($str, $encode){
	$len = mb_strlen($str, $encode);
	$string = '';
	for($i=$len-1; $i>=0; $i--)
		$string .= mb_substr($str, $i, 1, $encode);
	return $string;
}

function str_rev_two($str){
	preg_match_all('/./us', $str, $arr);
	return implode('', array_reverse($arr[0]));
}
?>