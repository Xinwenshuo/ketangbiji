<?php
$file = $_POST;
// $_FILES['myfile']['name'];
var_dump($_FILES);
var_dump($file);
// move_uploaded_file($_FILES['pic']['tmp_name'],'./'.$_FILES['pic']['name']);


// mkdir('./upload');
$dir = './upload/'.date('Y/m/d/');
// mkdir($dir,777,true);
if(!file_exists($dir)){
	mkdir($dir,777,true);
}
$suffix = pathinfo($_FILES['pic']['name'],PATHINFO_EXTENSION);
echo $suffix;
$filename = date('Ymd').uniqid().mt_rand(0,99999).'.'.$suffix;
var_dump($filename);
// $filename1 = $filename;
echo $filename;
if($a= move_uploaded_file($_FILES['pic']['tmp_name'],$dir.$filename)){
	echo '成功';
}else{
	echo '失败';
}
// echo $a;
// $dir = './biran/'.date('Y/m/d/');
// if(!file_exists($dir)){
// 	mkdir($dir,777,true);
// }
// $suffix = pathinfo($_FILES['pic']['name'],PATHINFO_EXTENSION);

// $filename = date('Ymd').uniqid().mt_rand(0,9999).'.'.$suffix;

// if(!is_uploaded_file($_FILES)['pic']['tmp_name'])){
// 	echo $filename;
// }

?>