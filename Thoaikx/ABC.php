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
function dinhdangsoxx($so)
		{
			$kq = "";
			if ($so !=0)			
				$kq = number_format($so);					
			return $kq;	
		}
$tendv = "";
$capql = "";
if(isset($_POST['create'])){
	$tendv = $_POST['xahuyen'];
	$capql = $_POST['quanly'];
}
?>   
		<table cellspacing="0" cellpadding="0" border="0">
		<tr>
            <td  style="text-align: center;font-weight: bold;">BIỂU THỐNG KÊ SỐ LƯỢNG HỒ SƠ NGƯỜI CÓ CÔNG TRÊN PHẦN MỀM</td>
		</tr>
		<tr>
		<?php
		if ($capql=="Tỉnh")
            echo "<td  style='text-align: center;font-weight: bold;'>".$tendv."</td>";
		else if($capql=="Huyện")
			echo "<td  style='text-align: center;font-weight: bold;'>Huyện (Thành phố) ".$tendv."</td>";
		else if($capql=="Xã")
			echo "<td  style='text-align: center;font-weight: bold;'>Xã(phường, thị trấn) ".$tendv."</td>";
		?>	
		</tr>		
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th  width="5%">STT</th>
			<th  width="29%">Hồ sơ Người có công với Cách mạng</th>
			<th  width="6%">Tổng số</th>
			<th  width="6%">Hiệp Hòa</th>
			<th  width="6%">Lạng Giang</th>
			<th  width="6%">Lục Ngạn</th>
			<th  width="6%">Lục Nam</th>
			<th  width="6%">Thành Phố</th>
			<th  width="6%">Tân Yên</th>
			<th  width="6%">Việt Yên</th>
			<th  width="6%">Sơn Động</th>
			<th  width="6%">Yên Dũng</th>
			<th  width="6%">Yên Thế</th>
		</tr>				
