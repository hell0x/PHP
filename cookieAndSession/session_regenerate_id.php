<?php
session_start();

$old_sessionid = session_id();

session_regenerate_id();

$new_sessionid = session_id();

echo "old sessionid:$old_sessionid<br/>";
echo "new sessionid:$new_sessionid<br/>";

var_dump($_SESSION);
?>