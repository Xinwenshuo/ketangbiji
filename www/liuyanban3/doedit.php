<?php 

$id = $_POST['id'];
$username = $_POST['username'];
$content = $_POST['content'];

$con = file_get_contents('./mysql.txt');

$arr = explode('&&&',$con);

$str = $username.'###'.$content;
//var_dump($arr);
//var_dump($str);
//echo $id;
//var_dump($_POST);
$arr[$id] = $str;
$str = implode('&&&',$arr);

$res = fopen('./mysql.txt','w');
fwrite($res,$str);
//var_dump($arr);