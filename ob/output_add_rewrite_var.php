<?php
output_add_rewrite_var('wei', 'xing');

echo '<a href="file.php">link</a><a href="http://www.baidu.com">link2</a>';

echo '<form action="script.php" method="POST"><input type="text" name="var2"/></form>';

echo "<pre>";
print_r(ob_list_handlers());
echo "</pre>";
?>