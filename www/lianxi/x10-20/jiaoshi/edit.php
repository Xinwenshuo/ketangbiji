<?php
$id = $_GET['id'];
// var_dump($id);
$fig = include './config.php';
$link = mysqli_connect($fig['HOST'],$fig['USER'],$fig['PWD']);
$db = mysqli_select_db($link,$fig['DB']);
$ch = mysqli_set_charset($link,$fig['charset']);
if(mysqli_connect_errno($link)>0){
	echo mysqli_connect_error($link);exit;
}
// var_dump($link);
$sql = "select * from jiao where id='{$id}'";
$res = mysqli_query($link,$sql);
// var_dump($res);
if($res && mysqli_num_rows($res)>0){
	$arr = mysqli_fetch_assoc($res);
}
// var_dump($arr);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改</title>
</head>
<body>
	<center>
		<h3>教师管理系统修改</h3>
		<form action="./doedit" method="POST">
			用户名: <input type="text" name="name" value="<?php echo $arr['name']; ?>"><br>
			性别: <input type="radio" name="sex" value="0"<?php echo $arr['sex']==0?'checked':''; ?>>女
				  <input type="radio" name="sex" value="1"<?php echo $arr['sex']==1?'checked':''; ?>>男
				  <input type="radio" name="sex" value="2"<?php echo $arr['sex']==2?'checked':''; ?>>不男不女<br>
			年龄: <input type="text" name="age" value="<?php echo $arr['age']; ?>"><br>
			城市: <input type="text" name="city" value="<?php echo $arr['city']; ?>"><br>
			<input type="hidden" name="id" value="<?php echo $arr['id']; ?>">
			<input type="submit" value="提交修改">
		</form>
	</center>
</body>
</html>