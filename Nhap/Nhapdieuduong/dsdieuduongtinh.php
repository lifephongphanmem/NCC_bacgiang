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
function showAjaxModalckd()
{		
	jQuery('#modal-2').modal('show', {backdrop: 'static'});
}
</script>
<script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() 
			{  
			   $('table tbody tr').dblclick(function() 
			   {
					jQuery('#modal-7').modal('show', {backdrop: 'static'});
				   	$("#id").val($(this).find('td:nth-child(1)').text());
					$("#hotencs").val($(this).find('td:nth-child(2)').text());
					$("#ngaysinhcs").val($(this).find('td:nth-child(7)').text());
					$("#gioitinhcs").val($(this).find('td:nth-child(8)').text());
				   	$("#nguyenquancs").val($(this).find('td:nth-child(9)').text());
					$("#truquancs").val($(this).find('td:nth-child(10)').text());
					$("#doituongcs").val($(this).find('td:nth-child(3)').text());
				   	$("#dieuduongcs").val($(this).find('td:nth-child(11)').text());
				   	$("#phanloaiddcs").val($(this).find('td:nth-child(12)').text());
				   	$("#namddcs").val($(this).find('td:nth-child(13)').text());
				   	$("#tylesgldcs").val($(this).find('td:nth-child(16)').text());
				   	$("#tylettcs").val($(this).find('td:nth-child(15)').text());
				   	$("#benhtatcs").val($(this).find('td:nth-child(14)').text());
			   });
			}
		    		  
		);
$(document).ready(function() {
  $('#trang').change(function() {
		//alert(this.value);
		//$('#hsls').load('ajax_lietsy.php?id='+this.value);		
		//$('#thannhan').load('ajax_thannhan.php');
		//$('#giayto').load('ajax_giayto.php');	
		window.location.href="dkdieuduongtinh.php?id="+this.value+">0";
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
	   giatri = kiemtrahschon();   
	   $("#sobg1").val(giatri);	   
	  });
	 });	
	function kiemtrahschon() {

        var sohoso = '';

        $.each($("input[name='KT']:checked"), function(){
            sohoso += ($(this).attr('id')) + '>';
        });
        return sohoso;
    }
	$(document).ready(function() {
	  $('#hhhh1x').click(function() {
	   giatri = kiemtrahschon();   
	   $("#sobg1x").val(giatri);	   
	  });
	 });
	function showAjaxModal1()
	{
		giatri = $('#tenhuyentao').val()+">"+$('#tenxatao').val()+">"+$('#phanloai').val()+">"+$('#tenhs').val()+">"+$('#loaidoituong').val();
		window.location.assign('dsdieuduongtinh.php?id='+giatri);
	}
