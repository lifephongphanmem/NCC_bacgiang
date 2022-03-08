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
				<nobr>...........................................................</nobr>
            </td>
            <td width="40%">
            </td>
			<td style="text-align: center; font-weight: bold;"><nobr>Mẫu số 16-MLS</nobr></td>
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
            <td  style="text-align: center;font-weight: bold;">DANH SÁCH MỘ LIỆT SĨ</td>
		</tr>		
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th rowspan ="2" width="2%">STT</th>
			<th rowspan ="2" width="15%">Tên nghĩa trang liệt sĩ</th>
			<th colspan = "4" width="16%">Vị trí một liệt sĩ</th>
			<th rowspan ="2" width="15%">Thông tin về phần mộ (họ tên, ngày sinh, nguyên quán...)</th>
			<th rowspan ="2" width="10%">Thông tin di vật</th>
			<th colspan = "2" width="20%">Thông tin quy tập hoặc an táng hài cốt trước khi tiếp nhận</th>
			<th colspan = "2" width="20%">Thông tin về di chuyển hài cốt liệt sĩ</th>
			<th rowspan ="2" width="2%">Ghi chú</th>			
		</tr>	
		<tr>
			<th >Số mộ</th>
			<th >Hàng</th>
			<th >Khu</th>
			<th >Lô</th>
			<th >Địa điểm</th>
			<th >Đơn vị quy tập</th>
			<th >Địa phương an táng sau di chuyển</th>	
			<th >Người di chuyển</th>				
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
			<th >11</th>	
			<th >12</th>	
			<th >13</th>				
		</tr>	
<?php
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require ("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
$ahs = explode('>',$_GET['id']);
$stt =0;
if ($ahs[0] != "" && $ahs[1] != "")
	$sql="Select * From molietsy where xa='".$ahs[0]."' and huyen='".$ahs[1]."' order by tennghiatrang";
else if ($ahs[0] == "" && $ahs[1] != "")
	$sql="Select * From molietsy where huyen='".$ahs[1]."' order by tennghiatrang";
else if ($ahs[0] == "" && $ahs[1] == "")
	$sql="Select * From molietsy order by tennghiatrang";
$qrsql = mysqli_query($con,$sql);$nhom="";
while ($row = mysqli_fetch_array($qrsql)) {	
$stt++;
	if ($row['tennghiatrang'] != $nhom)
	{
		echo "<tr>";
		echo "<td style='text-align: center;'></td>";
		echo "<td style='text-align: left;'>".$row['tennghiatrang']."</td>";
		echo "<td style='text-align: center;'></td>";
		echo "<td style='text-align: center;'></td>";
		echo "<td style='text-align: center;'></td>";
		echo "<td style='text-align: center;'></td>";
		echo "<td style='text-align: left;'></td>";
		echo "<td style='text-align: left;'></td>";
		echo "<td style='text-align: left;'></td>";
		echo "<td style='text-align: left;'></td>";
		echo "<td style='text-align: left;'></td>";
		echo "<td style='text-align: left;'></td>";
		echo "<td style='text-align: center;'></td>";
		echo "</tr>";
	}
	$nhom=$row['tennghiatrang'];
	echo "<tr>";
		echo "<td style='text-align: center;'>".$stt."</td>";
		echo "<td style='text-align: left;'></td>";
		echo "<td style='text-align: center;'>".$row['somo']."</td>";
		echo "<td style='text-align: center;'>".$row['hang']."</td>";
		echo "<td style='text-align: center;'>".$row['khu']."</td>";
		echo "<td style='text-align: center;'>".$row['lo']."</td>";
		echo "<td style='text-align: left;'>".$row['hotenls'].", ".$row['ngaysinh'].", ".$row['nguyenquan']."</td>";
		echo "<td style='text-align: left;'>".$row['divat']."</td>";
		echo "<td style='text-align: left;'>".$row['diachict']."</td>";
		echo "<td style='text-align: left;'>".$row['donviqt']."</td>";
		echo "<td style='text-align: left;'>".$row['xa'].", ".$row['huyen']."</td>";
		echo "<td style='text-align: left;'>".$row['nguoidichuyen']."</td>";
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