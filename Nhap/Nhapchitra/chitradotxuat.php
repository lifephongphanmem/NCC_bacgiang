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
	jQuery('#modal-8').modal('show', {backdrop: 'static'});
}	
function showAjaxModalcds()
{		
	jQuery('#modal-9').modal('show', {backdrop: 'static'});
}
//
function showAjaxModalctim()
{		
	jQuery('#modal-2').modal('show', {backdrop: 'static'});
}
function showAjaxModalcthem()
{		
	jQuery('#modal-3').modal('show', {backdrop: 'static'});
}
function showAjaxModalcin()
{		
	jQuery('#modal-4').modal('show', {backdrop: 'static'});
}
//
</script>
<script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() 
			{  
			   $('table tbody tr').dblclick(function() 
			   {
					jQuery('#modal-7').modal('show', {backdrop: 'static'});
					$("#hotencs").val($(this).find('td:nth-child(2)').text());	
					$("#diachics").val($(this).find('td:nth-child(3)').text());	
					$("#noidungcs").val($(this).find('td:nth-child(5)').text());	
					$("#loaidoituongcs").val($(this).find('td:nth-child(14)').text());
					$("#mucquacs").val($(this).find('td:nth-child(6)').text());
					$("#namquacs").val($(this).find('td:nth-child(7)').text());
					$("#idquatet27cs").val($(this).find('td:nth-child(8)').text());
					$("#hotenlietsycs").val($(this).find('td:nth-child(9)').text());	
			   }); 
			}
		    		  
		);
$(document).ready(function() {
  $('#trang').change(function() {
		//alert(this.value);
		//$('#hsls').load('ajax_lietsy.php?id='+this.value);		
		//$('#thannhan').load('ajax_thannhan.php');
		//$('#giayto').load('ajax_giayto.php');	
		window.location.href="chitrahangthang.php?id="+this.value+">0";
  });
 });
</script>
<script type="text/javascript">
	$(document).ready(function() {
	  $('#hhhh1').click(function() {
	   giatri = kiemtrahschon();   
	   $("#sobg1").val(giatri);	   
	  });
	 });	
	function kiemtrahschon() {

        var sohoso = '';

        $.each($("input[name='KT']:checked"), function(){
            sohoso += ($(this).attr('id')) + '>';
        });
        return sohoso;
    }
</script>
<?php
/* if(isset($_POST["capnhatts"]))
	{	
		$sqlup = "Update quatet27 Set hoten='".$_POST['hotencs']."', diachi='".$_POST['diachics']."', loaidoituong='".$_POST['loaidoituongcs']."', ";
		$sqlup = $sqlup."noidung='".$_POST['noidungcs']."', mucqua=".str_replace(',','',str_replace('.','',$_POST['mucquacs'])).", namqua='".$_POST['namquacs']."', hotenlietsy='".$_POST['hotenlietsycs']."'";
		$sqlup = $sqlup." where idquatet27 = ".$_POST['idquatet27cs'];
		$kq=mysqli_query($con,$sqlup);
	}

if(isset($_POST["themmoi"]))
	{	
		$sqlup = "Insert into quatet27 Set hoten='".$_POST['hoten']."', diachi='".$_POST['diachi']."', loaidoituong='".$_POST['loaidoituong']."', ";
		$sqlup = $sqlup."noidung='".$_POST['noidung']."', mucqua=".str_replace(',','',str_replace('.','',$_POST['mucqua'])).", namqua='".$_POST['namqua']."', hotenlietsy='".$_POST['hotenlietsy']."'";
		$sqlup = $sqlup.", huyen='".$madv[0]."', xa='".str_replace('_',' ',$_POST['xahuyen'])."', chuyen='DK'";
		$kq=mysqli_query($con,$sqlup);
	} */
