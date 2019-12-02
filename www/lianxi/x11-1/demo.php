<?php

$link = mysqli_connect('127.0.0.1','root','xws1998');
if(mysqli_connect_errno($link)>0){
	echo mysqli_connect_error($link);exit;
}
// var_dump($link);exit;
mysqli_select_db($link,'xin');
mysqli_set_charset($link,'utf8');
$sql = "select * from jiao";
$u = mysqli_query($link,$sql);
var_dump($u);
if($u && mysqli_affected_rows($link)>0){
	$arr =array();
while($row = mysqli_fetch_assoc($u)){
	$arr[] = $row;
	var_dump($arr);
}
}else{
	echo "失败";
}
// mysql_close($link);
?>