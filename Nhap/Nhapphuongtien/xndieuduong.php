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
					$("#ngaysinhcs").val($(this).find('td:nth-child(9)').text());											
					$("#gioitinhcs").val($(this).find('td:nth-child(10)').text());
					$("#truquancs").val($(this).find('td:nth-child(3)').text());
					$("#doituongcs").val($(this).find('td:nth-child(4)').text());
					if ($(this).find('td:nth-child(5)').text() == "Tập trung")
						$("#phanloaiddcs").val($(this).find('td:nth-child(5)').text());
					else if ($(this).find('td:nth-child(5)').text() == "Tại nhà")
						$("#phanloaiddcs").val($(this).find('td:nth-child(5)').text());
					else if ($(this).find('td:nth-child(5)').text() == "1")
						$("#phanloaiddcs").val("Tập trung");
					else
						$("#phanloaiddcs").val("Tại nhà");
					$("#namddltcs").val($(this).find('td:nth-child(6)').text());
					$("#hinhthuclkcs").val($(this).find('td:nth-child(7)').text());
					$("#loaiddcs").val($(this).find('td:nth-child(12)').text());
					$("#tinhtrangskcs").val($(this).find('td:nth-child(8)').text());
					$("#iddieuduongcs").val($(this).find('td:nth-child(18)').text());
					$("#idhscs").val($(this).find('td:nth-child(16)').text());
					$("#namddcs").val($(this).find('td:nth-child(11)').text());
			   }); 
			}
		    		  
		);
