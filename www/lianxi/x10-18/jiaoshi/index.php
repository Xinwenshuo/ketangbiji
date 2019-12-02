<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>教师</title>
</head>
<body>
	<h2>添加用户</h2>
	<hr>
	<form action="./doadd.php"  method="post">
		姓名: <input type="text" name="name"><br><br>
		性别: <input type="radio" name="sex" value="0">女
			  <input type="radio" name="sex" value="1">男
			  <input type="radio" name="sex" value="2" checked>人妖<br><br>
		年龄: <input type="text" name="age" id=""><br><br>
		城市: <input type="text" name="city" ><br>
		<input type="submit" value="提交">
		
	</form>
	<a href="./read.php">查看</a>
</body>
</html>