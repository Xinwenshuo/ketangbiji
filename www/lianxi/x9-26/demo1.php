<?php
	$res = opendir('./bin');

	var_dump(readdir($res));
	while($filename = readdir($res)){
		echo iconv('GB2312','utf-8//IGNORE',$filename).'<br />';
	}
	closedir($res);
?>