<?php
	/*
		文件上传函数
		@param  string  $name  文件上传文件域的name值
		@param  string  $dir   文件保存路径
		@param  array   $allow 文件允许上传的类型
		return  string  $filename 文件名  如果失败 返回false
	 */

	function upload($name,$dir='./upload/',$allow=array('jpg','gif','jpeg','png')){
		//echo $name;exit;
		//var_dump($_FILES);exit;
		//1.判断文件上传错误
		if($_FILES[$name]['error']>0){
			//echo '上传错误';
			switch($_FILES[$name]['error']){
				case 1:
					echo '上传的文件超过了 php.ini 中upload_max_filesize 选项限制的值.';
					break;
				case 2:
					echo '上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值';
					break;
				case 3:
					echo '文件只有部分被上传.';
					break;
				case 4:
					echo '没有文件被上传.';
					break;
				case 6:
					echo '找不到临时文件夹.';
					break;
				case 7:
					echo '文件写入失败.';
					break;
			}
			return false;
		}

		//2.判断你文件上传的类型是否是你想要的类型
		//2.1允许上传的类型
		
		//2.2 获取后缀名
		$suffix = pathinfo($_FILES[$name]['name'],PATHINFO_EXTENSION);
		//echo $suffix;exit;
		//2.3 判断是否是我们允许上传的类型
		//var_dump(in_array($suffix,$allow));exit;
		if(!in_array($suffix,$allow)){
			//不允许上传的类型
			echo  '大哥你的上传类型不符合';
			return false;
		}
		//3.起名字
		$filename = date('Ymd').uniqid().mt_rand(0,9999).'.'.$suffix;
		//echo $filename;exit;
		
		//4.判断保存路径是否存在
		//4.1 得到保存路径
		
		//4.2 处理保存路径和后面的斜杠
		$save_path = rtrim($dir,'/');
		$save_path .='/';
    
		//4.3 保存路径中的时间文件夹处理
		$save_path .=date('Y/m/d/');
    
		//4.4 判断保存的路径是否存在
		if(!file_exists($save_path)){
			mkdir($save_path,777,true);
		}
    
		//4.5 拼接一个完整的保存路径
		$path = $save_path.$filename;
		//echo $path;exit;

		
		//5.判断是否是httppost方式上传
		if(!is_uploaded_file($_FILES[$name]['tmp_name'])){
			echo '滚蛋！';
			return false;
		}
		
		//6.移动图片
		if(!move_uploaded_file($_FILES[$name]['tmp_name'],$path)){
			echo '移动失败';
			return false;
		}
		
		//7.返回移动成功的图片名
		return $filename;

	} 