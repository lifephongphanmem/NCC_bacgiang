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
					$("#phanloaics").val($(this).find('td:nth-child(2)').text());	
					$("#tenphuongtiencs").val($(this).find('td:nth-child(3)').text());											
					$("#nienhancs").val($(this).find('td:nth-child(4)').text());
					$("#sotiencs").val($(this).find('td:nth-child(5)').text());											
					$("#iddmphuongtiencs").val($(this).find('td:nth-child(6)').text());
			   }); 
			});
		//
		
		//
$(document).ready(function() {
  $('#trang').change(function() {
		//alert(this.value);
		//$('#hsls').load('ajax_lietsy.php?id='+this.value);		
		//$('#thannhan').load('ajax_thannhan.php');
		//$('#giayto').load('ajax_giayto.php');	
		window.location.href="dmphuongtien.php?id="+this.value+">0";
  });
 });	
$(document).ready(function(){
    $(":input").inputmask(); 
</script>
<?php
function dinhdangsox($so)
	{
		$kq = "";
		if ($so > 0)
			$kq = number_format($so);
		return $kq;	
	}
function kieudoublex($so)
{
	$kq = 0;
	if ($so != "")
		$kq = (float)$so;
	else
		$kq = 0;	
	return $kq;	
}
if(isset($_POST["capnhatts"]))
	{	
		$sqlup = "Update dmphuongtien Set tenphuongtien='".$_POST['tenphuongtiencs']."', phanloai='".$_POST['phanloaics']."', ";
		$sqlup = $sqlup."nienhan='".$_POST['nienhancs']."', sotien=".str_replace(',','',str_replace('.','',$_POST['sotiencs']));
		$sqlup = $sqlup." where iddmphuongtien = ".$_POST['iddmphuongtiencs'];
		$kq=mysqli_query($con,$sqlup);
	}
if(isset($_POST["themmoi"]))
	{	
		$sqlup = "Insert into dmphuongtien Set tenphuongtien='".$_POST['tenphuongtien']."', phanloai='".$_POST['phanloai']."'";	
		$sqlup = $sqlup."nienhan='".$_POST['nienhan']."', sotien=".str_replace(',','',str_replace('.','',$_POST['sotien']));
		//echo $sqlup;	
		$kq=mysqli_query($con,$sqlup);
	}	
?>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Danh mục phương tiện, dụng cụ chỉnh hình</h4>
		</div>
			<div class="modal-body">
<form role='form' method='POST' class='form-horizontal form-groups-bordered'>
<?php	
if ($madv[3]=="Tỉnh")					
		echo "<a style = 'float:right; background-color:rgb(83, 181, 166)' onclick='showAjaxModalhs();' class='btn btn-success'>
			<i class='entypo-new'></i>Thêm phương tiện
		</a>";
?>
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModaldc();" class='btn btn-success'>
			<i class='entypo-print'></i>Danh mục phương tiện, dụng cụ chỉnh hình
		</a>
		<label class='col-sm-2'>Trang số:</label>
<?php
$ahs = explode('>',$_GET['id']);
$j = $ahs[0];
		echo "<div  class='col-sm-2' style='margin-top:-7px'>";
			echo "<select style='margin-left:-90px;' name='trang' class='form-control' id='trang'>";
	$ls =  array(array("1","2","3","4","5"));		
	$cs=0;
	$sql="select * from dmphuongtien";
	$sql1=mysqli_query($con,$sql);
	$kq = 0;$kq1 = 1;
	if ($j == 1)
		echo "<option selected='selected' value='$kq1'>$kq1</option>";
	else
		echo "<option value='$kq1'>$kq1</option>";
	while($row=mysqli_fetch_array($sql1)){					
		$ls[$cs][0] = $row['iddmphuongtien'];
		$ls[$cs][1] = $row['tenphuongtien'];
		$ls[$cs][2] = $row['phanloai'];
		$ls[$cs][3] = $row['nienhan'];
		$ls[$cs][4] = $row['sotien'];
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
					<th style="background-color:rgb(54, 169, 224)" width="15%"><strong style='color:rgb(255, 255, 225)'>Phân loại</strong></th>					
					<th style="background-color:rgb(54, 169, 224)" width="53%"><strong style='color:rgb(255, 255, 225)'>Tên phương tiện, dụng cụ</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="10%"><strong style='color:rgb(255, 255, 225)'>Niên hạn</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="10%"><strong style='color:rgb(255, 255, 225)'>Số tiền</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>idnghiatrang</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="7%"><strong style='color:rgb(255, 255, 225)'>Thao tác</strong></th>
				</tr>				
			</thead>
			<tbody id="rowlist" class="rowlist">
<?php

			for($i=($j - 1)*15;$i<15*$j;$i++)
			{				
				if ($i < $cs)
				{					
				echo "<tr>";					
					echo "<td>".($i+1)."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][2]."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][1]."</td>";
					echo "<td>".$ls[$i][3]."</td>";
					echo "<td contenteditable=true>".dinhdangsox(kieudoublex($ls[$i][4]))."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][0]."</td>";
					if ($madv[3]=='Tỉnh')
					{
						echo"<td>					
								<a href=\"xoapt.php?id=".$ls[$i][0]."\"  title='Xóa phương tiện trợ giúp' onclick=\"return confirm('Bạn muốn xóa phương tiện trợ giúp này?')\" class='btn btn-red '>
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
							<label for="field-3" class="col-sm-4 control-label">Phân loại phương tiên:</label>
							<div class="col-sm-8">
								<input name="phanloai" type="text" class="form-control" id="phanloai">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Tên phương tiện, dụng cụ:</label>
							<div class="col-sm-8">
								<input name="tenphuongtien" type="text" class="form-control" id="tenphuongtien">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Niên hạn phương tiện, dụng cụ:</label>
							<div class="col-sm-8">
								<input name="nienhan" type="text" class="form-control" id="nienhan">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số tiền phương tiện, dụng cụ:</label>
							<div class="col-sm-8">
								<input name="sotien" type="text" class="form-control" data-mask="fdecimal" id="sotien">
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
							<label for="field-3" class="col-sm-4 control-label">Phân loại phương tiên:</label>
							<div class="col-sm-8">
								<input name="phanloaics" type="text" class="form-control" id="phanloaics">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Tên phương tiện, dụng cụ:</label>
							<div class="col-sm-8">
								<input name="tenphuongtiencs" type="text" class="form-control" id="tenphuongtiencs">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Niên hạn phương tiện, dụng cụ:</label>
							<div class="col-sm-8">
								<input name="nienhancs" type="text" class="form-control" id="nienhancs">
							</div>
							<label for="field-3" class="col-sm-4 control-label">Số tiền phương tiện, dụng cụ:</label>
							<div class="col-sm-8">
								<input name="sotiencs" type="text" class="form-control" data-mask="fdecimal" id="sotiencs">
							</div>
							<div class="col-sm-10">
								<input name="iddmphuongtiencs" type="text" class="form-control" style="display:none" id="iddmphuongtiencs">
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
			return "dmphuongtien.php?id=" + $('#trang').val() + ">" + $('#iddmkbcs').val();			
    }
	function get_action1() {				
			return "dmphuongtien.php?id="+$('#trangm').val()+">0";			
    }
</script>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>