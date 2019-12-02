<?php

	$str = 'hi  this is some history book';
	// $patt = '/\bhi\b/';
	// preg_match_all($patt,$str,$res);
	// var_dump($res);
	$patt = '/\Bhi\B/';
	preg_match_all($patt,$str,$res);
	var_dump($res);
