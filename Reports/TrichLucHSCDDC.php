<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<?php
	include("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
?>
	<title>Document</title>
	<meta HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=utf-8'>
	<style type="text/css">
		.csBCB9D6CF {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top:#000000 1px solid;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:15px; font-weight:normal; font-style:normal; padding-top:2px;padding-left:2px;padding-right:2px;padding-bottom:2px;}
		.csBE3E4D38 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top:#000000 1px solid;border-right-style: none;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:15px; font-weight:normal; font-style:normal; padding-top:2px;padding-left:2px;padding-right:2px;padding-bottom:2px;}
		.csABB778E {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right:#000000 1px solid;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:15px; font-weight:normal; font-style:normal; padding-top:2px;padding-left:2px;padding-right:2px;padding-bottom:2px;}
		.cs58186F08 {color:#000000;background-color:transparent;border-left:#000000 1px solid;border-top-style: none;border-right-style: none;border-bottom:#000000 1px solid;font-family:Times New Roman; font-size:15px; font-weight:normal; font-style:normal; padding-top:2px;padding-left:2px;padding-right:2px;padding-bottom:2px;}
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
	$sql="select mahosobo,hoten,ngaysinh,gioitinh,nguyenquan,truquan,ngaynhapnghu,giaytocm,coquandv,tinhtrangbenh,bbgdsongay,hoidong,tlsgknld,giaycnbhh,qdtcsongay,ngayhuong,tcdacbiet,ghichu from hosohh where idhshh=".$ttdt;
	$query = mysqli_query($con,$sql);	
	while($rows = mysqli_fetch_array($query)){		
		$aKQ[]=array('mahosobo'=>$rows['mahosobo'],
			'hoten'=>$rows['hoten'],
			'ngaysinh'=>$rows['ngaysinh'],
			'gioitinh'=>$rows['gioitinh'],
			'nguyenquan'=>$rows['nguyenquan'],
			'truquan'=>$rows['truquan'],
			'ngaynhapnghu'=>$rows['ngaynhapnghu'],
			'coquandv'=>$rows['coquandv'],
			'giaytocm'=>$rows['giaytocm'],
			'tinhtrangbenh'=>$rows['tinhtrangbenh'],
			'bbgdsongay'=>$rows['bbgdsongay'],
			'hoidong'=>$rows['hoidong'],
			'tlsgknld'=>$rows['tlsgknld'],
			'giaycnbhh'=>$rows['giaycnbhh'],
			'qdtcsongay'=>$rows['qdtcsongay'],
			'ngayhuong'=>$rows['ngayhuong'],			
			'ghichu'=>$rows['ghichu'],
			'sotienpc'=>tientrocap($rows['tcdacbiet'])
		);
	}
?>

<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;width:624px;height:853px;">
	<tr>
		<td style="width:0px;height:0px;"></td>
		<td style="height:0px;width:34px;"></td>
		<td style="height:0px;width:96px;"></td>
		<td style="height:0px;width:76px;"></td>
		<td style="height:0px;width:44px;"></td>
		<td style="height:0px;width:52px;"></td>
		<td style="height:0px;width:10px;"></td>
		<td style="height:0px;width:70px;"></td>
		<td style="height:0px;width:16px;"></td>
		<td style="height:0px;width:96px;"></td>
		<td style="height:0px;width:1px;"></td>
		<td style="height:0px;width:81px;"></td>
		<td style="height:0px;width:48px;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="10" style="width:491px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs2F55CA55" colspan="2" style="width:125px;height:20px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Mẫu&nbsp;HS4</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="cs72A8D38" colspan="4" style="width:246px;height:20px;line-height:15px;text-align:left;vertical-align:middle;">Đơn vị: Sở LĐTBXH Tỉnh Bắc Giang</nobr></td>
		
		<td class="cs2F55CA55" colspan="8" style="width:370px;height:20px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>CỘNG&nbsp;H&#210;A&nbsp;X&#195;&nbsp;HỘI&nbsp;CHỦ&nbsp;NGHĨA&nbsp;VIỆT&nbsp;NAM</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="4" style="width:246px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs2F55CA55" colspan="8" style="width:370px;height:20px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Độc&nbsp;lập&nbsp;-&nbsp;Tự&nbsp;do&nbsp;-&nbsp;Hạnh&nbsp;ph&#250;c</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="4" style="width:246px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEC5D5CC" colspan="8" style="width:370px;height:20px;line-height:17px;text-align:right;vertical-align:middle;"><?php echo('Số hồ sơ: '.$aKQ[0]['mahosobo']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:41px;"></td>
		<td class="cs2F55CA55" colspan="12" style="width:620px;height:37px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>BẢN&nbsp;TR&#205;CH&nbsp;LỤC&nbsp;HỒ&nbsp;SƠ&nbsp;NGƯỜI&nbsp;HOẠT&nbsp;ĐỘNG&nbsp;KH&#193;NG&nbsp;CHIẾN&nbsp;BỊ&nbsp;NHIỄM&nbsp;CHẤT&nbsp;ĐỘC</nobr><br/><nobr>H&#211;A&nbsp;HỌC</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="cs2F55CA55" colspan="12" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><nobr>1.&nbsp;Người&nbsp;hoạt&nbsp;động&nbsp;kh&#225;ng&nbsp;chiến</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="12" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Họ và tên: '.$aKQ[0]['hoten']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="6" style="width:308px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Sinh '.doingaythang($aKQ[0]['ngaysinh'])); ?></td>
		<td class="csEC5D5CC" colspan="6" style="width:308px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Nam/Nữ: '.$aKQ[0]['gioitinh']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="12" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Nguyên quán: '.$aKQ[0]['nguyenquan']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="12" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Trú quán: '.$aKQ[0]['truquan']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="12" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Nhập ngũ/tham gia kháng chiến '.doint($aKQ[0]['ngaynhapnghu'])); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="12" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Giấy tờ chứng minh có thời gian hoạt động ở chiến trường: '.$aKQ[0]['giaytocm']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="12" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Cơ quan/Đơn vị: '.$aKQ[0]['coquandv']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="12" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Tình trạng bệnh tật theo hồ sơ (*): '.$aKQ[0]['tinhtrangbenh']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="12" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Biên bản giám định y khoa số: '.$aKQ[0]['bbgdsongay']." của ".$aKQ[0]['hoidong']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="12" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Tỷ lệ suy giảm khả năng lao động do nhiễm CĐHH: '.$aKQ[0]['tlsgknld']."%"); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="12" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Giấy chứng nhận bị nhiễm CĐHH số: '.$aKQ[0]['giaycnbhh']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="12" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Trợ cấp đối với ông (bà): '.$aKQ[0]['hoten'].' từ '.doint($aKQ[0]['ngayhuong'])); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="12" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo('Phụ cấp khác (nếu có): '.dinhdangso($aKQ[0]['sotienpc'])); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="12" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><nobr><?php echo('Chế độ khác đang hưởng: '.$aKQ[0]['ghichu']); ?></nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="cs2F55CA55" colspan="12" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><nobr>2.&nbsp;Con&nbsp;đẻ&nbsp;của&nbsp;người&nbsp;tham&nbsp;gia&nbsp;kh&#225;ng&nbsp;chiến</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:59px;"></td>
		<td class="csBE3E4D38" style="width:29px;height:53px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>TT</nobr></td>
		<td class="csBE3E4D38" style="width:91px;height:53px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Họ&nbsp;v&#224;&nbsp;t&#234;n</nobr></td>
		<td class="csBE3E4D38" style="width:71px;height:53px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Năm&nbsp;sinh</nobr></td>
		<td class="csBE3E4D38" colspan="2" style="width:91px;height:53px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>T&#236;nh&nbsp;trạng&nbsp;dị</nobr><br/><nobr>dạng,&nbsp;dị&nbsp;tật</nobr></td>
		<td class="csBE3E4D38" colspan="3" style="width:92px;height:53px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Tỉ&nbsp;lệ&nbsp;suy&nbsp;giảm</nobr><br/><nobr>KNLĐ&nbsp;do&nbsp;ảnh</nobr><br/><nobr>hưởng&nbsp;CĐHH</nobr></td>
		<td class="csBE3E4D38" style="width:91px;height:53px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Thời&nbsp;điểm</nobr><br/><nobr>hưởng&nbsp;trợ&nbsp;cấp</nobr><br/><nobr>h&#224;ng&nbsp;th&#225;ng</nobr></td>
		<td class="csBE3E4D38" colspan="2" style="width:76px;height:53px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Thời&nbsp;điểm</nobr><br/><nobr>hưởng</nobr><br/><nobr>BHYT</nobr></td>
		<td class="csBCB9D6CF" style="width:42px;height:53px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Ghi</nobr><br/><nobr>ch&#250;</nobr></td>
	</tr>
	<?php
	$sqltn="select hoten,ngaysinh,tinhtrangdd,tlsgknld,qdtcsongay,ngaybhyt from thannhanhh where idhshh=".$ttdt;
	$qr=mysqli_query($con,$sqltn);
	$istt=0;
	while($r=mysqli_fetch_array($qr)){
		echo"<tr style='vertical-align:top;'>";
			echo"<td style='width:0px;height:24px;'></td>";
			echo"<td class='cs58186F08' style='width:29px;height:24px;line-height:17px;text-align:center;vertical-align:middle;'>".++$istt."</td>";
			echo"<td class='cs58186F08' style='width:91px;height:24px;line-height:17px;text-align:center;vertical-align:middle;'>".$r['hoten']."</td>";
			echo"<td class='cs58186F08' style='width:71px;height:24px;line-height:17px;text-align:center;vertical-align:middle;'>".$r['ngaysinh']."</td>";
			echo"<td class='cs58186F08' colspan='2' style='width:91px;height:24px;line-height:17px;text-align:center;vertical-align:middle;'>".$r['tinhtrangdd']."</td>";
			echo"<td class='cs58186F08' colspan='3' style='width:92px;height:24px;line-height:17px;text-align:center;vertical-align:middle;'>".$r['tlsgknld']."</td>";
			echo"<td class='cs58186F08' style='width:91px;height:24px;line-height:17px;text-align:center;vertical-align:middle;'>".$r['qdtcsongay']."</td>";
			echo"<td class='cs58186F08' colspan='2' style='width:76px;height:24px;line-height:17px;text-align:center;vertical-align:middle;'>".$r['ngaybhyt']."</td>";
			echo"<td class='csABB778E' style='width:42px;height:24px;line-height:17px;text-align:center;vertical-align:middle;'></td>";
		echo"</tr>";
	}
	?>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="12" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><nobr>Hồ&nbsp;sơ&nbsp;được&nbsp;lưu&nbsp;tại&nbsp;Sở&nbsp;Lao&nbsp;động&nbsp;-&nbsp;Thương&nbsp;binh&nbsp;v&#224;&nbsp;X&#227;&nbsp;hội&nbsp;tỉnh&nbsp;…………………..</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:10px;"></td>
		<td class="csEC5D5CC" colspan="12" style="width:620px;height:6px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="7" style="width:378px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs251DA3" colspan="5" style="width:238px;height:20px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>….,&nbsp;ng&#224;y&nbsp;…&nbsp;th&#225;ng&nbsp;….&nbsp;năm&nbsp;....</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="7" style="width:378px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs2F55CA55" colspan="5" style="width:238px;height:20px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>GI&#193;M&nbsp;ĐỐC</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:23px;"></td>
		<td class="csEC5D5CC" colspan="7" style="width:378px;height:19px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs251DA3" colspan="5" style="width:238px;height:19px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>(Chữ&nbsp;k&#253;,&nbsp;dấu)</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="7" style="width:378px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs2F55CA55" colspan="5" style="width:238px;height:20px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Họ&nbsp;v&#224;&nbsp;t&#234;n</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:96px;"></td>
		<td class="csEC5D5CC" colspan="7" style="width:378px;height:92px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEC5D5CC" colspan="5" style="width:238px;height:92px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="7" style="width:378px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEC5D5CC" colspan="5" style="width:238px;height:20px;line-height:17px;text-align:center;vertical-align:middle;"><nobr></nobr></td>
	</tr>
</table>
</body>
</html>