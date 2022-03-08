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

function showAjaxModaldc()
{		
	jQuery('#modal-8').modal('show', {backdrop: 'static'});
}	
function showAjaxModalcds()
{		
	jQuery('#modal-9').modal('show', {backdrop: 'static'});
}
function showAjaxModalcdsx()
{
	jQuery('#modal-10').modal('show', {backdrop: 'static'});
}
</script>
<script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() 
			{  
			   $('table tbody tr').dblclick(function() 
			   {
				   if ($(this).find('td:last').text() == "ncc" ) {
					   jQuery('#modal-7').modal('show', {backdrop: 'static'});
					   $("#hotencs").val($(this).find('td:nth-child(2)').text());
					   $("#ngaysinhcs").val($(this).find('td:nth-child(7)').text());
					   $("#gioitinhcs").val($(this).find('td:nth-child(8)').text());
					   $("#truquancs").val($(this).find('td:nth-child(9)').text());
					   $("#doituongcs").val($(this).find('td:nth-child(3)').text());
					   $("#namddltcs").val($(this).find('td:nth-child(4)').text());
					   $("#hinhthuclkcs").val($(this).find('td:nth-child(5)').text());
					   $("#loaiddcs").val($(this).find('td:nth-child(12)').text());
					   $("#tinhtrangskcs").val($(this).find('td:nth-child(6)').text());
					   $("#iddieuduongcs").val($(this).find('td:nth-child(18)').text());
					   $("#phanloaiddcs").val($(this).find('td:nth-child(11)').text());
				   }
			   }); 
			}
		    		  
		);
$(document).ready(function() {
  $('#trang').change(function() {
		//alert(this.value);
		//$('#hsls').load('ajax_lietsy.php?id='+this.value);		
		//$('#thannhan').load('ajax_thannhan.php');
		//$('#giayto').load('ajax_giayto.php');	
		window.location.href="dkdieuduonghuyen.php?id="+this.value+">0";
  });
 });
</script>
<script type="text/javascript">
	$(document).ready(function() {
	  $('#hhhh').click(function() {
	   giatri = kiemtrahschon();   
	   $("#sobg").val(giatri);	   
	  });
	 });	
	function kiemtrahschon() {

        var sohoso = '';
        $.each($('table tbody tr'), function(){
            sohoso += $(this).find('td:nth-child(18)').text() + "<" + $(this).find('td:nth-child(6)').text() + "<" + $(this).find('td:nth-child(11)').text() + '>';
        });
        return sohoso;
    }
	$(document).ready(function(){
    $(":input").inputmask();
});
</script>
<script type="text/javascript">
	$(document).ready(function() {
	  $('#hhhh1').click(function() {
	   giatri = kiemtrahschon1();   
	   $("#sobg1").val(giatri);	   
	  });
	 });	
	function kiemtrahschon1() {

        var sohoso = '';

        $.each($("input[name='KT']:checked"), function(){
            sohoso += ($(this).attr('id')) + '>';
        });
        return sohoso;
    }
	$(document).ready(function() {
		$('#hhhh2').click(function() {
			giatri = kiemtrahschon2();
			$("#sobg2").val(giatri);
		});
	});
	function kiemtrahschon2() {

		var sohoso = '';

		$.each($("input[name='KT']:checked"), function(){
			sohoso += ($(this).attr('id')) + '>';
		});
		return sohoso;
	}
	function showAjaxModal1() {
		giatri ="1>0>"+ $('#tenxatao').val();
		window.location.assign('dkdieuduonghuyen.php?id=' + giatri);
	}
