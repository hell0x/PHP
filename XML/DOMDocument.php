<?php
$doc = new DOMDocument();
$doc->load('books.xml');
$books = $doc->getElementsByTagName("book");
?>