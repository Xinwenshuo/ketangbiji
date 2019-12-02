<?php
	class Single{
		public $rand;
		static public $ob = null;
		protected function __construct(){
			$this->rand = mt_rand(100,999);
		}
		static public function singIng(){
			if(Single::$ob === null){
				Single::$ob = new Single();
			}
			return Single::$ob;
		}
	}
	$c = Single::singIng();
	var_dump($c);
	$d = Single::singIng();
	var_dump($d);
	$e = Single::singIng();
	var_dump($e);
	$f = Single::singIng();
	var_dump($f);
	// $a = new Single();
	// var_dump($a);
	// $b = new Single();
	// var_dump($b);

?>