</script>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Danh sách hồ sơ điều dưỡng</h4>
		</div>
			<div class="modal-body">
				<div class="panel panel-dark">
					<div class="panel-body">
						<label for="field-3" class="col-sm-2 control-label">Tên đối tượng:</label>
						<div class="col-sm-4">
							<input name="tenhs" type="text" class="form-control" id="tenhs">
						</div>
						<label for="field-3" class="col-sm-2 control-label">Tên Huyện:</label>
						<div class="col-sm-4">
							<select name="tenhuyentao" id="tenhuyentao" class="form-control">
								<?php
								$sqltcml = "Select tenhuyen From huyen";
								$qrtcml = mysqli_query($con,$sqltcml);
								while($rtcml=@mysqli_fetch_array($qrtcml))
								{
									echo "<option value=".str_replace(' ','_',$rtcml['tenhuyen']).">".$rtcml['tenhuyen']."</option>";
								}
								?>
								<option value="" selected = "selected"></option>
							</select>
						</div>
						<label for="field-3" class="col-sm-2 control-label">Tên xã:</label>
						<div class="col-sm-4">
							<select name="tenxatao" id="tenxatao" class="form-control">
								<option value="" selected = "selected"></option>
								<?php
								$sqltcml = "Select tenxa From xa";
								$qrtcml = mysqli_query($con,$sqltcml);
								while($rtcml=@mysqli_fetch_array($qrtcml))
								{
									echo "<option value=".str_replace(' ','_',$rtcml['tenxa']).">".$rtcml['tenxa']."</option>";
								}
								?>
							</select>
						</div>
						<label for="field-3" class="col-sm-2 control-label">Phân loại:</label>
						<div class="col-sm-4">
							<select name="phanloai" id="phanloai" class="form-control">
								<option value="" selected = "selected"></option>
								<option value="Một năm một lần" >Một năm một lần</option>
								<option value="Hai năm một lần" >Hai năm một lần</option>
							</select>
						</div>
						<label for="field-3" class="col-sm-2 control-label">Loại đối tượng:</label>
						<div class="col-sm-10">
							<select name="loaidoituong" id="loaidoituong" class="form-control">
								<option value="" selected = "selected"></option>
								<option value="ah" >Anh hung lực lượng vũ trang, anh hung lao động trong thời kỳ kháng chiến</option>
								<option value="lt" >Người hoạt động cách mạng trước 01 tháng 01 năm 1945</option>
								<option value="tkn" >Người hoạt động cách mạng từ ngày 01 tháng 01 năm 1945 đến ngày khởi nghĩa tháng tám năm 1945</option>
								<option value="bm" >Bà mẹ Việt Nam anh hùng</option>
								<option value="tb" >Thương binh và người hưởng chính sách như thương binh</option>
								<option value="bb" >Bệnh binh</option>
								<option value="h" >Người hoạt động kháng chiến nhiễm chất độc hóa học</option>
								<option value="tnls" >Thân nhân Liệt sỹ</option>
								<option value="kctd" >Người hoạt động kháng chiến bị địch bắt, tù đày</option>
								<option value="cc" >Người có công giúp đỡ cách mạng</option>
							</select>
						</div>
						<a  onclick="showAjaxModal1();" class='btn btn-success' style = "margin-top:15px;">
							Tìm kiếm
						</a>
					</div>
				</div>

