<?php
	$arr1= array('id'=>2,'name'=>'laowang');
	var_dump($arr1);
	$arr2['name']=18;
	var_dump($arr2);
	$arr3[]=1;
	$arr2['age']=1;
	$arr3['age']=array(1,1,4,3,5);
	var_dump($arr3);
	var_dump($arr2);

	$arr4['name']=10;
	unset($arr1['id']);
	var_dump($arr1);
