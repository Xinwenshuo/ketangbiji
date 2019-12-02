<?php
// var_dump($_GET);
$id = $_GET['id'];
$link = mysqli_connect('127.0.0.1','root','xws1998');
mysqli_select_db($link,'xin');
mysqli_set_charset($link,'utf8');
$sql = "select * from jiao where id={$id}";
// var_dump($sql);exit;
$result = mysqli_query($link,$sql);
// var_dump($result);
if($result && mysqli_num_rows($result)>0){
	$user = mysqli_fetch_assoc($result);
}
// var_dump($user);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>demo</title>
	<style>
		.d1{background:#fff;text-align:center;background-image: url('https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=1886178590,2510893248&fm=26&gp=0.jpg');background-repeat: no-repeat;
		background-size: cover;
	}
	</style>
</head>
<body class="d1">
	<center>
		<h3 style="color:#fff;font-size: 30px;">编辑用户</h3>
		<hr>
		<form action="doedit.php?id=<?php echo $id?>" method="post" style="font-size: 25px;color:#fff;">
		姓名: <input type="text" name="name" value="<?php echo $user['name']?>"><br><br>
		性别: <input type="radio" name="sex" value="0"<?php echo $user['sex']==0? 'checked':''?>>女
			  <input type="radio" name="sex" value="1"<?php echo $user['sex']==1? 'checked':''?>>男
			  <input type="radio" name="sex" value="2"<?php echo $user['sex']==2? 'checked':''?>>保密<br><br>
		年龄: <input type="text" name="age" value="<?php echo $user['age']?>"><br><br>
		城市: <input type="text" name="city" value="<?php echo $user['city']?>"><br>

		<input type="submit" value="修改"  style='width:100px;height:30px;'>
		</form>
	</center>
</body>
</html>
<?php mysqli_close($link)?>