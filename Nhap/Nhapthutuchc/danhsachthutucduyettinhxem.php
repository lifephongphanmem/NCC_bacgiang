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
						if ($(this).find('td:nth-child(7)').text()=="Người có công")
						{
							jQuery('#modal-6').modal('show', {backdrop: 'static'});
							$("#hoten").val($(this).find('td:nth-child(2)').text());
							$("#phanloai").val($(this).find('td:nth-child(7)').text());
							$("#ngaysinh").val($(this).find('td:nth-child(3)').text());
							$("#gioitinh").val($(this).find('td:nth-child(8)').text());
							$("#loaidoituong").val($(this).find('td:nth-child(12)').text());
							$("#nguyenquan").val($(this).find('td:nth-child(9)').text());
							$("#truquan").val($(this).find('td:nth-child(10)').text());
							if ($(this).find('td:nth-child(27)').text()=="0000-00-00")
								$("#ngaylaphs").val("");
							else
								$("#ngaylaphs").val(ngaythang($(this).find('td:nth-child(27)').text()));
							$("#noidung").val($(this).find('td:nth-child(4)').text());
							$("#tralai").val($(this).find('td:nth-child(26)').text());
							$('#sTTKK').load('ajax_chinhsuachitra.php?id_a='+$(this).find('td:nth-child(6)').text());
							$("#ttthutuchc").val($(this).find('td:nth-child(6)').text());
							$("#trangthai").val($(this).find('td:nth-child(5)').text());
							$("#quyetdinh").val($(this).find('td:nth-child(17)').text());
							if ($(this).find('td:nth-child(28)').text()=="0000-00-00")
								$("#ngayqd").val("");
							else
								$("#ngayqd").val(ngaythang($(this).find('td:nth-child(28)').text()));
							if ($(this).find('td:nth-child(11)').text()=="0000-00-00")
								$("#ngayhuong").val("");
							else
								$("#ngayhuong").val(ngaythang($(this).find('td:nth-child(11)').text()));
							$("#phanloaitc").val($(this).find('td:nth-child(31)').text());
							$("#muctrocap").val($(this).find('td:nth-child(18)').text());
							$("#phucap").val($(this).find('td:nth-child(21)').text());
							$("#truylinh").val($(this).find('td:nth-child(22)').text());
							$("#xa").val($(this).find('td:nth-child(23)').text().replace(/ /g,"_"));
							$("#phanloaihoso").val($(this).find('td:nth-child(32)').text());
						}
						else
						{
							jQuery('#modal-7').modal('show', {backdrop: 'static'});
							$('#sTTKKx').load('ajax_chinhsuachitratn.php?id_a='+$(this).find('td:nth-child(6)').text());
							$("#hotenx").val($(this).find('td:nth-child(2)').text());
							$("#phanloaix").val($(this).find('td:nth-child(7)').text());
							$("#ngaysinhx").val($(this).find('td:nth-child(3)').text());
							$("#gioitinhx").val($(this).find('td:nth-child(8)').text());
							$("#loaidoituongx").val($(this).find('td:nth-child(12)').text());
							$("#nguyenquanx").val($(this).find('td:nth-child(9)').text());
							$("#truquanx").val($(this).find('td:nth-child(10)').text());
							if ($(this).find('td:nth-child(27)').text()=="0000-00-00")
								$("#ngaylaphsx").val("");
							else
								$("#ngaylaphsx").val(ngaythang($(this).find('td:nth-child(27)').text()));
							$("#noidungx").val($(this).find('td:nth-child(4)').text());
							$("#tralaix").val($(this).find('td:nth-child(26)').text());
							$("#ttthutuchcx").val($(this).find('td:nth-child(6)').text());
							$("#trangthaix").val($(this).find('td:nth-child(5)').text());
							$("#quyetdinhx").val($(this).find('td:nth-child(17)').text());
							if ($(this).find('td:nth-child(28)').text()=="0000-00-00")
								$("#ngayqdx").val("");
							else
								$("#ngayqdx").val(ngaythang($(this).find('td:nth-child(28)').text()));
							if ($(this).find('td:nth-child(11)').text()=="0000-00-00")
								$("#ngayhuongx").val("");
							else
								$("#ngayhuongx").val(ngaythang($(this).find('td:nth-child(11)').text()));
							$("#phanloaitcx").val($(this).find('td:nth-child(31)').text());
							$("#muctrocapx").val($(this).find('td:nth-child(18)').text());
							$("#phucapx").val($(this).find('td:nth-child(21)').text());
							$("#truylinhx").val($(this).find('td:nth-child(22)').text());
							$("#xax").val($(this).find('td:nth-child(23)').text().replace(/ /g,"_"));
							$("#phanloaihosox").val($(this).find('td:nth-child(32)').text());
							//
							$("#nguoihuongtn").val($(this).find('td:nth-child(13)').text());
							$("#ngaysinhtn").val($(this).find('td:nth-child(14)').text());
							$("#gioitinhtn").val($(this).find('td:nth-child(15)').text());
							$("#nguyenquantn").val($(this).find('td:nth-child(19)').text());
							$("#truquantn").val($(this).find('td:nth-child(20)').text());
							$("#quanhe").val($(this).find('td:nth-child(16)').text());
						}
					}
			   }); 
			}
		    		  
		);
	// click
	function ngaythang(giatri)
	{
		kq ="";
		if(giatri!="0000/00/00")			
			kq = giatri.substr(8,2)+"/"+ giatri.substr(5,2)+"/"+giatri.substr(0,4);		
		return kq;
	}
