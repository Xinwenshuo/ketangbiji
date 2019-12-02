<?php

	class ATM{
		public function getPass(){
			return '123456';
		}
		public function checkPass($pass){
			return $pass == $this->getPass();
		}
	}
	$atm = new ATM();
	$atm -> checkPass('1234456');
	$atm -> getPass();