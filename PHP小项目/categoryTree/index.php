<?php
require_once("./db.php");
function getCate($pid=0, &$result=array(), $s=0){
	$s = $s + 4;
	$conn = db::getInstance()->connect();
	$res = $conn->query("select * from category where pid=$pid");
	while($row = $res->fetch_assoc()){
		$row['category'] = str_repeat("&nbsp", $s)."|--".$row['category'];
		$result[] = $row;
		getCate($row['id'], $result, $s);
	}
	return $result;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>分类管理</title>
	<link rel="stylesheet" href="styles/style.css" type="text/css"/>
</head>
<body>
	<nav class="nav">
		<a href="categoryadd.php">添加分类</a>
	</nav>

	<article class="module width_full">
		<div class="tab_container">
			<table cellpadding="0" class="tablesorter">
				<thead>
					<tr>
						<th width="10%" class="tc">id</th>
						<th width="25%">分类名</th>
						<th width="10%">操作</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$rs = getCate();
						foreach($rs as $key => $value){
					?>
					<tr>
						<td class="tc"><?php echo $value['id']?></td>
						<td><?php echo $value['category']?></td>
						<td>
							<a href="function.php?action=del&id=<?php echo $value['id']?>" title="删除">删除</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</article>
</body>
</html>