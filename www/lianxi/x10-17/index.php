<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言板</title>
</head>
<body>
	<center>
	<h3>留言板</h3>
	<hr>
	<a href="./index.php">添加留言</a>&#160;&#160;&#160;&#160;&#160;
	<a href="./read.php">查看留言</a><br><br>
	<form action="./write.php" method="POST">
		用户:<input type="text" name="user" ><br><br>
		头像上传: <input type="file" name="touxiang"><br><br>
		留言内容: <textarea name="content" id="" cols="50" rows="5"></textarea><br>
		<input type="submit" value="提交留言">
	</form>
	</center>
</body>
</html>