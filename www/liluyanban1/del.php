<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$str =file_get_contents('./mysq1.txt');
		$arr =explode('&&',$str);
		unset($arr[$id]);
		$str = implode('&&',$arr);
		$handle =fopen('./mysq1.txt','w');
		$init =fwrite($handle,$str);
		if($init>0){
			header('location:read.php');
		}else{
			header('location:read.php');
		}
	}else{
		echo '删除失败';
	}


?>