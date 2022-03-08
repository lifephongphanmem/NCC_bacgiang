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
            <td  style="text-align: center;font-weight: bold;">DANH SÁCH HỖ TRỢ KINH PHÍ XÂY MỘ LIỆT SỸ TRONG NGHĨA TRANG LIỆT SỸ</td>
		</tr>		
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th rowspan ="2" width="3%">STT</th>
			<th rowspan ="2" width="5%">Số QĐ</th>
			<th rowspan ="2" width="7%">Ngày ra QĐ</th>
			<th rowspan ="2" width="12%">Họ và tên liệt sỹ</th>
			<th rowspan ="2" width="12%">Nguyên quán</th>
			<th rowspan ="2" width="4%">Cấp bậc chức vụ</th>
			<th rowspan ="2" width="4%">Số sổ liệt sỹ</th>
			<th rowspan ="2" width="4%">Số bằng liệt sỹ</th>
			<th colspan = "3" width="10%">Mộ số tại (theo số mộ chí NTLS)</th>
			<th rowspan ="2" width="8%">Họ và tên thân nhân</th>
			<th rowspan ="2" width="10%">Tên nghĩa trang liệt sỹ nhận hỗ trợ</th>
			<th rowspan ="2" width="9%">Tổng tiền hỗ trợ</th>
			<th rowspan ="2" width="4%">Ghi chú</th>
			<th rowspan ="2" width="4%">Nơi quy tập</th>
		</tr>
		<tr>
			<th>Khu</th>
			<th>Hàng</th>
			<th>Mộ số</th>							
		</tr>	
<?php
function dinhdangsoxx($so)
		{
			$kq = "";
			if ($so !=0)			
				$kq = number_format($so);					
			return $kq;	
		}
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require ("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
$donvi="";
if(isset($_POST['create1'])){
	$donvi = str_replace('_',' ',$_POST['huyenkx']);
}
$sql="Select * From kinhphimo Where xa Like '".$donvi."%' and phanloai='NT'";
$qrsql = mysqli_query($con,$sql);$stt=0;
while ($row = mysqli_fetch_array($qrsql)) {
$stt++;	
	echo "<tr>";
	echo "<td style='text-align: center;'>$stt</td>";
	echo "<td style='text-align: left;'>".$row['soqd']."</td>";
	echo "<td style='text-align: left;'>".$row['ngaythang']."</td>";
	echo "<td style='text-align: left;'>".$row['hotenls']."</td>";
	echo "<td style='text-align: left;'>".$row['nguyenquan']."</td>";
	echo "<td style='text-align: left;'>".$row['capbacchucvu']."</td>";
	echo "<td style='text-align: left;'>".$row['sosols']."</td>";
	echo "<td style='text-align: left;'>".$row['sobangls']."</td>";
	echo "<td style='text-align: left;'>".$row['khu']."</td>";
	echo "<td style='text-align: left;'>".$row['hang']."</td>";
	echo "<td style='text-align: left;'>".$row['mo']."</td>";
	echo "<td style='text-align: left;'>".$row['thannhan']."</td>";
	echo "<td style='text-align: left;'>".$row['tennghiatrang']."</td>";
	echo "<td style='text-align: right;'>".dinhdangsoxx($row['tongtien'])."</td>";
	echo "<td style='text-align: left;'>".$row['ghichu']."</td>";
	echo "<td style='text-align: left;'>".$row['noiquytap']."</td>";
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