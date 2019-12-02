<?php
$id = $_GET['id'];
//echo $id;
$str = file_get_contents('./mysql.txt');

$arr = explode('&&&',$str);
//var_dump($arr);

unset($arr[$id]);
//var_dump($arr);

$str1 = implode('&&&',$arr);

$res = fopen('./mysql.txt','w');
$init = fwrite($res,$str1);