</script>
<?php
function doingay1($ngay)
{		
	$kq = substr($ngay,6,4) ."-". substr($ngay,3,2) . "-". substr($ngay,0,2);
	return $kq;
}
function hinhthuc($ht)		
{
	if ($ht == "1")
		return "Tập trung";
	else
		return "Tại nhà";
}
if(isset($_POST["capnhatts"]))
{	
	$sqlup = "Update dieuduong Set tinhtrangsk='".$_POST['tinhtrangskcs']."', phanloaidd='".$_POST['phanloaiddcs']."'";
	$sqlup = $sqlup." where iddieuduong = ".$_POST['iddieuduongcs'];
	$kq=mysqli_query($con,$sqlup);
}
if(isset($_POST["capnhat"]))
{
	//echo $_POST['sobg'];
	$key=explode('>',$_POST['sobg']);
	$chars=str_split($_POST["sobg"]);
	$count=0;
	foreach($chars as &$char)
	{
		if($char=='>')
		{
			$count++;
		}
	}
	$i=0;$sqlup="";
	for($i=0;$i<$count;$i++)
	{
		if ($key[$i] != "")
		{
			$kytu=explode('<',$key[$i]);	
			$sqlup = "Update dieuduong Set tinhtrangsk='".$kytu[1]."', phanloaidd='".hinhthuc($kytu[2])."' where iddieuduong = ".$kytu[0];
			//echo $sqlup;
			$kq=mysqli_query($con,$sqlup);
		}
	}
}
/*
if (isset($_POST["taobhyt"])) {
	$namdd = $_POST['namdd'];
	$nam1 = $namdd - 1;
	$nam2 = $namdd - 2;
	//thương binh
	if (isset($_POST['tb'])) {
		$sql = "Insert into dieuduong(hoten,ngaysinh,gioitinh,truquan,doituong,namddlt,hinhthuclk,loaidd,tinhtrangsk,idhs,namdd,chuyen,xa,huyen,phanloaidd)";
		$sql = $sql . " Select hoten,ngaysinh,gioitinh,truquan,'Thương binh' as loai,namddcc,hinhthucddlt,loaidd,'Bình thường' as sk,idhstb,'" . $_POST['namdd'] . "' as n, 'Chuyển 1' as c, '" . str_replace('_', ' ', $_POST['tenxatao']) . "' as xa, '" . $madv[0] . "' as huyen,hinhthucddlt";
		$sql = $sql . " from hosotb Where dieuduong='Có' and xa='" . str_replace('_', ' ', $_POST['tenxatao']) . "' and huyen='" . $madv[0] . "'";
		$sql = $sql . " and ((loaidd = 'Hai năm một lần' and namddcc = $nam2) or (loaidd = 'Một năm một lần' and namddcc = $nam1))";
		$sql = $sql . " and idhstb not in (Select idhs from dieuduong where namdd = $namdd and doituong = 'Thương binh')";
		$kq = mysqli_query($con, $sql);
	}
	//bệnh binh
	if (isset($_POST['bb'])) {
		$sql = "Insert into dieuduong(hoten,ngaysinh,gioitinh,truquan,doituong,namddlt,hinhthuclk,loaidd,tinhtrangsk,idhs,namdd,chuyen,xa,huyen,phanloaidd)";
		$sql = $sql . " Select hoten,ngaysinh,gioitinh,truquan,'Bệnh binh' as loai,namddcc,hinhthucddlt,loaidd,'Bình thường' as sk,idhsbb,'" . $_POST['namdd'] . "' as n, 'Chuyển 1' as c, '" . str_replace('_', ' ', $_POST['tenxatao']) . "' as xa, '" . $madv[0] . "' as huyen,hinhthucddlt";
		$sql = $sql . " from hosobb Where dieuduong='Có' and xa='" . str_replace('_', ' ', $_POST['tenxatao']) . "' and huyen='" . $madv[0] . "'";
		$sql = $sql . " and ((loaidd = 'Hai năm một lần' and namddcc = $nam2) or (loaidd = 'Một năm một lần' and namddcc = $nam1))";
		$sql = $sql . " and idhsbb not in (Select idhs from dieuduong where namdd = $namdd and doituong = 'Bệnh binh')";
		$kq = mysqli_query($con, $sql);
	}
	//anh hùng
	if (isset($_POST['ah'])) {
		$sql = "Insert into dieuduong(hoten,ngaysinh,gioitinh,truquan,doituong,namddlt,hinhthuclk,loaidd,tinhtrangsk,idhs,namdd,chuyen,xa,huyen,phanloaidd)";
		$sql = $sql . " Select hoten,ngaysinh,gioitinh,truquan,'Anh hùng' as loai,namddlc,hinhthucddlt,loaidd,'Bình thường' as sk,idhsah,'" . $_POST['namdd'] . "' as n, 'Chuyển 1' as c, '" . str_replace('_', ' ', $_POST['tenxatao']) . "' as xa, '" . $madv[0] . "' as huyen,hinhthucddlt";
		$sql = $sql . " from hosoah Where dieuduong='Có' and xa='" . str_replace('_', ' ', $_POST['tenxatao']) . "' and huyen='" . $madv[0] . "'";
		$sql = $sql . " and ((loaidd = 'Hai năm một lần' and namddlc = $nam2) or (loaidd = 'Một năm một lần' and namddlc = $nam1))";
		$sql = $sql . " and idhsah not in (Select idhs from dieuduong where namdd = $namdd and doituong = 'Anh hùng')";
		$kq = mysqli_query($con, $sql);
	}
	//Bà mẹ
	if (isset($_POST['bm'])) {
		$sql = "Insert into dieuduong(hoten,ngaysinh,gioitinh,truquan,doituong,namddlt,hinhthuclk,loaidd,tinhtrangsk,idhs,namdd,chuyen,xa,huyen,phanloaidd)";
		$sql = $sql . " Select hoten,ngaysinh,'Nữ' as gioitinh,truquan,'Bà mẹ Việt Nam anh hùng' as loai,namddlc,hinhthucddlt,loaidd,'Bình thường' as sk,idhsbm,'" . $_POST['namdd'] . "' as n, 'Chuyển 1' as c, '" . str_replace('_', ' ', $_POST['tenxatao']) . "' as xa, '" . $madv[0] . "' as huyen,hinhthucddlt";
		$sql = $sql . " from hosobm Where dieuduong='Có' and xa='" . str_replace('_', ' ', $_POST['tenxatao']) . "' and huyen='" . $madv[0] . "'";
		$sql = $sql . " and ((loaidd = 'Hai năm một lần' and namddlc = $nam2) or (loaidd = 'Một năm một lần' and namddlc = $nam1))";
		$sql = $sql . " and idhsbm not in (Select idhs from dieuduong where namdd = $namdd and doituong = 'Bà mẹ Việt Nam anh hùng')";
		$kq = mysqli_query($con, $sql);
	}
	//Trước ngày 01/01/1945
	if (isset($_POST['lt'])) {
		$sql = "Insert into dieuduong(hoten,ngaysinh,gioitinh,truquan,doituong,namddlt,hinhthuclk,loaidd,tinhtrangsk,idhs,namdd,chuyen,xa,huyen,phanloaidd)";
		$sql = $sql . " Select hoten,ngaysinh,gioitinh,truquan,'Người hoạt động trước 01/01/1945' as loai,namddcc,hinhthucddlt,loaidd,'Bình thường' as sk,idhslt,'" . $_POST['namdd'] . "' as n, 'Chuyển 1' as c, '" . str_replace('_', ' ', $_POST['tenxatao']) . "' as xa, '" . $madv[0] . "' as huyen,hinhthucddlt";
		$sql = $sql . " from hosolt Where dieuduong='Có' and xa='" . str_replace('_', ' ', $_POST['tenxatao']) . "' and huyen='" . $madv[0] . "'";
		$sql = $sql . " and ((loaidd = 'Hai năm một lần' and namddcc = $nam2) or (loaidd = 'Một năm một lần' and namddcc = $nam1))";
		$sql = $sql . " and idhslt not in (Select idhs from dieuduong where namdd = $namdd and doituong = 'Người hoạt động trước 01/01/1945')";
		$kq = mysqli_query($con, $sql);
	}
	//Tiền khởi nghĩa
	if (isset($_POST['tkn'])) {
		$sql = "Insert into dieuduong(hoten,ngaysinh,gioitinh,truquan,doituong,namddlt,hinhthuclk,loaidd,tinhtrangsk,idhs,namdd,chuyen,xa,huyen,phanloaidd)";
		$sql = $sql . " Select hoten,ngaysinh,gioitinh,truquan,'Tiền khởi nghĩa' as loai,namddcc,hinhthucddlt,loaidd,'Bình thường' as sk,idhstkn,'" . $_POST['namdd'] . "' as n, 'Chuyển 1' as c, '" . str_replace('_', ' ', $_POST['tenxatao']) . "' as xa, '" . $madv[0] . "' as huyen,hinhthucddlt";
		$sql = $sql . " from hosotkn Where dieuduong='Có' and xa='" . str_replace('_', ' ', $_POST['tenxatao']) . "' and huyen='" . $madv[0] . "'";
		$sql = $sql . " and ((loaidd = 'Hai năm một lần' and namddcc = $nam2) or (loaidd = 'Một năm một lần' and namddcc = $nam1))";
		$sql = $sql . " and idhstkn not in (Select idhs from dieuduong where namdd = $namdd and doituong = 'Tiền khởi nghĩa')";
		$kq = mysqli_query($con, $sql);
	}
	//Người nhiễm chất độc hóa học
	if (isset($_POST['hh'])) {
		$sql = "Insert into dieuduong(hoten,ngaysinh,gioitinh,truquan,doituong,namddlt,hinhthuclk,loaidd,tinhtrangsk,idhs,namdd,chuyen,xa,huyen,phanloaidd)";
		$sql = $sql . " Select hoten,ngaysinh,gioitinh,truquan,'Người nhiễm chất độc hóa học' as loai,namddlc,hinhthucddlt,loaidd,'Bình thường' as sk,idhshh,'" . $_POST['namdd'] . "' as n, 'Chuyển 1' as c, '" . str_replace('_', ' ', $_POST['tenxatao']) . "' as xa, '" . $madv[0] . "' as huyen,hinhthucddlt";
		$sql = $sql . " from hosohh Where dieuduong='Có' and xa='" . str_replace('_', ' ', $_POST['tenxatao']) . "' and huyen='" . $madv[0] . "'";
		$sql = $sql . " and ((loaidd = 'Hai năm một lần' and namddlc = $nam2) or (loaidd = 'Một năm một lần' and namddlc = $nam1))";
		$sql = $sql . " and idhshh not in (Select idhs from dieuduong where namdd = $namdd and doituong = 'Người nhiễm chất độc hóa học')";
		$kq = mysqli_query($con, $sql);
	}
	//Bị bắt tù đày
	if (isset($_POST['kctd'])) {
		$sql = "Insert into dieuduong(hoten,ngaysinh,gioitinh,truquan,doituong,namddlt,hinhthuclk,loaidd,tinhtrangsk,idhs,namdd,chuyen,xa,huyen,phanloaidd)";
		$sql = $sql . " Select hoten,ngaysinh,gioitinh,truquan,'Tù đày' as loai,namddlc,hinhthucddlt,loaidd,'Bình thường' as sk,idhstd,'" . $_POST['namdd'] . "' as n, 'Chuyển 1' as c, '" . $madv[0] . "' as xa, '" . str_replace('_', ' ', $_POST['tenxatao']) . "' as huyen,hinhthucddlt";
		$sql = $sql . " from hosotd Where dieuduong='Có' and xa='" . str_replace('_', ' ', $_POST['tenxatao']) . "' and huyen='" . $madv[0] . "'";
		$sql = $sql . " and ((loaidd = 'Hai năm một lần' and namddlc = $nam2) or (loaidd = 'Một năm một lần' and namddlc = $nam1))";
		$sql = $sql . " and idhstd not in (Select idhs from dieuduong where namdd = $namdd and doituong = 'Tù đày'')";
		$kq = mysqli_query($con, $sql);
	}
	//thân nhân liệt sỹ
	if (isset($_POST['tnls'])) {
		$sql = "Insert into dieuduong(hoten,ngaysinh,gioitinh,truquan,doituong,namddlt,hinhthuclk,loaidd,tinhtrangsk,idhs,namdd,chuyen,xa,huyen,phanloaidd)";
		$sql = $sql . " Select hoten,ngaysinh,gioitinh,truquan,'Thân nhân liệt sỹ' as loai,namddlc,hinhthucddlt,loaidieuduong,'Bình thường' as sk,idthannhan,'" . $_POST['namdd'] . "' as n, 'Chuyển 1' as c, '" . str_replace('_', ' ', $_POST['tenxatao']) . "' as xa, '" . $madv[0] . "' as huyen,hinhthucddlt";
		$sql = $sql . " from inner join hosols on thannhanls.idhsls=hosols.idhsls Where thannhanls.dieuduong='Có' and hosols.xa='" . str_replace('_', ' ', $_POST['tenxatao']) . "' and hosols.huyen='" . $madv[0] . "'";
		$sql = $sql . " and ((loaidd = 'Hai năm một lần' and namddlc = $nam2) or (loaidd = 'Một năm một lần' and namddlc = $nam1))";
		$sql = $sql . " and idthannhan not in (Select idhs from dieuduong where namdd = $namdd and doituong = 'Thân nhân liệt sỹ')";
		$kq = mysqli_query($con, $sql);
	}
	//Người có công cách mạng
	if (isset($_POST['cc'])) {
		$sql = "Insert into dieuduong(hoten,ngaysinh,gioitinh,truquan,doituong,namddlt,hinhthuclk,loaidd,tinhtrangsk,idhs,namdd,chuyen,xa,huyen,phanloaidd)";
		$sql = $sql . " Select hoten,ngaysinh,gioitinh,truquan,'Người có công giúp đỡ cách mạng' as loai,namddlc,hinhthucddlt,loaidd,'Bình thường' as sk,idhscc,'" . $_POST['namdd'] . "' as n, 'Chuyển 1' as c, '" . str_replace('_', ' ', $_POST['tenxatao']) . "' as xa, '" . $madv[0] . "' as huyen,hinhthucddlt";
		$sql = $sql . " from hosocc Where dieuduong='Có' and xa='" . str_replace('_', ' ', $_POST['tenxatao']) . "' and huyen='" . $madv[0] . "'";
		$sql = $sql . " and ((loaidd = 'Hai năm một lần' and namddlc = $nam2) or (loaidd = 'Một năm một lần' and namddlc = $nam1))";
		$sql = $sql . " and idhscc not in (Select idhs from dieuduong where namdd = $namdd and doituong = 'Người có công giúp đỡ cách mạng')";
		$kq = mysqli_query($con, $sql);
	}
}
 *
 */
