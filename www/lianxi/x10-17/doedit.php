<?php
$user = $_POST['user'];
// var_dump($user);
$content = $_POST['content'];
// var_dump($content);
$id = $_POST['id'];
// var_dump($id);

$file = file_get_contents('./mysql.txt');
$arr = explode('&&',$file);
// var_dump($arr);
// array_pop($arr);
$arr1 = $user.'##'.$content;
// var_dump($arr1);
$arr[$id] = $arr1;
// var_dump($arr);
$arr2 = implode('&&',$arr);
var_dump($arr2);
$fopen = fopen('./mysql.txt','w');
$fwrite = fwrite($fopen,$arr2);
if($fwrite>0){
	echo '修改成功 <a href="./read.php">返回</a>';
}else{
	echo '修改失败 <a href="./read.php">返回</a>';
}
?>