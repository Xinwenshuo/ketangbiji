<?php
	
	$a = $_GET['shuzi'];
	if ($a<1 ) {
		echo '襁褓';
	}elseif($a>=1  && $a<8){
		echo '金童玉女';
	}elseif($a>=8 && $a<20){
		echo '舞象之年';
	}elseif($a>=20 && $a<30){
		echo '虎狼之年';
	}elseif($a >=30 && $a <40){
		echo '而立之年';
	}elseif($a >=40 && $a <50){
		echo '不惑之年';
	}elseif($a >=50 && $a <60){
		echo '知命之年';
	}elseif($a >=60 && $a <70){
		echo '花甲之年';
	}elseif($a >=70 && $a <80){
		echo '古稀之年';
	}elseif($a >=80 && $a <90){
		echo '耄耋之年';
	}elseif($a >=90 && $a <100){
		echo '鲐背之年';
	}elseif($a >=100){
		echo '期颐之年';
	}





?>