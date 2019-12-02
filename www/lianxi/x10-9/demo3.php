<?php
	$str = 'laeng sjodf ljga n ew sf  e fs  fewf ';
	$patt = '/\b[a-zA-Z]{1,4}\b/';
	preg_match_all($patt,$str,$res);
	var_dump($res);

	$s = 'gooooood, gooood,gooooooooood';
	$patt1 = '/go{1,}d/';
	$a = preg_replace($patt1,'god',$s);
	var_dump($a);

?>