if (isset($_POST['chuyen']))
{	
	$key=explode('>',$_POST['sobg1']);
	$chars=str_split($_POST["sobg1"]);
	$count=0;
	foreach($chars as $char){
		if($char == '>'){
			$count++;
		}
	}
	$i=0;
	//echo $count;
	for($i=0;$i<$count;$i++) {
		//echo $madv[0];
		$sql = "";
		if ($_POST['ngayhuyenchuyen'] != "") {
			$sql = "Update dieuduong Set tinhtra = '0', chuyenhuyen = 'Chuyển tỉnh', chuyen='Chuyển 2',ngayhuyen='" . doingay1($_POST['ngayhuyenchuyen']) . "'";
			if ($_POST['dotddchuyen'] != "")
				$sql = $sql . ",dotdd='" . $_POST['dotddchuyen'] . "'";
			$sql = $sql . " Where iddieuduong=" . $key[$i];
		} else {
			$sql = "Update dieuduong Set tinhtra = '0', chuyenhuyen = 'Chuyển tỉnh', chuyen='Chuyển 2'";
			if ($_POST['dotddchuyen'] != "")
				$sql = $sql . ",dotdd='" . $_POST['dotddchuyen'] . "'";
			$sql = $sql . " Where iddieuduong=" . $key[$i];
		}
		//echo $sql;
		$kq = mysqli_query($con, $sql);
	}
}
if (isset($_POST['chuyenxa'])) {
	$key = explode('>', $_POST['sobg2']);
	$chars = str_split($_POST["sobg2"]);
	$count = 0;
	foreach ($chars as $char) {
		if ($char == '>') {
			$count++;
		}
	}
	$i = 0;
	//echo $count;
	for ($i = 0; $i < $count; $i++) {
		//echo $madv[0];
		$sql = "";
			$sql = "Update dieuduong Set chuyenhuyen = 'Chưa', chuyen=''";
				$sql = $sql . ",dotdd='' ,lydochuyenxa = '" . $_POST['lydochuyen'] . "', huyentra = '1'";
			$sql = $sql . " Where iddieuduong=" . $key[$i];
		//echo $sql;
		$kq = mysqli_query($con, $sql);
	}
}
?>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Danh sách hồ sơ điều dưỡng trả lại</h4>
		</div>
			<div class="modal-body">

				<div class="panel panel-dark">
					<div class="panel-body">
						<label for="field-3" class="col-sm-1 control-label">Tên xã:</label>
						<div class="col-sm-6">
							<select name="tenxatao" id="tenxatao" class="form-control">
								<option value="" selected = "selected"></option>
								<?php
								$sqltcml = "Select tenxa From xa INNER JOIN huyen on xa.mahuyen = huyen.mahuyen WHERE tenhuyen = '$madv[0]'";
								$qrtcml = mysqli_query($con,$sqltcml);
								while($rtcml=@mysqli_fetch_array($qrtcml))
								{
									echo "<option value=".str_replace(' ','_',$rtcml['tenxa']).">".$rtcml['tenxa']."</option>";
								}
								?>
							</select>
						</div>
						<a  onclick="showAjaxModal1();" class='btn btn-success' >
							Tìm kiếm
						</a>
					</div>
				</div>


