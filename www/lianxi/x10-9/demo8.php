<?php

	// $str = 'hello WORLD CHinA';
	// $patt = '/\b[a-z]+\b/i';
	// preg_match_all($patt,$str,$res);
	// var_dump($res);


	$str = 'abckdj kjd
	sjkf ksdjf';
	$patt = '/.+/s';
	preg_match_all($patt,$str,$res);
	var_dump($res);