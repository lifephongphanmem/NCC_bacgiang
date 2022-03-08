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
if(isset($_POST['create'])){
	$tungay = $_POST['NTTu'];
	$denngay = $_POST['NTDen'];	
	$tentinh = $_POST['xa'];
	$noitrao = $_POST['noitrao'];	
}
$nt="";
if ($_POST['noitrao']=="Phòng")
	$nt="p";
else
	$nt="x";
?>
    <table cellspacing="0" cellpadding="0" border="0">        
		<tr>
			<td style="text-align: left;font-weight: bold;"><nobr>Đơn vị: <?php echo $tentinh;?></nobr></td>			
		</tr>
	</table>
		<table cellspacing="0" cellpadding="0" border="0">
		<tr>
            <td  style="text-align: center;font-weight: bold;">DANH SÁCH HỒ SƠ TRAO QUYẾT ĐỊNH</td>
		</tr>		
		<tr>
            <td  style="text-align: center;font-weight: bold;">Nơi trao quyết định: <?php echo $noitrao; ?></td>
		</tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th  width="5%">STT</th>
			<th  width="10%">Ngày trao QĐ</th>
			<th  width="15%">Họ và tên</th>
			<th  width="25%">Trú quán</th>
			<th  width="25%">Nội dung xin trợ cấp</th>
			<th  width="20%">Nơi trao quyết định</th>
		</tr>				
<?php 
//làm việc với cơ sở dữ liệu
// kết nối csdl
$cc = array();
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require ("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
$stt =0;$sql="";
if ($tungay != "" && $denngay != "")	
	$sql = "Select noitraqd,ngaytraqd,hoten,phanloai,nguoihuongtn,truquan,truquantn,noidung From thutuchc Where trangthai='Duyệt' and captraoqd='".$nt."' and xa='".$tentinh."' and ngaytraqd Between '".doingay1($tungay)."' and '".doingay1($denngay)."'";
else
	$sql = "Select noitraqd,ngaytraqd,hoten,phanloai,nguoihuongtn,truquan,truquantn,noidung From thutuchc Where trangthai='Duyệt' and captraoqd='".$nt."' and xa='".$tentinh."'";
$qrsql = mysqli_query($con,$sql);

while ($row = mysqli_fetch_array($qrsql)) {		
		echo "<tr>";		
		$stt++;	
		echo "<td style='text-align: center;'>".$stt."</td>";
		echo "<td style='text-align: left;'><nobr>".ngaythang($row['ngaytraqd'])."</nobr></td>";
		if ($row['phanloai']=="Người có công")
		{
			echo "<td style='text-align: left;'><nobr>".$row['hoten']."</nobr></td>";
			echo "<td style='text-align: left;'><nobr>".$row['truquan']."</nobr></td>";
		}
		else
		{
			echo "<td style='text-align: left;'><nobr>".$row['nguoihuongtn']."</nobr></td>";
			echo "<td style='text-align: left;'><nobr>".$row['truquantn']."</nobr></td>";
		}
		echo "<td style='text-align: left;'><nobr>".$row['noidung']."</nobr></td>";
		echo "<td style='text-align: left;'><nobr>".$row['noitraqd']."</nobr></td>";
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