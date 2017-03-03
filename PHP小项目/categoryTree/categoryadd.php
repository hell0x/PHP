<?php
require_once('./db.php');
//递归实现地区分级
function getCate($pid=0, &$result=array(), $s=0){
	$s = $s + 4;
	$conn = db::getInstance()->connect();
	$res = $conn->query("select * from category where pid = $pid");
	while($row = $res->fetch_assoc()){
		$row['category'] = str_repeat('&nbsp', $s).'|--'.$row['category'];
		$result[] = $row;
		//递归
		getCate($row['id'], $result, $s);
	}
	return $result;
}
?>
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>添加分类</title>
	<link rel="stylesheet" href="styles/style.css" type="text/css"/>
	<script type="text/javascript">
		function submitForm(){
			if(addForm.category.value == ""){
				alert("请填写分类名称");
				addForm.category.focus();
				return false;
			}else{
				document.addForm.submit();
			}
		}	
	</script>
</head>
<body>
	<form name="addForm" action="function.php?action=add" method="POST">
		<nav class="nav">
			<a href="index.php">返回列表</a>
		</nav>
		<article class="module width_full">
			<div class="module_content">
				<fieldset>
					<label for="txtName">上级菜单</label>
					<select name="pid">
						<option value="0">作为顶级菜单</option>
						<?php
							$rs = getCate();
							foreach($rs as $key => $value){
								echo "<option value={$value['id']}>{$value['category']}</option>";
							}
						?>
					</select>
				</fieldset>
				<fieldset>
					<label for="txtName">分类名称</label>
					<input type="text" id="txtName" name="category"/>
				</fieldset>

				<div class="tc mt20">
					<a href="javascript:void(0)" class="button green" id="btnAdd" onclick="submitForm();">添加</a>
				</div>
			</div>
		</article>
	</form>
</body>
</html>
