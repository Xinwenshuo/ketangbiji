<?php
	function aaa($i){
		if($i>1){

			return $i + aaa($i-1 );
		}else{
			return 1;
		}
		
	}
	echo aaa(10)
?>