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
$namquain = "";
$xain = "";
$noidung="";

if(isset($_POST['create'])){	
	$namquain = $_POST['nambc'];	
	$tenhuyenin = $_POST['xa'];
	$noidung=$_POST['noidung'];
}
?>
    <table cellspacing="0" cellpadding="0" border="0">        
		<tr>
			<td style="text-align: left;font-weight: bold;"><nobr>Đơn vị: <?php			
			echo "UBND ".str_replace('_',' ',$tenhuyenin);
			?></nobr></td>			
		</tr>
	</table>
		<table cellspacing="0" cellpadding="0" border="0">
		<tr>
			<td  style='text-align: center;font-weight: bold;'>BÁO CÁO TÌNH HÌNH NHẬN QUÀ</td>
		</tr>
		<tr>
            <td  style="text-align: center;font-weight: bold;">Năm nhận quà: <?php echo $namquain; ?></td>
		</tr>
		<tr>
            <td  style="text-align: center;font-weight: bold;">Nôi dung: <?php echo $noidung; ?></td>
		</tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th  width="7%">TT</th>
			<th  width="73%">LOẠI ĐỐI TƯỢNG</th>
			<th  width="%10">SỐ NGƯỜI</th>
			<th  width="10%">SỐ TIỀN</th>			
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
	$sql = "Select loaidoituong,mucqua,count(idquatet27) as songuoi From quatet27 Where namqua Like '".$namquain."%' and xa='".$tenhuyenin."' and chuyen='Duyệt' and noidung='".$noidung."'";
	$sql=$sql." Group by loaidoituong,mucqua order by mucqua";
$qrsql = mysqli_query($con,$sql);
$nhom="";$nhomsau="";$i=0;$tongnguoi=0;$tongtien=0;
while ($row = mysqli_fetch_array($qrsql))
{
	$nhom=$row['mucqua'];
	if ($nhom != $nhomsau)
	{
		$i=$i+1;
		if ($i==1)
		{
			echo "<tr>";
				echo "<td style='text-align: left;font-weight: bold;'>I</td>";
				echo "<td style='text-align: left;font-weight: bold;'>Mức quà ".dinhdangsox($row['mucqua'])." đồng để tặng đối với các đối tượng</td>";
				echo "<td style='text-align: center;'></td>";
				echo "<td style='text-align: center;'></td>";
			echo "</tr>";
		}
		else
		{
			echo "<tr>";
				echo "<td style='text-align: left;font-weight: bold;'>II</td>";
				echo "<td style='text-align: left;font-weight: bold;'>Mức quà ".dinhdangsox($row['mucqua'])." đồng để tặng đối với các đối tượng</td>";
				echo "<td style='text-align: center;'></td>";
				echo "<td style='text-align: center;'></td>";
			echo "</tr>";
		}
	}
		echo "<tr>";		
		$stt++;	
		echo "<td style='text-align: center;'>".$stt."</td>";
		if ($row['loaidoituong']=="lt")
			echo "<td style='text-align: left;'>Người hoạt động cách mạng trước 01/1/1945</nobr></td>";	
		else if ($row['loaidoituong']=="tkn")
			echo "<td style='text-align: left;'>Người hoạt động cách mạng từ ngày 01/01/1945 đến khởi nghĩa tháng 8/1945</nobr></td>";	
		else if ($row['loaidoituong']=="bm")
			echo "<td style='text-align: left;'>Bà mẹ Việt Nam anh hùng</nobr></td>";	
		else if ($row['loaidoituong']=="ah")
			echo "<td style='text-align: left;'>Anh hùng lực lượng vũ trang, Anh hùng Lao động</nobr></td>";
		else if ($row['loaidoituong']=="tnls")
			echo "<td style='text-align: left;'>Thân nhân liệt sĩ đang hưởng trợ cấp hàng tháng</nobr></td>";
		else if ($row['loaidoituong']=="tnlstc")
			echo "<td style='text-align: left;'>Người thờ cúng</nobr></td>";
		else if ($row['loaidoituong']=="tbdb")
			echo "<td style='text-align: left;'>Thương binh, thương binh loại B 81% trở lên</nobr></td>";
		else if ($row['loaidoituong']=="tb")
			echo "<td style='text-align: left;'>Thương binh, thương binh loại B 81% trở xuống</nobr></td>";
		else if ($row['loaidoituong']=="ccnd")
			echo "<td style='text-align: left;'>Người có công giúp đỡ cách mạng đang hưởng trợ cấp nuôi dưỡng hàng tháng</nobr></td>";
		else if ($row['loaidoituong']=="cc")
			echo "<td style='text-align: left;'>Người có công giúp đỡ cách mạng đang hưởng trợ cấp hàng tháng</nobr></td>";
		else if ($row['loaidoituong']=="hhdb")
			echo "<td style='text-align: left;'>Người hđkc bị nhiễm chất độc hóa học 81% trở lên</nobr></td>";
		else if ($row['loaidoituong']=="hh")
			echo "<td style='text-align: left;'>Người hđkc bị nhiễm chất độc hóa học 81% trở xuống</nobr></td>";
		else if ($row['loaidoituong']=="td")
			echo "<td style='text-align: left;'>Người bị địch bắt tù đày</nobr></td>";
		echo "<td style='text-align: right;'>".dinhdangsox($row['songuoi'])."</td>";
		echo "<td style='text-align: right;'>".dinhdangsox($row['songuoi']*$row['mucqua'])."</td>";
		echo "</tr>";
	$nhomsau=$row['mucqua'];
	$tongnguoi=$tongnguoi+$row['songuoi'];
	$tongtien=$tongtien+($row['songuoi']*$row['mucqua']);
}
	echo "<tr>";
		echo "<td style='text-align: left;font-weight: bold;'></td>";
		echo "<td style='text-align: left;font-weight: bold;'>Tổng công:</td>";
		echo "<td style='text-align: right;font-weight: bold;'>".dinhdangsox($tongnguoi)."</td>";
		echo "<td style='text-align: right;font-weight: bold;'>".dinhdangsox($tongtien)."</td>";
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