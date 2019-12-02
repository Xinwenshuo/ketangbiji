<?php
 var_dump($_GET);
$id = implode($_GET);

include './Model/config.php';
include './Model/Model.class.php';
$jiaoshi = new Model('jiao');
$result = $jiaoshi->del($id);
// var_dump($result);
if($result>0){
	echo '修改成功<a href="./read.php">返回</a>';
}else{
	echo '修改失败<a href="./edit.php?id='.$id.'">返回</a>';
}

?>