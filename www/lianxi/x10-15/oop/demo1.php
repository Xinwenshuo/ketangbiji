<?php
$lily = 3;
echo $lily;
echo '<br>';
class Person{
	public function __construct(){
		echo '出生<br/>';
	}
	public function yy(){
		echo 'yyyy';
	}
	public function __destruct(){
		echo '夭折了<br/>';
	}
}
$p = new Person();
unset($p);
echo '那年,他十八岁,我也十八岁,';

?>