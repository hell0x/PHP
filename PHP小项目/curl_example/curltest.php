<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://www.shiyanlou.com/");
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_exec($curl);
curl_close($curl);
?>