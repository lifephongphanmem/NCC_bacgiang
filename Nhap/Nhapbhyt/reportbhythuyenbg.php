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
<?php 
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require ("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
$donvi="";$doituong="";$xa="";
if(isset($_POST['create1'])){
	$donvi = $_POST['donvi'];
	$doituong = $_POST['doituongin'];
	$xa = $_POST['tenxain'];
}
?>
<body>
    <table cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td style="text-align: left;font-weight: bold;">
				<nobr>UBND Cấp Xã: <?php echo str_replace('_',' ',$xa);?></nobr>
            </td>
            <td width="40%">
            </td>
        </tr>		
		</table>
		<table cellspacing="0" cellpadding="0" border="0">
		<tr>
            <td  style="text-align: center;font-weight: bold;">BẢNG TỔNG HỢP DANH SÁCH ĐỐI TƯỢNG VÀ THÂN NHÂN ĐỐI TƯỢNG ĐƯỢC HƯỞNG CHẾ ĐỘ Y TẾ</td>
		</tr>
		<tr>
            <td  style="text-align: center;font-weight: bold;">Loại đối tượng: <?php
			if ($doituong=="bmvn")
				echo "Mã CC (MVNAH)";
			else if ($doituong=="ncc")
				echo "Người có công";
			else if ($doituong=="nd150")
				echo "Nghị định 150";
			else if ($doituong=="qd62")
				echo "Quyết định 62";
			else if ($doituong=="qd290")
				echo "Quyết định 290";
			else if ($doituong=="tnls")
				echo "Thân nhân liệt sỹ";
			else if ($doituong=="tnncc")
				echo "Thân nhân người có công";
			else if ($doituong=="tnxp")
				echo "Thanh niên xung phong";
			else if ($doituong=="kh")
				echo "Đối tượng khác";
			?></td>
		</tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th rowspan ="2" width="4%">STT</th>
			<th rowspan ="2" width="15%">Họ và tên</th>
			<th rowspan ="2" width="7%">Ngày, tháng, năm sinh</th>
			<th rowspan ="2" width="15%">Đối tượng</th>
			<th rowspan ="2" width="20%">Nguyên quán</th>
			<th rowspan ="2" width="20%">Trú quán</th>
			<th rowspan ="2" width="7%">Ngày cấp thẻ BHYT</th>
			<th colspan ="2" width="10%">Theo dõi</th>
			<th rowspan ="2" width="9%">Lý do tăng, giảm</th>
		</tr>
		<tr>
			<th width="5%">Đối tượng tăng(X)</th>
			<th width="5%">Đối tượng giảm(X)</th>
		</tr>	
<?php
$sql="Select * From baohiem Where xa Like '".str_replace('_',' ',$xa)."%' and doituong Like '".$doituong."%'";
$qrsql = mysqli_query($con,$sql);$stt=0;
while ($row = mysqli_fetch_array($qrsql)) {	
$stt++;	
	echo "<tr>";
	echo "<td style='text-align: left;'>".$stt."</td>";
	echo "<td style='text-align: left;'>".$row['nguoicc']."</td>";
	echo "<td style='text-align: left;'>".$row['ngaysinh']."</td>";
	if ($row['doituong']=="bmvn")
		echo "<td style='text-align: left;'>Mã CC (MVNAH)</td>";
	else if ($row['doituong']=="ncc")
		echo "<td style='text-align: left;'>Người có công</td>";
	else if ($row['doituong']=="nd150")
		echo "<td style='text-align: left;'>Nghị định 150</td>";
	else if ($row['doituong']=="qd62")
		echo "<td style='text-align: left;'>Quyết định 62</td>";
	else if ($row['doituong']=="qd290")
		echo "<td style='text-align: left;'>Quyết định 290</td>";
	else if ($row['doituong']=="tnls")
		echo "<td style='text-align: left;'>Thân nhân liệt sỹ</td>";
	else if ($row['doituong']=="tnncc")
		echo "<td style='text-align: left;'>Thân nhân người có công</td>";
	else if ($row['doituong']=="tnxp")
		echo "<td style='text-align: left;'>Thanh niên xung phong</td>";
	else if ($row['doituong']=="kh")
		echo "<td style='text-align: left;'>Đối tượng khác</td>";
	echo "<td style='text-align: left;'>".$row['nguyenquan']."</td>";
	echo "<td style='text-align: left;'>".$row['truquan']."</td>";
	echo "<td style='text-align: center;'>".$row['ngaycapbhyt']."</td>";
	if ($row['tanggiam']=="Tăng")
	{
		echo "<td style='text-align: center;'>X</td>";
		echo "<td style='text-align: center;'></td>";
	}
	else
	{
		echo "<td style='text-align: center;'></td>";
		echo "<td style='text-align: center;'>X</td>";
	}		
	echo "<td style='text-align: left;'>".$row['lydotg']."</td>";
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
		<td style="text-align: center;: center; font-weight: bold;">NGƯỜI LẬP DANH SÁCH</td>
		<td style="text-align: center; font-weight: bold;">THỦ TRƯỞNG</td>
	</tr>
	<tr>
		<td style="text-align: center; font-style: italic;">(Ký, ghi rõ họ và tên)</td>
		<td style="text-align: center; font-style: italic;">(Ký, ghi rõ họ và tên, đóng dấu)</td>
	</tr>
</table>
</body>		
</html>	