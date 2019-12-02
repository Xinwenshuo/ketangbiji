<?php

abstract class aDB{
	abstract public function getAll($sql);
	abstract public function getRow($slq);
	public function demo(){
		echo '123';
	}
}
class MySQL extends aDB{
	public function getAll($sql){
		echo '查询所有数据';
	}
	public function getRow($slq){
		echo '查询一行数据';
	}
}
$db = new MySQL();
	$db->getAll(1);
	$db->getRow(1);
	$db->demo();
?>