$(document).ready(function() {
  $('#trang').change(function() {
		//alert(this.value);
		//$('#hsls').load('ajax_lietsy.php?id='+this.value);		
		//$('#thannhan').load('ajax_thannhan.php');
		//$('#giayto').load('ajax_giayto.php');	
		window.location.href="xndieuduong.php?id="+this.value+">0";
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
            sohoso += $(this).find('td:nth-child(18)').text() + "<" + $(this).find('td:nth-child(5)').text() + "<" + $(this).find('td:nth-child(16)').text() + "<" + $(this).find('td:nth-child(11)').text() + "<" + $(this).find('td:nth-child(4)').text() + '>';
        });
        return sohoso;
    }
	$(document).ready(function(){
    $(":input").inputmask();
});
</script>
<?php
if(isset($_POST["capnhatts"]))
	{	
		$sqlup = "Update dieuduong Set phanloaidd='".$_POST['phanloaiddcs']."'";
		$sqlup = $sqlup." where iddieuduong = ".$_POST['iddieuduongcs'];
		$kq=mysqli_query($con,$sqlup);		
		$sqluphs = "";
		if ($_POST['doituongcs'] == "Thương binh")
			$sqluphs = "Update hosotb Set namddcc='".$_POST['namddcs']."', hinhthucddlt='".$_POST["phanloaiddcs"]."' Where idhstb=".$_POST["idhscs"];		
		else if ($_POST['doituongcs'] == "Bệnh binh")
			$sqluphs = "Update hosobb Set namddcc='".$_POST['namddcs']."', hinhthucddlt='".$_POST["phanloaiddcs"]."' Where idhsbb=".$_POST["idhscs"];
		else if ($_POST['doituongcs'] == "Anh hùng")
			$sqluphs = "Update hosoah Set namddlc='".$_POST['namddcs']."', hinhthucddlt='".$_POST["phanloaiddcs"]."' Where idhsah=".$_POST["idhscs"];
		else if ($_POST['doituongcs'] == "Bà mẹ Việt Nam anh hùng")
			$sqluphs = "Update hosobm Set namddlc='".$_POST['namddcs']."', hinhthucddlt='".$_POST["phanloaiddcs"]."' Where idhsbm=".$_POST["idhscs"];
		else if ($_POST['doituongcs'] == "Người hoạt động trước 01/01/1945")
			$sqluphs = "Update hosolt Set namddcc='".$_POST['namddcs']."', hinhthucddlt='".$_POST["phanloaiddcs"]."' Where idhslt=".$_POST["idhscs"];
		else if ($_POST['doituongcs'] == "Tiền khởi nghĩa")
			$sqluphs = "Update hosotkn Set namddcc='".$_POST['namddcs']."', hinhthucddlt='".$_POST["phanloaiddcs"]."' Where idhstkn=".$_POST["idhscs"];
		else if ($_POST['doituongcs'] == "Người nhiễm chất độc hóa học")
			$sqluphs = "Update hosohh Set namddlc='".$_POST['namddcs']."', hinhthucddlt='".$_POST["phanloaiddcs"]."' Where idhshh=".$_POST["idhscs"];
		else if ($_POST['doituongcs'] == "Tù đày")
			$sqluphs = "Update hosotd Set namddlc='".$_POST['namddcs']."', hinhthucddlt='".$_POST["phanloaiddcs"]."' Where idhstd=".$_POST["idhscs"];
		else if ($_POST['doituongcs'] == "Thân nhân liệt sỹ")
			$sqluphs = "Update thannhanls Set namddlc='".$_POST['namddcs']."', hinhthucddlt='".$_POST["phanloaiddcs"]."' Where idthannhan=".$_POST["idhscs"];
		else if ($_POST['doituongcs'] == "Người có công giúp đỡ cách mạng")
			$sqluphs = "Update hosocc Set namddlc='".$_POST['namddcs']."', hinhthucddlt='".$_POST["phanloaiddcs"]."' Where idhscc=".$_POST["idhscs"];
		$kqhs=mysqli_query($con,$sqluphs);
	}
if(isset($_POST["capnhat"]))
{
	$key=explode('>',$_POST['sobg']);
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
			$sqlup = "Update dieuduong Set phanloaidd='".hinhthuc($kytu[1])."' where iddieuduong = ".$kytu[0];
			$kq=mysqli_query($con,$sqlup);
			$sqluphs = "";
			if ($kytu[4] == "Thương binh")
				$sqluphs = "Update hosotb Set namddcc='".$kytu[3]."', hinhthucddlt='".hinhthuc($kytu[1])."' Where idhstb=".$kytu[2];		
			else if ($kytu[4] == "Bệnh binh")
				$sqluphs = "Update hosobb Set namddcc='".$kytu[3]."', hinhthucddlt='".hinhthuc($kytu[1])."' Where idhsbb=".$kytu[2];
			else if ($kytu[4] == "Anh hùng")
				$sqluphs = "Update hosoah Set namddlc='".$kytu[3]."', hinhthucddlt='".hinhthuc($kytu[1])."' Where idhsah=".$kytu[2];
			else if ($kytu[4] == "Bà mẹ Việt Nam anh hùng")
				$sqluphs = "Update hosobm Set namddlc='".$kytu[3]."', hinhthucddlt='".hinhthuc($kytu[1])."' Where idhsbm=".$kytu[2];
			else if ($kytu[4] == "Người hoạt động trước 01/01/1945")
				$sqluphs = "Update hosolt Set namddcc='".$kytu[3]."', hinhthucddlt='".hinhthuc($kytu[1])."' Where idhslt=".$kytu[2];
			else if ($kytu[4] == "Tiền khởi nghĩa")
				$sqluphs = "Update hosotkn Set namddcc='".$kytu[3]."', hinhthucddlt='".hinhthuc($kytu[1])."' Where idhstkn=".$kytu[2];
			else if ($kytu[4] == "Người nhiễm chất độc hóa học")
				$sqluphs = "Update hosohh Set namddlc='".$kytu[3]."', hinhthucddlt='".hinhthuc($kytu[1])."' Where idhshh=".$kytu[2];
			else if ($kytu[4] == "Tù đày")
				$sqluphs = "Update hosotd Set namddlc='".$kytu[3]."', hinhthucddlt='".hinhthuc($kytu[1])."' Where idhstd=".$kytu[2];
			else if ($kytu[4] == "Thân nhân liệt sỹ")
				$sqluphs = "Update thannhanls Set namddlc='".$kytu[3]."', hinhthucddlt='".hinhthuc($kytu[1])."' Where idthannhan=".$kytu[2];
			else if ($kytu[4] == "Người có công giúp đỡ cách mạng")
				$sqluphs = "Update hosocc Set namddlc='".$kytu[3]."', hinhthucddlt='".hinhthuc($kytu[1])."' Where idhscc=".$kytu[2];
			$kqhs=mysqli_query($con,$sqluphs);
		}
	}
}
function hinhthuc($ht)		
{
	if ($ht == "1")
		return "Tập trung";
	else
		return "Tại nhà";
}
?>
<form role='form' method='POST' class='form-horizontal form-groups-bordered'>										
		<input type="submit" name="capnhat" class="btn btn-info" value = "Cập nhật" style = "float:right" id = "hhhh">
		<input name="sobg" type="text" class="form-control" style = "Display:none;" id="sobg">
		<label class='col-sm-2'>Trang số:</label>
		<label>Hình thức(1: Tập trung, 2: Tại nhà)</label>
