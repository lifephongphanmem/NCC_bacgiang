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
$phanloai="";
$loaidoituong = "";
if(isset($_POST['create'])){
	$nambc = $_POST['nambc'];
	$tenhuyen = $_POST['huyen'];
	$tenxa = $_POST['xa'];
	$phanloai = $_POST['phanloai'];
	$loaidoituong = $_POST['loaidoituong'];
}
?>
<table cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td style="text-align: left;font-weight: bold;">
			<nobr><?php echo $tenxa;?></nobr>
		</td>
		<td width="40%">
		</td>
		<td style="text-align: center; font-weight: bold;"><nobr>Mẫu số 2b-CSSK</nobr></td>
	</tr>
	<tr>
		<td style="text-align: left;font-weight: bold;"><nobr>Sở Lao Động Thương Binh Xã Hội</nobr></td>
		<td>
		</td>
		<td style="text-align: center;" ><nobr>(Ban hành theo thông tư liên tịch số 13/2014/TTLT-BLDTBXH-BTC </br>ngày 03/6/2014 của Bộ Lao động - Thương binh và Xã hôi, Bộ Tài chính)</nobr></td>
	</tr>
</table>
<table cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td  style="text-align: center;font-weight: bold;">DANH SÁCH NGƯỜI CÓ CÔNG ĐƯỢC ĐIỀU DƯỠNG</td>
	</tr>
	<tr>
		<td style="text-align: center;font-weight: bold; font-style: italic;">(Kèm theo quyết định số ..../QĐ... ngày ... tháng ... năm ......</td>
	</tr>
	<tr>
		<td style="text-align: center;font-weight: bold; font-style: italic;">của Giám đốc Sở Lao động - Thương binh và Xã hội)</td>
	</tr>
</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th rowspan = "2" width="3%">STT</th>
			<th rowspan = "2" width="15%">Họ và tên</th>
			<th rowspan = "2" width="15%">Địa chỉ</th>
			<th rowspan = "2" width="10%">Đối tượng</th>
			<th rowspan = "2" width="10%">Tháng năm điều dưỡng lần trước liền kề</th>
			<th rowspan = "2" width="10%">Tình trạng sức khỏe</th>
			<th colspan = "3" width="30%">Số tiền điều dưỡng</th>
			<th rowspan = "2" width="7%">Ghi chú</th>
		</tr>	
		<tr>
			<th  width="10%">Tập trung</th>
			<th  width="10%">Tại nhà</th>
			<th  width="10%">Cộng</th>			
		</tr>				
		<tr>
			<th style="font-weight: inherit;">1</th>
			<th style="font-weight: inherit;">2</th>
			<th style="font-weight: inherit;">3</th>
			<th style="font-weight: inherit;">4</th>
			<th style="font-weight: inherit;">5</th>
			<th style="font-weight: inherit;">6</th>
			<th style="font-weight: inherit;">7</th>
			<th style="font-weight: inherit;">8</th>
			<th style="font-weight: inherit;">9</th>
			<th style="font-weight: inherit;">10</th>
		</tr>
