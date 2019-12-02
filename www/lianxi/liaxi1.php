<?php
echo '<select>';
for($i=1916;$i<=2019;$i++){
    echo '<option>'.$i.'</option>';
}
echo '</select>';

echo '<table border="1" width="800" align="center">';
for($i=0;$i<10;$i++){
if($i % 2 !=0){
$bgcolor="green";
}else{
$bgcolor="yellow";
}
echo '<tr bgcolor="'.$bgcolor.'">';
for($j=0;$j<10;$j++){
echo '<td>1</td>';
}
echo '</tr>';
}
echo '</table>';
echo '<table border="1" width="800" align="center">';
//echo '<tr>';
for($i=0;$i<100;$i++){
if($i % 10 == 0){if($i % 20 == 0){
    //我是偶数行
    echo '<tr bgcolor="green">';
    }else{
    //我是奇数行
    echo '<tr bgcolor="gold">';
    }
    }
    echo '<td>'.$i.'</td>';
    if($i % 10 == 9){
    echo '</tr>';
    }
    }
    //echo '</tr>';
    echo '</table>';
    $j = 1;
for(;$j<=10;$j++){
echo $j.'<br/>';
}
echo '<hr/>';
for($i=1;$i<=10;$i++){
    echo $i.'<br/>';
    }
    echo '<hr/>';
    $k=1;
for(;$k<=10;){
echo $k.'<br/>';
$k++;
}
echo '<hr/>';
$y = 1;
for(;;){
if($y>10){
break;//跳出循环
}
echo $y.'<br/>';
$y++;
}
$i = 1;
do{
echo $i.'<br/>';
$i++;
}while($i<10);
echo $i;
echo "<table border='1'>";
for ($i=1; $i <= 9; $i++){
echo "<tr>";
for($j=1;$j<=$i;$j++){
echo "<td>".$i."*".$j."=".$i*$j."</td>";
}
echo "</tr>";
}
echo "</table>";
echo "<hr />";
echo "<table border='1'>";
for ($i=1; $i <= 9; $i++){
echo "<tr>";
for ($z=0; $z < 9-$i; $z++) {
echo "<td>&nbsp;</td>";
}
for($j=1;$j<=$i;$j++){
echo "<td>".$i."*".$j."=".$i*$j."</td>";
}
echo "</tr>";
}
echo "</table>";
echo "<hr />";
?>