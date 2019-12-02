<?php
$name = $_POST['user'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$city = $_POST['city'];
$fig = include './config.php';
$link = mysqli_connect($fig['HOST'],$fig['USER'],$fig['PWD'],$fig['DB']);
if(mysqli_connect_errno($link)>0){
	echo mysqli_connect_error($link);exit;
}
// $ll = mysqli_select_db($link);
$stl = mysqli_set_charset($link,$fig['charset']);
// var_dump($link);
$sql = "insert into jiao(name,sex,age,city) values('{$name}','{$sex}','{$age}','{$city}')";
$res = mysqli_query($link,$sql);
// var_dump($res);
if($res && mysqli_affected_rows($link)>0){
	echo "添加成功 <a href='./read.php'>返回</a>";
}else{
	echo "添加失败 <a href='inedx.php'>返回</a>";
}

?>