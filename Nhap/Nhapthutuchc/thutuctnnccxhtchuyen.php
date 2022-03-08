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
<script>
$(document).ready(function(){
    $(":input").inputmask();
});
</script>
<script>
	$(document).ready(function() {
	  $('#hhhh').click(function() {
	   giatri = kiemtrahschon(); 		
	   $("#sogiayto").val(giatri);
	   //alert("Cập nhật thành công!");
	  });
	 });
function kiemtrahschon() {

        var sohoso1 = '';
        $.each($('table tbody tr'), function(){			
            sohoso1 += $(this).find('td:nth-child(2)').text() + "<" + $(this).find('td:nth-child(3)').text() + '>';
        });
        return sohoso1;
    }	 
</script>
<?php
$hs=explode('>',$_GET['id']);
function doingay1($ngay)
{		
		$kq = substr($ngay,6,4) ."/". substr($ngay,3,2) . "/". substr($ngay,0,2);		
		return $kq;
}
if(isset($_POST["capnhat"]))
{
	$sqlpt = "Insert into thutuchc Set phanloai='Thân nhân người có công', hoten='".$_POST['hoten']."', ngaysinh='".$_POST['ngaysinh']."', ";
	$sqlpt = $sqlpt."gioitinh='".$_POST['gioitinh']."', nguyenquan='".$_POST['nguyenquan']."', truquan='".$_POST['truquan']."', noidung='".$_POST['noidung']."', ";
	$sqlpt = $sqlpt."loaidoituong='".$_POST['loaidoituong']."', trangthai='Chuyển 1', xa='".str_replace('_',' ',$_POST['xa'])."', huyen='".$madv[0]."', ngaylaphs='".doingay1($_POST['ngaylaphs'])."', ";
	$sqlpt = $sqlpt."nguoihuongtn='".$_POST['nguoihuongtn']."', ngaysinhtn='".$_POST['ngaysinhtn']."', gioitinhtn='".$_POST['gioitinhtn']."', ";
	$sqlpt = $sqlpt."quanhe='".$_POST['quanhe']."', nguyenquantn='".$_POST['nguyenquantn']."', truquantn='".$_POST['truquantn']."', tths=".$_POST['idhs'];	
	$kqpt=mysqli_query($con,$sqlpt);
	$sql = "Select max(ttthutuchc) as idpt from thutuchc where xa='".str_replace('_',' ',$_POST['xa'])."' and huyen='".$madv[0]."'";
	$qrpt = mysqli_query($con,$sql);$soidpt=0;
	while($rpt=@mysqli_fetch_array($qrpt))
	{
		$soidpt=$rpt['idpt'];
	}	
	$key=explode('>',$_POST['sogiayto']);
	$chars=str_split($_POST["sogiayto"]);
	//echo "hgjgj khk ".$_POST['sogiayto'];
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
			if ($kytu[0] != "")	
			{
				$sqlup = "Insert into giaytothutuc Set ttthutuchc=".$soidpt.", tengiay='".$kytu[0]."', soluong=".kieudouble($kytu[1]);				
				$kq=mysqli_query($con,$sqlup);
			}
		}
	}
}
?>
<form name = "thoainhap" role='form' method='POST' onsubmit="return kt()" class='form-horizontal form-groups-bordered'>
	<input name="xoa" type="text" style="display:none" class="form-control" id="xoa">	
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Thông tin đối tượng xin hưởng trợ cấp:<input type="submit" name="capnhat" class="btn btn-info" value = "Cập nhật" style = "float:right; background-color:rgb(83, 181, 166)" id = "hhhh"></h4>
		</div>
			<div class="modal-body">
	<label for="field-3" class="col-sm-2 control-label">Họ tên thân nhân<span style="padding-left:0px; color:red;">*</span>:</label>
	<div class="col-sm-4">
		<input name="nguoihuongtn" type="text" class="form-control" id="nguoihuongtn">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Ngày sinh<span style="padding-left:0px; color:red;">*</span>:</label>
	<div class="col-sm-4">
		<input name="ngaysinhtn" type="text" class="form-control" data-mask="date" id="ngaysinhtn">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Giới tính<span style="padding-left:0px; color:red;">*</span>:</label>
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
	<div class="col-sm-10">		
		<input name="truquantn" type="text" class="form-control" id="truquantn">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Quan hệ<span style="padding-left:0px; color:red;">*</span>:</label>
	<div class="col-sm-4">		
		<input name="quanhe" type="text" class="form-control" id="quanhe">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Ngày lập hồ sơ<span style="padding-left:0px; color:red;">*</span>:</label>
	<div class="col-sm-4">
		<input name="ngaylaphs" type="text" class="form-control" data-mask="date" id="ngaylaphs">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Phân loại hồ sơ<span style="padding-left:0px; color:red;">*</span>:</label>
	<div class="col-sm-10">
		<select name="phanloaihoso" id="phanloaihoso" class="form-control">
			<option value="Hồ sơ xin hưởng trợ cấp">Hồ sơ xin hưởng trợ cấp</option>
			<option value="Hồ sơ báo giảm">Hồ sơ báo giảm</option>
		</select>		
	</div>
	<label for="field-3" class="col-sm-2 control-label">Nội dung hồ sơ:</label>
	<div class="col-sm-10">
		<input name="noidung" type="text" class="form-control" id="noidung">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Đối tượng:</label>
	<div class="col-sm-10">
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
	<label for="field-3" class="col-sm-2 control-label">Họ và tên<span style="padding-left:0px; color:red;">*</span>:</label>
	<div class="col-sm-4">
		<input name="hoten" type="text" class="form-control" id="hoten" value="<?php echo $hs[0]; ?>">
		<input name="phanloai" type="text" style="display:none" class="form-control" id="phanloai" value "Người có công">
		<input name="sogiayto" type="text" style="display:none" class="form-control" id="sogiayto">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Ngày sinh:</label>
	<div class="col-sm-4">
		<input name="ngaysinh" type="text" class="form-control" data-mask="date" id="ngaysinh" value="<?php echo $hs[0]; ?>">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Giới tính:</label>
	<div class="col-sm-4">
		<select name="gioitinh" id="gioitinh" class="form-control">
			<option value="Nam">Nam</option>
			<option value="Nữ">Nữ</option>
		</select>		
	</div>	
	<label for="field-3" class="col-sm-2 control-label">Nguyên quán:</label>
	<div class="col-sm-4">
		<input name="nguyenquan" type="text" class="form-control" id="nguyenquan">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Trú quán:</label>
	<div class="col-sm-10">		
		<input name="truquan" type="text" class="form-control" id="truquan" value="<?php echo $hs[0]; ?>">
		<input name="idhs" type="text" class="form-control" style="display:none" id="idhs" value="<?php echo $hs[3]; ?>">
	</div>	
	<label for="field-3" class="col-sm-2 control-label">Tên đơn vị:</label>
	<div class="col-sm-10">								
		<select name="xa" id="xa" class="form-control">
			<?php
			$sqltcml = "Select tenxa From xa inner join huyen on xa.tthuyen=huyen.tthuyen where tenhuyen='".$madv[0]."'";
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
				</tr>				
			</thead>
			<tbody id="rowlist" class="rowlist">	
				<tr>
					<td style='text-align: center;'>1</td>
					<td contenteditable='true' style='text-align: left;'></td>
					<td contenteditable='true' style='text-align: right;'></td>
				</tr>
				<tr>
					<td style='text-align: center;'>2</td>
					<td contenteditable='true' style='text-align: left;'></td>
					<td contenteditable='true' style='text-align: right;'></td>
				</tr>
				<tr>
					<td style='text-align: center;'>3</td>
					<td contenteditable='true' style='text-align: left;'></td>
					<td contenteditable='true' style='text-align: right;'></td>
				</tr>
				<tr>
					<td style='text-align: center;'>4</td>
					<td contenteditable='true' style='text-align: left;'></td>
					<td contenteditable='true' style='text-align: right;'></td>
				</tr>
				<tr>
					<td style='text-align: center;'>5</td>
					<td contenteditable='true' style='text-align: left;'></td>
					<td contenteditable='true' style='text-align: right;'></td>
				</tr>
				<tr>
					<td style='text-align: center;'>6</td>
					<td contenteditable='true' style='text-align: left;'></td>
					<td contenteditable='true' style='text-align: right;'></td>
				</tr>
				<tr>
					<td style='text-align: center;'>7</td>
					<td contenteditable='true' style='text-align: left;'></td>
					<td contenteditable='true' style='text-align: right;'></td>
				</tr>
			</tbody>
		</table>
	</div>	
</form>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>
<script language="javascript" type="text/javascript">
document.forms['thoainhap'].name.focus();
function set_focus()
{
   document.forms['thoainhap'].name.focus();
}
function kt()
{
   var frm = window.document.thoainhap;         
   if(frm.nguoihuongtn.value=='' || frm.ngaysinhtn.value=='' || frm.gioitinhtn.value=='' || frm.quanhe.value=='' || frm.ngaylaphs.value=='' || frm.phanloaihoso.value=='' || frm.hoten.value=='')
   {
      alert('Xin vui lòng nhập đầy đủ các thông tin !');            
      //document.forms['thoainhap'].nttu.focus();
      return false;
   }   
   else
   {	
	alert("Cập nhật thành công!");
      return true;    
   }
}
</script>