<form role='form' method='POST' class='form-horizontal form-groups-bordered'>
<?php
$ngaythang = getdate();
$nam =  $ngaythang["year"];
$nam1 = $nam -1;
$nam2 = $nam -2;
$dieukien=$_GET['id'];
$ahs = explode('>',$_GET['id']);$dkkhac="";
$sql = "Delete From tbldc";
$qrsql = mysqli_query($con,$sql);
$j = $ahs[0];
$dd=0;
if($dieukien != "1>0") {
	$dd=0;
//Anh hùng
	if($ahs[4] == "" || $ahs[4] == "ah") {
		$sql = "Insert into tbldc (ID,STR1,STR2,STR3,STR4,STR5,STR6,STR7,STR8,STR9,STR10,STR11,STR12) " .
			"Select idhsah, hoten,'Anh hùng',loaidd,xa,huyen,ngaysinh,gioitinh,nguyenquan,truquan,dieuduong,loaidd,namddlc" .
			" From hosoah where dieuduong = 'Có' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and  hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai năm một lần' and namddlc = $nam2) or (loaidd = 'Một năm một lần' and namddlc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$sql = "Select hoten,'Anh hùng',loaidd,xa,huyen" .
			" From hosoah where dieuduong = 'Có' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and  hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai năm một lần' and namddlc = $nam2) or (loaidd = 'Một năm một lần' and namddlc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$dd += mysqli_num_rows($sql1);
	}
//Bệnh Binh
	if($ahs[4] == "" || $ahs[4] == "bb") {
		$sql = "Insert into tbldc (ID,STR1,STR2,STR3,STR4,STR5,STR6,STR7,STR8,STR9,STR10,STR11,STR12,STR13,STR14,STR15) " .
			"Select idhsbb, hoten,'Bệnh binh',loaidd,xa,huyen,ngaysinh,gioitinh,quequan,truquan,dieuduong,loaidd,namddcc,tinhtrangbenhtat,tyledathuongtat,klmsld" .
			" From hosobb where dieuduong = 'Có' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and  hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai năm một lần' and namddcc = $nam2) or (loaidd = 'Một năm một lần' and namddcc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$sql = "Select hoten,'Bệnh binh',loaidd,xa,huyen" .
			" From hosobb where dieuduong = 'Có' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai năm một lần' and namddcc = $nam2) or (loaidd = 'Một năm một lần' and namddcc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$dd += mysqli_num_rows($sql1);
	}
//Bà mẹ
	if($ahs[4] == "" || $ahs[4] == "bm") {
		$sql = "Insert into tbldc(ID,STR1,STR2,STR3,STR4,STR5,STR6,STR7,STR8,STR9,STR10,STR11,STR12) " .
			"Select idhsbm,hoten,'Bà mẹ Việt Nam anh hùng',loaidd,xa,huyen,ngaysinh,'Nữ' as gioitinh,nguyenquan,truquan,dieuduong,loaidd,namddlc" .
			" From hosobm where dieuduong = 'Có' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai năm một lần' and namddlc = $nam2) or (loaidd = 'Một năm một lần' and namddlc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$sql = "Select hoten,'Bà mẹ Việt Nam anh hùng',loaidd,xa,huyen" .
			" From hosobm where dieuduong = 'Có' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and  hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai năm một lần' and namddlc = $nam2) or (loaidd = 'Một năm một lần' and namddlc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$dd += mysqli_num_rows($sql1);
	}
//Có công
	if($ahs[4] == "" || $ahs[4] == "cc") {
		$sql = "Insert into tbldc(ID,STR1,STR2,STR3,STR4,STR5,STR6,STR7,STR8,STR9,STR10,STR11,STR12) " .
			"Select idhscc,hoten,'Người có công giúp đỡ cách mạng',loaidd,xa,huyen,ngaysinh,gioitinh,nguyenquan,truquan,dieuduong,loaidd,namddlc" .
			" From hosocc where dieuduong = 'Có' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and  hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai năm một lần' and namddlc = $nam2) or (loaidd = 'Một năm một lần' and namddlc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$sql = "Select hoten,'Người có công giúp đỡ cách mạng',loaidd,xa,huyen" .
			" From hosocc where dieuduong = 'Có' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai năm một lần' and namddlc = $nam2) or (loaidd = 'Một năm một lần' and namddlc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$dd += mysqli_num_rows($sql1);
	}
	//Hóa học
	if($ahs[4] == "" || $ahs[4] == "hh") {
		$sql = "Insert into tbldc(ID,STR1,STR2,STR3,STR4,STR5,STR6,STR7,STR8,STR9,STR10,STR11,STR12,STR13,STR15) " .
			"Select idhshh,hoten,'Người nhiễm chất độc hóa học',loaidd,xa,huyen,ngaysinh,gioitinh,nguyenquan,truquan,dieuduong,loaidd,namddlc,tinhtrangbenh,tlsgknld" .
			" From hosohh where dieuduong = 'Có' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and  hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai năm một lần' and namddlc = $nam2) or (loaidd = 'Một năm một lần' and namddlc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$sql = "Select hoten,'Người nhiễm chất độc hóa học',loaidd,xa,huyen" .
			" From hosohh where dieuduong = 'Có' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and  hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai năm một lần' and namddlc = $nam2) or (loaidd = 'Một năm một lần' and namddlc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$dd += mysqli_num_rows($sql1);
	}
	//Trước ngày 01/01/1945
	if($ahs[4] == "" || $ahs[4] == "lt") {
		$sql = "Insert into tbldc(ID,STR1,STR2,STR3,STR4,STR5,STR6,STR7,STR8,STR9,STR10,STR11,STR12) " .
			"Select idhslt, hoten,'Người hoạt động trước 01/01/1945',loaidd,xa,huyen,ngaysinh,gioitinh,nguyenquan,truquan,dieuduong,loaidd,namddcc" .
			" From hosolt where dieuduong = 'Có' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and  hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai năm một lần' and namddcc = $nam2) or (loaidd = 'Một năm một lần' and namddcc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$sql = "Select hoten,'Người hoạt động trước 01/01/1945',loaidd,xa,huyen" .
			" From hosolt where dieuduong = 'Có' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and  hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai năm một lần' and namddcc = $nam2) or (loaidd = 'Một năm một lần' and namddcc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$dd += mysqli_num_rows($sql1);
	}
	//Thương binh
	if($ahs[4] == "" || $ahs[4] == "tb") {
		$sql = "Insert into tbldc(ID,STR1,STR2,STR3,STR4,STR5,STR6,STR7,STR8,STR9,STR10,STR11,STR12,STR13,STR15) " .
			"Select idhstb,hoten,'Thương binh',loaidd,xa,huyen,ngaysinh,gioitinh,quequan,truquan,dieuduong,loaidd,namddcc,dangtat,ketluansgknld" .
			" From hosotb where dieuduong = 'Có' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and  hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai năm một lần' and namddcc = $nam2) or (loaidd = 'Một năm một lần' and namddcc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$sql = "Select hoten,'Thương binh',loaidd,xa,huyen" .
			" From hosotb where dieuduong = 'Có' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and  hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai năm một lần' and namddcc = $nam2) or (loaidd = 'Một năm một lần' and namddcc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$dd += mysqli_num_rows($sql1);
	}
	//Bị bắt tù đày
	if($ahs[4] == "" || $ahs[4] == "kctd") {
		$sql = "Insert into tbldc(ID,STR1,STR2,STR3,STR4,STR5,STR6,STR7,STR8,STR9,STR10,STR11,STR12) " .
			"Select idhstd,hoten,'Tù đày',loaidd,xa,huyen,ngaysinh,gioitinh,nguyenquan,truquan,dieuduong,loaidd,namddlc" .
			" From hosotd where dieuduong = 'Có' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and  hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai năm một lần' and namddlc = $nam2) or (loaidd = 'Một năm một lần' and namddlc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$sql = "Select hoten,'Tù đày',loaidd,xa,huyen" .
			" From hosotd where dieuduong = 'Có' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and  hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai năm một lần' and namddlc = $nam2) or (loaidd = 'Một năm một lần' and namddlc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$dd += mysqli_num_rows($sql1);
	}
	//Tiền khởi nghĩa
	if($ahs[4] == "" || $ahs[4] == "tkn") {
		$sql = "Insert into tbldc(ID,STR1,STR2,STR3,STR4,STR5,STR6,STR7,STR8,STR9,STR10,STR11,STR12) " .
			"Select idhstkn,hoten,'Tiền khởi nghĩa',loaidd,xa,huyen,ngaysinh,gioitinh,nguyenquan,truquan,dieuduong,loaidd,namddcc" .
			" From hosotkn where dieuduong = 'Có' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and  hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai năm một lần' and namddcc = $nam2) or (loaidd = 'Một năm một lần' and namddcc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$sql = "Select hoten,'Tiền khởi nghĩa',loaidd,xa,huyen" .
			" From hosotkn where dieuduong = 'Có' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and  hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai năm một lần' and namddcc = $nam2) or (loaidd = 'Một năm một lần' and namddcc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$dd += mysqli_num_rows($sql1);
	}
}

