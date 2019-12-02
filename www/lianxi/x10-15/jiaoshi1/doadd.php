<?php
// include './add.php';
$name = $_POST['name'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$city = $_POST['city'];
$link = mysqli_connect('127.0.0.1','root','xws1998','xin');
// var_dump($link);exit;
// if(mysqli_connect_errno($link)>0){
// 	echo mysqli_connect_error($link);exit;
// }
// mysqli_select_db($link,'xin');
mysqli_set_charset($link,'utf8');
$sql = "insert into jiao(name,sex,age,city) 
values('{$name}','{$sex}','{$age}','{$city}')";
// echo $sql ;exit;
$result = mysqli_query($link,$sql);
// var_dump($result);exit;
if($result && mysqli_affected_rows($link)>0){
	echo "<script>alert('添加成功');location.href='./read.php'</script>";
}else{
	echo '添加失败';
}
mysqli_close($link);
?>