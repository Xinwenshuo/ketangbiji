<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
</head>
<body>
	<center>
		<h3>教室管理系统</h3>
		<form action="doadd.php" method="POST">
			用户名: <input type="text" name="user"><br>
			性别: <input type="radio" name="sex" value="0">女
				  <input type="radio" name="sex" value="1">男
				  <input type="radio" name="sex" value="2" checked>不男不女<br>
			年龄: <input type="text" name="age"><br>
			城市: <input type="text" name="city"><br>
			<input type="submit" value="提交">
		</form>
		<a href="read.php">查看</a>
	</center>
</body>
</html>