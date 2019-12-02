<?php
	// function t(){
	// 	echo '1';
	// 	t();
	// }
	// t();

	function sum($n){
		if($n>1){
			return $n+sum($n-1);
		
		}else{
			return 1;
		}
		
	}
	echo sum(4);