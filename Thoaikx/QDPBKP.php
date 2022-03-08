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
$inqd = "No";
$phanloai = "";
if(isset($_POST['create'])){
	$nambc = $_POST['nambc'];
	$phanloai = $_POST['phanloai'];
	if(isset($_POST['inqd']))
		$inqd = "Yes";
}

//làm việc với cơ sở dữ liệu
// kết nối csdl
$cc = array();
$cch = array();
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
$tongsodt = 0;
$tongsodttt = 0;
$tongsodttn = 0;
$tongsotien = 0;
$tongsotientt = 0;
$tongsotientn = 0;
$sotiencb = 2220000;
$sodoituongtt =0;
$sodoituongtn =0;
$sotientt = 0;
$sotientn = 0;
$cs = 0;
$stt = 0;
$sql = "Select DISTINCT huyen from dieuduong WHERE namdd = '$nambc' and chuyen = 'Duyệt' and phanloaidd like '$phanloai%'";
$qrsql = mysqli_query($con,$sql);
while($rowh = mysqli_fetch_array($qrsql)) {
	$cch[] = array('huyen' => $rowh['huyen']
	);
}
foreach ($cch  as $huyen){
	$tongsodt = 0;
	$sotiencb = 2220000;
	$sodoituongtt =0;
	$sodoituongtn =0;
	$sotientt = 0;
	$sotientn = 0;
	$sql = "Select count(iddieuduong) as sodt, phanloaidd from dieuduong WHERE namdd = '$nambc' and huyen = '$huyen[huyen]' and chuyen = 'Duyệt' and phanloaidd like '$phanloai%' group by phanloaidd";
	$qrsql = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array($qrsql)) {

		if ($row['phanloaidd'] == "Tập trung") {
			$sotiencb = 2220000;
			$sodoituongtt = $row[0];
			$tongsodttt += $sodoituongtt;
			$tongsodt += $sodoituongtt;
			$sotientt = $sodoituongtt * $sotiencb;
			$tongsotientt += $sotientt;
		}
		if ($row['phanloaidd'] == "Tại nhà") {
			$sotiencb = 1110000;
			$sodoituongtn = $row[0];
			$tongsodttn += $sodoituongtn;
			$tongsodt += $sodoituongtn;
			$sotientn = $sodoituongtn * $sotiencb;
			$tongsotientn += $sotientn;
		}
		$tongsotien += $sotientt + $sotientn;
	}
	$cc[] = array('donvi' => $huyen['huyen'],
		'chitieutt' => $sodoituongtt,
		'kinhphitt' => $sotientt,
		'chitieutn' => $sodoituongtn,
		'kinhphitn' => $sotientn
	);
}
?>
    <table cellspacing="0" cellpadding="0" border="0" style="padding-right: 15px;padding-left: 30px;<?php if($inqd == 'Yes') echo "display: none";?>" >
        <tr>
			<td style="text-align: center; font-weight: bold;font-size: 12pt;">UBND TỈNH BẮC GIANG</td>
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
		<tr>
			<td style="text-align: center; font-size: 14pt;">Số:   &nbsp;&nbsp;&nbsp;&nbsp;       /QĐ-LĐTB&XH</td>
			<td style="text-align: center; font-style: italic;font-size: 14pt;">Bắc Giang, ngày &nbsp;&nbsp;&nbsp;&nbsp; tháng &nbsp;&nbsp;&nbsp;&nbsp;    năm <?php echo $nambc;?></td>
		</tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="0" style="font-size: 14pt;<?php if($inqd == 'Yes') echo "display: none";?>">
		<tr>
            <td  style="text-align: center;font-weight: bold;">QUYẾT ĐỊNH</td>
		</tr>				
		<tr>
			<td style="text-align: center;font-weight: bold; font-style: italic;">V/v phân bổ chỉ tiêu và kinh phí điều dưỡng tập trung </td>
		</tr>
		<tr>
			<td style="text-align: center;font-weight: bold; font-style: italic;">đối với người có công năm 2018</td>
		</tr>
		<tr>
			<td style="text-align: center;font-weight: bold; font-style: italic;">GIÁM ĐỐC SỞ LAO ĐỘNG - TB&XH TỈNH BẮC GIANG</td>
		</tr>
		<tr>
			<td style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Căn cứ Thông tư liên tịch số 13/2014/TTLT-BLĐTBXH-BTC ngày 03/6/2014 của liên bộ; Bộ Lao động - Thương binh và Xã hội, Bộ Tài chính hướng dẫn chế độ điều dưỡng phục hồi sức khỏe, cấp phương tiện trợ giúp, dụng cụ chỉnh hình đối với người có công với cách mạng và thân nhân; quản lý các công trình ghi công liệt sĩ;</td>
		</tr>
		<tr>
			<td style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Căn cứ Quyết định số 2069/QĐ-LĐTBXH ngày 29/12/2017 của Bộ Lao động - Thương binh và Xã hội về việc giao dự toán ngân sách Nhà nước năm 2018 thực hiện Pháp lệnh ưu đãi người có công;</td>
		</tr>
		<tr>
			<td style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xét đề nghị của Trưởng phòng Người có công,</td>
		</tr>
		<tr>
			<td style="text-align: center;font-weight: bold">QUYẾT ĐỊNH:</td>
		</tr>
		<tr>
			<td style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Điều 1.</b> Phân bổ chỉ tiêu và kinh phí để thực hiện điều dưỡng tập trung đối với <?php echo dinhdangso($tongsodt);?> đại biểu người có công năm <?php echo $nambc;?> cho Trung tâm Điều dưỡng Người có công tỉnh Bắc Giang và 10 huyện, thành phố.</td>
		</tr>
		<tr>
			<td style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kinh phí thực hiện điều dưỡng: <?php echo dinhdangso($tongsotien);?> (giao cho Trung tâm Điều dưỡng Người có công tỉnh Bắc Giang).</td>
		</tr>
		<tr>
			<td style="text-align: center;font-style: italic">(<?php echo docso($tongsotien);?>).</td>
		</tr>
		<tr>
			<td style="text-align: center;font-style: italic">(Chi tiết theo biểu đính kèm)</td>
		</tr>
		<tr>
			<td style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Điều 2.</b> Phòng Lao động - Thương binh và Xã hội các huyện, thành phố xét duyệt lập danh sách đối tượng được điều dưỡng đủ sức khỏe đi điều dưỡng tập trung theo chỉ tiêu được phân bổ; Trung tâm Điều dưỡng Người có công tỉnh Bắc Giang quản lý, sử dụng kinh phí theo đúng quy định của Luật Ngân sách Nhà nước và các văn bản hướng dẫn thực hiện.</td>
		</tr>
		<tr>
			<td style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Điều 3.</b>Các ông (bà): Trưởng phòng Người có công, Trưởng phòng Kế hoạch - Tài chính, Giám đốc Trung tâm Điều dưỡng Người có công tỉnh Bắc Giang, Trưởng phòng Lao động - Thương binh và Xã hội các huyện, thành phố căn cứ Quyết định thi hành./.</td>
		</tr>
		<tr>
			<td style="text-align: justify;"></td>
		</tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="0" style="font-size: 14pt;<?php if($inqd == 'Yes') echo "display: none";?>">
		<tr>
			<td style="text-align: justify; font-size: 11pt;"><b><i>Nơi nhận:</i></b></br> - Như Điều 3;</br> - Lưu: VT, NCC;<b><i></br>Bản điện tử:</i></b></br> - Giám đốc Sở;</br> - PGĐ Sở Nguyễn Thế Dũng;</td>
			<td style="text-align: center;"><b> KT. GIÁM ĐỐC </br> PHÓ GIÁM ĐỐC</br></br></br></br></br></br>Nguyễn Thế Dũng</b></td>
		</tr>
	</table>
	</br></br>
	<table cellspacing="0" cellpadding="0" border="0" style="font-size: 14pt;">
		<tr>
			<td style="text-align: center;">BIỂU PHÂN BỔ CHỈ TIÊU VÀ KINH PHÍ ĐIỀU DƯỠNG TẬP TRUNG NĂM <?php echo $nambc;?></td>
		</tr>
		<tr>
			<td style="text-align: center;font-style: italic">(Kèm theo Quyết định số:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/QĐ-LĐTB&XH ngày &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/<?php echo $nambc;?> của Sở Lao động - TB&XH)</td>
		</tr>
		<tr>
			<td style="text-align: right;font-style: italic">Đơn vị tính: Đồng</td>
		</tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse; <?php if($phanloai == "Tại nhà" || $phanloai == "") echo "display: none";?> ">
		<tr>
			<th  width="10%">STT</th>
			<th  width="25%">Đơn vị (huyện, thành phố)</th>
			<th  width="25%">Chỉ tiêu điều dưỡng tập trung (người)</th>
			<th  width="25%">Kinh phí điều dưỡng tập trung (đồng)</th>
			<th  width="15%">Ghi chú</th>
		</tr>
		<?php
		$stt = 0;
		foreach($cc as $dt) {
			$stt++;
			echo "<tr>";
			echo "<td style='text-align: center;'>$stt</td>";
			echo "<td style='text-align: left;'><nobr>".$dt['donvi']."</nobr></td>";
			echo "<td style='text-align: center;'><nobr>".dinhdangso($dt['chitieutt'])."</nobr></td>";
			echo "<td style='text-align: center;'><nobr>".dinhdangso($dt['kinhphitt'])."</nobr></td>";
			echo "<td style='text-align: left;'></td>";
			echo "</tr>";
		}
		echo "<tr style='font-weight: bold'>";
		echo "<td style='text-align: center;'></td>";
		echo "<td style='text-align: center;'><nobr>Tổng cộng</nobr></td>";
		echo "<td style='text-align: center;'><nobr>".dinhdangso($tongsodttt)."</nobr></td>";
		echo "<td style='text-align: center;'><nobr>".dinhdangso($tongsotientt)."</nobr></td>";
		echo "<td style='text-align: left;'></td>";
		echo "</tr>";
		?>
	</table>

