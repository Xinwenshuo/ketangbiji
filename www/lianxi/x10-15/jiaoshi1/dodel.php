<?php
// var_dump($_GET);
$id = $_GET['id'];
$link = mysqli_connect('127.0.0.1','root','xws1998');
if(mysqli_connect_errno($link)>0){
	echo mysqli_connect_error($link);exit;
}
mysqli_select_db($link,'xin');
mysqli_set_charset($link,'utf8');
$sql = "delete from jiao where id={$id}";
// echo $sql;exit;
$result = mysqli_query($link,$sql);
// var_dump($result);exit;
if($result){
	echo "<script>alert('修改成功');location.href='./read.php'</script>";
}else{
	echo "修改失败";
}
mysqli_close($link);

?>