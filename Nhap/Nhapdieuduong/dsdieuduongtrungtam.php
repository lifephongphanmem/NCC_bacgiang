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
</script>
<script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() 
			{  
			   $('table tbody tr').dblclick(function() 
			   {
					jQuery('#modal-7').modal('show', {backdrop: 'static'});
					$("#hotencs").val($(this).find('td:nth-child(2)').text());	
					$("#ngaysinhcs").val($(this).find('td:nth-child(7)').text());											
					$("#gioitinhcs").val($(this).find('td:nth-child(8)').text());
					$("#truquancs").val($(this).find('td:nth-child(9)').text());
					$("#doituongcs").val($(this).find('td:nth-child(3)').text());
					$("#namddltcs").val($(this).find('td:nth-child(4)').text());
					$("#hinhthuclkcs").val($(this).find('td:nth-child(5)').text());
					$("#loaiddcs").val($(this).find('td:nth-child(12)').text());
					$("#tinhtrangskcs").val($(this).find('td:nth-child(6)').text());
					$("#iddieuduongcs").val($(this).find('td:nth-child(18)').text());	
					$("#phanloaiddcs").val($(this).find('td:nth-child(11)').text());
			   }); 
			}
		    		  
		);
$(document).ready(function() {
  $('#trang').change(function() {
		//alert(this.value);
		//$('#hsls').load('ajax_lietsy.php?id='+this.value);		
		//$('#thannhan').load('ajax_thannhan.php');
		//$('#giayto').load('ajax_giayto.php');	
		window.location.href="dkdieuduonghuyen.php?id="+this.value+">0";
  });
 });
</script>
<script type="text/javascript">
	$(document).ready(function() {
	  $('#hhhh').click(function() {
	   giatri = kiemtrahschon();   
	   $("#sobg").val(giatri);	   
	  });
	 });	
	function kiemtrahschon() {

        var sohoso = '';
        $.each($('table tbody tr'), function(){
            sohoso += $(this).find('td:nth-child(18)').text() + "<" + $(this).find('td:nth-child(6)').text() + "<" + $(this).find('td:nth-child(11)').text() + '>';
        });
        return sohoso;
    }
	$(document).ready(function(){
    $(":input").inputmask();
});
</script>
<script type="text/javascript">
	$(document).ready(function() {
	  $('#capnhat').click(function() {
	   giatri = kiemtrahschon1();   
	   $("#sobg1").val(giatri);	   
	  });
	 });	
	function kiemtrahschon1() {

        var sohoso = '';

        $.each($("input[name='KT']:checked"), function(){
            sohoso += ($(this).attr('id')) + '>';
        });
        return sohoso;
    }
</script>
<?php
$ngaythang = getdate();
$nam =  $ngaythang["year"];
function doingay1($ngay)
{		
	$kq = substr($ngay,6,4) ."-". substr($ngay,3,2) . "-". substr($ngay,0,2);
	return $kq;
}
function hinhthuc($ht)		
{
	if ($ht == "1")
		return "T???p trung";
	else
		return "T???i nh??";
}
if (isset($_POST['capnhat']))
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
		$sql="";
			$sql="Update dieuduong Set diadiemdd = '$_POST[diadiemdd]'";
			$sql=$sql." Where iddieuduong=".$key[$i];
		//echo $sql;
	$kq=mysqli_query($con,$sql);
	}
}
?>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Danh s??ch h??? s?? ??i???u d?????ng</h4>
		</div>
			<div class="modal-body">
<form role='form' method='POST' class='form-horizontal form-groups-bordered'>
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModalcds();" class='btn btn-success'>
			<i class='entypo-print'></i>C???p nh???t ?????a ch??? ??D
		</a>
		<input name="sobg" type="text" class="form-control" style = "Display:none;" id="sobg">
		<label class='col-sm-2'>Trang s???:</label>