<?php 
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require ("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
$tong=0;$h1=0;$h2=0;$h3=0;$h4=0;$h5=0;$h6=0;$h7=0;$h8=0;$h9=0;$h10=0;	
$ttong=0;$th1=0;$th2=0;$th3=0;$th4=0;$th5=0;$th6=0;$th7=0;$th8=0;$th9=0;$th10=0;	
$sql1 = "Select count(idhsbm) as hs, huyen From hosobm Group by huyen";
$qrsql1 = mysqli_query($con,$sql1);
while ($row1 = mysqli_fetch_array($qrsql1)) {
	if($row1[1]=="Hiệp Hòa")	
		$h1=$row1[0];
	if($row1[1]=="Lạng Giang")
		$h2=$row1[0];
	if($row1[1]=="Lục Ngạn")
		$h3=$row1[0];
	if($row1[1]=="Lục Nam")
		$h4=$row1[0];
	if($row1[1]=="TP Bắc Giang")
		$h5=$row1[0];
	if($row1[1]=="Tân Yên")
		$h6=$row1[0];
	if($row1[1]=="Việt Yên")
		$h7=$row1[0];
	if($row1[1]=="Sơn Động")
		$h8=$row1[0];
	if($row1[1]=="Yên Dũng")
		$h9=$row1[0];
	if($row1[1]=="Yên Thế")
		$h10=$row1[0];
	}
	$tong=$h1+$h2+$h3+$h4+$h5+$h6+$h7+$h8+$h9+$h10;
	$ttong=$ttong+$tong;$th1=$th1+$h1;$th2=$th2+$h2;$th3=$th3+$h3;$th4=$th4+$h4;$th5=$th5+$h5;$th6=$th6+$h6;$th7=$th7+$h7;$th8=$th8+$h8;$th9=$th9+$h9;$th10=$th10+$h10;
	echo "<tr>";
		echo "<td style='text-align: center;'>1</td>";
		echo "<td style='text-align: left;'>Hồ sơ Bà mẹ Việt Nam anh hùng</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($tong)."</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($h1)."</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($h2)."</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($h3)."</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($h4)."</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($h5)."</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($h6)."</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($h7)."</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($h8)."</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($h9)."</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($h10)."</td>";
	echo "</tr>";
	$tong=0;$h1=0;$h2=0;$h3=0;$h4=0;$h5=0;$h6=0;$h7=0;$h8=0;$h9=0;$h10=0;
$sql2 = "Select count(idhsls) as hs,huyen From hosols Group by huyen";
$qrsql2 = mysqli_query($con,$sql2);
while ($row2 = mysqli_fetch_array($qrsql2)) {
		if($row2[1]=="Hiệp Hòa")	
		$h1=$row2[0];
	if($row2[1]=="Lạng Giang")
		$h2=$row2[0];
	if($row2[1]=="Lục Ngạn")
		$h3=$row2[0];
	if($row2[1]=="Lục Nam")
		$h4=$row2[0];
	if($row2[1]=="TP Bắc Giang")
		$h5=$row2[0];
	if($row2[1]=="Tân Yên")
		$h6=$row2[0];
	if($row2[1]=="Việt Yên")
		$h7=$row2[0];
	if($row2[1]=="Sơn Động")
		$h8=$row2[0];
	if($row2[1]=="Yên Dũng")
		$h9=$row2[0];
	if($row2[1]=="Yên Thế")
		$h10=$row2[0];
	}	
	$tong=$h1+$h2+$h3+$h4+$h5+$h6+$h7+$h8+$h9+$h10;
	$ttong=$ttong+$tong;$th1=$th1+$h1;$th2=$th2+$h2;$th3=$th3+$h3;$th4=$th4+$h4;$th5=$th5+$h5;$th6=$th6+$h6;$th7=$th7+$h7;$th8=$th8+$h8;$th9=$th9+$h9;$th10=$th10+$h10;
	echo "<tr>";
		echo "<td style='text-align: center;'>2</td>";
		echo "<td style='text-align: left;'>Hồ sơ Liệt sĩ</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($tong)."</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($h1)."</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($h2)."</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($h3)."</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($h4)."</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($h5)."</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($h6)."</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($h7)."</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($h8)."</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($h9)."</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($h10)."</td>";
	echo "</tr>";
	$tong=0;$h1=0;$h2=0;$h3=0;$h4=0;$h5=0;$h6=0;$h7=0;$h8=0;$h9=0;$h10=0;
$sql3 = "Select count(idhstb) as hs,huyen From hosotb Group by huyen";
$qrsql3 = mysqli_query($con,$sql3);
while ($row3 = mysqli_fetch_array($qrsql3)) {	
		if($row3[1]=="Hiệp Hòa")	
		$h1=$row3[0];
	if($row3[1]=="Lạng Giang")
		$h2=$row3[0];
	if($row3[1]=="Lục Ngạn")
		$h3=$row3[0];
	if($row3[1]=="Lục Nam")
		$h4=$row3[0];
	if($row3[1]=="TP Bắc Giang")
		$h5=$row3[0];
	if($row3[1]=="Tân Yên")
		$h6=$row3[0];
	if($row3[1]=="Việt Yên")
		$h7=$row3[0];
	if($row3[1]=="Sơn Động")
		$h8=$row3[0];
	if($row3[1]=="Yên Dũng")
		$h9=$row3[0];
	if($row3[1]=="Yên Thế")
		$h10=$row3[0];
	}	
	$tong=$h1+$h2+$h3+$h4+$h5+$h6+$h7+$h8+$h9+$h10;
	$ttong=$ttong+$tong;$th1=$th1+$h1;$th2=$th2+$h2;$th3=$th3+$h3;$th4=$th4+$h4;$th5=$th5+$h5;$th6=$th6+$h6;$th7=$th7+$h7;$th8=$th8+$h8;$th9=$th9+$h9;$th10=$th10+$h10;
	echo "<tr>";
		echo "<td style='text-align: center;'>3</td>";
		echo "<td style='text-align: left;'>Hồ sơ Thương binh</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($tong)."</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($h1)."</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($h2)."</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($h3)."</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($h4)."</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($h5)."</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($h6)."</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($h7)."</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($h8)."</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($h9)."</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($h10)."</td>";
	echo "</tr>";
	$tong=0;$h1=0;$h2=0;$h3=0;$h4=0;$h5=0;$h6=0;$h7=0;$h8=0;$h9=0;$h10=0;
$sql4 = "Select count(idhsbb) as hs,huyen From hosobb Group by huyen";
$qrsql4 = mysqli_query($con,$sql4);
while ($row4 = mysqli_fetch_array($qrsql4)) {
		if($row4[1]=="Hiệp Hòa")	
		$h1=$row4[0];
	if($row4[1]=="Lạng Giang")
		$h2=$row4[0];
	if($row4[1]=="Lục Ngạn")
		$h3=$row4[0];
	if($row4[1]=="Lục Nam")
		$h4=$row4[0];
	if($row4[1]=="TP Bắc Giang")
		$h5=$row4[0];
	if($row4[1]=="Tân Yên")
		$h6=$row4[0];
	if($row4[1]=="Việt Yên")
		$h7=$row4[0];
	if($row4[1]=="Sơn Động")
		$h8=$row4[0];
	if($row4[1]=="Yên Dũng")
		$h9=$row4[0];
	if($row4[1]=="Yên Thế")
		$h10=$row4[0];
	}	
	$tong=$h1+$h2+$h3+$h4+$h5+$h6+$h7+$h8+$h9+$h10;
	$ttong=$ttong+$tong;$th1=$th1+$h1;$th2=$th2+$h2;$th3=$th3+$h3;$th4=$th4+$h4;$th5=$th5+$h5;$th6=$th6+$h6;$th7=$th7+$h7;$th8=$th8+$h8;$th9=$th9+$h9;$th10=$th10+$h10;
	echo "<tr>";
			echo "<td style='text-align: center;'>4</td>";
			echo "<td style='text-align: left;'>Hồ sơ Bệnh binh</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($tong)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h1)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h2)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h3)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h4)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h5)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h6)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h7)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h8)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h9)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h10)."</td>";
		echo "</tr>";
	echo "<tr>";
		echo "<td style='text-align: center;'>5</td>";
		echo "<td style='text-align: left;'>Hồ sơ Nhiễm chất độc hóa học:</td>";
		echo "<td style='text-align: right;'></td>";
			echo "<td style='text-align: right;'></td>";
			echo "<td style='text-align: right;'></td>";
			echo "<td style='text-align: right;'></td>";
			echo "<td style='text-align: right;'></td>";
			echo "<td style='text-align: right;'></td>";
			echo "<td style='text-align: right;'></td>";
			echo "<td style='text-align: right;'></td>";
			echo "<td style='text-align: right;'></td>";
			echo "<td style='text-align: right;'></td>";
			echo "<td style='text-align: right;'></td>";
	echo "</tr>";
	$tong=0;$h1=0;$h2=0;$h3=0;$h4=0;$h5=0;$h6=0;$h7=0;$h8=0;$h9=0;$h10=0;
$sql5 = "Select count(idhshh) as hs,huyen From hosohh Group by huyen";
$qrsql5 = mysqli_query($con,$sql5);
while ($row5 = mysqli_fetch_array($qrsql5)) {		
		if($row5[1]=="Hiệp Hòa")	
		$h1=$row5[0];
	if($row5[1]=="Lạng Giang")
		$h2=$row5[0];
	if($row5[1]=="Lục Ngạn")
		$h3=$row5[0];
	if($row5[1]=="Lục Nam")
		$h4=$row5[0];
	if($row5[1]=="TP Bắc Giang")
		$h5=$row5[0];
	if($row5[1]=="Tân Yên")
		$h6=$row5[0];
	if($row5[1]=="Việt Yên")
		$h7=$row5[0];
	if($row5[1]=="Sơn Động")
		$h8=$row5[0];
	if($row5[1]=="Yên Dũng")
		$h9=$row5[0];
	if($row5[1]=="Yên Thế")
		$h10=$row5[0];
	}
	$tong=$h1+$h2+$h3+$h4+$h5+$h6+$h7+$h8+$h9+$h10;	
	$ttong=$ttong+$tong;$th1=$th1+$h1;$th2=$th2+$h2;$th3=$th3+$h3;$th4=$th4+$h4;$th5=$th5+$h5;$th6=$th6+$h6;$th7=$th7+$h7;$th8=$th8+$h8;$th9=$th9+$h9;$th10=$th10+$h10;
	echo "<tr>";
			echo "<td style='text-align: center;'></td>";
			echo "<td style='text-align: left;'>-	Hồ sơ nhiễm CĐHH trực tiếp:</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($tong)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h1)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h2)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h3)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h4)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h5)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h6)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h7)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h8)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h9)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h10)."</td>";
		echo "</tr>";
	$tong=0;$h1=0;$h2=0;$h3=0;$h4=0;$h5=0;$h6=0;$h7=0;$h8=0;$h9=0;$h10=0;	
$sql51 = "Select count(idthannhanhh) as hs,huyen From thannhanhh where quanhe like 'Con' and tths <> 0 and qdtcsongay not like ', hưởng trợ cấp từ ' Group by huyen";
echo $sql51;
$qrsql51 = mysqli_query($con,$sql51);
while ($row51 = mysqli_fetch_array($qrsql51)) {	
		if($row51[1]=="Hiệp Hòa")	
		$h1=$row51[0];
	if($row51[1]=="Lạng Giang")
		$h2=$row51[0];
	if($row51[1]=="Lục Ngạn")
		$h3=$row51[0];
	if($row51[1]=="Lục Nam")
		$h4=$row51[0];
	if($row51[1]=="TP Bắc Giang")
		$h5=$row51[0];
	if($row51[1]=="Tân Yên")
		$h6=$row51[0];
	if($row51[1]=="Việt Yên")
		$h7=$row51[0];
	if($row51[1]=="Sơn Động")
		$h8=$row51[0];
	if($row51[1]=="Yên Dung")
		$h9=$row51[0];
	if($row51[1]=="Yên Thế")
		$h10=$row51[0];
	}
	$tong=$h1+$h2+$h3+$h4+$h5+$h6+$h7+$h8+$h9+$h10;	
	$ttong=$ttong+$tong;$th1=$th1+$h1;$th2=$th2+$h2;$th3=$th3+$h3;$th4=$th4+$h4;$th5=$th5+$h5;$th6=$th6+$h6;$th7=$th7+$h7;$th8=$th8+$h8;$th9=$th9+$h9;$th10=$th10+$h10;	
	echo "<tr>";
		echo "<td style='text-align: center;'></td>";
		echo "<td style='text-align: left;'>-	Hồ sơ nhiễm CĐHH gián tiếp:</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($tong)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h1)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h2)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h3)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h4)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h5)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h6)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h7)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h8)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h9)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h10)."</td>";
	echo "</tr>";
	$tong=0;$h1=0;$h2=0;$h3=0;$h4=0;$h5=0;$h6=0;$h7=0;$h8=0;$h9=0;$h10=0;	
$sql6 = "Select count(idhskc) as hs,huyen From hosokc Group by huyen";
$qrsql6 = mysqli_query($con,$sql6);
while ($row6 = mysqli_fetch_array($qrsql6)) {
		if($row6[1]=="Hiệp Hòa")	
		$h1=$row6[0];
	if($row6[1]=="Lạng Giang")
		$h2=$row6[0];
	if($row6[1]=="Lục Ngạn")
		$h3=$row6[0];
	if($row6[1]=="Lục Nam")
		$h4=$row6[0];
	if($row6[1]=="TP Bắc Giang")
		$h5=$row6[0];
	if($row6[1]=="Tân Yên")
		$h6=$row6[0];
	if($row6[1]=="Việt Yên")
		$h7=$row6[0];
	if($row6[1]=="Sơn Động")
		$h8=$row6[0];
	if($row6[1]=="Yên Dũng")
		$h9=$row6[0];
	if($row6[1]=="Yên Thế")
		$h10=$row6[0];
	}	
	$tong=$h1+$h2+$h3+$h4+$h5+$h6+$h7+$h8+$h9+$h10;	
	$ttong=$ttong+$tong;$th1=$th1+$h1;$th2=$th2+$h2;$th3=$th3+$h3;$th4=$th4+$h4;$th5=$th5+$h5;$th6=$th6+$h6;$th7=$th7+$h7;$th8=$th8+$h8;$th9=$th9+$h9;$th10=$th10+$h10;
	echo "<tr>";
			echo "<td style='text-align: center;'>6</td>";
			echo "<td style='text-align: left;'>Hồ sơ Người hoạt động kháng chiến</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($tong)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h1)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h2)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h3)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h4)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h5)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h6)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h7)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h8)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h9)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h10)."</td>";
		echo "</tr>";
	$tong=0;$h1=0;$h2=0;$h3=0;$h4=0;$h5=0;$h6=0;$h7=0;$h8=0;$h9=0;$h10=0;	
$sql7 = "Select count(idhstkn) as hs,huyen From hosotkn Group by huyen";
$qrsql7 = mysqli_query($con,$sql7);
while ($row7 = mysqli_fetch_array($qrsql7)) {	
		if($row7[1]=="Hiệp Hòa")	
		$h1=$row7[0];
	if($row7[1]=="Lạng Giang")
		$h2=$row7[0];
	if($row7[1]=="Lục Ngạn")
		$h3=$row7[0];
	if($row7[1]=="Lục Nam")
		$h4=$row7[0];
	if($row7[1]=="TP Bắc Giang")
		$h5=$row7[0];
	if($row7[1]=="Tân Yên")
		$h6=$row7[0];
	if($row7[1]=="Việt Yên")
		$h7=$row7[0];
	if($row7[1]=="Sơn Động")
		$h8=$row7[0];
	if($row7[1]=="Yên Dũng")
		$h9=$row7[0];
	if($row7[1]=="Yên Thế")
		$h10=$row7[0];
	}
	$tong=$h1+$h2+$h3+$h4+$h5+$h6+$h7+$h8+$h9+$h10;	
	$ttong=$ttong+$tong;$th1=$th1+$h1;$th2=$th2+$h2;$th3=$th3+$h3;$th4=$th4+$h4;$th5=$th5+$h5;$th6=$th6+$h6;$th7=$th7+$h7;$th8=$th8+$h8;$th9=$th9+$h9;$th10=$th10+$h10;
echo "<tr>";
		echo "<td style='text-align: center;'>7</td>";
		echo "<td style='text-align: left;'>Hồ sơ Tiền khởi nghĩa</td>";
		echo "<td style='text-align: right;'>".dinhdangsoxx($tong)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h1)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h2)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h3)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h4)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h5)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h6)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h7)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h8)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h9)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h10)."</td>";
	echo "</tr>";	
	$tong=0;$h1=0;$h2=0;$h3=0;$h4=0;$h5=0;$h6=0;$h7=0;$h8=0;$h9=0;$h10=0;
