<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.d1{background:#fff;text-align:center;background-image: url('https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=1886178590,2510893248&fm=26&gp=0.jpg');background-repeat: no-repeat;
		background-size: cover;
	}
	</style>
</head>
<body class="d1">
	<div>
		
	
	<h3 style="color:#fff;font-size: 30px;">添加用户</h3><br>
	<hr>
	<form action="doadd.php" method='post' style="font-size: 25px;color:#fff;"><br><br>
		姓名:<input type="text" name='name'><br/><br>
		性别: <input type="radio" name='sex' value='0'>女
			  <input type="radio" name='sex' value='1'>男
			  <input type="radio" name='sex' value='2' checked>保密<br/><br>
		年龄: <input type="text" name='age'><br><br>
		城市: <input type="text" name='city'><br><br>
		<input type="submit" value='添加' style='width:100px;height:30px;'>
	</form></div>
</body>
</html>