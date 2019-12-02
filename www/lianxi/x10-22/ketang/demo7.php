<?php
	class MySQL{
		public function __construct($host){
			$this->link = mysqli_connect($host,'root','xws1998');
			if(!$this->link){
				throw new Exception('连接数据库失败');
			}
		}
		public function getData($id){
			if($id == 4){
				return '查询结果';
			}else{
				throw new Exception('查询失败');
			}
		}
		public function saveData($id){
			if($id == 4){
				return true;
			}else{
				throw new Exception('更新失败');
			}
		}
	}
	try{
		$db = new MySQL('localhost');
		$db->getData(4);
		$db->saveData(4);
		echo '更新成功';
	}catch(Exception $e){
		echo $e->getMessage();
	}

?>