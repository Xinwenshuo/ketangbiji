<?php
	// function t1(){
	// 	global $a;
	// 	$a+=1;
	// 	echo $a."<br>";
	// }
	// $a=2;
	// echo $a;
	// echo "<br>";
	// t1();

	function t1(){
		static $a=2;
		$a+=1;
		return $a;
	}
	var_dump(t1());
	var_dump(t1());
	var_dump(t1());