?>
	<div class="modal fade" id="modal-7">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<form name="thoaics" role='form' method='POST' enctype="multipart/form-data" class='form-horizontal form-groups-bordered'>
						<div id = "sTTKK" class="form-group">
							<label for="field-3" class="col-sm-3 control-label">ID đối tượng:</label>
							<div class="col-sm-9">
								<input name="id" type="text" class="form-control" id="id">
							</div>
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
							<label for="field-3" class="col-sm-3 control-label">Đối tượng:</label>
							<div class="col-sm-9">
								<input name="doituongcs" type="text" class="form-control" id="doituongcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Nguyên quán:</label>
							<div class="col-sm-9">
								<input name="nguyenquancs" type="text" class="form-control" id="nguyenquancs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Trú quán:</label>
							<div class="col-sm-9">
								<input name="truquancs" type="text" class="form-control" id="truquancs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Điều dưỡng:</label>
							<div class="col-sm-9">
								<input name="dieuduongcs" type="text" class="form-control" id="dieuduongcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Loại điều dưỡng:</label>
							<div class="col-sm-9">
								<input name="phanloaiddcs" type="text" class="form-control" id="phanloaiddcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Năm điều dưỡng:</label>
							<div class="col-sm-9">
								<input name="namddcs" type="text" class="form-control" id="namddcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Tỷ lệ suy giảm LĐ:</label>
							<div class="col-sm-9">
								<input name="tylesgldcs" type="text" class="form-control" id="tylesgldcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Tỷ lệ thương tật:</label>
							<div class="col-sm-9">
								<input name="tylettcs" type="text" class="form-control" id="tylettcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Bệnh tật:</label>
							<div class="col-sm-9">
								<input name="benhtatcs" type="text" class="form-control" id="benhtatcs">
							</div>
							<div class="col-sm-10">
								<input name="iddieuduongcs" type="text" class="form-control" style="display:none" id="iddieuduongcs">
							</div>
						</div>
						<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<label class='col-sm-9'>Tổng số đối tượng: <?php echo $dd;?></label>
	<div id = "hsls" class="table-responsive">
		<table class="table table-hover table-striped table-bordered table-advanced tablesorter display" id="table-2">
			<thead>
				<tr>
					<th style="background-color:rgb(54, 169, 224)" width="15%"><strong style='color:rgb(255, 255, 225)'>Họ tên</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="32%"><strong style='color:rgb(255, 255, 225)'>Đối tượng</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Hình thức</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Đơn vị</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Huyện</strong></th>
				</tr>
			</thead>
			<tbody id="rowlist" class="rowlist">
