<?php
$id = $_GET['id'];
// var_dump($id);
$fig = include './config.php';
$link = mysqli_connect($fig['HOST'],$fig['USER'],$fig['PWD']);
$db = mysqli_select_db($link,$fig['DB']);
$stl = mysqli_set_charset($link,$fig['charset']);
// var_dump($link);
if(mysqli_connect_errno($link)>0){
	echo mysqli_connect_error($link);exit;
}
$sql = "delete from jiao where id='{$id}'";
// var_dump($sql);
$res = mysqli_query($link,$sql);
// var_dump($res);
if($res){
	echo "<script>('修改成功');location.href='./read.php'</script>";
}else{
	echo "删除失败 <a href='read.php'>返回</a>";
}
mysqli_close($link);
?>