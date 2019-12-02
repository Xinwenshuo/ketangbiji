<?php
	$id =$_POST['id'];
	$username =$_POST['username'];
	$content =$_POST['content'];
	$con =file_get_contents('./mysq1.txt');
	$arr =explode('&&',$con);
	$str =$username.'##'.$content;
	$arr[$id] =$str;
	$str =implode('&&',$arr);
	$res =fopen('./mysq1.txt','w');
	fwrite($res,$str);

?>