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
function showAjaxModaltim()
{		
	jQuery('#modal-9').modal('show', {backdrop: 'static'});	
}
function showAjaxModaldc()
{		
	//window.location.href="/Thoaikx/DsMLS16.php?id="+$("#xain").val()+">"+$("#huyenin").val();
	jQuery('#modal-2').modal('show', {backdrop: 'static'});
}	
function showAjaxModalnhan()
{		
	jQuery('#modal-3').modal('show', {backdrop: 'static'});	
}
</script>
<script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() 
			{  
			   $('table tbody tr').dblclick(function() 
			   {
					jQuery('#modal-7').modal('show', {backdrop: 'static'});
					$("#idbhcs").val($(this).find('td:nth-child(14)').text());	
					$("#nguoicccs").val($(this).find('td:nth-child(2)').text());
					$("#doituongcs").val($(this).find('td:nth-child(15)').text());
					//$("#thannhancs").val($(this).find('td:nth-child(4)').text());
					$("#quanhecs").val($(this).find('td:nth-child(5)').text());
					$("#ngaysinhcs").val($(this).find('td:nth-child(8)').text());
					$("#nguyenquancs").val($(this).find('td:nth-child(9)').text());
					$("#truquancs").val($(this).find('td:nth-child(10)').text());
					$("#ngaycapbhytcs").val($(this).find('td:nth-child(6)').text());
					$("#tanggiamcs").val($(this).find('td:nth-child(11)').text());
					$("#lydotgcs").val($(this).find('td:nth-child(7)').text());	
					$("#xacs").val($(this).find('td:nth-child(12)').text());
					$("#huyencs").val($(this).find('td:nth-child(13)').text());	
			   }); 
			}
		    		  
		);
$(document).ready(function() {
  $('#trang').change(function() {
		window.location.href="baohiemtinhbg.php?id="+this.value+">"+$("#stxx").val()+">"+$("#nguoiccxx").val()+">"+$("#thannhanxx").val()+">"+$("#doituongxx").val()+">"+$("#tenxaxx").val()+">";
  });
 });		
