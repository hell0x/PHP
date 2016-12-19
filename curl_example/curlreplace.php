<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://www.shiyanlou.com/");
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
$result = curl_exec($curl);
curl_close($curl);
echo str_replace("实验楼", "魏星楼", $result);
?>