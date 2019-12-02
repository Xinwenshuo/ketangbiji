<?php
	class A{
		public $name = '广州';
		protected $sex = '郑州';
		public function test(){
			echo $this -> sex;
		}
	}
	$p = new A;
	echo $p->name;
	$p->test();