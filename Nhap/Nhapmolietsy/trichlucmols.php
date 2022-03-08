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
    <table cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td style="text-align: left;font-weight: bold;">
				<nobr>UBND Tỉnh: </nobr>
            </td>
            <td width="40%">
            </td>
        </tr>
		<tr>
			<td style="text-align: left;font-weight: bold;"><nobr>SƠ LĐTB&XH Tỉnh: </nobr></td>			
		</tr>
		</table>
		<table cellspacing="0" cellpadding="0" border="0">
		<tr>
            <td  style="text-align: center;font-weight: bold;">TRÍCH LỤC MỘ LIỆT SỸ TRONG NGHĨA TRANG LIỆT SỸ</td>
		</tr>		
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
			
<?php

require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require ("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
$soghimo=0;
$soghimo=$_GET['id'];
$sql="Select * From molietsy Where idmols=$soghimo";
$qrsql = mysqli_query($con,$sql);$stt=0;
while ($row = mysqli_fetch_array($qrsql)) {	
	echo "<tr>";
		echo "<th style='text-align: left;' width='15%'>Tên nghĩa trang</th>";
		echo "<th style='text-align: left;font-style: italic;' colspan = '3' width='85%'>".$row['tennghiatrang']."</th>";		
	echo "</tr>";
	echo "<tr>";
		echo "<th style='text-align: left;' width='15%'>Số mộ</th>";
		echo "<th style='text-align: left;font-style: italic;' width='35%'>".$row['somo']."</th>";	
		echo "<th style='text-align: left;' width='15%'>Hàng</th>";
		echo "<th style='text-align: left;font-style: italic;' width='35%'>".$row['hang']."</th>";
	echo "</tr>";
	echo "<tr>";
		echo "<th style='text-align: left;' width='15%'>Khu</th>";
		echo "<th style='text-align: left;font-style: italic;' width='35%'>".$row['khu']."</th>";	
		echo "<th style='text-align: left;' width='15%'>Lô</th>";
		echo "<th style='text-align: left;font-style: italic;' width='35%'>".$row['lo']."</th>";
	echo "</tr>";
	echo "<tr>";
		echo "<th style='text-align: left;' width='15%'>Khác</th>";
		echo "<th style='text-align: left;font-style: italic;' width='35%'>".$row['khac']."</th>";	
		echo "<th style='text-align: left;' width='15%'>Loại thông tin trên mộ</th>";
		echo "<th style='text-align: left;font-style: italic;' width='35%'>".$row['ltttmo']."</th>";
	echo "</tr>";
	echo "<tr>";
		echo "<th style='text-align: left;' width='15%'>Họ tên liệt sỹ</th>";
		echo "<th style='text-align: left;font-style: italic;' width='35%'>".$row['hotenls']."</th>";	
		echo "<th style='text-align: left;' width='15%'>Năm sinh</th>";
		echo "<th style='text-align: left;font-style: italic;' width='35%'>".$row['ngaysinh']."</th>";
	echo "</tr>";
	echo "<tr>";
		echo "<th style='text-align: left;' width='15%'>Nguyên Quán</th>";
		echo "<th style='text-align: left;font-style: italic;' colspan = '3' width='85%'>".$row['nguyenquan']."</th>";			
	echo "</tr>";
	echo "<tr>";
		echo "<th style='text-align: left;' width='15%'>Cấp bậc</th>";
		echo "<th style='text-align: left;font-style: italic;' width='35%'>".$row['capbac']."</th>";	
		echo "<th style='text-align: left;' width='15%'>Chức vụ</th>";
		echo "<th style='text-align: left;font-style: italic;' width='35%'>".$row['chucvu']."</th>";
	echo "</tr>";
	echo "<tr>";
		echo "<th style='text-align: left;' width='15%'>Đơn vị</th>";
		echo "<th style='text-align: left;font-style: italic;' width='35%'>".$row['donvi']."</th>";	
		echo "<th style='text-align: left;' width='15%'>Ngày hi sinh</th>";
		echo "<th style='text-align: left;font-style: italic;' width='35%'>".$row['ngayhs']."</th>";
	echo "</tr>";
	echo "<tr>";
		echo "<th style='text-align: left;' width='15%'>Thông tin mộ</th>";
		echo "<th style='text-align: left;font-style: italic;' width='35%'>".$row['thongtinmo']."</th>";	
		echo "<th style='text-align: left;' width='15%'>Quy tập từ đâu</th>";
		echo "<th style='text-align: left;font-style: italic;' width='35%'>".$row['quytaptudau']."</th>";
	echo "</tr>";
	echo "<tr>";
		echo "<th style='text-align: left;' width='15%'>Địa chỉ cụ thể</th>";
		echo "<th style='text-align: left;font-style: italic;' width='35%'>".$row['diachict']."</th>";	
		echo "<th style='text-align: left;' width='15%'>Đơn vị quy tập</th>";
		echo "<th style='text-align: left;font-style: italic;' width='35%'>".$row['donviqt']."</th>";
	echo "</tr>";
	echo "<tr>";
		echo "<th style='text-align: left;' width='15%'>Ngày chuyển đến</th>";
		echo "<th style='text-align: left;font-style: italic;' width='35%'>".$row['ngaycd']."</th>";	
		echo "<th style='text-align: left;' width='15%'>Người di chuyển</th>";
		echo "<th style='text-align: left;font-style: italic;' width='35%'>".$row['nguoidichuyen']."</th>";
	echo "</tr>";
	echo "<tr>";
		echo "<th style='text-align: left;' width='15%'>Di vật</th>";
		echo "<th style='text-align: left;font-style: italic;'	colspan = '3' width='85%'>".$row['divat']."</th>";
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