<?php
$ahs = explode('>',$_GET['id']);
$j = $ahs[0];
		echo "<div  class='col-sm-2' style='margin-top:-7px'>";
			echo "<select style='margin-left:-90px;' name='trang' class='form-control' id='trang'>";
	$ls =  array(array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17"));		
	$cs=0;
	$sql="select * from dieuduong where chuyen=''";
	$sql1=mysqli_query($con,$sql);
	$kq = 0;$kq1 = 1;
	if ($j == 1)
		echo "<option selected='selected' value='$kq1'>$kq1</option>";
	else
		echo "<option value='$kq1'>$kq1</option>";
	while($row=mysqli_fetch_array($sql1)){					
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
					<th style="background-color:rgb(16, 78, 211)" width="5%"><strong>STT</strong></th>
					<th style="background-color:rgb(16, 78, 211)" width="15%"><strong>Họ tên</strong></th>	
					<th style="background-color:rgb(16, 78, 211)" width="24%"><strong>Địa chỉ</strong></th>					
					<th style="background-color:rgb(16, 78, 211)" width="24%"><strong>Đối tượng</strong></th>
					<th style="background-color:rgb(16, 78, 211)" width="8%"><strong>Hình thức</strong></th>
					<th style="background-color:rgb(16, 78, 211)" width="8%"><strong>Năm liền kế</strong></th>
					<th style="background-color:rgb(16, 78, 211)" width="8%"><strong>Hình thức liền kề</strong></th>
					<th style="background-color:rgb(16, 78, 211)" width="8%"><strong>Sức khỏe</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ngaysinh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>gioitinh</strong></th>					
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>namdd</strong></th>					
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>loaidd</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>sotien</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>xa</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>huyen</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>idhs</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>chuyen</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>iddieuduong</strong></th>
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
					echo "<td style='text-align: left;'>".$ls[$i][3]."</td>";	
					echo "<td style='text-align: left;'>".$ls[$i][13]."</td>";
					echo "<td contenteditable=true>".$ls[$i][7]."</td>";
					echo "<td>".$ls[$i][5]."</td>";
					echo "<td style='text-align: left'>".$ls[$i][14]."</td>";
					echo "<td style='text-align: left'>".$ls[$i][6]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][1]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][2]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][4]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][8]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][9]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][10]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][11]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][12]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][15]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][16]."</td>";
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
							<label for="field-3" class="col-sm-3 control-label">Họ tên đối tượng:</label>
							<div class="col-sm-9">
								<input name="hotencs" type="text" class="form-control" id="hotencs">
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
							<label for="field-3" class="col-sm-3 control-label">Đối tượng được điều dưỡng:</label>
							<div class="col-sm-9">								
								<input name="doituongcs" type="text" class="form-control" id="doituongcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Hình thức:</label>
							<div class="col-sm-9">								
								<select name="phanloaiddcs" id="phanloaiddcs" class="form-control">
									<option value="Tập trung">Tập trung</option>
									<option value="Tại nhà">Tại nhà</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-3 control-label">Năm điều dưỡng liền kề:</label>
							<div class="col-sm-9">
								<input name="namddltcs" type="text" class="form-control" id="namddltcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Hình thức điều dưỡng liền kề:</label>
							<div class="col-sm-9">
								<input name="hinhthuclkcs" type="text" class="form-control" id="hinhthuclkcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Loại điều dưỡng:</label>
							<div class="col-sm-9">
								<input name="loaiddcs" type="text" class="form-control" id="loaiddcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Tình trạng sức khỏe:</label>
							<div class="col-sm-9">
								<input name="tinhtrangskcs" type="text" class="form-control" id="tinhtrangskcs">
							</div>														
							<div class="col-sm-10">
								<input name="iddieuduongcs" type="text" class="form-control" style="display:none" id="iddieuduongcs">
							</div>
							<div class="col-sm-10">
								<input name="idhscs" type="text" class="form-control" style="display:none" id="idhscs">
							</div>
							<div class="col-sm-10">
								<input name="namddcs" type="text" class="form-control" style="display:none" id="namddcs">
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
        //document.thoaics.action = get_action();
		document.thoaimoi.action = get_action1();
		document.thoaitao.action = get_action2();
    }

    //function get_action() {				
	//		return "dkbhyt.php?id=" + $('#trang').val() + ">" + $('#idbhytcs').val();			
    //}
	function get_action1() {				
			return "xndieuduong.php?id="+$('#trangm').val()+">0";			
    }
	function get_action2() {				
			return "xndieuduong.php?id="+$('#trangm').val()+">2016";			
    }
</script>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>