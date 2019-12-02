<?php

class Single{
	public $read;
	static public $ob = null;
	protected function __construct(){
		$this->read = mt_rand(122,999);
	}
	static public function getIns(){
		if(Single::$ob===null){
			Single::$ob = new Single();
		}
		return Single::$ob;
	}
}
	$ab = Single::getIns();
	var_dump($ab);
	$ac = Single::getIns();
	var_dump($ac);
?>