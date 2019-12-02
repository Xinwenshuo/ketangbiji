<?php
$fig = include './config.php';
$link = mysqli_connect($fig['HOST'],$fig['USER'],$fig['PWD']);
$db = mysqli_select_db($link,$fig['DB']);
$stl = mysqli_set_charset($link,$fig['charset']);
if(mysqli_connect_errno($link)>0){
	echo mysqli_connect_error($link);exit;
}
$sql = "select * from jiao ";
$res = mysqli_query($link,$sql);
// var_dump($res);
if($res && mysqli_num_rows($res)>0){
	$arr = array();
	while($res1 = mysqli_fetch_assoc($res)){
		$arr[] = $res1;
	// var_dump($arr);
	}
}
if(mysqli_num_rows($res)<=0){
	echo "没有数据<a href='./index.php'>请添加</a>";exit;
}
$i = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>查看</title>
</head>
<body>
	<center>
		<h3>教师管理系统</h3>
		<table border="1">
			<tr>
				<th>序号</th>
				<th>姓名</th>
				<th>性别</th>
				<th>年龄</th>
				<th>城市</th>
				<th>操作</th>
			</tr>
			<?php foreach($arr as $k=>$v){ ?>
			<tr>
				<td><?php echo $i++; ?></td>
				<td><?php echo $v['name']; ?></td>
				<td><?php 
					$sex = $v['sex'];
					switch($sex){
						case 0;
							echo "女";
						case 1;
							echo "男";
						case 2;
							echo "不男不女";
					}

				?></td>
				<td><?php echo $v['age']; ?></td>
				<td><?php echo $v['city']; ?></td>
				<td><a href="./del.php?id=<?php echo $v['id'];?>">删除</a> | <a href="./edit.php?id=<?php echo $v['id']?>">修改</a></td>
			</tr>
			<?php } ?>
			<a href="./index.php">添加</a>
		</table>
	</center>
</body>
</html>