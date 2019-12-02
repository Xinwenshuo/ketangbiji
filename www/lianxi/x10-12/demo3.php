<?php
// $handle = fopen('./file.txt','r');
// file_put_contents('./file.txt','hufeihufei',FILE_APPEND);
// $handle = fopen('./file.txt','r');
// $str = fread($handle,filesize('./file.txt'));
// echo $str;
// header('content-type:image/jpeg');
// echo file_get_contents('./1.jpg');
$handle = fopen('./file.txt','w+');
fwirte($handle,"今天热成狗了。")；
//echo ftell($handle);
rewind($handle);
$str = fread($handle,filesize('./file.txt'));
echo $str;
