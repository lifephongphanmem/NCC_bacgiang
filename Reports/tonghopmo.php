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
            <td  style="text-align: center;font-weight: bold;">DANH SÁCH TỔNG HỢP MỘ LIỆT SỸ</td>
		</tr>		
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th width="4%">STT</th>
			<th width="16%">Tên nghĩa trang liệt sĩ</th>
			<th width="10%">Tổng số</th>
			<th width="10%">Tổng mộ có hài cốt</th>
			<th width="10%">Tổng mộ đã di chuyển</th>
			<th width="10%">Tổng mộ vọng</th>
			<th width="10%">Tổng mộ chưa xác định</th>
			<th width="10%">Tổng mộ có đầy đủ thông tin</th>
			<th width="10%">Tổng mộ có một phần thông tin</th>
			<th width="10%">Tổng mộ không có thông tin</th>
		</tr>
		<tr>
			<th >1</th>
			<th >2</th>
			<th >3</th>
			<th >4</th>
			<th >5</th>
			<th >6</th>
			<th >7</th>
			<th >8</th>	
			<th >9</th>	
			<th >10</th>				
		</tr>	
<?php
function fommatnumber($so)
{
	$kq = "";
	if ($so !=0)			
		$kq = number_format($so);					
	return $kq;	
}	
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require ("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
$stt = 0;
$sql="Select tennghiatrang From nghiatrang group by tennghiatrang";
$qrsql = mysqli_query($con,$sql);$tong3=0;$tong4=0;$tong5=0;$tong6=0;$tong7=0;$tong8=0;$tong9=0;$tong10=0;
while ($row = mysqli_fetch_array($qrsql)) {	
$stt++;
	echo "<tr>";
		echo "<td style='text-align: center;'>".$stt."</td>";
		echo "<td style='text-align: left;'>".$row['tennghiatrang']."</td>";
$sqlct="Select ltttmo,thongtinmo From molietsy Where tennghiatrang = '".$row['tennghiatrang']."'";		
$qrsqlct = mysqli_query($con,$sqlct);$so3=0;$so4=0;$so5=0;$so6=0;$so7=0;$so8=0;$so9=0;$so10=0;
while ($rowct = mysqli_fetch_array($qrsqlct)) {
	$so3=$so3+1;
	if ($rowct['thongtinmo']=="1. Mộ có hài cốt")
		$so4=$so4+1;
	else if ($rowct['thongtinmo']=="2. Mộ đã di chuyển")
		$so5=$so5+1;
	else if ($rowct['thongtinmo']=="3. Mộ vọng")
		$so6=$so6+1;
	else if ($rowct['thongtinmo']=="4. Chưa xác định")
		$so7=$so7+1;
	else if ($rowct['ltttmo']=="1. Mộ có đầy đủ thông tin")
		$so8=$so8+1;
	else if ($rowct['ltttmo']=="2. Mộ có một phần thông tin")
		$so9=$so9+1;
	else if ($rowct['ltttmo']=="3. Mộ không có thông tin")
		$so10=$so10+1;
}
$tong3=$tong3+$so3;$tong4=$tong4+$so4;$tong5=$tong5+$so5;$tong6=$tong6+$so6;$tong7=$tong7+$so7;$tong8=$tong8+$so8;$tong9=$tong9+$so9;$tong10=$tong10+$so10;
		echo "<td style='text-align: right;'>".fommatnumber($so3)."</td>";
		echo "<td style='text-align: right;'>".fommatnumber($so4)."</td>";
		echo "<td style='text-align: right;'>".fommatnumber($so5)."</td>";
		echo "<td style='text-align: right;'>".fommatnumber($so6)."</td>";
		echo "<td style='text-align: right;'>".fommatnumber($so7)."</td>";
		echo "<td style='text-align: right;'>".fommatnumber($so8)."</td>";
		echo "<td style='text-align: right;'>".fommatnumber($so9)."</td>";
		echo "<td style='text-align: right;'>".fommatnumber($so10)."</td>";
	echo "</tr>";
}
echo "<tr>";
	echo "<td style='text-align: center;'></td>";
	echo "<td style='text-align: left;'>Tổng cộng: </td>";
	echo "<td style='text-align: right;'>".fommatnumber($tong3)."</td>";
	echo "<td style='text-align: right;'>".fommatnumber($tong4)."</td>";
	echo "<td style='text-align: right;'>".fommatnumber($tong5)."</td>";
	echo "<td style='text-align: right;'>".fommatnumber($tong6)."</td>";
	echo "<td style='text-align: right;'>".fommatnumber($tong7)."</td>";
	echo "<td style='text-align: right;'>".fommatnumber($tong8)."</td>";
	echo "<td style='text-align: right;'>".fommatnumber($tong9)."</td>";
	echo "<td style='text-align: right;'>".fommatnumber($tong10)."</td>";
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