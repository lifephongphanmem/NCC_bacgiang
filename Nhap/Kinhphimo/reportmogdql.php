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
            <td  style="text-align: center;font-weight: bold;">DANH SÁCH HỖ TRỢ KINH PHÍ XÂY BIA, MỘ LIỆT SỸ DO GIA ĐÌNH QUẢN LÝ</td>
		</tr>		
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th width="3%"><p>STT</p></th>
			<th width="5%"><p>Số QĐ</p></th>
			<th width="7%"><p>Ngày ra QĐ</p></th>
			<th width="12%"><p>Họ và tên liệt sỹ</p></th>
			<th width="14%"><p>Nguyên quán</p></th>
			<th width="7%">Cấp bậc<br>chức vụ</th>
			<th width="4%">Số sổ<br>liệt sỹ</th>
			<th width="4%">Số bằng<br>liệt sỹ</th>
			<th width="12%">Thân nhân nhận<br>kinh phí hỗ trợ</th>
			<th width="4%">Quan<br>hệ</th>
			<th width="14%">Chỗ ở hiện nay của<br>thân nhân</th>
			<th width="9%">Tổng tiền<br>hỗ trợ</th>
			<th width="4%"><p>Ghi<br>chú</p></th>
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
$sql="Select * From kinhphimo Where xa Like '".$donvi."%' and phanloai='GDQL'";
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
	echo "<td style='text-align: left;'>".$row['thannhan']."</td>";
	echo "<td style='text-align: left;'>".$row['quanhe']."</td>";
	echo "<td style='text-align: left;'>".$row['choo']."</td>";
	echo "<td style='text-align: right;'>".dinhdangsoxx($row['tongtien'])."</td>";
	echo "<td style='text-align: left;'>".$row['ghichu']."</td>";
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