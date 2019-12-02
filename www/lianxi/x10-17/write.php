<?php
// $i = $
// var_dump($_POST);
$user = $_POST['user'];
$touxiang = $_POST['touxiang'];
var_dump($touxiang);
// var_dump($user);
$content = $_POST['content'];
$arr ='&&'.$user.'##'.$content;

// var_dump($arr);
$file = './mysql.txt';
$fopen = fopen($file,'a');
$fwrite = fwrite($fopen,$arr);
fclose($fopen);
if(filesize($file)>0){
	echo '添加成功 <a href="./index.php">继续添加</a>';
}else{
	echo '添加失败 <a href="./index.php">返回</a>';
}
?>