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
			<td style="text-align: center; font-weight: bold;"><nobr>Mẫu số 17-MLS</nobr></td>
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
            <td  style="text-align: center;font-weight: bold;">DANH SÁCH NGHĨA TRANG LIỆT SĨ</td>
		</tr>		
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th width="5%">STT</th>
			<th width="20%">Tên nghĩa trang</th>
			<th width="25%">Địa chỉ</th>
			<th width="10%">Tổng số mộ</th>
			<th width="10%">Số mộ có đầy đủ thông tin</th>
			<th width="10%">Số mộ xác định được một phần thông tin</th>
			<th width="10%">Số mộ chưa xác định được thông tin</th>	
			<th width="10%">Ghi chú</th>				
		</tr>
<?php 
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require ("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
$stt =0;	
$sql="Select * From nghiatrang";
$qrsql = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($qrsql)) {	
$stt++;
	echo "<tr>";
		echo "<td style='text-align: center;'>".$stt."</td>";
		echo "<td style='text-align: left;'>".$row['tennghiatrang']."</td>";
		echo "<td style='text-align: left;'>".$row['xa'].", ".$row['huyen']."</td>";
		echo "<td style='text-align: center;'>".($row['mddttchc']+$row['mddttdc']+$row['mddttv']+$row['mddttcxd']+$row['mmpttchc']+$row['mmpttdc']+$row['mmpttv']+$row['mmpttcxd']+$row['mkttchc']+$row['mkttdc']+$row['mkttv']+$row['mkttcxd'])."</td>";
		echo "<td style='text-align: center;'>".($row['mddttchc']+$row['mddttdc']+$row['mddttv']+$row['mddttcxd'])."</td>";
		echo "<td style='text-align: center;'>".($row['mmpttchc']+$row['mmpttdc']+$row['mmpttv']+$row['mmpttcxd'])."</td>";
		echo "<td style='text-align: center;'>".($row['mkttchc']+$row['mkttdc']+$row['mkttv']+$row['mkttcxd'])."</td>";
		echo "<td style='text-align: center;'></td>";
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