//	
$(document).ready(function() {
  $('#trang').change(function() {
		//alert(this.value);
		//$('#hsls').load('ajax_lietsy.php?id='+this.value);		
		//$('#thannhan').load('ajax_thannhan.php');
		//$('#giayto').load('ajax_giayto.php');	
		window.location.href="danhsachthutucduyettinhxem.php?id="+this.value+">0";
  });
 });
function showAjaxModalctim()
{		
	jQuery('#modal-8').modal('show', {backdrop: 'static'});
}
function showAjaxModalccd()
{		
	jQuery('#modal-5').modal('show', {backdrop: 'static'});
}
</script>
<script>
$(document).ready(function(){
    $(":input").inputmask();
});
</script>

<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Duyệt danh sách hồ sơ xin hưởng trợ cấp</h4>
		</div>
			<div class="modal-body">
<form role='form' method='POST' class='form-horizontal form-groups-bordered'>
<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModalctim();" class='btn btn-success'>
			<i class='entypo-pencil'></i>Tìm kiếm hồ sơ
		</a>
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModalccd();" class='btn btn-success'>
			<i class='entypo-pencil'></i>In hồ sơ duyệt
		</a>
		<label class='col-sm-2'>Trang số:</label>
<?php
function doingay1($ngay)
{		
		$kq = substr($ngay,6,4) ."/". substr($ngay,3,2) . "/". substr($ngay,0,2);		
		return $kq;
}	
$ahs =$_GET['id'];
$j = 1;
$ls =  array(array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"));		
$cs=0;$sql="";
if (strlen($ahs) > 3)
{
	$kiemtra=explode('>',$ahs);
	$j = $kiemtra[0];
	if ($kiemtra[2] != "" && $kiemtra[3] != "")
	{
		$sql="select * from thutuchc where trangthai='Duyệt' and ngayqd between '".doingay1($kiemtra[2])."' and '".doingay1($kiemtra[3])."' and huyen Like '%".str_replace('_',' ',$kiemtra[1])."%'";
	}
	else
	{		
		$sql="select * from thutuchc where trangthai='Duyệt' and huyen Like '%".str_replace('_',' ',$kiemtra[1])."%'";
	}
}
else
{
	$sql="select * from thutuchc where trangthai='Duyệt'";
	$j = $ahs;
}
		echo "<div  class='col-sm-2' style='margin-top:-7px'>";
			echo "<select style='margin-left:-90px;' name='trang' class='form-control' id='trang'>";
	
	$sql1=mysqli_query($con,$sql);
	$kq = 0;$kq1 = 1;
	if ($j == 1)
		echo "<option selected='selected' value='$kq1'>$kq1</option>";
	else
		echo "<option value='$kq1'>$kq1</option>";
	while($row=mysqli_fetch_array($sql1)){					
		$ls[$cs][0] = $row['ttthutuchc'];
		$ls[$cs][1] = $row['phanloai'];
		$ls[$cs][2] = $row['hoten'];
		$ls[$cs][3] = $row['ngaysinh'];
		$ls[$cs][4] = $row['gioitinh'];
		$ls[$cs][5] = $row['nguyenquan'];
		$ls[$cs][6] = $row['truquan'];
		$ls[$cs][7] = $row['noidung'];
		$ls[$cs][8] = $row['ngayhuong'];
		$ls[$cs][9] = $row['loaidoituong'];
		$ls[$cs][10] = $row['nguoihuongtn'];
		$ls[$cs][11] = $row['ngaysinhtn'];
		$ls[$cs][12] = $row['gioitinhtn'];
		$ls[$cs][13] = $row['quanhe'];
		$ls[$cs][14] = $row['quyetdinh'];
		$ls[$cs][15] = $row['muctrocap'];
		$ls[$cs][16] = $row['nguyenquantn'];
		$ls[$cs][17] = $row['truquantn'];
		$ls[$cs][18] = $row['phucap'];
		$ls[$cs][19] = $row['truylinh'];
		$ls[$cs][20] = $row['trangthai'];
		$ls[$cs][21] = $row['xa'];
		$ls[$cs][22] = $row['huyen'];
		$ls[$cs][23] = $row['tths'];
		$ls[$cs][24] = $row['tralai'];
		$ls[$cs][25] = $row['ngaylaphs'];
		$ls[$cs][26] = $row['ngayqd'];
		$ls[$cs][27] = $row['ngaytraqd'];
		$ls[$cs][28] = $row['noitraqd'];
		$ls[$cs][29] = $row['phanloaitc'];
		$ls[$cs][30] = $row['phanloaihoso'];
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
					<th style="background-color:rgb(54, 169, 224)" width="15%"><strong style='color:rgb(255, 255, 225)'>Họ và tên</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Ngày sinh</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="55%"><strong style='color:rgb(255, 255, 225)'>Nội dung xin hưởng</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="10%"><strong style='color:rgb(255, 255, 225)'>Trạng thái</strong></th>
					<th style="background-color:rgb(54, 169, 224); display:none" width="28%"><strong>ttthutuchc</strong></th>					
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>phanloai</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>gioitinh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>nguyenquan</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>truquan</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ngayhuong</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>loaidoituong</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>nguoihuongtn</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ngaysinhtn</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>gioitinhtn</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>quanhe</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>quyetdinh</strong></th>					
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>muctrocap</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>nguyenquantn</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>truquantn</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>phucap</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>truylinh</strong></th>					
					<th style="background-color:rgb(54, 169, 224);" width="8%"><strong style='color:rgb(255, 255, 225)'>Tên đơn vị</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>huyen</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>tths</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>tralai</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ngaylaphs</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ngayqd</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ngaytraqd</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>noitraqd</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>phanloaitc</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>phanloaihoso</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ncc</strong></th>
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
					echo "<td>".($i+1)."</td>";
					//if ($ls[$i][1]=="")
					echo "<td style='text-align: left;'>".$ls[$i][2]."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][3]."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][7]."</td>";					
					if($ls[$i][20]=="Duyệt")
						echo "<td style='text-align: left;'>Đã quyết định</td>";					
					echo "<td style='text-align: left; display:none'>".$ls[$i][0]."</td>";					
					echo "<td style='text-align: left; display:none'>".$ls[$i][1]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][4]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][5]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][6]."</td>";
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
					echo "<td style='text-align: left;'>".$ls[$i][21]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][22]."</td>";	
					echo "<td style='text-align: left; display:none'>".$ls[$i][23]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][24]."</td>";					
					echo "<td style='text-align: left; display:none'>".$ls[$i][25]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][26]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][27]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][28]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][29]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][30]."</td>";
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
	<h3><strong>Thông tin về đối tượng xin hưởng trợ cấp:</strong><button type="button" style = "float:right" class="btn btn-black" data-dismiss="modal">Đóng</button></h3>
	<legend></legend>
	<label for="field-3" class="col-sm-2 control-label">Họ và tên:</label>
	<div class="col-sm-4">
		<input name="hoten" type="text" class="form-control" id="hoten">
		<input name="phanloai" type="text" style="display:none" class="form-control" id="phanloai">
		<input name="sogiayto" type="text" style="display:none" class="form-control" id="sogiayto">
		<input name="ttthutuchc" type="text" style="display:none" class="form-control" id="ttthutuchc">		
		<input name="trangthai" type="text" style="display:none" class="form-control" id="trangthai">		
	</div>
	<label for="field-3" class="col-sm-2 control-label">Ngày sinh:</label>
	<div class="col-sm-4">
		<input name="ngaysinh" type="text" class="form-control" data-mask="date" id="ngaysinh">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Giới tính:</label>
	<div class="col-sm-4">
		<select name="gioitinh" id="gioitinh" class="form-control">
			<option value="Nam">Nam</option>
			<option value="Nữ">Nữ</option>
		</select>		
	</div>
	<label for="field-3" class="col-sm-2 control-label">Đối tượng:</label>
	<div class="col-sm-4">
		<select name="loaidoituong" id="loaidoituong" class="form-control">
			<option value="ah">Anh hùng lực lượng VTND, anh hùng lao động TKKC</option>
			<option value="bb">Bệnh binh</option>
			<option value="bm">Bà mẹ Việt Nam anh hùng</option>
			<option value="ls">Liệt sỹ</option>
			<option value="tb">Thương binh</option>
			<option value="hh">Người hđkc bị nhiễm chất độc hóa học</option>
			<option value="kc">Người hđkc giải phóng dân tộc, làm nghĩa vụ quốc tế được tặng huân, huy chương</option>
			<option value="cc">Người có công giúp đỡ cách mạng</option>
			<option value="td">Người hđkc bị địch bắt tù, đày</option>
			<option value="lt">Người hđcm trước ngày 01/01/1945</option>
			<option value="tkn">Người hđcm từ ngày 01/01/1945 đến khởi nghĩa tháng 8 năm 1945</option>			
			<option value=""></option>
		</select>		
	</div>
	<label for="field-3" class="col-sm-2 control-label">Nguyên quán:</label>
	<div class="col-sm-10">
		<input name="nguyenquan" type="text" class="form-control" id="nguyenquan">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Trú quán:</label>
	<div class="col-sm-10">		
		<input name="truquan" type="text" class="form-control" id="truquan">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Ngày lập hồ sơ:</label>
	<div class="col-sm-4">
		<input name="ngaylaphs" type="text" class="form-control" data-mask="date" id="ngaylaphs">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Phân loại hồ sơ:</label>
	<div class="col-sm-4">
		<select name="phanloaihoso" id="phanloaihoso" class="form-control">
			<option value="Hồ sơ xin hưởng trợ cấp">Hồ sơ xin hưởng trợ cấp</option>
			<option value="Hồ sơ báo giảm">Hồ sơ báo giảm</option>
		</select>		
	</div>
	<label for="field-3" class="col-sm-2 control-label">Nội dung hồ sơ:</label>
	<div class="col-sm-10">
		<input name="noidung" type="text" class="form-control" id="noidung">
	</div>	
	<label for="field-3" class="col-sm-2 control-label">Quyết định trợ cấp:</label>
	<div class="col-sm-4">
		<input name="quyetdinh" type="text" class="form-control" id="quyetdinh">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Ngày quyết định:</label>
	<div class="col-sm-4">
		<input name="ngayqd" type="text" class="form-control" data-mask="date" id="ngayqd">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Ngày hưởng trợ cấp:</label>
	<div class="col-sm-4">
		<input name="ngayhuong" type="text" class="form-control" data-mask="date" id="ngayhuong">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Phân loại trợ cấp:</label>
	<div class="col-sm-4">
		<select name="phanloaitc" id="phanloaitc" class="form-control">
			<option value="Hàng tháng">Hàng tháng</option>
			<option value="Hàng năm">Hàng năm</option>
			<option value="Một lần">Một lần</option>
		</select>		
	</div>
	<label for="field-3" class="col-sm-2 control-label">Mức trợ cấp:</label>
	<div class="col-sm-4">
		<input name="muctrocap" type="text" class="form-control" data-mask="fdecimal" id="muctrocap">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Mức phụ trợ cấp:</label>
	<div class="col-sm-4">
		<input name="phucap" type="text" class="form-control" data-mask="fdecimal" id="phucap">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Truy lĩnh:</label>
	<div class="col-sm-4">
		<input name="truylinh" type="text" class="form-control" data-mask="fdecimal" id="truylinh">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Tên đơn vị:</label>
	<div class="col-sm-4">								
		<select name="xa" id="xa" class="form-control" readonly = "true">
			<?php
			$sqltcml = "Select tenxa From xa";
			$qrtcml = mysqli_query($con,$sqltcml);			
			while($rtcml=@mysqli_fetch_array($qrtcml))
			{
				echo "<option value=".str_replace(' ','_',$rtcml['tenxa']).">".$rtcml['tenxa']."</option>";
			}
			?>			
		</select>
	</div>
	<label>Chi tiết giấy tờ kèm theo:</label>
	<div id = "sTTKK" class="table-responsive">
		<table class="table table-hover table-striped table-bordered table-advanced tablesorter display" id="table-2">
			<thead>
				<tr>					
					<th style="background-color:rgb(54, 169, 224)" width="5%"><strong style='color:rgb(255, 255, 225)'>STT</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="50%"><strong style='color:rgb(255, 255, 225)'>Tên giấy tờ</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Số lượng</strong></th>					
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ttthutuchc</strong></th>
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

