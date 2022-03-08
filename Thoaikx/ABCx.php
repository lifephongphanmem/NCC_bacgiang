<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>NCC</title>
    <style type="text/css">
        body {
            font: normal 14px time, serif;
        }

        table, p {
            width: 99%;
            margin: auto;
        }

        #tabcontent td, #tabcontent th {
            padding: 10px;
        }
        tr td:first-child {text-align: center;}
    @media print {
		   .in{
			  display: none !important;
		   }
		}
    </style>
	<link rel="stylesheet" href="/thoaikx/buttonPro.css"/>
</head>
<div class="in" style="margin-left: 900px;">
<input  type="submit" class="buttonPro medium blue" onclick="window.print()" value="In báo cáo"  />
<input type="button" class="buttonPro medium red" value="Thoát" onclick="window.location.href='<?php echo $_SERVER['HTTP_REFERER'];?>'" />	
</div>
<body> 
<?php
function dinhdangsoxx($so)
		{
			$kq = "";
			if ($so !=0)			
				$kq = number_format($so);					
			return $kq;	
		}
$tendv = "";
$capql = "";
if(isset($_POST['create'])){
	$tendv = $_POST['xahuyen'];
	$capql = $_POST['quanly'];
}
?>   
		<table cellspacing="0" cellpadding="0" border="0">
		<tr>
            <td  style="text-align: center;font-weight: bold;">BIỂU THỐNG KÊ SỐ LƯỢNG HỒ SƠ NGƯỜI CÓ CÔNG TRÊN PHẦN MỀM</td>
		</tr>
		<tr>
		<?php
		if ($capql=="Tỉnh")
            echo "<td  style='text-align: center;font-weight: bold;'>".$tendv."</td>";
		else if($capql=="Huyện")
			echo "<td  style='text-align: center;font-weight: bold;'>Huyện (Thành phố) ".$tendv."</td>";
		else if($capql=="Xã")
			echo "<td  style='text-align: center;font-weight: bold;'>Xã(phường, thị trấn) ".$tendv."</td>";
		?>	
		</tr>		
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th  width="5%">STT</th>
			<th  width="76%">Hồ sơ Người có công với Cách mạng</th>
			<th  width="9%">Số lượng</th>
			<th  width="10%">Ghi chú</th>
		</tr>				
