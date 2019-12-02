<?php
	$arr =array(
		1,
		2,
		3=>array(
			4,
			5,
			6,
			7=>array(
				8,
				9,
				10
			),
			11,
		),
		12,
		13
	);
	$a =count($arr,true);
	var_dump($a);