<div class="modal fade" id="modal-7">
	<div class="modal-dialog">
		<div class="modal-content">				
			<div class="modal-body">				
<form name="thoaimoix" role='form' method='POST' class='form-horizontal form-groups-bordered'>
	<input name="xoax" type="text" style="display:none" class="form-control" id="xoax">	
	<h3><strong>Thông tin về đối tượng xin hưởng trợ cấp:</strong><button type="button" style = "float:right" class="btn btn-black" data-dismiss="modal">Đóng</button></h3>
	<legend></legend>
	<label for="field-3" class="col-sm-2 control-label">Họ tên thân nhân:</label>
	<div class="col-sm-4">
		<input name="nguoihuongtn" type="text" class="form-control" id="nguoihuongtn">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Ngày sinh:</label>
	<div class="col-sm-4">
		<input name="ngaysinhtn" type="text" class="form-control" data-mask="date" id="ngaysinhtn">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Giới tính:</label>
	<div class="col-sm-4">
		<select name="gioitinhtn" id="gioitinhtn" class="form-control">
			<option value="Nam">Nam</option>
			<option value="Nữ">Nữ</option>
		</select>		
	</div>	
	<label for="field-3" class="col-sm-2 control-label">Nguyên quán:</label>
	<div class="col-sm-4">
		<input name="nguyenquantn" type="text" class="form-control" id="nguyenquantn">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Trú quán:</label>
	<div class="col-sm-4">		
		<input name="truquantn" type="text" class="form-control" id="truquantn">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Quan hệ:</label>
	<div class="col-sm-4">		
		<input name="quanhe" type="text" class="form-control" id="quanhe">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Đối tượng:</label>
	<div class="col-sm-4">
		<select name="loaidoituongx" id="loaidoituongx" class="form-control">
			<option value="ah">Anh hùng lực lượng VTND, anh hùng lao động TKKC</option>
			<option value="bb">Bệnh binh</option>
			<option value="bm">Bà mẹ Việt Nam anh hùng</option>
			<option value="ls">Liệt sỹ</option>
			<option value="tb">Thương binh</option>
			<option value="hh">Người hđkc bị nhiễm chất độc hóa học</option>
			<option value="kc">Người hđkc giải phóng dân tộc, làm nghĩa vụ quốc tế được tặng huân, huy chương</option>
			<option value="cc">Người có công giúp đỡ cách mạng</option>
			<option value="td">Người hđkc bị địch bắt tù, đày</option>
			<option value="lt">Người hđcm trước ngày 01/01/1945</option>
			<option value="tkn">Người hđcm từ ngày 01/01/1945 đến khởi nghĩa tháng 8 năm 1945</option>			
			<option value=""></option>
		</select>		
	</div>
	<label for="field-3" class="col-sm-2 control-label">Ngày lập hồ sơ:</label>
	<div class="col-sm-4">
		<input name="ngaylaphsx" type="text" class="form-control" data-mask="date" id="ngaylaphsx">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Phân loại hồ sơ:</label>
	<div class="col-sm-10">
		<select name="phanloaihosox" id="phanloaihosox" class="form-control">
			<option value="Hồ sơ xin hưởng trợ cấp">Hồ sơ xin hưởng trợ cấp</option>
			<option value="Hồ sơ báo giảm">Hồ sơ báo giảm</option>
		</select>		
	</div>
	<label for="field-3" class="col-sm-2 control-label">Nội dung hồ sơ:</label>
	<div class="col-sm-10">
		<input name="noidungx" type="text" class="form-control" id="noidungx">
	</div>	
	<label for="field-3" class="col-sm-2 control-label">Quyết định trợ cấp:</label>
	<div class="col-sm-4">
		<input name="quyetdinhx" type="text" class="form-control" id="quyetdinhx">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Ngày quyết định:</label>
	<div class="col-sm-4">
		<input name="ngayqdx" type="text" class="form-control" data-mask="date" id="ngayqdx">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Ngày hưởng trợ cấp:</label>
	<div class="col-sm-4">
		<input name="ngayhuongx" type="text" class="form-control" data-mask="date" id="ngayhuongx">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Phân loại trợ cấp:</label>
	<div class="col-sm-4">
		<select name="phanloaitcx" id="phanloaitcx" class="form-control">
			<option value="Hàng tháng">Hàng tháng</option>
			<option value="Hàng năm">Hàng năm</option>
			<option value="Một lần">Một lần</option>
		</select>		
	</div>
	<label for="field-3" class="col-sm-2 control-label">Mức trợ cấp:</label>
	<div class="col-sm-4">
		<input name="muctrocapx" type="text" class="form-control" data-mask="fdecimal" id="muctrocapx">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Mức phụ trợ cấp:</label>
	<div class="col-sm-4">
		<input name="phucapx" type="text" class="form-control" data-mask="fdecimal" id="phucapx">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Truy lĩnh:</label>
	<div class="col-sm-10">
		<input name="truylinhx" type="text" class="form-control" data-mask="fdecimal" id="truylinhx">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Họ và tên:</label>
	<div class="col-sm-4">
		<input name="hotenx" type="text" class="form-control" id="hotenx">
		<input name="phanloaix" type="text" style="display:none" class="form-control" id="phanloaix">
		<input name="sogiaytox" type="text" style="display:none" class="form-control" id="sogiaytox">
		<input name="ttthutuchcx" type="text" style="display:none" class="form-control" id="ttthutuchcx">		
		<input name="trangthaix" type="text" style="display:none" class="form-control" id="trangthaix">		
	</div>
	<label for="field-3" class="col-sm-2 control-label">Ngày sinh:</label>
	<div class="col-sm-4">
		<input name="ngaysinhx" type="text" class="form-control" data-mask="date" id="ngaysinhx">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Giới tính:</label>
	<div class="col-sm-4">
		<select name="gioitinhx" id="gioitinhx" class="form-control">
			<option value="Nam">Nam</option>
			<option value="Nữ">Nữ</option>
		</select>		
	</div>	
	<label for="field-3" class="col-sm-2 control-label">Nguyên quán:</label>
	<div class="col-sm-4">
		<input name="nguyenquanx" type="text" class="form-control" id="nguyenquanx">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Trú quán:</label>
	<div class="col-sm-4">		
		<input name="truquanx" type="text" class="form-control" id="truquanx">
	</div>	
	<label for="field-3" class="col-sm-2 control-label">Tên đơn vị:</label>
	<div class="col-sm-4">								
		<select name="xax" id="xax" class="form-control" readonly = "true">
			<?php
			$sqltcml = "Select tenxa From xa";
			$qrtcml = mysqli_query($con,$sqltcml);			
			while($rtcml=@mysqli_fetch_array($qrtcml))
			{
				echo "<option value=".str_replace(' ','_',$rtcml['tenxa']).">".$rtcml['tenxa']."</option>";
			}
			?>			
		</select>
	</div>
	<label>Chi tiết giấy tờ kèm theo:</label>
	<div id = "sTTKKx" class="table-responsive">
		<table class="table table-hover table-striped table-bordered table-advanced tablesorter display" id="table-2">
			<thead>
				<tr>					
					<th style="background-color:rgb(54, 169, 224)" width="5%"><strong style='color:rgb(255, 255, 225)'>STT</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="50%"><strong style='color:rgb(255, 255, 225)'>Tên giấy tờ</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Số lượng</strong></th>					
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ttthutuchc</strong></th>
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

