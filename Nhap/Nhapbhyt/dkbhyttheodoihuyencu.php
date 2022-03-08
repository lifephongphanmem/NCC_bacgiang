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
</script>
<script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() 
			{  
			   $('table tbody tr').dblclick(function() 
			   {
					jQuery('#modal-7').modal('show', {backdrop: 'static'});
					$("#hotencs").val($(this).find('td:nth-child(2)').text());	
					$("#ngaysinhcs").val($(this).find('td:nth-child(13)').text());											
					$("#gioitinhcs").val($(this).find('td:nth-child(16)').text());
					$("#truquancs").val($(this).find('td:nth-child(7)').text());
					$("#mandkcs").val($(this).find('td:nth-child(8)').text());
					$("#socmndcs").val($(this).find('td:nth-child(9)').text());
					$("#thtucs").val($(this).find('td:nth-child(5)').text());
					$("#thdencs").val($(this).find('td:nth-child(6)').text());
					$("#sotiencs").val($(this).find('td:nth-child(10)').text());
					$("#phanloaics").val($(this).find('td:nth-child(14)').text());
					$("#loaidtcs").val($(this).find('td:nth-child(12)').text());
					$("#idbhytcs").val($(this).find('td:nth-child(19)').text());
					$("#mathecs").val($(this).find('td:nth-child(3)').text());
					$("#thangcs").val($(this).find('td:nth-child(20)').text());
					$("#namcs").val($(this).find('td:nth-child(21)').text());
			   }); 
			}
		    		  
		);
