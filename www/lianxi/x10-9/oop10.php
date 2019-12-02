<?php

	class Mysql{
		public $link;
		public function __construct(){
			$cfg = array(
				'host' => '127.0.0.1',
				'user' => 'root',
				'pwd' => 'root',
				'db' => 'test',
				'charset' => 'utf8'
			);
			$this->link=mysqli_connect($cfg['host'],$cfg['user'],$cfg['pwd'],$cfg['db']);
			mysqli_set_charset($this->link,$cfg['charset']);
		}
		public function query($sql){
			return mysqli_query($this->link,$sql);
		}
		public function getall($sql){
			$res = $this -> query($sql);
			$data = array();
			while ($row = mysqli_fetch_assoc($res)){
				$data[] = $row;
			}
			return $data;
		}

	}

	$mysql = new Mysql;
	print_r($mysql->getAll('select * from info'));