<?php 
//làm việc với cơ sở dữ liệu
// kết nối csdl
$cc = array();
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require ("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
$taptrung = 0;
$tainha = 0;
$taptrung1 = 0;
$tainha1 = 0;
$sntaptrung = 0;
$sntainha = 0;
$sntaptrung1 = 0;
$sntainha1 = 0;
$cs = 0;
	echo "<tr style='vertical-align:top;'>";
	echo "<td style='width:0px;height:24px;'>A</td>";
	echo "<td class='csDC952B64' style='border-top-style: none;border-left:#000000 1px solid;vertical-align:middle;font-weight: bold;'>Người có công thuộc diện ĐD mỗi năm một lần</td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "</tr>";	
//
	
$stt = 0;
$sql = "Select DISTINCT doituong from dieuduong WHERE namdd = '$nambc' and chuyen = 'Duyệt' and loaidd = 'Một năm một lần'".
	" and huyen like '".$tenhuyen."%' and phanloaidd like '".$phanloai."%'".($loaidoituong == ""? "":" and doituong = '".$loaidoituong."'");
$qrsql = mysqli_query($con,$sql);
$ar = array();
while($rowdt = mysqli_fetch_array($qrsql))
{
	$ar[]=array('doituong'=>$rowdt[0]
	);
}
foreach ($ar as $ardt){
	echo "<tr style='vertical-align:top;'>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td class='csDC952B64' style='border-top-style: none;border-left:#000000 1px solid;vertical-align:middle;font-weight: bold;font-style: italic'>$ardt[doituong]</td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "</tr>";
	$sql = "Select hoten,truquan,doituong,namddlt,tinhtrangsk,phanloaidd,sotien from dieuduong WHERE namdd = '$nambc' and chuyen = 'Duyệt'".
		" and loaidd = 'Một năm một lần' and huyen like '".$tenhuyen."%' and phanloaidd like '".$phanloai."%' and doituong = '$ardt[doituong]' order by hoten";
	$qrsql = mysqli_query($con,$sql);
	$cc = array();
	while ($row = mysqli_fetch_array($qrsql)) {
		$stt++;

		if($row[5] == "Tập trung")
		{
			$taptrung += 2220000;
			$sntaptrung += 1;
		}
		if($row[5] == "Tại nhà")
		{
			$tainha+=1110000;
			$sntainha+=1;
		}

		echo "<tr>";
		echo "<td style='text-align: center;'>$stt</td>";
		echo "<td style='text-align: left;'><nobr>".$row[0]."</nobr></td>";
		echo "<td style='text-align: left;'><nobr>".$row[1]."</nobr></td>";
		echo "<td style='text-align: left;'><nobr>".$row[2]."</nobr></td>";
		echo "<td style='text-align: left;'><nobr>".$row[3]."</nobr></td>";
		echo "<td style='text-align: left;'>" . $row[4] . "</td>";
		echo "<td style='text-align: right;'>" . ($row[5] == "Tập trung"?dinhdangso(2220000):"") . "</td>";
		echo "<td style='text-align: right;'>" . ($row[5] == "Tại nhà"?dinhdangso(1110000):"") ."</td>";
		echo "<td style='text-align: right;'>" . ($row[5] == "Tập trung"?dinhdangso(2220000):dinhdangso(1110000)) . "</td>";
		echo "<td style='text-align: left;'></td>";
		echo "</tr>";
	}
}

echo "<tr>";
echo "<td style='text-align: center;'></td>";
echo "<td style='text-align: center;font-weight: bold;'> Cộng:</td>";
echo "<td style='text-align: right;font-weight: bold;'></td>";
echo "<td style='text-align: right;font-weight: bold;'>".dinhdangso($stt)."</td>";
echo "<td style='text-align: right;font-weight: bold;'></td>";
echo "<td style='text-align: right;font-weight: bold;'></td>";
echo "<td style='text-align: right;font-weight: bold;'>".dinhdangso($taptrung)."</td>";
echo "<td style='text-align: right;font-weight: bold;'>".dinhdangso($tainha)."</td>";
echo "<td style='text-align: right;font-weight: bold;'>".dinhdangso($taptrung+$tainha)."</td>";
echo "<td style='text-align: right;font-weight: bold;'></td>";
echo "</tr>";
// nhóm B
	echo "<tr style='vertical-align:top;'>";
	echo "<td style='width:0px;height:24px;'>B</td>";
	echo "<td class='csDC952B64' style='border-top-style: none;border-left:#000000 1px solid;vertical-align:middle;font-weight: bold;'>Người có công thuộc diện ĐD hai năm một lần</td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "</tr>";	
//
	
	$cs = 0;
	$stt =0;
//$sql = "Select hoten,truquan,doituong,namddlt,tinhtrangsk,phanloaidd,sotien from dieuduong WHERE namdd = '$nambc' and chuyen = 'Duyệt' and loaidd = 'Hai năm một lần'".
//($tenxa == ""?"":" and xa = '$tenxa'").($tenhuyen == ""?"":" and huyen = '$tenhuyen'")
//." order by hoten";
$sql = "Select DISTINCT doituong from dieuduong".
	" WHERE namdd = '$nambc' and chuyen = 'Duyệt' and loaidd = 'Hai năm một lần' and huyen like '".$tenhuyen."%'".
	" and phanloaidd like '".$phanloai."%'".($loaidoituong == ""? "":" and doituong = '".$loaidoituong."'");
$qrsql = mysqli_query($con,$sql);
$ar = array();
while($rowdt = mysqli_fetch_array($qrsql))
{
	$ar[]=array('doituong'=>$rowdt[0]
	);
}
foreach ($ar as $ardt){
//while ($rowdt = mysqli_fetch_array($qrsql)) {
	echo "<tr style='vertical-align:top;'>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td class='csDC952B64' style='border-top-style: none;border-left:#000000 1px solid;vertical-align:middle;font-weight: bold;font-style: italic'>$ardt[doituong]</td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "<td style='width:0px;height:24px;'></td>";
	echo "</tr>";
	$sql = "Select hoten,truquan,doituong,namddlt,tinhtrangsk,phanloaidd,sotien from dieuduong" .
		" WHERE namdd = '$nambc' and chuyen = 'Duyệt' and loaidd = 'Hai năm một lần' and huyen like '" . $tenhuyen . "%'" .
		" and phanloaidd like '" . $phanloai . "%' and doituong = '$ardt[doituong]' order by hoten";
	$qrsql = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array($qrsql)) {
		$stt++;
		if ($row[5] == "Tập trung") {
			$taptrung1 += 2220000;
			$sntaptrung1 += 1;
		}
		if ($row[5] == "Tại nhà") {
			$tainha1 += 1110000;
			$sntainha1 += 1;
		}

		echo "<tr>";
		echo "<td style='text-align: center;'>$stt</td>";
		echo "<td style='text-align: left;'><nobr>" . $row[0] . "</nobr></td>";
		echo "<td style='text-align: left;'><nobr>" . $row[1] . "</nobr></td>";
		echo "<td style='text-align: left;'><nobr>" . $row[2] . "</nobr></td>";
		echo "<td style='text-align: left;'><nobr>" . $row[3] . "</nobr></td>";
		echo "<td style='text-align: left;'>" . $row[4] . "</td>";
		echo "<td style='text-align: right;'>" . ($row[5] == "Tập trung" ? dinhdangso(2220000) : "") . "</td>";
		echo "<td style='text-align: right;'>" . ($row[5] == "Tại nhà" ? dinhdangso(1110000) : "") . "</td>";
		echo "<td style='text-align: right;'>" . ($row[5] == "Tập trung" ? dinhdangso(2220000) : dinhdangso(1110000)) . "</td>";
		echo "<td style='text-align: left;'></td>";
		echo "</tr>";
	}
}

