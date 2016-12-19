<?php
require_once('re.php');
require_once('db.php');
//循环插入数据
foreach($Arrend as $key => $value){
	$sql = "insert into curl(title, imgurl) values('".$value[0]."','".$value[1]."');";
	$result = $link->query($sql);
	if(!$result){
		echo "添加失败";
	}
}
?>