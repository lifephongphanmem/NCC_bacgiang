<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<?php
	include("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
?>
<head>
	<title>Document</title>
	<meta HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=utf-8'>
	<style type="text/css">
		.cs72A8D38 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:15px; font-weight:bold; font-style:normal; padding-top:2px;padding-left:2px;padding-right:2px;padding-bottom:2px;}
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
	
	function doingaythang($ngay){
		if($ngay=="")
			return "ngày ..... tháng ..... năm ........";
		else if(strlen($ngay)<=4)
			return 'ngày  tháng  năm '.$ngay;
		else if (strlen($ngay)>4 && strlen($ngay)<=7)
		{
			$aNT = explode('/', $ngay);
			return 'ngày  tháng '.$aNT[0].' năm '.$aNT[1];
		}
		else
		{
			$aNT = explode('/', $ngay);
			return 'ngày '.$aNT[0].' tháng '.$aNT[1].' năm '.$aNT[2];
		}			
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
	$sql="select hosobo,hoten,ngaysinh,gioitinh,quequan,truquan,ngaynhapngu,donvi,ngayxn,donvikhinghichedo,capbac,thoigiancongtac,
			thoigianct,thoigianvkk,ngaybbvdt,giaycnbbsongay,bbgiamdinhsongay,hoidonggiamdinh,tinhtrangbenhtat,klmsld,quyetdinhtc,capraqd,
				ngayhuong,matchangthang,maphucapdacbiet,ghichu from hosobb where idhsbb=".$ttdt;
	$query = mysqli_query($con,$sql);
	while($rows = mysqli_fetch_array($query)){		
		$aKQ[]=array('hosobo'=>$rows['hosobo'],
			'hoten'=>$rows['hoten'],
			'ngaysinh'=>$rows['ngaysinh'],
			'gioitinh'=>$rows['gioitinh'],
			'quequan'=>$rows['quequan'],
			'truquan'=>$rows['truquan'],
			'ngaynhapngu'=>$rows['ngaynhapngu'],			
			'donvi'=>$rows['donvi'],
			'ngayxn'=>$rows['ngayxn'],
			'donvikhinghichedo'=>$rows['donvikhinghichedo'],
			'capbac'=>$rows['capbac'],
			'thoigiancongtac'=>$rows['thoigiancongtac'],
			'thoigianct'=>$rows['thoigianct'],
			'thoigianvkk'=>$rows['thoigianvkk'],
			'ngaybbvdt'=>$rows['ngaybbvdt'],
			'giaycnbbsongay'=>$rows['giaycnbbsongay'],
			'bbgiamdinhsongay'=>$rows['bbgiamdinhsongay'],
			'hoidonggiamdinh'=>$rows['hoidonggiamdinh'],
			'tinhtrangbenhtat'=>$rows['tinhtrangbenhtat'],
			'klmsld'=>$rows['klmsld'],
			'quyetdinhtc'=>$rows['quyetdinhtc'],
			'capraqd'=>$rows['capraqd'],
			'ngayhuong'=>$rows['ngayhuong'],
			'sotientc'=>tientrocap($rows['matchangthang']),
			'sotienpc'=>tientrocap($rows['maphucapdacbiet']),
			'ghichu'=>$rows['ghichu']);
	}
?>
<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;width:624px;height:843px;">
	<tr>
		<td style="width:0px;height:0px;"></td>
		<td style="height:0px;width:250px;"></td>
		<td style="height:0px;width:62px;"></td>
		<td style="height:0px;width:70px;"></td>
		<td style="height:0px;width:113px;"></td>
		<td style="height:0px;width:129px;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="4" style="width:491px;height:24px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs2F55CA55" style="width:125px;height:24px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Mẫu&nbsp;HS3</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="cs72A8D38" style="width:246px;height:24px;line-height:15px;text-align:left;vertical-align:middle;"><nobr>Đơn vị: Sở LĐTBXH Tỉnh Bắc Giang</nobr></td>
		<td class="cs2F55CA55" colspan="4" style="width:370px;height:24px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>CỘNG&nbsp;H&#210;A&nbsp;X&#195;&nbsp;HỘI&nbsp;CHỦ&nbsp;NGHĨA&nbsp;VIỆT&nbsp;NAM</nobr></td>
	</tr>
	
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="cs72A8D38" style="width:246px;height:24px;line-height:15px;text-align:left;vertical-align:middle;"></td>
		<td class="cs2F55CA55" colspan="4" style="width:370px;height:24px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Độc&nbsp;lập&nbsp;-&nbsp;Tự&nbsp;do&nbsp;-&nbsp;Hạnh&nbsp;ph&#250;c</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" style="width:246px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEC5D5CC" colspan="4" style="width:370px;height:20px;line-height:17px;text-align:right;vertical-align:middle;"><?php echo('Số hồ sơ: '.$aKQ[0]['hosobo']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="cs2F55CA55" colspan="5" style="width:620px;height:20px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>BẢN&nbsp;TR&#205;CH&nbsp;LỤC&nbsp;HỒ&nbsp;SƠ&nbsp;BỆNH&nbsp;BINH</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="5" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Họ tên: '.$aKQ[0]['hoten']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="2" style="width:308px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Sinh '.doingaythang($aKQ[0]['ngaysinh'])); ?></td>
		<td class="csEC5D5CC" colspan="3" style="width:308px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Nam/Nữ: '.$aKQ[0]['gioitinh']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="5" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Nguyên quán: '.$aKQ[0]['quequan']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="5" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Trú quán: '.$aKQ[0]['truquan']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="2" style="width:308px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Nhập ngũ '.doint($aKQ[0]['ngaynhapngu'])); ?></td>
		<td class="csEC5D5CC" colspan="3" style="width:308px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Đơn vị: '.$aKQ[0]['donvi']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="2" style="width:308px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Xuất ngũ '.doint($aKQ[0]['ngayxn'])); ?></td>
		<td class="csEC5D5CC" colspan="3" style="width:308px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Đơn vị: '.$aKQ[0]['donvikhinghichedo']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="5" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Cấp bậc chức vụ khi xuất ngũ '.$aKQ[0]['capbac']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="5" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Có thời gian công tác liên tục trong quân đội, công an: '.$aKQ[0]['thoigiancongtac']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="5" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Thời gian ở chiến trường: '.$aKQ[0]['thoigianct']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="5" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Thời gian ở vùng đặc biệt khó khăn gian khổ: '.$aKQ[0]['thoigianvkk']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="5" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Bị bệnh từ '.$aKQ[0]['ngaybbvdt']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="5" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Giấy chứng nhận bệnh binh số: '.$aKQ[0]['giaycnbbsongay']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="5" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Biên bản giám định y khoa số: '.$aKQ[0]['bbgiamdinhsongay']." của ".$aKQ[0]['hoidonggiamdinh']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="5" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Tình trạng bệnh tật: '.$aKQ[0]['tinhtrangbenhtat']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="5" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Tỷ lệ suy giảm khả năng lao động do bệnh tật '.$aKQ[0]['klmsld'].'%.'); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:41px;"></td>
		<td class="csEC5D5CC" colspan="5" style="width:620px;height:37px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Quyết định cấp giấy chứng nhận và trợ cấp số: '.$aKQ[0]['quyetdinhtc'].' của '.$aKQ[0]['capraqd']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="5" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Trợ cấp được hưởng từ  '.doint($aKQ[0]['ngayhuong'])); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="5" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Mức trợ cấp hàng tháng: '.dinhdangso($aKQ[0]['sotientc'])); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="5" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Phụ cấp khác (nếu có): '.dinhdangso($aKQ[0]['sotienpc'])); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="5" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Chế độ khác đang hưởng: '.$aKQ[0]['ghichu']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="5" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Hồ sơ được lưu tại Sở Lao động - Thương binh và Xã hội tỉnh ………………….'); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:10px;"></td>
		<td class="csEC5D5CC" colspan="5" style="width:620px;height:6px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="3" style="width:378px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs251DA3" colspan="2" style="width:238px;height:20px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>….,&nbsp;ng&#224;y&nbsp;…&nbsp;th&#225;ng&nbsp;….&nbsp;năm&nbsp;....</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="3" style="width:378px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs2F55CA55" colspan="2" style="width:238px;height:20px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>GI&#193;M&nbsp;ĐỐC</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="3" style="width:378px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs251DA3" colspan="2" style="width:238px;height:20px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>(Chữ&nbsp;k&#253;,&nbsp;dấu)</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="3" style="width:378px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs2F55CA55" colspan="2" style="width:238px;height:20px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Họ&nbsp;v&#224;&nbsp;t&#234;n</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:96px;"></td>
		<td class="csEC5D5CC" colspan="3" style="width:378px;height:92px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEC5D5CC" colspan="2" style="width:238px;height:92px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="3" style="width:378px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEC5D5CC" colspan="2" style="width:238px;height:20px;line-height:17px;text-align:center;vertical-align:middle;"><nobr></nobr></td>
	</tr>

	</table>
</body>
</html>