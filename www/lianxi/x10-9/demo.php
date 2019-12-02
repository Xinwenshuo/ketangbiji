<?php
	$str = 'tommorw is 12 another day o2o , you dont | bird $me i dont bird you';
	$patt = '/\W{1,}/';
	var_dump(preg_split($patt, $str));

?>