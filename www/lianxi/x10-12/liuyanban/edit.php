<?php
$id = $_GET['id'];
$str = file_get_contents('./mysql.txt');
$arr = explode('&&',$str);
$newstr = $arr[$id];
$newarr = explode('##',$newstr);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改</title>
</head>
<body>
		<style>
		#con{width:500px;height:300px;margin:0px auto;}
		#con>form>input[type='submit']{width:100px;height:30px;position:relative;left:200px;}
	</style>
</head>
<body>
	<?php include'head.html';?>
	<div id='con'>
		<form action="write.php" method='post'>
			<span>用户名:</span>
			<input type="text" name='username' value="<?php echo $newarr[0]?>" <br/>
			<span>留言板内容</span><br>
			<textarea name="content" cols="50" rows="5" value="<?php echo $newarr[1]?>"></textarea><br>
			<input type="submit" value='修改'>
		</form>
	</div>
</body>
</html>
