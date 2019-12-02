<?php
include './upload.function.php';
$user = htmlspecialchars($_POST['username']);
$content = htmlspecialchars($_POST['content']);
//写如文件
$touxiang = upload('pic');
$str = $user.'##'.$touxiang.'@@'.$content.'&&';
$handle = fopen('./mysql.txt','a+');

$init = fwrite($handle,$str);
// var_dump($init);
fclose($handle);

if($init>0){
	echo '留言成功';
	echo '<meta http-equiv="refresh" content="1;url=./read.php">';
	echo '三秒后自动跳转,如果不跳转请点击<a href="./real.php">返回</a>';
}else{
	echo '留言失败';
}