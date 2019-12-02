<?php
$arr=array(
'a'=>'天朝',
'b'=>'阿三,歧视',
'c'=>'棒子,歧视',
'd'=>'猴子,歧视',
'e'=>'岛国,歧视',
);
var_dump($arr);
echo '<hr/>';
echo current($arr);
echo key($arr);
echo '<hr/>';
echo next($arr);
echo next($arr);
echo '<hr/>';
echo prev($arr);
echo prev($arr);
echo '<hr/>';
echo end($arr);
echo prev($arr);
echo reset($arr);
echo current($arr);