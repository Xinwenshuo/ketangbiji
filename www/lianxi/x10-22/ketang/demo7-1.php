<?php

	class MySQL{
		public function __construct($host){
			$this->link = mysqli_connect($host,'root','xws1998');
			if(!$this->link){
				throw new Exception('连接失败');
			}
		}
		public function getData($id){
			if($id == 4){
				return '查询结果';
			}else{
				throw new Exception('获取失败');
			}
		}
		public function saveData($id){
			if($id == 4){
				return '修改数据';
			}else{
				throw new Exception('更改失败');
			}
		}


	}


	try{
		$db = new MySQL('localhost');
		$db->getData(4);
		$db->saveData(4);
		echo '修改成功';
	}catch(Exception $e){
		echo $e->getMessage();
	}
?>