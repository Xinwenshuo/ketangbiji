<?php
	class MySQL{
		public function __construct($host){
			$this->link = mysqli_connect($host,'root','xws1998');
		}
		public function getData($id){
			if($id == 4){
				return '查询结果';
			}else{
				return false;
			}
		}
		public function saveData($id){
			if($id == 4){
				return '修改结果';
			}else{
				return false;
			}
		}
	}
		$db = new MySQL('localhost1');

		if($db->link){
			$result = $db->getData(14);
			if($result){
				$res = $db->saveData(14);
				if($res){
					echo "更新成功";
				}else{
					echo '更新失败';
				}
			}else{
				echo '获取数据失败';
			}
		}else{
			echo '连接数据库失败';
		}

	
?>