<?php
$regex = '/HE(?=L)LLO/i';
$str = 'HELLO';
$matches = array();
 
if(preg_match($regex, $str, $matches)){
    var_dump($matches);
}
?>