<?php
fwrite(STDOUT, "Enter your name:\n");
$name = trim(fgets(STDIN));
fwrite(STDOUT, "Hello, $name");
?>