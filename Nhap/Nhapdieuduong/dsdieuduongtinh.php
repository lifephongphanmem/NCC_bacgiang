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
			<h4 class="modal-title">Danh s??ch h??? s?? ??i???u d?????ng</h4>
		</div>
			<div class="modal-body">
				<div class="panel panel-dark">
					<div class="panel-body">
						<label for="field-3" class="col-sm-2 control-label">T??n ?????i t?????ng:</label>
						<div class="col-sm-4">
							<input name="tenhs" type="text" class="form-control" id="tenhs">
						</div>
						<label for="field-3" class="col-sm-2 control-label">T??n Huy???n:</label>
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
						<label for="field-3" class="col-sm-2 control-label">T??n x??:</label>
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
						<label for="field-3" class="col-sm-2 control-label">Ph??n lo???i:</label>
						<div class="col-sm-4">
							<select name="phanloai" id="phanloai" class="form-control">
								<option value="" selected = "selected"></option>
								<option value="M???t n??m m???t l???n" >M???t n??m m???t l???n</option>
								<option value="Hai n??m m???t l???n" >Hai n??m m???t l???n</option>
							</select>
						</div>
						<label for="field-3" class="col-sm-2 control-label">Lo???i ?????i t?????ng:</label>
						<div class="col-sm-10">
							<select name="loaidoituong" id="loaidoituong" class="form-control">
								<option value="" selected = "selected"></option>
								<option value="ah" >Anh hung l???c l?????ng v?? trang, anh hung lao ?????ng trong th???i k??? kh??ng chi???n</option>
								<option value="lt" >Ng?????i ho???t ?????ng c??ch m???ng tr?????c 01 th??ng 01 n??m 1945</option>
								<option value="tkn" >Ng?????i ho???t ?????ng c??ch m???ng t??? ng??y 01 th??ng 01 n??m 1945 ?????n ng??y kh???i ngh??a th??ng t??m n??m 1945</option>
								<option value="bm" >B?? m??? Vi???t Nam anh h??ng</option>
								<option value="tb" >Th????ng binh v?? ng?????i h?????ng ch??nh s??ch nh?? th????ng binh</option>
								<option value="bb" >B???nh binh</option>
								<option value="h" >Ng?????i ho???t ?????ng kh??ng chi???n nhi???m ch???t ?????c h??a h???c</option>
								<option value="tnls" >Th??n nh??n Li???t s???</option>
								<option value="kctd" >Ng?????i ho???t ?????ng kh??ng chi???n b??? ?????ch b???t, t?? ????y</option>
								<option value="cc" >Ng?????i c?? c??ng gi??p ????? c??ch m???ng</option>
							</select>
						</div>
						<a  onclick="showAjaxModal1();" class='btn btn-success' style = "margin-top:15px;">
							T??m ki???m
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
//Anh h??ng
	if($ahs[4] == "" || $ahs[4] == "ah") {
		$sql = "Insert into tbldc (ID,STR1,STR2,STR3,STR4,STR5,STR6,STR7,STR8,STR9,STR10,STR11,STR12) " .
			"Select idhsah, hoten,'Anh h??ng',loaidd,xa,huyen,ngaysinh,gioitinh,nguyenquan,truquan,dieuduong,loaidd,namddlc" .
			" From hosoah where dieuduong = 'C??' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and  hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai n??m m???t l???n' and namddlc = $nam2) or (loaidd = 'M???t n??m m???t l???n' and namddlc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$sql = "Select hoten,'Anh h??ng',loaidd,xa,huyen" .
			" From hosoah where dieuduong = 'C??' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and  hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai n??m m???t l???n' and namddlc = $nam2) or (loaidd = 'M???t n??m m???t l???n' and namddlc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$dd += mysqli_num_rows($sql1);
	}
