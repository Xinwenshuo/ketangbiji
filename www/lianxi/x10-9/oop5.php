<?php

	define('NUM',20);
	class Person{
		public $name = '狗蛋';
		public $name2;

		public $age = NUM;
		public $sex = 5.5;
		public $a = 5;
		public $d = true;
		public $c = null;
		public $s = array(1,2,3);
		public function say($num=10){
			echo $num;
		}
	}
	$ren = new Person();
	var_dump($ren);
	$ren->a;