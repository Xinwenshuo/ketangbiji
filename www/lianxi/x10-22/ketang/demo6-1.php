<?php

	class MySQL{
		//连接数据库
		public function __construct($host){
			$this->link = mysqli_connect($host,'root','xws1998');
		}
		//获取数据库
		public function getData($id){
			if($id == 4){
				return '查询结果';
			}else{
				return false;
			}
		}
		//更新数据库
		public function saveData($id){
			if($id == 4){
				return true;
			}else{
				return false;
			}
		}
	}
	$db = new MySQL('localhost');
	if($db->link){
		//连接成功
		$result = $db->getData(4);
		if($result){
			//获取数据成功
			$res = $db->savData(4);
			if($res){
				echo '更新成功';
			}else{
				echo '更新失败';
			}
		}else{
			echo '获取数据库失败';
		}
	}else{
		echo '连接数据库失败';
	}
?>