//B???nh Binh
	if($ahs[4] == "" || $ahs[4] == "bb") {
		$sql = "Insert into tbldc (ID,STR1,STR2,STR3,STR4,STR5,STR6,STR7,STR8,STR9,STR10,STR11,STR12,STR13,STR14,STR15) " .
			"Select idhsbb, hoten,'B???nh binh',loaidd,xa,huyen,ngaysinh,gioitinh,quequan,truquan,dieuduong,loaidd,namddcc,tinhtrangbenhtat,tyledathuongtat,klmsld" .
			" From hosobb where dieuduong = 'C??' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and  hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai n??m m???t l???n' and namddcc = $nam2) or (loaidd = 'M???t n??m m???t l???n' and namddcc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$sql = "Select hoten,'B???nh binh',loaidd,xa,huyen" .
			" From hosobb where dieuduong = 'C??' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai n??m m???t l???n' and namddcc = $nam2) or (loaidd = 'M???t n??m m???t l???n' and namddcc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$dd += mysqli_num_rows($sql1);
	}
//B?? m???
	if($ahs[4] == "" || $ahs[4] == "bm") {
		$sql = "Insert into tbldc(ID,STR1,STR2,STR3,STR4,STR5,STR6,STR7,STR8,STR9,STR10,STR11,STR12) " .
			"Select idhsbm,hoten,'B?? m??? Vi???t Nam anh h??ng',loaidd,xa,huyen,ngaysinh,'N???' as gioitinh,nguyenquan,truquan,dieuduong,loaidd,namddlc" .
			" From hosobm where dieuduong = 'C??' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai n??m m???t l???n' and namddlc = $nam2) or (loaidd = 'M???t n??m m???t l???n' and namddlc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$sql = "Select hoten,'B?? m??? Vi???t Nam anh h??ng',loaidd,xa,huyen" .
			" From hosobm where dieuduong = 'C??' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and  hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai n??m m???t l???n' and namddlc = $nam2) or (loaidd = 'M???t n??m m???t l???n' and namddlc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$dd += mysqli_num_rows($sql1);
	}