<?php
$ahs = explode('>',$_GET['id']);
$j = $ahs[0];
		echo "<div  class='col-sm-2' style='margin-top:-7px'>";
			echo "<select style='margin-left:-90px;' name='trang' class='form-control' id='trang'>";
	$ls =  array(array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18"));
	$cs=0;
	$sql="select * from dieuduong where  namdd = $nam and chuyen='Duy???t' and phanloaidd = 'T???p trung'";
	$sql1=mysqli_query($con,$sql);
	$kq = 0;$kq1 = 1;
	if ($j == 1)
		echo "<option selected='selected' value='$kq1'>$kq1</option>";
	else
		echo "<option value='$kq1'>$kq1</option>";
	while($row=mysqli_fetch_array($sql1)) {
		$ls[$cs][0] = $row['hoten'];
		$ls[$cs][1] = $row['ngaysinh'];
		$ls[$cs][2] = $row['gioitinh'];
		$ls[$cs][3] = $row['truquan'];
		$ls[$cs][4] = $row['namdd'];
		$ls[$cs][5] = $row['namddlt'];
		$ls[$cs][6] = $row['tinhtrangsk'];
		$ls[$cs][7] = $row['phanloaidd'];
		$ls[$cs][8] = $row['loaidd'];
		$ls[$cs][9] = $row['sotien'];
		$ls[$cs][10] = $row['xa'];
		$ls[$cs][11] = $row['huyen'];
		$ls[$cs][12] = $row['idhs'];
		$ls[$cs][13] = $row['doituong'];
		$ls[$cs][14] = $row['hinhthuclk'];
		$ls[$cs][15] = $row['chuyen'];
		$ls[$cs][16] = $row['iddieuduong'];
		$ls[$cs][17] = $row['lydokhongduyet'];
		$ls[$cs][18] = $row['diadiemdd'];
		$cs = $cs + 1;
		$kq = $kq + 1;
		if ($kq == 15) {
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
					<th style="background-color:rgb(54, 169, 224)" width="5%"><strong style='color:rgb(255, 255, 225)'><p>Ch???n</p></strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="15%"><strong style='color:rgb(255, 255, 225)'><p>H??? t??n</p></strong></th>					
					<th style="background-color:rgb(54, 169, 224)" width="48%"><strong style='color:rgb(255, 255, 225)'><p>?????i t?????ng</p></strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>N??m ??d<br>li???n k???</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>H??nh th???c<br>??d li???n k???</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'><p>S???c kh???e</p></strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ngaysinh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>gioitinh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>truquan</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>namdd</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="30%"><strong style='color:rgb(255, 255, 225)'><p>H??nh th???c</p></strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>loaidd</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>sotien</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'><p>????n v???</p></strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>huyen</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>idhs</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>chuyen</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>iddieuduong</strong></th>
					<th style="background-color:rgb(54, 169, 224);display: none " width="30%"><strong style='color:rgb(255, 255, 225)'><p>L?? do kh??ng duy???t</p></strong></th>
					<th style="background-color:rgb(54, 169, 224);" width="30%"><strong style='color:rgb(255, 255, 225)'><p>?????a ??i???m ??i???u d?????ng</p></strong></th>
				</tr>				
			</thead>
			<tbody id="rowlist" class="rowlist">
<?php

			for($i=($j - 1)*15;$i<15*$j;$i++)
			{
				//$a = $i + 1;
				if ($i < $cs)
				{					
				echo "<tr>";					
					echo "<td><input type = 'Checkbox' name = 'KT' id = '".$ls[$i][16]."'></td>";
					//echo "<td><input type = 'Checkbox' name = 'KT' id = '".$ls[$i][16]."' checked = 'checked'></td>";
					echo "<td style='text-align: left;'>".$ls[$i][0]."</td>";
					echo "<td>".$ls[$i][13]."</td>";	
					echo "<td>".$ls[$i][5]."</td>";
					echo "<td>".$ls[$i][14]."</td>";
					echo "<td contenteditable=true>".$ls[$i][6]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][1]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][2]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][3]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][4]."</td>";
					echo "<td contenteditable=true>".$ls[$i][7]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][8]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][9]."</td>";
					echo "<td style='text-align: left'>".$ls[$i][10]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][11]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][12]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][15]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][16]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][17]."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][18]."</td>";
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
							<label for="field-3" class="col-sm-3 control-label">Ng??y sinh:</label>
							<div class="col-sm-3">
								<input name="ngaysinhcs" type="text" class="form-control" id="ngaysinhcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Gi???i t??nh:</label>
							<div class="col-sm-3">								
								<select name="gioitinhcs" id="gioitinhcs" class="form-control">
									<option value="Nam">Nam</option>
									<option value="N???">N???</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-3 control-label">Tr?? qu??n:</label>
							<div class="col-sm-9">
								<input name="truquancs" type="text" class="form-control" id="truquancs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">?????i t?????ng ???????c ??i???u d?????ng:</label>
							<div class="col-sm-9">								
								<input name="doituongcs" type="text" class="form-control" id="doituongcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">N??m ??i???u d?????ng li???n k???:</label>
							<div class="col-sm-9">
								<input name="namddltcs" type="text" class="form-control" id="namddltcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">H??nh th???c ??i???u d?????ng li???n k???:</label>
							<div class="col-sm-9">
								<input name="hinhthuclkcs" type="text" class="form-control" id="hinhthuclkcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Lo???i ??i???u d?????ng:</label>
							<div class="col-sm-9">
								<input name="loaiddcs" type="text" class="form-control" id="loaiddcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">T??nh tr???ng s???c kh???e:</label>
							<div class="col-sm-9">
								<input name="tinhtrangskcs" type="text" class="form-control" id="tinhtrangskcs">
							</div>	
							<label for="field-3" class="col-sm-3 control-label">H??nh th???c:</label>
							<div class="col-sm-9">								
								<select name="phanloaiddcs" id="phanloaiddcs" class="form-control">
									<option value="T???p trung">T???p trung</option>
									<option value="T???i nh??">T???i nh??</option>
								</select>
							</div>
							<div class="col-sm-10">
								<input name="iddieuduongcs" type="text" class="form-control" style="display:none" id="iddieuduongcs">
							</div>
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">????ng</button>
							<input type="submit" name="capnhatts" class="btn btn-blue" value = "C???p nh???t">							
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
							<label for="field-3" class="col-sm-3 control-label">N??m ??i???u d?????ng:</label>
							<div class="col-sm-9">
								<input name="namdd" type="text" class="form-control" id="namdd">
							</div>
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
							<label for="field-3" class="col-sm-12 control-label" style='text-align: left;'>Lo???i ?????i t?????ng ???????c t???o ??i???u d?????ng:</label>															
							<div class="col-sm-12">
							<input type="checkbox" name="ah" checked = "checked" value="Yes" />
							Anh hung l???c l?????ng v?? trang, anh hung lao ?????ng trong th???i k??? kh??ng chi???n							
							</div>							
							<div class="col-sm-12">
							<input type="checkbox" name="lt" checked = "checked" value="Yes" />
							Ng?????i ho???t ?????ng c??ch m???ng tr?????c 01 th??ng 01 n??m 1945							
							</div>							
							<div class="col-sm-12">
							<input type="checkbox" name="tkn" checked = "checked" value="Yes" />
							Ng?????i ho???t ?????ng c??ch m???ng t??? ng??y 01 th??ng 01 n??m 1945 ?????n ng??y kh???i ngh??a th??ng t??m n??m 1945						
							</div>							
							<div class="col-sm-12">
							<input type="checkbox" name="bm" checked = "checked" value="Yes" />
							B?? m??? Vi???t Nam anh h??ng					
							</div>							
							<div class="col-sm-12">
							<input type="checkbox" name="tb" checked = "checked" value="Yes" />
							Th????ng binh v?? ng?????i h?????ng ch??nh s??ch nh?? th????ng binh				
							</div>							
							<div class="col-sm-12">
							<input type="checkbox" name="bb" checked = "checked" value="Yes" />
							B???nh binh				
							</div>							
							<div class="col-sm-12">
							<input type="checkbox" name="hh" checked = "checked" value="Yes" />
							Ng?????i ho???t ?????ng kh??ng chi???n nhi???m ch???t ?????c h??a h???c				
							</div>
							<div class="col-sm-12">
							<input type="checkbox" name="tnls" checked = "checked" value="Yes" />
							Th??n nh??n Li???t s???						
							</div>
							<div class="col-sm-12">
							<input type="checkbox" name="kctd" checked = "checked" value="Yes" />
							Ng?????i ho???t ?????ng kh??ng chi???n b??? ?????ch b???t, t?? ????y						
							</div>							
							<div class="col-sm-12">
							<input type="checkbox" name="cc" checked = "checked" value="Yes" />
							Ng?????i c?? c??ng gi??p ????? c??ch m???ng						
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
							<h4 style = "text-align:center; color:rgb(10, 10, 10)">C???P NH???T TH??NG TIN ?????A ??I???M ??I???U D?????NG</h4>
							<input name="sobg1" type="text" class="form-control" style="display: none" id="sobg1">
							<label for="field-3" class="col-sm-3 control-label">?????a ??i???m ??i???u d?????ng:</label>
							<div class="col-sm-9">
								<input name="diadiemdd" type="text" class="form-control" id="diadiemdd">
							</div>
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">????ng</button>
							<input type="submit" name="capnhat" class="btn btn-blue" value = "C???p nh???t" id = "capnhat">
					</form>						
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
    window.onsubmit = function() {
        //document.thoaics.action = get_action();
		document.thoaimoi.action = get_action1();
		document.thoaitao.action = get_action2();
		document.thoaitao.action = get_action3();
    }

    //function get_action() {				
	//		return "dkbhyt.php?id=" + $('#trang').val() + ">" + $('#idbhytcs').val();			
    //}
	function get_action1() {				
			return "dkdieuduonghuyen.php?id="+$('#trangm').val()+">0";			
    }
	function get_action2() {				
			return "dkdieuduonghuyen.php?id="+$('#trangm').val()+">2016";			
    }
	function get_action3() {				
			return "dkdieuduonghuyen.php?id="+$('#trangm').val()+">2016";			
    }
</script>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>