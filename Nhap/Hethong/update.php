<?php include("$_SERVER[DOCUMENT_ROOT]/Main/header.php");
include("$_SERVER[DOCUMENT_ROOT]/Main/general.php"); ?>	
<meta charset='utf-8' />										
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/menu.php")?>
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/header2.php"); ?>
<!--------- Header ----------->
<script src="/assets/News/jquery.min.js"></script>
<script src="/dist/jquery.inputmask.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="/assets/News/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="/assets/News/dataTables.fixedColumns.css">
	<style type="text/css" class="init">
	th, td { text-align: center; white-space: nowrap; }	
	</style>
	<script type="text/javascript" language="javascript" src="/assets/News/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="/assets/News/dataTables.fixedColumns.js"></script>
<style type="text/css" class="init">
		/* Ensure that the demo table scrolls */
		th, td { white-space: nowrap; }
		table > tbody > tr.highlight > td,
		table > tbody > tr.highlight > th {
		  background-color: pink !important;
		  color: red;
		}
</style>
<script type="text/javascript" language="javascript" class="init">
		$(document).ready(function() {  
	   $('table tbody tr').hover(function() {               
		  $(this).addClass('highlight');  
	   }, function() {  
		  $(this).removeClass('highlight');  
	   });  
	  
	});  
function showAjaxModalhs()
		{
			jQuery('#modal-6').modal('show', {backdrop: 'static'});
		}
		function showAjaxModaltk()
		{
			jQuery('#modal-8').modal('show', {backdrop: 'static'});
		}