</script>
<?php
$dkkhac=$_GET['id'];
$ahs = explode('>',$_GET['id']);
$tongst=$ahs[1];
if(isset($_POST["capnhatts"]))
{
	$sqlup = "Update baohiem Set nguoicc='".$_POST['nguoicccs']."', doituong='".$_POST['doituongcs']."',quanhe='".$_POST['quanhecs']."', ";
	$sqlup = $sqlup."ngaysinh='".$_POST['ngaysinhcs']."',nguyenquan='".$_POST['nguyenquancs']."', truquan='".$_POST['truquancs']."', ngaycapbhyt='".$_POST['ngaycapbhytcs']."', ";
	$sqlup = $sqlup."tanggiam='".$_POST['tanggiamcs']."', lydotg='".$_POST['lydotgcs']."'";
	$sqlup = $sqlup." where idbh = ".$_POST['idbhcs'];
	$kq=mysqli_query($con,$sqlup);
	
}
if(isset($_POST["themmoi"]))
{
	$xh=explode('-',$_POST['xahuyen']);
	$sqlup = "Insert into baohiem Set nguoicc='".$_POST['nguoicc']."', doituong='".$_POST['doituong']."',quanhe='".$_POST['quanhe']."', ";
	$sqlup = $sqlup."ngaysinh='".$_POST['ngaysinh']."',nguyenquan='".$_POST['nguyenquan']."', truquan='".$_POST['truquan']."', ngaycapbhyt='".$_POST['ngaycapbhyt']."', ";
	$sqlup = $sqlup."tanggiam='".$_POST['tanggiam']."', lydotg='".$_POST['lydotg']."',xa='".str_replace('_',' ',$xh[1])."', huyen='".str_replace('_',' ',$xh[0])."'";
	$kq=mysqli_query($con,$sqlup);
}
if (isset($_POST["nhandl"]))
{	
	/* require_once 'Classes/PHPExcel.php';
	require_once 'Classes/PHPExcel/IOFactory.php';
	//$inputFileName = str_replace('\\','/',$_POST['ddfile']);//'D:/aa/Binhdinh/aa.xls';	
	$inputFileName = "D:/aa/BacGiangxx/tachxa/TNNCC/YENTHE.xls";//'D:/aa/Binhdinh/aa.xls';
	$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    $objPHPExcel = $objReader->load($inputFileName);
	for($d=$_POST['tudong'];$d<=$_POST['dendong'];$d++){		
		$sqlin = "Insert into baohiem Set nguoicc='".$objPHPExcel->getActiveSheet()->getCell('B'.$d)->getValue()."'";
		$sqlin = $sqlin.", doituong='tnncc'";		
		$sqlin = $sqlin.", quanhe='".$objPHPExcel->getActiveSheet()->getCell('H'.$d)->getValue()."'";
		$sqlin = $sqlin.",ngaysinh='".$objPHPExcel->getActiveSheet()->getCell('D'.$d)->getValue()."'";
		if ($objPHPExcel->getActiveSheet()->getCell('E'.$d)->getValue()=='X' || $objPHPExcel->getActiveSheet()->getCell('E'.$d)->getValue()=='x')
			$sqlin = $sqlin.",nguyenquan='Nữ'";
		else
			$sqlin = $sqlin.",nguyenquan='Nam'";
		$sqlin = $sqlin.", truquan='".$objPHPExcel->getActiveSheet()->getCell('F'.$d)->getValue()."'";
		$sqlin = $sqlin.", ngaycapbhyt='".$objPHPExcel->getActiveSheet()->getCell('C'.$d)->getValue()."'";		
		$sqlin = $sqlin.",tanggiam='".$objPHPExcel->getActiveSheet()->getCell('I'.$d)->getValue()."'";
		$sqlin = $sqlin.", lydotg='".$objPHPExcel->getActiveSheet()->getCell('G'.$d)->getValue()."'";
		if (trim($objPHPExcel->getActiveSheet()->getCell('F'.$d)->getValue())=='T. T Cầu Gồ')
			$sqlin = $sqlin. ",xa='Thị Trấn Cầu Gồ'";
		else if (trim($objPHPExcel->getActiveSheet()->getCell('F'.$d)->getValue())=='T. T Bố Hạ')
			$sqlin = $sqlin. ",xa='Thị Trấn Bố Hạ'";
		else
			$sqlin = $sqlin. ",xa='Xã ".trim($objPHPExcel->getActiveSheet()->getCell('F'.$d)->getValue())."'";		
		$sqlin = $sqlin. ", huyen='Yên Thế'";
		$kq=mysqli_query($con,$sqlin);
	} */
}	
?>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Hồ sơ mua bảo hiểm y tế <span style = "float:right">Tổng hồ sơ: <?php echo $tongst;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></h4>
		</div>
			<div class="modal-body">
<form role='form' method='POST' class='form-horizontal form-groups-bordered'>	
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModalhs();" class='btn btn-success'>
			<i class='entypo-new'></i>Thêm mới
		</a>
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModaldc();" class='btn btn-success'>
			<i class='entypo-print'></i>In
		</a>
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModaltim();" class='btn btn-success'>
			<i class='entypo-print'></i>Tìm kiếm
		</a>
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModalnhan();" class='btn btn-success'>
			<i class='entypo-print'></i>Nhận file xls
		</a>
		<input name="xain" type="text" class="form-control" style="display:none" id="xain" value = "">
		<input name="huyenin" type="text" class="form-control" style="display:none" id="huyenin" value = "">
		<label class='col-sm-2'>Trang số:</label>
