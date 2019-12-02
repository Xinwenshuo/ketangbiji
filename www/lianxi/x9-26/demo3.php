<?php
	//4 可读  2可写  1可执行
	// $a = mkdir('./laowang/laowang3/laowang5/nihao',777,true);
	// var_dump($a);
	rmdir('./laowang/laowang3');
	touch('./666.txt');
	unlink('./666.txt');
?>