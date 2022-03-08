<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<?php
	include("$_SERVER[DOCUMENT_ROOT]/Main/connect.php"); 
?>
	<title>Document</title>
	<meta HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=utf-8'>
	<style type="text/css">
		.cs2F55CA55 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:15px; font-weight:bold; font-style:normal; padding-top:2px;padding-left:2px;padding-right:2px;padding-bottom:2px;}
		.cs251DA3 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:15px; font-weight:normal; font-style:italic; padding-top:2px;padding-left:2px;padding-right:2px;padding-bottom:2px;}
		.csEC5D5CC {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:15px; font-weight:normal; font-style:normal; padding-top:2px;padding-left:2px;padding-right:2px;padding-bottom:2px;}
		.csF7D3565D {height:0px;width:0px;overflow:hidden;font-size:0px;line-height:0px;}
	</style>
</head>
<body leftMargin=10 topMargin=10 rightMargin=10 bottomMargin=10 style="background-color:#FFFFFF">
<?php
//các hàm
	function dinhdangso($so){
		$kq = "";
		if ($so > 0)
			$kq = number_format($so);
		return $kq;	
	}
	
	function kieudouble($so){
		$kq = 0;
		if ($so != "")
			$kq = (float)$so;
		else
			$kq = 0;	
		return $kq;	
	}
	function quydoi($ngaythang)
	{
		$kq="";
		if ($ngaythang=="dd")
			$kq="";
		else if ($ngaythang=="mm")
			$kq="";
		else if ($ngaythang=="yyyy")
			$kq="";
		else
			$kq=$ngaythang;
		return $kq;
	}
	function doingaythang($ngay){
		$kq="";
		$aNT = explode('/', $ngay);
		if ($ngay != "")
		{	
			$kq='ngày '.quydoi($aNT[0]).' tháng '.quydoi($aNT[1]).' năm '.quydoi($aNT[2]);
		}
		else
			$kq="";	
		return $kq;		
	}
	
	function doint($ngay){
		return " ngày ".$ngay;		
	}
	
	function trungaythang($tungay, $denngay){
		$diff = abs(strtotime($denngay) - strtotime($tungay));
		$years = floor($diff / (365*60*60*24));
		$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
		$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
		return $years.' năm '.$months.' tháng';
	}
?>
<?php 	
	//Lấy ttdt
	$ttdt=$_GET['id'];
	function tientrocap($masotc)
	{
		global $con;
		$kq="";
		$sql="Select sotien From dmtrocap Where matrocap='".$masotc."'";
		$query = mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($query)){
			$kq=dinhdangso(kieudouble($row['sotien']));
		}
		return $kq;
	}
?>

<?php
	$aKQ=array();	
	$sql="select hosobo,hoten,ngaysinh,gioitinh,quequan,truquan,ngaynhapngu,capbackhibithuong,donvikhibithuong,noibithuong,
			giaycnbthuong,ngaybithuong,donvicgcnbt,dangtat,bbgdsongay,hoidong,ketluansgknld,sslt,ngaytrocap,matchangthang,matcmotlan,mapcdb,
			hoidongkhamlai,tilekhamlai,khamlaingay,vinhvien from hosotb where idhstb=".$ttdt;
	$query = mysqli_query($con,$sql);
	while($rows = mysqli_fetch_array($query)){		
		$aKQ[]=array('hosobo'=>$rows['hosobo'],
			'hoten'=>$rows['hoten'],
			'ngaysinh'=>$rows['ngaysinh'],
			'gioitinh'=>$rows['gioitinh'],
			'quequan'=>$rows['quequan'],
			'truquan'=>$rows['truquan'],			
			'ngaynhapngu'=>$rows['ngaynhapngu'],			
			'capbackhibithuong'=>$rows['capbackhibithuong'],
			'donvikhibithuong'=>$rows['donvikhibithuong'],
			'noibithuong'=>$rows['noibithuong'],
			'giaycnbthuong'=>$rows['giaycnbthuong'],
			'ngaybithuong'=>$rows['ngaybithuong'],
			'donvicgcnbt'=>$rows['donvicgcnbt'],
			'dangtat'=>$rows['dangtat'],
			'bbgdsongay'=>$rows['bbgdsongay'],			
			'hoidong'=>$rows['hoidong'],
			'ketluansgknld'=>$rows['ketluansgknld'],
			'sslt'=>$rows['sslt'],
			'ngaytrocap'=>$rows['ngaytrocap'],
			'sotientc'=>tientrocap($rows['matchangthang']),
			'sotienml'=>tientrocap($rows['matcmotlan']),
			'hoidongkhamlai'=>$rows['hoidongkhamlai'],
			'tilekhamlai'=>$rows['tilekhamlai'],
			'sotienpc'=>tientrocap($rows['mapcdb']),
			'vinhvien'=>$rows['vinhvien'],
			'khamlaingay'=>$rows['khamlaingay']
			);
	}
