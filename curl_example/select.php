<?php
require_once('db.php');
$sql = "select * from curl order by id desc";  
if($result = $link->query($sql)){    
    while ($row = $result->fetch_assoc()) {
        echo "<p><img src=".$row["imgurl"]." width=400 height=200><br>";
        echo $row["title"]."</p>";
    }
}
else{  
    echo '提取失败';  
}
?>