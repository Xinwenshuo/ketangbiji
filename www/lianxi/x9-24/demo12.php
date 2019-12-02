<?php
	// date_default_timezone_set('UTC');
	echo time().'<br>';
	echo date('Y年m月d日 H:i:s').'<br>';
	echo mktime(16,50,56,9,24,2019).'<br>';
	echo strtotime('-3 day').'<br>';
	echo strtotime('3 day').'<br>';
	echo $start = microtime(true);