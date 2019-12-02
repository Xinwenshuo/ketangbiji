<?php
	//判断我们要删除谁
	if(isset($_GET['id'])){
		//获得我们要删除的id
		$id = $_GET['id'];
		//读取文件mysq1.txt
		$str = file_get_contents('./mysq1.txt');
		//将得到的字符串转换为数组
		$arr = explode('&&',$str);
		//删除id对应的数组
		unset($arr[$id]);
		//将删除之后的内容用&&拼接起来
		$str = implode('&&',$arr);
		//打开mysq1.txt文档,并写入删除之前内容
		$handle = fopen('./mysq1.txt','w');
		//将$str信息写入到$handle文档.
		$init = fwrite($handle,$str);
		//判断是否删除成功
		if($init>0){

			header('location:read.php');
		}else{
			header('location:read.php');
		}
	}else{
		echo '删除失败';
	}
?>