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
				<nobr>ỦY BAN NHÂN DÂN..............................</nobr>
            </td>
            <td width="40%">
            </td>
			<td style="text-align: center; font-weight: bold;"><nobr>Mẫu số 18-MLS</nobr></td>
        </tr>
		<tr>
			<td style="text-align: left;font-weight: bold;"><nobr>...........................................................</nobr></td>
			<td>
			</td>
			<td style="text-align: center;" ><nobr>(Ban hành theo thông tư liên tịch số 13/2014/TTLT-BLDTBXH-BTC </br>ngày 03/6/2014 của Bộ Lao động - Thương binh và Xã hôi, Bộ Tài chính)</nobr></td>
		</tr>
		</table>
		<table cellspacing="0" cellpadding="0" border="0">
		<tr>
            <td  style="text-align: center;font-weight: bold;">DANH SÁCH MỘ LIỆT SĨ DO GIA ĐÌNH QUẢN LÝ</td>
		</tr>		
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th width="5%">STT</th>
			<th width="15%">Họ tên liệt sĩ</th>
			<th width="20%">Nguyên quán</th>
			<th width="20%">Địa bàn an táng(thôn, xã, huyện)</th>
			<th width="20%">Nơi an táng trước khi di chuyển</th>
			<th width="10%">Người di chuyển</th>			
			<th width="10%">Ghi chú</th>				
		</tr>	
<?php 
$stt =0;	
$sql="Select molietsy.hotenls,molietsy.nguyenquan,nghiatrang.xa,nghiatrang.huyen,molietsy.diachict,molietsy.nguoidichuyen From molietsy inner join nghiatrang on molietsy.idnghiatrang=nghiatrang.idnghiatrang where nghiatrang.capql='Khác'";
$qrsql = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($qrsql)) {	
$stt++;
	echo "<tr>";
		echo "<td style='text-align: center;'>".$stt."</td>";
		echo "<td style='text-align: left;'>".$row['hotenls']."</td>";
		echo "<td style='text-align: left;'>".$row['nguyenquan']."</td>";
		echo "<td style='text-align: left;'>".$row['xa'].", ".$row['huyen']."</td>";
		echo "<td style='text-align: left;'>".$row['diachict']."</td>";
		echo "<td style='text-align: left;'>".$row['nguoidichuyen']."</td>";
		echo "<td style='text-align: left;'></td>";
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