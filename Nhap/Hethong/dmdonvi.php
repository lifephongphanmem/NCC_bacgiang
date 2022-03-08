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
<script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() 
			{  
			   $('table tbody tr').dblclick(function() 
			   {
					jQuery('#modal-7').modal('show', {backdrop: 'static'});
					$("#tendonvics").val($(this).find('td:nth-child(2)').text());	
					$("#tencaptrencs").val($(this).find('td:nth-child(3)').text());											
					$("#madonvics").val($(this).find('td:nth-child(7)').text());
					$("#capqlcs").val($(this).find('td:nth-child(8)').text());
					$("#tendncs").val($(this).find('td:nth-child(5)').text());
					$("#ttdvcs").val($(this).find('td:nth-child(4)').text());
					$("#nlbcs").val($(this).find('td:nth-child(10)').text());
					$("#ptktcs").val($(this).find('td:nth-child(11)').text());
					$("#idhethongcs").val($(this).find('td:nth-child(6)').text());					
			   }); 
			}
		    		  
		);
$(document).ready(function() {
  $('#trang').change(function() {
		//alert(this.value);
		//$('#hsls').load('ajax_lietsy.php?id='+this.value);		
		//$('#thannhan').load('ajax_thannhan.php');
		//$('#giayto').load('ajax_giayto.php');	
		window.location.href="dmdonvi.php?id="+this.value+">0";
  });
 });		
</script>
<?php
/*
if(isset($_POST["capnhatts"]))
	{
		$sqlup = "Update hethongdv Set tendonvi='".$_POST['tendonvics']."', tencaptren='".$_POST['tencaptrencs']."', madonvi='".$_POST['madonvics']."', ";
		$sqlup = $sqlup."capql='".$_POST['capqlcs']."', tendn='".$_POST['tendncs']."', ttdv='".$_POST['ttdvcs']."', nlb='".$_POST['nlbcs']."', ";
		$sqlup = $sqlup."ptkt='".$_POST['ptktcs']."'";
		if ($_POST['makhaucs'] != "")
			$sqlup = $sqlup."makhau='".$_POST['makhaucs']."'";
		$sqlup = $sqlup." where idhethong = ".$_POST['idhethongcs'];
		$kq=mysqli_query($con,$sqlup);
	}
if(isset($_POST["themmoi"]))
	{
		$sqlup = "Insert into hethongdv Set tendonvi='".$_POST['tendonvi']."', tencaptren='".$_POST['tencaptren']."', madonvi='".$_POST['madonvi']."', ";
		$sqlup = $sqlup."capql='".$_POST['capql']."', tendn='".$_POST['tendn']."', ttdv='".$_POST['ttdv']."', nlb='".$_POST['nlb']."', ";
		$sqlup = $sqlup."ptkt='".$_POST['ptkt']."'";
		if ($_POST['makhau'] != "")
			$sqlup = $sqlup."makhau='".$_POST['makhau']."'";
		$kq=mysqli_query($con,$sqlup);
	}
*/
?>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Danh sách đơn vị </h4>
		</div>
			<div class="modal-body">
<form role='form' method='POST' class='form-horizontal form-groups-bordered'>
		<!--a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModalhs();" class='btn btn-success'>
			<i class='entypo-new'></i>Thêm đơn vị
		</a-->
	<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModaltk();" class='btn btn-success'>
		<i class='entypo-print'></i>Tìm kiếm
	</a>
		<!--label class='col-sm-2'>Trang số:</label-->
