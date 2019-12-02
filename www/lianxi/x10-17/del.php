<?php
if(isset($_GET['id'])){
	$id = ($_GET['id']);
	$file = file_get_contents('mysql.txt','w');

$arr = explode('&&',$file);
// array_pop($arr);

	// var_dump($arr);
unset($arr[$id]);

$str = implode('&&',$arr);
// $str = $arr1[''];
$fopen = fopen('mysql.txt','w');
$str1 = fwrite($fopen,$str);
// var_dump($ste1);

// fclose($fopen);
if($str1>0){
	header('location:read.php');;
}else{
	
}
}else{
	echo '删除失败';
}


?>