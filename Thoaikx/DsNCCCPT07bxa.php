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
$nambc = "";
$tenhuyen = "";
$tenxa = "";
if(isset($_POST['create'])){
	$nambc = $_POST['nambc'];
	$tenxa = $_POST['xa'];
	$tenhuyen = $_POST['huyen'];	
}
?>
    <table cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td style="text-align: left;font-weight: bold;">
				<nobr></nobr>
            </td>
            <td width="40%">
            </td>
			<td style="text-align: center; font-weight: bold;"><nobr>Mẫu số 07b-CSSK</nobr></td>
        </tr>
		<tr>
			<td style="text-align: left;font-weight: bold;"><nobr></nobr></td>
			<td>
			</td>
			<td style="text-align: center;" ><nobr>(Ban hành theo thông tư liên tịch số 13/2014/TTLT-BLDTBXH-BTC </br>ngày 03/6/2014 của Bộ Lao động - Thương binh và Xã hôi, Bộ Tài chính)</nobr></td>
		</tr>
		</table>
		<table cellspacing="0" cellpadding="0" border="0">
		<tr>
            <td  style="text-align: center;font-weight: bold;">DANH SÁCH NGƯỜI CÓ CÔNG VỚI CÁCH MẠNG VÀ THÂN NHÂN ĐƯỢC</td>
		</tr>
		<tr>
            <td  style="text-align: center;font-weight: bold;">CẤP PHƯƠNG TIỆN TRỢ GIÚP, DỤNG CỤ CHỈNH HÌNH</td>
		</tr>
		<tr>
            <td  style="text-align: center;font-style: italic;">(Ban hành theo quyết định sô .../QĐ... của ... ngày ... tháng ... năm ...... của ...)</td>
		</tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th  width="5%">Số TT</th>
			<th  width="15%">Họ và tên</th>
			<th  width="20%">Nơi quản lý trợ cấp</th>
			<th  width="10%">Số hồ sơ NCC</th>
			<th  width="10%">Số sổ theo dõi trang cấp</th>
			<th  width="20%">Loại phương tiện trợ giúp và dụng cụ chỉnh hình, vật phẩm phụ được hưởng</th>
			<th  width="10%">Niên hạn sử dụng</th>
			<th  width="10%">Số tiền</th>			
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
		</tr>	
<?php 
//làm việc với cơ sở dữ liệu
// kết nối csdl
$cc = array();
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require ("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
	$stt =0;	
$sql = "Select phuongtien.hoten,phuongtien.noiql,phuongtien.mahsbo,phuongtien.sosoql,ctphuongtien.tenphuongtien,ctphuongtien.nienhan,ctphuongtien.sotien ,ctphuongtien.ngaycap from phuongtien inner join ctphuongtien on phuongtien.idphuongtien = ctphuongtien.idphuongtien WHERE ctphuongtien.ngaycap like '%$nambc%' and phuongtien.chuyen = 'Duyệt' and xa = '$tenxa' order by phuongtien.hoten";
$qrsql = mysqli_query($con,$sql);
$hoten = "";
while ($row = mysqli_fetch_array($qrsql)) {		
		echo "<tr>";		
		$hoten != $row[0]?$stt++:$stt+0;
		echo "<td style='text-align: center;'>".($hoten != $row[0]?$stt:"")."</td>";
		echo "<td style='text-align: left;'><nobr>".($hoten != $row[0]?$row['hoten']:"")."</nobr></td>";
		echo "<td style='text-align: left;'><nobr>".($hoten != $row[0]?$row['noiql']:"")."</nobr></td>";
		echo "<td style='text-align: left;'><nobr>".($hoten != $row[0]?$row['mahsbo']:"")."</nobr></td>";
		echo "<td style='text-align: left;'><nobr>".($hoten != $row[0]?$row['sosoql']:"")."</nobr></td>";
		echo "<td style='text-align: left;'><nobr>".$row['tenphuongtien']."</nobr></td>";
		echo "<td style='text-align: left;'>" . $row['nienhan'] . "</td>";
		echo "<td style='text-align: right;'>" . dinhdangso($row['sotien']) . "</td>";
		echo "</tr>";
		$hoten = $row[0];
	}
?>
	</table>
<table >
	<tr>	
	</tr>
	<tr>
		<td width="33%"></td>
		<td width="33%"></td>
		<td width="33%" style="text-align: center;">............, ngày ... tháng ... năm ......</td>
	</tr>
	<tr>
		<td style="text-align: center;: center; font-weight: bold;">TRƯỞNG PHÒNG NGƯỜI CÓ CÔNG</td>
		<td style="text-align: center;: center; font-weight: bold;">TRƯỞNG PHÒNG TÀI CHÍNH</td>
		<td style="text-align: center; font-weight: bold;"> GIÁM ĐỐC</td>
	</tr>
	<tr>
		<td style="text-align: center; font-style: italic;">(Ký, ghi rõ họ và tên)</td>
		<td style="text-align: center; font-style: italic;">(Ký, ghi rõ họ và tên)</td>
		<td style="text-align: center; font-style: italic;">(Ký, ghi rõ họ và tên, đóng dấu)</td>
	</tr>
</table>

<table >
	<tr>	
	</tr>
	<tr>
		<td width="50%"></td>
		<td width="50%" style="text-align: center;">............, ngày ... tháng ... năm ......</td>
	</tr>
	<tr>
		<td style="text-align: center;: center; font-weight: bold;">Người lập biểu</td>
		<td style="text-align: center; font-weight: bold;"> TRƯỞNG PHÒNG LĐTBXH</td>
	</tr>
	<tr>
		<td style="text-align: center; font-style: italic;">(Ký, ghi rõ họ và tên)</td>
		<td style="text-align: center; font-style: italic;">(Ký, ghi rõ họ và tên, đóng dấu)</td>
	</tr>
</table>
</body>		
</html>	