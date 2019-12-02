<?php
$id = $_GET['id'];
// var_dump($id);
$file = file_get_contents('mysql.txt');
// var_dump($file);
$arr = explode('&&',$file);
// var_dump($arr);
$arr1 = $arr[$id];
// var_dump($arr1);
$arr2 = explode('##',$arr1);
// var_dump($arr2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改</title>
</head>
<body>
	<center>
	<h3>修改留言</h3>
	<form action="./doedit.php" method="POST">
		用户名: <input type="text" name="user" value="<?php echo $arr2[0];?>"><br>
		修改内容: <textarea name="content"cols="50" rows="5"><?php echo $arr2[1]; ?></textarea><br>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input type="submit" value="提交修改">
	</form></center>
</body>
</html>