<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse; <?php if($phanloai == "Tập trung" || $phanloai == "") echo "display: none";?> ">
	<tr>
		<th  width="10%">STT</th>
		<th  width="25%">Đơn vị (huyện, thành phố)</th>
		<th  width="25%">Chỉ tiêu điều dưỡng tại nhà (người)</th>
		<th  width="25%">Kinh phí điều dưỡng tại nhà (đồng)</th>
		<th  width="15%">Ghi chú</th>
	</tr>
	<?php
	$stt = 0;
	foreach($cc as $dt) {
		$stt++;
		echo "<tr>";
		echo "<td style='text-align: center;'>$stt</td>";
		echo "<td style='text-align: left;'><nobr>".$dt['donvi']."</nobr></td>";
		echo "<td style='text-align: center;'><nobr>".dinhdangso($dt['chitieutn'])."</nobr></td>";
		echo "<td style='text-align: center;'><nobr>".dinhdangso($dt['kinhphitn'])."</nobr></td>";
		echo "<td style='text-align: left;'></td>";
		echo "</tr>";
	}
	echo "<tr style='font-weight: bold'>";
	echo "<td style='text-align: center;'></td>";
	echo "<td style='text-align: center;'><nobr>Tổng cộng</nobr></td>";
	echo "<td style='text-align: center;'><nobr>".dinhdangso($tongsodttn)."</nobr></td>";
	echo "<td style='text-align: center;'><nobr>".dinhdangso($tongsotientn)."</nobr></td>";
	echo "<td style='text-align: left;'></td>";
	echo "</tr>";
	?>
