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
	jQuery('#modal-2').modal('show', {backdrop: 'static'});	
	//window.location.href="/Thoaikx/DsMLS16.php?id="+$("#xain").val()+">"+$("#huyenin").val();
}	
</script>
<script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() 
			{  
			   $('table tbody tr').dblclick(function() 
			   {
					jQuery('#modal-7').modal('show', {backdrop: 'static'});
					$("#idnghiatrangcs").val($(this).find('td:nth-child(25)').text());	
					$("#somocs").val($(this).find('td:nth-child(3)').text());
					$("#hangcs").val($(this).find('td:nth-child(4)').text());
					$("#khucs").val($(this).find('td:nth-child(5)').text());
					$("#locs").val($(this).find('td:nth-child(6)').text());
					$("#khaccs").val($(this).find('td:nth-child(7)').text());
					$("#ltttmocs").val($(this).find('td:nth-child(8)').text());
					$("#hotenlscs").val($(this).find('td:nth-child(9)').text());
					$("#ngaysinhcs").val($(this).find('td:nth-child(10)').text());
					$("#nguyenquancs").val($(this).find('td:nth-child(11)').text());
					$("#capbaccs").val($(this).find('td:nth-child(12)').text());
					$("#chucvucs").val($(this).find('td:nth-child(13)').text());
					$("#donvics").val($(this).find('td:nth-child(14)').text());
					$("#ngayhscs").val($(this).find('td:nth-child(15)').text());
					$("#thongtinmocs").val($(this).find('td:nth-child(16)').text());
					$("#quytaptudaucs").val($(this).find('td:nth-child(17)').text());
					$("#diachictcs").val($(this).find('td:nth-child(18)').text());						
					$("#donviqtcs").val($(this).find('td:nth-child(19)').text());
					$("#ngaycdcs").val($(this).find('td:nth-child(20)').text());
					$("#divatcs").val($(this).find('td:nth-child(21)').text());
					$("#xacs").val($(this).find('td:nth-child(22)').text());						
					$("#huyencs").val($(this).find('td:nth-child(23)').text());
					$("#idmolscs").val($(this).find('td:nth-child(24)').text());					
			   }); 
			}
		    		  
		);
$(document).ready(function() {
  $('#trang').change(function() {
		//alert(this.value);
		//$('#hsls').load('ajax_lietsy.php?id='+this.value);		
		//$('#thannhan').load('ajax_thannhan.php');
		//$('#giayto').load('ajax_giayto.php');	
		window.location.href="molietsynthuyen.php?id="+this.value+">0";
  });
 });		
