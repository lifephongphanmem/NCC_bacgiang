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
					$("#tengiaytocs").val($(this).find('td:nth-child(2)').text());	
					$("#chitietcs").val($(this).find('td:nth-child(3)').text());
					$("#soluongcs").val($(this).find('td:nth-child(4)').text());
					$("#idgiaytotkncs").val($(this).find('td:nth-child(5)').text());
					$("#idhstkncs").val($(this).find('td:nth-child(6)').text());					
			   }); 
			}
		    		  
		);
</script>
<?php
$ihs = $_GET['id'];	
if(isset($_POST["capnhatts"]))
	{		
		$sqlup = "Update giaytocc Set tengiayto='".$_POST['tengiaytocs']."', chitiet='".$_POST['chitietcs']."', soluong=".kieudouble($_POST['soluongcs']);		
		$sqlup = $sqlup." Where idgiaytocc=".$_POST['idgiaytotkncs'];
		//echo $sqlup;	
		$kq=mysqli_query($con,$sqlup);
	}
if(isset($_POST["themmoi"]))
	{		
		$sqlup = "Insert into giaytocc Set tengiayto='".$_POST['tengiayto']."', chitiet='".$_POST['chitiet']."', soluong=".kieudouble($_POST['soluong']);		
		$sqlup = $sqlup.", idhscc=".$ihs;
		//echo $sqlup;	
		$kq=mysqli_query($con,$sqlup);
	}	
?>
<form role='form' method='POST' class='form-horizontal form-groups-bordered'>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Danh sách giấy tờ hồ sơ người có công 
			<a style = "float:right; color:rgb(255, 255, 225)" href='/Nhap/Nhaphosocc/nhaphosoncc.php?id=1>0'>
			Trở lại
			</a>
	<?php
		if ($madv[3]=="Tỉnh")
		{	
			echo "<strong style = 'float:right'>&nbsp;&nbsp;||&nbsp;&nbsp;</strong>";
			echo "<a style = 'float:right; color:rgb(255, 255, 225)' onclick='showAjaxModalhs();' href = '#'>
				Thêm giấy tờ
			</a>";
		}
	?>		
			</h4>
		</div>
			<div class="modal-body">

	<div id = "giayto" class="table-responsive">
		<table class="table table-hover table-striped table-bordered table-advanced tablesorter display" id="table-4">
			<thead>
				<tr>
					<th style="background-color:rgb(54, 169, 224)" width="6%"><strong style='color:rgb(255, 255, 225)'>STT</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="45%"><strong style='color:rgb(255, 255, 225)'>Tên giấy tờ</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="45%"><strong style='color:rgb(255, 255, 225)'>Chi tiết</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="4%"><strong style='color:rgb(255, 255, 225)'>Số lượng</strong></th>	
					<th style="background-color:rgb(54, 169, 224); display:none" width="30%"><strong>idgiaytols</strong></th>
					<th style="background-color:rgb(54, 169, 224); display:none" width="30%"><strong>idhsls</strong></th>
				</tr>				
			</thead>
	<?php		
		$sqlgt = "Select * From giaytocc Where idhscc = $ihs order by chitiet";	
		$i2 = 0;	
		$qrctgt = mysqli_query($con,$sqlgt);
			echo "<tbody id='rowlist' class='rowlist'>";
		while($rctgt=@mysqli_fetch_array($qrctgt))
			{	
				$i2 = $i2 + 1;
				echo "<tr>";
					echo "<td>".$i2."</td>";
					echo "<td style='text-align: left;'>".$rctgt['tengiayto']."</td>";
					echo "<td style='text-align: left;'>".$rctgt['chitiet']."</td>";
					echo "<td>".$rctgt['soluong']."</td>";	
					echo "<td style='text-align: left; display:none'>".$rctgt['idgiaytocc']."</td>";
					echo "<td style='text-align: left; display:none'>".$rctgt['idhscc']."</td>";
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
					<form name="thoaimoi" role='form' method='POST' class='form-horizontal form-groups-bordered'>
						<div id = "sTTKK1" class="form-group">							
							<label for="field-3" class="col-sm-2 control-label">Tên giấy tờ:</label>
							<div class="col-sm-10">
								<input name="tengiayto" type="text" class="form-control" id="tengiayto">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Chi tiết:</label>
							<div class="col-sm-10">
								<input name="chitiet" type="text" class="form-control" id="chitiet">
							</div>		
							<label for="field-3" class="col-sm-2 control-label">Số lượng:</label>
							<div class="col-sm-10">
								<input name="soluong" type="text" class="form-control" id="soluong">
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
					<form name="thoaics" role='form' method='POST' class='form-horizontal form-groups-bordered'>
						<div id = "sTTKK" class="form-group">							
							<label for="field-3" class="col-sm-2 control-label">Tên giấy tờ:</label>
							<div class="col-sm-10">
								<input name="tengiaytocs" type="text" class="form-control" id="tengiaytocs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Chi tiết:</label>
							<div class="col-sm-10">
								<input name="chitietcs" type="text" class="form-control" id="chitietcs">
							</div>		
							<label for="field-3" class="col-sm-2 control-label">Số lượng:</label>
							<div class="col-sm-10">
								<input name="soluongcs" type="text" class="form-control" id="soluongcs">
							</div>						
							<div class="col-sm-10">
								<input name="idgiaytotkncs" type="text" class="form-control" style="display:none" id="idgiaytotkncs">
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
			return "nhapgiayto.php?id=" + $('#idhstkncs').val();			
    }
	function get_action1() {				
			return "nhapgiayto.php?id="+$('#idhstkncs').val();			
    }
</script>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>