<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://www.shiyanlou.com/courses/");
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
$result = curl_exec($curl);
curl_close($curl);
preg_match_all("/<span class=\"course-title\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"(.*?)\"\>(.*?)<\/span>/",$result, $title);

preg_match_all("/https\:\/\/dn-simplecloud.shiyanlou.com\/(.*?)g/", $result, $img, PREG_SET_ORDER);

//获取标题数组
function curlTitle($arr = array()){
	foreach($arr[2] as $key => $value){
		@$result .= $value."|";
	}
	//array_filter去掉数组中的空值，explode把字符串以数组形式重组
	return array_filter(explode("|", $result));
}

//获取图片数组
function curlImg($arr = array()){
	foreach($arr as $key => $value){ 
        @$resault .= $value[0]."|";
    }
    return array_filter(explode("|",$resault));
}
$Arrend = array();
foreach(curlTitle($title) as $k => $v){
	$Arrend[] = array(curlTitle($title)[$k], curlImg($img)[$k]);
}
?>