<?php
$regex = '/
    ^host=(?<!\.)([\d.]+)(?!\.)                 (?#主机地址)
\|
    ([\w!@#$%^&*()_+\-]+)                       (?#用户名)
\|
    ([\w!@#$%^&*()_+\-]+)                       (?#密码)
(?!\|)$/ix';
$str = 'host=192.168.10.221|root|123456';
$matches = array();
if(preg_match($regex, $str, $matches)){
	echo "<pre>";
	print_r($matches);
	echo "</pre>";
}
?>