<form role='form' method='POST' class='form-horizontal form-groups-bordered'>
		<!--input type="submit" name="capnhat" class="btn btn-info" value = "Cập nhật" style = "float:right; background-color:rgb(83, 181, 166)" id = "hhhh"-->
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModalcds();" class='btn btn-success'>
			<i class='entypo-print'></i>Chuyển danh sách
		</a>
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModalcdsx();" class='btn btn-success'>
			<i class='entypo-print'></i>Chuyển DS về xã
		</a>
		<input name="sobg" type="text" class="form-control" style = "Display:none;" id="sobg">
		<label class='col-sm-2'>Trang số:</label>
<?php
$ahs = explode('>',$_GET['id']);
$j = $ahs[0];
		echo "<div  class='col-sm-2' style='margin-top:-7px'>";
			echo "<select style='margin-left:-90px;' name='trang' class='form-control' id='trang'>";
	$ls =  array(array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18"));
	$cs=0;
	$sql="select * from dieuduong where (chuyen='Chuyển 1' or chuyenhuyen = 'Đã chuyển') and huyen='".$madv[0]."' and xa like '%" . str_replace('_', ' ', $ahs[2]) . "%' and tinhtra = 1";
	$sql1=mysqli_query($con,$sql);
	$kq = 0;$kq1 = 1;
echo $j;
	if ($j == 1)
		echo "<option selected='selected' value='$kq1'>$kq1</option>";
	else
		echo "<option value='$kq1'>$kq1</option>";
	while($row=mysqli_fetch_array($sql1)) {
		$ls[$cs][0] = $row['hoten'];
		$ls[$cs][1] = $row['ngaysinh'];
		$ls[$cs][2] = $row['gioitinh'];
		$ls[$cs][3] = $row['truquan'];
		$ls[$cs][4] = $row['namdd'];
		$ls[$cs][5] = $row['namddlt'];
		$ls[$cs][6] = $row['tinhtrangsk'];
		$ls[$cs][7] = $row['phanloaidd'];
		$ls[$cs][8] = $row['loaidd'];
		$ls[$cs][9] = $row['sotien'];
		$ls[$cs][10] = $row['xa'];
		$ls[$cs][11] = $row['huyen'];
		$ls[$cs][12] = $row['idhs'];
		$ls[$cs][13] = $row['doituong'];
		$ls[$cs][14] = $row['hinhthuclk'];
		$ls[$cs][15] = $row['chuyen'];
		$ls[$cs][16] = $row['iddieuduong'];
		$ls[$cs][17] = $row['lydokhongduyet'];
		$cs = $cs + 1;
		$kq = $kq + 1;
		if ($kq == 15) {
			$kq = 0;
			$kq1 = $kq1 + 1;
			if ($j == $kq1)
				echo "<option selected='selected' value='$kq1'>$kq1</option>";
			else
				echo "<option value='$kq1'>$kq1</option>";
		}
	}
	//if ($j == 0)
		//echo "<option selected='selected' value='$kq1'>$kq1</option>";		
			echo "</select>";
		echo "</div>";
?>




	<div id = "hsls" class="table-responsive">
		<table class="table table-hover table-striped table-bordered table-advanced tablesorter display" id="table-2">
			<thead>
			<tr>
				<th style="background-color:rgb(54, 169, 224)" width="5%"><strong style='color:rgb(255, 255, 225)'><p>Chọn</p></strong></th>
				<th style="background-color:rgb(54, 169, 224)" width="15%"><strong style='color:rgb(255, 255, 225)'><p>Họ tên</p></strong></th>
				<th style="background-color:rgb(54, 169, 224)" width="48%"><strong style='color:rgb(255, 255, 225)'><p>Đối tượng</p></strong></th>
				<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Năm đd<br>liền kế</strong></th>
				<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Hình thức<br>đd liền kề</strong></th>
				<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'><p>Sức khỏe</p></strong></th>
				<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ngaysinh</strong></th>
				<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>gioitinh</strong></th>
				<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>truquan</strong></th>
				<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>namdd</strong></th>
				<th style="background-color:rgb(54, 169, 224)" width="30%"><strong style='color:rgb(255, 255, 225)'><p>Hình thức</p></strong></th>
				<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>loaidd</strong></th>
				<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>sotien</strong></th>
				<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'><p>Đơn vị</p></strong></th>
				<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>huyen</strong></th>
				<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>idhs</strong></th>
				<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>chuyen</strong></th>
				<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>iddieuduong</strong></th>
				<th style="background-color:rgb(54, 169, 224); " width="30%"><strong style='color:rgb(255, 255, 225)'><p>Lý do không duyệt</p></strong></th>
				<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ncc</strong></th>
			</tr>
			</thead>
			<tbody id="rowlist" class="rowlist">
			<?php
			for($i=($j - 1)*15;$i<15*$j;$i++)
			{
				//$a = $i + 1;
				if ($i < $cs)
				{
					echo "<tr>";
					//echo "<td><input type = 'Checkbox' name = 'KT' id = '".$ls[$i][16]."'></td>";
					echo "<td><input type = 'Checkbox' name = 'KT' id = '".$ls[$i][16]."' checked = 'checked'></td>";
					echo "<td style='text-align: left;'>".$ls[$i][0]."</td>";
					echo "<td>".$ls[$i][13]."</td>";
					echo "<td>".$ls[$i][5]."</td>";
					echo "<td>".$ls[$i][14]."</td>";
					echo "<td contenteditable=true>".$ls[$i][6]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][1]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][2]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][3]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][4]."</td>";
					echo "<td contenteditable=true>".$ls[$i][7]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][8]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][9]."</td>";
					echo "<td style='text-align: left'>".$ls[$i][10]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][11]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][12]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][15]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][16]."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][17]."</td>";
					echo "<td style='text-align: left; display:none'>ncc</td>";
					echo "</tr>";
				}
			}
			?>
			</tbody>
		</table>
