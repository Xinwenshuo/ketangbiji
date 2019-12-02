<?php
// class Single{
// 	public $rand;
// 	public function __construct(){
// 		$this->rand = mt_rand(100,999);
// 	}
// }
// $a = new Single();
// // var_dump($a);
// $b = new Single();
// // var_dump($b);
// print_r($a);
// print_r($b);



// class Single{
// 	public $raed;
// 	protected function __construct(){
// 		$this->read = mt_rand(13,99);
// 	}
// }
// $a = new Single();
// $b = new Single();
// print_r($a);
// print_r($b);



// class Single{
// 	public $read;
// 	protected function __construct(){
// 		$this->read = mt_rand(1111,9999);
// 	}
// 	public function getIns(){
// 		return new Single();
// 	}
// }
// $a = new Single;
// $b = new Single;
// print_r($a);
// print_r($b);



// class Single{
// 	public $rand;
// 	protected function __construct(){
// 		$this->rand = mt_rand(1111,9999);
// 	}
// 	static public function getIns(){
// 		return new Single();
// 	}

// }
// $a = Single::getIns();
// var_dump($a);
// $b = Single::getIns();
// var_dump($b);




// class Single{
// 	public $rand;
// 	static public $ob=null;
// 	protected function __construct(){
// 		$this->rand = mt_rand(11111,99999);
// 	}
// 	static public function getIns(){
// 		if(Single::$ob === null){
// 			Single::$ob = new Single();
// 		}
// 		return Single::$ob;
// 	}
// }
// $a = Single::getIns();
// var_dump($a);
// $b = Single::getIns();
// var_dump($b);
// $c = Single::getIns();
// var_dump($c);


final class Single {
	public $rand;
	static $ob=null;
	final protected function __construct(){
		$this->rand = mt_rand(1111,9999);
	}
	static public function getIns(){
		if(Single::$ob === null){
			Single::$ob = new Single;
		}
		return Single::$ob;
	}
}
$a = Single::getIns();
$b = Single::getIns();
$c = Single::getIns();
var_dump($a);
var_dump($b);
var_dump($c);
class Test extends Single{
	public function __construct(){
		var_dump(rand(111,999));
	}
}
new Test();
?>