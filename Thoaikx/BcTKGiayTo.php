
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
            <td  style="text-align: center;font-weight: bold;">BIỂU THỐNG KÊ SỐ LƯỢNG GIẤY TỜ HỒ SƠ NGƯỜI CÓ CÔNG TRÊN PHẦN MỀM</td>
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
			<th  width="29%">Giấy tờ Hồ sơ Người có công với Cách mạng</th>
			<th  width="6%">Tổng số</th>
		</tr>
<?php 
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require ("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
$stt = 0;
$tong=0;
echo "<tr>";
echo "<td style='text-align: center;'></td>";
echo "<td style='text-align: left;font-weight: bold'>Hồ sơ Bà mẹ Việt Nam anh hùng</td>";
echo "<td style='text-align: right;'></td>";
echo "</tr>";
$sql = "Select sum(soluong) as sl, tengiayto From giaytobm Group by tengiayto";
$qrsql = mysqli_query($con,$sql);
while ($row1 = mysqli_fetch_array($qrsql)) {
	$stt++;
	$tong += kieudouble($row1['sl']);
	echo "<tr>";
	echo "<td style='text-align: center;'>$stt</td>";
	echo "<td style='text-align: left;'>".$row1['tengiayto']."</td>";
	echo "<td style='text-align: right;'>".dinhdangsoxx($row1['sl'])."</td>";
	echo "</tr>";
	}
echo "<tr>";
echo "<td style='text-align: center;'></td>";
echo "<td style='text-align: left;font-weight: bold'>Hồ sơ Liệt sĩ</td>";
echo "<td style='text-align: right;'></td>";
echo "</tr>";
$stt=0;
$sql = "Select sum(soluong) as sl, tengiayto From giaytols Group by tengiayto";
$qrsql = mysqli_query($con,$sql);
while ($row1 = mysqli_fetch_array($qrsql)) {
	$stt++;
	$tong += kieudouble($row1['sl']);
	echo "<tr>";
	echo "<td style='text-align: center;'>$stt</td>";
	echo "<td style='text-align: left;'>".$row1['tengiayto']."</td>";
	echo "<td style='text-align: right;'>".dinhdangsoxx($row1['sl'])."</td>";
	echo "</tr>";
}
echo "<tr>";
echo "<td style='text-align: center;'></td>";
echo "<td style='text-align: left;font-weight: bold'>Hồ sơ Thương binh</td>";
echo "<td style='text-align: right;'></td>";
echo "</tr>";
$stt=0;
$sql = "Select sum(soluong) as sl, tengiayto From giaytotb Group by tengiayto";
$qrsql = mysqli_query($con,$sql);
while ($row1 = mysqli_fetch_array($qrsql)) {
	$stt++;
	$tong += kieudouble($row1['sl']);
	echo "<tr>";
	echo "<td style='text-align: center;'>$stt</td>";
	echo "<td style='text-align: left;'>".$row1['tengiayto']."</td>";
	echo "<td style='text-align: right;'>".dinhdangsoxx($row1['sl'])."</td>";
	echo "</tr>";
}
echo "<tr>";
echo "<td style='text-align: center;'></td>";
echo "<td style='text-align: left;font-weight: bold'>Hồ sơ Bệnh binh</td>";
echo "<td style='text-align: right;'></td>";
echo "</tr>";
$stt=0;
$sql = "Select sum(soluong) as sl, tengiayto From giaytobb Group by tengiayto";
$qrsql = mysqli_query($con,$sql);
while ($row1 = mysqli_fetch_array($qrsql)) {
	$stt++;
	$tong += kieudouble($row1['sl']);
	echo "<tr>";
	echo "<td style='text-align: center;'>$stt</td>";
	echo "<td style='text-align: left;'>".$row1['tengiayto']."</td>";
	echo "<td style='text-align: right;'>".dinhdangsoxx($row1['sl'])."</td>";
	echo "</tr>";
}
$stt=0;
echo "<tr>";
echo "<td style='text-align: center;'></td>";
echo "<td style='text-align: left;'>Hồ sơ Nhiễm chất độc hóa học:</td>";
echo "<td style='text-align: right;'></td>";
echo "</tr>";

echo "<tr>";
echo "<td style='text-align: center;'></td>";
echo "<td style='text-align: left;font-weight: bold'>-	Hồ sơ nhiễm CĐHH trực tiếp:</td>";
echo "<td style='text-align: right;'></td>";
echo "</tr>";
$sql = "Select sum(soluong) as sl, tengiayto From giaytohh Group by tengiayto";
$qrsql = mysqli_query($con,$sql);
while ($row1 = mysqli_fetch_array($qrsql)) {
	$stt++;
	$tong += kieudouble($row1['sl']);
	echo "<tr>";
	echo "<td style='text-align: center;'>$stt</td>";
	echo "<td style='text-align: left;'>".$row1['tengiayto']."</td>";
	echo "<td style='text-align: right;'>".dinhdangsoxx($row1['sl'])."</td>";
	echo "</tr>";
}
$stt=0;
echo "<tr>";
echo "<td style='text-align: center;'></td>";
echo "<td style='text-align: left;font-weight: bold'>-	Hồ sơ nhiễm CĐHH gián tiếp:</td>";
echo "<td style='text-align: right;'></td>";
echo "</tr>";
$sql = "Select sum(soluong) as sl, tengiayto From giaytohhtn Group by tengiayto";
$qrsql = mysqli_query($con,$sql);
while ($row1 = mysqli_fetch_array($qrsql)) {
	$stt++;
	$tong += kieudouble($row1['sl']);
	echo "<tr>";
	echo "<td style='text-align: center;'>$stt</td>";
	echo "<td style='text-align: left;'>".$row1['tengiayto']."</td>";
	echo "<td style='text-align: right;'>".dinhdangsoxx($row1['sl'])."</td>";
	echo "</tr>";
}
$stt=0;
echo "<tr>";
echo "<td style='text-align: center;'></td>";
echo "<td style='text-align: left;font-weight: bold'>Hồ sơ Người hoạt động kháng chiến</td>";
echo "<td style='text-align: right;'></td>";
echo "</tr>";
$sql = "Select sum(soluong) as sl, tengiayto From giaytokc Group by tengiayto";
$qrsql = mysqli_query($con,$sql);
while ($row1 = mysqli_fetch_array($qrsql)) {
	$stt++;
	$tong += kieudouble($row1['sl']);
	echo "<tr>";
	echo "<td style='text-align: center;'>$stt</td>";
	echo "<td style='text-align: left;'>".$row1['tengiayto']."</td>";
	echo "<td style='text-align: right;'>".dinhdangsoxx($row1['sl'])."</td>";
	echo "</tr>";
}
$stt=0;
echo "<tr>";
echo "<td style='text-align: center;'></td>";
echo "<td style='text-align: left;font-weight: bold'>Hồ sơ Tiền khởi nghĩa</td>";
echo "<td style='text-align: right;'></td>";
echo "</tr>";
$sql = "Select sum(soluong) as sl, tengiayto From giaytotkn Group by tengiayto";
$qrsql = mysqli_query($con,$sql);
while ($row1 = mysqli_fetch_array($qrsql)) {
	$stt++;
	$tong += kieudouble($row1['sl']);
	echo "<tr>";
	echo "<td style='text-align: center;'>$stt</td>";
	echo "<td style='text-align: left;'>".$row1['tengiayto']."</td>";
	echo "<td style='text-align: right;'>".dinhdangsoxx($row1['sl'])."</td>";
	echo "</tr>";
}
$stt=0;
echo "<tr>";
echo "<td style='text-align: center;'></td>";
echo "<td style='text-align: left;font-weight: bold'>Hồ sơ Lão thành cách mạng</td>";
echo "<td style='text-align: right;'></td>";
echo "</tr>";
$sql = "Select sum(soluong) as sl, tengiayto From giaytolt Group by tengiayto";
$qrsql = mysqli_query($con,$sql);
while ($row1 = mysqli_fetch_array($qrsql)) {
	$stt++;
	$tong += kieudouble($row1['sl']);
	echo "<tr>";
	echo "<td style='text-align: center;'>$stt</td>";
	echo "<td style='text-align: left;'>".$row1['tengiayto']."</td>";
	echo "<td style='text-align: right;'>".dinhdangsoxx($row1['sl'])."</td>";
	echo "</tr>";
}
$stt=0;
echo "<tr>";
echo "<td style='text-align: center;'></td>";
echo "<td style='text-align: left;font-weight: bold'>Hồ sơ Anh hùng</td>";
echo "<td style='text-align: right;'></td>";
echo "</tr>";
$sql = "Select sum(soluong) as sl, tengiayto From giaytoah Group by tengiayto";
$qrsql = mysqli_query($con,$sql);
while ($row1 = mysqli_fetch_array($qrsql)) {
	$stt++;
	$tong += kieudouble($row1['sl']);
	echo "<tr>";
	echo "<td style='text-align: center;'>$stt</td>";
	echo "<td style='text-align: left;'>".$row1['tengiayto']."</td>";
	echo "<td style='text-align: right;'>".dinhdangsoxx($row1['sl'])."</td>";
	echo "</tr>";
}$stt=0;
echo "<tr>";
echo "<td style='text-align: center;'></td>";
echo "<td style='text-align: left;font-weight: bold'>Hồ sơ bị bắt, tù đày</td>";
echo "<td style='text-align: right;'></td>";
echo "</tr>";
$sql = "Select sum(soluong) as sl, tengiayto From giaytotd Group by tengiayto";
$qrsql = mysqli_query($con,$sql);
while ($row1 = mysqli_fetch_array($qrsql)) {
	$stt++;
	$tong += kieudouble($row1['sl']);
	echo "<tr>";
	echo "<td style='text-align: center;'>$stt</td>";
	echo "<td style='text-align: left;'>".$row1['tengiayto']."</td>";
	echo "<td style='text-align: right;'>".dinhdangsoxx($row1['sl'])."</td>";
	echo "</tr>";
}
$stt=0;
echo "<tr>";
echo "<td style='text-align: center;'></td>";
echo "<td style='text-align: left;font-weight: bold'>Hồ sơ NCC giúp đỡ CM</td>";
echo "<td style='text-align: right;'></td>";
echo "</tr>";
$sql = "Select sum(soluong) as sl, tengiayto From giaytocc Group by tengiayto";
$qrsql = mysqli_query($con,$sql);
while ($row1 = mysqli_fetch_array($qrsql)) {
	$stt++;
	$tong += kieudouble($row1['sl']);
	echo "<tr>";
	echo "<td style='text-align: center;'>$stt</td>";
	echo "<td style='text-align: left;'>".$row1['tengiayto']."</td>";
	echo "<td style='text-align: right;'>".dinhdangsoxx($row1['sl'])."</td>";
	echo "</tr>";
}
echo "<tr style='font-weight: bold'>";
echo "<td style='text-align: center;'></td>";
echo "<td style='text-align: center;'>Tổng cộng</td>";
echo "<td style='text-align: right;'>".dinhdangsoxx($tong)."</td>";
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