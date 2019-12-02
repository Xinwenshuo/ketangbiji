<?php
$id = $_GET['id'];
// var_dump($id);
$cfg = include './config.php';
$link = mysqli_connect($cfg['HOST'],$cfg['USER'],$cfg['PWD']);
$root = mysqli_select_db($link,$cfg['DB']);
$stl = mysqli_set_charset($link,$cfg['charset']);
$sql = "select * from jiao where id='{$id}'";
$result = mysqli_query($link,$sql);
// var_dump($result);
if($result && mysqli_num_rows($result)>0){
	$res=mysqli_fetch_assoc($result);
	var_dump($res);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改</title>
</head>
<body>
	<center>
	<form action="./doedit.php" method="GET">
		用户名: <input type="text" name="user" value="<?php echo $res['name']?>"><br>
		性别: <input type="radio" name="sex" value="0"<?php echo $res['sex']==0? 'checked':''?>>女
		<input type="radio" name="sex" value="1"<?php echo $res['sex']==1? 'checked':''?>>男
		<input type="radio" name="sex" value="2"<?php echo $res['sex']==2? 'checked':''?>>人妖<br><br>
		年龄: <input type="text" name="age" value="<?php echo $res['age']?>"><br><br>
		城市: <input type="text" name="city" value="<?php echo $res['city']?>">
		<input type="hidden" name="id" value="<?php echo $res['id']?>">
		<input type="submit" value="提交修改">
	</form>
	</center>
</body>
</html>