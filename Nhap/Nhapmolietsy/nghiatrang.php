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
	window.location.href="/Thoaikx/DsNTLS17.php";
}	
</script>
<script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() 
			{  
			   $('table tbody tr').dblclick(function() 
			   {
					jQuery('#modal-7').modal('show', {backdrop: 'static'});
					$("#tennghiatrangcs").val($(this).find('td:nth-child(2)').text());	
					$("#xacs").val($(this).find('td:nth-child(3)').text());
					$("#huyencs").val($(this).find('td:nth-child(4)').text());
					$("#capqlcs").val($(this).find('td:nth-child(5)').text());
					$("#cuthekcs").val($(this).find('td:nth-child(6)').text());
					$("#mddttchccs").val($(this).find('td:nth-child(7)').text());
					$("#mddttdccs").val($(this).find('td:nth-child(8)').text());
					$("#mddttvcs").val($(this).find('td:nth-child(9)').text());
					$("#mddttcxdcs").val($(this).find('td:nth-child(10)').text());
					$("#mmpttchccs").val($(this).find('td:nth-child(11)').text());
					$("#mmpttdccs").val($(this).find('td:nth-child(12)').text());
					$("#mmpttvcs").val($(this).find('td:nth-child(13)').text());
					$("#mmpttcxdcs").val($(this).find('td:nth-child(14)').text());
					$("#mkttchccs").val($(this).find('td:nth-child(15)').text());
					$("#mkttdccs").val($(this).find('td:nth-child(16)').text());
					$("#mkttvcs").val($(this).find('td:nth-child(17)').text());
					$("#mkttcxdcs").val($(this).find('td:nth-child(18)').text());						
					$("#mttchccs").val($(this).find('td:nth-child(19)').text());
					$("#mttdccs").val($(this).find('td:nth-child(20)').text());
					$("#mttvcs").val($(this).find('td:nth-child(21)').text());
					$("#mttcxdcs").val($(this).find('td:nth-child(22)').text());						
					$("#idnghiatrangcs").val($(this).find('td:nth-child(23)').text());
			   }); 
			}
		    		  
		);
$(document).ready(function() {
  $('#trang').change(function() {
		//alert(this.value);
		//$('#hsls').load('ajax_lietsy.php?id='+this.value);		
		//$('#thannhan').load('ajax_thannhan.php');
		//$('#giayto').load('ajax_giayto.php');	
		window.location.href="nghiatrang.php?id="+this.value+">0";
  });
 });		
</script>
<?php
if(isset($_POST["capnhatts"]))
	{	
		if ($madv[3]=="Tỉnh")
		{
			$sqlup = "Update nghiatrang Set tennghiatrang='".$_POST['tennghiatrangcs']."', xa='".$_POST['xacs']."', huyen='".$_POST['huyencs']."', capql='".$_POST['capqlcs']."', ";
			$sqlup = $sqlup."cuthek='".$_POST['cuthekcs']."',mddttchc=".$_POST['mddttchccs'].", mddttdc=".$_POST['mddttdccs'].", mddttv=".$_POST['mddttvcs'].", ";
			$sqlup = $sqlup."mddttcxd=".$_POST['mddttcxdcs'].", mmpttchc=".$_POST['mmpttchccs'].", mmpttdc=".$_POST['mmpttdccs'].", mmpttv=".$_POST['mmpttvcs'].", ";
			$sqlup = $sqlup."mmpttcxd=".$_POST['mmpttcxdcs'].", mkttchc=".$_POST['mkttchccs'].", mkttdc=".$_POST['mkttdccs'].", ";
			$sqlup = $sqlup."mkttv=".$_POST['mkttvcs'].", mkttcxd=".$_POST['mkttcxdcs'].", mttchc=".$_POST['mttchccs'].", ";
			$sqlup = $sqlup."mttdc=".$_POST['mttdccs'].", mttv=".$_POST['mttvcs'].", mttcxd=".$_POST['mttcxdcs'];		
			$sqlup = $sqlup." where idnghiatrang = ".$_POST['idnghiatrangcs'];
			$kq=mysqli_query($con,$sqlup);
		}
	}
