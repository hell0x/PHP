<?php
require_once('./db.php');
$action = $_GET['action'];
switch ($action){
	case 'add':
	$pid = $_POST['pid'];
	$category = $_POST['category'];
	categoryAdd($pid, $category);
	break;
	case 'del':
	$id = $_GET['id'];
	categoryDel($id);
	break;
	case 'edit':
	$id = $_POST['id'];
	$pid = $_POST['pid'];
	$category = $_POST['category'];
	categoryEdit($id, $pid, $category);
	break;
}

//添加分类
function categoryAdd($id, $category){
	$conn = db::getInstance()->connect();
	$res = $conn->query("insert into category(pid, category) values(".$id.",'".$category."')");
	if($res){
		echo "<script>alert('添加分类成功');location.href='index.php';</script>";
		exit;
	}else{
		echo "<scirpt>alert('添加分类失败');history.back(-1);</script>";
		exit;
	}
}

//删除分类名称，在删除有子类的分类时需要提示先删除子类
function categoryDel($id){
    $conn = db::getInstance()->connect();
    $res = $conn-> query("select count(*) from category where pid=".$id."");
while($r=$res->fetch_array()){
    if($r[0]>0){
        echo "<script>alert('请先删除此分类中的子类');history.back(-1)</script>";
        exit;
    }
    else{
        $r=$conn->query("delete from category where id=".$id."");
        if($r){
        echo "<script>alert('删除分类成功');history.back(-1)</script>";
        exit;
        }
    }
    }

}

function categoryEdit($id,$pid,$category){
    $conn = db::getInstance()->connect();
    $res = $conn-> query("update category set pid=".$pid.",category='".$category."' where id=".$id."");
    if($res){
        echo "<script>alert('修改分类成功');location.href='index.php';</script>";
    }
    else{
        echo "<script>alert('修改分类失败');history.back(-1);</script>";
        exit;
    }
}
?>