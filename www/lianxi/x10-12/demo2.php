<?php
$path = './bin';
function dirsize($path){


$handle = opendir($path);
$total = 0;

while($filename=readdir($handle)){
	if($filename == '.' || $filename == '..'){
		continue;
	}
	$filepath = $path.'/'.$filename;

	if(is_dir($filepath)){

		$total += dirsize($filepath);
	}else{
		$total += filesize($filepath);
	}
	
}
return $total;
closedir($handle);
}
echo dirsize($path);