if (isset($_POST['chuyen']))
{
	$key=explode('>',$_POST['sobg1']);
	$chars=str_split($_POST["sobg1"]);
	$count=0;
	foreach($chars as $char){
		if($char == '>'){
			$count++;
		}
	}
	$i=0;
	//echo $count;
	for($i=0;$i<$count;$i++){
		//echo $madv[0];
	$sql="Update quatet27 Set chuyen='Chuy???n' Where idquatet27=".$key[$i];
	$kq=mysqli_query($con,$sql);
	}
}		
?>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Danh s??ch chi tr??? tr??? c???p - ph??? c???p ?????t xu???t</h4>
		</div>
			<div class="modal-body">
<form role='form' method='POST' class='form-horizontal form-groups-bordered'>
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModalctim();" class='btn btn-success'>
			<i class='entypo-print'></i>Tim ki???m
		</a>		
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModalcin();" class='btn btn-success'>
			<i class='entypo-print'></i>In danh s??ch
		</a>
		<input name="sobg" type="text" class="form-control" style = "Display:none;" id="sobg">
		<label class='col-sm-2'>Trang s???:</label>
<?php
$ahs = explode('>',$_GET['id']);
$j = $ahs[0];
$ls =  array(array("1","2","3","4","5","6","7","8","9","10","11","12"));		
$cs=0;
		$sql="select * from hosoah";
		echo "<div  class='col-sm-2' style='margin-top:-7px'>";
			echo "<select style='margin-left:-90px;' name='trang' class='form-control' id='trang'>";
	
	$sql1=mysqli_query($con,$sql);
	$kq = 0;$kq1 = 1;
	if ($j == 1)
		echo "<option selected='selected' value='$kq1'>$kq1</option>";
	else
		echo "<option value='$kq1'>$kq1</option>";
	while($row=mysqli_fetch_array($sql1)){					
		$ls[$cs][0] = $row['hoten'];
		$ls[$cs][1] = $row['truquan'];
		$ls[$cs][2] = 'Anh h??ng l???c l?????ng v?? trang, Anh h??ng lao ?????ng';
		$ls[$cs][3] = 'Anh h??ng l???c l?????ng v?? trang, Anh h??ng lao ?????ng';
		$ls[$cs][4] = '1,361,000';
		$ls[$cs][5] = '12/2021';
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
					<th style="background-color:rgb(54, 169, 224)" width="15%"><strong style='color:rgb(255, 255, 225)'>H??? v?? t??n</strong></th>					
					<th style="background-color:rgb(54, 169, 224)" width="10%"><strong style='color:rgb(255, 255, 225)'>?????a ch???</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="10%"><strong style='color:rgb(255, 255, 225)'>Lo???i ph??? c???p</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>M???c ti???n</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="7%"><strong style='color:rgb(255, 255, 225)'>Th??ng/N??m</strong></th>
				</tr>
			</thead>
			<tbody id="rowlist" class="rowlist">
<?php
function catchuoi($chuoi)	
{
	$kq = "";$kq1 = "";			
	if (strlen($chuoi) <= 52)
	{
		$kq = $chuoi;
	}
	else
	{
		$kq1 = substr($chuoi,0,52);
		$vitri = strrpos($kq1," ");
		$kq = substr($chuoi,0,$vitri)."<br>".substr($chuoi,$vitri,strlen($chuoi)-$vitri);
	}
	return $kq;
}
function catchuoi1($chuoi)	
{
	$kq = "";$kq1 = "";			
	if (strlen($chuoi) <= 35)
	{
		$kq = $chuoi;
	}
	else
	{
		$kq1 = substr($chuoi,0,35);
		$vitri = strrpos($kq1," ");
		$kq = substr($chuoi,0,$vitri)."<br>".substr($chuoi,$vitri,strlen($chuoi)-$vitri);
	}
	return $kq;
}
$stt = 0;
			for($i=($j - 1)*15;$i<15*$j;$i++)
			{
				$stt++;
				if ($i < $cs)
				{					
				echo "<tr>";					
					echo "<td>$stt</td>";
					echo "<td style='text-align: left;'>".$ls[$i][0]."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][1]."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][2]."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][4]."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][5]."</td>";
				echo "</tr>";
				}
			}