<?php
$j = $ahs[0];$sql="";$kq=0;$sotr=0;$sotr= (int)(1000/15);$sotrthieu=1000/15;
if ($sotrthieu-$sotr >0)
	$sotr=$sotr+1;
		echo "<div  class='col-sm-2' style='margin-top:-7px'>";
			echo "<select style='margin-left:-90px;' name='trang' class='form-control' id='trang'>";
					
	// abc	
		for($n=0;$n<$sotr;$n++)
		{
						
				$kq = $kq + 1;
				if ($j == $kq)	
					echo "<option selected='selected' value='$kq'>$kq</option>";	
				else
					echo "<option value='$kq'>$kq</option>";	
			
		}
		echo "</select>";
		echo "</div>";
	// abc
if ($ahs[6]=="timkiem")
{	
	$sql="select * from baohiem where nguoicc like '%".$ahs[2]."%' and thannhan like '%".$ahs[3]."%' and doituong Like '%".$ahs[4]."%' and xa Like '".str_replace('_',' ',$ahs[5])."%'";	
	echo "<input name='nguoiccxx' type='text' class='form-control' style='display:none' id='nguoiccxx' value = '".$ahs[2]."'>";
	echo "<input name='thannhanxx' type='text' class='form-control' style='display:none' id='thannhanxx' value = '".$ahs[3]."'>";
	echo "<input name='doituongxx' type='text' class='form-control' style='display:none' id='doituongxx' value = '".$ahs[4]."'>";
	echo "<input name='tenxaxx' type='text' class='form-control' style='display:none' id='tenxaxx' value = '".$ahs[5]."'>";
	echo "<input name='stxx' type='text' class='form-control' style='display:none' id='stxx' value = '".$tongst."'>";
}
else
{
	$sql="select * from baohiem LIMIT ".(15*($j-1)).",15";
	echo "<input name='nguoiccxx' type='text' class='form-control' style='display:none' id='nguoiccxx' value = ''>";
	echo "<input name='thannhanxx' type='text' class='form-control' style='display:none' id='thannhanxx' value = ''>";
	echo "<input name='doituongxx' type='text' class='form-control' style='display:none' id='doituongxx' value = ''>";
	echo "<input name='tenxaxx' type='text' class='form-control' style='display:none' id='tenxaxx' value = ''>";
	echo "<input name='stxx' type='text' class='form-control' style='display:none' id='stxx' value = '".$tongst."'>";
}		
	$ls =  array(array("1","2","3","4","5","6","7","8","9","10","11","12","13"));		
	$cs=0;	
	$sql1=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($sql1)){					
		$ls[$cs][0] = $row['idbh'];
		$ls[$cs][1] = $row['nguoicc'];
		$ls[$cs][2] = $row['doituong'];
		$ls[$cs][3] = $row['thannhan'];
		$ls[$cs][4] = $row['quanhe'];
		$ls[$cs][5] = $row['ngaysinh'];
		$ls[$cs][6] = $row['nguyenquan'];
		$ls[$cs][7] = $row['truquan'];
		$ls[$cs][8] = $row['ngaycapbhyt'];
		$ls[$cs][9] = $row['tanggiam'];
		$ls[$cs][10] = $row['lydotg'];
		$ls[$cs][11] = $row['xa'];
		$ls[$cs][12] = $row['huyen'];
		$cs = $cs + 1;
	//$kq=$kq + 1;
	//if ($kq == 15)
	//{
	//	$kq = 0;
	//	$kq1 = $kq1 + 1;
	//	if ($j == $kq1)	
	//		echo "<option selected='selected' value='$kq1'>$kq1</option>";	
	//	else
	//		echo "<option value='$kq1'>$kq1</option>";	
	//}
	}
	//if ($j == 0)
		//echo "<option selected='selected' value='$kq1'>$kq1</option>";		
			//echo "</select>";
		//echo "</div>";
