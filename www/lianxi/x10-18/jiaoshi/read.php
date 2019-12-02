<?php
// $name = $_POST['name'];
// $sex = $_POST['sex'];
// $age = $_POST['age'];
// // var_dump($age);
// $city = $_POST['city'];
$cfg = include './config.php';
$link = mysqli_connect($cfg['HOST'],$cfg['USER'],$cfg['PWD']);
if(mysqli_connect_errno($link)>0){
	echo mysqli_connect_error($link);exit;
}
mysqli_select_db($link,$cfg['DB']);
mysqli_set_charset($link,$cfg['charset']);
/****************分页开始************************/
//每页显示的条数
$num = 5;
//总条数
$sql = "select * from jiao";
$result = mysqli_query($link,$sql);
// var_dump($result);
if($result && mysqli_num_rows($result)>0){
	$arr = array() ;
	while($row = mysqli_fetch_assoc($result)){
	// var_dump($row);
	$arr[] =$row; 
}
}	
// var_dump($arr);
	// var_dump($userlist);
// if(mysqli_num_rows($result)<=0){
// 	echo '还没有数据 <a href="./index.php">返回</a>';
// }
//获得总条数
$total = count($arr);
var_dump($total);
//总页数
$amount = ceil($total/$num);
// echo $amount;
//当前页码
$page = empty($_GET['page3'])?'1':$_GET['page3'];
$page = max($page,1);
$page = min($page,$amount);

if($page<1){
	$page = 1;
}
if($page>=$amount){
	$page=$amount;
}
//上
if($page-1<=1){
	$prevs = 1;
}else{
	$prevs = $page-1;
}
//下
if($page+1>=$amount){
	$prevx = $amount;
}else{
	$prevx = $page+1;
}



// var_dump($page);
//偏移量
$offset = ($page-1)*$num;
$newinfo = array_slice($arr, $offset,$num,true);





// exit;
$i=1;
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
		<table border="1" width="800px">
			<tr>
				<td>序号</td>
				<td>用户名</td>
				<td>性别</td>
				<td>年龄</td>
				<td>内容</td>
				<td>操作</td>
			</tr>
			<?php foreach($newinfo as $k=>$v){
					 //var_dump($v);?>
				<tr>
					<td><?php echo $i++ ?></td>
					<td><?php echo $v['name'] ?></td>
					<td><?php 
					$sex = $v['sex'];
					switch($sex){
						case 0;
							echo '女';
							break;
						case 1;
							echo '男';
							break;
						case 2;
							echo '人妖';
							break;
					}
					 ?></td>
					<td><?php echo $v['age'] ?></td>
					<td><?php echo $v['city'] ?></td>
					<td><a href="./dodel.php?id=<?php echo $v['id']?>">删除</a> | <a href="./edit.php?id=<?php echo $v['id']?>">修改</a></td>
				</tr>
				<?php } ?>
				<!-- <?php //endforeach; ?> -->
				<?php
		echo "<tr>";
			echo '<td colspan="6" align="right">';
            echo '<a href="./read.php?page3=1">首页</a>';
            echo '| <a href="./read.php?page3='.$prevs.'">上一页</a>';
            echo '| <a href="./read.php?page3='.$prevx.'">下一页</a> ';
            echo '| <a href="./read.php?page3='.$amount.'>">尾页</a></td>';
		echo '</tr>';
			?>
			
		</table>
		<a href="./index.php">返回添加</a>
	</center>
</body>
</html>