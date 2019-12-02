<?php
$id = $_GET['id'];
// var_dump($id);
$cfg = include './config.php';
$link = mysqli_connect($cfg['HOST'],$cfg['USER'],$cfg['PWD']);
// var_dump($link);
$root = mysqli_select_db($link,$cfg['DB']);
$stl = mysqli_set_charset($link,$cfg['charset']);
$sql = "delete from jiao where id='{$id}'";
$result = mysqli_query($link,$sql);
// var_dump($result);
if($result){
	echo "删除成功 <a href='./read.php'>返回查看</a>";
}else{
	echo "删除失败 <a href='./read.php'>返回删除</a>";
}
?>