</form>
<div class="modal fade" id="modal-7">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">				
					<form name="thoaics" role='form' method='POST' enctype="multipart/form-data" class='form-horizontal form-groups-bordered'>
						<div id = "sTTKK" class="form-group">
							<label for="field-3" class="col-sm-3 control-label">Họ tên đối tượng:</label>
							<div class="col-sm-9">
								<input name="hotencs" type="text" class="form-control" id="hotencs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Ngày sinh:</label>
							<div class="col-sm-3">
								<input name="ngaysinhcs" type="text" class="form-control" id="ngaysinhcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Giới tính:</label>
							<div class="col-sm-3">								
								<select name="gioitinhcs" id="gioitinhcs" class="form-control">
									<option value="Nam">Nam</option>
									<option value="Nữ">Nữ</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-3 control-label">Trú quán:</label>
							<div class="col-sm-9">
								<input name="truquancs" type="text" class="form-control" id="truquancs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Đối tượng được điều dưỡng:</label>
							<div class="col-sm-9">								
								<input name="doituongcs" type="text" class="form-control" id="doituongcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Năm điều dưỡng liền kề:</label>
							<div class="col-sm-9">
								<input name="namddltcs" type="text" class="form-control" id="namddltcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Hình thức điều dưỡng liền kề:</label>
							<div class="col-sm-9">
								<input name="hinhthuclkcs" type="text" class="form-control" id="hinhthuclkcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Loại điều dưỡng:</label>
							<div class="col-sm-9">
								<input name="loaiddcs" type="text" class="form-control" id="loaiddcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Tình trạng sức khỏe:</label>
							<div class="col-sm-9">
								<input name="tinhtrangskcs" type="text" class="form-control" id="tinhtrangskcs">
							</div>	
							<label for="field-3" class="col-sm-3 control-label">Hình thức:</label>
							<div class="col-sm-9">								
								<select name="phanloaiddcs" id="phanloaiddcs" class="form-control">
									<option value="Tập trung">Tập trung</option>
									<option value="Tại nhà">Tại nhà</option>
								</select>
							</div>
							<div class="col-sm-10">
								<input name="iddieuduongcs" type="text" class="form-control" style="display:none" id="iddieuduongcs">
							</div>
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
							<input type="submit" name="capnhatts" class="btn btn-blue" value = "Cập nhật">							
					</form>						
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-8">
	<div class="modal-dialog">
		<div class="modal-content">				
			<div class="modal-body">				
					<form name="thoaitao" role='form' method='POST' class='form-horizontal form-groups-bordered'>
						<div id = "sTTKK1" class="form-group">							
							<label for="field-3" class="col-sm-3 control-label">Năm điều dưỡng:</label>
							<div class="col-sm-9">
								<input name="namdd" type="text" class="form-control" id="namdd">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Tên xã:</label>
							<div class="col-sm-9">								
								<select name="tenxatao" id="tenxatao" class="form-control">
									<?php
									$sqltcml = "Select tenxa From xa inner join huyen on xa.tthuyen=huyen.tthuyen where tenhuyen='".$madv[0]."'";
									$qrtcml = mysqli_query($con,$sqltcml);
									while($rtcml=@mysqli_fetch_array($qrtcml))
									{
										echo "<option value=".str_replace(' ','_',$rtcml['tenxa']).">".$rtcml['tenxa']."</option>";
									}
									?>
									<option value="" selected = "selected"></option>
								</select>
							</div>
							<div style="display: none">
							<label for="field-3" class="col-sm-12 control-label" style='text-align: left;'>Loại đối tượng được tạo điều dưỡng:</label>
							<div class="col-sm-12">
							<input type="checkbox" name="ah" checked = "checked" value="Yes" />
							Anh hung lực lượng vũ trang, anh hung lao động trong thời kỳ kháng chiến
							</div>
							<div class="col-sm-12">
							<input type="checkbox" name="lt" checked = "checked" value="Yes" />
							Người hoạt động cách mạng trước 01 tháng 01 năm 1945
							</div>
							<div class="col-sm-12">
							<input type="checkbox" name="tkn" checked = "checked" value="Yes" />
							Người hoạt động cách mạng từ ngày 01 tháng 01 năm 1945 đến ngày khởi nghĩa tháng tám năm 1945
							</div>
							<div class="col-sm-12">
							<input type="checkbox" name="bm" checked = "checked" value="Yes" />
							Bà mẹ Việt Nam anh hùng
							</div>
							<div class="col-sm-12">
							<input type="checkbox" name="tb" checked = "checked" value="Yes" />
							Thương binh và người hưởng chính sách như thương binh
							</div>
							<div class="col-sm-12">
							<input type="checkbox" name="bb" checked = "checked" value="Yes" />
							Bệnh binh
							</div>
							<div class="col-sm-12">
							<input type="checkbox" name="hh" checked = "checked" value="Yes" />
							Người hoạt động kháng chiến nhiễm chất độc hóa học
							</div>
							<div class="col-sm-12">
							<input type="checkbox" name="tnls" checked = "checked" value="Yes" />
							Thân nhân Liệt sỹ
							</div>
							<div class="col-sm-12">
							<input type="checkbox" name="kctd" checked = "checked" value="Yes" />
							Người hoạt động kháng chiến bị địch bắt, tù đày
							</div>
							<div class="col-sm-12">
							<input type="checkbox" name="cc" checked = "checked" value="Yes" />
							Người có công giúp đỡ cách mạng
							</div>
							<input name="trangm" type="text" class="form-control" style="display:none" id="trangm" value = "<?php
							if ($kq == 15)
							{
								$kq1 = $kq1 + 1;
								echo $kq1;
							}
							else
								echo $kq1; ?>
							">
							</div>
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
							<input type="submit" name="taobhyt" class="btn btn-blue" value = "Tạo danh sách">							
					</form>						
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-9">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">				
					<form name="thoaichuyen" role='form' method='POST' enctype="multipart/form-data" class='form-horizontal form-groups-bordered'>
						<div id = "sTTKK" class="form-group">
							<h4 style = "text-align:center; color:rgb(10, 10, 10)">CHUYỂN DANH SÁCH ĐĂNG KÝ ĐIỀU DƯỠNG LÊN CẤP TRÊN</h4>	
							<h4 style = "text-align:center; color:rgb(10, 10, 10)">(Lưu ý)</h4>
							<label for="field-3" class="col-sm-12 control-label" style = "text-align: left;">-   Danh sách chuyển lên sẽ không chỉnh sửa được</label>
							<label for="field-3" class="col-sm-12 control-label" style = "text-align: left;">-   Nếu muốn chỉnh sửa cần yêu cầu cán bộ cấp trên chuyển trả lại</label>
							<label for="field-3" class="col-sm-12 control-label" style = "text-align: left;">-   Nếu thiếu hồ sơ bhyt có thể lập thêm để chuyển lên</label>
							<input name="sobg1" type="text" class="form-control" style = "Display:none;" id="sobg1">
							<label for="field-3" class="col-sm-3 control-label">Đợt diều dưỡng:</label>
							<div class="col-sm-9">
								<input name="dotddchuyen" type="text" class="form-control" id="dotddchuyen">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Ngày huyện chuyển:</label>
							<div class="col-sm-9">
								<input name="ngayhuyenchuyen" type="text" class="form-control" data-mask="date" id="ngayhuyenchuyen">
							</div>
							<label for="field-3" class="col-sm-3 control-label">	</label>
							<input type="checkbox" name="thaythe"/>
							Danh sách thay thế
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
							<input type="submit" name="chuyen" class="btn btn-blue" value = "Cập nhật" id = "hhhh1">							
					</form>						
			</div>
		</div>
	</div>
