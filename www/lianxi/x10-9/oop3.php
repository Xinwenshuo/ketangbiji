<?php
	
	class Chick{
		public $color;//颜色
		public $jiguan;//鸡冠
		public $legs;//有几个退
		public $mao;//有鸡毛
		public $sex;//性别
		// echo '我发现你们的小鸡有点不正经';
		public function eat(){
			echo '吃虫子吃沙子';
		}
		public function say(){
			echo '咯咯哒咯咯哒..';
		}
		public function egg(){
			echo '嘎嘎嘎';
		}
	}
	$ff = new Chick();
	var_dump($ff);
	$ff->eat();
	$ff->say();
	$ff->egg();
