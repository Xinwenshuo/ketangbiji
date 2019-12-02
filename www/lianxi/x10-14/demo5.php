<?php
class A{
	public function youQian(){
		echo '老子有钱';
	}
}
class Aa extends A{
	public function youQian(){
		echo '我是真穷';
	}
}
$erzi = new Aa();
// $erzi->qiong();
$erzi->youQian();