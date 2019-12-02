<?php
	$arr1 =array('a','b','c','d','e');
	$arr2 =array('a','b','f');
	$arr3 =array('a','b','e');
	$a =array_diff($arr1,$arr2,$arr3);
	$b =array_intersect($arr1,$arr2,$arr3);
	var_dump($a);
	var_dump($b);