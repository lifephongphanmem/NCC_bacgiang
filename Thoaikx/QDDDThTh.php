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
<body marginleft="25px">
<?php
include("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
$nambc = "";
$tenhuyen = "";
$inqd = "No";
if(isset($_POST['create'])){
	$nambc = $_POST['nambc'];
	$tenhuyen = $_POST['huyen'];
	if(isset($_POST['inqd']))
		$inqd = "Yes";
}
//làm việc với cơ sở dữ liệu
// kết nối csdl
$cc = array();
$cc2 = array();
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
$tongsodt = 0;
$tongsotien = 0;
$sotiencb = 2220000;
$sodoituong =0;
$sotien = 0;
$cs = 0;
$stt = 0;
$sql = "Select hoten,RIGHT (ngaysinh,4) as namsinh, doituong,xa,namddlt,tinhtrangsk from dieuduong".
	" WHERE phanloaidd = 'Tập trung' and namdd = '$nambc' and thaythe = 'Thay thế' and chuyen = 'Duyệt' and huyen = '$tenhuyen'";
$qrsql = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($qrsql)) {
	$tongsodt ++;
	$tongsotien +=$sotiencb;
	$cc[] = array('hoten' => $row['hoten'],
		'namsinh' => $row['namsinh'],
		'doituong' => $row['doituong'],
		'xa' => $row['xa'],
		'namddlt' => $row['namddlt'],
		'tinhtrangsk' => $row['tinhtrangsk'],
		'sotien' => $sotiencb
	);
}
/*
$sql = "Select hoten,RIGHT (ngaysinh,4) as namsinh, doituong,xa,namddlt,tinhtrangsk from dieuduong".
	" WHERE phanloaidd = 'Tập trung' and loaidd = 'Hai năm một lần' and namdd = '$nambc' and chuyen = 'Duyệt' and huyen = '$tenhuyen'";
$qrsql = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($qrsql)) {
	$tongsodt ++;
	$tongsotien +=$sotiencb;
	$cc2[] = array('hoten' => $row['hoten'],
		'namsinh' => $row['namsinh'],
		'doituong' => $row['doituong'],
		'xa' => $row['xa'],
		'namddlt' => $row['namddlt'],
		'tinhtrangsk' => $row['tinhtrangsk'],
		'sotien' => $sotiencb
	);
}
*/
?>
    <table cellspacing="0" cellpadding="0" border="0" style="padding-right: 15px;padding-left: 30px; <?php if($inqd == 'Yes') echo "display: none";?> " >
        <tr>
			<td style="text-align: center; font-size: 12pt;">UBND TỈNH BẮC GIANG</td>
			<td style="text-align: center; font-weight: bold;font-size: 13pt;">CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</td>
        </tr>
		<tr>
			<td style="text-align: center; font-weight: bold;font-size: 14pt;">SỞ LAO ĐỘNG - THƯƠNG BINH</td>
			<td style="text-align: center; font-weight: bold;font-size: 14pt;text-decoration: underline;">Độc lập - Tự do - Hạnh phúc</td>
		</tr>
		<tr>
			<td style="text-align: center; font-weight: bold;font-size: 14pt;text-decoration: underline;">VÀ XÃ HỘI</td>
			<td style="text-align: center; font-weight: bold;"></td>
		</tr>
		<tr style="height: 15px">
			<td style="text-align: center; font-weight: bold;font-size: 14pt;text-decoration: underline;"></td>
			<td style="text-align: center; font-weight: bold;"> </td>
		</tr>
		<tr>
			<td style="text-align: center; font-size: 14pt;">Số:  &nbsp;&nbsp;&nbsp;&nbsp;        /QĐ-LĐTB&XH</td>
			<td style="text-align: center; font-style: italic;font-size: 14pt;">Bắc Giang, ngày &nbsp;&nbsp;&nbsp;&nbsp; tháng &nbsp;&nbsp;&nbsp;&nbsp;    năm <?php echo $nambc;?></td>
		</tr>
		<tr style="height: 20px">
			<td style="text-align: center; font-weight: bold;font-size: 14pt;text-decoration: underline;"> </td>
			<td style="text-align: center; font-weight: bold;"> </td>
		</tr>
	</table>

	<table cellspacing="5px"  border="0" style="font-size: 14pt;padding-left: 50px;padding-right: 20px;<?php if($inqd == 'Yes') echo "display: none";?> ">
		<tr>
            <td  style="text-align: center;font-weight: bold;">QUYẾT ĐỊNH</td>
		</tr>				
		<tr>
			<td style="text-align: center;font-weight: bold;">Về việc điều chỉnh đối tượng người có công </td>
		</tr>
		<tr>
			<td style="text-align: center;font-weight: bold;">đi điều dưỡng tập trung <?php echo $tenhuyen . " năm ". $nambc;?></td>
		</tr>
		<tr style="height: 2px">
			<td style="text-align: center;font-weight: bold; font-style: italic;"> <hr  width="10%" size="2px"  align="center" />  </td>
		</tr>
		<tr style="height: 10px">
			<td style="text-align: center;font-weight: bold; font-style: italic;"> </td>
		</tr>
		<tr>
			<td style="text-align: center;font-weight: bold;">GIÁM ĐỐC SỞ LAO ĐỘNG - TB&XH TỈNH BẮC GIANG</td>
		</tr>
		<tr style="height: 10px">
			<td style="text-align: center;font-weight: bold; font-style: italic;"> </td>
		</tr>
		<tr>
			<td style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Căn cứ Nghị định số 31/2013/NĐ-CP ngày 09 tháng 4 năm 2013 của Chính phủ quy định chi tiết, hướng dẫn thi hành một số điều của Pháp lệnh ưu đãi người có công với cách mạng;</td>
		</tr>
		<tr>
			<td style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Căn cứ Thông tư liên tịch số 13/2014/TTLT-BLĐTBXH-BTC ngày 03 tháng 6 năm 2014 của Bộ Lao động - Thương binh và Xã hội, Bộ Tài chính hướng dẫn chế độ điều dưỡng phục hồi sức khỏe, cấp phương tiện trợ giúp, dụng cụ chỉnh hình đối với người có công với cách mạng và thân nhân; quản lý các công trình ghi công liệt sĩ;</td>
		</tr>
		<tr>
			<td style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xét đề nghị của Trưởng phòng Người có công,</td>
		</tr>
		<tr>
			<td style="text-align: center;font-weight: bold">QUYẾT ĐỊNH:</td>
		</tr>
		<tr>
			<td style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Điều 1.</b> Thực hiện chế độ điều dưỡng tập trung năm <?php echo $nambc;?> đối với <?php echo dinhdangso($tongsodt);?> đối tượng người có công thay thế cho <?php echo dinhdangso($tongsodt);?>    các đối tượng người có công với cách mạng do phòng Lao động - TB&XH <?php echo $tenhuyen;?> quản lý:</td>
		</tr>
		<tr>
			<td style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Số đối tượng điều dưỡng: <?php echo dinhdangso($tongsodt);?> người (<?php echo docsonguoi($tongsodt);?>).</td>
		</tr>
		<tr>
			<td style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Số tiền: <?php echo dinhdangso($tongsotien);?> (<?php echo docso($tongsotien);?>).</td>
		</tr>
		<tr>
			<td style="text-align: center;font-style: italic">(Theo danh sách đính kèm)</td>
		</tr>
		<tr>
			<td style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Điều 2.</b> Các ông (bà): Phòng Lao động - TB&XH <?php echo $tenhuyen;?> phối hợp với Trung tâm Điều dưỡng Người có công tỉnh Bắc Giang tổ chức thực hiện điều dưỡng tập trung đối với người có công với cách mạng theo đúng chế độ và quy định hiện hành.</td>
		</tr>
		<tr>
			<td style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Điều 3.</b> Các ông (bà): Trưởng phòng Người có công, Trưởng phòng Kế hoạch - Tài chính, Trưởng phòng Lao động - TB&XH <?php echo $tenhuyen;?>, Giám đốc Trung tâm Điều dưỡng Người có công tỉnh Bắc Giang và các ông (bà) có tên trong danh sách tại Điều 1 căn cứ Quyết định thi hành./.</td>
		</tr>
		<tr>
			<td style="text-align: justify;"></td>
		</tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="0" style="font-size: 14pt;padding-left: 50px;padding-right: 20px;<?php if($inqd == 'Yes') echo "display: none";?> ">
		<tr>
			<td style="text-align: justify; font-size: 11pt;"><b><i>Nơi nhận:</i></b></br> - Như Điều 3;</br> - Lưu: VT, NCC;</td>
			<td style="text-align: center;"><b> KT. GIÁM ĐỐC </br> PHÓ GIÁM ĐỐC</br></br></br></br></br></br>Nguyễn Thế Dũng</b></td>
		</tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="0" style="font-size: 14pt;">
		<tr>
			<td style="text-align: center;"> DANH SÁCH ĐỐI TƯỢNG NGƯỜI CÓ CÔNG VỚI CÁCH MẠNG HƯỞNG ĐIỀU DƯỠNG TẠI NHÀ NĂM <?php echo $nambc;?></td>
		</tr>
		<tr>
			<td style="text-align: center;"> <?php echo $tenhuyen;?></td>
		</tr>
		<tr>
			<td style="text-align: center;font-style: italic">(Kèm theo Quyết định số:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/QĐ-LĐTB&XH ngày &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/<?php echo $nambc;?> của Sở Lao động - TB&XH Bắc Giang)</td>
		</tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th  width="5%">STT</th>
			<th  width="20%">Họ và tên</th>
			<th  width="5%">Năm sinh</th>
			<th  width="25%">Đối tượng</th>
			<th  width="15%">Địa chỉ </br> (xã, phường, thị trấn)</th>
			<th  width="5%">Năm điều dưỡng liền kề trước đó</th>
			<th  width="10%">Tình trạng sức khỏe</th>
			<th  width="10%">Số tiền điều dưỡng (Đồng)</th>
			<th  width="5%">Ghi chú</th>
		</tr>
		<!--tr>
			<td style="text-align: center; font-weight: bold">A</td>
			<td colspan="8" style="text-align: left; font-weight: bold">Đối tượng thuộc diện điều dưỡng 1 năm/1 lần</td>
		</tr-->
		<?php
		$stt = 0;
		foreach($cc as $dt) {
			$stt++;
			echo "<tr>";
			echo "<td style='text-align: center;'>$stt</td>";
			echo "<td style='text-align: left;'><nobr>".$dt['hoten']."</nobr></td>";
			echo "<td style='text-align: center;'><nobr>".$dt['namsinh']."</nobr></td>";
			echo "<td style='text-align: left;'><nobr>".$dt['doituong']."</nobr></td>";
			echo "<td style='text-align: left;'><nobr>".$dt['xa']."</nobr></td>";
			echo "<td style='text-align: center;'><nobr>".$dt['namddlt']."</nobr></td>";
			echo "<td style='text-align: left;'><nobr>".$dt['tinhtrangsk']."</nobr></td>";
			echo "<td style='text-align: right;'><nobr>".dinhdangso($dt['sotien'])."</nobr></td>";
			echo "<td style='text-align: left;'></td>";
			echo "</tr>";
		}
		/*
		echo "<tr>";
		echo "<td style='text-align: center;font-weight: bold;'>B</td>";
		echo "<td colspan='8' style='text-align: left;font-weight: bold;'>Đối tượng thuộc diện điều dưỡng 2 năm/1 lần</td>";
		echo "</tr>";
		$stt = 0;
		foreach($cc2 as $dt) {
			$stt++;
			echo "<tr>";
			echo "<td style='text-align: center;'>$stt</td>";
			echo "<td style='text-align: left;'><nobr>".$dt['hoten']."</nobr></td>";
			echo "<td style='text-align: center;'><nobr>".$dt['namsinh']."</nobr></td>";
			echo "<td style='text-align: left;'><nobr>".$dt['doituong']."</nobr></td>";
			echo "<td style='text-align: left;'><nobr>".$dt['xa']."</nobr></td>";
			echo "<td style='text-align: center;'><nobr>".$dt['namddlt']."</nobr></td>";
			echo "<td style='text-align: left;'><nobr>".$dt['tinhtrangsk']."</nobr></td>";
			echo "<td style='text-align: right;'><nobr>".dinhdangso($dt['sotien'])."</nobr></td>";
			echo "<td style='text-align: left;'></td>";
			echo "</tr>";
		}
		echo "<tr style='font-weight: bold'>";
		echo "<td style='text-align: center;'></td>";
		echo "<td style='text-align: center;'><nobr>Tổng cộng (A+B): ".$tongsodt."</td>";
		echo "<td style='text-align: center;'></td>";
		echo "<td style='text-align: center;'></td>";
		echo "<td style='text-align: center;'></td>";
		echo "<td style='text-align: center;'></td>";
		echo "<td style='text-align: center;'></td>";
		echo "<td style='text-align: right;'><nobr>".dinhdangso($tongsotien)."</td>";
		echo "<td style='text-align: left;'></td>";
		echo "</tr>";
		*/
		?>
	</table>
</body>		
</html>	