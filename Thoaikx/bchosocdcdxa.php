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
function doingay1($ngay)
{		
	$kq = substr($ngay,6,4) ."/". substr($ngay,3,2) . "/". substr($ngay,0,2);		
	return $kq;
}	
$tungay = "";
$denngay = "";
$tenhuyen = "";
$tentinh = "";
$noitrao="";
$phanloai="";
if(isset($_POST['create'])){
	$tungay = $_POST['NTTu'];
	$denngay = $_POST['NTDen'];
	//$tenhuyen = $_POST['huyen'];
	$tentinh = $_POST['xa'];
	$noitrao = $_POST['noitrao'];	
	$phanloai=$_POST['ldt'];
}
function loaidoituong($abc)
{
	$kq="";
	if ($abc=="ah")
		$kq="Anh hùng lực lượng VTND, anh hùng lao động TKKC";
	else if ($abc=="bb")
		$kq="Bệnh binh";
	else if ($abc=="bm")
		$kq="Bà mẹ Việt Nam Anh hùng";
	else if ($abc=="cc")
		$kq="Người có công giúp đỡ cách mạng";
	else if ($abc=="hh")
		$kq="Người hđkc bị nhiễm chất độc hóa học";
	else if ($abc=="kc")
		$kq="Người hđkc làm nghĩa vụ quốc tê được tặng huân, huy chương";
	else if ($abc=="ls")
		$kq="Liệt sỹ";
	else if ($abc=="lt")
		$kq="Người hđcm trước ngày 01/01/1945";
	else if ($abc=="tb")
		$kq="Thương binh";
	else if ($abc=="td")
		$kq="Người hđkc bị địch bắt tù, đày";
	else if ($abc=="tkn")
		$kq="Người hđcm từ ngày 01/01/1945 đến ngày khởi nghĩa tháng 8/1945";
	return $kq;
}
function sqldoituong($abc)
{
	$kq="";
	if ($abc=="ah")
		$kq="Select mahobo,hoten,truquan,phanloaidc,ngaydc,noidc From hosoah";
	else if ($abc=="bb")
		$kq="Select hosobo,hoten,truquan,phanloaidc,ngaydc,noidc From hosobb";
	else if ($abc=="bm")
		$kq="Select mahobo,hoten,truquan,phanloaidc,ngaydc,noidc From hosobm";
	else if ($abc=="cc")
		$kq="Select mahobo,hoten,truquan,phanloaidc,ngaydc,noidc From hosocc";
	else if ($abc=="hh")
		$kq="Select mahosobo,hoten,truquan,phanloaidc,ngaydc,noidc From hosohh";
	else if ($abc=="kc")
		$kq="Select mahosobo,hoten,truquan,phanloaidc,ngaydc,noidc From hosokc";
	else if ($abc=="ls")
		$kq="Select mahsbo,hoten,truquan,phanloaidc,ngaydc,noidc From hosols";
	else if ($abc=="lt")
		$kq="Select mahobo,hoten,truquan,phanloaidc,ngaydc,noidc From hosolt";
	else if ($abc=="tb")
		$kq="Select hosobo,hoten,truquan,phanloaidc,ngaydc,noidc From hosotb";
	else if ($abc=="td")
		$kq="Select mahobo,hoten,truquan,phanloaidc,ngaydc,noidc From hosotd";
	else if ($abc=="tkn")
		$kq="Select mahobo,hoten,truquan,phanloaidc,ngaydc,noidc From hosotkn";
	return $kq;
}
?>
    <table cellspacing="0" cellpadding="0" border="0">        
		<tr>
			<td style="text-align: left;font-weight: bold;"><nobr>Đơn vị: <?php echo $tentinh;?></nobr></td>			
		</tr>
	</table>
		<table cellspacing="0" cellpadding="0" border="0">
		<tr>
            <td  style="text-align: center;font-weight: bold;">BÁO CÁO DANH SÁCH HỒ SƠ CHUYỂN ĐI, CHUYỂN ĐẾN</td>
		</tr>		
		<tr>
            <td  style="text-align: center;font-weight: bold;">Loại đối tượng: <?php echo loaidoituong($phanloai); ?></td>
		</tr>
		<tr>
            <td  style="text-align: center;font-weight: bold;">Phân loại chuyển đi, đến: <?php echo $noitrao; ?></td>
		</tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th  width="5%">STT</th>
			<th  width="10%">Mã hồ sơ bộ</th>
			<th  width="15%">Họ và tên</th>
			<th  width="25%">Trú quán</th>
			<th  width="15%">Phân loại</th>
			<th  width="8%">Ngày tháng</th>
			<th  width="22%">Nơi chuyển đi, đến</th>
		</tr>				
<?php 
//làm việc với cơ sở dữ liệu
// kết nối csdl
$cc = array();
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require ("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
$stt =0;$sql="";
if ($tungay != "" && $denngay != "")	
	$sql = sqldoituong($phanloai)." Where phanloaidc='".$noitrao."' and xa='".$tentinh."' and ngaydc Between '".doingay1($tungay)."' and '".doingay1($denngay)."'";
else
	$sql = sqldoituong($phanloai)." Where phanloaidc='".$noitrao."' and xa='".$tentinh."'";
//echo $sql;
$qrsql = mysqli_query($con,$sql);

while ($row = mysqli_fetch_array($qrsql)) {		
		echo "<tr>";		
		$stt++;	
		echo "<td style='text-align: center;'>".$stt."</td>";
		echo "<td style='text-align: left;'><nobr>".$row[0]."</nobr></td>";
		echo "<td style='text-align: left;'><nobr>".$row[1]."</nobr></td>";
		echo "<td style='text-align: left;'><nobr>".$row[2]."</nobr></td>";
		echo "<td style='text-align: left;'><nobr>".$row[3]."</nobr></td>";
		echo "<td style='text-align: left;'><nobr>".ngaythang($row[4])."</nobr></td>";
		echo "<td style='text-align: left;'><nobr>".$row[5]."</nobr></td>";
		echo "</tr>";
	}
?>
	</table>

<table >
	<tr>	
	</tr>
	<tr>
		<td width="50%"></td>
		<td width="50%" style="text-align: center;">............, ngày ... tháng ... năm ......</td>
	</tr>
	<tr>
		<td style="text-align: center;: center; font-weight: bold;">NGƯỜI LẬP SỔ</td>
		<td style="text-align: center; font-weight: bold;"> THỦ TRƯỞNG ĐƠN VỊ</td>
	</tr>
	<tr>
		<td style="text-align: center; font-style: italic;">(Ký, ghi rõ họ và tên)</td>
		<td style="text-align: center; font-style: italic;">(Ký, ghi rõ họ và tên, đóng dấu)</td>
	</tr>
</table>
</body>		
</html>	