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
</script>
<script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() 
			{  
			   $('table tbody tr').dblclick(function() 
			   {
					jQuery('#modal-7').modal('show', {backdrop: 'static'});
					$("#idkpmocs").val($(this).find('td:nth-child(18)').text());	
					$("#soqdcs").val($(this).find('td:nth-child(2)').text());
					$("#ngaythangcs").val($(this).find('td:nth-child(3)').text());
					$("#hotenlscs").val($(this).find('td:nth-child(4)').text());
					$("#nguyenquancs").val($(this).find('td:nth-child(9)').text());
					$("#capbacchucvucs").val($(this).find('td:nth-child(10)').text());
					$("#sosolscs").val($(this).find('td:nth-child(11)').text());
					$("#sobanglscs").val($(this).find('td:nth-child(12)').text());
					$("#thannhancs").val($(this).find('td:nth-child(5)').text());
					$("#quanhecs").val($(this).find('td:nth-child(6)').text());
					$("#choocs").val($(this).find('td:nth-child(13)').text());
					$("#tongtiencs").val($(this).find('td:nth-child(7)').text());
					$("#ghichucs").val($(this).find('td:nth-child(14)').text());
					giatri = $(this).find('td:nth-child(16)').text()+"-"+$(this).find('td:nth-child(15)').text();					
					giatri = giatri.replace(/ /g,"_");
					//alert(giatri);
					$("#xahuyencs").val(giatri);
			   }); 
			}
		    		  
		);
$(document).ready(function() {
  $('#trang').change(function() {
		window.location.href="kinhphimo.php?id="+this.value+">"+$("#sobanghixx").val();//+">"+$("#hotenxx").val()+">"+$("#ngquanxx").val()+">"+$("#thanhanxx").val()+">"+$("#chooxx").val()+">timkiem";		
  });
 });		
</script>
<?php
$ahs = explode('>',$_GET['id']);
if(isset($_POST["capnhatts"]))
	{
		if ($madv[3]=="Tỉnh")
		{
			$xhcs=explode('-',$_POST['xahuyencs']);				
			$sqlup = "Update kinhphimo Set soqd='".$_POST['soqdcs']."', ngaythang='".$_POST['ngaythangcs']."', hotenls='".$_POST['hotenlscs']."', nguyenquan='".$_POST['nguyenquancs']."', ";
			$sqlup = $sqlup."capbacchucvu='".$_POST['capbacchucvucs']."',sosols='".$_POST['sosolscs']."', sobangls='".$_POST['sobanglscs']."', thannhan='".$_POST['thannhancs']."', ";
			$sqlup = $sqlup."ghichu='".$_POST['ghichucs']."',";
			$sqlup = $sqlup."quanhe='".$_POST['quanhecs']."', choo='".$_POST['choocs']."', tongtien=".str_replace(',','',str_replace('.','',$_POST['tongtiencs'])).", ";
			$sqlup = $sqlup."xa='".str_replace('_',' ',$xhcs[1])."', huyen='".str_replace('_',' ',$xhcs[0])."'";		
			$sqlup = $sqlup." where idkpmo = ".$_POST['idkpmocs'];
			$kq=mysqli_query($con,$sqlup);
		}
	}
if(isset($_POST["themmoi"]))
{
	if ($madv[3]=="Tỉnh")
	{
		$xh=explode('-',$_POST['xahuyen']);		
		$sqlup = "Insert into kinhphimo Set soqd='".$_POST['soqd']."', ngaythang='".$_POST['ngaythang']."', hotenls='".$_POST['hotenls']."', nguyenquan='".$_POST['nguyenquan']."', ";
		$sqlup = $sqlup."capbacchucvu='".$_POST['capbacchucvu']."',sosols='".$_POST['sosols']."', sobangls='".$_POST['sobangls']."', thannhan='".$_POST['thannhan']."', ";
		$sqlup = $sqlup."ghichu='".$_POST['ghichu']."',";
		$sqlup = $sqlup."quanhe='".$_POST['quanhe']."', choo='".$_POST['choo']."', tongtien=".str_replace(',','',str_replace('.','',$_POST['tongtien'])).", ";
		$sqlup = $sqlup."xa='".str_replace('_',' ',$xh[1])."', huyen='".str_replace('_',' ',$xh[0])."',phanloai='GDQL'";		
		//echo $sqlup;	
		$kq=mysqli_query($con,$sqlup);
	}
}	
?>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Hồ sơ kinh phí xây dựng mộ gia đình quản lý <span style = "float:right">Tổng hồ sơ: <?php echo $ahs[1];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></h4>
		</div>
			<div class="modal-body">
