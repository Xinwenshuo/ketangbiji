<?php
	$str = 'ksda good gooooood good kl s ja dfs kl';
	$patt = '/g.{1,}?d/';
	preg_match_all($patt,$str,$res);
	var_dump($res);