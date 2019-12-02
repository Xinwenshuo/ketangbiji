<?php

	class A{
		public function youQain(){
			echo "老子有钱";
		}
	}
	class Aa extends A{
		public function qiong(){
			echo '我是真的穷';
		}
	}
	$erzi = new Aa();
	$erzi->youQain();
	$erzi->qiong();