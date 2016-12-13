<?php
require_once('./db.php');
$conn = db::getInstance()->connect();
$result = $conn->query("select * from category");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>添加分类</title>
	<link rel="stylesheet" href="styles/style.css" type="text/css"/>
</head>
<body>
	<article class="module width_full">
		<div class="module_content">
			<fieldset>
				<label for="txtName">上级菜单</label>
				<select>
					<option value="0">作为顶级菜单</option>
					<?php while($row=$result->fetch_array()){ ?>
					<option value="<?php echo $row[0]?>"><?php echo $row[2]?></option>
					<?php } ?>
				</select>
			</fieldset>
			<fieldset>
				<label for="txtName">分类名称</label>
				<input type="text" id="txtName" name="category"/>
			</fieldset>

			<div class="tc mt20">
				<a href="javascript:void(0)" class="button green" id="btnAdd">添加</a>
			</div>
		</div>
	</article>
</body>
</html>