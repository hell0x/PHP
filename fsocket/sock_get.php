<?php
function sock_get($url){
	$info = parse_url($url);
	$fp = fsockopen($info["host"], 80, $errno, $errstr, 3);
	$head = "GET ".$info['path']."?".$info["query"]." HTTP/1.1\r\n";
	$head .= "Host: ".$info['host']."\r\n";
	$head .= "\r\n";
	$write = fputs($fp, $head);
	while(!feof($fp)){
		$line = fgets($fp);
		echo $line."<br>";
	}
}
$url = "http://tieba.baidu.com/f?kw=%B1%B3%B9%F8&fr=ala0&tpl=5";
// $url = "http://www.baidu.com";
sock_get($url);
?>