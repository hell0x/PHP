<?php
$dbh = new PDO('mysql:host=192.168.204.194;dbname=php_manual;charset=utf8', 'root', '123456');
$file = "./langref.txt";
$result = array();
if($fp = fopen($file, "r")){
	$buffer = "";
	while(!feof($fp)){
		$buffer = fgets($fp);
		if(strpos($buffer, "(") !== FALSE){
			$rtn = explode("(", $buffer);
			$title = trim($rtn[0], " ");
			// $link = substr($rtn[1], 0, strlen($rtn[1])-2);
			$link = substr($rtn[1], 0, -2);
			$sql = 'INSERT INTO `index`(`title`, `link`) VALUES("'.$title.'", "'.$link.'")';
			$dbh->exec($sql) or die(print_r($dbh->errorInfo(), true));
		}
	}
	$dbh = null;
}else{
	exit("读取文件langref.txt失败");
}
?>