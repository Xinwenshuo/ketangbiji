<?php 
//123###./upload/201909295d90280688485371805.jpg@@@@456&&&写入成功了
//var_dump($_POST);

include './upload.function.php';

$str = file_get_contents('mysql.txt');
//var_dump($str);
$arr = explode('&&&',$str);
//var_dump($arr);
array_pop($arr);
//var_dump($arr);
foreach($arr as $k=>$v){
    $new_arr1 = explode('###',$v);
    //var_dump($new_arr1);
    $new_arr2 = explode('@@@@',$new_arr1[1]);
    
    $new_arr2[]=$new_arr1[0];
    //var_dump($new_arr2);
    //$new_arr3[] = $new_arr2;
    $new_arr3[] = $new_arr2;
    
}
$i = 0;
echo "<table border='1' width='100%' align='center'>";
    echo "<tr>";
        echo "<th>编号</th>";
        echo "<th>用户名</th>";
        echo "<th>头像</th>";
        echo "<th>留言内容</th>";
        echo "<th>操作</th>";
    echo "</tr>";
    foreach($new_arr3 as $k=>$v){
        
        echo "<tr>";
            echo "<td>".$i++."</td>";
            echo "<td>".$v[2]."</td>";
            echo "<td><img src='".$v[0]."' width='100px'></td>";
            echo "<td>".$v[1]."</td>";
            echo "<td><a href='./del.php?id=".$k."'>删除</a>|<a href='./edit.php?id=".$k."'>编辑</a></td>";
        echo "</tr>";
    }
echo "</table>";