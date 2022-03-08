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
	window.location.href="/Reports/Phieudoichieubb.php?id="+$("#soghi").val()+">"+$("#hotendc").val()+">"+$("#ngaysinhdc").val()+">"+$("#nguyenquandc").val()+">"+$("#truquandc").val()+">"+$("#mahsbodc").val()+">"+$("#mahstinhdc").val()+">"+$("#tthsdc").val();	
}	
</script>
<script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() 
			{  
			   $('table tbody tr').dblclick(function() 
			   {
					jQuery('#modal-7').modal('show', {backdrop: 'static'});
					$("#mankbcs").val($(this).find('td:nth-child(2)').text());	
					$("#tnkbcs").val($(this).find('td:nth-child(3)').text());											
					$("#iddmkbcs").val($(this).find('td:nth-child(4)').text());
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
		$sqlup = "Update danhmuckb Set mankb='".$_POST['mankbcs']."', tnkb='".$_POST['tnkbcs']."'";			
		$sqlup = $sqlup." where iddmkb = ".$_POST['iddmkbcs'];
		$kq=mysqli_query($con,$sqlup);
	}
if(isset($_POST["themmoi"]))
	{	
		$sqlup = "Insert into danhmuckb Set mankb='".$_POST['mankb']."', tnkb='".$_POST['tnkb']."'";		
		//echo $sqlup;	
		$kq=mysqli_query($con,$sqlup);
	}	
?>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Danh sách nơi đăng ký khám chữa bệnh</h4>
		</div>
			<div class="modal-body">
<form role='form' method='POST' class='form-horizontal form-groups-bordered'>						
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModalhs();" class='btn btn-success'>
			<i class='entypo-new'></i>Thêm nơi khám bệnh
		</a>
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModaldc();" class='btn btn-success'>
			<i class='entypo-print'></i>Danh sách nơi khám bệnh
		</a>
		<label class='col-sm-2'>Trang số:</label>
<?php
$ahs = explode('>',$_GET['id']);
$j = $ahs[0];
		echo "<div  class='col-sm-2' style='margin-top:-7px'>";
			echo "<select style='margin-left:-90px;' name='trang' class='form-control' id='trang'>";
	$ls =  array(array("1","2","3"));		
	$cs=0;
	$sql="select * from danhmuckb";
	$sql1=mysqli_query($con,$sql);
	$kq = 0;$kq1 = 1;
	if ($j == 1)
		echo "<option selected='selected' value='$kq1'>$kq1</option>";
	else
		echo "<option value='$kq1'>$kq1</option>";
	while($row=mysqli_fetch_array($sql1)){					
		$ls[$cs][0] = $row['mankb'];
		$ls[$cs][1] = $row['tnkb'];
		$ls[$cs][2] = $row['iddmkb'];		
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
					<th style="background-color:rgb(54, 169, 224)" width="5%"><strong style='color:rgb(255, 255, 225)'>STT</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="15%"><strong style='color:rgb(255, 255, 225)'>Mã nơi khám bệnh</strong></th>					
					<th style="background-color:rgb(54, 169, 224)" width="73%"><strong style='color:rgb(255, 255, 225)'>Nơi đăng ký khám bệnh ban đầu</strong></th>					
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
					echo "<td style='text-align: left; display:none'>".$ls[$i][2]."</td>";
					if ($madv[3]=='Tỉnh')
					{
						echo"<td>					
								<a href=\"xoadm.php?id=".$ls[$i][2]."\"  title='Xóa nơi đăng ký khám chữa bệnh' onclick=\"return confirm('Bạn muốn xóa nơi đăng ký khám chữa bệnh này?')\" class='btn btn-red '>
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
							<label for="field-3" class="col-sm-4 control-label">Mã nơi đăng ký khám bệnh:</label>
							<div class="col-sm-8">
								<input name="mankb" type="text" class="form-control" id="mankb">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Nơi đăng ký khám bệnh:</label>
							<div class="col-sm-8">
								<input name="tnkb" type="text" class="form-control" id="tnkb">
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
							<label for="field-3" class="col-sm-4 control-label">Mã nơi đăng ký khám bệnh:</label>
							<div class="col-sm-8">
								<input name="mankbcs" type="text" class="form-control" id="mankbcs">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Nơi đăng ký khám bệnh:</label>
							<div class="col-sm-8">
								<input name="tnkbcs" type="text" class="form-control" id="tnkbcs">
							</div>
							<div class="col-sm-10">
								<input name="iddmkbcs" type="text" class="form-control" style="display:none" id="iddmkbcs">
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
			return "dmnkb.php?id=" + $('#trang').val() + ">" + $('#iddmkbcs').val();			
    }
	function get_action1() {				
			return "dmnkb.php?id="+$('#trangm').val()+">0";			
    }
</script>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>