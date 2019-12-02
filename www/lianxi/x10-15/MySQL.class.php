<?php
class MySQL{
	public $link;

	public function __construct(){
		$cfg = include './config.php';
		
		$this->link = mysqli_connect($cfg['HOST'],$cfg['USER'],$cfg['PWD'],$cfg['DB']);
		// $this->link = set_charset('utf8');
	}
	public function getAll($sql){
		
		$res = mysqli_query($this->link,$sql);
		
		if($res){
			echo '插入成功';
		}else{
			echo '插入失败';
		}
	}
}



?>