<?php
$ahs = $_GET['id'];
$j = 1;
		//echo "<div  class='col-sm-2' style='margin-top:-7px'>";
		//	echo "<select style='margin-left:-90px;' name='trang' class='form-control' id='trang'>";
	$ls =  array(array("1","2","3","4","5","6","7","8","9","10","11","12","13","14"));
	$cs=0;
	$sql="select * from hethongdv WHERE ".($ahs == "0"?"tendonvi like '%'": " tendonvi like '$ahs%'") ;
	$sql1=mysqli_query($con,$sql);
	$kq = 0;$kq1 = 1;
	//if ($j == 1)
	//	echo "<option selected='selected' value='$kq1'>$kq1</option>";
	//else
	//	echo "<option value='$kq1'>$kq1</option>";
	while($row=mysqli_fetch_array($sql1)){
		$ls[$cs][0] = $row['idhethong'];
		$ls[$cs][1] = $row['tendonvi'];
		$ls[$cs][2] = $row['tencaptren'];
		$ls[$cs][3] = $row['madonvi'];
		$ls[$cs][4] = $row['capql'];
		$ls[$cs][5] = $row['tendn'];
		$ls[$cs][6] = $row['makhau'];
		$ls[$cs][7] = $row['ttdv'];
		$ls[$cs][8] = $row['nlb'];
		$ls[$cs][9] = $row['ptkt'];
		$ls[$cs][10] = $row['quyenhs'];
		$ls[$cs][11] = $row['quyenbh'];
		$ls[$cs][12] = $row['quyendd'];
		$ls[$cs][13] = $row['quyenpt'];
		$cs = $cs + 1;

	}
	//if ($j == 0)
		//echo "<option selected='selected' value='$kq1'>$kq1</option>";
			//echo "</select>";
		echo "</div>";
?>
	<div id = "hsls" class="table-responsive">
		<table class="table table-hover table-striped table-bordered table-advanced tablesorter display" id="table-2">
			<thead>
				<tr>
					<th style="background-color:rgb(54, 169, 224)" width="5%"><strong style='color:rgb(255, 255, 225)'>STT</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="30%"><strong style='color:rgb(255, 255, 225)'>Tên đơn vị</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="35%"><strong style='color:rgb(255, 255, 225)'>Tên đăng nhập</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="15%"><strong style='color:rgb(255, 255, 225)'>Thủ trưởng đơn vị</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="15%"><strong style='color:rgb(255, 255, 225)'>Tên cấp trên</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>idhethong</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>madonvi</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>capql</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>makhau</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>nlb</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ptkt</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>quyenhs</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>quyenbh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>quyendd</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>quyenpt</strong></th>
				</tr>
			</thead>
			<tbody id="rowlist" class="rowlist">
<?php

			for($i=($j - 1)*15;$i<15*$j;$i++)
			{
				$a = $i + 1;
				if ($i < $cs)
				{
				echo "<tr>";
					echo "<td>$a</td>";
					echo "<td style='text-align: left;'>".$ls[$i][1]."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][5]."</td>";
					echo "<td>".$ls[$i][7]."</td>";
					echo "<td>".$ls[$i][2]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][0]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][3]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][4]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][6]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][8]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][9]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][10]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][11]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][12]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][13]."</td>";
				echo "</tr>";
				}
			}
?>
			</tbody>
		</table>
	</div>
