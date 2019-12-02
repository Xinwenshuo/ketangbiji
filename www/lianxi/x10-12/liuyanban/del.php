<?php
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$str = file_get_contents('./mysql.txt');
	$arr = explode('&&',$str);
	unset($arr[$id]);
	$str = implode('&&',$arr);
	$handle = fopen('./mysql.txt','w');
	$init = fwrite($handle,$str);
	if($init>0){
		echo '删除成功';
		header('location:read.php');
	}else{
		echo '删除失败';
		header('location:read.php');
	}
}else{
	echo '删不了,胡歌的吻';
}
