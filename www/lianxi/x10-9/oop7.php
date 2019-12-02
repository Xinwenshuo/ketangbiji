<?php


	// class Human{
	// 	public function __construct(){
	// 		echo '55555';
	// 	}
	// }
	// $baby = new Human();

	class Person{
		public $name;
		public $age = 18;
		public $sex;

		public function say(){
			echo '我是:'.$this->name.'今年:'.$this->age.'岁,我是一个'.$this->sex;
		}
		// public function __construct($name,$age=19,$sex='淫妖'){
		// 	$this->name = $name;
		// 	$this->age = $age;
		// 	$this->sex = $sex;

		// }
		$dl = new Person('武大郎');
		$dl->say();
		echo '<hr/>';
		$xm = new Person('西门大官人');
		$xm ->say();
	}