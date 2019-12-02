<?php
	$lily = 3;
	echo $lily;
	echo '<br>';
	class Person{
		public function __construct(){
			echo '出生了<br/>';
		}
		public function yy(){
			echo 'yyyy';
		}
		public function __destruct(){
			echo '夭折了<br/>';
		}
	}
	$p = new Person();
	$p->yy();
	unset($p);
	echo '那年，她十八岁，我也十八岁，夕阳的午后，我看到了她与一个男孩一起，男孩手里有我送给她的手链<br/>';
