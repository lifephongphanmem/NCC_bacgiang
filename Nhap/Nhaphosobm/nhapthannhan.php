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
		function sync(){
			alert("Dữ liệu đã được đồng bộ hóa với cổng ASXH");
		}
</script>
<script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() 
			{  
			   $('table tbody tr').dblclick(function() 
			   { 					
					jQuery('#modal-7').modal('show', {backdrop: 'static'});
					$("#hotencs").val($(this).find('td:nth-child(2)').text());	
					$("#ngaysinhcs").val($(this).find('td:nth-child(3)').text());
					$("#gioitinhcs").val($(this).find('td:nth-child(4)').text());
					//$("#quanhecs").val($(this).find('td:nth-child(5)').text());
					$("#truquancs").val($(this).find('td:nth-child(6)').text());
					$("#nguyenquancs").val($(this).find('td:nth-child(7)').text());
					$("#loaitrocapcs").val($(this).find('td:nth-child(8)').text());
					$("#matrocapcs").val($(this).find('td:nth-child(9)').text());
					$("#ngayhuongcs").val($(this).find('td:nth-child(10)').text());
					$("#sotiencs").val($(this).find('td:nth-child(11)').text());
					$("#sosolinhtiencs").val($(this).find('td:nth-child(12)').text());
					$("#ngaythoihuongcs").val($(this).find('td:nth-child(13)').text());
					$("#loaidieuduongcs").val($(this).find('td:nth-child(14)').text());
					$("#namddlccs").val($(this).find('td:nth-child(15)').text());
					$("#ghichucs").val($(this).find('td:nth-child(16)').text());
					$("#idthannhantkncs").val($(this).find('td:nth-child(17)').text());
					$("#idhstkncs").val($(this).find('td:nth-child(18)').text());
					$("#fileanhcu").val($(this).find('td:nth-child(19)').text());
					$("#phanloaitblscs").val($(this).find('td:nth-child(23)').text());
					$("#sobanggiaycncs").val($(this).find('td:nth-child(24)').text());
					$("#tilettcs").val($(this).find('td:nth-child(25)').text());
					document.getElementById("dd").src = $(this).find('td:nth-child(19)').text();
					$("#bhytcs").val($(this).find('td:nth-child(20)').text());
					giatri = $(this).find('td:nth-child(22)').text()+"-"+$(this).find('td:nth-child(21)').text()+"-"+$(this).find('td:nth-child(26)').text()+"-"+$(this).find('td:nth-child(27)').text();
					giatri = giatri.replace(/ /g,"_");
					//alert(giatri);
					$("#xahuyencs").val(giatri);
				   giatri = $(this).find('td:nth-child(28)').text()+"-"+$(this).find('td:nth-child(5)').text();
				   giatri = giatri.replace(/ /g,"_");
				   //alert(giatri);
				   $("#quanhecs").val(giatri);
			   }); 
			}
		    		  
		);
