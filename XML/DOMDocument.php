<?php
$doc = new DOMDocument();
$doc->load('books.xml');
$books = $doc->getElementsByTagName("book");
foreach($books as $book){
	$authors = $book->getElementsByTagName("author");
	$author = $authors->item(0)->nodeValue;

	echo "$author<br/>";
}
?>