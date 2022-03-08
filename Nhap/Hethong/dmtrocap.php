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
</script>
<script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() 
			{  
			   $('table tbody tr').dblclick(function() 
			   {
					jQuery('#modal-7').modal('show', {backdrop: 'static'});
					$("#tttrocapcs").val($(this).find('td:nth-child(8)').text());	
					$("#matrocapcs").val($(this).find('td:nth-child(6)').text());											
					$("#loaitrocapcs").val($(this).find('td:nth-child(2)').text());
					$("#tentrocapcs").val($(this).find('td:nth-child(3)').text());
					$("#tiledencs").val($(this).find('td:nth-child(4)').text());
					$("#sotiencs").val($(this).find('td:nth-child(5)').text());
					$("#ghichucs").val($(this).find('td:nth-child(7)').text());
			   }); 
			}
		    		  
		);
$(document).ready(function() {
  $('#trang').change(function() {
		//alert(this.value);
		//$('#hsls').load('ajax_lietsy.php?id='+this.value);		
		//$('#thannhan').load('ajax_thannhan.php');
		//$('#giayto').load('ajax_giayto.php');	
		window.location.href="dmtrocap.php?id="+this.value;
  });
 });		
</script>
<?php
if(isset($_POST["capnhatts"]))
	{	
		$sqlup = "Update dmtrocap Set matrocap='".$_POST['matrocapcs']."', loaitrocap='".$_POST['loaitrocapcs']."', tentrocap='".$_POST['tentrocapcs']."', ";
		$sqlup = $sqlup."tileden='".$_POST['tiledencs']."', sotien=".kieudouble(str_replace('.','',str_replace(',','',$_POST['sotiencs']))).", ghichu='".$_POST['ghichucs']."'";
		$sqlup = $sqlup." where tttrocap = ".$_POST['tttrocapcs'];
		$kq=mysqli_query($con,$sqlup);
	}
if(isset($_POST["themmoi"]))
	{	
		$sqlup = "Insert into dmtrocap Set matrocap='".$_POST['matrocap']."', loaitrocap='".$_POST['loaitrocap']."', tentrocap='".$_POST['tentrocap']."', ";
		$sqlup = $sqlup."tileden='".$_POST['tileden']."', sotien=".kieudouble(str_replace('.','',str_replace(',','',$_POST['sotien']))).", ghichu='".$_POST['ghichu']."'";
		$kq=mysqli_query($con,$sqlup);
	}
function catchuoi($chuoi)	
{
	$kq = "";$kq1 = "";			
	if (strlen($chuoi) <= 130)
	{
		$kq = $chuoi;
	}
	else
	{
		$kq1 = substr($chuoi,0,130);
		$vitri = strrpos($kq1," ");
		$kq = substr($chuoi,0,$vitri)."<br>".catchuoi1(substr($chuoi,$vitri,strlen($chuoi)-$vitri));
	}
	return $kq;
}
function catchuoi1($chuoi)	
{
	$kq = "";$kq1 = "";			
	if (strlen($chuoi) <= 130)
	{
		$kq = $chuoi;
	}
	else
	{
		$kq1 = substr($chuoi,0,130);
		$vitri = strrpos($kq1," ");
		$kq = substr($chuoi,0,$vitri)."<br>".substr($chuoi,$vitri,strlen($chuoi)-$vitri);
	}
	return $kq;
}	
?>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Danh mục các khoản trợ cấp - phụ cấp</h4>
		</div>
			<div class="modal-body">
<form role='form' method='POST' class='form-horizontal form-groups-bordered'>	
<?php			
if($madv[3]=="Tỉnh")
{		
		echo "<a style = 'float:right; background-color:rgb(83, 181, 166)' onclick='showAjaxModalhs();' class='btn btn-success'>
			<i class='entypo-new'></i>Thêm trợ cấp
		</a>";		
}
?>
		<label class='col-sm-2'>Trang số:</label>