$sql8 = "Select count(idhslt) as hs,huyen From hosolt Group by huyen";
$qrsql8 = mysqli_query($con,$sql8);
while ($row8 = mysqli_fetch_array($qrsql8)) {	
		if($row8[1]=="Hiệp Hòa")	
		$h1=$row8[0];
	if($row8[1]=="Lạng Giang")
		$h2=$row8[0];
	if($row8[1]=="Lục Ngạn")
		$h3=$row8[0];
	if($row8[1]=="Lục Nam")
		$h4=$row8[0];
	if($row8[1]=="TP Bắc Giang")
		$h5=$row8[0];
	if($row8[1]=="Tân Yên")
		$h6=$row8[0];
	if($row8[1]=="Việt Yên")
		$h7=$row8[0];
	if($row8[1]=="Sơn Động")
		$h8=$row8[0];
	if($row8[1]=="Yên Dũng")
		$h9=$row8[0];
	if($row8[1]=="Yên Thế")
		$h10=$row8[0];
	}
	$tong=$h1+$h2+$h3+$h4+$h5+$h6+$h7+$h8+$h9+$h10;
	$ttong=$ttong+$tong;$th1=$th1+$h1;$th2=$th2+$h2;$th3=$th3+$h3;$th4=$th4+$h4;$th5=$th5+$h5;$th6=$th6+$h6;$th7=$th7+$h7;$th8=$th8+$h8;$th9=$th9+$h9;$th10=$th10+$h10;
	echo "<tr>";
			echo "<td style='text-align: center;'>8</td>";
			echo "<td style='text-align: left;'>Hồ sơ Lão thành cách mạng</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($tong)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h1)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h2)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h3)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h4)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h5)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h6)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h7)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h8)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h9)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h10)."</td>";
		echo "</tr>";	
	$tong=0;$h1=0;$h2=0;$h3=0;$h4=0;$h5=0;$h6=0;$h7=0;$h8=0;$h9=0;$h10=0;	
