<?php
	function demo(){
		$b = func_num_args();
		$n = 0;
		for($a=0;$a<$b;$a++){
			$n = $n+func_get_arg($a); 
		}
			return $n;
	}
	echo demo(1,200,3,4,5,6,7,8,9,10000);