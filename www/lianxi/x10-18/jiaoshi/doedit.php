<?php
$id = $_GET['id'];
// var_dump($id);
$name = $_GET['user'];
// var_dump($name);
$sex = $_GET['sex'];
// var_dump($sex);
$age = $_GET['age'];
// var_dump($age);
$city = $_GET['city'];
// var_dump($city);
$cfg = include './config.php';
$link = mysqli_connect($cfg['HOST'],$cfg['USER'],$cfg['PWD']);
// var_dump($link);
if(mysqli_connect_errno($link)>0){
	echo mysqli_connect_error($link);exit;
}
$root = mysqli_select_db($link,$cfg['DB']);
$stl = mysqli_set_charset($link,$cfg['charset']);
$sql = "update jiao set name='{$name}',sex='{$sex}',age='{$age}',city='{$city}' where id='{$id}'";
// var_dump($sql);
$result = mysqli_query($link,$sql);
// var_dump($result);
if($result && mysqli_affected_rows($link)>0){
	echo "修改成功 <a href='./read.php'>返回</a>";
}else{
	echo "修改失败";
}
?>