</table>

<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse; <?php if($phanloai != "") echo "display: none";?> ">
	<tr>
		<th  width="5%">STT</th>
		<th  width="25%">Đơn vị (huyện, thành phố)</th>
		<th  width="15%">Chỉ tiêu điều dưỡng tập trung (người)</th>
		<th  width="15%">Kinh phí điều dưỡng tập trung (đồng)</th>
		<th  width="15%">Chỉ tiêu điều dưỡng tại nhà (người)</th>
		<th  width="15%">Kinh phí điều dưỡng tại nhà (đồng)</th>
		<th  width="10%">Ghi chú</th>
	</tr>
	<?php
	$stt = 0;
	foreach($cc as $dt) {
		$stt++;
		echo "<tr>";
		echo "<td style='text-align: center;'>$stt</td>";
		echo "<td style='text-align: left;'><nobr>".$dt['donvi']."</nobr></td>";
		echo "<td style='text-align: center;'><nobr>".dinhdangso($dt['chitieutt'])."</nobr></td>";
		echo "<td style='text-align: center;'><nobr>".dinhdangso($dt['kinhphitt'])."</nobr></td>";
		echo "<td style='text-align: center;'><nobr>".dinhdangso($dt['chitieutn'])."</nobr></td>";
		echo "<td style='text-align: center;'><nobr>".dinhdangso($dt['kinhphitn'])."</nobr></td>";
		echo "<td style='text-align: left;'></td>";
		echo "</tr>";
	}
	echo "<tr style='font-weight: bold'>";
	echo "<td style='text-align: center;'></td>";
	echo "<td style='text-align: center;'><nobr>Tổng cộng</nobr></td>";
	echo "<td style='text-align: center;'><nobr>".dinhdangso($tongsodttt)."</nobr></td>";
	echo "<td style='text-align: center;'><nobr>".dinhdangso($tongsotientt)."</nobr></td>";
	echo "<td style='text-align: center;'><nobr>".dinhdangso($tongsodttn)."</nobr></td>";
	echo "<td style='text-align: center;'><nobr>".dinhdangso($tongsotientn)."</nobr></td>";
	echo "<td style='text-align: left;'></td>";
	echo "</tr>";
	?>
</table>

</body>		
</html>	