?>		
	<div id = "hsls" class="table-responsive">
		<table class="table table-hover table-striped table-bordered table-advanced tablesorter display" id="table-2">
			<thead>
				<tr>					
					<th style="background-color:rgb(54, 169, 224)" width="6%"><strong style='color:rgb(255, 255, 225)'><p>STT</p></strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="20%"><strong style='color:rgb(255, 255, 225)'><p>Người có công</p></strong></th>					
					<th style="background-color:rgb(54, 169, 224)" width="15%"><strong style='color:rgb(255, 255, 225)'><p>Đối tượng</p></strong></th>
					<th style="background-color:rgb(54, 169, 224);display:none" width="15%"><strong style='color:rgb(255, 255, 225)'>Thân nhân<br>người có công</strong></th>
					<th style="background-color:rgb(54, 169, 224);display:none" width="6%"><strong style='color:rgb(255, 255, 225)'>Mối quan hệ với<br>người có công</strong></th>					
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'><p>Mã thẻ</p></strong></th>					
					<th style="background-color:rgb(54, 169, 224)" width="6%"><strong style='color:rgb(255, 255, 225)'>Nơi đăng<br>ký KB</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ngaysinh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>nguyenquan</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>truquan</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>lydotg</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>xa</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>huyen</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>idbh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>idbh</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="10%"><strong style='color:rgb(255, 255, 225)'><p>Đơn vị</p></strong></th>
				</tr>				
			</thead>
			<tbody id="rowlist" class="rowlist">
