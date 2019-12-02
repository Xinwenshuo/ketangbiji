<?php
class A{
	public $name;
}
class B{
	public $name;
}
$a = new A;
var_dump($a);
$c = $a;
if($a === $c){
	echo 'Y';
}else{
	echo 'N';
}