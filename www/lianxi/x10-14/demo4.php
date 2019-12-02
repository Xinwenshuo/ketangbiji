<?php
class ATM{
	protected function getPass(){
		return '123456';
	}
	public function checkPass($pass){
		return $pass == $this->getPass();
	}
}
$atm = new ATM();
echo $atm->checkPass('123456');

// $atm->getPass();