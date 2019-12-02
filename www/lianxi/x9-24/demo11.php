<?php
	 $str = '1,2,3,4,5,6,7,2,3,4,5,6';
	 $a =explode(',',$str);
	 var_dump($a);
	 $str1 = join($a,'A');
	 $str2 = implode($a,'B');
	 echo $str1.'<br>';
	 echo $str2;
	 var_dump($str2);

	  $arr = array(1,2,3,4,5,6,7,8);
	  var_dump($arr);
	  shuffle($arr);
	  var_dump($arr);