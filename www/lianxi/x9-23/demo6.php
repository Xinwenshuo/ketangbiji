<?php
	$arr=array('id'=>1,'name'=>'萝卜哥','zhiye'=>'萝卜干');
	var_dump($arr);
	// foreach($arr as $val){
	// 	echo $val.'<br/>';
	// }

	foreach($arr as $key => $val){
		echo $key.'---'.$val.'<br/>';
	}