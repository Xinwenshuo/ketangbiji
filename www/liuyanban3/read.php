<?php 
/*************搜索******************/



/***********搜索结束*************************/
if(isset($_GET['sousuo'])){
    $sousuo = $_GET['sousuo'];
    echo $sousuo;
    $content = file_get_contents('./mysql.txt');
    $arr = explode("&&&",$content);
    //var_dump($arr);
    
        if(in_array('ten11111',$arr)){
            echo 123;
        }
    
    //var_dump($arr1);
}else{
    $content = file_get_contents('./mysql.txt');
    //var_dump($content);
    $arr = explode("&&&",$content);
    /* var_dump($arr); */
    array_pop($arr);
}

//var_dump($arr);
$i = 1;


/*****************分页开始*************************/
//1.知道每页显示条数
$num = 3;

//2.也能算出来总的条数
$total = count($arr);

//3.总页码数
$amount = ceil($total/$num);

//4.当前在第几页
$dpage = isset($_GET['page'])?$_GET['page']:1;

// 上一页
if($dpage-1<=1){
    $prevpage = 1;
}else{
    $prevpage = $dpage-1;
}
//下一页
if($dpage+1>=$amount){
    $nextpage = $amount;
}else{
    $nextpage = $dpage+1;
}

if($dpage<1){
    $dpage = 1;
}

if($dpage>$amount){
    $dpage = $amount;
}
//5.当前在几页,跳过了多少条的公式是:
$offset = ($dpage-1)*$num;
$arr1 = array_slice($arr,$offset,$num,true);


/*****************分页结束*************************/
include './Public/head.html';
include './sou.html';

echo "<table border='1' width='100%' align='center'>";
    echo "<tr>";
        echo "<th>编号</th>";
        echo "<th>用户名</th>";
        echo "<th>留言内容</th>";
        echo "<th>操作</th>";
    echo "</tr>";
    foreach($arr as $k=>$v){
        
        $user = explode('###',$v);
        //var_dump($user);
        //echo $user[0];
        echo "<tr>";
            echo "<td>".$i++."</td>";
            echo "<td>".$user[0]."</td>";
            echo "<td>".$user[1]."</td>";
            echo "<td><a href='./del.php?id=".$k."'>删除</a>|<a href='./edit.php?id=".$k."'>编辑</a></td>";
        echo "</tr>";
       
    }
    echo "<tr>";
    echo '<td colspan="4" align="right">共'.$total.'条 '.$dpage.'/'.$amount.
    '<a href="./read.php?page=1">首页</a>
    |<a href="./read.php?page='.$prevpage.'">上一页</a>
    |<a href="read.php?page='.$nextpage.'">下一页</a>
    |<a href="./read.php?page='.$amount.'">尾页</a></td>';
    echo '</tr>';
echo "</table>";