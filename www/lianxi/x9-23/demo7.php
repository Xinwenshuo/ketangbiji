<?php
	$arr=array(
		0=>array('name'=>'猛猛','age'=>17,'sex'=>'妹纸'),
		1=>array('name'=>'东东','age'=>17,'sex'=>'少女'),
		2=>array('name'=>'南南','age'=>27,'sex'=>'妖人'),
		3=>array('name'=>'西西','age'=>37,'sex'=>'妖人'),
		4=>array('name'=>'北北','age'=>47,'sex'=>'妖人'),

		);
	var_dump($arr);
	foreach($arr as $k=>$v){
		echo $k .'<br/>';
	
	var_dump($v);
	foreach($v as $k1 =>$v1){
		echo $k1 .'---'.$v1.'<br />';
	}
	}
	foreach($arr as $key=>$value){
		echo $value['name'].'<br>';
		echo $value['age'].'<br>';
		echo $value['sex'].'<br>';
	}
