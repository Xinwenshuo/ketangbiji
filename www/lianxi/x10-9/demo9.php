<?php

	$str = '王老板';
	$patt = '/^[\x{4e00}-\x{9fa0}]+$/u';
	echo preg_match($patt,$str)?'国产的':'进口的';