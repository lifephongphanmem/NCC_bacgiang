<?php include("$_SERVER[DOCUMENT_ROOT]/Main/header.php");
include("$_SERVER[DOCUMENT_ROOT]/Main/general.php"); ?>
	<meta charset='utf-8' />
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/menu.php")?>
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/header2.php"); ?>
	<!--------- Header ----------->
<script src="/assets/News/jquery.min.js"></script>
<script src="/dist/jquery.inputmask.bundle.min.js"></script>
<script>
$(document).ready(function(){
    $(":input").inputmask();
});
$(document).ready(function(){
    $('#ckbkh').click(function(){
		$("#HM").slideToggle();
		$("#KH").slideToggle();
	});
});
</script>
	<h2>Nhận dữ liệu từ file excel</h2>
	<br />
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary" data-collapsed="0">
				<div class="panel-body">
					<form role="form" action = "" method="POST" enctype="multipart/form-data" class="form-horizontal form-wizard validate">
						<input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
						<div class="form-group">
							<label for="field-1" class="col-sm-3 control-label">Tên file:</label>
							<div class="col-sm-9">
								<input type="file" name="file" class="form-control"/>
							</div>
						</div>

						<div class="col-sm-12">
							<div class="col-sm-offset-3 col-sm-5">
								<button type="submit" name = "sua" class="btn btn-success">Nhận dữ liệu</button>
								<input type="button" class="btn btn-black" value="Không nhận" onclick="window.location.href='/main.php'" />
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php
function getCell( PHPExcel_Worksheet $sheet, /* string */ $x = 'A', /* int */ $y = 1 ) {
	return $sheet->getCell( $x . $y );
}
function getdateexcel($datevalue)
{
	$day = kieudouble($datevalue) - 2;
	$date=date_create("1900-01-01");
	date_add($date,date_interval_create_from_date_string($day." days"));
	return date_format($date,"Y-m-d");
}

if(isset($_POST['sua'])) {
	//  Include thư viện PHPExcel_IOFactory vào
	include 'Classes/PHPExcel/IOFactory.php';
	function IDTS()
	{
		global $con;
		$kq="";
		global $ab;
		$sql = "Select max(TTQLTS) From tblqlts where madonvi = '$ab'";
		$qrsql= mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{
			$kq = $row[0];
		}
		return $kq;
	}
	function IDCC()
	{
		$kq="";
		global $ab;
		global $con;
		$sql = "Select max(TTQLcc) From tblqlcc where madonvi = '$ab'";
		$qrsql= mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql))
		{
			$kq = $row[0];
		}
		return $kq;
	}
	$tmp_name = $_FILES['file']['tmp_name'];
	if($tmp_name != "")
	{
		$path_parts = pathinfo($_FILES['file']['name']);
		$fileup = $path_parts['filename'].".".$path_parts['extension'];
		move_uploaded_file($_FILES['file']['tmp_name'],"$_SERVER[DOCUMENT_ROOT]/Tienich/".$fileup);
	}

	//$dom = DOMDocument::load( $_FILES['file']['tmp_name'] );
	//$rows = $dom->getElementsByTagName( 'Row' );
	//print_r($rows);
	//$inputFileName = $fileup;

	$objPHPExcel = PHPExcel_IOFactory::load($fileup);
	foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
		$worksheetTitle = $worksheet->getTitle();
		$highestRow = $worksheet->getHighestRow(); // e.g. 10
		$highestColumn = $worksheet->getHighestColumn(); // e.g 'F'
		//$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
		$nrColumns = ord($highestColumn) - 64;
		$phanloaidt = getCell($worksheet,"A",3);
		$huyen = getCell($worksheet,"A",1);
		$xa = getCell($worksheet,"A",2);
		if($worksheetTitle == "Worksheet") {
			for ($rows = 7; $rows < $highestRow; $rows++) {
				$iddt = getCell($worksheet,"A",$rows);
				$dieuduong = getCell($worksheet,"F",$rows);
				$phanloaidd = getCell($worksheet,"G",$rows);
				$hinhthucdd = getCell($worksheet,"H",$rows);
				$namdd = getCell($worksheet,"I",$rows);
				if ($phanloaidt == 'tb')
				{
					$sql = "Update hosotb set loaidd = '$phanloaidd',namddcc = '$namdd',dieuduong = '$dieuduong',hinhthucddlt = '$hinhthucdd'".
						" where idhstb = $iddt";
				}
//bệnh binh
				if ($phanloaidt == 'bb')
				{
					$sql = "Update hosobb set loaidd = '$phanloaidd',namddcc = '$namdd',dieuduong = '$dieuduong',hinhthucddlt = '$hinhthucdd'".
						" where idhsbb = $iddt";
				}
//anh hùng
				if ($phanloaidt == 'ah')
				{
					$sql = "Update hosoah set loaidd = '$phanloaidd',namddlc = '$namdd',dieuduong = '$dieuduong',hinhthucddlt = '$hinhthucdd'".
						" where idhsah = $iddt";
				}
//Bà mẹ
				if ($phanloaidt == 'bm')
				{
					$sql = "Update hosobm set loaidd = '$phanloaidd',namddlc = '$namdd',dieuduong = '$dieuduong',hinhthucddlt = '$hinhthucdd'".
						" where idhsbm = $iddt";
				}
//Trước ngày 01/01/1945
				if ($phanloaidt == 'lt')
				{
					$sql = "Update hosolt set loaidd = '$phanloaidd',namddcc = '$namdd',dieuduong = '$dieuduong',hinhthucddlt = '$hinhthucdd'".
						" where idhslt = $iddt";
				}
//Tiền khởi nghĩa
				if ($phanloaidt == 'tkn')
				{
					$sql = "Update hosotkn set loaidd = '$phanloaidd',namddcc = '$namdd',dieuduong = '$dieuduong',hinhthucddlt = '$hinhthucdd'".
						" where idhstkn = $iddt";
				}
//Người nhiễm chất độc hóa học
				if ($phanloaidt == 'hh')
				{
					$sql = "Update hosohh set loaidd = '$phanloaidd',namddlc = '$namdd',dieuduong = '$dieuduong',hinhthucddlt = '$hinhthucdd'".
						" where idhshh = $iddt";
				}
//Bị bắt tù đày
				if ($phanloaidt == 'td')
				{
					$sql = "Update hosotd set loaidd = '$phanloaidd',namddlc = '$namdd',dieuduong = '$dieuduong',hinhthucddlt = '$hinhthucdd'".
						" where idhstd = $iddt";
				}
//thân nhân liệt sỹ
				if ($phanloaidt =='tnls')
				{
					$sql = "Update thannhanls set loaidieuduong = '$phanloaidd',namddlc = '$namdd',dieuduong = '$dieuduong',hinhthucddlt = '$hinhthucdd'".
						" where idthannhan = $iddt";
				}
//Người có công cách mạng
				if ($phanloaidt =='cc')
				{
					$sql = "Update hosocc set loaidd = '$phanloaidd',namddlc = '$namdd',dieuduong = '$dieuduong',hinhthucddlt = '$hinhthucdd'".
						" where idhscc = $iddt";
				}
				$qrsql = mysqli_query($con,$sql);
					if(!$qrsql)
						echo  "Lỗi Insert ". $sql;
				//echo $phanloaidt . "----" . $huyen . "----" . $xa. "----" . $iddt. "----" . $dieuduong. "----" . $phanloaidd. "----" . $hinhthucdd. "----" . $namdd ;
				}
			}
		}
	if(file_exists($fileup)) {
		unlink($fileup);
	}
}
?>
	</div>
	</div>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>