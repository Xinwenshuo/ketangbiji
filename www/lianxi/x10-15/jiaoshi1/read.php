<?php
$link = mysqli_connect('127.0.0.1','root','xws1998');
if(mysqli_connect_errno($link)>0){
	echo mysqli_connect_error($link);exit;
}
mysqli_select_db($link,'xin');
mysqli_set_charset($link,'utf8');
$sql = 'select id,name,sex,age,city from jiao';
$result = mysqli_query($link,$sql);
// echo $sql ;exit;
// var_dump($result);exit;
if($result && mysqli_num_rows($result)>=0){
	$userlist = array();
	while($row = mysqli_fetch_assoc($result)){
		$userlist[] = $row;

	}
	}
	if($result && mysqli_num_rows($result)<=0){
		echo '还没有数据 <a href="index.php">返回</a>';exit;
	// /if(mysql_affected_rows($userlist)==0){
			// echo '还没有数据 <a href="index.php">返回</a>'.exit;
		// }
}
$i = 1;
 // var_dump($userlist);exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.a1{
			text-decoration: none;color: #111;
		}
		.a1:hover{
			color: #FF8C69;
		}
		.a2{
			margin-left: 630px;
		}
	
		.d1{background:#fff;text-align:center;background-image: url('https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=1886178590,2510893248&fm=26&gp=0.jpg');background-repeat: no-repeat;
		background-size: cover;
	}
	
	</style>
</head>
<body class="d1">
	<center>
		<h1>教师管理系统v0.1</h1>
	</center>	
	<table border="1" width='800' align="center" cellpadding="0" cellspacing="0" >
		<tr style="line-height:50px;font-size: 18px;">
			<th>编号</th>
			<th>姓名</th>
			<th>年龄</th>
			<th>性别</th>
			<th>城市</th>
			<th>操作</th>
		</tr>
		 
		<?php  foreach($userlist as $value){;
		//var_dump($value); ?> 
		<tr style=" text-align:center">
			<td style="line-height:30px;width:40px;"><?php echo $i++;?></td>
			<td width="110px"><?php echo $value['name'];?></td>
			<td width="80px"><?php echo $value['age'];?></td>
			
			<td width="80px"><?php 

				$sex = $value['sex'];
				switch($sex){
					case 0;
						echo '女';
						break;
					case 1;
						echo '男';
						break;
					case 2;
						echo '保密';
						break;
				}
			?></td>
			<td width="180px"><?php echo $value['city'];?></td>
			<td width="140px">
				<a href="./dodel.php?id=<?php echo $value['id']?> "class=a1>删除</a> 
				| <a href="./edit.php?id=<?php echo $value['id']?>"class=a1>编辑</a>
			</td>
		</tr>
	<?php } ?>
	</table>
	<a href="./index.php" class='a1 a2'>返回继续添加</a>
</body>
</html>
<?php  mysqli_close($link); ?>