</script>
<?php
/* if(isset($_POST["capnhatts"]))
	{
		if ($madv[3]=="T???nh")
		{
			$sql1 = "Select idnghiatrang,tennghiatrang From nghiatrang Where idnghiatrang=".$_POST['idnghiatrangcs'];
			$qrt1 = mysqli_query($con,$sql1);	$ten="";		
			while($rt1=@mysqli_fetch_array($qrt1))
			{																			
				$ten = $rt1['tennghiatrang'];
			}
			//echo $_POST['idnghiatrangcs'];
			//$ngtr = explode('=',$_POST['idnghiatrangcs']);	
			$sqlup = "Update molietsy Set idnghiatrang=".$_POST['idnghiatrangcs'].", somo='".$_POST['somocs']."', hang='".$_POST['hangcs']."', khu='".$_POST['khucs']."', ";
			$sqlup = $sqlup."lo='".$_POST['locs']."',khac='".$_POST['khaccs']."', ltttmo='".$_POST['ltttmocs']."', hotenls='".$_POST['hotenlscs']."', ";
			$sqlup = $sqlup."ngaysinh='".$_POST['ngaysinhcs']."', nguyenquan='".$_POST['nguyenquancs']."', capbac='".$_POST['capbaccs']."', chucvu='".$_POST['chucvucs']."', ";
			$sqlup = $sqlup."donvi='".$_POST['donvics']."', ngayhs='".$_POST['ngayhscs']."', thongtinmo='".$_POST['thongtinmocs']."', ";
			$sqlup = $sqlup."quytaptudau='".$_POST['quytaptudaucs']."', diachict='".$_POST['diachictcs']."', donviqt='".$_POST['donviqtcs']."', ";
			$sqlup = $sqlup."ngaycd='".$_POST['ngaycdcs']."', divat='".$_POST['divatcs']."', xa='".$_POST['xacs']."', huyen='".$_POST['huyencs']."', tennghiatrang='".$ten."'";		
			$sqlup = $sqlup." where idmols = ".$_POST['idmolscs'];
			$kq=mysqli_query($con,$sqlup);
		}
	}
if(isset($_POST["themmoi"]))
{
	if ($madv[3]=="T???nh")
	{
		$sql1 = "Select idnghiatrang,tennghiatrang From nghiatrang Where idnghiatrang=".$_POST['idnghiatrang'];
		$qrt1 = mysqli_query($con,$sql1);	$ten="";		
		while($rt1=@mysqli_fetch_array($qrt1))
		{																			
			$ten = $rt1['tennghiatrang'];
		}
		//$ngtr = explode('=',$_POST['idnghiatrang']);
		$sqlup = "Insert into molietsy Set idnghiatrang=".$_POST['idnghiatrang'].", somo='".$_POST['somo']."', hang='".$_POST['hang']."', khu='".$_POST['khu']."', ";
		$sqlup = $sqlup."lo='".$_POST['lo']."',khac='".$_POST['khac']."', ltttmo='".$_POST['ltttmo']."', hotenls='".$_POST['hotenls']."', ";
		$sqlup = $sqlup."ngaysinh='".$_POST['ngaysinh']."', nguyenquan='".$_POST['nguyenquan']."', capbac='".$_POST['capbac']."', chucvu='".$_POST['chucvu']."', ";
		$sqlup = $sqlup."donvi='".$_POST['donvi']."', ngayhs='".$_POST['ngayhs']."', thongtinmo='".$_POST['thongtinmo']."', ";
		$sqlup = $sqlup."quytaptudau='".$_POST['quytaptudau']."', diachict='".$_POST['diachict']."', donviqt='".$_POST['donviqt']."', ";
		$sqlup = $sqlup."ngaycd='".$_POST['ngaycd']."', divat='".$_POST['divat']."', xa='".$_POST['xa']."', huyen='".$_POST['huyen']."', tennghiatrang='".$ten."'";
		//echo $sqlup;	
		$kq=mysqli_query($con,$sqlup);
	}
}	 */
?>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">H???? s?? m??? li???t s???</h4>
		</div>
			<div class="modal-body">
<form role='form' method='POST' class='form-horizontal form-groups-bordered'>		
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModaldc();" class='btn btn-success'>
			<i class='entypo-print'></i>Danh s??ch m??? li???t s???
		</a>
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModaltim();" class='btn btn-success'>
			<i class='entypo-print'></i>T??m ki???m h??? s??
		</a>
		<input name="xain" type="text" class="form-control" style="display:none" id="xain" value = "">
		<input name="huyenin" type="text" class="form-control" style="display:none" id="huyenin" value = "<?php echo $madv[0];?>">
		<label class='col-sm-2'>Trang s???:</label>
