<script src='jquery-1.5.1.js' type='text/javascript'></script>
<?php
	include("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");//$i=0;
	$h =explode('>',$_GET['id_a']);$i=0;$sql="";
	if ($h[0]=="ah")
		$sql="select idhsah as idhs,hoten,ngaysinh,truquan from hosoah where xa='".str_replace('_',' ',$h[1])."'";
	else if ($h[0]=="bb")
		$sql="select idhsbb as idhs,hoten,ngaysinh,truquan from hosobb where xa='".str_replace('_',' ',$h[1])."'";
	else if ($h[0]=="bm")
		$sql="select idhsbm as idhs,hoten,ngaysinh,truquan from hosobm where xa='".str_replace('_',' ',$h[1])."'";
	else if ($h[0]=="ls")
		$sql="select idhsls as idhs,hoten,ngaysinh,truquan from hosols where xa='".str_replace('_',' ',$h[1])."'";
	else if ($h[0]=="tb")
		$sql="select idhstb as idhs,hoten,ngaysinh,truquan from hosotb where xa='".str_replace('_',' ',$h[1])."'";
	else if ($h[0]=="hh")
		$sql="select idhshh as idhs,hoten,ngaysinh,truquan from hosohh where xa='".str_replace('_',' ',$h[1])."'";
	else if ($h[0]=="kc")
		$sql="select idhskc as idhs,hoten,ngaysinh,truquan from hosokc where xa='".str_replace('_',' ',$h[1])."'";
	else if ($h[0]=="cc")
		$sql="select idhscc as idhs,hoten,ngaysinh,truquan from hosocc where xa='".str_replace('_',' ',$h[1])."'";
	else if ($h[0]=="td")
		$sql="select idhstd as idhs,hoten,ngaysinh,truquan from hosotd where xa='".str_replace('_',' ',$h[1])."'";
	else if ($h[0]=="lt")
		$sql="select idhslt as idhs,hoten,ngaysinh,truquan from hosolt where xa='".str_replace('_',' ',$h[1])."'";
	else if ($h[0]=="tkn")
		$sql="select idhstkn as idhs,hoten,ngaysinh,truquan from hosotkn where xa='".str_replace('_',' ',$h[1])."'";
	//$sql="select idhstkn as idhs,hoten,ngaysinh,truquan from hosotkn";// where xa='".$h[1]."'";
	$sql1=mysqli_query($con,$sql);	
	echo "<div id = 'danhsach' class='table-responsive'>";
		echo "<table class='table table-hover table-striped table-bordered table-advanced tablesorter display' id='table-2'>";		
			echo "<thead>";
				echo "<tr>";
					echo "<th style='background-color:rgb(54, 169, 224)' width='5%'><strong style='color:rgb(255, 255, 225)'>STT</strong></th>";
					echo "<th style='background-color:rgb(54, 169, 224)' width='17%'><strong style='color:rgb(255, 255, 225)'>Họ tên người có công</strong></th>";
					echo "<th style='background-color:rgb(54, 169, 224)' width='8%'><strong style='color:rgb(255, 255, 225)'>Ngày sinh</strong></th>";
					echo "<th style='background-color:rgb(54, 169, 224)' width='62%'><strong style='color:rgb(255, 255, 225)'>Trú quán</strong></th>";
					echo "<th style='background-color:rgb(54, 169, 224); display:none' width='8%'><strong style='color:rgb(255, 255, 225)'>idhs</strong></th>";
					echo "<th style='background-color:rgb(54, 169, 224)' width='8%'><strong style='color:rgb(255, 255, 225)'>Thao tác</strong></th>";
				echo "</tr>";
			echo "</thead>";
			echo "<tbody id='rowlist' class='rowlist'>";
	while($row=mysqli_fetch_array($sql1)){		
		$i = $i + 1;
			echo "<tr>";
				echo "<td>".($i)."</td>";
				echo "<td style='text-align: left;'>".$row['hoten']."</td>";				
				echo "<td style='text-align: left;'>".$row['ngaysinh']."</td>";
				echo "<td style='text-align: left;'>".$row['truquan']."</td>";
				echo "<td style='text-align: left;display:none'>".$row['idhs']."</td>";
				echo"<td>					
							<a href=\"thutuctnnccxhtc.php?id=".$row['hoten'].'>'.$row['ngaysinh'].'>'.$row['truquan'].'>'.$row['idhs']."\"  title='Nhập hố sơ và thông tin liên quan' onclick=\"return confirm('Bạn muốn Nhập hố sơ này?')\" class='btn btn-success'>
								</i>
								Nhập hồ sơ
							</a>
						</td>";
			echo "</tr>";
	}	
			echo "</tbody>";
		echo "</table>";
	echo "</div>";
	
?>