//C?? c??ng
	if($ahs[4] == "" || $ahs[4] == "cc") {
		$sql = "Insert into tbldc(ID,STR1,STR2,STR3,STR4,STR5,STR6,STR7,STR8,STR9,STR10,STR11,STR12) " .
			"Select idhscc,hoten,'Ng?????i c?? c??ng gi??p ????? c??ch m???ng',loaidd,xa,huyen,ngaysinh,gioitinh,nguyenquan,truquan,dieuduong,loaidd,namddlc" .
			" From hosocc where dieuduong = 'C??' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and  hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai n??m m???t l???n' and namddlc = $nam2) or (loaidd = 'M???t n??m m???t l???n' and namddlc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$sql = "Select hoten,'Ng?????i c?? c??ng gi??p ????? c??ch m???ng',loaidd,xa,huyen" .
			" From hosocc where dieuduong = 'C??' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai n??m m???t l???n' and namddlc = $nam2) or (loaidd = 'M???t n??m m???t l???n' and namddlc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$dd += mysqli_num_rows($sql1);
	}
	//H??a h???c
	if($ahs[4] == "" || $ahs[4] == "hh") {
		$sql = "Insert into tbldc(ID,STR1,STR2,STR3,STR4,STR5,STR6,STR7,STR8,STR9,STR10,STR11,STR12,STR13,STR15) " .
			"Select idhshh,hoten,'Ng?????i nhi???m ch???t ?????c h??a h???c',loaidd,xa,huyen,ngaysinh,gioitinh,nguyenquan,truquan,dieuduong,loaidd,namddlc,tinhtrangbenh,tlsgknld" .
			" From hosohh where dieuduong = 'C??' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and  hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai n??m m???t l???n' and namddlc = $nam2) or (loaidd = 'M???t n??m m???t l???n' and namddlc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$sql = "Select hoten,'Ng?????i nhi???m ch???t ?????c h??a h???c',loaidd,xa,huyen" .
			" From hosohh where dieuduong = 'C??' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and  hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai n??m m???t l???n' and namddlc = $nam2) or (loaidd = 'M???t n??m m???t l???n' and namddlc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$dd += mysqli_num_rows($sql1);
	}
	//Tr?????c ng??y 01/01/1945
	if($ahs[4] == "" || $ahs[4] == "lt") {
		$sql = "Insert into tbldc(ID,STR1,STR2,STR3,STR4,STR5,STR6,STR7,STR8,STR9,STR10,STR11,STR12) " .
			"Select idhslt, hoten,'Ng?????i ho???t ?????ng tr?????c 01/01/1945',loaidd,xa,huyen,ngaysinh,gioitinh,nguyenquan,truquan,dieuduong,loaidd,namddcc" .
			" From hosolt where dieuduong = 'C??' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and  hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai n??m m???t l???n' and namddcc = $nam2) or (loaidd = 'M???t n??m m???t l???n' and namddcc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$sql = "Select hoten,'Ng?????i ho???t ?????ng tr?????c 01/01/1945',loaidd,xa,huyen" .
			" From hosolt where dieuduong = 'C??' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and  hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai n??m m???t l???n' and namddcc = $nam2) or (loaidd = 'M???t n??m m???t l???n' and namddcc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$dd += mysqli_num_rows($sql1);
	}
	//Th????ng binh
	if($ahs[4] == "" || $ahs[4] == "tb") {
		$sql = "Insert into tbldc(ID,STR1,STR2,STR3,STR4,STR5,STR6,STR7,STR8,STR9,STR10,STR11,STR12,STR13,STR15) " .
			"Select idhstb,hoten,'Th????ng binh',loaidd,xa,huyen,ngaysinh,gioitinh,quequan,truquan,dieuduong,loaidd,namddcc,dangtat,ketluansgknld" .
			" From hosotb where dieuduong = 'C??' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and  hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai n??m m???t l???n' and namddcc = $nam2) or (loaidd = 'M???t n??m m???t l???n' and namddcc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$sql = "Select hoten,'Th????ng binh',loaidd,xa,huyen" .
			" From hosotb where dieuduong = 'C??' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and  hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai n??m m???t l???n' and namddcc = $nam2) or (loaidd = 'M???t n??m m???t l???n' and namddcc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$dd += mysqli_num_rows($sql1);
	}
	//B??? b???t t?? ????y
	if($ahs[4] == "" || $ahs[4] == "kctd") {
		$sql = "Insert into tbldc(ID,STR1,STR2,STR3,STR4,STR5,STR6,STR7,STR8,STR9,STR10,STR11,STR12) " .
			"Select idhstd,hoten,'T?? ????y',loaidd,xa,huyen,ngaysinh,gioitinh,nguyenquan,truquan,dieuduong,loaidd,namddlc" .
			" From hosotd where dieuduong = 'C??' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and  hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai n??m m???t l???n' and namddlc = $nam2) or (loaidd = 'M???t n??m m???t l???n' and namddlc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$sql = "Select hoten,'T?? ????y',loaidd,xa,huyen" .
			" From hosotd where dieuduong = 'C??' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and  hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai n??m m???t l???n' and namddlc = $nam2) or (loaidd = 'M???t n??m m???t l???n' and namddlc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$dd += mysqli_num_rows($sql1);
	}
	//Ti???n kh???i ngh??a
	if($ahs[4] == "" || $ahs[4] == "tkn") {
		$sql = "Insert into tbldc(ID,STR1,STR2,STR3,STR4,STR5,STR6,STR7,STR8,STR9,STR10,STR11,STR12) " .
			"Select idhstkn,hoten,'Ti???n kh???i ngh??a',loaidd,xa,huyen,ngaysinh,gioitinh,nguyenquan,truquan,dieuduong,loaidd,namddcc" .
			" From hosotkn where dieuduong = 'C??' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and  hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai n??m m???t l???n' and namddcc = $nam2) or (loaidd = 'M???t n??m m???t l???n' and namddcc = $nam1))";
		$sql1 = mysqli_query($con, $sql);
		$sql = "Select hoten,'Ti???n kh???i ngh??a',loaidd,xa,huyen" .
			" From hosotkn where dieuduong = 'C??' and xa like '%" . str_replace('_', ' ', $ahs[1]) . "%' and huyen Like '%" . str_replace('_', ' ', $ahs[0]) . "%' and " .
			" loaidd like '$ahs[2]%'  and  hoten like '$ahs[3]%' and " .
			"((loaidd = 'Hai n??m m???t l???n' and namddcc = $nam2) or (loaidd = 'M???t n??m m???t l???n' and namddcc = $nam1))";
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
							<label for="field-3" class="col-sm-3 control-label">ID ?????i t?????ng:</label>
							<div class="col-sm-9">
								<input name="id" type="text" class="form-control" id="id">
							</div>
							<label for="field-3" class="col-sm-3 control-label">H??? t??n ?????i t?????ng:</label>
							<div class="col-sm-9">
								<input name="hotencs" type="text" class="form-control" id="hotencs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Ng??y sinh:</label>
							<div class="col-sm-3">
								<input name="ngaysinhcs" type="text" class="form-control" id="ngaysinhcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Gi???i t??nh:</label>
							<div class="col-sm-3">
								<select name="gioitinhcs" id="gioitinhcs" class="form-control">
									<option value="Nam">Nam</option>
									<option value="N???">N???</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-3 control-label">?????i t?????ng:</label>
							<div class="col-sm-9">
								<input name="doituongcs" type="text" class="form-control" id="doituongcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Nguy??n qu??n:</label>
							<div class="col-sm-9">
								<input name="nguyenquancs" type="text" class="form-control" id="nguyenquancs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Tr?? qu??n:</label>
							<div class="col-sm-9">
								<input name="truquancs" type="text" class="form-control" id="truquancs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">??i???u d?????ng:</label>
							<div class="col-sm-9">
								<input name="dieuduongcs" type="text" class="form-control" id="dieuduongcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Lo???i ??i???u d?????ng:</label>
							<div class="col-sm-9">
								<input name="phanloaiddcs" type="text" class="form-control" id="phanloaiddcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">N??m ??i???u d?????ng:</label>
							<div class="col-sm-9">
								<input name="namddcs" type="text" class="form-control" id="namddcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">T??? l??? suy gi???m L??:</label>
							<div class="col-sm-9">
								<input name="tylesgldcs" type="text" class="form-control" id="tylesgldcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">T??? l??? th????ng t???t:</label>
							<div class="col-sm-9">
								<input name="tylettcs" type="text" class="form-control" id="tylettcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">B???nh t???t:</label>
							<div class="col-sm-9">
								<input name="benhtatcs" type="text" class="form-control" id="benhtatcs">
							</div>
							<div class="col-sm-10">
								<input name="iddieuduongcs" type="text" class="form-control" style="display:none" id="iddieuduongcs">
							</div>
						</div>
						<button type="button" class="btn btn-black" data-dismiss="modal">????ng</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<label class='col-sm-9'>T???ng s??? ?????i t?????ng: <?php echo $dd;?></label>
	<div id = "hsls" class="table-responsive">
		<table class="table table-hover table-striped table-bordered table-advanced tablesorter display" id="table-2">
			<thead>
				<tr>
					<th style="background-color:rgb(54, 169, 224)" width="15%"><strong style='color:rgb(255, 255, 225)'>H??? t??n</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="32%"><strong style='color:rgb(255, 255, 225)'>?????i t?????ng</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>H??nh th???c</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>????n v???</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Huy???n</strong></th>
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
		b1 = "Th????ng binh";
	if($('#bb').val()=="Yes")
		b2 = "B???nh binh";
	if($('#ah').val()=="Yes")
		b3 = "Anh h??ng";
	if($('#bm').val()=="Yes")
		b4 = "B?? m??? Vi???t Nam anh h??ng";
	if($('#lt').val()=="Yes")
		b5 = "Ng?????i ho???t ?????ng tr?????c 01/01/1945";
	if($('#tkn').val()=="Yes")
		b6 = "Ti???n kh???i ngh??a";
	if($('#hh').val()=="Yes")
		b7 = "Ng?????i nhi???m ch???t ?????c h??a h???c";
	if($('#kctd').val()=="Yes")
		b8 = "T?? ????y";
	if($('#tnls').val()=="Yes")
		b9 = "Th??n nh??n li???t s???";
	if($('#cc').val()=="Yes")
		b10 = "Ng?????i c?? c??ng gi??p ????? c??ch m???ng";
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