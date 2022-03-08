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
		window.location.href="dkquatet27xa.php?id="+this.value+">0";
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
if (isset($_POST["taobhyt"]))
{	
	//lão thành cách mạng
	if (isset($_POST['lt']))
	{
		$sql = "Insert into quatet27(hoten,diachi,loaidoituong,noidung,mucqua,namqua,chuyen,xa,huyen)";
		$sql = $sql." Select hoten,truquan,'lt' as ldt,'".$_POST['noidungtao']."' as noidung, ".str_replace(',','',str_replace('.','',$_POST['mucquatao']))." as muc, '".$_POST['namquatao']."' as namtao";
		$sql = $sql.", 'DK' as dk, xa, huyen";
		$sql = $sql." from hosolt Where huyen='".$madv[0]."' and ngaymat=''";
			
		$kq=mysqli_query($con,$sql);		
	}	
	//tiền khởi nghĩa
	if (isset($_POST['tkn']))
	{
		$sql = "Insert into quatet27(hoten,diachi,loaidoituong,noidung,mucqua,namqua,chuyen,xa,huyen)";
		$sql = $sql." Select hoten,truquan,'tkn' as ldt,'".$_POST['noidungtao']."' as noidung, ".str_replace(',','',str_replace('.','',$_POST['mucquatao']))." as muc, '".$_POST['namquatao']."' as namtao";
		$sql = $sql.", 'DK' as dk, xa, huyen";
		$sql = $sql." from hosotkn Where huyen='".$madv[0]."' and ngaymat=''";			
		
		$kq=mysqli_query($con,$sql);		
	}
	//bà mẹ
	if (isset($_POST['bm']))
	{
		$sql = "Insert into quatet27(hoten,diachi,loaidoituong,noidung,mucqua,namqua,chuyen,xa,huyen)";
		$sql = $sql." Select hoten,truquan,'bm' as ldt,'".$_POST['noidungtao']."' as noidung, ".str_replace(',','',str_replace('.','',$_POST['mucquatao']))." as muc, '".$_POST['namquatao']."' as namtao";
		$sql = $sql.", 'DK' as dk, xa, huyen";
		$sql = $sql." from hosobm Where huyen='".$madv[0]."' and ngaymat=''";	
		
		$kq=mysqli_query($con,$sql);		
	}
	//Anh hùng
	if (isset($_POST['ah']))
	{
		$sql = "Insert into quatet27(hoten,diachi,loaidoituong,noidung,mucqua,namqua,chuyen,xa,huyen)";
		$sql = $sql." Select hoten,truquan,'ah' as ldt,'".$_POST['noidungtao']."' as noidung, ".str_replace(',','',str_replace('.','',$_POST['mucquatao']))." as muc, '".$_POST['namquatao']."' as namtao";
		$sql = $sql.", 'DK' as dk, xa, huyen";
		$sql = $sql." from hosoah Where huyen='".$madv[0]."' and ngaymat=''";	
		
		$kq=mysqli_query($con,$sql);		
	}	
	//Thân nhân liệt sỹ hàng tháng
	if (isset($_POST['tnls']))
	{
		$sql = "Insert into quatet27(hoten,diachi,loaidoituong,noidung,mucqua,namqua,chuyen,xa,huyen,hotenlietsy)";
		$sql = $sql." Select hoten,truquan,'tnls' as ldt,'".$_POST['noidungtao']."' as noidung, ".str_replace(',','',str_replace('.','',$_POST['mucquatao']))." as muc, '".$_POST['namquatao']."' as namtao";
		$sql = $sql.", 'DK' as dk, xa, huyen, tenncc";
		$sql = $sql." from thannhanls Where huyen='".$madv[0]."' and ngaythoihuong='' and loaitrocap='Hàng tháng'";			
		
		$kq=mysqli_query($con,$sql);		
	}	
	//Thân nhân thờ cúng
	if (isset($_POST['tnlstc']))
	{
		$sql = "Insert into quatet27(hoten,diachi,loaidoituong,noidung,mucqua,namqua,chuyen,xa,huyen,hotenlietsy)";
		$sql = $sql." Select hoten,truquan,'tnlstc' as ldt,'".$_POST['noidungtao']."' as noidung, ".str_replace(',','',str_replace('.','',$_POST['mucquatao']))." as muc, '".$_POST['namquatao']."' as namtao";
		$sql = $sql.", 'DK' as dk, xa, huyen, tenncc";
		$sql = $sql." from thannhanls Where huyen='".$madv[0]."' and ngaythoihuong='' and loaitrocap='Thờ cúng'";			
		$kq=mysqli_query($con,$sql);		
	}		
	//Người nhiễm chất độc hóa học
	if (isset($_POST['tbdb']))
	{
		$sql = "Insert into quatet27(hoten,diachi,loaidoituong,noidung,mucqua,namqua,chuyen,xa,huyen)";
		$sql = $sql." Select hoten,truquan,'tbdb' as ldt,'".$_POST['noidungtao']."' as noidung, ".str_replace(',','',str_replace('.','',$_POST['mucquatao']))." as muc, '".$_POST['namquatao']."' as namtao";
		$sql = $sql.", 'DK' as dk, xa, huyen";
		$sql = $sql." from hosotb Where huyen='".$madv[0]."' and ngaymat='' and ketluansgknld > 80";			
		$kq=mysqli_query($con,$sql);		
	}	
	//Bị bắt tù đày
	if (isset($_POST['tb']))
	{
		$sql = "Insert into quatet27(hoten,diachi,loaidoituong,noidung,mucqua,namqua,chuyen,xa,huyen)";
		$sql = $sql." Select hoten,truquan,'tb' as ldt,'".$_POST['noidungtao']."' as noidung, ".str_replace(',','',str_replace('.','',$_POST['mucquatao']))." as muc, '".$_POST['namquatao']."' as namtao";
		$sql = $sql.", 'DK' as dk, xa, huyen";
		$sql = $sql." from hosotb Where huyen='".$madv[0]."' and ngaymat='' and ketluansgknld < 81";			
		$kq=mysqli_query($con,$sql);		
	}
	//Người có công hưởng trợ cấp nuôi dưỡng
	if (isset($_POST['ccnd']))
	{
		$sql = "Insert into quatet27(hoten,diachi,loaidoituong,noidung,mucqua,namqua,chuyen,xa,huyen)";
		$sql = $sql." Select hoten,truquan,'ccnd' as ldt,'".$_POST['noidungtao']."' as noidung, ".str_replace(',','',str_replace('.','',$_POST['mucquatao']))." as muc, '".$_POST['namquatao']."' as namtao";
		$sql = $sql.", 'DK' as dk, xa, huyen";
		$sql = $sql." from hosocc Where huyen='".$madv[0]."' and ngaymat='' and mtcdb not null";			
		$kq=mysqli_query($con,$sql);		
	}
	//Người có công cách mạng trợ cấp hàng tháng
	if (isset($_POST['cc']))
	{
		$sql = "Insert into quatet27(hoten,diachi,loaidoituong,noidung,mucqua,namqua,chuyen,xa,huyen)";
		$sql = $sql." Select hoten,truquan,'cc' as ldt,'".$_POST['noidungtao']."' as noidung, ".str_replace(',','',str_replace('.','',$_POST['mucquatao']))." as muc, '".$_POST['namquatao']."' as namtao";
		$sql = $sql.", 'DK' as dk, xa, huyen";
		$sql = $sql." from hosocc Where huyen='".$madv[0]."' and ngaymat='' and mtcht not null";			
		$kq=mysqli_query($con,$sql);		
	}	
	//Người hóa học trợ cấp hàng tháng
	if (isset($_POST['hhdb']))
	{
		$sql = "Insert into quatet27(hoten,diachi,loaidoituong,noidung,mucqua,namqua,chuyen,xa,huyen)";
		$sql = $sql." Select hoten,truquan,'hhdb' as ldt,'".$_POST['noidungtao']."' as noidung, ".str_replace(',','',str_replace('.','',$_POST['mucquatao']))." as muc, '".$_POST['namquatao']."' as namtao";
		$sql = $sql.", 'DK' as dk, xa, huyen";
		$sql = $sql." from hosohh Where huyen='".$madv[0]."' and ngaymat='' and tlsgknld > 80";			
		$kq=mysqli_query($con,$sql);		
	}
	//Người hóa học trợ cấp hàng tháng
	if (isset($_POST['hh']))
	{
		$sql = "Insert into quatet27(hoten,diachi,loaidoituong,noidung,mucqua,namqua,chuyen,xa,huyen)";
		$sql = $sql." Select hoten,truquan,'hh' as ldt,'".$_POST['noidungtao']."' as noidung, ".str_replace(',','',str_replace('.','',$_POST['mucquatao']))." as muc, '".$_POST['namquatao']."' as namtao";
		$sql = $sql.", 'DK' as dk, xa, huyen";
		$sql = $sql." from hosohh Where huyen='".$madv[0]."' and ngaymat='' and tlsgknld < 81";			
		$kq=mysqli_query($con,$sql);		
	}
	//Người hóa học trợ cấp hàng tháng
	if (isset($_POST['td']))
	{
		$sql = "Insert into quatet27(hoten,diachi,loaidoituong,noidung,mucqua,namqua,chuyen,xa,huyen)";
		$sql = $sql." Select hoten,truquan,'td' as ldt,'".$_POST['noidungtao']."' as noidung, ".str_replace(',','',str_replace('.','',$_POST['mucquatao']))." as muc, '".$_POST['namquatao']."' as namtao";
		$sql = $sql.", 'DK' as dk, xa, huyen";
		$sql = $sql." from hosotd Where huyen='".$madv[0]."' and ngaymat=''";			
		$kq=mysqli_query($con,$sql);		
	}
}
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
	$sql="Update quatet27 Set chuyen='Chuyển' Where idquatet27=".$key[$i];
	$kq=mysqli_query($con,$sql);
	}
}		
?>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Chi trả quà tết, 27/7</h4>
		</div>
			<div class="modal-body">
