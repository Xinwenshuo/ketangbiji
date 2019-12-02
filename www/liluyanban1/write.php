<?php
	$user =$_POST['username'];
	$content =$_POST['content'];
	$str = $user.'##'.$content.'&&';
	$handle = fopen('./mysq1.txt','a');
	$init =fwrite($handle,$str);
	fclose($handle);
	if($init>0){
		echo '留言成功';
		echo '<meta http-equiv="refresh"content="3;url=./read.php">';
		echo '三秒后自动跳转,如果不跳请砸电脑<a href="./read.php">返回</a>';

	}else{
		echo '留言失败';
	}


?>