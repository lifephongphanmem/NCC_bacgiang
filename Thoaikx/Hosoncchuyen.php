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
$loaidoituong = "";
$tenhuyen = "";
$tenxa = "";$sql="";
if(isset($_POST['create'])){
	$loaidoituong = $_POST['loaidoituong'];
	$tenxa = $_POST['xa'];
	$tenhuyen = $_POST['huyen'];	
}
?>
    <table cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td style="text-align: left;font-weight: bold;">
				<nobr><?php echo "UBND ".$tenxa; ?></nobr>
            </td>
        </tr>
		<tr>            
			<td style="text-align: left;font-weight: bold;">
				<nobr><?php echo "Phòng lao động TBXH ".$tenhuyen; ?></nobr>
            </td> 
        </tr>
		<tr>
            <td  style="text-align: center;font-weight: bold;">BÁO CÁO TỔNG HỢP SỐ LƯỢNG NGƯỜI CÓ CÔNG</td>
		</tr>
		<tr>
            <td  style="text-align: center;font-weight: bold;">
			<?php
				if ($loaidoituong=="ah")
				{
					echo "Đối tượng: Anh hùng lực lượng VTND, anh hùng lao động TKKC";
					$sql="Select hoten,ngaysinh,truquan,mahobo,mahotinh From hosoah Where xa like '".$tenxa."%' and huyen='".$tenhuyen."'";
				}
				else if($loaidoituong=="tb")
				{
					echo "Đối tượng: Thương binh";
					$sql="Select hoten,ngaysinh,truquan,hosobo,hosotinh From hosotb Where xa Like '".$tenxa."%' and huyen='".$tenhuyen."'";
				}
				else if($loaidoituong=="bb")
				{
					echo "Đối tượng: Bệnh binh";
					$sql="Select hoten,ngaysinh,truquan,hosobo,hosotinh From hosobb Where xa Like '".$tenxa."%' and huyen='".$tenhuyen."'";
				}
				else if($loaidoituong=="ls")
				{
					echo "Đối tượng: Liệt sỹ";
					$sql="Select hoten,ngaysinh,truquan,mahsbo,mahstinh From hosols Where xa Like '".$tenxa."%' and huyen='".$tenhuyen."'";
				}
				else if($loaidoituong=="hh")
				{
					echo "Đối tượng: Người HĐKC bị nhiễm chất độc hóa học";
					$sql="Select hoten,ngaysinh,truquan,mahosobo,mahosotinh From hosohh Where xa Like '".$tenxa."%' and huyen='".$tenhuyen."'";
				}
				else if($loaidoituong=="hhtn")
				{
					echo "Đối tượng: Con đẻ người HĐKC bị nhiễm chất độc hóa học";
					$sql="Select hoten,ngaysinh,truquan,mahoso,'' as matinh From thannhanhh Where xa Like '".$tenxa."%' and huyen='".$tenhuyen."'";
				}
				else if($loaidoituong=="bm")
				{
					echo "Đối tượng: Bà mẹ Việt Nam anh hùng";
					$sql="Select hoten,ngaysinh,truquan,mahobo,mahotinh From hosobm Where xa Like '".$tenxa."%' and huyen='".$tenhuyen."'";
				}
				else if($loaidoituong=="kc")
				{
					echo "Đối tượng: Người HĐKC, là nghĩa vụ quốc tế được tặng huân, huy chương";
					$sql="Select hoten,ngaysinh,truquan,mahosobo,mahosotinh From hosokc Where xa Like '".$tenxa."%' and huyen='".$tenhuyen."'";
				}
				else if($loaidoituong=="cc")
				{
					echo "Đối tượng: Người có công giúp đỡ cách mạng";
					$sql="Select hoten,ngaysinh,truquan,mahobo,mahotinh From hosocc Where xa Like '".$tenxa."%' and huyen='".$tenhuyen."'";
				}
				else if($loaidoituong=="td")
				{
					echo "Đối tượng: Người HĐKC bị địch bắt tù đày";
					$sql="Select hoten,ngaysinh,truquan,mahobo,mahotinh From hosotd Where xa Like '".$tenxa."%' and huyen='".$tenhuyen."'";
				}
				else if($loaidoituong=="lt")
				{
					echo "Đối tượng: Người hoạt động cách mạng trước ngày 01/01/1945";
					$sql="Select hoten,ngaysinh,truquan,mahobo,mahotinh From hosolt Where xa Like '".$tenxa."%' and huyen='".$tenhuyen."'";
				}
				else if($loaidoituong=="tkn")
				{
					echo "Đối tượng: Người HĐCM từ ngày 01/01/1945 đến ngày khởi nghĩa tháng 8 năm 1945";
					$sql="Select hoten,ngaysinh,truquan,mahobo,mahotinh From hosotkn Where xa Like '".$tenxa."%' and huyen='".$tenhuyen."'";
				}				
			?>
			</td>
		</tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th  width="5%">STT</th>
			<th  width="20%">Họ và tên</th>
			<th  width="8%">Ngày sinh</th>
			<th  width="47%">Trú quán</th>
			<th  width="10%">Mã hố sơ bộ</th>
			<th  width="10%">Mã hồ sơ tỉnh</th>
		</tr>				
<?php 
//làm việc với cơ sở dữ liệu
// kết nối csdl
$cc = array();
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require ("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
$stt =0;	
$qrsql = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($qrsql)) {		
		echo "<tr>";		
		$stt++;	
		echo "<td style='text-align: center;'>".$stt."</td>";
		echo "<td style='text-align: left;'>".$row[0]."</td>";
		echo "<td style='text-align: center;'>".$row[1]."</td>";
		echo "<td style='text-align: left;'>".$row[2]."</td>";
		echo "<td style='text-align: left;'>".$row[3]."</td>";
		echo "<td style='text-align: left;'>".$row[4]."</td>";
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