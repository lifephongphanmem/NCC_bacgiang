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
	
$loaidoituongin = "";
$namquain = "";
$xain = "";
$tenhuyenin = "";

if(isset($_POST['inds'])){
	$loaidoituongin = $_POST['loaidoituongin'];
	$namquain = $_POST['namquain'];
	$xain = $_POST['xain'];
	$tenhuyenin = $_POST['tenhuyenin'];
}
?>
    <table cellspacing="0" cellpadding="0" border="0">        
		<tr>
			<td style="text-align: left;font-weight: bold;"><nobr>Đơn vị: <?php echo str_replace('_',' ',$xain);?></nobr></td>			
		</tr>
	</table>
		<table cellspacing="0" cellpadding="0" border="0">
		<tr>
			<td  style='text-align: center;font-weight: bold;'>DANH SÁCH ĐỐI TƯỢNG NHẬN QUÀ</td>
		</tr>
		<tr>
            <td  style="text-align: center;font-weight: bold;">Năm nhận quà: <?php echo $namquain; ?></td>
		</tr>		
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th  width="7%">STT</th>
			<th  width="20%">Họ và tên</th>
			<th  width="%48">Địa chỉ</th>
			<th  width="10%">Mức quà</th>
			<th  width="15%">Ghi chú</th>			
		</tr>				
<?php 
//làm việc với cơ sở dữ liệu
// kết nối csdl
function dinhdangsox($so)
{
	$kq = "";
	if ($so !=0)			
		$kq = number_format($so);					
	return $kq;	
}
$cc = array();
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require ("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
$stt =0;$sql="";		
	$sql = "Select hoten,diachi,mucqua From quatet27 Where loaidoituong Like '".$loaidoituongin."%' and namqua Like '".$namquain."%' and xa Like '".$xain."%' and chuyen='Duyệt'";
$qrsql = mysqli_query($con,$sql);

while ($row = mysqli_fetch_array($qrsql)) {		
		echo "<tr>";		
		$stt++;	
		echo "<td style='text-align: center;'>".$stt."</td>";
		echo "<td style='text-align: left;'>".$row['hoten']."</nobr></td>";		
		echo "<td style='text-align: left;'>".$row['diachi']."</td>";
		echo "<td style='text-align: right;'>".dinhdangsox($row['mucqua'])."</td>";		
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