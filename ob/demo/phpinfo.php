<?php
//保存phpinfo函数的输出
ob_start();
phpinfo();
$info = ob_get_contents();
$file = fopen('info.txt', 'w');
fwrite($file, $info);
fclose($file);
ob_end_clean();
?>