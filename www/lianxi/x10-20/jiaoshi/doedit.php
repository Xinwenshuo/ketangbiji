<?php
$id = $_POST['id'];
// var_dump($id);
$name = $_POST['name'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$city = $_POST['city'];
$fig = include './config.php';
$link = mysqli_connect($fig['HOST'],$fig['USER'],$fig['PWD']);
$db = mysqli_select_db($link, $fig['DB']);
$ch = mysqli_set_charset($link,$fig['charset']);
if(mysqli_connect_errno($link)>0){
	echo mysqli_connect_error($link);exit;
}
// var_dump($link);
$sql = "update jiao set name='{$name}',sex='{$sex}',age='{$age}',city='{$city}' where id='{$id}'";
$res = mysqli_query($link,$sql);
// var_dump($res);
if($res){
	echo "修改成功<a href='./read.php'>返回</a>";
}else{
	echo "修改失败<a href='./read.php'>返回</a>";
}
?>