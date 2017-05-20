<?php
header("Content-type:text/html;charset=gb2312");
function my_scandir($dir){
	$files = array();
	if(is_dir($dir)){
		if($handle = opendir($dir)){
			while(($file = readdir($handle)) !== FALSE){
				if($file != '.' && $file != '..'){
					if(is_dir($dir.'/'.$file)){
						$files[$flie] = my_scandir($dir.'/'.$file);
					}else{
						$files[] = $dir.'/'.$file;
					}
				}
			}
			closedir($handle);
		}
	}
	return $files;
}
?>