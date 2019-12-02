<?php 

function getSize($fileName){
    //判断文件是否存在，如果不存在那么直接返回false
    if(!file_exists($fileName)){
        return false;
    }

    //得到文件的大小，以字节为单位的
    $fileSize = filesize($fileName);

    //根据字节来进行转换
    if($fileSize < 1024){
        return $fileSize.'Bytes';
    }else if($fileSize >= 1024 && $fileSize < pow(1024,2)){//返回1024的2次方
        return round(($fileSize/1024),2).'KB';
    }else if($fileSize >= pow(1024,2) && $fileSize < pow(1024,3)){
        return round( ($fileSize/( pow(1024,2) ) ),2).'MB';
    }else if($fileSize >= pow(1024,3)){
        return round(($fileSize/(pow(1024,3))),2).'GB';
    }
}