<?php
	class Ren{
		public $name = '老王';
		public function gao(){
			echo $this->name.'搞PHP';

		}
	}
	$ren = new Ren();
	$ren->gao();
	$ren2 = new Ren();
	$ren2 -> name = 'b哥';
	echo $ren2->gao();