echo "<tr>";
echo "<td style='text-align: center;'></td>";
echo "<td style='text-align: center;font-weight: bold;'> Cộng:</td>";
echo "<td style='text-align: right;font-weight: bold;'></td>";
echo "<td style='text-align: right;font-weight: bold;'>".dinhdangso($stt)."</td>";
echo "<td style='text-align: right;font-weight: bold;'></td>";
echo "<td style='text-align: right;font-weight: bold;'></td>";
echo "<td style='text-align: right;font-weight: bold;'>".dinhdangso($taptrung1)."</td>";
echo "<td style='text-align: right;font-weight: bold;'>".dinhdangso($tainha1)."</td>";
echo "<td style='text-align: right;font-weight: bold;'>".dinhdangso($taptrung1+$tainha1)."</td>";
echo "<td style='text-align: right;font-weight: bold;'></td>";
echo "</tr>";

echo "<tr>";
echo "<td style='text-align: center;'></td>";
echo "<td style='text-align: center;font-weight: bold;'> Tổng cộng:</td>";
echo "<td style='text-align: right;font-weight: bold;'></td>";
echo "<td style='text-align: right;font-weight: bold;'>".dinhdangso($sntaptrung+$sntaptrung1+$sntainha+$sntainha1)."</td>";
echo "<td style='text-align: right;font-weight: bold;'></td>";
echo "<td style='text-align: right;font-weight: bold;'></td>";
echo "<td style='text-align: right;font-weight: bold;'>".dinhdangso($taptrung+$taptrung1)."</td>";
echo "<td style='text-align: right;font-weight: bold;'>".dinhdangso($tainha+$tainha1)."</td>";
echo "<td style='text-align: right;font-weight: bold;'>".dinhdangso($taptrung+$taptrung1+$tainha+$tainha1)."</td>";
echo "<td style='text-align: right;font-weight: bold;'></td>";
echo "</tr>";
?>
	</table>
<table >
	<tr>	
	</tr>
	<tr>
		<td colspan = 2 width="30%" style="text-align: left;" >Tổng số đề nghị điều dưỡng trong năm: </td>
		<td width="10%" style="text-align: left;">Số người: <?php echo dinhdangso($sntaptrung+$sntaptrung1+$sntainha+$sntainha1);?></td>
		<td width="55%" style="text-align: left;">Số tiền: <?php echo dinhdangso($taptrung+$taptrung1+$tainha+$tainha1);?></td>
	</tr>	
	<tr>
		<td width="10%" style="text-align: left;">Trong đó:</td>
		<td width="20%" style="text-align: left;" > - Điều dưỡng tập trung: </td>
		<td width="10%" style="text-align: left;">Số người: <?php echo dinhdangso($sntaptrung+$sntaptrung1);?></td>
		<td width="60%" style="text-align: left;">Số tiền: <?php echo dinhdangso($taptrung+$taptrung1);?></td>
	</tr>
	<tr>
		<td width="10%" style="text-align: left;"></td>
		<td width="20%" style="text-align: left;" > - Điều dưỡng tại nhà: </td>
		<td width="10%" style="text-align: left;">Số người: <?php echo dinhdangso($sntainha+$sntainha1);?></td>
		<td width="60%" style="text-align: left;">Số tiền: <?php echo dinhdangso($tainha+$tainha1);?></td>
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
		<td style="text-align: center;: center; font-weight: bold;"></td>
		<td style="text-align: center; font-weight: bold;"> GIÁM ĐỐC</td>
	</tr>
	<tr>
		<td style="text-align: center; font-style: italic;"></td>
		<td style="text-align: center; font-style: italic;">(Ký, ghi rõ họ và tên, đóng dấu)</td>
	</tr>
</table>
</body>		
</html>	