</div>
				<div class="modal fade" id="modal-10">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-body">
								<form name="thoaichuyenxa" role='form' method='POST' enctype="multipart/form-data" class='form-horizontal form-groups-bordered'>
									<div id = "sTTKK" class="form-group">
										<h4 style = "text-align:center; color:rgb(10, 10, 10)">CHUYỂN DANH SÁCH HỒ SƠ VỀ XÃ</h4>
										<h4 style = "text-align:center; color:rgb(10, 10, 10)">(Lưu ý)</h4>
										<label for="field-3" class="col-sm-12 control-label" style = "text-align: left;">-   Danh sách chuyển về sẽ không tồn tại ở Huyện</label>
										<label for="field-3" class="col-sm-12 control-label" style = "text-align: left;">-   Nếu muốn chỉnh sửa cần yêu cầu cán bộ chuyển lên lại</label>
										<input name="sobg2" type="text" class="form-control" style = "Display:none;" id="sobg2">
										<label for="field-3" class="col-sm-3 control-label">Lý do chuyển hồ sơ:</label>
										<div class="col-sm-9">
											<input name="lydochuyen" type="text" class="form-control" id="lydochuyen">
										</div>
										</div>
									</div>
									<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
									<input type="submit" name="chuyenxa" class="btn btn-blue" value = "Cập nhật" id = "hhhh2">
								</form>
							</div>
						</div>
					</div>
				</div>
<script type="text/javascript">
    window.onsubmit = function() {
        //document.thoaics.action = get_action();
		document.thoaimoi.action = get_action1();
		document.thoaitao.action = get_action2();
		document.thoaitao.action = get_action3();
    }

    //function get_action() {				
	//		return "dkbhyt.php?id=" + $('#trang').val() + ">" + $('#idbhytcs').val();			
    //}
	function get_action1() {				
			return "dkdieuduonghuyen.php?id="+$('#trangm').val()+">0";			
    }
	function get_action2() {				
			return "dkdieuduonghuyen.php?id="+$('#trangm').val()+">2016";			
    }
	function get_action3() {				
			return "dkdieuduonghuyen.php?id="+$('#trangm').val()+">2016";			
    }
</script>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>