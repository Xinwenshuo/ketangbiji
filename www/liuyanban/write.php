<?php
	include './upload.function.php';
	//接收前端留言板上的用户名信息
	$user = $_POST['username'];
	//接收前端留言板上的留言内容信息
	$content = $_POST['content'];

	$touxiang = upload('pic');
	//将接收的信息用##分隔开,在用&&分隔每段的信息
	$str = $user.'##'.$touxiang.'@@'.$content.'&&';
	//打开txt文档打开读写权限.
	$handle = fopen('./mysq1.txt','a+');
	//将$str信息写入到$handle文档.
	$init = fwrite($handle, $str);
	//关闭文件
	// fclose($handle);
	//判断是否写入成功
	if($init>0){
		echo '留言成功';
		//三秒后自动跳转
		echo '<meta http-equiv="refresh" content="1;url=./read.php">';
		//如果不跳转可以点击跳转
		echo '三秒后自动跳转,如果不跳转请点击<a href="./read.php">返回</a>';
	}else{
		echo '留言失败';
	}
?>