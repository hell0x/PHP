<?php
// ob_implicit_flush();			//打开绝对刷新，打开后不需要在使用flush()
// 当cache达到一定的大小才会从浏览器中输出
for($i=0; $i<300; $i++)		
	print(" ");
for($j = 0; $j<10; $j++){
	echo $j."<br/>";
	flush();
	sleep(1);
}
?>