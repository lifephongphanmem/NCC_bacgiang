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
	$h = str_replace("_"," ",$_GET['id_a']);
	//echo $h;
	$chars=str_split($h);
	$count=0;
	//echo $a;
	foreach($chars as &$char)
	{
		if($char=='>')
		{
			$count++;
		}
	}	
	echo "<div id = 'sTTKK' class='table-responsive'>";
		echo "<table class='table table-hover table-striped table-bordered table-advanced tablesorter display' id='table-2'>";
			echo "<thead>";
				echo "<tr>";
					echo "<th style='background-color:rgb(54, 169, 224)' width='5%'><strong style='color:rgb(255, 255, 225)'>STT</strong></th>";
					echo "<th style='background-color:rgb(54, 169, 224)' width='50%'><strong style='color:rgb(255, 255, 225)'>Tên phương tiện, dụng cụ</strong></th>";											
					echo "<th style='background-color:rgb(54, 169, 224)' width='8%'><strong style='color:rgb(255, 255, 225)'>Niên hạn</strong></th>";
					echo "<th style='background-color:rgb(54, 169, 224)' width='8%'><strong style='color:rgb(255, 255, 225)'>Số tiền</strong></th>";
					echo "<th style='background-color:rgb(54, 169, 224)' width='12%'><strong style='color:rgb(255, 255, 225)'>Năm liền kế</strong></th>";
					echo "<th style='background-color:rgb(54, 169, 224); display:none' width='12%'><strong>phanloai</strong></th>";
					echo "<th style='background-color:rgb(54, 169, 224)' width='9%'><strong style='color:rgb(255, 255, 225)'>Thao tác</strong></th>";
				echo "</tr>";
			echo "</thead>";	
	if ($h != "")			
	{	
		$dkxoa="";
		$key1=explode('>',$h);
		for($i=0;$i<=$count-1;$i++)
		{			
			$kytu1 = explode('<',$key1[$i]);
			if ($i == 0)
				$dkxoa = $kytu1[1]."<".$kytu1[2]."<".dinhdangso(kieudouble($kytu1[3]))."<<".$kytu1[0].">";
			else
				$dkxoa = ">".$kytu1[1]."<".$kytu1[2]."<".dinhdangso(kieudouble($kytu1[3]))."<<".$kytu1[0];
			echo "<tr>";
				echo "<td style='color:#0F0F10'>".($i + 1)."</td>";
				echo "<td style='text-align: left; color:#0F0F10'>$kytu1[1]</td>";				
				echo "<td style='color:#0F0F10'>$kytu1[2]</td>";
				echo "<td style='color:#0F0F10'>".dinhdangso(kieudouble($kytu1[3]))."</td>";
				echo "<td contenteditable=true style='color:#0F0F10'></td>";
				echo "<td style='color:#0F0F10; display:none'>$kytu1[0]</td>";
				echo "<td><span class='btn btn-danger btn-xs xoa' onclick='xoa(\"$dkxoa\")'>Xóa</span></td>";										
			echo "</tr>";
		}				
	}	
			echo "<tbody id='rowlist' class='rowlist'>";
			echo "</tbody>";
		echo "</table>";
	echo "</div>";
	
?>