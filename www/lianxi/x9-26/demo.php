<?php
	$path = './home/httpd/laownag/demo.php';
	var_dump(pathinfo($path,2));
	$file = basename($path,'exe');
	$file2 = dirname($path);
	echo $file2.$file;
?>