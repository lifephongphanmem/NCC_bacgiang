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
	$sqlpt = "Insert into thutuchc Set phanloai='Th??n nh??n ng?????i c?? c??ng', hoten='".$_POST['hoten']."', ngaysinh='".$_POST['ngaysinh']."', ";
	$sqlpt = $sqlpt."gioitinh='".$_POST['gioitinh']."', nguyenquan='".$_POST['nguyenquan']."', truquan='".$_POST['truquan']."', noidung='".$_POST['noidung']."', ";
	$sqlpt = $sqlpt."loaidoituong='".$_POST['loaidoituong']."', trangthai='DK', xa='".$madv[0]."', huyen='".$madv[1]."', ngaylaphs='".doingay1($_POST['ngaylaphs'])."', ";
	$sqlpt = $sqlpt."nguoihuongtn='".$_POST['nguoihuongtn']."', ngaysinhtn='".$_POST['ngaysinhtn']."', gioitinhtn='".$_POST['gioitinhtn']."', ";
	$sqlpt = $sqlpt."quanhe='".$_POST['quanhe']."', nguyenquantn='".$_POST['nguyenquantn']."', truquantn='".$_POST['truquantn']."', phanloaihoso='".$_POST['phanloaihoso']."', tths=".$_POST['idhs'];
	$kqpt=mysqli_query($con,$sqlpt);
	$sql = "Select max(ttthutuchc) as idpt from thutuchc where xa='".$madv[0]."' and huyen='".$madv[1]."'";
	$qrpt = mysqli_query($con,$sql);$soidpt=0;
	while($rpt=@mysqli_fetch_array($qrpt))
	{
		$soidpt=$rpt['idpt'];
	}	
	$key=explode('>',$_POST['sogiayto']);
	$chars=str_split($_POST["sogiayto"]);
	echo "hgjgj khk ".$_POST['sogiayto'];
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
			<h4 class="modal-title">Th??ng tin ?????i t?????ng xin h?????ng tr??? c???p:<input type="submit" name="capnhat" class="btn btn-info" value = "C???p nh???t" style = "float:right; background-color:rgb(83, 181, 166)" id = "hhhh"></h4>
		</div>
			<div class="modal-body">
	
	<label for="field-3" class="col-sm-2 control-label">H??? t??n th??n nh??n<span style="padding-left:0px; color:red;">*</span>:</label>
	<div class="col-sm-4">
		<input name="nguoihuongtn" type="text" class="form-control" id="nguoihuongtn">
		<input name="phanloai" type="text" style="display:none" class="form-control" id="phanloai" value "Ng?????i c?? c??ng">
		<input name="sogiayto" type="text" style="display:none" class="form-control" id="sogiayto">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Ng??y sinh<span style="padding-left:0px; color:red;">*</span>:</label>
	<div class="col-sm-4">
		<input name="ngaysinhtn" type="text" class="form-control" data-mask="date" id="ngaysinhtn">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Gi???i t??nh<span style="padding-left:0px; color:red;">*</span>:</label>
	<div class="col-sm-4">
		<select name="gioitinhtn" id="gioitinhtn" class="form-control">
			<option value="Nam">Nam</option>
			<option value="N???">N???</option>
		</select>		
	</div>	
	<label for="field-3" class="col-sm-2 control-label">Nguy??n qu??n:</label>
	<div class="col-sm-4">
		<input name="nguyenquantn" type="text" class="form-control" id="nguyenquantn">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Tr?? qu??n:</label>
	<div class="col-sm-10">		
		<input name="truquantn" type="text" class="form-control" id="truquantn">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Quan h???<span style="padding-left:0px; color:red;">*</span>:</label>
	<div class="col-sm-4">		
		<input name="quanhe" type="text" class="form-control" id="quanhe">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Ng??y l???p h??? s??<span style="padding-left:0px; color:red;">*</span>:</label>
	<div class="col-sm-4">
		<input name="ngaylaphs" type="text" class="form-control" data-mask="date" id="ngaylaphs">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Ph??n lo???i h??? s??<span style="padding-left:0px; color:red;">*</span>:</label>
	<div class="col-sm-10">
		<select name="phanloaihoso" id="phanloaihoso" class="form-control">
			<option value="H??? s?? xin h?????ng tr??? c???p">H??? s?? xin h?????ng tr??? c???p</option>
			<option value="H??? s?? b??o gi???m">H??? s?? b??o gi???m</option>
		</select>		
	</div>
	<label for="field-3" class="col-sm-2 control-label">N???i dung h??? s??:</label>
	<div class="col-sm-10">
		<input name="noidung" type="text" class="form-control" id="noidung">
	</div>
	<label for="field-3" class="col-sm-2 control-label">?????i t?????ng:</label>
	<div class="col-sm-10">
		<select name="loaidoituong" id="loaidoituong" class="form-control">
			<option value="ah">Anh h??ng l???c l?????ng VTND, anh h??ng lao ?????ng TKKC</option>
			<option value="bb">B???nh binh</option>
			<option value="bm">B?? m??? Vi???t Nam anh h??ng</option>
			<option value="ls">Li???t s???</option>
			<option value="tb">Th????ng binh</option>
			<option value="hh">Ng?????i h??kc b??? nhi???m ch???t ?????c h??a h???c</option>
			<option value="kc">Ng?????i h??kc gi???i ph??ng d??n t???c, l??m ngh??a v??? qu???c t??? ???????c t???ng hu??n, huy ch????ng</option>
			<option value="cc">Ng?????i c?? c??ng gi??p ????? c??ch m???ng</option>
			<option value="td">Ng?????i h??kc b??? ?????ch b???t t??, ????y</option>
			<option value="lt">Ng?????i h??cm tr?????c ng??y 01/01/1945</option>
			<option value="tkn">Ng?????i h??cm t??? ng??y 01/01/1945 ?????n kh???i ngh??a th??ng 8 n??m 1945</option>			
			<option value=""></option>
		</select>		
	</div>
	<label for="field-3" class="col-sm-2 control-label">H??? t??n ng?????i c?? c??ng<span style="padding-left:0px; color:red;">*</span>:</label>
	<div class="col-sm-4">
		<input name="hoten" type="text" class="form-control" id="hoten" value="<?php echo $hs[0]; ?>">		
	</div>
	<label for="field-3" class="col-sm-2 control-label">Ng??y sinh:</label>
	<div class="col-sm-4">
		<input name="ngaysinh" type="text" class="form-control" data-mask="date" id="ngaysinh" value="<?php echo $hs[1]; ?>">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Gi???i t??nh:</label>
	<div class="col-sm-4">
		<select name="gioitinh" id="gioitinh" class="form-control">
			<option value="Nam">Nam</option>
			<option value="N???">N???</option>
		</select>		
	</div>	
	<label for="field-3" class="col-sm-2 control-label">Nguy??n qu??n:</label>
	<div class="col-sm-4">
		<input name="nguyenquan" type="text" class="form-control" id="nguyenquan">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Tr?? qu??n:</label>
	<div class="col-sm-10">		
		<input name="truquan" type="text" class="form-control" id="truquan" value="<?php echo $hs[2]; ?>">
		<input name="idhs" type="text" class="form-control" style="display:none" id="idhs" value="<?php echo $hs[3]; ?>">
	</div>
	<label>Chi ti???t gi???y t??? k??m theo:</label>
	<div id = "sTTKK" class="table-responsive">
		<table class="table table-hover table-striped table-bordered table-advanced tablesorter display" id="table-2">
			<thead>
				<tr>					
					<th style="background-color:rgb(54, 169, 224)" width="5%"><strong style='color:rgb(255, 255, 225)'>STT</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="50%"><strong style='color:rgb(255, 255, 225)'>T??n gi???y t???</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>S??? l?????ng</strong></th>					
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
      alert('Xin vui l??ng nh???p ?????y ????? c??c th??ng tin !');            
      //document.forms['thoainhap'].nttu.focus();
      return false;
   }   
   else
   {	
	alert("C???p nh???t th??nh c??ng!");
      return true;    
   }
}
</script>