<?php
$dkkhac=$_GET['id'];
$ahs = explode('>',$_GET['id']);
$j = $ahs[0];
		echo "<div  class='col-sm-2' style='margin-top:-7px'>";
			echo "<select style='margin-left:-90px;' name='trang' class='form-control' id='trang'>";
	$ls =  array(array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24"));		
	$cs=0;$sql="";
	if (strlen($dkkhac) > 7)
{
	$sql="select * from molietsy where xa='".str_replace('_',' ',$ahs[1])."' and huyen='".$madv[0]."'";
}
else
{
	$sql="select * from molietsy where huyen='".$madv[0]."'";
}
	$sql1=mysqli_query($con,$sql);
	$kq = 0;$kq1 = 1;
	if ($j == 1)
		echo "<option selected='selected' value='$kq1'>$kq1</option>";
	else
		echo "<option value='$kq1'>$kq1</option>";
	while($row=mysqli_fetch_array($sql1)){					
		$ls[$cs][0] = $row['tennghiatrang'];
		$ls[$cs][1] = $row['somo'];
		$ls[$cs][2] = $row['hang'];
		$ls[$cs][3] = $row['khu'];
		$ls[$cs][4] = $row['lo'];
		$ls[$cs][5] = $row['khac'];
		$ls[$cs][6] = $row['ltttmo'];
		$ls[$cs][7] = $row['hotenls'];
		$ls[$cs][8] = $row['ngaysinh'];
		$ls[$cs][9] = $row['nguyenquan'];
		$ls[$cs][10] = $row['capbac'];
		$ls[$cs][11] = $row['chucvu'];
		$ls[$cs][12] = $row['donvi'];
		$ls[$cs][13] = $row['ngayhs'];
		$ls[$cs][14] = $row['thongtinmo'];
		$ls[$cs][15] = $row['quytaptudau'];
		$ls[$cs][16] = $row['diachict'];
		$ls[$cs][17] = $row['donviqt'];
		$ls[$cs][18] = $row['ngaycd'];		
		$ls[$cs][19] = $row['divat'];
		$ls[$cs][20] = $row['xa'];
		$ls[$cs][21] = $row['huyen'];
		$ls[$cs][22] = $row['idmols'];
		$ls[$cs][23] = $row['idnghiatrang'];
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
					<th style="background-color:rgb(54, 169, 224)" width="15%"><strong style='color:rgb(255, 255, 225)'>T??n Ngh??a trang</strong></th>					
					<th style="background-color:rgb(54, 169, 224)" width="6%"><strong style='color:rgb(255, 255, 225)'>S??? m???</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="6%"><strong style='color:rgb(255, 255, 225)'>H??ng</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="6%"><strong style='color:rgb(255, 255, 225)'>Khu</strong></th>					
					<th style="background-color:rgb(54, 169, 224)" width="6%"><strong style='color:rgb(255, 255, 225)'>L??</strong></th>					
					<th style="background-color:rgb(54, 169, 224)" width="6%"><strong style='color:rgb(255, 255, 225)'>Kh??c</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="19%"><strong style='color:rgb(255, 255, 225)'>Th??ng tin tr??n m???</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="30%"><strong style='color:rgb(255, 255, 225)'>H??? t??n li???t s???</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ngaysinh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>nguyenquan</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>capbac</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>chucvu</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>donvi</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ngayhs</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>thongtinmo</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>quytaptudau</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>diachict</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>donviqt</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ngaycd</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>divat</strong></th>					
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>xa</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>huyen</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>idmols</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ngtr</strong></th>
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
					echo "<td style='text-align: left;'>".$ls[$i][1]."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][2]."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][3]."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][4]."</td>";	
					echo "<td style='text-align: left;'>".$ls[$i][5]."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][6]."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][7]."</td>";
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
					echo "<td style='text-align: left; display:none'>".$ls[$i][22]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][23]."</td>";
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
							<label for="field-3" class="col-sm-2 control-label">T??n ngh??a trang:</label>
							<div class="col-sm-10">								
								<select name="idnghiatrang" id="idnghiatrang" class="form-control">
									<?php
									$sqltcml = "Select idnghiatrang,tennghiatrang From nghiatrang";
									$qrtcml = mysqli_query($con,$sqltcml);			
									while($rtcml=@mysqli_fetch_array($qrtcml))
									{																			
										echo "<option value=".$rtcml['idnghiatrang'].">".$rtcml['tennghiatrang']."</option>";
									}
									?>
									<option value="" selected = "selected"></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">S??? m???:</label>
							<div class="col-sm-4">
								<input name="somo" type="text" class="form-control" id="somo">
							</div>		
							<label for="field-3" class="col-sm-2 control-label">H??ng:</label>
							<div class="col-sm-4">
								<input name="hang" type="text" class="form-control" id="hang">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Khu:</label>
							<div class="col-sm-4">
								<input name="khu" type="text" class="form-control" id="khu">
							</div>		
							<label for="field-3" class="col-sm-2 control-label">L??:</label>
							<div class="col-sm-4">
								<input name="lo" type="text" class="form-control" id="lo">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Kh??c:</label>
							<div class="col-sm-4">
								<input name="khac" type="text" class="form-control" id="khac">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Lo???i th??ng tin tr??n m???:</label>
							<div class="col-sm-4">
								<select name="ltttmo" id="ltttmo" class="form-control">
									<option value="1. M??? c?? ?????y ????? th??ng tin">1. M??? c?? ?????y ????? th??ng tin</option>
									<option value="2. M??? c?? m???t ph???n th??ng tin">2. M??? c?? m???t ph???n th??ng tin</option>
									<option value="3. M??? kh??ng c?? th??ng tin">3. M??? kh??ng c?? th??ng tin</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">H??? t??n li???t s???:</label>
							<div class="col-sm-4">
								<input name="hotenls" type="text" class="form-control" id="hotenls">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ng??y sinh:</label>
							<div class="col-sm-4">
								<input name="ngaysinh" type="text" class="form-control" id="ngaysinh">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Nguy??n qu??n:</label>
							<div class="col-sm-10">
								<input name="nguyenquan" type="text" class="form-control" id="nguyenquan">
							</div>
							<label for="field-3" class="col-sm-2 control-label">C???p b???c:</label>
							<div class="col-sm-4">
								<input name="capbac" type="text" class="form-control" id="capbac">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ch???c v???:</label>
							<div class="col-sm-4">
								<input name="chucvu" type="text" class="form-control" id="chucvu">
							</div>
							<label for="field-3" class="col-sm-2 control-label">????n v???:</label>
							<div class="col-sm-4">
								<input name="donvi" type="text" class="form-control" id="donvi">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ng??y hy sinh:</label>
							<div class="col-sm-4">
								<input name="ngayhs" type="text" class="form-control" id="ngayhs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Th??ng tin m???:</label>
							<div class="col-sm-4">
								<select name="thongtinmo" id="thongtinmo" class="form-control">
									<option value="1. M??? c?? h??i c???t">1. M??? c?? h??i c???t</option>
									<option value="2. M??? ???? di chuy???n">2. M??? ???? di chuy???n</option>
									<option value="3. M??? v???ng">3. M??? v???ng</option>
									<option value="4. Ch??a x??c ?????nh">4. Ch??a x??c ?????nh</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Quy t???p t??? ????u:</label>
							<div class="col-sm-4">
								<select name="quytaptudau" id="quytaptudau" class="form-control">
									<option value="1. Trong n?????c">1. Trong n?????c</option>
									<option value="2. Campuchia">2. Campuchia</option>
									<option value="3. L??o">3. L??o</option>
									<option value="4. Kh??c">4. Kh??c</option>
									<option value="5. Ch??a x??c ?????nh ???????c th??ng tin quy t???p">5. Ch??a x??c ?????nh ???????c th??ng tin quy t???p</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">?????a ch??? c??? th???:</label>
							<div class="col-sm-4">
								<input name="diachict" type="text" class="form-control" id="diachict">
							</div>
							<label for="field-3" class="col-sm-2 control-label">????n v??? quy t???p:</label>
							<div class="col-sm-4">
								<input name="donviqt" type="text" class="form-control" id="donviqt">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ng??y chuy???n ?????n:</label>
							<div class="col-sm-4">
								<input name="ngaycd" type="text" class="form-control" id="ngaycd">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Di v???t:</label>
							<div class="col-sm-4">
								<input name="divat" type="text" class="form-control" id="divat">
							</div>
							<label for="field-3" class="col-sm-2 control-label">X??:</label>
							<div class="col-sm-4">
								<input name="xa" type="text" class="form-control" id="xa">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Huy???n:</label>
							<div class="col-sm-4">
								<input name="huyen" type="text" class="form-control" id="huyen">
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
							<button type="button" class="btn btn-black" data-dismiss="modal">????ng</button>
														
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
							<label for="field-3" class="col-sm-2 control-label">T??n ngh??a trang:</label>
							<div class="col-sm-10">								
								<select name="idnghiatrangcs" id="idnghiatrangcs" class="form-control">
									<?php
									$sqltcml = "Select idnghiatrang,tennghiatrang From nghiatrang";
									$qrtcml = mysqli_query($con,$sqltcml);			
									while($rtcml=@mysqli_fetch_array($qrtcml))
									{																				
										echo "<option value=".$rtcml['idnghiatrang'].">".$rtcml['tennghiatrang']."</option>";
									}
									?>
									<option value="" selected = "selected"></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">S??? m???:</label>
							<div class="col-sm-4">
								<input name="somocs" type="text" class="form-control" id="somocs">
							</div>		
							<label for="field-3" class="col-sm-2 control-label">H??ng:</label>
							<div class="col-sm-4">
								<input name="hangcs" type="text" class="form-control" id="hangcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Khu:</label>
							<div class="col-sm-4">
								<input name="khucs" type="text" class="form-control" id="khucs">
							</div>		
							<label for="field-3" class="col-sm-2 control-label">L??:</label>
							<div class="col-sm-4">
								<input name="locs" type="text" class="form-control" id="locs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Kh??c:</label>
							<div class="col-sm-4">
								<input name="khaccs" type="text" class="form-control" id="khaccs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Lo???i th??ng tin tr??n m???:</label>
							<div class="col-sm-4">
								<select name="ltttmocs" id="ltttmocs" class="form-control">
									<option value="1. M??? c?? ?????y ????? th??ng tin">1. M??? c?? ?????y ????? th??ng tin</option>
									<option value="2. M??? c?? m???t ph???n th??ng tin">2. M??? c?? m???t ph???n th??ng tin</option>
									<option value="3. M??? kh??ng c?? th??ng tin">3. M??? kh??ng c?? th??ng tin</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">H??? t??n li???t s???:</label>
							<div class="col-sm-4">
								<input name="hotenlscs" type="text" class="form-control" id="hotenlscs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ng??y sinh:</label>
							<div class="col-sm-4">
								<input name="ngaysinhcs" type="text" class="form-control" id="ngaysinhcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Nguy??n qu??n:</label>
							<div class="col-sm-10">
								<input name="nguyenquancs" type="text" class="form-control" id="nguyenquancs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">C???p b???c:</label>
							<div class="col-sm-4">
								<input name="capbaccs" type="text" class="form-control" id="capbaccs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ch???c v???:</label>
							<div class="col-sm-4">
								<input name="chucvucs" type="text" class="form-control" id="chucvucs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">????n v???:</label>
							<div class="col-sm-4">
								<input name="donvics" type="text" class="form-control" id="donvics">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ng??y hy sinh:</label>
							<div class="col-sm-4">
								<input name="ngayhscs" type="text" class="form-control" id="ngayhscs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Th??ng tin m???:</label>
							<div class="col-sm-4">
								<select name="thongtinmocs" id="thongtinmocs" class="form-control">
									<option value="1. M??? c?? h??i c???t">1. M??? c?? h??i c???t</option>
									<option value="2. M??? ???? di chuy???n">2. M??? ???? di chuy???n</option>
									<option value="3. M??? v???ng">3. M??? v???ng</option>
									<option value="4. Ch??a x??c ?????nh">4. Ch??a x??c ?????nh</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Quy t???p t??? ????u:</label>
							<div class="col-sm-4">
								<select name="quytaptudaucs" id="quytaptudaucs" class="form-control">
									<option value="1. Trong n?????c">1. Trong n?????c</option>
									<option value="2. Campuchia">2. Campuchia</option>
									<option value="3. L??o">3. L??o</option>
									<option value="4. Kh??c">4. Kh??c</option>
									<option value="5. Ch??a x??c ?????nh ???????c th??ng tin quy t???p">5. Ch??a x??c ?????nh ???????c th??ng tin quy t???p</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">?????a ch??? c??? th???:</label>
							<div class="col-sm-4">
								<input name="diachictcs" type="text" class="form-control" id="diachictcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">????n v??? quy t???p:</label>
							<div class="col-sm-4">
								<input name="donviqtcs" type="text" class="form-control" id="donviqtcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ng??y chuy???n ?????n:</label>
							<div class="col-sm-4">
								<input name="ngaycdcs" type="text" class="form-control" id="ngaycdcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Di v???t:</label>
							<div class="col-sm-4">
								<input name="divatcs" type="text" class="form-control" id="divatcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">X??:</label>
							<div class="col-sm-4">
								<input name="xacs" type="text" class="form-control" id="xacs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Huy???n:</label>
							<div class="col-sm-4">
								<input name="huyencs" type="text" class="form-control" id="huyencs">
							</div>
							<div class="col-sm-10">
								<input name="idmolscs" type="text" class="form-control" style="display:none" id="idmolscs">
							</div>
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">????ng</button>
														
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
							<h4 style = "text-align:center; color:rgb(10, 10, 10)">CH???N T??N X?? C???N T??M PH???N M??? LI???T S???</h4>	
							<label for="field-3" class="col-sm-3 control-label">T??n x??:</label>
							<div class="col-sm-9">								
								<select name="tenxatao" id="tenxatao" class="form-control">
									<?php
									$sqltcml = "Select tenxa From xa inner join huyen on xa.tthuyen=huyen.tthuyen where tenhuyen='".$madv[0]."'";
									$qrtcml = mysqli_query($con,$sqltcml);			
									while($rtcml=@mysqli_fetch_array($qrtcml))
									{
										echo "<option value=".str_replace(' ','_',$rtcml['tenxa']).">".$rtcml['tenxa']."</option>";
									}
									?>
									<option value="" selected = "selected"></option>
								</select>
							</div>
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">????ng</button>
							<input type="submit" name="chuyen" class="btn btn-blue" value = "T??m ki???m" id = "hhhh1">							
					</form>						
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-2">
	<div class="modal-dialog">
		<div class="modal-content">				
			<div class="modal-body">				
					<form name="thoaiin" role='form' method='POST' action="/Thoaikx/DsMLS16k.php" class='form-horizontal form-groups-bordered'>
						<div id = "sTTKK1" class="form-group">
							<label for="field-3" class="col-sm-3 control-label">T??n ????n v???:</label>
							<div class="col-sm-9">								
								<select name="huyenkx" id="huyenkx" class="form-control">
									<?php
									$sqltcml = "Select tenxa From xa inner join huyen on xa.tthuyen=huyen.tthuyen where tenhuyen='".$madv[0]."'";
									$qrtcml = mysqli_query($con,$sqltcml);			
									while($rtcml=@mysqli_fetch_array($qrtcml))
									{
										echo "<option value=".str_replace(' ','_',$rtcml['tenxa']).">".$rtcml['tenxa']."</option>";
									}
									?>
									<option value="" selected = "selected"></option>
								</select>
							</div>																
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">????ng</button>
							<input type="submit" name="create1" class="btn btn-blue" value = "T???o b??o c??o">							
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
			return "molietsynthuyen.php?id=" + $('#trang').val() + ">" + $('#idmolscs').val();			
    }
	function get_action1() {				
			return "molietsynthuyen.php?id="+$('#trangm').val()+">0";
	}
	function get_action2() {	
		//alert("dfj;sd");
			return "molietsynthuyen.php?id="+"1>"+$('#tenxatao').val();		
    }
</script>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>