<?php

			for($i=0;$i<$cs;$i++)
			{
				$a = $i + 1;
				if ($i < $cs)
				{					
				echo "<tr>";					
					echo "<td>$a</td>";
					echo "<td style='text-align: left;'>".$ls[$i][1]."</td>";
					//echo "<td style='text-align: left;'>".$ls[$i][2]."</td>";
					if ($ls[$i][2]=="bmvn")
						echo "<td style='text-align: left;'>Mã NCC</td>";
					else if ($ls[$i][2]=="ncc")
						echo "<td style='text-align: left;'>Người có công</td>";
					else if ($ls[$i][2]=="nd150")
						echo "<td style='text-align: left;'>Nghị định 150</td>";
					else if ($ls[$i][2]=="qd62")
						echo "<td style='text-align: left;'>Quyết định 62</td>";
					else if ($ls[$i][2]=="qd290")
						echo "<td style='text-align: left;'>Quyết định 290</td>";
					else if ($ls[$i][2]=="tnls")
						echo "<td style='text-align: left;'>Thân nhân liệt sỹ</td>";
					else if ($ls[$i][2]=="tnncc")
						echo "<td style='text-align: left;'>Thân nhân người có công</td>";
					else if ($ls[$i][2]=="tnxp")
						echo "<td style='text-align: left;'>Thanh niên xung phong</td>";					
					else if ($ls[$i][2]=="kh")
						echo "<td style='text-align: left;'>Đối tượng khác</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][3]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][4]."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][8]."</td>";	
					echo "<td style='text-align: left;'>".$ls[$i][10]."</td>";
					echo "<td style='text-align: left;display:none'>".$ls[$i][5]."</td>";					
					echo "<td style='text-align: left; display:none'>".$ls[$i][6]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][7]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][9]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][11]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][12]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][0]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][2]."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][11]."</td>";
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
							<label for="field-3" class="col-sm-2 control-label">Người có công:</label>
							<div class="col-sm-4">
								<input name="nguoicc" type="text" class="form-control" id="nguoicc">
							</div>		
							<label for="field-3" class="col-sm-2 control-label">Thuộc đối tượng:</label>
							<div class="col-sm-4">								
								<select name="doituong" id="doituong" class="form-control">
									<option value="bmvn">Mã NCC</option>
									<option value="ncc">Người có công</option>
									<option value="nd150">Nghị định 150</option>
									<option value="qd62">Quyết định 62</option>
									<option value="qd290">Quyết định 290</option>
									<option value="tnls">Thân nhân liệt sỹ</option>
									<option value="tnncc">Thân nhân người có công</option>
									<option value="tnxp">Thanh niên xung phong</option>									
									<option value="kh">Đối tượng khác</option>
								</select>
							</div>														
							<label for="field-3" class="col-sm-2 control-label">Ngày sinh:</label>
							<div class="col-sm-4">
								<input name="ngaysinh" type="text" class="form-control" id="ngaysinh">
							</div>							
							<label for="field-3" class="col-sm-2 control-label">Giới tính:</label>
							<div class="col-sm-4">
								<select name="nguyenquan" id="nguyenquan" class="form-control">
									<option value="Nam">Nam</option>
									<option value="Nữ">Nữ</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Số CMND:</label>
							<div class="col-sm-10">
								<input name="quanhe" type="text" class="form-control" id="quanhe">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Trú quán:</label>
							<div class="col-sm-10">
								<input name="truquan" type="text" class="form-control" id="truquan">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Mã số thẻ:</label>
							<div class="col-sm-4">
								<input name="ngaycapbhyt" type="text" class="form-control" id="ngaycapbhyt">
							</div>							
							<label for="field-3" class="col-sm-2 control-label">Ngày hưởng (bhyt):</label>
							<div class="col-sm-4">
								<input name="tanggiam" type="text" class="form-control" data-mask="date" id="tanggiam">								
							</div>
							<label for="field-3" class="col-sm-2 control-label">Nơi đăng ký KB:</label>
							<div class="col-sm-10">
								<input name="lydotg" type="text" class="form-control" id="lydotg">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tên xã:</label>
							<div class="col-sm-10">								
								<select name="xahuyen" id="xahuyen" class="form-control">
									<?php
									$sqltcml = "Select tenxa,tenhuyen From xa inner join huyen on xa.tthuyen=huyen.tthuyen";
									$qrtcml = mysqli_query($con,$sqltcml);			
									while($rtcml=@mysqli_fetch_array($qrtcml))
									{
										echo "<option value=".str_replace(' ','_',$rtcml['tenhuyen']).'-'.str_replace(' ','_',$rtcml['tenxa']).">".$rtcml['tenhuyen'].' - '.$rtcml['tenxa']."</option>";
									}
									?>
									<option value=""></option>
								</select>
							</div>
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
							<label for="field-3" class="col-sm-2 control-label">Người có công:</label>
							<div class="col-sm-4">
								<input name="nguoicccs" type="text" class="form-control" id="nguoicccs">
							</div>		
							<label for="field-3" class="col-sm-2 control-label">Thuộc đối tượng:</label>
							<div class="col-sm-4">								
								<select name="doituongcs" id="doituongcs" class="form-control">
									<option value="bmvn">Mã NCC</option>
									<option value="ncc">Người có công</option>
									<option value="nd150">Nghị định 150</option>
									<option value="qd62">Quyết định 62</option>
									<option value="qd290">Quyết định 290</option>
									<option value="tnls">Thân nhân liệt sỹ</option>
									<option value="tnncc">Thân nhân người có công</option>
									<option value="tnxp">Thanh niên xung phong</option>									
									<option value="kh">Đối tượng khác</option>
								</select>
							</div>														
							<label for="field-3" class="col-sm-2 control-label">Ngày sinh:</label>
							<div class="col-sm-4">
								<input name="ngaysinhcs" type="text" class="form-control" id="ngaysinhcs">
							</div>							
							<label for="field-3" class="col-sm-2 control-label">Giới tính:</label>
							<div class="col-sm-4">								
								<select name="nguyenquancs" id="nguyenquancs" class="form-control">
									<option value="Nam">Nam</option>
									<option value="Nữ">Nữ</option>
								</select>	
							</div>
							<label for="field-3" class="col-sm-2 control-label">Số CMND:</label>
							<div class="col-sm-10">
								<input name="quanhecs" type="text" class="form-control" id="quanhecs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Trú quán:</label>
							<div class="col-sm-10">
								<input name="truquancs" type="text" class="form-control" id="truquancs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Mã số thẻ:</label>
							<div class="col-sm-4">
								<input name="ngaycapbhytcs" type="text" class="form-control" id="ngaycapbhytcs">
							</div>							
							<label for="field-3" class="col-sm-2 control-label">Ngày hưởng (bhyt):</label>
							<div class="col-sm-4">
								<input name="tanggiamcs" type="text" class="form-control" data-mask="date" id="tanggiamcs">								
							</div>
							<label for="field-3" class="col-sm-2 control-label">Nơi đăng ký KB:</label>
							<div class="col-sm-10">
								<input name="lydotgcs" type="text" class="form-control" id="lydotgcs">
							</div>	
							<label for="field-3" class="col-sm-2 control-label">Tên huyện:</label>
							<div class="col-sm-4">
								<input name="huyencs" type="text" class="form-control" id="huyencs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tên xã:</label>
							<div class="col-sm-4">
								<input name="xacs" type="text" class="form-control" id="xacs">
							</div>
							<div class="col-sm-10">
								<input name="idbhcs" type="text" class="form-control" style="display:none" id="idbhcs">
							</div>
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
							<input type="submit" name="capnhatts" class="btn btn-blue" value = "Cập nhật">							
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
							<h4 style = "text-align:center; color:rgb(10, 10, 10)">TÌM KIẾM HỒ SƠ BẢO HIỂM Y TẾ</h4>								
							<label for="field-3" class="col-sm-3 control-label">Họ và tên người có công:</label>
							<div class="col-sm-9">
								<input name="nguoicctim" type="text" class="form-control" id="nguoicctim">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Thân nhân người có công:</label>
							<div class="col-sm-9">
								<input name="thannhantim" type="text" class="form-control" id="thannhantim">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Đối tượng:</label>
							<div class="col-sm-9">								
								<select name="doituongtim" id="doituongtim" class="form-control">
									<option value="bmvn">Mã NCC</option>
									<option value="ncc">Người có công</option>
									<option value="nd150">Nghị định 150</option>
									<option value="qd62">Quyết định 62</option>
									<option value="qd290">Quyết định 290</option>
									<option value="tnls">Thân nhân liệt sỹ</option>
									<option value="tnncc">Thân nhân người có công</option>
									<option value="tnxp">Thanh niên xung phong</option>									
									<option value="kh">Đối tượng khác</option>
								</select>
							</div>	
							<label for="field-3" class="col-sm-3 control-label">Tên xã:</label>
							<div class="col-sm-9">								
								<select name="tenxatim" id="tenxatim" class="form-control">
									<?php
									$sqltcml = "Select tenxa,tenhuyen From xa inner join huyen on xa.tthuyen=huyen.tthuyen";
									$qrtcml = mysqli_query($con,$sqltcml);			
									while($rtcml=@mysqli_fetch_array($qrtcml))
									{
										echo "<option value=".str_replace(' ','_',$rtcml['tenxa']).">".$rtcml['tenhuyen'].' - '.$rtcml['tenxa']."</option>";
									}
									?>
									<option value="" selected = "selected"></option>
								</select>
							</div>
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
							<input type="submit" name="chuyen" class="btn btn-blue" value = "Tìm kiếm" id = "hhhh1">							
					</form>						
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-2">
	<div class="modal-dialog">
		<div class="modal-content">				
			<div class="modal-body">				
					<form name="thoaiin" role='form' method='POST' action="reportbhyttinhbg.php" class='form-horizontal form-groups-bordered'>
						<div id = "sTTKK1" class="form-group">
							<label for="field-3" class="col-sm-3 control-label">Đối tượng:</label>
							<div class="col-sm-9">								
								<select name="doituongin" id="doituongin" class="form-control">
									<option value="bmvn">Mã NCC</option>
									<option value="ncc">Người có công</option>
									<option value="nd150">Nghị định 150</option>
									<option value="qd62">Quyết định 62</option>
									<option value="qd290">Quyết định 290</option>
									<option value="tnls">Thân nhân liệt sỹ</option>
									<option value="tnncc">Thân nhân người có công</option>
									<option value="tnxp">Thanh niên xung phong</option>									
									<option value="kh">Đối tượng khác</option>
								</select>
							</div>	
							<label for="field-3" class="col-sm-3 control-label">Tên xã:</label>
							<div class="col-sm-9">								
								<select name="tenxain" id="tenxain" class="form-control">
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
						</div>
							<input name="donvi" type="text" class="form-control" style="display:none" id="donvi" value="<?php echo $madv[0];?>">							
							<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
							<input type="submit" name="create1" class="btn btn-blue" value = "Tạo báo cáo">							
					</form>						
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-3">
	<div class="modal-dialog">
		<div class="modal-content">				
			<div class="modal-body">				
					<form name="thoainhdl" role='form' method='POST' class='form-horizontal form-groups-bordered'>
						<div id = "sTTKK1" class="form-group">
							<h4 style = "text-align:center; color:rgb(10, 10, 10)">CHỌN CÁC THÔNG SỐ ĐỂ NHẬN DỮ LIỆU</h4>
							<label for="field-3" class="col-sm-3 control-label">Bắt đầu tư dòng:</label>
							<div class="col-sm-9">
								<input name="tudong" type="text" class="form-control" id="tudong">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Đến tư dòng:</label>
							<div class="col-sm-9">
								<input name="dendong" type="text" class="form-control" id="dendong">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Đường dẫn đến file:</label>
							<div class="col-sm-9">
								<input name="ddfile" type="text" class="form-control" id="ddfile">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Đối tượng:</label>
							<div class="col-sm-9">								
								<select name="doituongnh" id="doituongnh" class="form-control">
									<option value="bmvn">Mã NCC</option>
									<option value="ncc">Người có công</option>
									<option value="nd150">Nghị định 150</option>
									<option value="qd62">Quyết định 62</option>
									<option value="qd290">Quyết định 290</option>
									<option value="tnls">Thân nhân liệt sỹ</option>
									<option value="tnncc">Thân nhân người có công</option>
									<option value="tnxp">Thanh niên xung phong</option>									
									<option value="kh">Đối tượng khác</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-3 control-label">Cột họ tên:</label>
							<div class="col-sm-3">
								<input name="cotht" type="text" class="form-control" id="cotht">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Cột mã thẻ:</label>
							<div class="col-sm-3">
								<input name="cotmt" type="text" class="form-control" id="cotmt">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Cột ngày sinh:</label>
							<div class="col-sm-3">
								<input name="cotns" type="text" class="form-control" id="cotns">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Cột giới tính:</label>
							<div class="col-sm-3">
								<input name="cotgt" type="text" class="form-control" id="cotgt">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Cột địa chỉ:</label>
							<div class="col-sm-3">
								<input name="cotdc" type="text" class="form-control" id="cotdc">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Cột mã nơi khám bệnh:</label>
							<div class="col-sm-3">
								<input name="cotnkb" type="text" class="form-control" id="cotnkb">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Cột số CMND:</label>
							<div class="col-sm-3">
								<input name="cotcmt" type="text" class="form-control" id="cotcmt">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Cột chi tiết đối tượng:</label>
							<div class="col-sm-3">
								<input name="cotcdt" type="text" class="form-control" id="cotcdt">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Tên Sheet cần nhận dữ liệu:</label>
							<div class="col-sm-9">
								<input name="tensh" type="text" class="form-control" id="tensh">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Tên xã:</label>
							<div class="col-sm-9">
								<input name="tenxa" type="text" class="form-control" id="tenxa">
							</div>
						</div>							
							<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
							<input type="submit" name="nhandl" class="btn btn-blue" value = "Nhân dữ liệu">							
					</form>						
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
    window.onsubmit = function() {
        document.thoaics.action = get_action();
		document.thoaimoi.action = get_action1();
		document.thoaichuyen.action = get_action2();
    }

    function get_action() {				
			return "baohiemtinhbg.php?id=1>"+$("#stxx").val();			
    }
	function get_action1() {				
			return "baohiemtinhbg.php?id=1>"+$("#stxx").val();
	}
	function get_action2() {				
			return "baohiemtinhbg.php?id=1>"+$("#stxx").val()+">"+$('#nguoicctim').val()+">"+$('#thannhantim').val()+">"+$('#doituongtim').val()+">"+$('#tenxatim').val()+">timkiem";		
    }
</script>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>