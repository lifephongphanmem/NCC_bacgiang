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
</script>
<script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() 
			{  
			   $('table tbody tr').dblclick(function() 
			   { 
					if ($(this).find('td:last').text() == "ncc")
					{						
						jQuery('#modal-6').modal('show', {backdrop: 'static'});
						$("#mahsbo").val($(this).find('td:nth-child(2)').text());
						$("#mahstinh").val($(this).find('td:nth-child(3)').text());
						$("#hoten").val($(this).find('td:nth-child(4)').text());
						$("#ngaysinh").val($(this).find('td:nth-child(8)').text());
						$("#gioitinh").val($(this).find('td:nth-child(9)').text());
						$("#loaidt").val($(this).find('td:nth-child(10)').text());
						$("#truquan").val($(this).find('td:nth-child(5)').text());
						$("#tinhtrangsk").val($(this).find('td:nth-child(6)').text());
						$("#lydo").val($(this).find('td:nth-child(14)').text());
						$("#idphuongtien").val($(this).find('td:nth-child(7)').text());
						$('#sTTKK').load('ajax_chinhsuanhap.php?id_a='+$(this).find('td:nth-child(7)').text());
						$("#tenxatao").val($(this).find('td:nth-child(12)').text().replace(/ /g,"_"));
						$("#sosoql").val($(this).find('td:nth-child(16)').text());
						$("#noiql").val($(this).find('td:nth-child(17)').text());
					}
			   }); 
			}
		    		  
		);
$(document).ready(function() {
  $('#trang').change(function() {
		//alert(this.value);
		//$('#hsls').load('ajax_lietsy.php?id='+this.value);		
		//$('#thannhan').load('ajax_thannhan.php');
		//$('#giayto').load('ajax_giayto.php');	
		window.location.href="chinhsuapthuyenduyet.php?id="+this.value+">0";
  });
 });	
function xoa(bien)
{
	var sohoso2 = '';
	$.each($('table tbody tr'), function(){
		if ($(this).find('td:nth-child(8)').text() == "pt")
		sohoso2 += $(this).find('td:nth-child(7)').text() + "<" + $(this).find('td:nth-child(2)').text() + "<" + $(this).find('td:nth-child(3)').text() + "<" + $(this).find('td:nth-child(4)').text() + "<" + $(this).find('td:nth-child(5)').text() + "<" + $(this).find('td:nth-child(6)').text() + '>';
	});	
	//alert(bien);
	var giatri = "";	
	giatri = sohoso2.replace(bien,"");	
	giatri = giatri + "^" + bien;
	giatri = giatri.replace(/ /g,"_");
	$('#sTTKK').load('ajax_xoacs.php?id_a='+giatri);
} 
function showAjaxModalcds()
{		
	jQuery('#modal-9').modal('show', {backdrop: 'static'});
}
</script>
<script type="text/javascript">	
function kiemtraphuongtien() {
        var sohoso = '';
        $.each($("input[name='KT']:checked"), function(){
            sohoso += ($(this).attr('id')) + '>';
        });
        return sohoso;
    }
function themhd()
	{
		var sohoso2 = '';
		$.each($('table tbody tr'), function(){
			if ($(this).find('td:nth-child(8)').text() == "pt")
			sohoso2 += $(this).find('td:nth-child(7)').text() + "<" + $(this).find('td:nth-child(2)').text() + "<" + $(this).find('td:nth-child(3)').text() + "<" + $(this).find('td:nth-child(4)').text() + "<" + $(this).find('td:nth-child(5)').text() + "<" + $(this).find('td:nth-child(6)').text() + '>';
		});
		var giatri = "";			
		giatri = sohoso2 + ">" + kiemtraphuongtien();
		giatri = giatri.replace(/ /g,"_");
		$('#sTTKK').load('ajax_themcs.php?id_a='+giatri);
	}
$(document).ready(function() {
	  $('#hhhh').click(function() {
	   giatri = kiemtrahschon();   
	   $("#sobg").val(giatri);
	  });
	 });
