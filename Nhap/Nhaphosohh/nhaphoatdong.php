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
					$("#tgtucs").val($(this).find('td:nth-child(2)').text());	
					$("#tgdencs").val($(this).find('td:nth-child(3)').text());
					$("#coquancs").val($(this).find('td:nth-child(4)').text());
					$("#diabancs").val($(this).find('td:nth-child(5)').text());
					$("#idquatrinhhdhhcs").val($(this).find('td:nth-child(6)').text());
					$("#idhshhcs").val($(this).find('td:nth-child(7)').text());					
			   }); 
			}
		    		  
		);
</script>
<?php
$ihs = $_GET['id'];	
if(isset($_POST["capnhatts"]))
	{	
		$fileanh ="";	
		$tmp_name = $_FILES['fileacs']['tmp_name'];
		if($tmp_name != "")
		{				
			$path_parts = pathinfo($_FILES['fileacs']['name']);
			$fileup = $path_parts['filename'].".".$path_parts['extension'];	
			move_uploaded_file($_FILES['fileacs']['tmp_name'],"$_SERVER[DOCUMENT_ROOT]/data/upload/".$fileup);
			$fileanh="/data/upload/".$fileup;				
		}
		$sqlup = "Update quatrinhhdhh Set tgtu='".$_POST['tgtucs']."', tgden='".$_POST['tgdencs']."', coquan='".$_POST['coquancs']."', diaban='".$_POST['diabancs']."'";		
		$sqlup = $sqlup." Where idquatrinhhdhh=".$_POST['idquatrinhhdhhcs'];
		//echo $sqlup;	
		$kq=mysqli_query($con,$sqlup);
	}
if(isset($_POST["themmoi"]))
	{
		$sqlup = "Insert into quatrinhhdhh Set tgtu='".$_POST['tgtu']."', tgden='".$_POST['tgden']."', coquan='".$_POST['coquan']."', diaban='".$_POST['diaban']."', ";
		$sqlup = $sqlup."idhshh=".$ihs;		
		$kq=mysqli_query($con,$sqlup);
	}	
?>
<form role='form' method='POST' class='form-horizontal form-groups-bordered'>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Quá trình hoạt động
			<a style = "float:right; color:rgb(255, 255, 225)" href='<?php echo $_SERVER['HTTP_REFERER'];?>'>
			Trở lại
			</a>
	<?php	
		if ($madv[3]=="Tỉnh")
		{	
			echo "<strong style = 'float:right'>&nbsp;&nbsp;||&nbsp;&nbsp;</strong>";
			echo"<a style = 'float:right; color:rgb(255, 255, 225)' onclick='showAjaxModalhs();' href = '#'>
				Thêm hoạt động
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
					<th style="background-color:rgb(54, 169, 224)" width="20%"><strong style='color:rgb(255, 255, 225)'>Thời gian từ</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Thời gian đến</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="6%"><strong style='color:rgb(255, 255, 225)'>Đơn vị hoạt động</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="15%"><strong style='color:rgb(255, 255, 225)'>Địa bàn hoạt động</strong></th>						
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>idquatrinhhdhh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>idhshh</strong></th>
				</tr>				
			</thead>
	<?php
	$sqltn = "Select * From quatrinhhdhh Where idhshh = $ihs";	
	$i1 = 0;	
	$qrcttn = mysqli_query($con,$sqltn);			
			echo "<tbody id='rowlist' class='rowlist'>";
	while($rcttn=@mysqli_fetch_array($qrcttn))
		{	
			$i1 = $i1 + 1;
				echo "<tr>";
					echo "<td>".$i1."</td>";
					echo "<td style='text-align: left;'>".$rcttn['tgtu']."</td>";
					echo "<td style='text-align: left;'>".$rcttn['tgden']."</td>";
					echo "<td style='text-align: left;'>".$rcttn['coquan']."</td>";
					echo "<td style='text-align: left;'>".$rcttn['diaban']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['idquatrinhhdhh']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['idhshh']."</td>";
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
							<label for="field-3" class="col-sm-2 control-label">Thời gian từ:</label>
							<div class="col-sm-10">
								<input name="tgtu" type="text" class="form-control" id="tgtu">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Thời gian đến:</label>
							<div class="col-sm-10">
								<input name="tgden" type="text" class="form-control" id="tgden">
							</div>		
							<label for="field-3" class="col-sm-2 control-label">Đơn vị hoạt động:</label>
							<div class="col-sm-10">
								<input name="coquan" type="text" class="form-control" id="coquan">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Địa bàn hoạt động:</label>
							<div class="col-sm-10">
								<input name="diaban" type="text" class="form-control" id="diaban">
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
							<label for="field-3" class="col-sm-2 control-label">Thời gian từ:</label>
							<div class="col-sm-10">
								<input name="tgtucs" type="text" class="form-control" id="tgtucs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Thời gian đến:</label>
							<div class="col-sm-10">
								<input name="tgdencs" type="text" class="form-control" id="tgdencs">
							</div>		
							<label for="field-3" class="col-sm-2 control-label">Đơn vị hoạt động:</label>
							<div class="col-sm-10">
								<input name="coquancs" type="text" class="form-control" id="coquancs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Địa bàn hoạt động:</label>
							<div class="col-sm-10">
								<input name="diabancs" type="text" class="form-control" id="diabancs">
							</div>
							<div class="col-sm-10">
								<input name="idquatrinhhdhhcs" type="text" class="form-control" style="display:none" id="idquatrinhhdhhcs">
							</div>
							<div class="col-sm-10">
								<input name="idhshhcs" type="text" class="form-control" style="display:none" id="idhshhcs">
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
			return "nhaphoatdong.php?id=" + $('#idhshhcs').val();			
    }
	function get_action1() {				
			return "nhaphoatdong.php?id="+$('#idhshhcs').val();			
    }
</script>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>