<form role='form' method='POST' class='form-horizontal form-groups-bordered'>
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModalhs();" class='btn btn-success'>
			<i class='entypo-new'></i>Thêm hồ sơ
		</a>
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModaldc();" class='btn btn-success'>
			<i class='entypo-print'></i>In hồ sơ
		</a>
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModaltim();" class='btn btn-success'>
			<i class='entypo-print'></i>Tìm kiếm hồ sơ
		</a>
		<input name="xain" type="text" class="form-control" style="display:none" id="xain" value = "">
		<input name="huyenin" type="text" class="form-control" style="display:none" id="huyenin" value = "">
		<label class='col-sm-2'>Trang số:</label>
<?php
$dkkhac=$_GET['id'];
$j = $ahs[0];$sql="";$kq=0;$sotr=0;$sotr= (int)($ahs[1]/15);$sotrthieu=$ahs[1]/15;
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
if (strlen($dkkhac) > 12)
{
	$sql="select * from kinhphimo where phanloai='GDQL' and hotenls Like '".$ahs[2]."%' and nguyenquan like '%".$ahs[3]."%' and thannhan like '%".$ahs[4]."%' and choo Like '%".$ahs[5]."%'";	
	echo "<input name='hotenxx' type='text' class='form-control' style='display:none' id='hotenxx' value = '".$ahs[2]."'>";
	echo "<input name='ngquanxx' type='text' class='form-control' style='display:none' id='ngquanxx' value = '".$ahs[3]."'>";
	echo "<input name='thanhanxx' type='text' class='form-control' style='display:none' id='thanhanxx' value = '".$ahs[4]."'>";
	echo "<input name='chooxx' type='text' class='form-control' style='display:none' id='chooxx' value = '".$ahs[5]."'>";	
	echo "<input name='sobanghixx' type='text' class='form-control' style='display:none' id='sobanghixx' value = '".$ahs[1]."'>";	
}
else
{
	$sql="select * from kinhphimo where phanloai='GDQL' LIMIT ".(15*($j-1)).",15";
	echo "<input name='hotenxx' type='text' class='form-control' style='display:none' id='hotenxx' value = ''>";
	echo "<input name='ngquanxx' type='text' class='form-control' style='display:none' id='ngquanxx' value = ''>";
	echo "<input name='thanhanxx' type='text' class='form-control' style='display:none' id='thanhanxx' value = ''>";
	echo "<input name='chooxx' type='text' class='form-control' style='display:none' id='chooxx' value = ''>";
	echo "<input name='sobanghixx' type='text' class='form-control' style='display:none' id='sobanghixx' value = '".$ahs[1]."'>";
}	
?>		
	<div id = "hsls" class="table-responsive">
		<table class="table table-hover table-striped table-bordered table-advanced tablesorter display" id="table-2">
			<thead>
				<tr>					
					<th style="background-color:rgb(54, 169, 224)" width="6%"><strong style='color:rgb(255, 255, 225)'><p>STT</p></strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="6%"><strong style='color:rgb(255, 255, 225)'>Số<br>quyết định</strong></th>					
					<th style="background-color:rgb(54, 169, 224)" width="6%"><strong style='color:rgb(255, 255, 225)'>Ngày<br>quyết định</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="37%"><strong style='color:rgb(255, 255, 225)'><p>Họ tên liệt sỹ</p></strong></th>					
					<th style="background-color:rgb(54, 169, 224)" width="6%"><strong style='color:rgb(255, 255, 225)'><p>Họ tên thân nhân</p></strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="6%"><strong style='color:rgb(255, 255, 225)'><p>Quan hệ</p></strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="6%"><strong style='color:rgb(255, 255, 225)'> Tổng<br>kinh phí</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="6%"><strong style='color:rgb(255, 255, 225)'><p>Thao tác</p></strong></th>															
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>nguyenquan</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>capbacchucvu</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>sosols</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>sobangls</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>choo</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ghichu</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>xa</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>huyen</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>phanloai</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>idkpmo</strong></th>			
				</tr>				
			</thead>
			<tbody id="rowlist" class="rowlist">