</script>
<script>
$(document).ready(function(){
    $(":input").inputmask();
});
</script>
<?php
$ihs = explode('>',$_GET['id']);
//echo $_GET['id'];	
if(isset($_POST["capnhatts"])) {
	if ($madv[3] == "Tỉnh") {
		$xhcs = explode('-', $_POST['xahuyencs']);
		$qhcs = explode('-', $_POST['quanhecs']);
		$fileanh = "";
		$tmp_name = $_FILES['fileacs']['tmp_name'];
		if ($tmp_name != "") {
			$path_parts = pathinfo($_FILES['fileacs']['name']);
			$fileup = $path_parts['filename'] . "." . $path_parts['extension'];
			move_uploaded_file($_FILES['fileacs']['tmp_name'], "$_SERVER[DOCUMENT_ROOT]/data/upload/" . $fileup);
			$fileanh = "/data/upload/" . $fileup;
		}
		$sqlbm = "select idhsbm FROM thannhanbm where idthannhanbm = ".$_POST['idthannhantkncs'];
		$result = mysqli_query($con,$sqlbm);
		while ($row = mysqli_fetch_array($result)){
			$idhs = $row[0];
		}
		$gioitinhAPI = gioitinhAPI($_POST['gioitinhcs']);
		$sqlup = "Update thannhanbm Set hoten='" . $_POST['hotencs'] . "', ngaysinh='" . $_POST['ngaysinhcs'] . "', gioitinh='" . $_POST['gioitinhcs'] . "', quanhe='" . str_replace('_', ' ', $qhcs[1]). "', ";
		$sqlup = $sqlup . "truquan='" . $_POST['truquancs'] . "', nguyenquan='" . $_POST['nguyenquancs'] . "', loaitrocap='" . $_POST['loaitrocapcs'] . "', matrocap='" . $_POST['matrocapcs'] . "', phanloaitbls='" . $_POST['phanloaitblscs'] . "',sobanggiaycn='" . $_POST['sobanggiaycncs'] . "',tilett='" . $_POST['tilettcs'] . "', ";
		$sqlup = $sqlup . "ngayhuong='" . $_POST['ngayhuongcs'] . "', sotien=" . kieudouble($_POST['sotiencs']) . ", sosolinhtien='" . $_POST['sosolinhtiencs'] . "', ngaythoihuong='" . $_POST['ngaythoihuongcs'] . "', ";
		$sqlup = $sqlup . "loaidieuduong='" . $_POST['loaidieuduongcs'] . "', namddlc='" . $_POST['namddlccs'] . "', ghichu='" . $_POST['ghichucs'] . "', bhyt='" . $_POST['bhytcs'] . "', xa='" . str_replace('_', ' ', $xhcs[1]) . "', huyen='" . str_replace('_', ' ', $xhcs[0]) . "'";
		$sqlup = $sqlup . ", maxaAPI='" . str_replace('_', ' ', $xhcs[2]) . "', mahuyenAPI='" . str_replace('_', ' ', $xhcs[3]) . "',gioitinhAPI=$gioitinhAPI,maquanhe=$qhcs[0]";
		if ($_POST['fileanhcu'] != $fileanh)
			$sqlup = $sqlup . ",filea='" . $fileanh . "'";
		$sqlup = $sqlup . " Where idthannhanbm=" . $_POST['idthannhantkncs'];
		//echo $sqlup;	
		$kq = mysqli_query($con, $sqlup);
		//API
		$namsinh = $_POST['ngaysinhcs'];
		if($namsinh == "")
			$namsinh = "0";
		$data = array(
			"id_doituong"=> $ihs[0],
			"id_nhanthan"=>$_POST['idthannhantkncs'],
			"quanhe_nhanthan"=>$qhcs[0],
			"doituong"=> "bamevnah",
			"thongtin"=> array(
				"hoten"=> $_POST['hotencs'],
				"namsinh"=> $namsinh,
				"gioitinh"=> $gioitinhAPI,
				"tongiao"=> "00",
				"dantoc"=> "0",
				"quocgia"=> "VN",
				"xa_nguyenquan"=> str_replace('_', ' ', $xhcs[2]),
				"huyen_nguyenquan"=> str_replace('_', ' ', $xhcs[3]),
				"tinh_nguyenquan"=> "26",
				"xa_noio"=> str_replace('_', ' ', $xhcs[2]),
				"huyen_noio"=> str_replace('_', ' ', $xhcs[3]),
				"tinh_noio"=> "26",
			),
		);
		//$data_string = json_encode($data);
		//print_r($data_string);
		callAPI('POST','http://ansinhxahoi.bacgiang.gov.vn/api/asxh/nhanthan/update',$data);
	}
}
if(isset($_POST["themmoi"])) {
	if ($madv[3] == "Tỉnh") {
		$xh = explode('-', $_POST['xahuyen']);
		$qh = explode('-', $_POST['quanhe']);
		$fileanh = "";
		$tmp_name = $_FILES['filea']['tmp_name'];
		if ($tmp_name != "") {
			$path_parts = pathinfo($_FILES['filea']['name']);
			$fileup = $path_parts['filename'] . "." . $path_parts['extension'];
			move_uploaded_file($_FILES['filea']['tmp_name'], "$_SERVER[DOCUMENT_ROOT]/data/upload/" . $fileup);
			$fileanh = "/data/upload/" . $fileup;
		}
		$gioitinhAPI = gioitinhAPI($_POST['gioitinh']);
		$sqlup = "Insert into thannhanbm Set hoten='" . $_POST['hoten'] . "', ngaysinh='" . $_POST['ngaysinh'] . "', gioitinh='" . $_POST['gioitinh'] . "', quanhe='" .str_replace('_', ' ', $qh[1]). "', ";
		$sqlup = $sqlup . "truquan='" . $_POST['truquan'] . "', nguyenquan='" . $_POST['nguyenquan'] . "', loaitrocap='" . $_POST['loaitrocap'] . "', matrocap='" . $_POST['matrocap'] . "', phanloaitbls='" . $_POST['phanloaitbls'] . "',sobanggiaycn='" . $_POST['sobanggiaycn'] . "',tilett='" . $_POST['tilett'] . "', ";
		$sqlup = $sqlup . "ngayhuong='" . $_POST['ngayhuong'] . "', sotien=" . kieudouble($_POST['sotien']) . ", sosolinhtien='" . $_POST['sosolinhtien'] . "', ngaythoihuong='" . $_POST['ngaythoihuong'] . "', ";
		$sqlup = $sqlup . "loaidieuduong='" . $_POST['loaidieuduong'] . "', namddlc='" . $_POST['namddlc'] . "', ghichu='" . $_POST['ghichu'] . "', idhsbm =" . $ihs[0] . ", filea='" . $fileanh . "', bhyt='" . $_POST['bhyt'] . "', xa='" . str_replace('_', ' ', $xh[1]) . "', huyen='" . str_replace('_', ' ', $xh[0]) . "', tenncc='" . $ihs[3] . "'";
		$sqlup = $sqlup . ", maxaAPI='" . str_replace('_', ' ', $xh[2]) . "', mahuyenAPI='" . str_replace('_', ' ', $xh[3]) . "',gioitinhAPI=$gioitinhAPI,maquanhe=$qh[0]";
		//echo $sqlup;
		$kq = mysqli_query($con, $sqlup);
		//API
		$result = mysqli_query($con,"select MAX(idthannhanbm) FROM thannhanbm where idhsbm = $ihs[0]");
		while ($row = mysqli_fetch_array($result)){
			$highest_id = $row[0];
		}
		$data = array(
			"id_doituong"=> $ihs[0],
			"id_nhanthan"=>$highest_id,
			"quanhe_nhanthan"=>$qh[0],
			"doituong"=> "bamevnah",
			"thongtin"=> array(
				"hoten"=> $_POST['hoten'],
				"namsinh"=> $_POST['ngaysinh'],
				"gioitinh"=> $gioitinhAPI,
				"tongiao"=> "00",
				"dantoc"=> "0",
				"quocgia"=> "VN",
				"xa_nguyenquan"=> str_replace('_', ' ', $xh[2]),
				"huyen_nguyenquan"=> str_replace('_', ' ', $xh[3]),
				"tinh_nguyenquan"=> "26",
				"xa_noio"=> str_replace('_', ' ', $xh[2]),
				"huyen_noio"=> str_replace('_', ' ', $xh[3]),
				"tinh_noio"=> "26",
			),
		);
		//$data_string = json_encode($data);
		//print_r($data_string);
		callAPI('POST','http://ansinhxahoi.bacgiang.gov.vn/api/asxh/nhanthan/insert',$data);
	}
}
?>
<form role='form' method='POST' class='form-horizontal form-groups-bordered'>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Danh sách thân nhân hồ sơ bà mẹ anh hùng 
			<a style = "float:right; color:rgb(255, 255, 225)" href='/Nhap/Nhaphosobm/nhaphosoncc.php?id=1>0'>
			Trở lại
			</a>
	<?php
		if ($madv[3]=="Tỉnh")
		{	
			echo "<strong style = 'float:right'>&nbsp;&nbsp;||&nbsp;&nbsp;</strong>";
			echo "<a style = 'float:right; color:rgb(255, 255, 225)' onclick='showAjaxModalhs();' href = '#'>
				Thêm thân nhân
			</a>";
			echo "<strong style = 'float:right'>&nbsp;&nbsp;||&nbsp;&nbsp;</strong>";
			echo "<a style = 'float:right; color:rgb(255, 255, 225)' onclick='sync();'  href = '#'>
			Kiểm tra đồng bộ
		</a>";
		}
	?>		
			</h4>
		</div>
			<div class="modal-body">

	<div id = "thannhan" class="table-responsive">
		<table class="table table-hover table-striped table-bordered table-advanced tablesorter display" id="table-3">
			<thead>
				<tr>
					<th style="background-color:rgb(54, 169, 224)" width="6%"><strong style='color:rgb(255, 255, 225)'>STT</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="20%"><strong style='color:rgb(255, 255, 225)'>Họ và tên</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Năm sinh</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="6%"><strong style='color:rgb(255, 255, 225)'>Giới tính</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="15%"><strong style='color:rgb(255, 255, 225)'>Quan hệ</strong></th>	
					<th style="background-color:rgb(54, 169, 224)" width="45%"><strong style='color:rgb(255, 255, 225)'>Trú Quán</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>nguyenquan</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>loaitrocap</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>matrocap</strong></th>					
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ngayhuong</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>sotien</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>sosolinhtien</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ngaythoihuong</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>loaidieuduong</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>namddlc</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ghichu</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>idthannhan</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>idhsls</strong></th>	
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>filea</strong></th>	
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>filea</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>xa</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>huyen</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>phanloaitbls</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>sobanggiaycn</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>tilett</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="15%"><strong style='color:rgb(255, 255, 225)'>Thao tác</strong></th>

				</tr>				
			</thead>
	<?php
	$sqltn = "Select * From thannhanbm Where idhsbm = $ihs[0]";	
	$i1 = 0;	
	$qrcttn = mysqli_query($con,$sqltn);			
			echo "<tbody id='rowlist' class='rowlist'>";
	while($rcttn=@mysqli_fetch_array($qrcttn))
		{
			$i1 = $i1 + 1;
				echo "<tr>";
					echo "<td>".$i1."</td>";
					echo "<td style='text-align: left;'>".$rcttn['hoten']."</td>";
					echo "<td>".$rcttn['ngaysinh']."</td>";
					echo "<td>".$rcttn['gioitinh']."</td>";
					echo "<td style='text-align: left;'>".$rcttn['quanhe']."</td>";
					echo "<td style='text-align: left;'>".$rcttn['truquan']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['nguyenquan']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['loaitrocap']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['matrocap']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['ngayhuong']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['sotien']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['sosolinhtien']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['ngaythoihuong']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['loaidieuduong']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['namddlc']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['ghichu']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['idthannhanbm']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['idhsbm']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['filea']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['bhyt']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['xa']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['huyen']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['phanloaitbls']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['sobanggiaycn']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['tilett']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['maxaAPI']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['mahuyenAPI']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['maquanhe']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['maquanhe']."</td>";
					if ($madv[3]=="Tỉnh")
					{
						echo"<td>
									<a href=\"xoathannhan.php?id=".$rcttn['idthannhanbm']."\"  title='Xóa hố sơ và thông tin liên quan' onclick=\"return confirm('Bạn muốn xóa hố sơ này?')\" class='btn btn-red '>
										</i>
										Xóa
									</a>
								</td>";
					}
					else
						echo "<td></td>";
				echo "</tr>";
		}
			echo "</tbody>";
	?>		
		</table>
	</div>	
