<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>万年历</title>
</head>
<body>
	<center>
		<?php
			$year=@$_GET['y']?$_GET['y']:date('Y');
			$month=@$_GET['m']?$_GET['m']:date('m');
			$day=date('t',mktime(0,0,0,$month,1,$year));
			$w=date('w',mktime(0,0,0,$month,1,$year));
			$dy=date('Y');
			$dm=date('m');
			echo "<h3>{$year}年{$month}月</h3>";
			// echo "<h3>{$a}:{$b}:{$c}</h3>"
		?>
		
		<table width='600' border='1' >
			<tr>
				<th>星期日</th>
				<th>星期一</th>
				<th>星期二</th>
				<th>星期三</th>
				<th>星期四</th>
				<th>星期五</th>
				<th>星期六</th>
			</tr>
			<?php
				$dd=1;
				while($dd<=$day){
					echo '<tr>';
					for($i=0;$i<7;$i++){
						if(($i<$w&&$dd==1)||$dd>$day){
							echo "<td>&#160;</td>";
						}else{
							echo '<td>'.$dd.'</td>';
							$dd++;
						}
					}
					echo '</tr>';
				}

				echo "</table><br/><br/>";
				
				// $py = $year-1;
				
				if($month==1){
					$lm=12;
					$ly=$year-1;
				}else{
					$lm=$month-1;
					$ly=$year;
				}
				if($month==12){
					$nm=1;
					$ny=$year+1;
				}else{
					$nm=$month+1;
					$ny=$year;
				}
				$py=$year-1;
				$qy=$year+1;
				echo "<a href='wannianli.php?y={$py}&m={$month}'>上一年</a>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;";
				echo "<a href='wannianli.php?y={$ly}&m={$lm}'>上个月</a>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;";
				echo "<a href='wannianli.php?y={$dy}&m={$dm}'>返回当月</a>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;";
				echo "<a href='wannianli.php?y={$ny}&m={$nm}'>下个月</a>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;";
				echo "<a href='wannianli.php?y={$qy}&m={$month}'>下一年</a>";
			?>
		</table>
	</center>
	
</body>
</html>