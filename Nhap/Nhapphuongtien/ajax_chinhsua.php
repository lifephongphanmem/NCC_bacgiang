<script src='jquery-1.5.1.js' type='text/javascript'></script>
<?php	
function dinhdangso($so)
	{
		$kq = "";
		if ($so > 0)
			$kq = number_format($so);
		return $kq;	
	}
function kieudouble($so)
{
	$kq = 0;
	if ($so != "")
		$kq = (float)$so;
	else
		$kq = 0;	
	return $kq;	
}
	include("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$h = $_GET['id_a'];$i=1;$dkxoa="";
	$sql="select * from ctphuongtien where idphuongtien=".$h;
	$sql1=mysqli_query($con,$sql);	
	echo "<div id = 'sTTKK' class='table-responsive'>";
		echo "<table class='table table-hover table-striped table-bordered table-advanced tablesorter display' id='table-2'>";
			echo "<thead>";
				echo "<tr>";
					echo "<th style='background-color:rgb(54, 169, 224)' width='5%'><strong style='color:rgb(255, 255, 225)'>STT</strong></th>";
					echo "<th style='background-color:rgb(54, 169, 224)' width='50%'><strong style='color:rgb(255, 255, 225)'>Tên phương tiện, dụng cụ</strong></th>";											
					echo "<th style='background-color:rgb(54, 169, 224)' width='8%'><strong style='color:rgb(255, 255, 225)'>Niên hạn</strong></th>";
					echo "<th style='background-color:rgb(54, 169, 224)' width='8%'><strong style='color:rgb(255, 255, 225)'>Số tiền</strong></th>";
					echo "<th style='background-color:rgb(54, 169, 224)' width='12%'><strong style='color:rgb(255, 255, 225)'>Năm liền kế</strong></th>";
					echo "<th style='background-color:rgb(16, 78, 211); display:none' width='12%'><strong>phanloai</strong></th>";
					echo "<th style='background-color:rgb(16, 78, 211); display:none' width='12%'><strong>phanloai</strong></th>";
					echo "<th style='background-color:rgb(16, 78, 211); display:none' width='12%'><strong>phanloai</strong></th>";
					echo "<th style='background-color:rgb(54, 169, 224)' width='9%'><strong style='color:rgb(255, 255, 225)'>Thao tác</strong></th>";
				echo "</tr>";
			echo "</thead>";	
	while($row=mysqli_fetch_array($sql1)){
		$dkxoa=$row['idctpt']."<".$row['tenphuongtien']."<".$row['nienhan']."<".$row['sotien']."<".$row['namcaplk']."<".$row['phanloai'];
		$i = $i + 1;
			echo "<tr>";
				echo "<td style='color:#0F0F10'>".($i-1)."</td>";
				echo "<td style='text-align: left; color:#0F0F10'>".$row['tenphuongtien']."</td>";				
				echo "<td style='color:#0F0F10'>".$row['nienhan']."</td>";
				echo "<td style='color:#0F0F10'>".dinhdangso(kieudouble($row['sotien']))."</td>";
				echo "<td contenteditable=true style='color:#0F0F10'>".$row['namcaplk']."</td>";
				echo "<td style='color:#0F0F10; display:none'>".$row['phanloai']."</td>";
				echo "<td style='color:#0F0F10; display:none'>".$row['idctpt']."</td>";
				echo "<td style='color:#0F0F10; display:none'>pt</td>";
				echo "<td><span class='btn btn-danger btn-xs xoa' onclick='xoa(\"$dkxoa\")'>Xóa</span></td>";
			echo "</tr>";
	}		
			echo "<tbody id='rowlist' class='rowlist'>";
			echo "</tbody>";
		echo "</table>";
	echo "</div>";
	
?>