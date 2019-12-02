<?php
	echo '<center>';
	$year = @$_GET['y']?$_GET['y']:date('Y');
	$month = @$_GET['m']?$_GET['m']:date('m');
	$b = date('t',mktime(0,0,0,$month,1,$year));
	$w = date('w',mktime(0,0,0,$month,1,$year));
	$t = date('d');
	echo '<h2>'.$year.'年'.$month.'月'.$t.'号</h2>';
echo '<table border="1" width="800" align="center" cellpadding="0" cellspacing="0" height="30px">';
	echo '<tr height="40px"align="center">';
		echo '<td>星期日</td>';
		echo '<td>星期一</td>';
		echo '<td>星期二</td>';
		echo '<td>星期三</td>';
		echo '<td>星期四</td>';
		echo '<td>星期五</td>';
		echo '<td>星期六</td>';
	echo '</tr>';
	$i = 1;
	while($i<=$b){
		echo '<tr align="center"height="30px">';
		for($z=0;$z<7;$z++){
			if(($z<$w && $i==1)||$i>$b){
				echo '<td>&#160;</td>';
			}else{
				echo '<td>'.$i.'</td>';
				$i++;
			}
			
		}
		echo '</tr>';
	}
	$sn = $xn =$year;
	$shang = $month-1;
	if($shang==0){
		$shang = 12;
		$sn--;
	}
	$xia = $month+1;
	if($xia==13){
		$xia = 1;
		$xn++;
	}
	$syn = $year-1;
	$xyn = $year+1;
	echo "<a href='wannianli.php?y={$syn}&m={$month}'>上一年</a>&#160;&#160;&#160;&#160;&#160;";
	echo "<a href='wannianli.php?y={$sn}&m={$shang}'>上一月</a>&#160;&#160;&#160;&#160;&#160;";
	echo "<a href='wannianli.php?y={$xn}&m={$xia}'>下一月</a>&#160;&#160;&#160;&#160;&#160;";
	echo "<a href='wannianli.php?y={$xyn}&m={$month}'>下一年</a><br/>";
	echo "";
echo '</table>';
echo '</center>';
?>