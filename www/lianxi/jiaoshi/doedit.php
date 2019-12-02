<?php

// var_dump($id);
$id = $_POST;
$af = $_GET['id'];
var_dump($id);
var_dump($af);
// $id = ('id'=>)
include './Model/config.php';
include './Model/Model.class.php';
// $id = implode($_POST);
$jiaoshi = new Model('jiao');
$result = $jiaoshi->update($id,$af);






// var_dump($_POST);
// $id = $_GET['id'];
// $name = $_POST['name'];
// $sex = $_POST['sex'];
// $age = $_POST['age'];
// $city = $_POST['city'];
// $link = mysqli_connect('127.0.0.1','root','xws1998');
// if(mysqli_connect_errno($link)>0){
// 	echo mysqli_connect_error($link);exit;
// }
// // var_dump($link);
// mysqli_select_db($link,'xin');
// mysqli_set_charset($link,'utf8');
// $sql = "update jiao set name='{$name}',sex='{$sex}',age='{$age}',city='{$city}' where id={$id}";
// $result = mysqli_query($link,$sql);
// // var_dump($result);exit;
// // var_dump(mysqli_affected_rows($link));exit;
// if($result && mysqli_affected_rows($link)>0){
// 	echo '修改成功<a href="./read.php">返回</a>';
// }else{
// 	echo '修改失败<a href="./edit.php?id='.$id.'">返回</a>';
// }

?>