</form>	
<div class="modal fade" id="modal-6">
	<div class="modal-dialog">
		<div class="modal-content">				
			<div class="modal-body">				
					<form name="thoaimoi" role='form' method='POST' enctype="multipart/form-data" class='form-horizontal form-groups-bordered'>
						<div id = "sTTKK1" class="form-group">
							<div class="col-sm-3">
								<div class="fileinput fileinput-new" data-provides="fileinput">
									<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput">
										<img src="http://placehold.it/200x150" alt="...">
									</div>
									<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
									<div>
										<span class="btn btn-white btn-file">
											<span class="fileinput-new">Chọn ảnh</span>
											<span class="fileinput-exists">Thay đổi</span>
											<input type="file" name="filea"  id="filea" accept="image/*">
										</span>
										<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Bỏ	</a>
									</div>
								</div>	
							</div>
							<label for="field-3" class="col-sm-2 control-label">Họ và tên:</label>
							<div class="col-sm-3">
								<input name="hoten" type="text" class="form-control" id="hoten">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Quan hệ:</label>
							<div class="col-sm-2">
								<select name="quanhe" id="quanhe" class="form-control">
									<?php
									$sql = "Select maquanhe,moiquanhe From dmquanhe";
									$qrtcml = mysqli_query($con,$sql);
									while($rtcml=@mysqli_fetch_array($qrtcml))
									{
										echo "<option value=".$rtcml['maquanhe']."-".str_replace(' ','_',$rtcml['moiquanhe']).">".$rtcml['moiquanhe']."</option>";
									}
									?>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ngày sinh:</label>
							<div class="col-sm-3">
								<input name="ngaysinh" type="text" class="form-control" id="ngaysinh">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Giới tính:</label>
							<div class="col-sm-2">								
								<select name="gioitinh" id="gioitinh" class="form-control">
									<option value="Nam">Nam</option>
									<option value="Nữ">Nữ</option>
									<option value=""></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Phân loại:</label>
							<div class="col-sm-7">								
								<select name="phanloaitbls" id="phanloaitbls" class="form-control">
									<option value="Thương binh">Thương binh</option>
									<option value="Liệt sỹ">Liệt sỹ</option>
									<option value="Khác">Khác</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Số BTQGC/GCNTB:</label>
							<div class="col-sm-3">
								<input name="sobanggiaycn" type="text" class="form-control" id="sobanggiaycn">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tỉ lệ thương tật:</label>
							<div class="col-sm-2">
								<input name="tilett" type="text" class="form-control" id="tilett">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Nguyên quán:</label>
							<div class="col-sm-7">
								<input name="nguyenquan" type="text" class="form-control" id="nguyenquan">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Trú quán:</label>
							<div class="col-sm-7">
								<input name="truquan" type="text" class="form-control" id="truquan">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Trợ cấp (ML):</label>
							<div class="col-sm-3">	
								<input name="loaitrocap" type="text" class="form-control" data-mask="fdecimal" id="loaitrocap">								
							</div>
							<label for="field-3" class="col-sm-2 control-label">Trợ cấp (ĐB):</label>
							<div class="col-sm-2">
								<input name="matrocap" type="text" class="form-control" data-mask="fdecimal" id="matrocap">								
							</div>
							<label for="field-3" class="col-sm-2 control-label">Trợ cấp (HT):</label>
							<div class="col-sm-2">
								<input name="sotien" type="text" class="form-control" data-mask="fdecimal" id="sotien">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ngày hưởng:</label>
							<div class="col-sm-2">
								<input name="ngayhuong" type="text" class="form-control" data-mask="date" id="ngayhuong">
							</div>								
							<label for="field-3" class="col-sm-2 control-label">Số sổ lĩnh tiền:</label>
							<div class="col-sm-2">
								<input name="sosolinhtien" type="text" class="form-control" id="sosolinhtien">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ngày thôi hưởng:</label>
							<div class="col-sm-2">
								<input name="ngaythoihuong" type="text" class="form-control" id="ngaythoihuong">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Loại điều dưỡng:</label>
							<div class="col-sm-6">								
								<select name="loaidieuduong" id="loaidieuduong" class="form-control">
									<option value="Hai năm một lần">Hai năm một lần</option>
									<option value="Một năm một lần">Một năm một lần</option>
									<option value="" selected = "selected"></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Năm ĐD lần cuối:</label>
							<div class="col-sm-2">
								<input name="namddlc" type="text" class="form-control" id="namddlc">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ghí chú:</label>
							<div class="col-sm-6">
								<input name="ghichu" type="text" class="form-control" id="ghichu">
							</div>
							<label for="field-3" class="col-sm-2 control-label">BHYT:</label>
							<div class="col-sm-2">								
								<select name="bhyt" id="bhyt" class="form-control">
									<option value="Có">Có</option>
									<option value="Không" selected="selected">Không</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tên xã:</label>
							<div class="col-sm-6">								
								<select name="xahuyen" id="xahuyen" class="form-control">
									<?php
									$sqltcml = "Select tenxa,tenhuyen,xa.mahuyen,maAPI From xa inner join huyen on xa.tthuyen=huyen.tthuyen";
									$qrtcml = mysqli_query($con,$sqltcml);			
									while($rtcml=@mysqli_fetch_array($qrtcml))
									{
										echo "<option value=".str_replace(' ','_',$rtcml['tenhuyen']).'-'.str_replace(' ','_',$rtcml['tenxa']).'-'.$rtcml['maAPI'].'-'.$rtcml['mahuyen'].">".$rtcml['tenhuyen'].' - '.$rtcml['tenxa']."</option>";
									}
									?>
									<option value="<?php echo str_replace(' ','_',$ihs[2]).'-'.str_replace(' ','_',$ihs[1]).'-'.$ihs[4].'-'.$ihs[5]; ?>" selected = "selected"><?php echo $ihs[2].' - '.$ihs[1]; ?></option>
								</select>
							</div>
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
					<?php
						if ($madv[3]=="Tỉnh")
							echo "<input type='submit' name='themmoi' class='btn btn-blue' value = 'Thêm mới'>";
					?>		
					</form>						
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-7">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">				
					<form name="thoaics" role='form' method='POST' enctype="multipart/form-data" class='form-horizontal form-groups-bordered'>
						<div id = "sTTKK" class="form-group">
							<div class="col-sm-3">							
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<input class="form-control" name="fileanhcu" style="display:none" id = "fileanhcu">
								<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput">
									<img name = "dd" alt="..." id = "dd">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
								<div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new">Chọn ảnh</span>
										<span class="fileinput-exists">Thay đổi</span>
										<input type="file" name="fileacs"  id="fileacs" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Bỏ	</a>
								</div>
							</div>	
						</div>	
							<label for="field-3" class="col-sm-2 control-label">Họ và tên:</label>
							<div class="col-sm-3">
								<input name="hotencs" type="text" class="form-control" id="hotencs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Quan hệ:</label>
							<div class="col-sm-2">
								<select name="quanhecs" id="quanhecs" class="form-control">
									<?php
									$sql = "Select maquanhe,moiquanhe From dmquanhe";
									$qrtcml = mysqli_query($con,$sql);
									while($rtcml=@mysqli_fetch_array($qrtcml))
									{
										echo "<option value=".$rtcml['maquanhe']."-".str_replace(' ','_',$rtcml['moiquanhe']).">".$rtcml['moiquanhe']."</option>";
									}
									?>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ngày sinh:</label>
							<div class="col-sm-3">
								<input name="ngaysinhcs" type="text" class="form-control" id="ngaysinhcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Giới tính:</label>
							<div class="col-sm-2">								
								<select name="gioitinhcs" id="gioitinhcs" class="form-control">
									<option value="Nam">Nam</option>
									<option value="Nữ">Nữ</option>
									<option value=""></option>
								</select>
							</div><label for="field-3" class="col-sm-2 control-label">Phân loại:</label>
							<div class="col-sm-7">								
								<select name="phanloaitblscs" id="phanloaitblscs" class="form-control">
									<option value="Thương binh">Thương binh</option>
									<option value="Liệt sỹ">Liệt sỹ</option>
									<option value="Khác">Khác</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Số BTQGC/GCNTB:</label>
							<div class="col-sm-3">
								<input name="sobanggiaycncs" type="text" class="form-control" id="sobanggiaycncs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tỉ lệ thương tật:</label>
							<div class="col-sm-2">
								<input name="tilettcs" type="text" class="form-control" id="tilettcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Nguyên quán:</label>
							<div class="col-sm-7">
								<input name="nguyenquancs" type="text" class="form-control" id="nguyenquancs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Trú quán:</label>
							<div class="col-sm-7">
								<input name="truquancs" type="text" class="form-control" id="truquancs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Trợ cấp (ML):</label>
							<div class="col-sm-3">
								<input name="loaitrocapcs" type="text" class="form-control" data-mask="fdecimal" id="loaitrocapcs">								
							</div>
							<label for="field-3" class="col-sm-2 control-label">Trợ cấp (ĐB):</label>
							<div class="col-sm-2">
								<input name="matrocapcs" type="text" class="form-control" data-mask="fdecimal" id="matrocapcs">								
							</div>
							<label for="field-3" class="col-sm-2 control-label">Trợ cấp (HT):</label>
							<div class="col-sm-2">
								<input name="sotiencs" type="text" class="form-control" data-mask="fdecimal" id="sotiencs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ngày hưởng:</label>
							<div class="col-sm-2">
								<input name="ngayhuongcs" type="text" class="form-control" data-mask="date" id="ngayhuongcs">
							</div>								
							<label for="field-3" class="col-sm-2 control-label">Số sổ lĩnh tiền:</label>
							<div class="col-sm-2">
								<input name="sosolinhtiencs" type="text" class="form-control" id="sosolinhtiencs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ngày thôi hưởng:</label>
							<div class="col-sm-2">
								<input name="ngaythoihuongcs" type="text" class="form-control" data-mask="date" id="ngaythoihuongcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Loại điều dưỡng:</label>
							<div class="col-sm-6">								
								<select name="loaidieuduongcs" id="loaidieuduongcs" class="form-control">
									<option value="Hai năm một lần">Hai năm một lần</option>
									<option value="Một năm một lần">Một năm một lần</option>
									<option value=""></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Năm ĐD lần cuối:</label>
							<div class="col-sm-2">
								<input name="namddlccs" type="text" class="form-control" id="namddlccs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ghí chú:</label>
							<div class="col-sm-6">
								<input name="ghichucs" type="text" class="form-control" id="ghichucs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">BHYT:</label>
							<div class="col-sm-2">								
								<select name="bhytcs" id="bhytcs" class="form-control">
									<option value="Có">Có</option>
									<option value="Không">Không</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tên xã:</label>
							<div class="col-sm-6">								
								<select name="xahuyencs" id="xahuyencs" class="form-control">
									<?php
									$sqltcml = "Select tenxa,tenhuyen,xa.mahuyen,maAPI From xa inner join huyen on xa.tthuyen=huyen.tthuyen";
									echo $sqltcml;
									$qrtcml = mysqli_query($con,$sqltcml);			
									while($rtcml=@mysqli_fetch_array($qrtcml))
									{
										echo "<option value=".str_replace(' ','_',$rtcml['tenhuyen']).'-'.str_replace(' ','_',$rtcml['tenxa']).'-'.$rtcml['maAPI'].'-'.$rtcml['mahuyen'].">".$rtcml['tenhuyen'].' - '.$rtcml['tenxa']."</option>";
									}
									?>									
								</select>
							</div>
							<div class="col-sm-10">
								<input name="idthannhantkncs" type="text" class="form-control" style="display:none" id="idthannhantkncs">
							</div>
							<div class="col-sm-10">
								<input name="idhstkncs" type="text" class="form-control" style="display:none" id="idhstkncs">
							</div>
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
					<?php
						if ($madv[3]=="Tỉnh")
							echo "<input type='submit' name='capnhatts' class='btn btn-blue' value = 'Cập nhật'>";	
					?>		
					</form>						
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
    window.onsubmit = function() {
        document.thoaics.action = get_action();
		document.thoaimoi.action = get_action1();
    }

    function get_action() {				
			return "nhapthannhan.php?id=" + $('#idhstkncs').val();			
    }
	function get_action1() {				
			return "nhapthannhan.php?id="+$('#idhstkncs').val();			
    }
</script>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>