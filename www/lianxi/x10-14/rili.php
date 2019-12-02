<?php
	$n = @$_GET['y']?$_GET['y']:date('Y');
	$y = @$_GET['m']?$_GET['m']:date('m');
	$yed = date('t',mktime(0,0,0,$y,1,$n));
	$w = date('w',mktime(0,0,0,$y,1,$n));
	// var_dump($n);
	// var_dump($y);
	// var_dump($yed);
	// var_dump($w);
echo '<center>';
	echo '<h1>万年历</h1>';
	echo '<h3>'.$n.'年'.$y.'月</h3>';
	echo '<table width="800" border="1">';
		echo '<tr>';
			echo '<th>星期日</th>';
			echo '<th>星期一</th>';
			echo '<th>星期二</th>';
			echo '<th>星期三</th>';
			echo '<th>星期四</th>';
			echo '<th>星期五</th>';
			echo '<th>星期六</th>';
		echo '</tr>';
		$dd = 1;
		while($dd<=$yed){
			echo '<tr>';
			for($i=0;$i<7;$i++){
				if(($i<$w && $dd==1)||$dd>$yed){
					echo '<td>&#160;</td>';
				}else{
					echo '<td>'.$dd.'</td>';
					$dd++;
				}
			}
			echo '</tr>';	
		}
	echo '</table>';
	$sn = $xn = $n;
	// var_dump($n);
	$sy=$y-1;
	if($sy==0){
		$sy = 12;
		$sn--;
	}
	// var_dump($sn);
	$zy=$y+1;
	if($zy==13){
		$zy=1;
		$xn++;
	}
	// var_dump($xn);
	$syn=$sn-1;
	$sxn=$xn+1;
echo "<a href='rili.php?&y={$syn}&m={$y}'>上一个年</a>&#160;&#160;&#160;&#160;&#160;";
echo "<a href='rili.php?&y={$sn}&m={$sy}'>上一个月</a>&#160;&#160;&#160;&#160;&#160;";
echo "<a href='rili.php?&y={$xn}&m={$zy}'>下一个月</a>&#160;&#160;&#160;&#160;&#160;";
echo "<a href='rili.php?&y={$sxn}&m={$y}'>下一个年</a>";

echo '</center>';

?>