$sql9 = "Select count(idhsah) as hs,huyen From hosoah Group by huyen";
$qrsql9 = mysqli_query($con,$sql9);
while ($row9 = mysqli_fetch_array($qrsql9)) {	
		if($row9[1]=="Hiệp Hòa")	
		$h1=$row9[0];
	if($row9[1]=="Lạng Giang")
		$h2=$row9[0];
	if($row9[1]=="Lục Ngạn")
		$h3=$row9[0];
	if($row9[1]=="Lục Nam")
		$h4=$row9[0];
	if($row9[1]=="TP Bắc Giang")
		$h5=$row9[0];
	if($row9[1]=="Tân Yên")
		$h6=$row9[0];
	if($row9[1]=="Việt Yên")
		$h7=$row9[0];
	if($row9[1]=="Sơn Động")
		$h8=$row9[0];
	if($row9[1]=="Yên Dũng")
		$h9=$row9[0];
	if($row9[1]=="Yên Thế")
		$h10=$row9[0];
	}
$tong=$h1+$h2+$h3+$h4+$h5+$h6+$h7+$h8+$h9+$h10;	
$ttong=$ttong+$tong;$th1=$th1+$h1;$th2=$th2+$h2;$th3=$th3+$h3;$th4=$th4+$h4;$th5=$th5+$h5;$th6=$th6+$h6;$th7=$th7+$h7;$th8=$th8+$h8;$th9=$th9+$h9;$th10=$th10+$h10;
	echo "<tr>";
			echo "<td style='text-align: center;'>9</td>";
			echo "<td style='text-align: left;'>Hồ sơ Anh hùng</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($tong)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h1)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h2)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h3)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h4)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h5)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h6)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h7)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h8)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h9)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h10)."</td>";
		echo "</tr>";
	$tong=0;$h1=0;$h2=0;$h3=0;$h4=0;$h5=0;$h6=0;$h7=0;$h8=0;$h9=0;$h10=0;	
