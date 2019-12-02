<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文件上传</title>
</head>
<body>
	<form action="./upload.php" method="post" enctype="multipart/form-data">
		选择文件: <input type="file" name="pic">
		<input type="submit" value="上传文件">
	</form>
</body>
</html>