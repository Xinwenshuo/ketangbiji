<?php
	class Duck{
		public $name;
		public $sex;
		public $age;

		public function say(){
			echo '霍霍';
		}
	}
	$tly = new DUCK;
	var_dump($tly);
	$tly->name = '钢宝博冰飞';
	$tly->sex ='公';
	$tly->age = 250;
	echo '名字:'.$tly->name.'<br>';
	echo '性别:'.$tly->sex.'<br>';
	echo '年龄:'.$tly->age.'<br>';
	$tly->say();