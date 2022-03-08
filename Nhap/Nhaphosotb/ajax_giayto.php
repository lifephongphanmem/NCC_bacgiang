<script src='jquery-1.5.1.js' type='text/javascript'></script>	
<?php	
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	echo "<div id = 'giayto' class='table-responsive'>";
		echo "<table class='table table-hover table-striped table-bordered table-advanced tablesorter display' id='table-4'>";
			echo "<thead>";
				echo "<tr>";
					echo "<th style='background-color:rgb(54, 169, 224)' width='6%'><strong style='color:rgb(255, 255, 225)'>STT</strong></th>";
					echo "<th style='background-color:rgb(54, 169, 224)' width='45%'><strong style='color:rgb(255, 255, 225)'>Tên giấy tờ</strong></th>";
					echo "<th style='background-color:rgb(54, 169, 224)' width='45%'><strong style='color:rgb(255, 255, 225)'>Chi tiết</strong></th>";
					echo "<th style='background-color:rgb(54, 169, 224)' width='4%'><strong style='color:rgb(255, 255, 225)'>Số lượng</strong></th>";					
				echo "</tr>";				
			echo "</thead>";
	$idhsls = $_GET['id_a'];
	$sql = "Select * From giaytotb Where idhstb = $idhsls order by chitiet";	
	$i = 0;
	//echo $sql;
	$qrct = mysqli_query($con,$sql);
			echo "<tbody id='rowlist' class='rowlist'>";
			while($rct=@mysqli_fetch_array($qrct))
			{
				$i = $i + 1;
				echo "<tr>";
					echo "<td>".$i."</td>";
					echo "<td style='text-align: left;'>".$rct['tengiayto']."</td>";
					echo "<td style='text-align: left;'>".$rct['chitiet']."</td>";
					echo "<td>".$rct['soluong']."</td>";									
				echo "</tr>";	
			}	
			echo "</tbody>";
		echo "</table>";
	echo "</div>";
?>	
	