<?php
// class Human{
// 	public function __construct(){
// 		echo '555555555';
// 	}
// }
// $baby = new Human();
class Person{
	public $name;
	public $age=18;
	public $sex;
	public function say(){
		echo '我是:'.$this->name.'今年:'.$this->age.'岁,我是一个'.$this->sex;
	}
	public function __construct($name,$age=19,$sex='人妖'){
	$this->name = $name;
	$this->age = $age;
	$this->sex = $sex;
	}
}
$dl = new Person('博博');
$dl->say();
echo '<hr>';
$xm = new Person('宝宝');
$xm->say();
echo '<hr>';
$xm = new Person('冰冰');
$xm->say();
echo '<hr>';
$xm = new Person('飞飞');
$xm->say();
echo '<hr>';
$xm = new Person('刚刚');
$xm->say();

 // $Person = new Person();
// $Person->say();