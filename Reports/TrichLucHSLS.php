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
		.cs2F55CA55 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:15px; font-weight:bold; font-style:normal; padding-top:2px;padding-left:2px;padding-right:2px;padding-bottom:2px;}
		.cs251DA3 {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:15px; font-weight:normal; font-style:italic; padding-top:2px;padding-left:2px;padding-right:2px;padding-bottom:2px;}
		.csEC5D5CC {color:#000000;background-color:transparent;border-left-style: none;border-top-style: none;border-right-style: none;border-bottom-style: none;font-family:Times New Roman; font-size:15px; font-weight:normal; font-style:normal; padding-top:2px;padding-left:2px;padding-right:2px;padding-bottom:2px;}
		.csF7D3565D {height:0px;width:0px;overflow:hidden;font-size:0px;line-height:0px;}
	</style>
</head>

<body leftMargin=10 topMargin=10 rightMargin=10 bottomMargin=10 style="background-color:#FFFFFF">
<?php
	//echo 'các hàm';
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
	// echo 'Lấy ttdt';
	$ttdt=$_GET['id'];	
?>

<?php
	$aKQ=array();
	$sql="select mahsbo,hoten,ngaysinh,bidanh,gioitinh,nguyenquan,truquan,ngaynhapngu,ngayhisinh,capbac,chucvu,donvihisinh,noihisinh,truonghophisinh,giaybaotu,ngaybaotu,donvithongbao,bangtoquocghicong,loaidoituong from hosols where idhsls=".$ttdt;
	$query = mysqli_query($con,$sql);
	while($rows = mysqli_fetch_array($query)){
		$aKQ[]=array('mahsbo'=>$rows['mahsbo'],
		'hoten'=>$rows['hoten'],
		'ngaysinh'=>$rows['ngaysinh'],
		'bidanh'=>$rows['bidanh'],
		'gioitinh'=>$rows['gioitinh'],
		'nguyenquan'=>$rows['nguyenquan'],
		'truquan'=>$rows['truquan'],
		'ngaynhapngu'=>$rows['ngaynhapngu'],
		'ngayhisinh'=>$rows['ngayhisinh'],
		'capbac'=>$rows['capbac'],
		'chucvu'=>$rows['chucvu'],
		'donvihisinh'=>$rows['donvihisinh'],
		'noihisinh'=>$rows['noihisinh'],
		'truonghophisinh'=>$rows['truonghophisinh'],
		'giaybaotu'=>$rows['giaybaotu'],
		'ngaybaotu'=>$rows['ngaybaotu'],
		'donvithongbao'=>$rows['donvithongbao'],
		'bangtoquocghicong'=>$rows['bangtoquocghicong'],		
		'loaidoituong'=>$rows['loaidoituong']
		);
	}
?>

<table cellpadding="0" cellspacing="0" border="0" style="border-width:0px;empty-cells:show;width:624px;height:985px;">
	<tr>
		<td style="width:0px;height:0px;"></td>
		<td style="height:0px;width:48px;"></td>
		<td style="height:0px;width:144px;"></td>
		<td style="height:0px;width:27px;"></td>
		<td style="height:0px;width:14px;"></td>
		<td style="height:0px;width:55px;"></td>
		<td style="height:0px;width:24px;"></td>
		<td style="height:0px;width:70px;"></td>
		<td style="height:0px;width:21px;"></td>
		<td style="height:0px;width:92px;"></td>
		<td style="height:0px;width:129px;"></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="9" style="width:491px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs2F55CA55" style="width:125px;height:20px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Mẫu&nbsp;HS1</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="cs2F55CA55" colspan="3" style="width:215px;height:20px;line-height:17px;text-align:left;vertical-align:middle;">Đơn vị: Sở LDDTBXH Tỉnh Bắc Giang</td>
		<td class="cs2F55CA55" colspan="7" style="width:401px;height:20px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>CỘNG&nbsp;H&#210;A&nbsp;X&#195;&nbsp;HỘI&nbsp;CHỦ&nbsp;NGHĨA&nbsp;VIỆT&nbsp;NAM</nobr></td>
	</tr>
	
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="cs2F55CA55" colspan="3" style="width:215px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"></td>
		<td class="cs2F55CA55" colspan="7" style="width:401px;height:20px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Độc&nbsp;lập&nbsp;-&nbsp;Tự&nbsp;do&nbsp;-&nbsp;Hạnh&nbsp;ph&#250;c</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="3" style="width:215px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEC5D5CC" colspan="7" style="width:401px;height:20px;line-height:17px;text-align:right;vertical-align:middle;"><?php echo'Số hồ sơ: '.$aKQ[0]['mahsbo']; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="cs2F55CA55" colspan="10" style="width:620px;height:20px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>BẢN&nbsp;TR&#205;CH&nbsp;LỤC&nbsp;HỒ&nbsp;SƠ&nbsp;LIỆT&nbsp;SĨ</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="6" style="width:308px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Họ và tên: '.$aKQ[0]['hoten']; ?></td>
		<td class="csEC5D5CC" colspan="4" style="width:308px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Bí danh: '.$aKQ[0]['bidanh']; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="8" style="width:308px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Sinh '.doingaythang($aKQ[0]['ngaysinh']); ?></td>
		<td class="csEC5D5CC" colspan="2" style="width:308px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Nam/Nữ: '.$aKQ[0]['gioitinh']; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="10" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Nguyên quán: '.$aKQ[0]['nguyenquan']; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="10" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Trú quán (khi nhập ngũ hoặc tham gia CM): '.$aKQ[0]['truquan']; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="10" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Nhập ngũ, tham gia ;cách mạng '.doint($aKQ[0]['ngaynhapngu']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="10" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Hy sinh '.doint($aKQ[0]['ngayhisinh']); ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="6" style="width:308px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Cấp bậc: '.$aKQ[0]['capbac']; ?></td>
		<td class="csEC5D5CC" colspan="4" style="width:308px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Chức vụ: '.$aKQ[0]['chucvu']; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="10" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Đơn vị khi hy sinh: '.$aKQ[0]['donvihisinh']; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="10" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Nơi hy sinh: '.$aKQ[0]['noihisinh']; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="10" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Trường hợp hy sinh: '.$aKQ[0]['truonghophisinh']; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="10" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Giấy báo tử số: '.$aKQ[0]['giaybaotu'].' '.doint($aKQ[0]['ngaybaotu']).' của '.$aKQ[0]['donvithongbao']; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="10" style="width:620px;height:24px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo 'Số Bằng TQGC: '.$aKQ[0]['bangtoquocghicong']; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="10" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Thuộc đối tượng (QN, TNXP, CNVC, đối tượng khác): '.$aKQ[0]['loaidoituong']; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="10" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Mộ an táng (Nghĩa trang/Gia đình quản lý/Không có thông tin):………………………….'; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:10px;"></td>
		<td class="csEC5D5CC" colspan="10" style="width:620px;height:6px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="cs2F55CA55" colspan="10" style="width:620px;height:20px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>TH&#194;N&nbsp;NH&#194;N&nbsp;CHỦ&nbsp;YẾU&nbsp;CỦA&nbsp;LIỆT&nbsp;SĨ</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:43px;"></td>
		<td class="csBE3E4D38" style="width:43px;height:37px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Số&nbsp;TT</nobr></td>
		<td class="csBE3E4D38" style="width:139px;height:37px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Họ&nbsp;v&#224;&nbsp;t&#234;n</nobr></td>
		<td class="csBE3E4D38" colspan="3" style="width:91px;height:37px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Năm&nbsp;sinh</nobr></td>
		<td class="csBE3E4D38" colspan="3" style="width:110px;height:37px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Quan&nbsp;hệ&nbsp;với</nobr><br/><nobr>&nbsp;liệt&nbsp;sĩ</nobr></td>
		<td class="csBCB9D6CF" colspan="2" style="width:215px;height:37px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Chỗ&nbsp;ở&nbsp;hiện&nbsp;nay</nobr></td>
	</tr>
	
	<?php
	//Thông tin thân nhân liệt sĩ
	$sqltn="select hoten,ngaysinh,quanhe,truquan from thannhanls where idhsls=".$ttdt." and hoten not like '%thờ cúng%'";
	$qr=mysqli_query($con,$sqltn);
	$istt=0;
	while($r=mysqli_fetch_array($qr)){
	echo"<tr style='vertical-align:top;'>";
		echo"<td style='width:0px;height:24px;'></td>";
		echo"<td class='cs58186F08' style='width:43px;height:19px;line-height:17px;text-align:center;vertical-align:middle;'>".++$istt."</td>";
		echo"<td class='cs58186F08' style='width:139px;height:19px;line-height:17px;text-align:left;vertical-align:middle;'>".$r['hoten']."</td>";
		echo"<td class='cs58186F08' colspan='3' style='width:91px;height:19px;line-height:17px;text-align:center;vertical-align:middle;'>".$r['ngaysinh']."</td>";
		echo"<td class='cs58186F08' colspan='3' style='width:110px;height:19px;line-height:17px;text-align:left;vertical-align:middle;'>".$r['quanhe']."</td>";
		echo"<td class='csABB778E' colspan='2' style='width:215px;height:19px;line-height:17px;text-align:left;vertical-align:middle;'>".$r['truquan']."</td>";
	echo"</tr>";
	}
	?>
	
	<?php	
	//Thông tin người thờ cúng	
	$aTC=array('hoten'=>'',
				'ngaysinh'=>'',
				'gioitinh'=>'',
				'quanhe'=>'',
				'truquan'=>''
		);//Tạo dữ liệu mặc định nếu thân nhân thờ cúng ko có
	$sqltc="select hoten,ngaysinh,gioitinh,quanhe,truquan from thannhanls where hoten Like '%thờ cúng%' and idhsls='$ttdt'";
	$qrtc=mysqli_query($con,$sqltc);	
		while($r=mysqli_fetch_array($qrtc)){
			$aTC=array('hoten'=>$r['hoten'],
						'ngaysinh'=>$r['ngaysinh'],
						'gioitinh'=>$r['gioitinh'],
						'quanhe'=>$r['quanhe'],
						'truquan'=>$r['truquan']
		);		
	}	
	?>
	
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="10" style="width:620px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="cs2F55CA55" colspan="10" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><nobr>Người&nbsp;được&nbsp;ủy&nbsp;quyền&nbsp;thờ&nbsp;c&#250;ng&nbsp;liệt&nbsp;sĩ:</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="10" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Họ và tên: '.$aTC['hoten']; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="8" style="width:229px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Sinh '.doingaythang($aTC['ngaysinh']); ?></td>
		<td class="csEC5D5CC" colspan="4" style="width:387px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Nam/Nữ: '.$aTC['gioitinh']; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="10" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Mối quan hệ với liệt sĩ: '.$aTC['quanhe']; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="10" style="width:620px;height:20px;line-height:17px;text-align:left;vertical-align:middle;"><?php echo'Trú quán: '.$aTC['truquan']; ?></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="10" style="width:620px;height:20px;line-height:18px;text-align:left;vertical-align:middle;"><nobr>Hồ&nbsp;sơ&nbsp;được&nbsp;lưu&nbsp;tại&nbsp;Sở&nbsp;Lao&nbsp;động&nbsp;-&nbsp;Thương&nbsp;binh&nbsp;v&#224;&nbsp;X&#227;&nbsp;hội&nbsp;tỉnh&nbsp;	</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:10px;"></td>
		<td class="csEC5D5CC" colspan="10" style="width:620px;height:6px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="7" style="width:378px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs251DA3" colspan="3" style="width:238px;height:20px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>….,&nbsp;ng&#224;y&nbsp;…&nbsp;th&#225;ng&nbsp;….&nbsp;năm&nbsp;....</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="7" style="width:378px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs2F55CA55" colspan="3" style="width:238px;height:20px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>GI&#193;M&nbsp;ĐỐC</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="7" style="width:378px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs251DA3" colspan="3" style="width:238px;height:20px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>(Chữ&nbsp;k&#253;,&nbsp;dấu)</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="7" style="width:378px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="cs2F55CA55" colspan="3" style="width:238px;height:20px;line-height:17px;text-align:center;vertical-align:middle;"><nobr>Họ&nbsp;v&#224;&nbsp;t&#234;n</nobr></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:96px;"></td>
		<td class="csEC5D5CC" colspan="7" style="width:378px;height:92px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEC5D5CC" colspan="3" style="width:238px;height:92px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
	</tr>
	<tr style="vertical-align:top;">
		<td style="width:0px;height:24px;"></td>
		<td class="csEC5D5CC" colspan="7" style="width:378px;height:20px;"><!--[if lte IE 7]><div class="csF7D3565D"></div><![endif]--></td>
		<td class="csEC5D5CC" colspan="3" style="width:238px;height:20px;line-height:17px;text-align:center;vertical-align:middle;"><nobr></nobr></td>
	</tr>
</table>
</body>
</html>