<?php

// var_dump(is_dir('../PHP总结.docx'));
// var_dump(is_readable('../PHP总结.docx'));
// var_dump(is_writable('../PHP总结.docx'));
// var_dump(is_executable('../PHP总结.docx'));
// var_dump(filesize('../PHP总结.docx'));

function getSize($fileName){
	if(!file_exists($fileName)){
		return false;
	}
	$fileSize = filesize($fileName);
	if($fileSize < 1024){
		return $fileSize.'Bytes';
	}else if($fileSize >=1024 && $fileSize < pow(1024,2)){
		return ($fileSize/1024).'KB';
	}else if($fileSize >= pow(1024,2) && $fileSize < pow(1024,3)){
        return round( ($fileSize/( pow(1024,2) ) ),2).'MB';
    }else if($fileSize >= pow(1024,3)){
        return round(($fileSize/(pow(1024,3))),2).'GB';
    }
}
var_dump(getSize('../PHP总结.docx'));