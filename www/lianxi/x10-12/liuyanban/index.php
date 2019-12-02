<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言页</title>
	<style>
		#con{width:500px;height:300px;margin:0px auto;}
		#con>form>input[type='submit']{width:100px;height:30px;position:relative;left:200px;}
	</style>
</head>
<body>
	<?php include'head.html';?>
	<div id='con'>
		<form action="write.php" method='post'enctype="multipart/form-data">
			<span>用户名:</span>
			<input type="text" name='username'><br/>
			<span>留言板内容</span><br>
			<textarea name="content" cols="50" rows="5"></textarea><br>
			<input type="file"name='pic'>
			<input type="submit" value='留言'>
		</form>
	</div>
</body>
</html>