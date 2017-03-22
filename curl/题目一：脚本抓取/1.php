<?php
date_default_timezone_set('PRC');
// ini_set('date_timezone', 'Asia/shanghai');
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://php.net/manual/en/langref.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);
// preg_match_all("/<li(.*)><a href=\"(.*?)\" title=\"(.*?)\">(.*?)<\/a><\/li>/", $output, $info);
preg_match_all("/<a href=\"(.*?)\" title=\"(.*?)\">(.*?)<\/a>/", $output, $info);
$line1 = "[".date("Y-m-d H:i:s", time())."]fetching http://php.net/manual/en/langref.php\n";
$line2 = "[".date("Y-m-d H:i:s", time())."]parsing start\n";
$line3 = "[".date("Y-m-d H:i:s", time())."]the right side list is:\n";
$content = "";
foreach($info[3] as $key => $val){
	$content .= $val." (http://php.net/manual/en/".$info[1][$key].")\n";
}
$line4 = "[".date("Y-m-d H:i:s", time())."]parsing end\n";
$line5 = "[".date("Y-m-d H:i:s", time())."]saving to file langref.txt\n";
$line6 = "[".date("Y-m-d H:i:s", time())."]saved\n";
$contents = $line1.$line2.$line3.$content.$line4.$line5.$line6;
echo $contents;
if($fp = fopen("./langref.txt", "w")){
	fwrite($fp, $contents);
	fclose($fp);
}else{
	exit("创建文件langref.txt失败");
}
// echo "<pre>";
// print_r($info);
// echo "</pre>";
?>