if(isset($_POST["themmoi"]))
	{	
		if ($madv[3]=="Tỉnh")
		{
			$sqlup = "Insert into nghiatrang Set tennghiatrang='".$_POST['tennghiatrang']."', xa='".$_POST['xa']."', huyen='".$_POST['huyen']."', capql='".$_POST['capql']."', ";
			$sqlup = $sqlup."cuthek='".$_POST['cuthek']."',mddttchc=".$_POST['mddttchc'].", mddttdc=".$_POST['mddttdc'].", mddttv=".$_POST['mddttv'].", ";
			$sqlup = $sqlup."mddttcxd=".$_POST['mddttcxd'].", mmpttchc=".$_POST['mmpttchc'].", mmpttdc=".$_POST['mmpttdc'].", mmpttv=".$_POST['mmpttv'].", ";
			$sqlup = $sqlup."mmpttcxd=".$_POST['mmpttcxd'].", mkttchc=".$_POST['mkttchc'].", mkttdc=".$_POST['mkttdc'].", ";
			$sqlup = $sqlup."mkttv=".$_POST['mkttv'].", mkttcxd=".$_POST['mkttcxd'].", mttchc=".$_POST['mttchc'].", ";
			$sqlup = $sqlup."mttdc=".$_POST['mttdc'].", mttv=".$_POST['mttv'];
			//echo $sqlup;	
			$kq=mysqli_query($con,$sqlup);
		}
	}	
?>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Danh sách nghĩa trang liệt sỹ <span style = "float:right">Tổng hồ sơ: <?php echo '105';?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></h4>
		</div>
			<div class="modal-body">
<form role='form' method='POST' class='form-horizontal form-groups-bordered'>
<?php	
if ($madv[3]=="Tỉnh")
{					
		echo "<a style = 'float:right; background-color:rgb(83, 181, 166)' onclick='showAjaxModalhs();' class='btn btn-success'>
			<i class='entypo-new'></i>Thêm nghĩa trang
		</a>";
}
?>
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModaldc();" class='btn btn-success'>
			<i class='entypo-print'></i>Danh sách nghĩa trang
		</a>
		<label class='col-sm-2'>Trang số:</label>
