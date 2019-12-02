<?php
	$arr =array('十年生死','两茫茫','喜洋洋','灰太狼','谁让孩子看','四爹没有娘');
	$arr1 =array('郑渊洁','童话大王','舒克与贝塔','皮皮鲁与皮皮西','魔方大厦','皮皮鲁与419宗罪');
	$arr2 =array('don'=>'粉红猪小妹');
	$arr3 =array('爽姐','玉娇');
	var_dump($arr);
	var_dump($arr1);
	var_dump($arr2);
	var_dump($arr3);
	$a_arr =array_merge($arr,$arr1,$arr2,$arr3);
	var_dump($a_arr);
	