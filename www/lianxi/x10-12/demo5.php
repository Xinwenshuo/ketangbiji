<?php

function delDir($path){
	if(is_file($path)){
		unlink($path);
	}
	$handle = opendir($path);
	while($filename = readdir($handle)){
		if($filename== '.' ||$filename == '..'){
			continue;
		}
		$filepath = $path.'/'.$filename;
		if(is_file($filepath)){
			unlink($filepath);
		}
		if(is_dir($filepath)){
			delDir($filepath);
		}
	}
	closedir($handle);
	rmdir($path);
}
delDir('./laowang1');