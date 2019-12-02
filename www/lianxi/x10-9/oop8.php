<?php
	
	class Person{
		public $name;
		public function Person($name){
			$this->name=$name.'######';
		}
	
		public function __construct($name){
			$this->name=$name;
		}
	}
	$p = new Person('jack');
	var_dump($p);
	
	unset($p);