<?php

			$sql1=mysqli_query($con,$sql);$i=0;
	while($row=mysqli_fetch_array($sql1)){
				$i = $i + 1;									
				echo "<tr>";					
					echo "<td>$i</td>";
					echo "<td style='text-align: left;'>".$row['soqd']."</td>";
					echo "<td style='text-align: left;'>".$row['ngaythang']."</td>";
					echo "<td style='text-align: left;'>".$row['hotenls']."</td>";
					echo "<td style='text-align: left;'>".$row['thannhan']."</td>";
					echo "<td style='text-align: left;'>".$row['quanhe']."</td>";	
					echo "<td style='text-align: left;'>".dinhdangso($row['tongtien'])."</td>";
					echo"<td>					
							<a href=\"xoa.php?id=".$row['idkpmo']."-".$ahs[1]."\"  title='Xóa hố sơ mộ liệt sỹ' onclick=\"return confirm('Bạn muốn xóa hố sơ này?')\" class='btn btn-red '>
								</i>
								Xóa
							</a>
						</td>";
					echo "<td style='text-align: left;display:none'>".$row['nguyenquan']."</td>";
					echo "<td style='text-align: left;display:none'>".$row['capbacchucvu']."</td>";
					echo "<td style='text-align: left; display:none'>".$row['sosols']."</td>";
					echo "<td style='text-align: left; display:none'>".$row['sobangls']."</td>";
					echo "<td style='text-align: left; display:none'>".$row['choo']."</td>";
					echo "<td style='text-align: left; display:none'>".$row['ghichu']."</td>";
					echo "<td style='text-align: left; display:none'>".$row['xa']."</td>";
					echo "<td style='text-align: left; display:none'>".$row['huyen']."</td>";
					echo "<td style='text-align: left; display:none'>".$row['phanloai']."</td>";
					echo "<td style='text-align: left; display:none'>".$row['idkpmo']."</td>";					
				echo "</tr>";								
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
							<label for="field-3" class="col-sm-2 control-label">Số quyết định:</label>
							<div class="col-sm-4">
								<input name="soqd" type="text" class="form-control" id="soqd">
							</div>		
							<label for="field-3" class="col-sm-2 control-label">Ngày tháng:</label>
							<div class="col-sm-4">
								<input name="ngaythang" type="text" class="form-control" data-mask="date" id="ngaythang">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Họ tên liệt sỹ:</label>
							<div class="col-sm-4">
								<input name="hotenls" type="text" class="form-control" id="hotenls">
							</div>		
							<label for="field-3" class="col-sm-2 control-label">Nguyên quán:</label>
							<div class="col-sm-4">
								<input name="nguyenquan" type="text" class="form-control" id="nguyenquan">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Cấp bậc, chức vụ:</label>
							<div class="col-sm-4">
								<input name="capbacchucvu" type="text" class="form-control" id="capbacchucvu">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Số sổ liệt sỹ:</label>
							<div class="col-sm-4">
								<input name="sosols" type="text" class="form-control" id="sosols">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Số bằng liệt sỹ:</label>
							<div class="col-sm-4">
								<input name="sobangls" type="text" class="form-control" id="sobangls">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Họ tên thân nhân:</label>
							<div class="col-sm-4">
								<input name="thannhan" type="text" class="form-control" id="thannhan">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Quan hệ:</label>
							<div class="col-sm-4">
								<input name="quanhe" type="text" class="form-control" id="quanhe">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Chỗ ở hiện nay:</label>
							<div class="col-sm-4">
								<input name="choo" type="text" class="form-control" id="choo">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tổng tiền(XDM):</label>
							<div class="col-sm-4">
								<input name="tongtien" type="text" class="form-control" data-mask="fdecimal" id="tongtien">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ghi chú:</label>
							<div class="col-sm-4">
								<input name="ghichu" type="text" class="form-control" id="ghichu">
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
									<option value="" selected = "selected"></option>
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
							<label for="field-3" class="col-sm-2 control-label">Số quyết định:</label>
							<div class="col-sm-4">
								<input name="soqdcs" type="text" class="form-control" id="soqdcs">
							</div>		
							<label for="field-3" class="col-sm-2 control-label">Ngày tháng:</label>
							<div class="col-sm-4">
								<input name="ngaythangcs" type="text" class="form-control" data-mask="date" id="ngaythangcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Họ tên liệt sỹ:</label>
							<div class="col-sm-4">
								<input name="hotenlscs" type="text" class="form-control" id="hotenlscs">
							</div>		
							<label for="field-3" class="col-sm-2 control-label">Nguyên quán:</label>
							<div class="col-sm-4">
								<input name="nguyenquancs" type="text" class="form-control" id="nguyenquancs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Cấp bậc, chức vụ:</label>
							<div class="col-sm-4">
								<input name="capbacchucvucs" type="text" class="form-control" id="capbacchucvucs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Số sổ liệt sỹ:</label>
							<div class="col-sm-4">
								<input name="sosolscs" type="text" class="form-control" id="sosolscs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Số bằng liệt sỹ:</label>
							<div class="col-sm-4">
								<input name="sobanglscs" type="text" class="form-control" id="sobanglscs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Họ tên thân nhân:</label>
							<div class="col-sm-4">
								<input name="thannhancs" type="text" class="form-control" id="thannhancs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Quan hệ:</label>
							<div class="col-sm-4">
								<input name="quanhecs" type="text" class="form-control" id="quanhecs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Chỗ ở hiện nay:</label>
							<div class="col-sm-4">
								<input name="choocs" type="text" class="form-control" id="choocs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tổng tiền(XDM):</label>
							<div class="col-sm-4">
								<input name="tongtiencs" type="text" class="form-control" data-mask="fdecimal" id="tongtiencs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ghi chú:</label>
							<div class="col-sm-4">
								<input name="ghichucs" type="text" class="form-control" id="ghichucs">
							</div>							
							<label for="field-3" class="col-sm-2 control-label">Tên xã:</label>
							<div class="col-sm-10">								
								<select name="xahuyencs" id="xahuyencs" class="form-control">
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
							<div class="col-sm-10">
								<input name="idkpmocs" type="text" class="form-control" style="display:none" id="idkpmocs">
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
							<h4 style = "text-align:center; color:rgb(10, 10, 10)">CHỌN TÊN HUYỆN, XÃ CẦN TÌM PHẦN MỘ LIỆT SỸ</h4>								
							<label for="field-3" class="col-sm-3 control-label">Họ và tên liệt sỹ:</label>
							<div class="col-sm-3">
								<input name="hotentim" type="text" class="form-control" id="hotentim">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Nguyên quán:</label>
							<div class="col-sm-3">
								<input name="ngquantim" type="text" class="form-control" id="ngquantim">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Họ tên thân nhân:</label>
							<div class="col-sm-3">
								<input name="thannhantim" type="text" class="form-control" id="thannhantim">
							</div>							
							<label for="field-3" class="col-sm-3 control-label">Chỗ ở hiện nay:</label>
							<div class="col-sm-3">
								<input name="chootim" type="text" class="form-control" id="chootim">
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
					<form name="thoaiin" role='form' method='POST' action="reportmogdql.php" class='form-horizontal form-groups-bordered'>
						<div id = "sTTKK1" class="form-group">
							<label for="field-3" class="col-sm-3 control-label">Tên đơn vị:</label>
							<div class="col-sm-9">								
								<select name="huyenkx" id="huyenkx" class="form-control">
									<?php
									$sqltcml = "Select xa.tenxa,huyen.tenhuyen From xa inner join huyen on xa.tthuyen=huyen.tthuyen";
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
							<input type="submit" name="create1" class="btn btn-blue" value = "Tạo báo cáo">							
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
			return "kinhphimo.php?id=" + $('#trang').val() + ">" + $('#sobanghixx').val();			
    }
	function get_action1() {				
			return "kinhphimo.php?id=1>"+ $('#sobanghixx').val();
	}
	function get_action2() {				
			return "kinhphimo.php?id="+"1>"+ $('#sobanghixx').val()+">"+$('#hotentim').val()+">"+$('#ngquantim').val()+">"+$('#thannhantim').val()+">"+$('#chootim').val()+">timkiem";		
    }
</script>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>