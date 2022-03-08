<script src='jquery-1.5.1.js' type='text/javascript'></script>	
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
</script>
<script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() 
			{  
			   $('table tbody tr').dblclick(function() 
			   { 
					if ($(this).find('td:last').text() == "ncc")
					{
						jQuery('#modal-7').modal('show', {backdrop: 'static'});
						$("#hotenlscs").val($(this).find('td:nth-child(2)').text());	
					}
			   }); 
			}
		    		  
		);
</script>
<?php 
require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
$j = $_GET['id'];
$ls =  array(array("A","B","C","D","E"));		
	$cs=0;
	$sql="select * from hosols";
	$sql1=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($sql1)){
		$ls[$cs][0] = $row['hoten'];
		$ls[$cs][1] = $row['ngaysinh'];
		$ls[$cs][2] = $row['gioitinh'];
		$ls[$cs][3] = $row['nguyenquan'];
		$ls[$cs][4] = $row['truquan'];
		$cs = $cs + 1;
	}
?>
	<div id = "hsls" class="table-responsive">
		<table class="table table-hover table-striped table-bordered table-advanced tablesorter display" id="table-2">
			<thead>
				<tr>
					<th style="background-color:rgb(16, 78, 211)" width="6%"><strong>STT</strong></th>
					<th style="background-color:rgb(16, 78, 211)" width="20%"><strong>Họ và tên</strong></th>
					<th style="background-color:rgb(16, 78, 211)" width="8%"><strong>Ngày sinh</strong></th>
					<th style="background-color:rgb(16, 78, 211)" width="6%"><strong>Giới tính</strong></th>
					<th style="background-color:rgb(16, 78, 211)" width="30%"><strong>Nguyên quán</strong></th>
					<th style="background-color:rgb(16, 78, 211)" width="30%"><strong>Trú quán</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>Trú quán</strong></th>					
				</tr>				
			</thead>
			<tbody id="rowlist" class="rowlist">
<?php
			for($i=($j - 1)*5;$i<5*$j;$i++)
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
					echo "<td style='text-align: left;'>".$ls[$i][4]."</td>";
					echo "<td style='text-align: left; display:none'>ncc</td>";
				echo "</tr>";
				}				
			}
?>				
			</tbody>
		</table>
	</div>	