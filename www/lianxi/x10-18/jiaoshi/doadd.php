<?php
$name = $_POST['name'];
$sex = $_POST['sex'];
$age = $_POST['age'];
// var_dump($age);
$city = $_POST['city'];
// var_dump($city);
$cfg = include './config.php';
// var_dump($cfg);
$link = mysqli_connect($cfg['HOST'],$cfg['USER'],$cfg['PWD'],$cfg['DB']);
// var_dump($link);
if(mysqli_connect_errno($link)>0){
	echo mysqli_connect_error($link);exit;
}
// mysqli_select_db($link,$sge['DB']);
mysqli_set_charset($link,$cfg['charset']);
// var_dump($link);
$sql = "insert into jiao(name,sex,age,city) values('{$name}','{$sex}','{$age}','{$city}')";
// var_dump($sql);
$rseult = mysqli_query($link,$sql);
// var_dump($rseult);
if($rseult && mysqli_affected_rows($link)>0){
	echo '添加成功 <a href="./index.php">返回 </a><a href="./read.php"> 查看数据</a>';
}else{
	echo '添加失败';
}
?>