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
function ktnam($nam)
{
	$kq="";
	if ($nam==2016)
		$kq="bhyt16";
	else if ($nam==2017)
		$kq="bhyt17";
	else if ($nam==2018)
		$kq="bhyt18";
	else if ($nam==2019)
		$kq="bhyt19";
	else if ($nam==2020)
		$kq="bhyt20";
	return $kq;
}
$nambc = "";
$tenhuyen = "";
//$tenxa = "";
$thangbc="";
if(isset($_POST['create'])){
	$nambc = $_POST['nam'];
	$thangbc = $_POST['thang'];
	$tenxa = $_POST['xa'];
	$tenhuyen = $_POST['huyen'];	
}
?>
    <table cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td style="text-align: left;font-weight: bold;">
				<nobr>.................................</nobr>
            </td>
            <td width="40%">
            </td>
			<td style="text-align: center; font-weight: bold;"><nobr>Mẫu số D03-TS</nobr></td>
        </tr>
		<tr>
			<td style="text-align: left;font-weight: bold;"><nobr>Đơn vị: <?php echo $tenxa;?></nobr></td>
			<td>
			</td>
			<td style="text-align: center;" ><nobr>(Ban hành kem theo quyết định số:1111/QĐ-BHXH </br>ngày 25/01/2011 của BHXH Việt Nam)</nobr></td>
		</tr>
		</table>
		<table cellspacing="0" cellpadding="0" border="0">
		<tr>
            <td  style="text-align: center;font-weight: bold;">DANH SÁCH THAM GIA BẢO HIỂM Y TẾ ĐƯỢC DUYỆT</td>
		</tr>		
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th  width="5%">STT</th>
			<th  width="16%">Họ và tên</th>
			<th  width="9%">Mã số thẻ</th>
			<th  width="7%">Ngày sinh</th>
			<th  width="7%">Giới tính</th>
			<th  width="18%">Địa chỉ</th>
			<th  width="18%">Nơi đăng ký</th>
			<th  width="10%">Thời hạn từ</th>
			<th  width="10%">Thời hạn đến</th>
		</tr>				
<?php 
//làm việc với cơ sở dữ liệu
// kết nối csdl
//$cc = array();
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require ("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
$stt =0;	
$sql = "Select hoten,mathe,ngaysinh,gioitinh,truquan,noidk,thtu,thden From ".ktnam($nambc)." Where xacnhan='Duyệt' and thang=".$thangbc." and huyen='".$tenhuyen."'";
//echo $sql;
$qrsql = mysqli_query($con,$sql);
$hoten = "";
while ($row = mysqli_fetch_array($qrsql)) {		
		echo "<tr>";		
			$stt++;	
			echo "<td style='text-align: center;'>".$stt."</td>";
			echo "<td style='text-align: left;'>".$row[0]."</td>";
			echo "<td style='text-align: center;'>".$row[1]."</td>";
			echo "<td style='text-align: center;'>".$row[2]."</td>";
			echo "<td style='text-align: center;'>".$row[3]."</td>";
			echo "<td style='text-align: left;'>".$row[4]."</td>";
			echo "<td style='text-align: left;'>".$row[5]."</td>";
			echo "<td style='text-align: center;'>".$row[6]."</td>";
			echo "<td style='text-align: center;'>".$row[7]."</td>";
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