<?php
	//获得我们要修改的id
	$id = $_POST['id'];
	//接收前端留言板上的用户名信息
	$username =$_POST['username'];
	//接收前端留言板上的留言内容信息
	$content = $_POST['content'];
	//读取mysp1.txt文档的内容
	$con =file_get_contents('./mysq1.txt');
	//将得到的字符串转换为数组
	$arr =explode('&&',$con);
	//用##拼接留言板的用户名和内容
	$str =$username.'##'.$content;
	//将新拼接的数组替换到之前的id上
	$arr[$id] =$str;
	//将数组转换成字符串并用&&拼接
	$str =implode('&&',$arr);
	//打开mysq1.txt文档,并写入删除之前内容
	$res =fopen('./mysq1.txt','w');
	//写入删除之前内容
	fwrite($res,$str);
?>