$sql10 = "Select count(idhstd) as hs,huyen From hosotd Group by huyen";
$qrsql10 = mysqli_query($con,$sql10);
while ($row10 = mysqli_fetch_array($qrsql10)) {		
		if($row10[1]=="Hiệp Hòa")	
		$h1=$row10[0];
	if($row10[1]=="Lạng Giang")
		$h2=$row10[0];
	if($row10[1]=="Lục Ngạn")
		$h3=$row10[0];
	if($row10[1]=="Lục Nam")
		$h4=$row10[0];
	if($row10[1]=="TP Bắc Giang")
		$h5=$row10[0];
	if($row10[1]=="Tân Yên")
		$h6=$row10[0];
	if($row10[1]=="Việt Yên")
		$h7=$row10[0];
	if($row10[1]=="Sơn Động")
		$h8=$row10[0];
	if($row10[1]=="Yên Dũng")
		$h9=$row10[0];
	if($row10[1]=="Yên Thế")
		$h10=$row10[0];
	}
	$tong=$h1+$h2+$h3+$h4+$h5+$h6+$h7+$h8+$h9+$h10;
	$ttong=$ttong+$tong;$th1=$th1+$h1;$th2=$th2+$h2;$th3=$th3+$h3;$th4=$th4+$h4;$th5=$th5+$h5;$th6=$th6+$h6;$th7=$th7+$h7;$th8=$th8+$h8;$th9=$th9+$h9;$th10=$th10+$h10;
	echo "<tr>";
			echo "<td style='text-align: center;'>10</td>";
			echo "<td style='text-align: left;'>Hồ sơ bị bắt, tù đày</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($tong)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h1)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h2)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h3)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h4)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h5)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h6)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h7)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h8)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h9)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h10)."</td>";
		echo "</tr>";
	$tong=0;$h1=0;$h2=0;$h3=0;$h4=0;$h5=0;$h6=0;$h7=0;$h8=0;$h9=0;$h10=0;	