function kiemtrahschon() {

        var sohoso1 = '';
        $.each($('table tbody tr'), function(){
			//if ($(this).find('td:nth-child(7)').text() == "phuongtien")
            sohoso1 += $(this).find('td:nth-child(7)').text() + "<" + $(this).find('td:nth-child(2)').text() + "<" + $(this).find('td:nth-child(3)').text() + "<" + $(this).find('td:nth-child(4)').text() + "<" + $(this).find('td:nth-child(5)').text() + "<" + $(this).find('td:nth-child(6)').text() + '>';
        });
        return sohoso1;
    }	 
</script>
<script type="text/javascript">
	$(document).ready(function() {
	  $('#hhhh1').click(function() {
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
function dinhdangsox($so)
	{
		$kq = "";
		if ($so > 0)
			$kq = number_format($so);
		return $kq;	
	}
function kieudoublex($so)
{
	$kq = 0;
	if ($so != "")
		$kq = (float)$so;
	else
		$kq = 0;	
	return $kq;	
}
/* if (isset($_POST['chuyen']))
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
	$sql="Update phuongtien Set chuyen='Duyệt' Where iddieuduong=".$key[$i];
	$kq=mysqli_query($con,$sql);
	}
}	 */
/* if(isset($_POST["capnhat"]))
{
	$sqlpt = "Update phuongtien Set hoten='".$_POST['hoten']."', ngaysinh='".$_POST['ngaysinh']."', gioitinh='".$_POST['gioitinh']."', ";
	$sqlpt = $sqlpt."truquan='".$_POST['truquan']."', mahsbo='".$_POST['mahsbo']."', mahstinh='".$_POST['mahstinh']."', loaidt='".$_POST['loaidt']."', ";
	$sqlpt = $sqlpt."tinhtrangsk='".$_POST['tinhtrangsk']."', lydo='".$_POST['lydo']."', xa='".str_replace('_',' ',$_POST['tenxatao'])."'";
	$sqlpt = $sqlpt." Where idphuongtien=".$_POST['idphuongtien'];
	$kqpt=mysqli_query($con,$sqlpt);
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
			if ($kytu[0]=="")
			{			
				$sqlup = "Insert into ctphuongtien Set idphuongtien=".$_POST['idphuongtien'].", tenphuongtien='".$kytu[1]."', nienhan='".$kytu[2]."', sotien=".$kytu[3].", ";
				$sqlup=$sqlup."namcaplk='".$kytu[4]."', phanloai='".$kytu[5]."'";
				$kq=mysqli_query($con,$sqlup);
			}
			else
			{
				$sqlup = "Update ctphuongtien Set tenphuongtien='".$kytu[1]."', nienhan='".$kytu[2]."', sotien=".$kytu[3].", ";
				$sqlup=$sqlup."namcaplk='".$kytu[4]."', phanloai='".$kytu[5]."' Where idctpt=".$kytu[0];
				$kq=mysqli_query($con,$sqlup);
			}
		}
	}
}	 */
?>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Danh sách phương tiện, dụng cụ chỉnh hình được duyệt</h4>
		</div>
			<div class="modal-body">
<form role='form' method='POST' class='form-horizontal form-groups-bordered'>
		<label class='col-sm-2'>Trang số:</label>
<?php
//$dieukien=$_GET['id'];
//$ahs = explode('>',$_GET['id']);$dkkhac="";
$j = 1;//$ahs[0];
		echo "<div  class='col-sm-2' style='margin-top:-7px'>";
			echo "<select style='margin-left:-90px;' name='trang' class='form-control' id='trang'>";
	$ls =  array(array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16"));		
	$cs=0;$sql="";
	/* if (strlen($dieukien) > 5)
	{
		$sql="select * from phuongtien where and chuyen='Chuyển 2' and xa like '%".str_replace('_',' ',$ahs[2])."%' and huyen Like '%".str_replace('_',' ',$ahs[1])."%'";
	}
	else
	{ */
		$sql="select * from phuongtien where chuyen='Duyệt' and huyen='".$madv[0]."'";
	//}
	$sql1=mysqli_query($con,$sql);
	$kq = 0;$kq1 = 1;
	if ($j == 1)
		echo "<option selected='selected' value='$kq1'>$kq1</option>";
	else
		echo "<option value='$kq1'>$kq1</option>";
	while($row=mysqli_fetch_array($sql1)){					
		$ls[$cs][0] = $row['idphuongtien'];
		$ls[$cs][1] = $row['hoten'];
		$ls[$cs][2] = $row['ngaysinh'];
		$ls[$cs][3] = $row['gioitinh'];
		$ls[$cs][4] = $row['truquan'];
		$ls[$cs][5] = $row['mahsbo'];
		$ls[$cs][6] = $row['mahstinh'];
		$ls[$cs][7] = $row['loaidt'];
		$ls[$cs][8] = $row['tinhtrangsk'];
		$ls[$cs][9] = $row['tylesgknld'];
		$ls[$cs][10] = $row['xa'];
		$ls[$cs][11] = $row['huyen'];
		$ls[$cs][12] = $row['lydo'];
		$ls[$cs][13] = $row['chuyen'];
		$ls[$cs][14] = $row['sosoql'];
		$ls[$cs][15] = $row['noiql'];
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
					<th style="background-color:rgb(54, 169, 224)" width="4%"><strong style='color:rgb(255, 255, 225)'>Chọn</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="10%"><strong style='color:rgb(255, 255, 225)'>Mã bộ</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="10%"><strong style='color:rgb(255, 255, 225)'>Mã tỉnh</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="20%"><strong style='color:rgb(255, 255, 225)'>Họ và tên</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="28%"><strong style='color:rgb(255, 255, 225)'>Trú quán</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="20%"><strong style='color:rgb(255, 255, 225)'>Tình trạng bệnh</strong></th>					
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>idphuongtien</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ngaysinh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>gioitinh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>loaidt</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>tylesgknld</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Đơn vị</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>huyen</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>lydo</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>chuyen</strong></th>
<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>chuyen</strong></th>
<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>chuyen</strong></th>					
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ncc</strong></th>
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
			for($i=($j - 1)*15;$i<15*$j;$i++)
			{
				//$a = $i + 1;
				if ($i < $cs)
				{					
				echo "<tr>";					
					echo "<td><input type = 'Checkbox' name = 'KT' id = '".$ls[$i][0]."' checked = 'checked'></td>";
					echo "<td style='text-align: left;'>".$ls[$i][5]."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][6]."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][1]."</td>";
					echo "<td style='text-align: left;'>".catchuoi($ls[$i][4])."</td>";
					echo "<td style='text-align: left;'>".catchuoi($ls[$i][8])."</td>";					
					echo "<td style='text-align: left; display:none'>".$ls[$i][0]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][2]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][3]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][7]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][9]."</td>";
					echo "<td style='text-align: left'>".$ls[$i][10]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][11]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][12]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][13]."</td>";	