?>				
			</tbody>
		</table>
	</div>
</form>	
<div class="modal fade" id="modal-7">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">				
					<form name="thoaics" role='form' method='POST' enctype="multipart/form-data" class='form-horizontal form-groups-bordered'>
						<div id = "sTTKK" class="form-group">
							<label for="field-3" class="col-sm-3 control-label">H??? t??n ?????i t?????ng:</label>
							<div class="col-sm-9">
								<input name="hotencs" type="text" class="form-control" id="hotencs">
							</div>	
							<label for="field-3" class="col-sm-3 control-label">?????a ch???:</label>
							<div class="col-sm-9">
								<input name="diachics" type="text" class="form-control" id="diachics">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Lo???i ?????i t?????ng:</label>
							<div class="col-sm-9">								
								<select name="loaidoituongcs" id="loaidoituongcs" class="form-control">
									<option value="lt">Ng?????i ho???t ?????ng c??ch m???ng tr?????c 01/1/1945</option>
									<option value="tkn">Ng?????i ho???t ?????ng c??ch m???ng t??? ng??y 01/01/1945 ?????n kh???i ngh??a th??ng 8/1945</option>
									<option value="bm">B?? m??? Vi???t Nam anh h??ng</option>
									<option value="ah">Anh h??ng l???c l?????ng v?? trang, Anh h??ng Lao ?????ng</option>
									<option value="tnls">Th??n nh??n li???t s?? ??ang h?????ng tr??? c???p h??ng th??ng</option>
									<option value="tnlstc">Ng?????i th??? c??ng</option>
									<option value="tbdb">Th????ng binh, th????ng binh lo???i B 81% tr??? l??n</option>
									<option value="tb">Th????ng binh, th????ng binh lo???i B 81% tr??? xu???ng</option>
									<option value="ccnd">Ng?????i c?? c??ng gi??p ????? c??ch m???ng ??ang h?????ng tr??? c???p nu??i d?????ng h??ng th??ng</option>
									<option value="cc">Ng?????i c?? c??ng gi??p ????? c??ch m???ng ??ang h?????ng tr??? c???p h??ng th??ng</option>
									<option value="hhdb">Ng?????i h??kc b??? nhi???m ch???t ?????c h??a h???c 81% tr??? l??n</option>
									<option value="hh">Ng?????i h??kc b??? nhi???m ch???t ?????c h??a h???c 81% tr??? xu???ng</option>
									<option value="td">Ng?????i b??? ?????ch b???t t?? ????y</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-3 control-label">N???i dung qu??:</label>
							<div class="col-sm-9">
								<input name="noidungcs" type="text" class="form-control" id="noidungcs">
							</div>	
							<label for="field-3" class="col-sm-3 control-label">M???c qu??:</label>
							<div class="col-sm-9">
								<input name="mucquacs" type="text" class="form-control" data-mask="fdecimal" id="mucquacs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">N??m:</label>
							<div class="col-sm-9">								
								<input name="namquacs" type="text" class="form-control" id="namquacs">
							</div>																				
							<div class="col-sm-10">
								<input name="idquatet27cs" type="text" class="form-control" style="display:none" id="idquatet27cs">
							</div>
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">????ng</button>														
					</form>						
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-3">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">				
					<form name="thoaitaomoi" role='form' method='POST' enctype="multipart/form-data" class='form-horizontal form-groups-bordered'>
						<div id = "sTTKK" class="form-group">
							<label for="field-3" class="col-sm-3 control-label">H??? t??n ?????i t?????ng:</label>
							<div class="col-sm-9">
								<input name="hoten" type="text" class="form-control" id="hoten">
							</div>	
							<label for="field-3" class="col-sm-3 control-label">?????a ch???:</label>
							<div class="col-sm-9">
								<input name="diachi" type="text" class="form-control" id="diachi">
							</div>
							<label for="field-3" class="col-sm-3 control-label">H??? t??n li???t s???:</label>
							<div class="col-sm-9">
								<input name="hotenlietsy" type="text" class="form-control" id="hotenlietsy">
							</div>	
							<label for="field-3" class="col-sm-3 control-label">Lo???i ?????i t?????ng:</label>
							<div class="col-sm-9">								
								<select name="loaidoituong" id="loaidoituong" class="form-control">
									<option value="lt">Ng?????i ho???t ?????ng c??ch m???ng tr?????c 01/1/1945</option>
									<option value="tkn">Ng?????i ho???t ?????ng c??ch m???ng t??? ng??y 01/01/1945 ?????n kh???i ngh??a th??ng 8/1945</option>
									<option value="bm">B?? m??? Vi???t Nam anh h??ng</option>
									<option value="ah">Anh h??ng l???c l?????ng v?? trang, Anh h??ng Lao ?????ng</option>
									<option value="tnls">Th??n nh??n li???t s?? ??ang h?????ng tr??? c???p h??ng th??ng</option>
									<option value="tnlstc">Ng?????i th??? c??ng</option>
									<option value="tbdb">Th????ng binh, th????ng binh lo???i B 81% tr??? l??n</option>
									<option value="tb">Th????ng binh, th????ng binh lo???i B 81% tr??? xu???ng</option>
									<option value="ccnd">Ng?????i c?? c??ng gi??p ????? c??ch m???ng ??ang h?????ng tr??? c???p nu??i d?????ng h??ng th??ng</option>
									<option value="cc">Ng?????i c?? c??ng gi??p ????? c??ch m???ng ??ang h?????ng tr??? c???p h??ng th??ng</option>
									<option value="hhdb">Ng?????i h??kc b??? nhi???m ch???t ?????c h??a h???c 81% tr??? l??n</option>
									<option value="hh">Ng?????i h??kc b??? nhi???m ch???t ?????c h??a h???c 81% tr??? xu???ng</option>
									<option value="td">Ng?????i b??? ?????ch b???t t?? ????y</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-3 control-label">N???i dung qu??:</label>
							<div class="col-sm-9">
								<input name="noidung" type="text" class="form-control" id="noidung">
							</div>	
							<label for="field-3" class="col-sm-3 control-label">M???c qu??:</label>
							<div class="col-sm-9">
								<input name="mucqua" type="text" class="form-control" data-mask="fdecimal" id="mucqua">
							</div>
							<label for="field-3" class="col-sm-3 control-label">N??m:</label>
							<div class="col-sm-9">								
								<input name="namqua" type="text" class="form-control" id="namqua">
							</div>
							<label for="field-3" class="col-sm-3 control-label">T??n x??:</label>
							<div class="col-sm-9">								
								<select name="xahuyen" id="xahuyen" class="form-control">
									<?php
									$sqltcml = "Select tenxa From xa inner join huyen on xa.tthuyen=huyen.tthuyen Where tenhuyen='".$madv[0]."'";
									$qrtcml = mysqli_query($con,$sqltcml);			
									while($rtcml=@mysqli_fetch_array($qrtcml))
									{
										echo "<option value=".str_replace(' ','_',$rtcml['tenxa']).">".$rtcml['tenxa']."</option>";
									}
									?>
									<option value=""></option>
								</select>
							</div>
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">????ng</button>														
					</form>						
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-2">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">				
					<form name="thoaitim" role='form' method='POST' enctype="multipart/form-data" class='form-horizontal form-groups-bordered'>
						<div id = "sTTKK" class="form-group">							
							<label for="field-3" class="col-sm-3 control-label">Lo???i ?????i t?????ng:</label>
							<div class="col-sm-9">								
								<select name="loaidoituongtim" id="loaidoituongtim" class="form-control">
									<option value="lt">Ng?????i ho???t ?????ng c??ch m???ng tr?????c 01/1/1945</option>
									<option value="tkn">Ng?????i ho???t ?????ng c??ch m???ng t??? ng??y 01/01/1945 ?????n kh???i ngh??a th??ng 8/1945</option>
									<option value="bm">B?? m??? Vi???t Nam anh h??ng</option>
									<option value="ah">Anh h??ng l???c l?????ng v?? trang, Anh h??ng Lao ?????ng</option>
									<option value="tnls">Th??n nh??n li???t s?? ??ang h?????ng tr??? c???p h??ng th??ng</option>
									<option value="tnlstc">Ng?????i th??? c??ng</option>
									<option value="tbdb">Th????ng binh, th????ng binh lo???i B 81% tr??? l??n</option>
									<option value="tb">Th????ng binh, th????ng binh lo???i B 81% tr??? xu???ng</option>
									<option value="ccnd">Ng?????i c?? c??ng gi??p ????? c??ch m???ng ??ang h?????ng tr??? c???p nu??i d?????ng h??ng th??ng</option>
									<option value="cc">Ng?????i c?? c??ng gi??p ????? c??ch m???ng ??ang h?????ng tr??? c???p h??ng th??ng</option>
									<option value="hhdb">Ng?????i h??kc b??? nhi???m ch???t ?????c h??a h???c 81% tr??? l??n</option>
									<option value="hh">Ng?????i h??kc b??? nhi???m ch???t ?????c h??a h???c 81% tr??? xu???ng</option>
									<option value="td">Ng?????i b??? ?????ch b???t t?? ????y</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-3 control-label">Tr??? c???p:</label>
							<div class="col-sm-9">
								<select name="noidungcs" id="noidungcs" class="form-control">
									<?php
									$sql = "select DISTINCT tentrocap from dmtrocap";
									$qrsql = mysqli_query($con,$sql);
									while($row = mysqli_fetch_array($qrsql)){
										echo "<option value=$row[0]>$row[0]</option>";
									}
									?>
								</select>
							</div>
							<label for="field-3" class="col-sm-3 control-label">Th??ng:</label>
							<div class="col-sm-9">
								<input name="namquatim" type="text" class="form-control" id="namquatim">
							</div>
							<label for="field-3" class="col-sm-3 control-label">N??m:</label>
							<div class="col-sm-9">								
								<input name="namquatim" type="text" class="form-control" id="namquatim">
							</div>							
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">????ng</button>
							<input type="submit" name="timkiem" class="btn btn-blue" value = "T??m ki???m h??? s??">							
					</form>						
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-4">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">				
					<form name="thoaiin" role='form' method='POST' class='form-horizontal form-groups-bordered'>
						<div id = "sTTKK" class="form-group">							
							<label for="field-3" class="col-sm-3 control-label">Lo???i ?????i t?????ng:</label>
							<div class="col-sm-9">								
								<select name="loaidoituongin" id="loaidoituongin" class="form-control">
									<option value="lt">Ng?????i ho???t ?????ng c??ch m???ng tr?????c 01/1/1945</option>
									<option value="tkn">Ng?????i ho???t ?????ng c??ch m???ng t??? ng??y 01/01/1945 ?????n kh???i ngh??a th??ng 8/1945</option>
									<option value="bm">B?? m??? Vi???t Nam anh h??ng</option>
									<option value="ah">Anh h??ng l???c l?????ng v?? trang, Anh h??ng Lao ?????ng</option>
									<option value="tnls">Th??n nh??n li???t s?? ??ang h?????ng tr??? c???p h??ng th??ng</option>
									<option value="tnlstc">Ng?????i th??? c??ng</option>
									<option value="tbdb">Th????ng binh, th????ng binh lo???i B 81% tr??? l??n</option>
									<option value="tb">Th????ng binh, th????ng binh lo???i B 81% tr??? xu???ng</option>
									<option value="ccnd">Ng?????i c?? c??ng gi??p ????? c??ch m???ng ??ang h?????ng tr??? c???p nu??i d?????ng h??ng th??ng</option>
									<option value="cc">Ng?????i c?? c??ng gi??p ????? c??ch m???ng ??ang h?????ng tr??? c???p h??ng th??ng</option>
									<option value="hhdb">Ng?????i h??kc b??? nhi???m ch???t ?????c h??a h???c 81% tr??? l??n</option>
									<option value="hh">Ng?????i h??kc b??? nhi???m ch???t ?????c h??a h???c 81% tr??? xu???ng</option>
									<option value="td">Ng?????i b??? ?????ch b???t t?? ????y</option>
									<option value="" selected = "selected"></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-3 control-label">Tr??? c???p:</label>
							<div class="col-sm-9">
								<select name="noidungcs" id="noidungcs" class="form-control">
									<?php
									$sql = "select DISTINCT tentrocap from dmtrocap";
									$qrsql = mysqli_query($con,$sql);
									while($row = mysqli_fetch_array($qrsql)){
										echo "<option value=$row[0]>$row[0]</option>";
									}
									?>
								</select>
							</div>
							<label for="field-3" class="col-sm-3 control-label">Th??ng:</label>
							<div class="col-sm-9">
								<input name="namquain" type="text" class="form-control" id="namquain">
							</div>
							<label for="field-3" class="col-sm-3 control-label">N??m:</label>
							<div class="col-sm-9">								
								<input name="namquain" type="text" class="form-control" id="namquain">
							</div>							
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">????ng</button>
							<input type="submit" name="inds" class="btn btn-blue" value = "In danh s??ch">
							<input name="tenhuyenin" type="text" class="form-control" style = "Display:none;" id="tenhuyenin" value="<?php echo $madv[0];?>">	
					</form>						
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-8">
	<div class="modal-dialog">
		<div class="modal-content">				
			<div class="modal-body">				
					<form name="thoaitao" role='form' method='POST' class='form-horizontal form-groups-bordered'>
						<div id = "sTTKK1" class="form-group">								
							<label for="field-3" class="col-sm-2 control-label">N??m:</label>
							<div class="col-sm-4">
								<input name="namquatao" type="text" class="form-control" id="namquatao">
							</div>	
							<label for="field-3" class="col-sm-2 control-label">M???c qu??:</label>
							<div class="col-sm-4">
								<input name="mucquatao" type="text" class="form-control" data-mask="fdecimal" id="mucquatao">
							</div>
							<label for="field-3" class="col-sm-2 control-label">N???i dung nh???n qu??:</label>
							<div class="col-sm-10">
								<input name="noidungtao" type="text" class="form-control" id="noidungtao">
							</div>	
							<label for="field-3" class="col-sm-12 control-label" style='text-align: left;'>Lo???i ?????i t?????ng ???????c t???o nh???n qu??:</label>															
							<div class="col-sm-12">
							<input type="checkbox" name="lt" checked = "checked" value="Yes" />
							Ng?????i ho???t ?????ng c??ch m???ng tr?????c 01/1/1945							
							</div>							
							<div class="col-sm-12">
							<input type="checkbox" name="tkn" checked = "checked" value="Yes" />
							Ng?????i ho???t ?????ng c??ch m???ng t??? ng??y 01/01/1945 ?????n kh???i ngh??a th??ng 8/1945							
							</div>							
							<div class="col-sm-12">
							<input type="checkbox" name="bm" checked = "checked" value="Yes" />
							B?? m??? Vi???t Nam anh h??ng						
							</div>							
							<div class="col-sm-12">
							<input type="checkbox" name="ah" checked = "checked" value="Yes" />
							Anh h??ng l???c l?????ng v?? trang, Anh h??ng Lao ?????ng					
							</div>							
							<div class="col-sm-12">
							<input type="checkbox" name="tnls" checked = "checked" value="Yes" />
							Th??n nh??n li???t s?? ??ang h?????ng tr??? c???p h??ng th??ng
							</div>	
							<div class="col-sm-12">
							<input type="checkbox" name="tnls" checked = "checked" value="Yes" />
							Ng?????i th??? c??ng 				
							</div>	
							<div class="col-sm-12">
							<input type="checkbox" name="tbdb" checked = "checked" value="Yes" />
							Th????ng binh, th????ng binh lo???i B 81% tr??? l??n				
							</div>							
							<div class="col-sm-12">
							<input type="checkbox" name="tb" checked = "checked" value="Yes" />
							Th????ng binh, th????ng binh lo???i B 81% tr??? xu???ng				
							</div>
							<div class="col-sm-12">
							<input type="checkbox" name="ccnd" checked = "checked" value="Yes" />
							Ng?????i c?? c??ng gi??p ????? c??ch m???ng ??ang h?????ng tr??? c???p nu??i d?????ng h??ng th??ng						
							</div>
							<div class="col-sm-12">
							<input type="checkbox" name="cc" checked = "checked" value="Yes" />
							Ng?????i c?? c??ng gi??p ????? c??ch m???ng ??ang h?????ng tr??? c???p h??ng th??ng						
							</div>							
							<div class="col-sm-12">
							<input type="checkbox" name="hhdb" checked = "checked" value="Yes" />
							Ng?????i h??kc b??? nhi???m ch???t ?????c h??a h???c 81% tr??? l??n					
							</div>	
							<div class="col-sm-12">
							<input type="checkbox" name="hh" checked = "checked" value="Yes" />
							Ng?????i h??kc b??? nhi???m ch???t ?????c h??a h???c 81% tr??? xu???ng					
							</div>
							<div class="col-sm-12">
							<input type="checkbox" name="td" checked = "checked" value="Yes" />
							Ng?????i b??? ?????ch b???t t?? ????y					
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
							<input type="submit" name="taobhyt" class="btn btn-blue" value = "T???o danh s??ch">							
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
							<h4 style = "text-align:center; color:rgb(10, 10, 10)">CHUY???N DANH S??CH H?????NG QU?? L??N C???P TR??N</h4>	
							<h4 style = "text-align:center; color:rgb(10, 10, 10)">(L??u ??)</h4>
							<label for="field-3" class="col-sm-12 control-label" style = "text-align: left;">-   Danh s??ch chuy???n l??n s??? kh??ng ch???nh s???a ???????c</label>
							<label for="field-3" class="col-sm-12 control-label" style = "text-align: left;">-   N???u mu???n ch???nh s???a c???n y??u c???u c??n b??? c???p tr??n chuy???n tr??? l???i</label>
							<label for="field-3" class="col-sm-12 control-label" style = "text-align: left;">-   N???u thi???u h??? s?? h?????ng qu?? c?? th??? l???p th??m ????? chuy???n l??n</label>
							<input name="sobg1" type="text" class="form-control" style = "Display:none;" id="sobg1">
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">????ng</button>
							<input type="submit" name="chuyen" class="btn btn-blue" value = "C???p nh???t" id = "hhhh1">							
					</form>						
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
    window.onsubmit = function() {
        //document.thoaics.action = get_action();
		document.thoaitaomoi.action = get_action1();
		document.thoaitao.action = get_action2();
		document.thoaitim.action = get_action3();
		document.thoaiin.action = get_action4();
    }

    //function get_action() {				
	//		return "dkbhyt.php?id=" + $('#trang').val() + ">" + $('#idbhytcs').val();			
    //}
	function get_action1() {				
			return "dkquatet27xa.php?id="+"1>"+$('#namqua').val();			
    }
	function get_action2() {				
			return "dkquatet27xa.php?id=1>"+$('#namquatao').val();			
    }
	function get_action3() {				
			return "dkquatet27xa.php?id=1>"+$('#loaidoituongtim').val()+">"+$('#mucquatim').val()+">"+$('#namquatim').val();			
    }
	function get_action4() {				
			return "danhsachquaxaduyet.php";
    }	
</script>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>