</script>
<?php
function quanhe($moiquanhe){
	global $con;
	$kq = 0;
	if($moiquanhe == "")
		$kq = 0;
	elseif($moiquanhe != "") {
		$sql = "Select maquanhe from dmquanhe where moiquanhe = '".$moiquanhe."'";
		$qrsql = mysqli_query($con, $sql);
		while ($row = mysqli_fetch_array($qrsql)) {
			$kq = $row[0];
		}
		if($kq ==0)
			$kq = 99;
	}
	return $kq;
}
function xa($xa){
	global $con;
	$kq = "0";
	if($xa == "")
		$kq = "0";
	elseif($xa != "") {
		$sql = "Select maAPI from xa where tenxa = '".$xa."'";
		$qrsql = mysqli_query($con, $sql);
		while ($row = mysqli_fetch_array($qrsql)) {
			$kq = $row[0];
		}
	}
	return $kq;
}
function huyen($huyen){
	global $con;
	$kq = "0";
	if($huyen == "")
		$kq = "0";
	elseif($huyen != "") {
		$sql = "Select mahuyen from huyen where tenhuyen = '".$huyen."'";
		$qrsql = mysqli_query($con, $sql);
		while ($row = mysqli_fetch_array($qrsql)) {
			$kq = $row[0];
		}
	}
	return $kq;
}
function updmquanhe(){
	global $con;
	$sql = "Select idthannhanbm, quanhe from tblthannhanbm";
	$qrsql = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($qrsql)){
		$sqlup = "Update maquanhe = ".quanhe($row['quanhe']). " where idthannhanbm = $row[0]";
		echo  $sqlup;
		$qrsql = mysqli_query($con,$sqlup);
	}
}
if(isset($_POST['bame'])) {
	$sqls = "Select idthannhanbm, quanhe,gioitinh,xa,huyen from thannhanbm";
	$qrsqls = mysqli_query($con, $sqls);
	while ($row = mysqli_fetch_array($qrsqls)) {
		$sqlup = "Update thannhanbm set  maquanhe = " . quanhe($row['quanhe']) . ", gioitinhAPI = " . gioitinhAPI($row['gioitinh']) . ",maxaAPI = '" . xa($row['xa']) . "',mahuyenAPI = '" . huyen($row['huyen']) . "' where idthannhanbm = $row[0]";
		$qrsqlup = mysqli_query($con, $sqlup);
	}
	$sqls = "Select idhsbm , xa,huyen from hosobm";
	$qrsqls = mysqli_query($con, $sqls);
	while ($row = mysqli_fetch_array($qrsqls)) {
		$sqlup = "Update hosobm set maxaAPI = '" . xa($row['xa']) . "',mahuyenAPI = '" . huyen($row['huyen']) . "' where idhsbm  = $row[0]";
		$qrsqlup = mysqli_query($con, $sqlup);
	}
}
if(isset($_POST['dltb'])) {
	$sqls = "Select idthannhantb, quanhe, gioitinh,xa,huyen,xa,huyen from thannhantb";
	$qrsqls = mysqli_query($con, $sqls);
	while ($row = mysqli_fetch_array($qrsqls)) {
		$sqlup = "Update thannhantb set  maquanhe = " . quanhe($row['quanhe']) . ", gioitinhAPI = " . gioitinhAPI($row['gioitinh']) . ",maxaAPI = '" . xa($row['xa']) . "',mahuyenAPI = '" . huyen($row['huyen']) . "' where idthannhantb = $row[0]";
		$qrsqlup = mysqli_query($con, $sqlup);
	}
	$sqls = "Select idhstb,gioitinh, xa,huyen from hosotb";
	$qrsqls = mysqli_query($con, $sqls);
	while ($row = mysqli_fetch_array($qrsqls)) {
		$sqlup = "Update hosotb set gioitinhAPI = " . gioitinhAPI($row['gioitinh']) . ", maxaAPI = '" . xa($row['xa']) . "',mahuyenAPI = '" . huyen($row['huyen']) . "' where idhstb   = $row[0]";
		$qrsqlup = mysqli_query($con, $sqlup);
	}
}
if(isset($_POST['dlbb'])) {
	$sqls = "Select idthannhanbb, quanhe, gioitinh,xa,huyen from thannhanbb";
	$qrsqls = mysqli_query($con, $sqls);
	while ($row = mysqli_fetch_array($qrsqls)) {
		$sqlup = "Update thannhanbb set  maquanhe = " . quanhe($row['quanhe']) . ", gioitinhAPI = " . gioitinhAPI($row['gioitinh']) . ",maxaAPI = '" . xa($row['xa']) . "',mahuyenAPI = '" . huyen($row['huyen']) . "' where idthannhanbb = $row[0]";
		$qrsqlup = mysqli_query($con, $sqlup);
	}
	$sqls = "Select idhsbb ,gioitinh, xa,huyen from hosobb";
	$qrsqls = mysqli_query($con, $sqls);
	while ($row = mysqli_fetch_array($qrsqls)) {
		$sqlup = "Update hosobb set gioitinhAPI = " . gioitinhAPI($row['gioitinh']) . ", maxaAPI = '" . xa($row['xa']) . "',mahuyenAPI = '" . huyen($row['huyen']) . "' where idhsbb   = $row[0]";
		$qrsqlup = mysqli_query($con, $sqlup);
	}
}
if(isset($_POST['dlhh'])) {
	$sqls = "Select idthannhanhh, quanhe, gioitinh,xa,huyen from thannhanhh";
	$qrsqls = mysqli_query($con, $sqls);
	while ($row = mysqli_fetch_array($qrsqls)) {
		$sqlup = "Update thannhanhh set  maquanhe = " . quanhe($row['quanhe']) . ", gioitinhAPI = " . gioitinhAPI($row['gioitinh']) . ",maxaAPI = '" . xa($row['xa']) . "',mahuyenAPI = '" . huyen($row['huyen']) . "' where idthannhanhh = $row[0]";
		$qrsqlup = mysqli_query($con, $sqlup);
	}
	$sqls = "Select idhshh ,gioitinh, xa,huyen from hosohh";
	$qrsqls = mysqli_query($con, $sqls);
	while ($row = mysqli_fetch_array($qrsqls)) {
		$sqlup = "Update hosohh set gioitinhAPI = " . gioitinhAPI($row['gioitinh']) . ", maxaAPI = '" . xa($row['xa']) . "',mahuyenAPI = '" . huyen($row['huyen']) . "' where idhshh   = $row[0]";
		$qrsqlup = mysqli_query($con, $sqlup);
	}
}
if(isset($_POST['dlkc'])) {
	$sqls = "Select idhskc,gioitinh, xa,huyen from hosokc";
	$qrsqls = mysqli_query($con, $sqls);
	while ($row = mysqli_fetch_array($qrsqls)) {
		$sqlup = "Update hosokc set gioitinhAPI = " . gioitinhAPI($row['gioitinh']) . ", maxaAPI = '" . xa($row['xa']) . "',mahuyenAPI = '" . huyen($row['huyen']) . "' where idhskc = $row[0]";
		$qrsqlup = mysqli_query($con, $sqlup);
	}
}
if(isset($_POST['dltkn'])) {
	$sqls = "Select idthannhantkn , quanhe, gioitinh,xa,huyen from thannhantkn";
	$qrsqls = mysqli_query($con, $sqls);
	while ($row = mysqli_fetch_array($qrsqls)) {
		$sqlup = "Update thannhantkn set  maquanhe = " . quanhe($row['quanhe']) . ", gioitinhAPI = " . gioitinhAPI($row['gioitinh']) . ",maxaAPI = '" . xa($row['xa']) . "',mahuyenAPI = '" . huyen($row['huyen']) . "' where idthannhantkn  = $row[0]";
		$qrsqlup = mysqli_query($con, $sqlup);
	}
	$sqls = "Select idhstkn ,gioitinh, xa,huyen from hosotkn";
	$qrsqls = mysqli_query($con, $sqls);
	while ($row = mysqli_fetch_array($qrsqls)) {
		$sqlup = "Update hosotkn set gioitinhAPI = " . gioitinhAPI($row['gioitinh']) . ", maxaAPI = '" . xa($row['xa']) . "',mahuyenAPI = '" . huyen($row['huyen']) . "' where idhstkn   = $row[0]";
		$qrsqlup = mysqli_query($con, $sqlup);
	}
}
if(isset($_POST['dlcm'])) {
	$sqls = "Select idthannhanlt  , quanhe, gioitinh,xa,huyen from thannhanlt";
	$qrsqls = mysqli_query($con, $sqls);
	while ($row = mysqli_fetch_array($qrsqls)) {
		$sqlup = "Update thannhanlt set  maquanhe = " . quanhe($row['quanhe']) . ", gioitinhAPI = " . gioitinhAPI($row['gioitinh']) . ",maxaAPI = '" . xa($row['xa']) . "',mahuyenAPI = '" . huyen($row['huyen']) . "' where idthannhanlt  = $row[0]";
		$qrsqlup = mysqli_query($con, $sqlup);
	}
	$sqls = "Select idhslt ,gioitinh, xa,huyen from hosolt";
	$qrsqls = mysqli_query($con, $sqls);
	while ($row = mysqli_fetch_array($qrsqls)) {
		$sqlup = "Update hosolt set gioitinhAPI = " . gioitinhAPI($row['gioitinh']) . ", maxaAPI = '" . xa($row['xa']) . "',mahuyenAPI = '" . huyen($row['huyen']) . "' where idhslt   = $row[0]";
		$qrsqlup = mysqli_query($con, $sqlup);
	}
}
if(isset($_POST['dlah'])) {
	$sqls = "Select idthannhanah  , quanhe, gioitinh,xa,huyen from thannhanah";
	$qrsqls = mysqli_query($con, $sqls);
	while ($row = mysqli_fetch_array($qrsqls)) {
		$sqlup = "Update thannhanah set  maquanhe = " . quanhe($row['quanhe']) . ", gioitinhAPI = " . gioitinhAPI($row['gioitinh']) . ",maxaAPI = '" . xa($row['xa']) . "',mahuyenAPI = '" . huyen($row['huyen']) . "' where idthannhanah  = $row[0]";
		$qrsqlup = mysqli_query($con, $sqlup);
	}
	$sqls = "Select idhsah ,gioitinh, xa,huyen from hosoah";
	$qrsqls = mysqli_query($con, $sqls);
	while ($row = mysqli_fetch_array($qrsqls)) {
		$sqlup = "Update hosoah set gioitinhAPI = " . gioitinhAPI($row['gioitinh']) . ", maxaAPI = '" . xa($row['xa']) . "',mahuyenAPI = '" . huyen($row['huyen']) . "' where idhsah   = $row[0]";
		$qrsqlup = mysqli_query($con, $sqlup);
	}
}
if(isset($_POST['dltd'])) {
	$sqls = "Select idthannhantd , quanhe, gioitinh,xa,huyen from thannhantd";
	$qrsqls = mysqli_query($con, $sqls);
	while ($row = mysqli_fetch_array($qrsqls)) {
		$sqlup = "Update thannhantd set  maquanhe = " . quanhe($row['quanhe']) . ", gioitinhAPI = " . gioitinhAPI($row['gioitinh']) . ",maxaAPI = '" . xa($row['xa']) . "',mahuyenAPI = '" . huyen($row['huyen']) . "' where idthannhantd  = $row[0]";
		$qrsqlup = mysqli_query($con, $sqlup);
	}
	$sqls = "Select idhstd,gioitinh, xa,huyen from hosotd";
	$qrsqls = mysqli_query($con, $sqls);
	while ($row = mysqli_fetch_array($qrsqls)) {
		$sqlup = "Update hosotd set gioitinhAPI = " . gioitinhAPI($row['gioitinh']) . ", maxaAPI = '" . xa($row['xa']) . "',mahuyenAPI = '" . huyen($row['huyen']) . "' where idhstd = $row[0]";
		$qrsqlup = mysqli_query($con, $sqlup);
	}
}
if(isset($_POST['dlcc'])) {
	$sqls = "Select idthannhancc  , quanhe, gioitinh,xa,huyen from thannhancc";
	$qrsqls = mysqli_query($con, $sqls);
	while ($row = mysqli_fetch_array($qrsqls)) {
		$sqlup = "Update thannhancc set  maquanhe = " . quanhe($row['quanhe']) . ", gioitinhAPI = " . gioitinhAPI($row['gioitinh']) . ",maxaAPI = '" . xa($row['xa']) . "',mahuyenAPI = '" . huyen($row['huyen']) . "' where idthannhancc  = $row[0]";
		$qrsqlup = mysqli_query($con, $sqlup);
	}
	$sqls = "Select idhscc,gioitinh, xa,huyen from hosocc";
	$qrsqls = mysqli_query($con, $sqls);
	while ($row = mysqli_fetch_array($qrsqls)) {
		$sqlup = "Update hosocc set gioitinhAPI = " . gioitinhAPI($row['gioitinh']) . ", maxaAPI = '" . xa($row['xa']) . "',mahuyenAPI = '" . huyen($row['huyen']) . "' where idhscc = $row[0]";
		$qrsqlup = mysqli_query($con, $sqlup);
	}
}
if(isset($_POST['dlls'])) {
	$sqls = "Select idthannhan , quanhe, gioitinh,xa,huyen from thannhanls";
	$qrsqls = mysqli_query($con, $sqls);
	while ($row = mysqli_fetch_array($qrsqls)) {
		$sqlup = "Update thannhanls set  maquanhe = " . quanhe($row['quanhe']) . ", gioitinhAPI = " . gioitinhAPI($row['gioitinh']) . ",maxaAPI = '" . xa($row['xa']) . "',mahuyenAPI = '" . huyen($row['huyen']) . "' where idthannhan  = $row[0]";
		$qrsqlup = mysqli_query($con, $sqlup);
	}
	$sqls = "Select idhsls , gioitinh,xa,huyen from hosols";
	$qrsqls = mysqli_query($con, $sqls);
	while ($row = mysqli_fetch_array($qrsqls)) {
		$sqlup = "Update hosols set gioitinhAPI = " . gioitinhAPI($row['gioitinh']) . ", maxaAPI = '" . xa($row['xa']) . "',mahuyenAPI = '" . huyen($row['huyen']) . "' where idhsls  = $row[0]";
		$qrsqlup = mysqli_query($con, $sqlup);
	}
}
if(isset($_POST['bm'])){

	$sql = "ALTER TABLE `thannhanbm` ADD `maxaAPI` VARCHAR(255) NOT NULL AFTER `tilett`, ADD `mahuyenAPI` VARCHAR(255) NOT NULL AFTER `maxaAPI`, ADD `gioitinhAPI` DOUBLE NOT NULL AFTER `mahuyenAPI`, ADD `maquanhe` DOUBLE NOT NULL AFTER `gioitinhAPI`";
	$qrsql = mysqli_query($con,$sql);
	$sql = "ALTER TABLE `hosobm` ADD `maxaAPI` VARCHAR(255) NOT NULL AFTER `tinhhinhhn`, ADD `mahuyenAPI` VARCHAR(255) NOT NULL AFTER `maxaAPI`, ADD `gioitinhAPI` DOUBLE NOT NULL AFTER `mahuyenAPI`";
	$qrsql = mysqli_query($con,$sql);
}
if(isset($_POST['tb'])){

	$sql = "ALTER TABLE `thannhantb` ADD `maxaAPI` VARCHAR(255) NOT NULL AFTER `tenncc`, ADD `mahuyenAPI` VARCHAR(255) NOT NULL AFTER `maxaAPI`, ADD `gioitinhAPI` DOUBLE NOT NULL AFTER `mahuyenAPI`, ADD `maquanhe` DOUBLE NOT NULL AFTER `gioitinhAPI`";
	$qrsql = mysqli_query($con,$sql);
	$sql = "ALTER TABLE `hosotb` ADD `maxaAPI` VARCHAR(255) NOT NULL AFTER `filedk`, ADD `mahuyenAPI` VARCHAR(255) NOT NULL AFTER `maxaAPI`, ADD `gioitinhAPI` DOUBLE NOT NULL AFTER `mahuyenAPI`";
	$qrsql = mysqli_query($con,$sql);
}
if(isset($_POST['bb'])){

	$sql = "ALTER TABLE `thannhanbb` ADD `maxaAPI` VARCHAR(255) NOT NULL AFTER `tenncc`, ADD `mahuyenAPI` VARCHAR(255) NOT NULL AFTER `maxaAPI`, ADD `gioitinhAPI` DOUBLE NOT NULL AFTER `mahuyenAPI`, ADD `maquanhe` DOUBLE NOT NULL AFTER `gioitinhAPI`";
	$qrsql = mysqli_query($con,$sql);
	$sql = "ALTER TABLE `hosobb` ADD `maxaAPI` VARCHAR(255) NOT NULL AFTER `loaiqua27`, ADD `mahuyenAPI` VARCHAR(255) NOT NULL AFTER `maxaAPI`, ADD `gioitinhAPI` DOUBLE NOT NULL AFTER `mahuyenAPI`";
	$qrsql = mysqli_query($con,$sql);
}
if(isset($_POST['hh'])){

	$sql = "ALTER TABLE `thannhanhh` ADD `maxaAPI` VARCHAR(255) NOT NULL AFTER `ngaymat`, ADD `mahuyenAPI` VARCHAR(255) NOT NULL AFTER `maxaAPI`, ADD `gioitinhAPI` DOUBLE NOT NULL AFTER `mahuyenAPI`, ADD `maquanhe` DOUBLE NOT NULL AFTER `gioitinhAPI`";
	$qrsql = mysqli_query($con,$sql);
	$sql = "ALTER TABLE `hosohh` ADD `maxaAPI` VARCHAR(255) NOT NULL AFTER `ngaymat`, ADD `mahuyenAPI` VARCHAR(255) NOT NULL AFTER `maxaAPI`, ADD `gioitinhAPI` DOUBLE NOT NULL AFTER `mahuyenAPI`";
	$qrsql = mysqli_query($con,$sql);
}
if(isset($_POST['kc'])){

	$sql = "ALTER TABLE `hosokc` ADD `maxaAPI` VARCHAR(255) NOT NULL AFTER `nguoihuong`, ADD `mahuyenAPI` VARCHAR(255) NOT NULL AFTER `maxaAPI`, ADD `gioitinhAPI` DOUBLE NOT NULL AFTER `mahuyenAPI`";
	$qrsql = mysqli_query($con,$sql);
}
if(isset($_POST['tkn'])){

	$sql = "ALTER TABLE `thannhantkn` ADD `maxaAPI` VARCHAR(255) NOT NULL AFTER `tenncc`, ADD `mahuyenAPI` VARCHAR(255) NOT NULL AFTER `maxaAPI`, ADD `gioitinhAPI` DOUBLE NOT NULL AFTER `mahuyenAPI`, ADD `maquanhe` DOUBLE NOT NULL AFTER `gioitinhAPI`";
	$qrsql = mysqli_query($con,$sql);
	$sql = "ALTER TABLE `hosotkn` ADD `maxaAPI` VARCHAR(255) NOT NULL AFTER `loaiquatet`, ADD `mahuyenAPI` VARCHAR(255) NOT NULL AFTER `maxaAPI`, ADD `gioitinhAPI` DOUBLE NOT NULL AFTER `mahuyenAPI`";
	$qrsql = mysqli_query($con,$sql);
}
if(isset($_POST['cm'])){

	$sql = "ALTER TABLE `thannhanlt` ADD `maxaAPI` VARCHAR(255) NOT NULL AFTER `tenncc`, ADD `mahuyenAPI` VARCHAR(255) NOT NULL AFTER `maxaAPI`, ADD `gioitinhAPI` DOUBLE NOT NULL AFTER `mahuyenAPI`, ADD `maquanhe` DOUBLE NOT NULL AFTER `gioitinhAPI`";
	$qrsql = mysqli_query($con,$sql);
	$sql = "ALTER TABLE `hosolt` ADD `maxaAPI` VARCHAR(255) NOT NULL AFTER `loaiquatet`, ADD `mahuyenAPI` VARCHAR(255) NOT NULL AFTER `maxaAPI`, ADD `gioitinhAPI` DOUBLE NOT NULL AFTER `mahuyenAPI`";
	$qrsql = mysqli_query($con,$sql);
}
if(isset($_POST['ah'])){

	$sql = "ALTER TABLE `thannhanah` ADD `maxaAPI` VARCHAR(255) NOT NULL AFTER `tenncc`, ADD `mahuyenAPI` VARCHAR(255) NOT NULL AFTER `maxaAPI`, ADD `gioitinhAPI` DOUBLE NOT NULL AFTER `mahuyenAPI`, ADD `maquanhe` DOUBLE NOT NULL AFTER `gioitinhAPI`";
	$qrsql = mysqli_query($con,$sql);
	$sql = "ALTER TABLE `hosoah` ADD `maxaAPI` VARCHAR(255) NOT NULL AFTER `loaiquatet`, ADD `mahuyenAPI` VARCHAR(255) NOT NULL AFTER `maxaAPI`, ADD `gioitinhAPI` DOUBLE NOT NULL AFTER `mahuyenAPI`";
	$qrsql = mysqli_query($con,$sql);
}
if(isset($_POST['td'])){

	$sql = "ALTER TABLE `thannhantd` ADD `maxaAPI` VARCHAR(255) NOT NULL AFTER `bhyt`, ADD `mahuyenAPI` VARCHAR(255) NOT NULL AFTER `maxaAPI`, ADD `gioitinhAPI` DOUBLE NOT NULL AFTER `mahuyenAPI`, ADD `maquanhe` DOUBLE NOT NULL AFTER `gioitinhAPI`";
	$qrsql = mysqli_query($con,$sql);
	$sql = "ALTER TABLE `hosotd` ADD `maxaAPI` VARCHAR(255) NOT NULL AFTER `loaiquatet`, ADD `mahuyenAPI` VARCHAR(255) NOT NULL AFTER `maxaAPI`, ADD `gioitinhAPI` DOUBLE NOT NULL AFTER `mahuyenAPI`";
	$qrsql = mysqli_query($con,$sql);
}
if(isset($_POST['cc'])){

	$sql = "ALTER TABLE `thannhancc` ADD `maxaAPI` VARCHAR(255) NOT NULL AFTER `tenncc`, ADD `mahuyenAPI` VARCHAR(255) NOT NULL AFTER `maxaAPI`, ADD `gioitinhAPI` DOUBLE NOT NULL AFTER `mahuyenAPI`, ADD `maquanhe` DOUBLE NOT NULL AFTER `gioitinhAPI`";
	$qrsql = mysqli_query($con,$sql);
	$sql = "ALTER TABLE `hosocc` ADD `maxaAPI` VARCHAR(255) NOT NULL AFTER `loaiquatet`, ADD `mahuyenAPI` VARCHAR(255) NOT NULL AFTER `maxaAPI`, ADD `gioitinhAPI` DOUBLE NOT NULL AFTER `mahuyenAPI`";
	$qrsql = mysqli_query($con,$sql);
}
if(isset($_POST['ls'])){

	$sql = "ALTER TABLE `thannhanls` ADD `maxaAPI` VARCHAR(255) NOT NULL AFTER `qua27`, ADD `mahuyenAPI` VARCHAR(255) NOT NULL AFTER `maxaAPI`, ADD `gioitinhAPI` DOUBLE NOT NULL AFTER `mahuyenAPI`, ADD `maquanhe` DOUBLE NOT NULL AFTER `gioitinhAPI`";
	$qrsql = mysqli_query($con,$sql);
	$sql = "ALTER TABLE `hosols` ADD `maxaAPI` VARCHAR(255) NOT NULL AFTER `filedk`, ADD `mahuyenAPI` VARCHAR(255) NOT NULL AFTER `maxaAPI`, ADD `gioitinhAPI` DOUBLE NOT NULL AFTER `mahuyenAPI`";
	$qrsql = mysqli_query($con,$sql);
}
?>

