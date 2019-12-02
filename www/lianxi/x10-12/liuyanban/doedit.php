<?php
$username = $_POST['username'];
$contents = htmlspecialchars($_POST['content']);
$id = $_GET['id'];
$con = file_get_contents('./mysql.txt');
$arr = explode('&&',$con);
$str = $username.'##'.$contents;
$arr['$id'] = $str;
$newstr = implode('&&',$arr);
$handle = fopen('./mysql.txt','w');
$init = fwrite($handle,$newstr);
if($init>0){
	echo '修改成功<a href="./read.php">返回</a>';
}else{
	echo '修改失败';
}
?>