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
$(document).ready(function() 
			{  
			   $('table tbody tr').dblclick(function() 
			   {
				jQuery('#modal-6').modal('show', {backdrop: 'static'}); 
				$("#soghitm").val($(this).find('td:nth-child(7)').text());
			}); 
			}
		    		  
		);
</script>
<script type="text/javascript" language="javascript" class="init">
			
$(document).ready(function() {
  $('#trang').change(function() {
		//alert(this.value);
		//$('#hsls').load('ajax_lietsy.php?id='+this.value);		
		//$('#thannhan').load('ajax_thannhan.php');
		//$('#giayto').load('ajax_giayto.php');	
		window.location.href="hethongbhyt.php?id="+this.value+">"+$("#loaidoituong").val();
  });
 });
 $(document).ready(function() {
  $('#loaidoituong').change(function() {
		//alert(this.value);
		//$('#hsls').load('ajax_lietsy.php?id='+this.value);		
		//$('#thannhan').load('ajax_thannhan.php');
		//$('#giayto').load('ajax_giayto.php');	
		window.location.href="hethongbhyt.php?id="+$("#trang").val()+">"+this.value;
  });
 });
</script>
<?php 
$ahs = explode('>',$_GET['id']);
if(isset($_POST["themmoi"]))
{
	$filedkurl1 ="";
	$tmp_name1 = $_FILES['filedk']['tmp_name'];
	if($tmp_name1 != "")
	{				
		$path_parts1 = pathinfo($_FILES['filedk']['name']);
		$fileup1 = $_POST['soghitm']."_".$path_parts1['filename'].".".$path_parts1['extension'];	
		move_uploaded_file($_FILES['filedk']['tmp_name'],"$_SERVER[DOCUMENT_ROOT]/data/upload/".$fileup1);
		$filedkurl1="$_SERVER[DOCUMENT_ROOT]/data/upload/".$fileup1;				
	}
	if ($filedkurl1 != "")
	{
		$sqlup="";
		if ($ahs[1]=='bm')
			$sqlup="Update hethongdv Set filebhyt='".$filedkurl1."' Where idhethong=".$_POST['soghitm'];
		else if ($ahs[1]=='ncc')
			$sqlup="Update hethongdv Set filedkncc='".$filedkurl1."' Where idhethong=".$_POST['soghitm'];
		else if ($ahs[1]=='nd150')
			$sqlup="Update hethongdv Set filedk150='".$filedkurl1."' Where idhethong=".$_POST['soghitm'];
		else if ($ahs[1]=='qd62')
			$sqlup="Update hethongdv Set filedk62='".$filedkurl1."' Where idhethong=".$_POST['soghitm'];
		else if ($ahs[1]=='qd290')
			$sqlup="Update hethongdv Set filedk290='".$filedkurl1."' Where idhethong=".$_POST['soghitm'];
		else if ($ahs[1]=='tnls')
			$sqlup="Update hethongdv Set filedktnls='".$filedkurl1."' Where idhethong=".$_POST['soghitm'];
		else if ($ahs[1]=='tnncc')
			$sqlup="Update hethongdv Set filedktnncc='".$filedkurl1."' Where idhethong=".$_POST['soghitm'];
		else if ($ahs[1]=='tnxp')
			$sqlup="Update hethongdv Set filedktnxp='".$filedkurl1."' Where idhethong=".$_POST['soghitm'];
		$kq=mysqli_query($con,$sqlup);
	}
}
?>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Hệ thống các file bảo hiểm y tế</h4>
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
$j = $ahs[0];
		echo "<div  class='col-sm-2' style='margin-top:-7px'>";
			echo "<select style='margin-left:-90px;' name='trang' class='form-control' id='trang'>";
	$ls =  array(array("1","2","3","4","5","6"));		
	$cs=0;$sql="";
	if ($madv[3]=="Tỉnh")
		$sql="select idhethong,tendonvi,tencaptren,filebhyt,filedkncc,filedk150,filedk62,filedk290,filedktnls,filedktnncc,filedktnxp from hethongdv";
	else if($madv[3]=="Huyện")
		$sql="select idhethong,tendonvi,tencaptren,filebhyt,filedkncc,filedk150,filedk62,filedk290,filedktnls,filedktnncc,filedktnxp from hethongdv where tendonvi='".$madv[0]."' or tencaptren='".$madv[0]."'";
	else if($madv[3]=="Xã")
		$sql="select idhethong,tendonvi,tencaptren,filebhyt,filedkncc,filedk150,filedk62,filedk290,filedktnls,filedktnncc,filedktnxp from hethongdv where tendonvi='".$madv[0]."'";
	$sql1=mysqli_query($con,$sql);
	$kq = 0;$kq1 = 1;
	if ($j == 1)
		echo "<option selected='selected' value='$kq1'>$kq1</option>";
	else
		echo "<option value='$kq1'>$kq1</option>";
	while($row=mysqli_fetch_array($sql1)){
		$ls[$cs][0] = $row['idhethong'];
		$ls[$cs][1] = $row['tendonvi'];
		$ls[$cs][2] = $row['tencaptren'];
		if ($ahs[1]=='bm')	
			$ls[$cs][3] = $row['filebhyt'];
		else if ($ahs[1]=='ncc')	
			$ls[$cs][3] = $row['filedkncc'];
		else if ($ahs[1]=='nd150')	
			$ls[$cs][3] = $row['filedk150'];
		else if ($ahs[1]=='qd62')	
			$ls[$cs][3] = $row['filedk62'];
		else if ($ahs[1]=='qd290')	
			$ls[$cs][3] = $row['filedk290'];
		else if ($ahs[1]=='tnls')	
			$ls[$cs][3] = $row['filedktnls'];
		else if ($ahs[1]=='tnncc')	
			$ls[$cs][3] = $row['filedktnncc'];
		else if ($ahs[1]=='tnxp')	
			$ls[$cs][3] = $row['filedktnxp'];
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
	<label class='col-sm-2'>Loại đối tượng:</label>
	<div class="col-sm-6" style='margin-top:-7px'>
		<select name="loaidoituong" id="loaidoituong" class="form-control">
		<?php
			if ($ahs[1]=='bm')
				echo "<option value='bm' selected='selected'>Mẹ Việt Nam anh hùng</option>";
			else
				echo "<option value='bm'>Mẹ Việt Nam anh hùng</option>";
			if ($ahs[1]=='ncc')
				echo "<option value='ncc' selected='selected'>Người có công</option>";
			else
				echo "<option value='ncc'>Người có công</option>";
			if ($ahs[1]=='nd150')
				echo "<option value='nd150' selected='selected'>Nghị định 150</option>";
			else
				echo "<option value='nd150'>Nghị định 150</option>";
			if ($ahs[1]=='qd62')
				echo "<option value='qd62' selected='selected'>Quyết đinh 62</option>";
			else
				echo "<option value='qd62'>Quyết đinh 62</option>";
			if ($ahs[1]=='qd290')
				echo "<option value='qd290' selected='selected'>Quyết đinh 290</option>";
			else
				echo "<option value='qd290'>Quyết đinh 290</option>";
			if ($ahs[1]=='tnls')
				echo "<option value='tnls' selected='selected'>Thân nhân liệt sỹ</option>";
			else
				echo "<option value='tnls'>Thân nhân liệt sỹ</option>";
			if ($ahs[1]=='tnncc')
				echo "<option value='tnncc' selected='selected'>Thân nhân người có công</option>";
			else
				echo "<option value='tnncc'>Thân nhân người có công</option>";
			if ($ahs[1]=='tnxp')
				echo "<option value='tnxp' selected='selected'>Thanh niên xung phong</option>";
			else
				echo "<option value='tnxp'>Thanh niên xung phong</option>";
			?>
		</select>		
	</div>			
	<div id = "hsls" class="table-responsive">
		<table class="table table-hover table-striped table-bordered table-advanced tablesorter display" id="table-2">
			<thead>
				<tr>					
					<th style="background-color:rgb(54, 169, 224)" width="5%"><strong style='color:rgb(255, 255, 225)'>STT</strong></th>										
					<th style="background-color:rgb(54, 169, 224)" width="10%"><strong style='color:rgb(255, 255, 225)'>Tên đơn vị</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="12%"><strong style='color:rgb(255, 255, 225)'>Tên cấp trên</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="60%"><strong style='color:rgb(255, 255, 225)'>Đường dẫn file</strong></th>	
					<th style="background-color:rgb(54, 169, 224)" width="6%"><strong style='color:rgb(255, 255, 225)'>Tải về</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="7%"><strong style='color:rgb(255, 255, 225)'>Thao tác</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>idhethong</strong></th>						
				</tr>				
			</thead>
			<tbody id="rowlist" class="rowlist">
<?php

			for($i=($j - 1)*15;$i<15*$j;$i++)
			{
				$a = $i + 1;
				if ($i < $cs)
				{				
					$mofile='/data/upload/'.substr($ls[$i][3],strripos($ls[$i][3],'/'));
				echo "<tr>";					
					echo "<td>$a</td>";
					echo "<td style='text-align: left;'>".$ls[$i][1]."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][2]."</td>";	
					echo "<td style='text-align: left;'>".$ls[$i][3]."</td>";
					if (strpos($ls[$i][3],".pdf") > 0)
					{
						echo "<td><a href='download.php?id=$mofile' title = 'Tải file đính kèm'><img src='\assets\images\pdf.png'></a></td>";
						echo "<td><a href='javascript:void(0);' onclick='javascipt:window.open(\"$mofile\");' title = 'Xem chi tiết văn bản' class='popup'><img src='\assets\images\abc.png'></a></td>";						
					}
					else if (strpos($ls[$i][3],".xls") > 0)
					{
						echo "<td><a href='download.php?id=$mofile' title = 'Tải file đính kèm'><img src='\assets\images\iconxls.jpg'></a></td>";
						echo "<td></td>";
					}
					else
					{
						echo "<td><a href='download.php?id=$mofile' title = 'Tải file đính kèm'><img src='\assets\images\icword.jpg'></a></td>";
						echo "<td></td>";
					}
					echo "<td style='text-align: left; display:none'>".$ls[$i][0]."</td>";					
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
					<form name="thoaidc" role='form' method='POST' enctype="multipart/form-data" class='form-horizontal form-groups-bordered'>
						<div id = "sTTKK2" class="form-group">
							<h4 style = "text-align:center; color:rgb(10, 10, 10)">CHỌN FILE DỮ LIỆU CẦN UPLOAD LẠI</h4>	
							<h4 style = "text-align:center; color:rgb(10, 10, 10)">(Lưu ý)</h4>
							<label for="field-3" class="col-sm-3 control-label">Chọn tên file cần upload lên:</label>
							<div class="col-sm-9">
								<input type="file" id="filedk" name="filedk" class="form-control"/>											
							</div>
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
							<input type="submit" name="themmoi" class="btn btn-blue" value = "Cập nhật">	
							<input name="soghitm" type="text" class="form-control" style="display:none" id="soghitm">	
					</form>						
			</div>
		</div>
	</div>
</div>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>