<?php
		$sql = "Select ID,STR1,STR2,STR3,STR4,STR5,STR6,STR7,STR8,STR9,STR10,STR11,STR12,STR13,STR14,STR15 From tbldc order by STR5 ASC ";
		$qrsql = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($qrsql)) {
			echo "<tr>";
			echo "<td style='text-align: left; display: none'>" . $row[0] . "</td>";
			echo "<td style='text-align: left;'>" . $row[1] . "</td>";
			echo "<td style='text-align: left;'>" .$row[2] . "</td>";
			echo "<td style='text-align: left;'>" . $row[3] . "</td>";
			echo "<td style='text-align: left;'>" . $row[4] . "</td>";
			echo "<td style='text-align: left;' contenteditable=true>" .$row[5] . "</td>";
			echo "<td style='text-align: left; display: none'>" . $row[6] . "</td>";
			echo "<td style='text-align: left; display: none'>" . $row[7] . "</td>";
			echo "<td style='text-align: left; display: none'>" . $row[8] . "</td>";
			echo "<td style='text-align: left; display: none'>" . $row[9] . "</td>";
			echo "<td style='text-align: left; display: none'>" . $row[10] . "</td>";
			echo "<td style='text-align: left; display: none'>" . $row[11] . "</td>";
			echo "<td style='text-align: left; display: none'>" . $row[12] . "</td>";
			echo "<td style='text-align: left; display: none'>" . $row[13] . "</td>";
			echo "<td style='text-align: left; display: none'>" . $row[14] . "</td>";
			echo "<td style='text-align: left; display: none'>" . $row[15] . "</td>";
			echo "</tr>";
		}
?>
			</tbody>
		</table>
	</div>
</form>
<script type="text/javascript">
    window.onsubmit = function() {
		//document.thoaimoi.action = get_action1();
		document.thoaitao.action = get_action2xx();
		document.thoaichuyen.action = get_action3();
		document.thoaichuyenx.action = get_action4();
    }
	function get_action1() {
			return "dkdieuduongtinh.php?id="+$('#trangm').val()+">0";
    }
	function get_action2()
	{
		return "dkdieuduongtinh.php?id=1>2016";
	}
	function get_action2xx() {
	b1="";b2="";b3="";b4="";b5="";b6="";b7="";b8="";b9="";b10="";
	if($('#tb').val()=="Yes")
		b1 = "Thương binh";
	if($('#bb').val()=="Yes")
		b2 = "Bệnh binh";
	if($('#ah').val()=="Yes")
		b3 = "Anh hùng";
	if($('#bm').val()=="Yes")
		b4 = "Bà mẹ Việt Nam anh hùng";
	if($('#lt').val()=="Yes")
		b5 = "Người hoạt động trước 01/01/1945";
	if($('#tkn').val()=="Yes")
		b6 = "Tiền khởi nghĩa";
	if($('#hh').val()=="Yes")
		b7 = "Người nhiễm chất độc hóa học";
	if($('#kctd').val()=="Yes")
		b8 = "Tù đày";
	if($('#tnls').val()=="Yes")
		b9 = "Thân nhân liệt sỹ";
	if($('#cc').val()=="Yes")
		b10 = "Người có công giúp đỡ cách mạng";
	giatri="1>"+$('#namdd').val()+">"+$('#tenhuyentao').val()+">"+$('#tenxatao').val()+">"+$('#phanloai').val();
			return "dsdieuduongtinh.php?id="+giatri;
    }
	function get_action3() {
			return "dkdieuduongtinh.php?id="+$('#trangm').val()+">2016";
    }
	function get_action4() {
			return "dkdieuduongtinh.php?id=1>0";
    }
</script>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>