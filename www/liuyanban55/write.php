<?php 
//var_dump($_POST);
include './upload.function.php';

$mingzi = htmlspecialchars($_POST['username']);
$neirong = htmlspecialchars($_POST['content']);

$touxiang = upload('pic');
$suoyou = $mingzi.'###'.$touxiang.'@@@@'.$neirong."&&&";
//echo $suoyou;

$res = fopen('./mysql.txt','a+');
$init = fwrite($res,$suoyou);
//老王想知道,写瑕疵了,这玩意返回值是啥?不一定是个0
if($init){
    echo "写入成功了";
}else{
    echo "写入失败.<a href='".$_SERVER['HTTP_REFERER']."'>点我重新填写留言内容</a>";
}


