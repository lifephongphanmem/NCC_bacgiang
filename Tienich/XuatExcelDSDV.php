<head>
<meta charset='utf-8'>
<?php
require ("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$phanloai = "";
	$huyen = "";
	$xa = "";

	if(isset($_POST['create'])){
		$huyen = $_POST['huyen'];
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
$objPHPExcel = new PHPExcel();
dulieumotcot($objPHPExcel,'A1',"Huyện: ". $huyen,'B','Time New Roman',11,'T','','C1',0,'');
//dulieumotcot($objPHPExcel,'A3',$phanloai,'B','Time New Roman',11,'T','','',0,'');
//dulieumotcot($objPHPExcel,'A2',$xa,'B','Time New Roman',11,'T','','',0,'');
dulieumotcot($objPHPExcel,'A3','Danh sách đơn vị sử dụng','B','Time New Roman',16,'','','E3',0,'');
//dulieumotcot($objPHPExcel,'B4',$tenphanloai,'','Time New Roman',11,'','','I4',0,'');
dulieumotcot($objPHPExcel,'A5','STT','B','Time New Roman',10,'','','A6',8,'C');
dulieumotcot($objPHPExcel,'B5','Tên đơn vị','B','Time New Roman',10,'','','B6',30,'C');
dulieumotcot($objPHPExcel,'C5','Tên đăng nhập','B','Time New Roman',10,'','','C6',20,'C');
dulieumotcot($objPHPExcel,'D5','Mật khẩu','B','Time New Roman',10,'','','D6',20,'C');
dulieumotcot($objPHPExcel,'E5','Tên đơn vị cấp trên','B','Time New Roman',10,'','','E6',30,'C');
kedong($objPHPExcel,'A5','E6',1,'Mỏng');

$index = 7;
$i = 0;
$sql = " Select tendonvi,tencaptren,tendn,makhau";
$sql = $sql." from hethongdv Where tencaptren = '$huyen' and length(tendn) > 0";
//echo $sql;
$kq=mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($kq))
{
	$i++;
	$objPHPExcel->setActiveSheetIndex(0)
		->setCellValue('A' . $index, $i)
		->setCellValue('B' . $index, $row[0])
		->setCellValue('C' . $index, $row[2])
		->setCellValue('D' . $index, "123")
		->setCellValue('E' . $index, $row[1]);
	$index++;
}
// truyền dữ liệu
dinhdangfont($objPHPExcel,'A7','E'.($index),$i,'Time New Roman',10);
dinhdangle($objPHPExcel,'A7','A'.($index),$i,'');
dinhdangle($objPHPExcel,'B7','E'.($index),$i,'T');
dinhdangxuongdong($objPHPExcel,'B7','E'.($index),$i);
//dinhdangBI($objPHPExcel, 'A' . $index, 'E' . $index, 1, 'B');
kedong($objPHPExcel,'A7','E'.($index-1),$i,'Mỏng');
taofile($objPHPExcel,"DSDV.xls","$_SERVER[DOCUMENT_ROOT]\\data\\upload","");
?>
<div class="modal-header">
	<h4 class="modal-title" style="text-align:center;"><strong>Bạn đã tạo file excel thành công, hãy tải file về để xem</strong></h4>
</div>
<a href="download.php?id=\data\upload\DSDV.xls">Bấm vào đây để tải file về</a>
</body>