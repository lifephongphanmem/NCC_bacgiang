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
			
$(document).ready(function() {
  $('#trang').change(function() {
		//alert(this.value);
		//$('#hsls').load('ajax_lietsy.php?id='+this.value);		
		//$('#thannhan').load('ajax_thannhan.php');
		//$('#giayto').load('ajax_giayto.php');	
		window.location.href="hethongvanban.php?id="+this.value+">0";
  });
 });

</script>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Hệ thống các văn bản chế độ ưu đãi với người có công</h4>
		</div>
			<div class="modal-body">
<form role='form' method='POST' class='form-horizontal form-groups-bordered'>						
		
		<label class='col-sm-2'>Trang số:</label>
<?php
function catchuoi($chuoi)	
{
	$kq = "";$kq1 = "";			
	if (strlen($chuoi) <= 115)
	{
		$kq = $chuoi;
	}
	else
	{
		$kq1 = substr($chuoi,0,115);
		$vitri = strrpos($kq1," ");
		$kq = substr($chuoi,0,$vitri)."<br>".catchuoi1(substr($chuoi,$vitri,strlen($chuoi)-$vitri));
	}
	return $kq;
}
function catchuoi1($chuoi)	
{
	$kq = "";$kq1 = "";			
	if (strlen($chuoi) <= 115)
	{
		$kq = $chuoi;
	}
	else
	{
		$kq1 = substr($chuoi,0,115);
		$vitri = strrpos($kq1," ");
		$kq = substr($chuoi,0,$vitri)."<br>".substr($chuoi,$vitri,strlen($chuoi)-$vitri);
	}
	return $kq;
}
$j = 1;
		echo "<div  class='col-sm-2' style='margin-top:-7px'>";
			echo "<select style='margin-left:-90px;' name='trang' class='form-control' id='trang'>";
	$ls =  array(array("1","2","3","4","5","6"));		
	$cs=0;
	$sql="select * from hethongvb";
	$sql1=mysqli_query($con,$sql);
	$kq = 0;$kq1 = 1;
	if ($j == 1)
		echo "<option selected='selected' value='$kq1'>$kq1</option>";
	else
		echo "<option value='$kq1'>$kq1</option>";
	while($row=mysqli_fetch_array($sql1)){
		$ls[$cs][0] = $row['idhethongvb'];
		$ls[$cs][1] = $row['noidung'];
		$ls[$cs][2] = $row['filevb'];	
		$ls[$cs][3] = $row['tenvanban'];
		$ls[$cs][4] = $row['sovanban'];		
		$ls[$cs][5] = $row['ngayph'];
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
					<th style="background-color:rgb(54, 169, 224)" width="10%"><strong style='color:rgb(255, 255, 225)'>Số/Ký hiệu</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="12%"><strong style='color:rgb(255, 255, 225)'>Ngày ban hành</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="60%"><strong style='color:rgb(255, 255, 225)'>Trích yếu</strong></th>	
					<th style="background-color:rgb(54, 169, 224)" width="6%"><strong style='color:rgb(255, 255, 225)'>Tải về</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="7%"><strong style='color:rgb(255, 255, 225)'>Thao tác</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>idhethongvb</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>filevb</strong></th>	
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>tenvanban</strong></th>	
				</tr>				
			</thead>
			<tbody id="rowlist" class="rowlist">
<?php

			for($i=($j - 1)*15;$i<15*$j;$i++)
			{
				$a = $i + 1;
				if ($i < $cs)
				{				
					$mofile='/data/upload/'.$ls[$i][3];
				echo "<tr>";					
					echo "<td>$a</td>";
					echo "<td style='text-align: left;'>".$ls[$i][4]."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][5]."</td>";	
					echo "<td style='text-align: left;'>".catchuoi($ls[$i][1])."</td>";
					if (strpos($ls[$i][3],".pdf") > 0)
					{
						echo "<td><a href='download.php?id=$mofile' title = 'Tải file đính kèm'><img src='\assets\images\pdf.png'></a></td>";
						echo "<td><a href='javascript:void(0);' onclick='javascipt:window.open(\"$mofile\");' title = 'Xem chi tiết văn bản' class='popup'><img src='\assets\images\abc.png'></a></td>";						
					}
					else
					{
						echo "<td><a href='download.php?id=$mofile' title = 'Tải file đính kèm'><img src='\assets\images\icword.jpg'></a></td>";
						echo "<td></td>";
					}
					echo "<td style='text-align: left; display:none'>".$ls[$i][0]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][2]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][3]."</td>";
				echo "</tr>";
				}
			}
?>				
			</tbody>
		</table>
	</div>
</form>	
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>