<?php
$xml = simplexml_load_file("books.xml");
echo "<pre>";
print_r($xml->book[1]);
echo "</pre>";

?>