</form>
<div class="modal fade" id="modal-6">
	<div class="modal-dialog">
		<div class="modal-content">				
			<div class="modal-body">				
					<form name="thoaimoi" role='form' method='POST' class='form-horizontal form-groups-bordered'>
						<div id = "sTTKK1" class="form-group">								
							<label for="field-3" class="col-sm-4 control-label">Mã đơn vị:</label>
							<div class="col-sm-8">
								<input name="madonvi" type="text" class="form-control" id="madonvi">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Tên đơn vị:</label>
							<div class="col-sm-8">
								<input name="tendonvi" type="text" class="form-control" id="tendonvi">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Tên cơ quan cấp trên:</label>
							<div class="col-sm-8">
								<input name="tencaptren" type="text" class="form-control" id="tencaptren">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Cấp quản lý:</label>
							<div class="col-sm-8">
								<select name="capql" id="capql" class="form-control">
									<option value="1. Xã quản lý">1. Xã quản lý</option>
									<option value="2. Huyện quản lý">2. Huyện quản lý</option>
									<option value="3. Tỉnh quản lý">3. Tỉnh quản lý</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-4 control-label">Tên đăng nhập:</label>
							<div class="col-sm-8">
								<input name="tendn" type="text" class="form-control" id="tendn">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Mật khẩu:</label>
							<div class="col-sm-8">
								<input name="makhau" type="text" class="form-control" id="makhau">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Thủ trưởng đơn vị:</label>
							<div class="col-sm-8">
								<input name="ttdv" type="text" class="form-control" id="ttdv">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Người lập biểu:</label>
							<div class="col-sm-8">
								<input name="nlb" type="text" class="form-control" id="nlb">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Phụ trách kế toán:</label>
							<div class="col-sm-8">
								<input name="ptkt" type="text" class="form-control" id="ptkt">
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
							<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
							<input type="submit" name="themmoi" class="btn btn-blue" value = "Thêm mới">							
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
							<label for="field-3" class="col-sm-4 control-label">Mã đơn vị:</label>
							<div class="col-sm-8">
								<input name="madonvics" type="text" class="form-control" id="madonvics">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Tên đơn vị:</label>
							<div class="col-sm-8">
								<input name="tendonvics" type="text" class="form-control" id="tendonvics">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Tên cơ quan cấp trên:</label>
							<div class="col-sm-8">
								<input name="tencaptrencs" type="text" class="form-control" id="tencaptrencs">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Cấp quản lý:</label>
							<div class="col-sm-8">
								<select name="capqlcs" id="capqlcs" class="form-control">
									<option value="1. Xã quản lý">1. Xã quản lý</option>
									<option value="2. Huyện quản lý">2. Huyện quản lý</option>
									<option value="3. Tỉnh quản lý">3. Tỉnh quản lý</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-4 control-label">Tên đăng nhập:</label>
							<div class="col-sm-8">
								<input name="tendncs" type="text" class="form-control" id="tendncs">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Mật khẩu:</label>
							<div class="col-sm-8">
								<input name="makhaucs" type="text" class="form-control" id="makhaucs">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Thủ trưởng đơn vị:</label>
							<div class="col-sm-8">
								<input name="ttdvcs" type="text" class="form-control" id="ttdvcs">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Người lập biểu:</label>
							<div class="col-sm-8">
								<input name="nlbcs" type="text" class="form-control" id="nlbcs">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Phụ trách kế toán:</label>
							<div class="col-sm-8">
								<input name="ptktcs" type="text" class="form-control" id="ptktcs">
							</div>
							<div class="col-sm-10">
								<input name="idhethongcs" type="text" class="form-control" style="display:none" id="idhethongcs">
							</div>
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
							<input type="submit" name="timkiem" class="btn btn-blue" value = "Cập nhật">
					</form>						
			</div>
		</div>
	</div>
</div>

	<div class="modal fade" id="modal-8">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<form name="thoaitk" role='form' method='POST' enctype="multipart/form-data" class='form-horizontal form-groups-bordered'>
						<div id = "sTTKK" class="form-group">
							<label for="field-3" class="col-sm-4 control-label">Tên đơn vị:</label>
							<div class="col-sm-8">
								<input name="tendonvitk" type="text" class="form-control" id="tendonvitk">
							</div>
						</div>
						<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
						<input type="submit" name="timkiem" class="btn btn-blue" value = "Tìm kiếm">
					</form>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">
    window.onsubmit = function() {
        document.thoaics.action = get_action();
		document.thoaimoi.action = get_action1();
		document.thoaitk.action = timkiem();
    }

    function get_action() {				
			return "dmdonvi.php?id=" + $('#trang').val() + ">" + $('#idhethongcs').val();
    }
	function get_action1() {				
			return "dmdonvi.php?id="+$('#trangm').val()+">0";
    }
	function timkiem() {
		return "dmdonvi.php?id="+$('#tendonvitk').val();
	}

</script>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>