<?php 
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require ("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
$tong=0;	
$sql1 = "Select count(idhsbm) as hs From hosobm";
$qrsql1 = mysqli_query($con,$sql1);
while ($row1 = mysqli_fetch_array($qrsql1)) {	
		$tong=$tong+$row1[0];
		echo "<tr>";
			echo "<td style='text-align: center;'>1</td>";
			echo "<td style='text-align: left;'>Hồ sơ Bà mẹ Việt Nam anh hùng</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($row1[0])."</td>";
			echo "<td style='text-align: center;'></td>";
		echo "</tr>";
	}
$sql2 = "Select count(idhsls) as hs From hosols";
$qrsql2 = mysqli_query($con,$sql2);
while ($row2 = mysqli_fetch_array($qrsql2)) {
		$tong=$tong+$row2[0];
		echo "<tr>";
			echo "<td style='text-align: center;'>2</td>";
			echo "<td style='text-align: left;'>Hồ sơ Liệt sĩ</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($row2[0])."</td>";
			echo "<td style='text-align: center;'></td>";
		echo "</tr>";
	}	
$sql3 = "Select count(idhstb) as hs From hosotb";
$qrsql3 = mysqli_query($con,$sql3);
while ($row3 = mysqli_fetch_array($qrsql3)) {	
		$tong=$tong+$row3[0];
		echo "<tr>";
			echo "<td style='text-align: center;'>3</td>";
			echo "<td style='text-align: left;'>Hồ sơ Thương binh</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($row3[0])."</td>";
			echo "<td style='text-align: center;'></td>";
		echo "</tr>";
	}	
$sql4 = "Select count(idhsbb) as hs From hosobb";
$qrsql4 = mysqli_query($con,$sql4);
while ($row4 = mysqli_fetch_array($qrsql4)) {
		$tong=$tong+$row4[0];
		echo "<tr>";
			echo "<td style='text-align: center;'>4</td>";
			echo "<td style='text-align: left;'>Hồ sơ Bệnh binh</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($row4[0])."</td>";
			echo "<td style='text-align: center;'></td>";
		echo "</tr>";
	}		
	echo "<tr>";
		echo "<td style='text-align: center;'>5</td>";
		echo "<td style='text-align: left;'>Hồ sơ Nhiễm chất độc hóa học:</td>";
		echo "<td style='text-align: center;'></td>";
		echo "<td style='text-align: center;'></td>";
	echo "</tr>";
$sql5 = "Select count(idhshh) as hs From hosohh";
$qrsql5 = mysqli_query($con,$sql5);
while ($row5 = mysqli_fetch_array($qrsql5)) {		
		$tong=$tong+$row5[0];
		echo "<tr>";
			echo "<td style='text-align: center;'></td>";
			echo "<td style='text-align: left;'>-	Hồ sơ nhiễm CĐHH trực tiếp:</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($row5[0])."</td>";
			echo "<td style='text-align: center;'></td>";
		echo "</tr>";
	}	
$sql51 = "Select count(idthannhanhh) as hs From thannhanhh";
$qrsql51 = mysqli_query($con,$sql51);
while ($row51 = mysqli_fetch_array($qrsql51)) {	
		$tong=$tong+$row51[0];	
		echo "<tr>";
			echo "<td style='text-align: center;'></td>";
			echo "<td style='text-align: left;'>-	Hồ sơ nhiễm CĐHH gián tiếp:</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($row51[0])."</td>";
			echo "<td style='text-align: center;'></td>";
		echo "</tr>";
	}	
$sql6 = "Select count(idhskc) as hs From hosokc";
$qrsql6 = mysqli_query($con,$sql6);
while ($row6 = mysqli_fetch_array($qrsql6)) {
		$tong=$tong+$row6[0];
		echo "<tr>";
			echo "<td style='text-align: center;'>6</td>";
			echo "<td style='text-align: left;'>Hồ sơ Người hoạt động kháng chiến</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($row6[0])."</td>";
			echo "<td style='text-align: center;'></td>";
		echo "</tr>";
	}	
$sql7 = "Select count(idhstkn) as hs From hosotkn";
$qrsql7 = mysqli_query($con,$sql7);
while ($row7 = mysqli_fetch_array($qrsql7)) {	
		$tong=$tong+$row7[0];
		echo "<tr>";
			echo "<td style='text-align: center;'>7</td>";
			echo "<td style='text-align: left;'>Hồ sơ Tiền khởi nghĩa</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($row7[0])."</td>";
			echo "<td style='text-align: center;'></td>";
		echo "</tr>";
	}	
$sql8 = "Select count(idhslt) as hs From hosolt";
$qrsql8 = mysqli_query($con,$sql8);
while ($row8 = mysqli_fetch_array($qrsql8)) {	
		$tong=$tong+$row8[0];
		echo "<tr>";
			echo "<td style='text-align: center;'>8</td>";
			echo "<td style='text-align: left;'>Hồ sơ Lão thành cách mạng</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($row8[0])."</td>";
			echo "<td style='text-align: center;'></td>";
		echo "</tr>";
	}		
$sql9 = "Select count(idhsah) as hs From hosoah";
$qrsql9 = mysqli_query($con,$sql9);
while ($row9 = mysqli_fetch_array($qrsql9)) {	
		$tong=$tong+$row9[0];
		echo "<tr>";
			echo "<td style='text-align: center;'>9</td>";
			echo "<td style='text-align: left;'>Hồ sơ Anh hùng</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($row9[0])."</td>";
			echo "<td style='text-align: center;'></td>";
		echo "</tr>";
	}	
$sql10 = "Select count(idhstd) as hs From hosotd";
$qrsql10 = mysqli_query($con,$sql10);
while ($row10 = mysqli_fetch_array($qrsql10)) {		
		$tong=$tong+$row10[0];
		echo "<tr>";
			echo "<td style='text-align: center;'>10</td>";
			echo "<td style='text-align: left;'>Hồ sơ bị bắt, tù đày</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($row10[0])."</td>";
			echo "<td style='text-align: center;'></td>";
		echo "</tr>";
	}
$sql11 = "Select count(idhscc) as hs From hosocc";
$qrsql11 = mysqli_query($con,$sql11);
while ($row11 = mysqli_fetch_array($qrsql11)) {	
		$tong=$tong+$row11[0];
		echo "<tr>";
			echo "<td style='text-align: center;'>10</td>";
			echo "<td style='text-align: left;'>Hồ sơ NCC giúp đỡ CM</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($row11[0])."</td>";
			echo "<td style='text-align: center;'></td>";
		echo "</tr>";
	}
echo "<tr>";
	echo "<td style='text-align: center;'></td>";
	echo "<td style='text-align: left;'>Tổng số hồ sơ</td>";
	echo "<td style='text-align: right;'>".dinhdangsoxx($tong)."</td>";
	echo "<td style='text-align: center;'></td>";
echo "</tr>";	
?>
	</table>
<table >
	<tr>	
	</tr>
	<tr>
		<td width="50%"></td>
		<td width="50%" style="text-align: center;">............, ngày ... tháng ... năm ......</td>
	</tr>	
</table>	
</body>		
</html>	