echo "<td style='text-align: left; display:none'>".$ls[$i][14]."</td>";
echo "<td style='text-align: left; display:none'>".$ls[$i][15]."</td>";					
					echo "<td style='text-align: left; display:none'>ncc</td>";
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
						<input name="xoa" type="text" style="display:none" class="form-control" id="xoa">	
						<h3><strong>Thông tin về đối tượng:</strong><button type="button" style = "float:right" class="btn btn-black" data-dismiss="modal">Đóng</button><input type="submit" name="capnhat" class="btn btn-info" value = "Cập nhật" style = "float:right" id = "hhhh"></h3>
						<legend></legend>
						<label for="field-3" class="col-sm-2 control-label">Mã hồ sơ bộ:</label>
						<div class="col-sm-4">
							<input name="mahsbo" type="text" class="form-control" id="mahsbo">
							<input name="idphuongtien" type="text" style="display:none" class="form-control" id="idphuongtien">
							<input name="sobg" type="text" style="display:none" class="form-control" id="sobg">
						</div>
						<label for="field-3" class="col-sm-2 control-label">Mã hồ sơ tỉnh:</label>
						<div class="col-sm-4">
							<input name="mahstinh" type="text" class="form-control" id="mahstinh">
						</div>
						<label for="field-3" class="col-sm-2 control-label">Họ tên đối tượng:</label>
						<div class="col-sm-4">
							<input name="hoten" type="text" class="form-control" id="hoten">
						</div>
						<label for="field-3" class="col-sm-2 control-label">Ngày sinh:</label>
						<div class="col-sm-4">
							<input name="ngaysinh" type="text" class="form-control" id="ngaysinh">
						</div>
						<label for="field-3" class="col-sm-2 control-label">Giới tính:</label>
						<div class="col-sm-4">		
							<select name="gioitinh" id="gioitinh" class="form-control">
								<option value="Nam">Nam</option>
								<option value="Nữ">Nữ</option>
							</select>
						</div>
						<label for="field-3" class="col-sm-2 control-label">Loại đối tượng:</label>
						<div class="col-sm-4">
							<input name="loaidt" type="text" class="form-control" id="loaidt">
						</div>
						<label for="field-3" class="col-sm-2 control-label">Trú quán:</label>
						<div class="col-sm-10">
							<input name="truquan" type="text" class="form-control" id="truquan">
						</div>
						<label for="field-3" class="col-sm-2 control-label">Tình trạng bệnh tật:</label>
						<div class="col-sm-10">
							<input name="tinhtrangsk" type="text" class="form-control" id="tinhtrangsk">
						</div>
						<label for="field-3" class="col-sm-2 control-label">Lý do trang cấp:</label>
						<div class="col-sm-10">
							<input name="lydo" type="text" class="form-control" id="lydo">
						</div>
						<label for="field-3" class="col-sm-2 control-label">Tên xã:</label>
						<div class="col-sm-10">								
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
						<label for="field-3" class="col-sm-2 control-label">Số sổ trang cấp:</label>
						<div class="col-sm-4">
							<input name="sosoql" type="text" class="form-control" id="sosoql">
						</div>
						<label for="field-3" class="col-sm-2 control-label">Nơi quản lý:</label>
						<div class="col-sm-4">
							<input name="noiql" type="text" class="form-control" id="noiql">
						</div>
						<h3><strong>Chi tiết phương tiện, công cụ:</strong><a style = "float:right" href="#"  class="btn btn-sm btn-success btn-quatrinhdd" data-target="#modal-quatrinhdd" data-toggle="modal">
												<i class="fa fa-plus"></i> &nbsp;Chọn công cụ</a></h3>
						<div id = "sTTKK" class="table-responsive">
							<table class="table table-hover table-striped table-bordered table-advanced tablesorter display" id="table-2">
								<thead>
									<tr>					
										<th style="background-color:rgb(54, 169, 224)" width="5%"><strong style='color:rgb(255, 255, 225)'>STT</strong></th>
										<th style="background-color:rgb(54, 169, 224)" width="50%"><strong style='color:rgb(255, 255, 225)'>Tên phương tiện, dụng cụ</strong></th>
										<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Niên hạn</strong></th>
										<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Số tiền</strong></th>
										<th style="background-color:rgb(54, 169, 224)" width="12%"><strong style='color:rgb(255, 255, 225)'>Ngày trả</strong></th>	
										<th style="background-color:rgb(16, 78, 211); display:none" width="12%"><strong>phanloai</strong></th>
										<th style="background-color:rgb(16, 78, 211); display:none" width="12%"><strong>phanloai</strong></th>
										<th style="background-color:rgb(16, 78, 211); display:none" width="12%"><strong>phanloai</strong></th>
										<th style="background-color:rgb(16, 78, 211)" width="9%"><strong>Thao tác</strong></th>					
									</tr>				
								</thead>
								<tbody id="rowlist" class="rowlist">				
								</tbody>
							</table>
						</div>
					</form>						
			</div>
		</div>
	</div>
