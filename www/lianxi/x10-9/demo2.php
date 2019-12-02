<?php
	
	$str = 'a     b     hello   world  ';
	$patt = '/\s{1,}/';
	$laowang = preg_replace($patt,'|',$str);
	var_dump($laowang);