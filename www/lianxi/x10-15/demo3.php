<?php
class A{
	public function fun($s){
		echo $s;
		return $this;
	}
	public function add($m){
		echo $m;
		return $this;
	}
}
$a = new A();
$a->fun('郭冰')->add('耍鸡儿');

?>