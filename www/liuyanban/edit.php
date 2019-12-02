<?php
	//获得我们要修改的id
	$id = $_GET['id'];
	//读取文件mysq1.txt
	$str =file_get_contents('./mysq1.txt');
	//将得到的字符串转换为数组
	$arr =explode('&&',$str);
	//通过id获取对应的数组
	$newstr =$arr[$id];
	//再次分隔得到用户名和留言内容
	$newarr =explode('##',$newstr);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言板</title>
	<style>
		#con{width:550px;height:300px;margin:0px auto;}
		#con>form>input[type="submit"]{width:100px;height:30px;position:relative;left:150px;}
	</style>
</head>
<body>
	<!-- <center> -->
	<?php include'./Public/head.html';?>
	<div id="con">
		<form action="doeit.php" method="post">
			<input type="hidden" name="id" id="" value="<?php echo $id?>">
			<span>用户名:</span><br /><input type="text" name="username" value="<?php  echo $newarr[0]?>"><br />
			<span>留言内容:</span><br/>
			<textarea name="content" id="" cols="75" rows="7">
			<?php  echo $newarr[1]?>
				
			</textarea><br />
			<input type="submit" value="修改">
		</form>
		
	</div>
	<!-- </center> -->
</body>
</html>

