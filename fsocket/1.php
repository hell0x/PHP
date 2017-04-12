<?php
$fp = fsockopen("www.baidu.com", 80, $errorno, $errstr, 30);
if(!$fp){
	echo "$errstr ($errno)<br />";
}else{
	$out = "GET / HTTP/1.1\r\n";
	$out .= "Host: www.baidu.com\r\n";
	$out .= "Connection: Close\r\n\r\n";
	fwrite($fp, $out);
	while(!feof($fp)){
		echo fgets($fp, 128);
	}
	fclose($fp);
}
?>