<script src='jquery-1.5.1.js' type='text/javascript'></script>
<?php	
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	echo "<div id = 'thannhan' class='table-responsive'>";
		echo "<table class='table table-hover table-striped table-bordered table-advanced tablesorter display' id='table-3'>";
			echo "<thead>";
				echo "<tr>";
					echo "<th style='background-color:rgb(54, 169, 224)' width='6%'><strong style='color:rgb(255, 255, 225)'>STT</strong></th>";
					echo "<th style='background-color:rgb(54, 169, 224)' width='20%'><strong style='color:rgb(255, 255, 225)'>Họ và tên</strong></th>";
					echo "<th style='background-color:rgb(54, 169, 224)' width='8%'><strong style='color:rgb(255, 255, 225)'>Năm sinh</strong></th>";
					echo "<th style='background-color:rgb(54, 169, 224)' width='6%'><strong style='color:rgb(255, 255, 225)'>Giới tính</strong></th>";
					echo "<th style='background-color:rgb(54, 169, 224)' width='30%'><strong style='color:rgb(255, 255, 225)'>Quan hệ</strong></th>";	
					echo "<th style='background-color:rgb(54, 169, 224)' width='30%'><strong style='color:rgb(255, 255, 225)'>Trú Quán</strong></th>";						
				echo "</tr>";				
			echo "</thead>";
	$idhsls = $_GET['id_a'];
	$sql = "Select * From thannhantb Where idhstb = $idhsls";	
	$i = 0;
	//echo $sql;
	$qrct = mysqli_query($con,$sql);		
			echo "<tbody id='rowlist' class='rowlist'>";
	while($rct=@mysqli_fetch_array($qrct))
		{	
			$i = $i + 1;
				echo "<tr>";
					echo "<td>".$i."</td>";
					echo "<td style='text-align: left;'>".$rct['hoten']."</td>";
					echo "<td>".$rct['ngaysinh']."</td>";
					echo "<td>".$rct['gioitinh']."</td>";
					echo "<td style='text-align: left;'>".$rct['quanhe']."</td>";
					echo "<td style='text-align: left;'>".$rct['truquan']."</td>";
				echo "</tr>";
		}		
			echo "</tbody>";
		echo "</table>";
	echo "</div>";	
?>	