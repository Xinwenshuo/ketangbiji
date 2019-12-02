<?php 

$id = $_GET['id'];

$str = file_get_contents('./mysql.txt');
$arr = explode('&&&',$str);

$newstr = $arr[$id];

$newstr1 = explode('###',$newstr);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		#con{width:550px;height:300px;margin:0px auto;}
		#con>form>input[type="submit"]{width:100px;height:30px;position:relative;left:200px;}
	</style>
</head>
<body>
	<?php include './Public/head.html';?>
	<div id="con">
        <form action="./doedit.php" method="post">
        <input type="hidden" name='id' value="<?php echo $id; ?>">
		<span>用户名:</span> <input type="text" name="username" value="<?php echo $newstr1[0]; ?>"><br/>
		<span>留言内容:</span><br/> <textarea name="content" cols="50" rows="5"><?php echo $newstr1[1]; ?></textarea><br/>
		<input type="submit" value="修改留言提交">
		</form>
	</div>
</body>
</html>