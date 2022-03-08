<head>
<meta charset='utf-8'>
<?php
require ("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$phanloai = "";
	$huyen = "";
	$xa = "";

	if(isset($_POST['create'])){
		$phanloai =  $_POST['loaidoituong'];
		$huyen = $_POST['huyen'];
		$xa = $_POST['donvi'];
	}
	$sql = "Select tenhuyen from huyen where mahuyen = $huyen";
	$qrsql = mysqli_query($con,$sql);
	while($row =mysqli_fetch_array($qrsql))
	{
		$huyen=$row[0];
	}

require ("$_SERVER[DOCUMENT_ROOT]/Main/toolexcel.php");
?>
</head>
<body>
<?php
//luu cac thong tin vao file excel
require_once 'Classes/PHPExcel.php';
require_once 'Classes/PHPExcel/IOFactory.php';
$tenphanloai="";
switch ($phanloai) {
	case 'ah': {
		$tenphanloai = "Anh hùng LLVTND, anh hùng LĐTKKC";
		break;
	}
	case 'bb': {
		$tenphanloai = "Bệnh binh";
		break;
	}
	case 'tb': {
		$tenphanloai = "Thương binh";
		break;
	}
	case 'tnls': {
		$tenphanloai = "Liệt sỹ";
		break;
	}
	case 'hh': {
		$tenphanloai = "Người HĐKC bị nhiễm chất độc hóa học";
		break;
	}
	case 'hhtn': {
		$tenphanloai = "Con đẻ người HĐKC bị nhiễm chất độc hóa học";
		break;
	}
	case 'bm': {
			$tenphanloai = "Bà mẹ Việt Nam anh hùng";
			break;
		}
	case 'kc': {
		$tenphanloai = "Người HĐKC, là nghĩa vụ quốc tế được tặng huân, huy chương";
		break;
	}case 'cc': {
		$tenphanloai = "Người có công giúp đỡ cách mạng";
		break;
	}case 'td': {
		$tenphanloai = "Người HĐKC bị địch bắt tù đày";
		break;
	}case 'lt': {
		$tenphanloai = "Người hoạt động cách mạng trước ngày 01/01/1945";
		break;
	}case 'tkn': {
		$tenphanloai = "Người HĐCM từ ngày 01/01/1945 đến ngày khởi nghĩa tháng 8 năm 1945";
		break;
	}
	default:
	{
		$tenphanloai="";
	}
}
$objPHPExcel = new PHPExcel();
dulieumotcot($objPHPExcel,'A1',$huyen,'B','Time New Roman',11,'T','','',0,'');
dulieumotcot($objPHPExcel,'A3',$phanloai,'B','Time New Roman',11,'T','','',0,'');
dulieumotcot($objPHPExcel,'A2',$xa,'B','Time New Roman',11,'T','','',0,'');
dulieumotcot($objPHPExcel,'B3','Danh sách đối tượng bảo trợ','B','Time New Roman',16,'','','I3',0,'');
dulieumotcot($objPHPExcel,'B4',$tenphanloai,'','Time New Roman',11,'','','I4',0,'');
dulieumotcot($objPHPExcel,'A5','ID đối tượng','B','Time New Roman',10,'','','A6',8,'C');
dulieumotcot($objPHPExcel,'B5','Tên đối tượng','B','Time New Roman',10,'','','B6',20,'C');
dulieumotcot($objPHPExcel,'C5','Ngày sinh','B','Time New Roman',10,'','','C6',15,'C');
dulieumotcot($objPHPExcel,'D5','Nguyên quán','B','Time New Roman',10,'','','D6',20,'C');
dulieumotcot($objPHPExcel,'E5','Trú quán','B','Time New Roman',10,'','','E6',20,'C');
dulieumotcot($objPHPExcel,'F5','Thông tin điều dưỡng liền trước','B','Time New Roman',10,'','','I5',0,'C');
dulieumotcot($objPHPExcel,'F6','Điều dưỡng (Có/Không)','B','Time New Roman',10,'','','',15,'C');
dulieumotcot($objPHPExcel,'G6','Phân loại điều dưỡng (Một năm một lần/ Hai năm một lần)','B','Time New Roman',10,'','','',15,'C');
dulieumotcot($objPHPExcel,'H6','Hình thức điều dưỡng (Tại nhà/ Tập trung)','B','Time New Roman',10,'','','',15,'C');
dulieumotcot($objPHPExcel,'I6','Năm điều dưỡng','B','Time New Roman',10,'','','',10,'C');
kedong($objPHPExcel,'A5','I6',1,'Mỏng');

$index = 7;
$i = 0;
$sql = "";
if ($phanloai == 'tb')
{
	$sql = " Select idhstb,hoten,ngaysinh,truquan,quequan,loaidd,hinhthucddlt,namddcc";
	$sql = $sql." from hosotb Where huyen = '$huyen'".($xa ==""?"":" and xa='$xa'");
	
}
//bệnh binh
if ($phanloai == 'bb')
{
	$sql = " Select idhsbb,hoten,ngaysinh,truquan,quequan,loaidd,hinhthucddlt,namddcc";
	$sql = $sql." from hosobb Where huyen = '$huyen'".($xa ==""?"":" and xa='$xa'");
	
}
//anh hùng
if ($phanloai == 'ah')
{
	$sql = " Select idhsah,hoten,ngaysinh,truquan,nguyenquan,loaidd,hinhthucddlt,namddlc";
	$sql = $sql." from hosoah Where  huyen = '$huyen'".($xa ==""?"":" and xa='$xa'");
}
//Bà mẹ
if ($phanloai == 'bm')
{
	$sql = " Select idhsbm, hoten,ngaysinh,truquan,nguyenquan,loaidd,hinhthucddlt,namddlc";
	$sql = $sql." from hosobm Where huyen = '$huyen'".($xa ==""?"":" and xa='$xa'");

}
//Trước ngày 01/01/1945
if ($phanloai == 'lt')
{
	$sql = " Select idhslt,hoten,ngaysinh,truquan,nguyenquan,loaidd,hinhthucddlt,namddcc";
	$sql = $sql." from hosolt Where huyen = '$huyen'".($xa ==""?"":" and xa='$xa'");
}
//Tiền khởi nghĩa
if ($phanloai == 'tkn')
{
	$sql = " Select idhstkn,hoten,ngaysinh,truquan,nguyenquan,loaidd,hinhthucddlt,namddcc";
	$sql = $sql." from hosotkn Where huyen = '$huyen'".($xa ==""?"":" and xa='$xa'");
}
//Người nhiễm chất độc hóa học
if ($phanloai == 'hh')
{
	$sql = " Select idhshh,hoten,ngaysinh,truquan,nguyenquan,loaidd,hinhthucddlt,namddlc";
	$sql = $sql." from hosohh Where huyen = '$huyen'".($xa ==""?"":" and xa='$xa'");
}
//Bị bắt tù đày
if ($phanloai == 'td')
{
	$sql = $sql."Select idhstd, hoten,ngaysinh,truquan,nguyenquan,loaidd,hinhthucddlt,namddlc";
	$sql = $sql." from hosotd Where huyen = '$huyen'".($xa ==""?"":" and xa='$xa'");
}
//thân nhân liệt sỹ
if ($phanloai =='tnls')
{
	$sql = $sql." Select thannhanls.idthannhan,thannhanls.hoten,thannhanls.ngaysinh,thannhanls.truquan,thannhanls.nguyenquan,thannhanls.loaidieuduong,thannhanls.hinhthucddlt,thannhanls.namddlc";
	$sql = $sql." from thannhanls inner join hosols on thannhanls.idhsls=hosols.idhsls Where hosols.huyen = '$huyen' ".($xa ==""?"":" and hosols.xa='$xa'");
}
//Người có công cách mạng
if ($phanloai =='cc')
{
	$sql = " Select idhscc,hoten,ngaysinh,truquan,nguyenquan,loaidd,hinhthucddlt,namddlc";
	$sql = $sql." from hosocc Where huyen = '$huyen'".($xa ==""?"":" and xa='$xa'");
}
$kq=mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($kq))
{
	$i++;
	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('A' . $index, $row[0])
		->setCellValue('B' . $index, $row[1])
		->setCellValue('C' . $index, $row[2])
		->setCellValue('D' . $index, $row[3])
		->setCellValue('E' . $index, $row[4])
		->setCellValue('F' . $index, "Có")
		->setCellValue('G' . $index, $row[5])
		->setCellValue('H' . $index, $row[6])
		->setCellValue('I' . $index, $row[7]);
	$index++;
}
// truyền dữ liệu
dinhdangfont($objPHPExcel,'A7','I'.($index),$i,'Time New Roman',10);
dinhdangle($objPHPExcel,'A7','A'.($index),$i,'');
dinhdangle($objPHPExcel,'B7','I'.($index),$i,'T');
dinhdangxuongdong($objPHPExcel,'B7','I'.($index),$i);
//dinhdangBI($objPHPExcel, 'A' . $index, 'E' . $index, 1, 'B');
kedong($objPHPExcel,'A7','I'.($index-1),$i,'Mỏng');
taofile($objPHPExcel,"HSDT.xls","$_SERVER[DOCUMENT_ROOT]\\data\\upload","");
?>
<div class="modal-header">
	<h4 class="modal-title" style="text-align:center;"><strong>Bạn đã tạo file excel thành công, hãy tải file về để xem</strong></h4>
</div>
<a href="download.php?id=\data\upload\HSDT.xls">Bấm vào đây để tải file về</a>
</body>