$(document).ready(function() {
  $('#trang').change(function() {
		//alert(this.value);
		//$('#hsls').load('ajax_lietsy.php?id='+this.value);		
		//$('#thannhan').load('ajax_thannhan.php');
		//$('#giayto').load('ajax_giayto.php');	
		window.location.href="dkbhyttheodoihuyen.php?id="+this.value+">0";
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
            sohoso += $(this).find('td:nth-child(19)').text() + "<" + $(this).find('td:nth-child(3)').text() + "<" + $(this).find('td:nth-child(21)').text() +'>';
        });
        return sohoso;
    }
	$(document).ready(function(){
    $(":input").inputmask();
});
</script>
<script>
$(document).ready(function(){
    $(":input").inputmask();
});
</script>
<?php
function ktnam($nam)
{
	$kq="";
	if ($nam==2016)
		$kq="bhyt16";
	else if ($nam==2017)
		$kq="bhyt17";
	else if ($nam==2018)
		$kq="bhyt18";
	else if ($nam==2019)
		$kq="bhyt19";
	else if ($nam==2020)
		$kq="bhyt20";
	return $kq;
}
if(isset($_POST["capnhat"]))
{
	/* $key=explode('>',$_POST['sobg']);
	$chars=str_split($_POST["sobg"]);
	$count=0;
	foreach($chars as &$char)
	{
		if($char=='>')
		{
			$count++;
		}
	}
	$i=0;$sqlup="";
	for($i=0;$i<$count;$i++)
	{
		if ($key[$i] != "")
		{
			$kytu=explode('<',$key[$i]);	
			$sqlup = "Update ".ktnam($kytu[2])." Set mathe='".$kytu[1]."' where idbhyt = ".$kytu[0];
			$kq=mysqli_query($con,$sqlup);
		}
	} */
}
?>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Theo dõi tình trạng cấp thẻ bảo hiểm y tế </h4>
		</div>
			<div class="modal-body">
<form role='form' method='POST' class='form-horizontal form-groups-bordered'>
		
		<input name="sobg" type="text" class="form-control" style = "Display:none;" id="sobg">
		<label class='col-sm-2'>Trang số:</label>
<?php
$ahs = explode('>',$_GET['id']);
$j = $ahs[0];
		echo "<div  class='col-sm-2' style='margin-top:-7px'>";
			echo "<select style='margin-left:-90px;' name='trang' class='form-control' id='trang'>";
	$ls =  array(array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20"));		
	$cs=0;
	$sql="select * from ".ktnam(date('Y'))." where (xacnhan='Chuyển 1' or xacnhan='Chuyển 2') and huyen='".$madv[0]."' and (mathe='' or mathe is null)";
	$sql1=mysqli_query($con,$sql);
	$kq = 0;$kq1 = 1;
	if ($j == 1)
		echo "<option selected='selected' value='$kq1'>$kq1</option>";
	else
		echo "<option value='$kq1'>$kq1</option>";
	while($row=mysqli_fetch_array($sql1)){					
		$ls[$cs][0] = $row['hoten'];
		$ls[$cs][1] = $row['ngaysinh'];
		$ls[$cs][2] = $row['truquan'];	
		$ls[$cs][3] = $row['mandk'];
		$ls[$cs][4] = $row['noidk'];
		$ls[$cs][5] = $row['socmnd'];
		$ls[$cs][6] = $row['thtu'];
		$ls[$cs][7] = $row['thden'];
		$ls[$cs][8] = $row['sotien'];
		$ls[$cs][9] = $row['ghichu'];
		$ls[$cs][10] = $row['loaidt'];
		$ls[$cs][11] = $row['mathe'];
		$ls[$cs][12] = $row['phanloai'];
		$ls[$cs][13] = $row['xacnhan'];
		$ls[$cs][14] = $row['gioitinh'];
		$ls[$cs][15] = $row['xa'];
		$ls[$cs][16] = $row['huyen'];
		$ls[$cs][17] = $row['idbhyt'];
		$ls[$cs][18] = $row['thang'];
		$ls[$cs][19] = $row['nam'];
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
					<th style="background-color:rgb(54, 169, 224)" width="15%"><strong style='color:rgb(255, 255, 225)'>Họ tên</strong></th>					
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Mã thẻ bhyt</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="50%"><strong style='color:rgb(255, 255, 225)'>Nơi đăng ký khám bệnh</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Từ ngày</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Đến ngày</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>truquan</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>mandk</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>socmnd</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>sotien</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ghichu</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>loaidt</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>mathe</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>phanloai</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="6%"><strong style='color:rgb(255, 255, 225)'>Trạng Thái</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>gioitinh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>xa</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>huyen</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>idbhyt</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>thang</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>nam</strong></th>
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
					//echo "<td>"."<select size='1'><option>one</option><option>two</option><option>duck</option></select>"."</td>";
					echo "<td contenteditable=true>".$ls[$i][11]."</td>";
					echo "<td>".$ls[$i][4]."</td>";
					echo "<td>".$ls[$i][6]."</td>";
					echo "<td>".$ls[$i][7]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][2]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][3]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][5]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][8]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][9]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][10]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][1]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][12]."</td>";
					if ($ls[$i][13]=="DK")
						echo "<td>Đăng ký</td>";
					else if ($ls[$i][13]=="Chuyển 1" || $ls[$i][13]=="Chuyển 2")
						echo "<td>Đang chờ duyệt</td>";
					else if ($ls[$i][13]=="Duyệt")
						echo "<td>Duyệt</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][14]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][15]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][16]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][17]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][18]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][19]."</td>";
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
							<label for="field-3" class="col-sm-3 control-label">Họ tên đối tượng:</label>
							<div class="col-sm-3">
								<input name="hoten" type="text" class="form-control" id="hoten">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Mã thẻ bhyt:</label>
							<div class="col-sm-3">
								<input name="mathe" type="text" class="form-control" id="mathe">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Ngày sinh:</label>
							<div class="col-sm-3">
								<input name="ngaysinh" type="text" class="form-control" id="ngaysinh">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Giới tính:</label>
							<div class="col-sm-3">								
								<select name="gioitinh" id="gioitinh" class="form-control">
									<option value="Nam">Nam</option>
									<option value="Nữ">Nữ</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-3 control-label">Trú quán:</label>
							<div class="col-sm-9">
								<input name="truquan" type="text" class="form-control" id="truquan">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Nơi đăng ký khám bệnh:</label>
							<div class="col-sm-9">								
								<select name="mandk" id="mandk" class="form-control">
									<?php
									$sqltcml = "Select mankb,tnkb From danhmuckb";
									$qrtcml = mysqli_query($con,$sqltcml);			
									while($rtcml=@mysqli_fetch_array($qrtcml))
									{
										echo "<option value=".$rtcml['mankb'].">".$rtcml['tnkb']."</option>";
									}
									?>
									<option value="" selected = "selected"></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-3 control-label">Số CMND:</label>
							<div class="col-sm-9">
								<input name="socmnd" type="text" class="form-control" id="socmnd">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Thời hạn từ:</label>
							<div class="col-sm-3">
								<input name="thtu" type="text" class="form-control" data-mask="date" id="thtu">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Thời hạn đến:</label>
							<div class="col-sm-3">
								<input name="thden" type="text" class="form-control" data-mask="date" id="thden">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Số tiền đóng:</label>
							<div class="col-sm-3">
								<input name="sotien" type="text" class="form-control" id="sotien">
							</div>							
							<label for="field-3" class="col-sm-3 control-label">Phân loại:</label>
							<div class="col-sm-3">								
								<select name="phanloai" id="phanloai" class="form-control">
									<option value="Cấp mới">Cấp mới</option>
									<option value="Cấp lại">Cấp lại</option>
									<option value="Cấp đổi">Cấp đổi</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-3 control-label">Loại đối tượng:</label>
							<div class="col-sm-9">
								<input name="loaidt" type="text" class="form-control" id="loaidt">
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
							<label for="field-3" class="col-sm-3 control-label">Họ tên đối tượng:</label>
							<div class="col-sm-3">
								<input name="hotencs" type="text" class="form-control" id="hotencs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Mã thẻ bhyt:</label>
							<div class="col-sm-3">
								<input name="mathecs" type="text" class="form-control" id="mathecs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Ngày sinh:</label>
							<div class="col-sm-3">
								<input name="ngaysinhcs" type="text" class="form-control" id="ngaysinhcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Giới tính:</label>
							<div class="col-sm-3">								
								<select name="gioitinhcs" id="gioitinhcs" class="form-control">
									<option value="Nam">Nam</option>
									<option value="Nữ">Nữ</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-3 control-label">Trú quán:</label>
							<div class="col-sm-9">
								<input name="truquancs" type="text" class="form-control" id="truquancs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Nơi đăng ký khám bệnh:</label>
							<div class="col-sm-9">								
								<select name="mandkcs" id="mandkcs" class="form-control">
									<?php
									$sqltcml = "Select mankb,tnkb From danhmuckb";
									$qrtcml = mysqli_query($con,$sqltcml);			
									while($rtcml=@mysqli_fetch_array($qrtcml))
									{
										echo "<option value=".$rtcml['mankb'].">".$rtcml['tnkb']."</option>";
									}
									?>
									<option value="" selected = "selected"></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-3 control-label">Số CMND:</label>
							<div class="col-sm-9">
								<input name="socmndcs" type="text" class="form-control" id="socmndcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Thời hạn từ:</label>
							<div class="col-sm-3">
								<input name="thtucs" type="text" class="form-control" data-mask="date" id="thtucs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Thời hạn đến:</label>
							<div class="col-sm-3">
								<input name="thdencs" type="text" class="form-control" data-mask="date" id="thdencs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Số tiền đóng:</label>
							<div class="col-sm-3">
								<input name="sotiencs" type="text" class="form-control" id="sotiencs">
							</div>							
							<label for="field-3" class="col-sm-3 control-label">Phân loại:</label>
							<div class="col-sm-3">								
								<select name="phanloaics" id="phanloaics" class="form-control">
									<option value="Cấp mới">Cấp mới</option>
									<option value="Cấp lại">Cấp lại</option>
									<option value="Cấp đổi">Cấp đổi</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-3 control-label">Loại đối tượng:</label>
							<div class="col-sm-9">
								<input name="loaidtcs" type="text" class="form-control" id="loaidtcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Tháng bhyt:</label>
							<div class="col-sm-3">
								<input name="thangcs" type="text" class="form-control" id="thangcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Năm bhyt:</label>
							<div class="col-sm-3">
								<input name="namcs" type="text" class="form-control" id="namcs">
							</div>
							<div class="col-sm-10">
								<input name="idbhytcs" type="text" class="form-control" style="display:none" id="idbhytcs">
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
			return "dkbhyt.php?id=" + $('#trang').val() + ">" + $('#idbhytcs').val();			
    }
	function get_action1() {				
			return "dkbhyt.php?id="+$('#trangm').val()+">0";			
    }	
</script>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>