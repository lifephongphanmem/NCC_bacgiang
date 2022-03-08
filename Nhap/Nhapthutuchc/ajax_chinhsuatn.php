<script src='jquery-1.5.1.js' type='text/javascript'></script>
<?php
	include("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$h = $_GET['id_a'];$i=1;
	$sql="select * from giaytothutuc where ttthutuchc=".$h;
	$sql1=mysqli_query($con,$sql);	
	echo "<div id = 'sTTKKx' class='table-responsive'>";
		echo "<table class='table table-hover table-striped table-bordered table-advanced tablesorter display' id='table-2'>";
			echo "<thead>";
				echo "<tr>";
					echo "<th style='background-color:rgb(54, 169, 224)' width='5%'><strong style='color:rgb(255, 255, 225)'>STT</strong></th>";
					echo "<th style='background-color:rgb(54, 169, 224)' width='50%'><strong style='color:rgb(255, 255, 225)'>Tên giấy tờ</strong></th>";											
					echo "<th style='background-color:rgb(54, 169, 224)' width='8%'><strong style='color:rgb(255, 255, 225)'>Số lượng</strong></th>";					
					echo "<th style='background-color:rgb(16, 78, 211); display:none' width='30%'><strong>ttgttt</strong></th>";
				echo "</tr>";
			echo "</thead>";	
	while($row=mysqli_fetch_array($sql1)){		
		$i = $i + 1;
			echo "<tr>";
				echo "<td style='color:#0F0F10'>".($i-1)."</td>";
				echo "<td contenteditable='true' style='text-align: left; color:#0F0F10'>".$row['tengiay']."</td>";				
				echo "<td contenteditable='true' style='color:#0F0F10'>".$row['soluong']."</td>";
				echo "<td style='color:#0F0F10;display:none'>".$row['ttgttt']."</td>";
			echo "</tr>";
	}
			echo "<tr>";
				echo "<td style='color:#0F0F10'>".($i)."</td>";
				echo "<td contenteditable='true' style='text-align: left; color:#0F0F10'></td>";				
				echo "<td contenteditable='true' style='color:#0F0F10'></td>";
				echo "<td style='color:#0F0F10;display:none'></td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td style='color:#0F0F10'>".($i+1)."</td>";
				echo "<td contenteditable='true' style='text-align: left; color:#0F0F10'></td>";				
				echo "<td contenteditable='true' style='color:#0F0F10'></td>";
				echo "<td style='color:#0F0F10;display:none'></td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td style='color:#0F0F10'>".($i+2)."</td>";
				echo "<td contenteditable='true' style='text-align: left; color:#0F0F10'></td>";				
				echo "<td contenteditable='true' style='color:#0F0F10'></td>";
				echo "<td style='color:#0F0F10;display:none'></td>";
			echo "</tr>";
			echo "<tbody id='rowlist' class='rowlist'>";
			echo "</tbody>";
		echo "</table>";
	echo "</div>";
	
?>