<?php
	$path_parts = pathinfo('./demo1.php');
	
	var_dump($path_parts);
	echo $path_parts['dirname'].'<br>';
	echo $path_parts['basename'].'<br>';
	echo $path_parts['extension'].'<br>';
	$handle = opendir('./bin');
	var_dump($handle);
	var_dump(readdir($handle));
	var_dump(readdir($handle));
	var_dump(readdir($handle));
	var_dump(readdir($handle));
	while($filename = readdir($handle)){
		echo $filename.'<br>';
	}
	closedir($handle);