<?php
$j = $_GET['id'];
		echo "<div  class='col-sm-2' style='margin-top:-7px'>";
			echo "<select style='margin-left:-90px;' name='trang' class='form-control' id='trang'>";
	$ls =  array(array("1","2","3","4","5","6","7"));		
	$cs=0;
	$sql="select * from dmtrocap";
	$sql1=mysqli_query($con,$sql);
	$kq = 0;$kq1 = 1;
	if ($j == 1)
		echo "<option selected='selected' value='$kq1'>$kq1</option>";
	else
		echo "<option value='$kq1'>$kq1</option>";
	while($row=mysqli_fetch_array($sql1)){
		$ls[$cs][0] = $row['tttrocap'];
		$ls[$cs][1] = $row['matrocap'];
		$ls[$cs][2] = $row['loaitrocap'];	
		$ls[$cs][3] = $row['tentrocap'];
		$ls[$cs][4] = $row['tileden'];		
		$ls[$cs][5] = $row['sotien'];
		$ls[$cs][6] = $row['ghichu'];
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
					<th style="background-color:rgb(54, 169, 224)" width="5%"><strong style='color:rgb(255, 255, 225)'><p>STT</p></strong></th>										
					<th style="background-color:rgb(54, 169, 224)" width="10%"><strong style='color:rgb(255, 255, 225)'><p>Loại trợ cấp</p></strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="63%"><strong style='color:rgb(255, 255, 225)'><p>Tên trợ cấp - phụ cấp</p></strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="7%"><strong style='color:rgb(255, 255, 225)'>Tỉ lệ<br>sgknlđ</strong></th>	
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'><p>Số tiền</p></strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>matrocap</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ghichu</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>id</strong></th>
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
					echo "<td style='text-align: left;'>".$ls[$i][2]."</td>";
					echo "<td style='text-align: left;'>".catchuoi($ls[$i][3])."</td>";	
					echo "<td>".$ls[$i][4]."</td>";
					echo "<td style='text-align: right;'>".dinhdangso($ls[$i][5])."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][1]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][6]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][0]."</td>";
					if ($madv[3]=='Tỉnh')
					{
						echo"<td>					
								<a href=\"xoatc.php?id=".$ls[$i][0]."\"  title='Xóa khoản trợ cấp' onclick=\"return confirm('Bạn muốn xóa trợ cấp này?')\" class='btn btn-red '>
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
							<label for="field-3" class="col-sm-4 control-label">Mã trợ cấp:</label>
							<div class="col-sm-8">
								<input name="matrocap" type="text" class="form-control" id="matrocap">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Loại trợ cấp:</label>
							<div class="col-sm-8">
								<select name="loaitrocap" id="loaitrocap" class="form-control">
									<option value="Hàng tháng">Hàng tháng</option>
									<option value="Hàng năm">Hằng năm</option>
									<option value="Một lần">Một lần</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-4 control-label">Tên khoản trợ cấp:</label>
							<div class="col-sm-8">
								<input name="tentrocap" type="text" class="form-control" id="tentrocap">
							</div>							
							<label for="field-3" class="col-sm-4 control-label">Tỉ lệ sgknlđ:</label>
							<div class="col-sm-8">
								<input name="tileden" type="text" class="form-control" id="tileden">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số tiền:</label>
							<div class="col-sm-8">
								<input name="sotien" type="text" class="form-control" data-mask="fdecimal" id="sotien">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Ghi chú:</label>
							<div class="col-sm-8">
								<input name="ghichu" type="text" class="form-control" id="ghichu">
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
							<label for="field-3" class="col-sm-4 control-label">Mã trợ cấp:</label>
							<div class="col-sm-8">
								<input name="matrocapcs" type="text" class="form-control" id="matrocapcs">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Loại trợ cấp:</label>
							<div class="col-sm-8">
								<select name="loaitrocapcs" id="loaitrocapcs" class="form-control">
									<option value="Hàng tháng">Hàng tháng</option>
									<option value="Hàng năm">Hằng năm</option>
									<option value="Một lần">Một lần</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-4 control-label">Tên khoản trợ cấp:</label>
							<div class="col-sm-8">
								<input name="tentrocapcs" type="text" class="form-control" id="tentrocapcs">
							</div>							
							<label for="field-3" class="col-sm-4 control-label">Tỉ lệ sgknlđ:</label>
							<div class="col-sm-8">
								<input name="tiledencs" type="text" class="form-control" id="tiledencs">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số tiền:</label>
							<div class="col-sm-8">
								<input name="sotiencs" type="text" class="form-control" data-mask="fdecimal" id="sotiencs">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Ghi chú:</label>
							<div class="col-sm-8">
								<input name="ghichucs" type="text" class="form-control" id="ghichucs">
							</div>
							<div class="col-sm-10">
								<input name="tttrocapcs" type="text" class="form-control" style="display:none" id="tttrocapcs">
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
			return "dmtrocap.php?id=1";			
    }
	function get_action1() {				
			return "dmtrocap.php?id=1";			
    }
</script>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>