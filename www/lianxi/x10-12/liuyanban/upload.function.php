<?PHP
	function upload($name,$dir='./upload/',$allow=array('jpg','gif','jpeg','png')){
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
        $suffix = pathinfo($_FILES[$name]['name'],PATHINFO_EXTENSION);
        
        if(!in_array($suffix,$allow)){
            echo "大哥,你这类似也不对啊,我们要求必须是图片类型的";
            return false;
        }
		//3.起名字
		$filename = date('Ymd').uniqid().mt_rand(0,999999).'.'.$suffix;
        //4.判断保存路径是否存在
        $save_path = rtrim($dir,'/');
        $save_path .= '/';
        // echo $save_path;exit;
		if(!file_exists($save_path)){
            mkdir($save_path,777,true);
        }
		$path = $save_path.$filename;
		//6.移动图片
		if(!move_uploaded_file($_FILES[$name]['tmp_name'],$path)){
            echo "移动失败";
            return false;
        }
        return $path;
		//7.返回移动成功的图片名
    }
    