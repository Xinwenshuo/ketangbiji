<?php

class Person{
	public $name;
	public $age=18;
	public $sex;
	public function say(){
	echo '我是:'.$this->name.'今年:'.$this->age.'岁,我是一个'.$this->sex ;
	}
	public function __construct($age=19,$name=2,$sex='淫妖'){
	$this->name = $name;
	$this->age = $age;
	$this->sex = $sex;
	}
}
$dl = new Person();
$dl->say();
echo '<hr/>';
$xm = new Person('西门庆');
$xm->say();
?>