<div class="modal fade" id="modal-8">
	<div class="modal-dialog">
		<div class="modal-content">				
			<div class="modal-body">				
					<form name="thoaitk" role='form' method='POST' class='form-horizontal form-groups-bordered'>
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
							<label for="field-3" class="col-sm-3 control-label">Ngày quyết định từ:</label>
							<div class="col-sm-9">
								<input name="ngaylaphstu" type="text" class="form-control" data-mask="date" id="ngaylaphstu">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Ngày quyết định đến:</label>
							<div class="col-sm-9">
								<input name="ngaylaphsden" type="text" class="form-control" data-mask="date" id="ngaylaphsden">
							</div>
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
							<input type="submit" name="taobhyt" class="btn btn-blue" value = "Tìm kiếm">							
					</form>						
			</div>
		</div>
	</div>
</div>	
<div class="modal fade" id="modal-5">
	<div class="modal-dialog">
		<div class="modal-content">				
			<div class="modal-body">				
					<form name="thoaitao" role='form' method='POST' action="/Thoaikx/Danhsachhosoduyet.php" class='form-horizontal form-groups-bordered'>
						<div id = "sTTKK1" class="form-group">
							<label for="field-3" class="col-sm-3 control-label">Tên Huyện:</label>
							<div class="col-sm-9">								
								<select name="huyenkx" id="huyenkx" class="form-control">
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
							<label for="field-3" class="col-sm-3 control-label">Ngày quyết định từ:</label>
							<div class="col-sm-9">
								<input name="Tu" type="text" class="form-control" data-mask="date" id="Tu">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Ngày quyết định đến:</label>
							<div class="col-sm-9">
								<input name="Den" type="text" class="form-control" data-mask="date" id="Den">
							</div>
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
							<input type="submit" name="create" class="btn btn-blue" value = "Tạo báo cáo">
							<input name="tinhkx" type="text" style="display:none" class="form-control" id="tinhkx" value = "<?php echo $madv[0];?>">	
					</form>						
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
    window.onsubmit = function() { 
		document.thoaitk.action = get_action2();
    }
	function get_action2() {
			return "danhsachthutucduyettinhxem.php?id=1>"+$('#tenhuyentim').val()+">"+$('#ngaylaphstu').val()+">"+$('#ngaylaphsden').val();			
    }
</script>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>