?>
<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;width:624px;height:891px;">
	<tr>
		<td style="width:0px;height:0px;"></td>
		<td style="height:0px;width:219px;"></td>
		<td style="height:0px;width:81px;"></td>
		<td style="height:0px;width:12px;"></td>
		<td style="height:0px;width:70px;"></td>
		<td style="height:0px;width:113px;"></td>
		<td style="height:0px;width:129px;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>		
		<td class="csEC5D5CC" style="width:215px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs2F55CA55" colspan="5" style="width:125px;height:20px;line-height:17px;text-align:right;vertical-align:middle;"><nobr>Mẫu&nbsp;HS2</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>		
		<td class="cs2F55CA55" style="width:215px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><nobr>Đơn vị: Sở LĐTBXH Tỉnh Bắc Giang</nobr></td>
		<td class="cs2F55CA55" colspan="5" style="width:401px;height:20px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>CỘNG&nbsp;H&#210;A&nbsp;X&#195;&nbsp;HỘI&nbsp;CHỦ&nbsp;NGHĨA&nbsp;VIỆT&nbsp;NAM</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" style="width:491px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs2F55CA55" colspan="5" style="width:401px;height:20px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Độc&nbsp;lập&nbsp;-&nbsp;Tự&nbsp;do&nbsp;-&nbsp;Hạnh&nbsp;ph&#250;c</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" style="width:215px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEC5D5CC" colspan="5" style="width:401px;height:20px;line-height:17px;text-align:right;vertical-align:middle;"><?php echo'Số hồ sơ: '.$aKQ[0]['hosobo']; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="cs2F55CA55" colspan="6" style="width:620px;height:20px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>BẢN&nbsp;TR&#205;CH&nbsp;LỤC&nbsp;HỒ&nbsp;SƠ&nbsp;THƯƠNG&nbsp;BINH</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="6" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Họ và tên: '.$aKQ[0]['hoten']; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="3" style="width:308px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Sinh '.doingaythang($aKQ[0]['ngaysinh']); ?></td>
		<td class="csEC5D5CC" colspan="3" style="width:308px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Nam/Nữ: '.$aKQ[0]['gioitinh']; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="6" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Nguyên quán: '.$aKQ[0]['quequan']; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="6" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Trú quán: '.$aKQ[0]['truquan']; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="6" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Chỗ ở hiện nay: '.$aKQ[0]['truquan']; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="6" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Nhập ngũ, tham gia công tác '.doint($aKQ[0]['ngaynhapngu']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="6" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Cơ quan, đơn vị: '; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="6" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Cấp bậc, chức vụ khi bị thương: '.$aKQ[0]['capbackhibithuong']; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="6" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Cơ quan, đơn vị khi bị thương: '.$aKQ[0]['donvikhibithuong']; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="6" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Nơi bị thương: '.$aKQ[0]['noibithuong']; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="6" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Giấy chứng nhận bị thương số: '.$aKQ[0]['giaycnbthuong'].' của '.$aKQ[0]['donvicgcnbt']; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="6" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Tình trạng thương tật: '.$aKQ[0]['dangtat']; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="6" style="width:620px;height:24px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Biên bản giám định thương tật số: '.$aKQ[0]['bbgdsongay'].' của Hội đồng GĐYK: '.$aKQ[0]['hoidong']; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="6" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Tỷ lệ thương tật: '.$aKQ[0]['ketluansgknld']."% (".$aKQ[0]['vinhvien'].")"; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="6" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Quyết định cấp giấy chứng nhận và trợ cấp số: '.$aKQ[0]['sslt']; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="6" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Hưởng trợ cấp từ  '.doint($aKQ[0]['ngaytrocap']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="2" style="width:296px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Mức trợ cấp: hàng tháng: '.dinhdangso($aKQ[0]['sotientc']); ?></td>
		<td class="csEC5D5CC" colspan="4" style="width:320px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Một lần: '.dinhdangso($aKQ[0]['sotienml']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="6" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Khám lại thương tật '.doint($aKQ[0]['khamlaingay']).' tại '.$aKQ[0]['hoidongkhamlai']; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="6" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Kết luận tỷ lệ thương tật: '.$aKQ[0]['tilekhamlai']; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="6" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Phụ cấp khác (nếu có): '.dinhdangso($aKQ[0]['sotienpc']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="6" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><nobr>C&#225;c&nbsp;chế&nbsp;độ&nbsp;kh&#225;c&nbsp;đang&nbsp;hưởng:&nbsp;…………………………………….</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="6" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><nobr>Hồ&nbsp;sơ&nbsp;được&nbsp;lưu&nbsp;tại&nbsp;Sở&nbsp;Lao&nbsp;động&nbsp;-&nbsp;Thương&nbsp;binh&nbsp;v&#224;&nbsp;X&#227;&nbsp;hội&nbsp;tỉnh&nbsp;……………………….</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:10px;"></td>
		<td class="csEC5D5CC" colspan="6" style="width:620px;height:6px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="4" style="width:378px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs251DA3" colspan="2" style="width:238px;height:20px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>….,&nbsp;ng&#224;y&nbsp;…&nbsp;th&#225;ng&nbsp;….&nbsp;năm&nbsp;....</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="4" style="width:378px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs2F55CA55" colspan="2" style="width:238px;height:20px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>GI&#193;M&nbsp;ĐỐC</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="4" style="width:378px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs251DA3" colspan="2" style="width:238px;height:20px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>(Chữ&nbsp;k&#253;,&nbsp;dấu)</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="4" style="width:378px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs2F55CA55" colspan="2" style="width:238px;height:20px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Họ&nbsp;v&#224;&nbsp;t&#234;n</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:96px;"></td>
		<td class="csEC5D5CC" colspan="4" style="width:378px;height:92px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEC5D5CC" colspan="2" style="width:238px;height:92px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="4" style="width:378px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEC5D5CC" colspan="2" style="width:238px;height:20px;line-height:17px;text-align:center;vertical-align:middle;"><nobr></nobr></td>
	</tr>
</table>
</body>
</html>