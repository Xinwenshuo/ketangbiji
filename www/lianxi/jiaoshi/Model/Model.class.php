<?php
class Model{
	//连接数据数据库的对象;
	public $link;
	//表名
	public $tabName;
	//1自动连接数据库
	public function __construct($tabName){
		//调用连接数据库
		$this->getConnect();
		//将自身的数据赋给$taName;
		$this->tabName = $tabName;
	}

	//4查询所有的数据
	public function select(){
		//将要查询的库名赋给变量
		$sql = "select * from {$this->tabName}";
		//返回一个二维数组
		return $this->query($sql);
	}

	//查询一个id的数据
	public function find($id){
		$sql = "select * from {$this->tabName} where id={$id}";
		$userinfo = $this->query($sql);
		 return $userinfo[0];
	}
	//查询数据的个数
	public function count(){
		$sql = "select count(*) as xiaoxinxin from {$this->tabName}";
		$total = $this->query($sql);
		return $total[0]['xiaoxinxin'];
	}
	//添加数据
	public function add($data){
		$key = array_keys($data);
		$value =array_values($data);
		$keys = implode(',',$key);
		$values = implode("','",$value);
		// var_dump($key);
		// var_dump($value);exit;
		$sql = "insert into {$this->tabName}({$keys}) values('{$values}')";
		return $this->execute($sql);
	}
	//删除数据
	public function del($id){
		// var_dump($id);
		$sql = "delete from {$this->tabName} where id={$id}";
		// var_dump($sql);
		return $this->execute($sql);
	}
	//修改数据
	public function update($data,$id){
		// var_dump($data);
		// $key = array_keys($data);
		// $value =array_values($data);
		// // var_dump($key);
		// // var_dump($value);
		// $aa[] =$key; 
		// $aa[] =$value; 
		// var_dump($aa);
		// foreach($aa as $key=>$value){
		// 	var_dump($key);
		// 	var_dump($value);exit;
		// 	$ao = $key."="."'{$value}'";
		// 	$sql = "update {$this->tabName} set {$ao}   where id={$id}";
		// 	var_dump($sql);
		// 	return $this->execute($sql);
		// 	var_dump($sql);
		}		
		// 

		// for($i=0;$i<=$key;$i++){
		// 	$ao = $key.'='.$value.',';exit;
		
		// var_dump($ao);
		// $keys = implode(',',$key);
		// $values = implode("','",$value);
		// $k = explode(",",$keys);
		// $v = explode(",",$values);
		// var_dump($k);
		// var_dump($v);
		// $vk = array_merge($k,$v);
		// $kv = $k."=".$v;
		// var_dump($vk);
		
		
		// var_dump($sql);exit;
	}

	/**************方法***************************/
	//2连接数据库方法
	protected function getConnect(){
		//引入mysql配置文件
		// include './config.php';
		//连接数据库并返回到$link
		$this->link = mysqli_connect(HOST,USER,PWD);
		//判断连接是否成功,
		if(mysqli_connect_errno($this->link)>0){
			//输出连接错误信息
			echo mysqli_connect_error($this->link);exit;
		}
		//连接库名
		mysqli_select_db($this->link,DB);
		//连接字符接
		mysqli_set_charset($this->link,CHARSET);
	}

	//查询的方法
	public function query($sql){
		//发送要查询的数据
		$res = mysqli_query($this->link,$sql);
		//判断发送的语句行数是否为零
		// $list = array();
		if($res && mysqli_num_rows($res)>0){
			//循环出来的数组赋给$list变成二维数组
			while($row = mysqli_fetch_assoc($res)){
				$list[] = $row;
			}
		}
		return $list;
		// var_dump($list);
	}

	public function execute($sql){
		$res = mysqli_query($this->link,$sql);
		// var_dump($res);
		if($res && mysqli_affected_rows($this->link)>0){
			if(mysqli_insert_id($this->link)){
				return mysqli_insert_id($this->link);
			}
			return true;
		}else{
			return false;
		}
	}


	//3在整个文件结束后运行这个函数
	public function __destuct(){
		//关闭这个文件
		mysqli_close($this->link);
	}
}
// $jiaoshi = new Model('jiao');
// $id = 1;
// $jiaoshi->del($id);
// $data['name'] = '狼';
// $data['sex'] = 1;
// $data['age'] =19;
// $data['city'] = '祖上厉害';

// $jiaoshi->add($data);
// var_dump($jiaoshi->select());
// var_dump($jiaoshi->find(24))
// $arr = array('name'=>'alng','sex'=>2,'age'=>32,'city'=>'浮点数')
// var_dump($arr);
// echo $jiaoshi->add();
// echo $jiaoshi->count();

?>