</div>
<div id="modal-quatrinhdd" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content row">
				<div class="modal-header modal-header-primary">
					<h4 id="modal-login-label" class="modal-title">Chọn danh sách phương tiên, công cụ chỉnh hình</h4>
				</div>
				<div class="modal-body">
					<div class="form-horizontal">
						<div id = "phuongtien" class="table-responsive">
							<table class="table table-hover table-striped table-bordered table-advanced tablesorter display" id="table-3">
								<thead>
									<tr>					
										<th style="background-color:rgb(54, 169, 224)" width="5%"><strong style='color:rgb(255, 255, 225)'>Chọn</strong></th>
										<th style="background-color:rgb(54, 169, 224)" width="29%"><strong style='color:rgb(255, 255, 225)'>Phân loại</strong></th>	
										<th style="background-color:rgb(54, 169, 224)" width="50%"><strong style='color:rgb(255, 255, 225)'>Tên phương tiện, công cụ</strong></th>					
										<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Niên hạn</strong></th>
										<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Số tiền</strong></th>	
										<th style="background-color:rgb(54, 169, 224); display:none" width="8%"><strong>pt</strong></th>
									</tr>									
								</thead>
								<tbody id="rowlist" class="rowlist">
	<?php
	$sqldmpt = "Select * From dmphuongtien";
	$qrdmpt = mysqli_query($con,$sqldmpt);$gop="";
	while($rdmpt=@mysqli_fetch_array($qrdmpt))
	{
		$gop="<".$rdmpt['tenphuongtien']."<".$rdmpt['nienhan']."<".$rdmpt['sotien']."<<<";
									echo "<tr>";
										echo "<td><input type = 'Checkbox' name = 'KT' id = '$gop'></td>";
										echo "<td style='text-align: left; color:#0F0F10'>".$rdmpt['phanloai']."</td>";
										echo "<td style='text-align: left; color:#0F0F10'>".$rdmpt['tenphuongtien']."</td>";
										echo "<td style='text-align: left; color:#0F0F10'>".$rdmpt['nienhan']."</td>";
										echo "<td style='text-align: right; color:#0F0F10'>".dinhdangsox(kieudoublex($rdmpt['sotien']))."</td>";
										echo "<td style='text-align: right; color:#0F0F10; display:none'>pt</td>";
									echo "</tr>";
	}
	?>	
								</tbody>
							</table>
						</div>						
					</div>
				</div>
				<div class="modal-footer">
					<form id="" method="GET" action="#" accept-charset="UTF-8">
						<a type="button" data-dismiss="modal" class="btn btn-default">Hủy thao tác</a>
						<a type="button" id="hoatdongt" onclick = "themhd();" data-dismiss="modal" class="btn btn-primary">Đồng ý</a>
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
							<h4 style = "text-align:center; color:rgb(10, 10, 10)">CHUYỂN DANH SÁCH ĐĂNG KÝ PHƯƠNG TIỆN LÊN CẤP TRÊN</h4>	
							<h4 style = "text-align:center; color:rgb(10, 10, 10)">(Lưu ý)</h4>
							<label for="field-3" class="col-sm-12 control-label" style = "text-align: left;">-   Danh sách chuyển lên sẽ không chỉnh sửa được</label>
							<label for="field-3" class="col-sm-12 control-label" style = "text-align: left;">-   Nếu muốn chỉnh sửa cần yêu cầu cán bộ cấp trên chuyển trả lại</label>
							<label for="field-3" class="col-sm-12 control-label" style = "text-align: left;">-   Nếu thiếu hồ sơ bhyt có thể lập thêm để chuyển lên</label>
							<input name="sobg1" type="text" class="form-control" style = "Display:none;" id="sobg1">
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
							<input type="submit" name="chuyen" class="btn btn-blue" value = "Cập nhật" id = "hhhh1">							
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
							<label for="field-3" class="col-sm-3 control-label">Tên Huyện:</label>
							<div class="col-sm-9">								
								<select name="tenhuyentim" id="tenhuyentim" class="form-control">
									<?php
									$sqltcml = "Select tenhuyen From huyen";
									$qrtcml = mysqli_query($con,$sqltcml);			
									while($rtcml=@mysqli_fetch_array($qrtcml))
									{
										echo "<option value=".str_replace(' ','_',$rtcml['tenhuyen']).">".$rtcml['tenhuyen']."</option>";
									}
									?>
									<option value="" selected = "selected"></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-3 control-label">Tên xã:</label>
							<div class="col-sm-9">								
								<select name="tenxatim" id="tenxatim" class="form-control">
									<?php
									$sqltcml = "Select tenxa From xa";
									$qrtcml = mysqli_query($con,$sqltcml);			
									while($rtcml=@mysqli_fetch_array($qrtcml))
									{
										echo "<option value=".str_replace(' ','_',$rtcml['tenxa']).">".$rtcml['tenxa']."</option>";
									}
									?>
									<option value="" selected = "selected"></option>
								</select>
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
							<input type="submit" name="taobhyt" class="btn btn-blue" value = "Tìm kiếm">							
					</form>						
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
    window.onsubmit = function() { 
		document.thoaitao.action = get_action2();
    }
	function get_action2() {
			return "chinhsuapthuyenduyet.php?id=1>"+$('#tenhuyentim').val()+">"+$('#tenxatim').val()";			
    }
</script>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>