<form method="post">
	<div class="col-sm-12">
		<label class="col-sm-12">Bảng</label>
		<button name="bm" id="bm">BM</button>
		<button name="tb" id="tb">TB</button>
		<button name="bb" id="bb">BB</button>
		<button name="hh" id="hh">HH</button>
		<button name="kc" id="kc">KC</button>
		<button name="tkn" id="tkn">TKN</button>
		<button name="cm" id="cm">CM</button>
		<button name="ah" id="ah">AH</button>
		<button name="td" id="td">TD</button>
		<button name="cc" id="cc">CC</button>
		<button name="ls" id="ls">LS</button>
	</div>
	<div class="col-sm-12"><label class="col-sm-12">Dữ liệu</label>
		<button name="bame" id="bame">BM</button>
		<button name="dltb" id="dltb">TB</button>
		<button name="dlbb" id="dlbb">BB</button>
		<button name="dlhh" id="dlhh">HH</button>
		<button name="dlkc" id="dlkc">KC</button>
		<button name="dltkn" id="dltkn">TKN</button>
		<button name="dlcm" id="dlcm">CM</button>
		<button name="dlah" id="dlah">AH</button>
		<button name="dltd" id="dltd">TD</button>
		<button name="dlcc" id="dlcc">CC</button>
		<button name="dlls" id="dlls">LS</button>

	</div>
</form>
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>