<?php
$ahs = explode('>',$_GET['id']);
$j = $ahs[0];
		echo "<div  class='col-sm-2' style='margin-top:-7px'>";
			echo "<select style='margin-left:-90px;' name='trang' class='form-control' id='trang'>";
	$ls =  array(array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22"));		
	$cs=0;
	$sql="select * from nghiatrang";
	$sql1=mysqli_query($con,$sql);
	$kq = 0;$kq1 = 1;
	if ($j == 1)
		echo "<option selected='selected' value='$kq1'>$kq1</option>";
	else
		echo "<option value='$kq1'>$kq1</option>";
	while($row=mysqli_fetch_array($sql1)){					
		$ls[$cs][0] = $row['tennghiatrang'];
		$ls[$cs][1] = $row['xa'];
		$ls[$cs][2] = $row['huyen'];
		$ls[$cs][3] = $row['capql'];
		$ls[$cs][4] = $row['cuthek'];
		$ls[$cs][5] = $row['mddttchc'];
		$ls[$cs][6] = $row['mddttdc'];
		$ls[$cs][7] = $row['mddttv'];
		$ls[$cs][8] = $row['mddttcxd'];
		$ls[$cs][9] = $row['mmpttchc'];
		$ls[$cs][10] = $row['mmpttdc'];
		$ls[$cs][11] = $row['mmpttv'];
		$ls[$cs][12] = $row['mmpttcxd'];
		$ls[$cs][13] = $row['mkttchc'];
		$ls[$cs][14] = $row['mkttdc'];
		$ls[$cs][15] = $row['mkttv'];
		$ls[$cs][16] = $row['mkttcxd'];
		$ls[$cs][17] = $row['mttchc'];
		$ls[$cs][18] = $row['mttdc'];		
		$ls[$cs][19] = $row['mttv'];
		$ls[$cs][20] = $row['mttcxd'];
		$ls[$cs][21] = $row['idnghiatrang'];		
		$cs = $cs + 1;
	$kq=$kq + 1;
	if ($kq == 15)
	{
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
					<th style="background-color:rgb(54, 169, 224)" width="6%"><strong style='color:rgb(255, 255, 225)'>STT</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="57%"><strong style='color:rgb(255, 255, 225)'>Tên Nghĩa trang</strong></th>					
					<th style="background-color:rgb(54, 169, 224)" width="12%"><strong style='color:rgb(255, 255, 225)'>Xã</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="12%"><strong style='color:rgb(255, 255, 225)'>Huyện</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="6%"><strong style='color:rgb(255, 255, 225)'>Cấp quản lý</strong></th>					
					<th style="background-color:rgb(54, 169, 224); display:none" width="6%"><strong style='color:rgb(255, 255, 225)'>Cụ thể khác</strong></th>					
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>mddttchc</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>mddttdc</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>mddttv</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>mddttcxd</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>mmpttchc</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>mmpttdc</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>mmpttv</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>mmpttcxd</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>mkttchc</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>mkttdc</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>mkttv</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>mkttcxd</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>mttchc</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>mttdc</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>mttv</strong></th>					
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>mttcxd</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>idnghiatrang</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="7%"><strong style='color:rgb(255, 255, 225)'>Thao tác</strong></th>
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
					echo "<td style='text-align: left;'>".$ls[$i][0]."</td>";
					echo "<td>".$ls[$i][1]."</td>";
					echo "<td>".$ls[$i][2]."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][3]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][4]."</td>";	
					echo "<td style='text-align: left; display:none'>".$ls[$i][5]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][6]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][7]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][8]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][9]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][10]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][11]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][12]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][13]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][14]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][15]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][16]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][17]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][18]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][19]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][20]."</td>";									
					echo "<td style='text-align: left; display:none'>".$ls[$i][21]."</td>";
					if ($madv[3]=='Tỉnh')
					{
						echo"<td>					
								<a href=\"xoant.php?id=".$ls[$i][21]."\"  title='Xóa nghĩa trang liệt sỹ' onclick=\"return confirm('Bạn muốn xóa nghĩa trang này?')\" class='btn btn-red '>
									</i>
									Xóa
								</a>
							</td>";
					}
					else
					{
						echo"<td></td>";
					}
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
							<label for="field-3" class="col-sm-4 control-label">Tên nghĩa trang:</label>
							<div class="col-sm-8">
								<input name="tennghiatrang" type="text" class="form-control" id="tennghiatrang">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Xã (Phường):</label>
							<div class="col-sm-2">
								<input name="xa" type="text" class="form-control" id="xa">
							</div>		
							<label for="field-3" class="col-sm-4 control-label">Quận (Huyện):</label>
							<div class="col-sm-2">
								<input name="huyen" type="text" class="form-control" id="huyen">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Cấp quản lý:</label>
							<div class="col-sm-2">
								<select name="capql" id="capql" class="form-control">
									<option value="1. Tỉnh">1. Tỉnh</option>
									<option value="2. Huyện">2. Huyện</option>
									<option value="3. Xã">3. Xã</option>
									<option value="4. Khác">4. Khác</option>
								</select>
							</div>		
							<label for="field-3" class="col-sm-4 control-label">Cụ thể (khác):</label>
							<div class="col-sm-2">
								<input name="cuthek" type="text" class="form-control" id="cuthek">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ đầy đủ thông tin có hài cốt:</label>
							<div class="col-sm-2">
								<input name="mddttchc" type="text" class="form-control" id="mddttchc">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ đầy đủ thông tin không hài cốt đã di chuyển:</label>
							<div class="col-sm-2">
								<input name="mddttdc" type="text" class="form-control" id="mddttdc">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ đầy đủ thông tin không hài cốt mộ vọng:</label>
							<div class="col-sm-2">
								<input name="mddttv" type="text" class="form-control" id="mddttv">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ đầy đủ thông tin chưa xác định:</label>
							<div class="col-sm-2">
								<input name="mddttcxd" type="text" class="form-control" id="mddttcxd">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ có một phần thông tin có hài cốt:</label>
							<div class="col-sm-2">
								<input name="mmpttchc" type="text" class="form-control" id="mmpttchc">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ có một phần thông tin không hài cốt đã di chuyển:</label>
							<div class="col-sm-2">
								<input name="mmpttdc" type="text" class="form-control" id="mmpttdc">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ có một phần thông tin không hài cốt mộ vọng:</label>
							<div class="col-sm-2">
								<input name="mmpttv" type="text" class="form-control" id="mmpttv">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ có một phần thông tin chưa xác định:</label>
							<div class="col-sm-2">
								<input name="mmpttcxd" type="text" class="form-control" id="mmpttcxd">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ không có thông tin có hài cốt:</label>
							<div class="col-sm-2">
								<input name="mkttchc" type="text" class="form-control" id="mkttchc">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ không có thông tin không hài cốt đã di chuyển:</label>
							<div class="col-sm-2">
								<input name="mkttdc" type="text" class="form-control" id="mkttdc">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ không có thông tin không hài cốt mộ vọng:</label>
							<div class="col-sm-2">
								<input name="mkttv" type="text" class="form-control" id="mkttv">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ không có thông tin chưa xác định:</label>
							<div class="col-sm-2">
								<input name="mkttcxd" type="text" class="form-control" id="mkttcxd">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ tập thể có hài cốt:</label>
							<div class="col-sm-2">
								<input name="mttchc" type="text" class="form-control" id="mttchc">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ tập thể không hài cốt đã di chuyển:</label>
							<div class="col-sm-2">
								<input name="mttdc" type="text" class="form-control" id="mttdc">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ tập thể không hài cốt mộ vọng:</label>
							<div class="col-sm-2">
								<input name="mttv" type="text" class="form-control" id="mttv">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ tập thể chưa xác định:</label>
							<div class="col-sm-2">
								<input name="mttcxd" type="text" class="form-control" id="mttcxd">
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
							<label for="field-3" class="col-sm-4 control-label">Tên nghĩa trang:</label>
							<div class="col-sm-8">
								<input name="tennghiatrangcs" type="text" class="form-control" id="tennghiatrangcs">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Xã (Phường):</label>
							<div class="col-sm-2">
								<input name="xacs" type="text" class="form-control" id="xacs">
							</div>		
							<label for="field-3" class="col-sm-4 control-label">Quận (Huyện):</label>
							<div class="col-sm-2">
								<input name="huyencs" type="text" class="form-control" id="huyencs">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Cấp quản lý:</label>
							<div class="col-sm-2">
								<select name="capqlcs" id="capqlcs" class="form-control">
									<option value="1. Tỉnh">1. Tỉnh</option>
									<option value="2. Huyện">2. Huyện</option>
									<option value="3. Xã">3. Xã</option>
									<option value="4. Khác">4. Khác</option>
								</select>
							</div>		
							<label for="field-3" class="col-sm-4 control-label">Cụ thể (khác):</label>
							<div class="col-sm-2">
								<input name="cuthekcs" type="text" class="form-control" id="cuthekcs">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ đầy đủ thông tin có hài cốt:</label>
							<div class="col-sm-2">
								<input name="mddttchccs" type="text" class="form-control" id="mddttchccs">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ đầy đủ thông tin không hài cốt đã di chuyển:</label>
							<div class="col-sm-2">
								<input name="mddttdccs" type="text" class="form-control" id="mddttdccs">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ đầy đủ thông tin không hài cốt mộ vọng:</label>
							<div class="col-sm-2">
								<input name="mddttvcs" type="text" class="form-control" id="mddttvcs">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ đầy đủ thông tin chưa xác định:</label>
							<div class="col-sm-2">
								<input name="mddttcxdcs" type="text" class="form-control" id="mddttcxdcs">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ có một phần thông tin có hài cốt:</label>
							<div class="col-sm-2">
								<input name="mmpttchccs" type="text" class="form-control" id="mmpttchccs">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ có một phần thông tin không hài cốt đã di chuyển:</label>
							<div class="col-sm-2">
								<input name="mmpttdccs" type="text" class="form-control" id="mmpttdccs">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ có một phần thông tin không hài cốt mộ vọng:</label>
							<div class="col-sm-2">
								<input name="mmpttvcs" type="text" class="form-control" id="mmpttvcs">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ có một phần thông tin chưa xác định:</label>
							<div class="col-sm-2">
								<input name="mmpttcxdcs" type="text" class="form-control" id="mmpttcxdcs">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ không có thông tin có hài cốt:</label>
							<div class="col-sm-2">
								<input name="mkttchccs" type="text" class="form-control" id="mkttchccs">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ không có thông tin không hài cốt đã di chuyển:</label>
							<div class="col-sm-2">
								<input name="mkttdccs" type="text" class="form-control" id="mkttdccs">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ không có thông tin không hài cốt mộ vọng:</label>
							<div class="col-sm-2">
								<input name="mkttvcs" type="text" class="form-control" id="mkttvcs">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ không có thông tin chưa xác định:</label>
							<div class="col-sm-2">
								<input name="mkttcxdcs" type="text" class="form-control" id="mkttcxdcs">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ tập thể có hài cốt:</label>
							<div class="col-sm-2">
								<input name="mttchccs" type="text" class="form-control" id="mttchccs">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ tập thể không hài cốt đã di chuyển:</label>
							<div class="col-sm-2">
								<input name="mttdccs" type="text" class="form-control" id="mttdccs">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ tập thể không hài cốt mộ vọng:</label>
							<div class="col-sm-2">
								<input name="mttvcs" type="text" class="form-control" id="mttvcs">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số mộ tập thể chưa xác định:</label>
							<div class="col-sm-2">
								<input name="mttcxdcs" type="text" class="form-control" id="mttcxdcs">
							</div>
							<div class="col-sm-10">
								<input name="idnghiatrangcs" type="text" class="form-control" style="display:none" id="idnghiatrangcs">
							</div>
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
							<input type="submit" name="capnhatts" class="btn btn-blue" value = "Cập nhật">							
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
			return "nghiatrang.php?id=" + $('#trang').val() + ">" + $('#idnghiatrangcs').val();			
    }
	function get_action1() {				
			return "nghiatrang.php?id="+$('#trangm').val()+">0";			
    }
</script>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>