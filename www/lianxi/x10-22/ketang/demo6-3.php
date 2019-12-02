<?php

	class MySQL{
		public function __construct($host){
			$this->link = mysqli_connect($host,'root','xws1998');
		}
		public function getData($id){
			if($id ==4 ){
				return '查询结果';
			}else{
				return false;
			}
		}
		public function saveData($id){
			if($id ==4 ){
				return '修改结果';
			}else{
				return false;
			}
		}
	}

	$db = new MySQL('localhost');
	if($db->link){
		$resutl = $db->getData(4);
		if($resutl){
			$res = $db->saveData(4);
			if($res){
				echo '修改成功';
			}else{
				echo '修改失败';
			}
		}else{
			echo '获取失败';
		}
	}else{
		echo '连接数据库失败';
	}
?>