<?php
	
	// $str = 'hello o2o b10 250 234';
	// $patt = '/\b[a-zA-Z]+\b|\b[0-9]+\b/';
	// preg_match_all($patt,$str,$res);
	// var_dump($res);

	$str = 'ipad,iphone,imac,ipod,iodnfd,innmncv,xiaomi';
	$patt = '/\bi(pad|phone|mac|pod)\b/';
	preg_match_all($patt,$str,$res);
	var_dump($res);