<form role='form' method='POST' class='form-horizontal form-groups-bordered'>
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModalctim();" class='btn btn-success'>
			<i class='entypo-print'></i>Tim kiếm
		</a>		
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModalcin();" class='btn btn-success'>
			<i class='entypo-print'></i>In danh sách
		</a>
		<input name="sobg" type="text" class="form-control" style = "Display:none;" id="sobg">
		<label class='col-sm-2'>Trang số:</label>
<?php
$ahs = explode('>',$_GET['id']);
$j = $ahs[0];
$ls =  array(array("1","2","3","4","5","6","7","8","9","10","11","12"));		
$cs=0;
if (strlen($_GET['id'])<8)
{
	$sql="select * from quatet27 where chuyen='Duyệt' and namqua Like '%".$ahs[1]."%' and xa='".$madv[0]."'";
}
else
{
	$sql="select * from quatet27 where chuyen='Duyệt' and namqua Like '".$ahs[3]."%' and loaidoituong Like '".$ahs[1]."%' and mucqua=".str_replace(',','',str_replace('.','',$ahs[2]))." and xa='".$madv[0]."'";
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
		$ls[$cs][0] = $row['idquatet27'];
		$ls[$cs][1] = $row['mucqua'];
		$ls[$cs][2] = $row['loaidoituong'];	
		$ls[$cs][3] = $row['namqua'];
		$ls[$cs][4] = $row['hoten'];
		$ls[$cs][5] = $row['diachi'];
		$ls[$cs][6] = $row['hotenlietsy'];
		$ls[$cs][7] = $row['chuyen'];
		$ls[$cs][8] = $row['ngaytra'];
		$ls[$cs][9] = $row['noidung'];
		$ls[$cs][10] = $row['xa'];
		$ls[$cs][11] = $row['huyen'];
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
					<th style="background-color:rgb(54, 169, 224)" width="5%"><strong style='color:rgb(255, 255, 225)'>Chọn</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="15%"><strong style='color:rgb(255, 255, 225)'>Họ và tên</strong></th>					
					<th style="background-color:rgb(54, 169, 224)" width="23%"><strong style='color:rgb(255, 255, 225)'>Địa chỉ</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="25%"><strong style='color:rgb(255, 255, 225)'>Loại đối tượng</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="10%"><strong style='color:rgb(255, 255, 225)'>Nội dung quà</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Mức quà</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="7%"><strong style='color:rgb(255, 255, 225)'>Năm quà</strong></th>					
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>idquatet27</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>hotenlietsy</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>chuyen</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ngaytra</strong></th>					
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>xa</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>huyen</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>Loại đối tượng</strong></th>					
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
			for($i=($j - 1)*15;$i<15*$j;$i++)
			{
				//$a = $i + 1;
				if ($i < $cs)
				{					
				echo "<tr>";					
					echo "<td><input type = 'Checkbox' name = 'KT' id = '".$ls[$i][0]."' checked = 'checked'></td>";
					echo "<td style='text-align: left;'>".$ls[$i][4]."</td>";
					echo "<td style='text-align: left;'>".catchuoi($ls[$i][5])."</td>";
				if ($ls[$i][2]=="lt")		
					echo "<td style='text-align: left;'>".catchuoi('Người hoạt động cách mạng trước 01/1/1945')."</td>";
				else if ($ls[$i][2]=="tkn")		
					echo "<td style='text-align: left;'>".catchuoi('Người hoạt động cách mạng từ ngày 01/01/1945 đến khởi nghĩa tháng 8/1945')."</td>";
				else if ($ls[$i][2]=="bm")		
					echo "<td style='text-align: left;'>Bà mẹ Việt Nam anh hùng</td>";
				else if ($ls[$i][2]=="ah")		
					echo "<td style='text-align: left;'>".catchuoi('Anh hùng lực lượng vũ trang, Anh hùng Lao động')."</td>";
				else if ($ls[$i][2]=="tnls")		
					echo "<td style='text-align: left;'>".catchuoi('Thân nhân liệt sĩ hưởng trợ cấp hàng tháng')."</td>";
				else if ($ls[$i][2]=="tnlstc")		
					echo "<td style='text-align: left;'>Người thờ cúng</td>";
				else if ($ls[$i][2]=="tbdb")		
					echo "<td style='text-align: left;'>".catchuoi('Thương binh, thương binh loại B 81% trở lên')."</td>";
				else if ($ls[$i][2]=="tb")		
					echo "<td style='text-align: left;'>".catchuoi('Thương binh, thương binh loại B 81% trở xuống')."</td>";
				else if ($ls[$i][2]=="ccnd")		
					echo "<td style='text-align: left;'>".catchuoi('Người có công giúp đỡ cách mạng hưởng trợ cấp nuôi dưỡng hàng tháng')."</td>";
				else if ($ls[$i][2]=="cc")		
					echo "<td style='text-align: left;'>".catchuoi('Người có công giúp đỡ cách mạng hưởng trợ cấp hàng tháng')."</td>";
				else if ($ls[$i][2]=="hhdb")		
					echo "<td style='text-align: left;'>".catchuoi('Người hđkc bị nhiễm chất độc hóa học 81% trở lên')."</td>";
				else if ($ls[$i][2]=="hh")		
					echo "<td style='text-align: left;'>".catchuoi('Người hđkc bị nhiễm chất độc hóa học 81% trở xuống')."</td>";
				else if ($ls[$i][2]=="td")		
					echo "<td style='text-align: left;'>Người bị địch bắt tù đày</td>";	
					echo "<td style='text-align: left;'>".catchuoi1($ls[$i][9])."</td>";
					echo "<td style='text-align: left;'>".dinhdangso($ls[$i][1])."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][3]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][0]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][6]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][7]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][8]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][10]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][11]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][2]."</td>";					
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
							<label for="field-3" class="col-sm-3 control-label">Địa chỉ:</label>
							<div class="col-sm-9">
								<input name="diachics" type="text" class="form-control" id="diachics">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Họ tên liệt sỹ:</label>
							<div class="col-sm-9">
								<input name="hotenlietsycs" type="text" class="form-control" id="hotenlietsycs">
							</div>	
							<label for="field-3" class="col-sm-3 control-label">Loại đối tượng:</label>
							<div class="col-sm-9">								
								<select name="loaidoituongcs" id="loaidoituongcs" class="form-control">
									<option value="lt">Người hoạt động cách mạng trước 01/1/1945</option>
									<option value="tkn">Người hoạt động cách mạng từ ngày 01/01/1945 đến khởi nghĩa tháng 8/1945</option>
									<option value="bm">Bà mẹ Việt Nam anh hùng</option>
									<option value="ah">Anh hùng lực lượng vũ trang, Anh hùng Lao động</option>
									<option value="tnls">Thân nhân liệt sĩ đang hưởng trợ cấp hàng tháng</option>
									<option value="tnlstc">Người thờ cúng</option>
									<option value="tbdb">Thương binh, thương binh loại B 81% trở lên</option>
									<option value="tb">Thương binh, thương binh loại B 81% trở xuống</option>
									<option value="ccnd">Người có công giúp đỡ cách mạng đang hưởng trợ cấp nuôi dưỡng hàng tháng</option>
									<option value="cc">Người có công giúp đỡ cách mạng đang hưởng trợ cấp hàng tháng</option>
									<option value="hhdb">Người hđkc bị nhiễm chất độc hóa học 81% trở lên</option>
									<option value="hh">Người hđkc bị nhiễm chất độc hóa học 81% trở xuống</option>
									<option value="td">Người bị địch bắt tù đày</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-3 control-label">Nội dung quà:</label>
							<div class="col-sm-9">
								<input name="noidungcs" type="text" class="form-control" id="noidungcs">
							</div>	
							<label for="field-3" class="col-sm-3 control-label">Mức quà:</label>
							<div class="col-sm-9">
								<input name="mucquacs" type="text" class="form-control" data-mask="fdecimal" id="mucquacs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Năm:</label>
							<div class="col-sm-9">								
								<input name="namquacs" type="text" class="form-control" id="namquacs">
							</div>																				
							<div class="col-sm-10">
								<input name="idquatet27cs" type="text" class="form-control" style="display:none" id="idquatet27cs">
							</div>
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>														
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
							<label for="field-3" class="col-sm-3 control-label">Họ tên đối tượng:</label>
							<div class="col-sm-9">
								<input name="hoten" type="text" class="form-control" id="hoten">
							</div>	
							<label for="field-3" class="col-sm-3 control-label">Địa chỉ:</label>
							<div class="col-sm-9">
								<input name="diachi" type="text" class="form-control" id="diachi">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Họ tên liệt sỹ:</label>
							<div class="col-sm-9">
								<input name="hotenlietsy" type="text" class="form-control" id="hotenlietsy">
							</div>	
							<label for="field-3" class="col-sm-3 control-label">Loại đối tượng:</label>
							<div class="col-sm-9">								
								<select name="loaidoituong" id="loaidoituong" class="form-control">
									<option value="lt">Người hoạt động cách mạng trước 01/1/1945</option>
									<option value="tkn">Người hoạt động cách mạng từ ngày 01/01/1945 đến khởi nghĩa tháng 8/1945</option>
									<option value="bm">Bà mẹ Việt Nam anh hùng</option>
									<option value="ah">Anh hùng lực lượng vũ trang, Anh hùng Lao động</option>
									<option value="tnls">Thân nhân liệt sĩ đang hưởng trợ cấp hàng tháng</option>
									<option value="tnlstc">Người thờ cúng</option>
									<option value="tbdb">Thương binh, thương binh loại B 81% trở lên</option>
									<option value="tb">Thương binh, thương binh loại B 81% trở xuống</option>
									<option value="ccnd">Người có công giúp đỡ cách mạng đang hưởng trợ cấp nuôi dưỡng hàng tháng</option>
									<option value="cc">Người có công giúp đỡ cách mạng đang hưởng trợ cấp hàng tháng</option>
									<option value="hhdb">Người hđkc bị nhiễm chất độc hóa học 81% trở lên</option>
									<option value="hh">Người hđkc bị nhiễm chất độc hóa học 81% trở xuống</option>
									<option value="td">Người bị địch bắt tù đày</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-3 control-label">Nội dung quà:</label>
							<div class="col-sm-9">
								<input name="noidung" type="text" class="form-control" id="noidung">
							</div>	
							<label for="field-3" class="col-sm-3 control-label">Mức quà:</label>
							<div class="col-sm-9">
								<input name="mucqua" type="text" class="form-control" data-mask="fdecimal" id="mucqua">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Năm:</label>
							<div class="col-sm-9">								
								<input name="namqua" type="text" class="form-control" id="namqua">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Tên xã:</label>
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
							<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>														
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
							<label for="field-3" class="col-sm-3 control-label">Loại đối tượng:</label>
							<div class="col-sm-9">								
								<select name="loaidoituongtim" id="loaidoituongtim" class="form-control">
									<option value="lt">Người hoạt động cách mạng trước 01/1/1945</option>
									<option value="tkn">Người hoạt động cách mạng từ ngày 01/01/1945 đến khởi nghĩa tháng 8/1945</option>
									<option value="bm">Bà mẹ Việt Nam anh hùng</option>
									<option value="ah">Anh hùng lực lượng vũ trang, Anh hùng Lao động</option>
									<option value="tnls">Thân nhân liệt sĩ đang hưởng trợ cấp hàng tháng</option>
									<option value="tnlstc">Người thờ cúng</option>
									<option value="tbdb">Thương binh, thương binh loại B 81% trở lên</option>
									<option value="tb">Thương binh, thương binh loại B 81% trở xuống</option>
									<option value="ccnd">Người có công giúp đỡ cách mạng đang hưởng trợ cấp nuôi dưỡng hàng tháng</option>
									<option value="cc">Người có công giúp đỡ cách mạng đang hưởng trợ cấp hàng tháng</option>
									<option value="hhdb">Người hđkc bị nhiễm chất độc hóa học 81% trở lên</option>
									<option value="hh">Người hđkc bị nhiễm chất độc hóa học 81% trở xuống</option>
									<option value="td">Người bị địch bắt tù đày</option>
								</select>
							</div>							
							<label for="field-3" class="col-sm-3 control-label">Mức quà:</label>
							<div class="col-sm-9">
								<input name="mucquatim" type="text" class="form-control" data-mask="fdecimal" id="mucquatim">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Năm:</label>
							<div class="col-sm-9">								
								<input name="namquatim" type="text" class="form-control" id="namquatim">
							</div>							
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
							<input type="submit" name="timkiem" class="btn btn-blue" value = "Tìm kiếm hố sơ">							
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
							<label for="field-3" class="col-sm-3 control-label">Loại đối tượng:</label>
							<div class="col-sm-9">								
								<select name="loaidoituongin" id="loaidoituongin" class="form-control">
									<option value="lt">Người hoạt động cách mạng trước 01/1/1945</option>
									<option value="tkn">Người hoạt động cách mạng từ ngày 01/01/1945 đến khởi nghĩa tháng 8/1945</option>
									<option value="bm">Bà mẹ Việt Nam anh hùng</option>
									<option value="ah">Anh hùng lực lượng vũ trang, Anh hùng Lao động</option>
									<option value="tnls">Thân nhân liệt sĩ đang hưởng trợ cấp hàng tháng</option>
									<option value="tnlstc">Người thờ cúng</option>
									<option value="tbdb">Thương binh, thương binh loại B 81% trở lên</option>
									<option value="tb">Thương binh, thương binh loại B 81% trở xuống</option>
									<option value="ccnd">Người có công giúp đỡ cách mạng đang hưởng trợ cấp nuôi dưỡng hàng tháng</option>
									<option value="cc">Người có công giúp đỡ cách mạng đang hưởng trợ cấp hàng tháng</option>
									<option value="hhdb">Người hđkc bị nhiễm chất độc hóa học 81% trở lên</option>
									<option value="hh">Người hđkc bị nhiễm chất độc hóa học 81% trở xuống</option>
									<option value="td">Người bị địch bắt tù đày</option>
									<option value="" selected = "selected"></option>
								</select>
							</div>														
							<label for="field-3" class="col-sm-3 control-label">Năm:</label>
							<div class="col-sm-9">								
								<input name="namquain" type="text" class="form-control" id="namquain">
							</div>							
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
							<input type="submit" name="inds" class="btn btn-blue" value = "In danh sách">
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
							<label for="field-3" class="col-sm-2 control-label">Năm:</label>
							<div class="col-sm-4">
								<input name="namquatao" type="text" class="form-control" id="namquatao">
							</div>	
							<label for="field-3" class="col-sm-2 control-label">Mức quà:</label>
							<div class="col-sm-4">
								<input name="mucquatao" type="text" class="form-control" data-mask="fdecimal" id="mucquatao">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Nội dung nhận quà:</label>
							<div class="col-sm-10">
								<input name="noidungtao" type="text" class="form-control" id="noidungtao">
							</div>	
							<label for="field-3" class="col-sm-12 control-label" style='text-align: left;'>Loại đối tượng được tạo nhận quà:</label>															
							<div class="col-sm-12">
							<input type="checkbox" name="lt" checked = "checked" value="Yes" />
							Người hoạt động cách mạng trước 01/1/1945							
							</div>							
							<div class="col-sm-12">
							<input type="checkbox" name="tkn" checked = "checked" value="Yes" />
							Người hoạt động cách mạng từ ngày 01/01/1945 đến khởi nghĩa tháng 8/1945							
							</div>							
							<div class="col-sm-12">
							<input type="checkbox" name="bm" checked = "checked" value="Yes" />
							Bà mẹ Việt Nam anh hùng						
							</div>							
							<div class="col-sm-12">
							<input type="checkbox" name="ah" checked = "checked" value="Yes" />
							Anh hùng lực lượng vũ trang, Anh hùng Lao động					
							</div>							
							<div class="col-sm-12">
							<input type="checkbox" name="tnls" checked = "checked" value="Yes" />
							Thân nhân liệt sĩ đang hưởng trợ cấp hàng tháng
							</div>	
							<div class="col-sm-12">
							<input type="checkbox" name="tnls" checked = "checked" value="Yes" />
							Người thờ cúng 				
							</div>	
							<div class="col-sm-12">
							<input type="checkbox" name="tbdb" checked = "checked" value="Yes" />
							Thương binh, thương binh loại B 81% trở lên				
							</div>							
							<div class="col-sm-12">
							<input type="checkbox" name="tb" checked = "checked" value="Yes" />
							Thương binh, thương binh loại B 81% trở xuống				
							</div>
							<div class="col-sm-12">
							<input type="checkbox" name="ccnd" checked = "checked" value="Yes" />
							Người có công giúp đỡ cách mạng đang hưởng trợ cấp nuôi dưỡng hàng tháng						
							</div>
							<div class="col-sm-12">
							<input type="checkbox" name="cc" checked = "checked" value="Yes" />
							Người có công giúp đỡ cách mạng đang hưởng trợ cấp hàng tháng						
							</div>							
							<div class="col-sm-12">
							<input type="checkbox" name="hhdb" checked = "checked" value="Yes" />
							Người hđkc bị nhiễm chất độc hóa học 81% trở lên					
							</div>	
							<div class="col-sm-12">
							<input type="checkbox" name="hh" checked = "checked" value="Yes" />
							Người hđkc bị nhiễm chất độc hóa học 81% trở xuống					
							</div>
							<div class="col-sm-12">
							<input type="checkbox" name="td" checked = "checked" value="Yes" />
							Người bị địch bắt tù đày					
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
							<input type="submit" name="taobhyt" class="btn btn-blue" value = "Tạo danh sách">							
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
							<h4 style = "text-align:center; color:rgb(10, 10, 10)">CHUYỂN DANH SÁCH HƯỞNG QUÀ LÊN CẤP TRÊN</h4>	
							<h4 style = "text-align:center; color:rgb(10, 10, 10)">(Lưu ý)</h4>
							<label for="field-3" class="col-sm-12 control-label" style = "text-align: left;">-   Danh sách chuyển lên sẽ không chỉnh sửa được</label>
							<label for="field-3" class="col-sm-12 control-label" style = "text-align: left;">-   Nếu muốn chỉnh sửa cần yêu cầu cán bộ cấp trên chuyển trả lại</label>
							<label for="field-3" class="col-sm-12 control-label" style = "text-align: left;">-   Nếu thiếu hồ sơ hưởng quà có thể lập thêm để chuyển lên</label>
							<input name="sobg1" type="text" class="form-control" style = "Display:none;" id="sobg1">
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
							<input type="submit" name="chuyen" class="btn btn-blue" value = "Cập nhật" id = "hhhh1">							
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