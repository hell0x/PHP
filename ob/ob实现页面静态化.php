<?php
$id = isset($id) ? $id : 0;
$expire = 3600;  //文件有效期
$file = 'goods_'.$id.'.html';
//先判断静态文件是否存在
if(file_exists($file)){
	//判断是否过期
	if(time() - filemtime($file) < $expire){
		//如果没过期，输出静态文件
		echo file_get_contents($file);
		exit;
	}else{
		//如果过期
		//删除原静态文件
		unlink($file);

		//开启输出缓存区
		ob_start();
		//赋值相关变量，并导入新的静态文件
		require_once "new.html";
		$content = ob_get_contents();
		//内容写入文件
		file_put_contents($file, $content);
		ob_end_flush();//关闭输出缓冲区并输出内容
	}
}else{
	//开启输出缓存区
	ob_start();
	//赋值相关变量，并导入新的静态文件
	require_once "new.html";
	$content = ob_get_contents();
	//内容写入文件
	file_put_contents($file, $content);
	ob_end_flush();//关闭输出缓冲区并输出内容
}
?>