$sql11 = "Select count(idhscc) as hs,huyen From hosocc Group by huyen";
$qrsql11 = mysqli_query($con,$sql11);
while ($row11 = mysqli_fetch_array($qrsql11)) {	
		if($row11[1]=="Hiệp Hòa")	
		$h1=$row11[0];
	if($row11[1]=="Lạng Giang")
		$h2=$row11[0];
	if($row11[1]=="Lục Ngạn")
		$h3=$row11[0];
	if($row11[1]=="Lục Nam")
		$h4=$row11[0];
	if($row11[1]=="TP Bắc Giang")
		$h5=$row11[0];
	if($row11[1]=="Tân Yên")
		$h6=$row11[0];
	if($row11[1]=="Việt Yên")
		$h7=$row11[0];
	if($row11[1]=="Sơn Động")
		$h8=$row11[0];
	if($row11[1]=="Yên Dũng")
		$h9=$row11[0];
	if($row11[1]=="Yên Thế")
		$h10=$row11[0];
	}
	$tong=$h1+$h2+$h3+$h4+$h5+$h6+$h7+$h8+$h9+$h10;
	echo "<tr>";
			echo "<td style='text-align: center;'>11</td>";
			echo "<td style='text-align: left;'>Hồ sơ NCC giúp đỡ CM</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($tong)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h1)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h2)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h3)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h4)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h5)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h6)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h7)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h8)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h9)."</td>";
			echo "<td style='text-align: right;'>".dinhdangsoxx($h10)."</td>";
		echo "</tr>";
		$ttong=$ttong+$tong;$th1=$th1+$h1;$th2=$th2+$h2;$th3=$th3+$h3;$th4=$th4+$h4;$th5=$th5+$h5;$th6=$th6+$h6;$th7=$th7+$h7;$th8=$th8+$h8;$th9=$th9+$h9;$th10=$th10+$h10;
echo "<tr>";
	echo "<td style='text-align: center;'></td>";
	echo "<td style='text-align: left;'>Tổng số hồ sơ</td>";
	echo "<td style='text-align: right;'>".dinhdangsoxx($ttong)."</td>";
	echo "<td style='text-align: right;'>".dinhdangsoxx($th1)."</td>";
	echo "<td style='text-align: right;'>".dinhdangsoxx($th2)."</td>";
	echo "<td style='text-align: right;'>".dinhdangsoxx($th3)."</td>";
	echo "<td style='text-align: right;'>".dinhdangsoxx($th4)."</td>";
	echo "<td style='text-align: right;'>".dinhdangsoxx($th5)."</td>";
	echo "<td style='text-align: right;'>".dinhdangsoxx($th6)."</td>";
	echo "<td style='text-align: right;'>".dinhdangsoxx($th7)."</td>";
	echo "<td style='text-align: right;'>".dinhdangsoxx($th8)."</td>";
	echo "<td style='text-align: right;'>".dinhdangsoxx($th9)."</td>";
	echo "<td style='text-align: right;'>".dinhdangsoxx($th10)."</td>";
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
</table>	
</body>		
</html>	