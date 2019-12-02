<?php

class Mysql{
	public $link;
	public function __construct(){
		$cfg = array(
			'host' => '127.0.0.1',
			'user' => 'root',
			'pwd' => '',
			'db' => 'test',
			// 'charset' => 'utf8'
		);

		$this->link = mysqli_connect($cfg['host'],$cfg['user'],$cfg['pwd'],$cfg['db']);
		$link = set_charset('utf8');
	}
	public function query($sql){
		return mysqli_query($this->link,$sqsl);
	}
	public function getAll($sql){
		$res = $this->query($sql);
		$data = array();
		while($row = mysqli_fetch_assoc($res)){
			$data[] = $row;
		}
		return $data;
	}
}
$mysql = new Mysql;
var_dump($mysql->getall('select * from test'));

?>