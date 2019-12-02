<?php
	$arr = range(1,100,3);
	var_dump($arr);
	$arr2 = range('A','Z',2);
	var_dump($arr2);
	$arr3 = array(1,2,3,4,5,6,7,8,9=>array(1,2,3,4,5,6),11,12,14);
	var_dump(array_chunk($arr3,5));