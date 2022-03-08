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
<script type="text/javascript">
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
            sohoso1 += $(this).find('td:nth-child(2)').text() + "<" + $(this).find('td:nth-child(3)').text() + "<" + $(this).find('td:nth-child(4)').text() + "<" + $(this).find('td:nth-child(5)').text() + "<" + $(this).find('td:nth-child(6)').text() + '>';
        });
        return sohoso1;
    }
	$(document).ready(function(){
    $(":input").inputmask();
});
function xoa(bien)
{
	var sohoso2 = '';
	$.each($('table tbody tr'), function(){
		if ($(this).find('td:nth-child(6)').text() != "pt")
		sohoso2 += $(this).find('td:nth-child(2)').text() + "<" + $(this).find('td:nth-child(3)').text() + "<" + $(this).find('td:nth-child(4)').text() + "<" + $(this).find('td:nth-child(5)').text() + "<" + $(this).find('td:nth-child(6)').text() + '>';
	});	
	var giatri = "";	
	giatri = sohoso2.replace(bien,"");	
	giatri = giatri.replace(/ /g,"_");
	//alert(bien+"---"+sohoso2);
	//alert(sohoso2);
	$('#sTTKK').load('ajax_xoa.php?id_a='+giatri);
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
		var giatri = "";			
		giatri = kiemtraphuongtien();
		giatri = giatri.replace(/ /g,"_");
		$('#sTTKK').load('ajax_themhd.php?id_a='+giatri);
	}	
</script>
<?php
if(isset($_POST["capnhat"]))
{
	$sqlpt = "Insert into phuongtien Set hoten='".$_POST['hoten']."', ngaysinh='".$_POST['ngaysinh']."', gioitinh='".$_POST['gioitinh']."', ";
	$sqlpt = $sqlpt."truquan='".$_POST['truquan']."', mahsbo='".$_POST['mahsbo']."', mahstinh='".$_POST['mahstinh']."', loaidt='".$_POST['loaidt']."', ";
	$sqlpt = $sqlpt."tinhtrangsk='".$_POST['tinhtrangsk']."', lydo='".$_POST['lydo']."', xa='".$madv[0]."', huyen='".$madv[1]."', chuyen='DK', sosoql='".$_POST['sosoql']."', noiql='".$_POST['noiql']."'";
	$kqpt=mysqli_query($con,$sqlpt);
	$sql = "Select max(idphuongtien) as idpt from phuongtien where xa='".$madv[0]."' and huyen='".$madv[1]."'";
	$qrpt = mysqli_query($con,$sql);$soidpt=0;
	while($rpt=@mysqli_fetch_array($qrpt))
	{
		$soidpt=$rpt['idpt'];
	}	
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
			$sqlup = "Insert into ctphuongtien Set idphuongtien=".$soidpt.", tenphuongtien='".$kytu[0]."', nienhan='".$kytu[1]."', sotien=".str_replace(',','',str_replace('.','',$kytu[2])).", ";
			$sqlup=$sqlup."namcaplk='".$kytu[3]."', phanloai='".$kytu[4]."'";
			$kq=mysqli_query($con,$sqlup);
		}
	}
}
?>
<form name = "thoainhap" role='form' onsubmit="return kt()" method='POST' class='form-horizontal form-groups-bordered'>
	<input name="xoa" type="text" style="display:none" class="form-control" id="xoa">	
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Thông tin về đối tượng:<input type="submit" name="capnhat" class="btn btn-info" value = "Cập nhật" style = "float:right; background-color:rgb(83, 181, 166)" id = "hhhh"></h4>
		</div>
			<div class="modal-body">
	
	<label for="field-3" class="col-sm-2 control-label">Mã hồ sơ bộ<span style="padding-left:0px; color:red;">*</span>:</label>
	<div class="col-sm-4">
		<input name="mahsbo" type="text" class="form-control" id="mahsbo">
		<input name="sobg" type="text" style="display:none" class="form-control" id="sobg">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Mã hồ sơ tỉnh:</label>
	<div class="col-sm-4">
		<input name="mahstinh" type="text" class="form-control" id="mahstinh">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Họ tên đối tượng<span style="padding-left:0px; color:red;">*</span>:</label>
	<div class="col-sm-4">
		<input name="hoten" type="text" class="form-control" id="hoten">
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
	<label for="field-3" class="col-sm-2 control-label">Loại đối tượng<span style="padding-left:0px; color:red;">*</span>:</label>
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
	<label for="field-3" class="col-sm-2 control-label">Số sổ trang cấp:</label>
	<div class="col-sm-4">
		<input name="sosoql" type="text" class="form-control" id="sosoql">
	</div>
	<label for="field-3" class="col-sm-2 control-label">Nơi quản lý:</label>
	<div class="col-sm-4">
		<input name="noiql" type="text" class="form-control" id="noiql">
	</div>
	<h3><strong>Chi tiết phương tiện, công cụ:</strong><a style = "float:right; background-color:rgb(83, 181, 166)" href="#"  class="btn btn-sm btn-success btn-quatrinhdd" data-target="#modal-quatrinhdd" data-toggle="modal">
                            <i class="fa fa-plus"></i> &nbsp;Chọn công cụ</a></h3>
	<div id = "sTTKK" class="table-responsive">
		<table class="table table-hover table-striped table-bordered table-advanced tablesorter display" id="table-2">
			<thead>
				<tr>					
					<th style="background-color:rgb(54, 169, 224)" width="5%"><strong style='color:rgb(255, 255, 225)'>STT</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="50%"><strong style='color:rgb(255, 255, 225)'>Tên phương tiện, dụng cụ</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Niên hạn</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Số tiền</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="12%"><strong style='color:rgb(255, 255, 225)'>Năm liền kế</strong></th>	
					<th style="background-color:rgb(54, 169, 224); display:none" width="12%"><strong>phanloai</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="9%"><strong style='color:rgb(255, 255, 225)'>Thao tác</strong></th>					
				</tr>				
			</thead>
			<tbody id="rowlist" class="rowlist">				
			</tbody>
		</table>
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
										<th style="background-color:rgb(16, 78, 211); display:none" width="8%"><strong>pt</strong></th>
									</tr>									
								</thead>
								<tbody id="rowlist" class="rowlist">
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
	$sqldmpt = "Select * From dmphuongtien";
	$qrdmpt = mysqli_query($con,$sqldmpt);$gop="";
	while($rdmpt=@mysqli_fetch_array($qrdmpt))
	{
		$gop=$rdmpt['phanloai']."<".$rdmpt['tenphuongtien']."<".$rdmpt['nienhan']."<".$rdmpt['sotien'];
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
   if(frm.mahsbo.value=='' || frm.hoten.value=='' || frm.loaidt.value=='')
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