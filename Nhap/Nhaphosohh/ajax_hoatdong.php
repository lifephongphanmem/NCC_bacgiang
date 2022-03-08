<script src='jquery-1.5.1.js' type='text/javascript'></script>
<?php	
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	echo "<div id = 'hoatdong' class='table-responsive'>";
		echo "<table class='table table-hover table-striped table-bordered table-advanced tablesorter display' id='table-3'>";
			echo "<thead>";
				echo "<tr>";
					echo "<th style='background-color:rgb(54, 169, 224)' width='6%'><strong style='color:rgb(255, 255, 225)'>STT</strong></th>";
					echo "<th style='background-color:rgb(54, 169, 224)' width='12%'><strong style='color:rgb(255, 255, 225)'>Thời gian từ</strong></th>";
					echo "<th style='background-color:rgb(54, 169, 224)' width='12%'><strong style='color:rgb(255, 255, 225)'>Thời gian đến</strong></th>";
					echo "<th style='background-color:rgb(54, 169, 224)' width='35%'><strong style='color:rgb(255, 255, 225)'>Cơ quan, đơn vị</strong></th>";
					echo "<th style='background-color:rgb(54, 169, 224)' width='35%'><strong style='color:rgb(255, 255, 225)'>Địa bàn hoạt động</strong></th>";						
				echo "</tr>";				
			echo "</thead>";
	$idhsls = $_GET['id_a'];
	$sql = "Select * From quatrinhhdhh Where idhshh = $idhsls";	
	$i = 0;
	//echo $sql;
	$qrct = mysqli_query($con,$sql);		
			echo "<tbody id='rowlist' class='rowlist'>";
	while($rct=@mysqli_fetch_array($qrct))
		{	
			$i = $i + 1;
				echo "<tr>";
					echo "<td>".$i."</td>";
					echo "<td style='text-align: left;'>".$rct['tgtu']."</td>";
					echo "<td style='text-align: left;'>".$rct['tgden']."</td>";
					echo "<td style='text-align: left;'>".$rct['coquan']."</td>";
					echo "<td style='text-align: left;'>".$rct['diaban']."</td>";
				echo "</tr>";
		}		
			echo "</tbody>";
		echo "</table>";
	echo "</div>";	
?>	