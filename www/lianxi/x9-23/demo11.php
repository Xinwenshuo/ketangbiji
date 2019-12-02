<?php
	$arr1[2]= 1;
	$arr1[10]='牛夫人';
	$arr1[5]='人';
	$arr1[2]='www.mmp.com';
	$arr1[ ]=57;
	var_dump($arr1);

	$arr2['id']=1;
	$arr2['name']='澳洲车神';
	$arr2['sex']='女';
	$arr2['url']='弄弄哦';
	var_dump($arr2);

	$a= array('a'=>'test1','b'=>'test2','c'=>'test3','d'=>'test4','e'=>'test5');
	$a['ww']='xingixng';
	$a[ ]='xingixng';
	$a['a']='你们';
	unset($a['b']);
	var_dump($a);

	
