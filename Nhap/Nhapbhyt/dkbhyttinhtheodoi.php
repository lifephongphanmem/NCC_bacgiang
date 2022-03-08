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
					$("#ngaysinhcs").val($(this).find('td:nth-child(3)').text());											
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
$("#tenhuyen").val($(this).find('td:nth-child(18)').text());
$("#tenxa").val($(this).find('td:nth-child(17)').text());	
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
		window.location.href="dkbhyt.php?id="+this.value+">0";
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

        $.each($("input[name='KT']:checked"), function(){
            sohoso += ($(this).attr('id')) + '>';
        });
        return sohoso;
    }
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
/* if(isset($_POST["capnhatts"]))
	{	
		$sqlup = "Update bhyt16 Set hoten='".$_POST['hotencs']."', ngaysinh='".$_POST['ngaysinhcs']."', gioitinh='".$_POST['gioitinhcs']."'";
		$sqlup = $sqlup.", truquan='".$_POST['truquancs']."', mandk='".$_POST['mandkcs']."', socmnd='".$_POST['socmndcs']."', thtu='".$_POST['thtucs']."'";
		$sqlup = $sqlup.", thden='".$_POST['thdencs']."', sotien='".$_POST['sotiencs']."', phanloai='".$_POST['phanloaics']."', loaidt='".$_POST['loaidtcs']."', xa='".str_replace('_',' ',$_POST['tenxacs'])."'";
		$sqlup = $sqlup." where idbhyt = ".$_POST['idbhytcs'];
		$kq=mysqli_query($con,$sqlup);
	}
if(isset($_POST["themmoi"]))
	{	
		$sqlup = "Insert into bhyt16 Set hoten='".$_POST['hoten']."', ngaysinh='".$_POST['ngaysinh']."', gioitinh='".$_POST['gioitinh']."'";
		$sqlup = $sqlup.", truquan='".$_POST['truquan']."', mandk='".$_POST['mandk']."', socmnd='".$_POST['socmnd']."', thtu='".$_POST['thtu']."'";
		$sqlup = $sqlup.", thden='".$_POST['thden']."', sotien='".$_POST['sotien']."', phanloai='".$_POST['phanloai']."', loaidt='".$_POST['loaidt']."'";
		$sqlup = $sqlup.", xa='".str_replace('_',' ',$_POST['tenxa'])."', huyen='".$madv[0]."', xacnhan='Chuyển 1'";
		$kq=mysqli_query($con,$sqlup);
	} */
/* if (isset($_POST["taobhyt"]))
{
	$noidkbhyt="";
	$sqlbh = "Select tnkb From danhmuckb where mankb='".$_POST['noidkbh']."'";
	$sqlbh1=mysqli_query($con,$sqlbh);
	while($rowbh=mysqli_fetch_array($sqlbh1)){
		$noidkbhyt = $rowbh['tnkb'];
	}
	//thương binh
	if (isset($_POST['tb']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Thương binh' as loai,'Cấp mới' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuyển 1' as xn from hosotb Where bhyt='Có'";		
		$kq=mysqli_query($con,$sql);		
	}
	if (isset($_POST['tntb']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Thân nhân của thương binh' as loai,'Cấp mới' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuyển 1' as xn from thannhantb Where bhyt='Có'";		
		$kq=mysqli_query($con,$sql);		
	}
	//bệnh binh
	if (isset($_POST['bb']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Bệnh binh' as loai,'Cấp mới' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuyển 1' as xn from hosobb Where bhyt='Có'";		
		$kq=mysqli_query($con,$sql);		
	}
	if (isset($_POST['tnbb']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Thân nhân của bệnh binh' as loai,'Cấp mới' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuyển 1' as xn from thannhanbb Where bhyt='Có'";		
		$kq=mysqli_query($con,$sql);		
	}
	//anh hùng
	if (isset($_POST['ah']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Anh hùng' as loai,'Cấp mới' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuyển 1' as xn from hosoah Where bhyt='Có'";		
		$kq=mysqli_query($con,$sql);		
	}
	if (isset($_POST['tnbb']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Thân nhân của anh hùng' as loai,'Cấp mới' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuyển 1' as xn from thannhanah Where bhyt='Có'";		
		$kq=mysqli_query($con,$sql);		
	}
	//Bà mẹ
	if (isset($_POST['bm']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,'Nữ' as gioitinh,truquan,'Bà mẹ Việt Nam anh hùng' as loai,'Cấp mới' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuyển 1' as xn from hosobm Where bhyt='Có'";		
		$kq=mysqli_query($con,$sql);		
	}
	if (isset($_POST['tnbm']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Thân nhân của anh hùng' as loai,'Cấp mới' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuyển 1' as xn from thannhanbm Where bhyt='Có'";		
		$kq=mysqli_query($con,$sql);		
	}
	//Trước ngày 01/01/1945
	if (isset($_POST['lt']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Người hoạt động trước 01/01/1945' as loai,'Cấp mới' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuyển 1' as xn from hosolt Where bhyt='Có'";		
		$kq=mysqli_query($con,$sql);		
	}
	if (isset($_POST['tnlt']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Thân nhân của người hoạt động trước 01/01/1945' as loai,'Cấp mới' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuyển 1' as xn from thannhanlt Where bhyt='Có'";		
		$kq=mysqli_query($con,$sql);		
	}
	//Tiền khởi nghĩa
	if (isset($_POST['tkn']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Tiền khởi nghĩa' as loai,'Cấp mới' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuyển 1' as xn from hosotkn Where bhyt='Có'";		
		$kq=mysqli_query($con,$sql);		
	}
	if (isset($_POST['tntkn']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Thân nhân của người tiền khởi nghĩa' as loai,'Cấp mới' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuyển 1' as xn from thannhantkn Where bhyt='Có'";		
		$kq=mysqli_query($con,$sql);		
	}
	//Người nhiễm chất độc hóa học
	if (isset($_POST['hh']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Người nhiễm chất độc hóa học' as loai,'Cấp mới' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuyển 1' as xn from hosohh Where bhyt='Có'";		
		$kq=mysqli_query($con,$sql);		
	}
	if (isset($_POST['tnhh']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Thân nhân của người nhiễm chất độc hóa học' as loai,'Cấp mới' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuyển 1' as xn from thannhanhh Where bhyt='Có'";		
		$kq=mysqli_query($con,$sql);		
	}
	//Bị bắt tù đày
	if (isset($_POST['kctd']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Người nhiễm chất độc hóa học' as loai,'Cấp mới' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuyển 1' as xn from hosotd Where bhyt='Có'";		
		$kq=mysqli_query($con,$sql);		
	}
	//thân nhân liệt sỹ
	if (isset($_POST['tn']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Thân nhân của người nhiễm chất độc hóa học' as loai,'Cấp mới' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuyển 1' as xn from thannhanhh Where bhyt='Có'";		
		$kq=mysqli_query($con,$sql);		
	}
	//Người có công cách mạng
	if (isset($_POST['cc']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Người có công giúp đỡ cách mạng' as loai,'Cấp mới' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuyển 1' as xn from hosocc Where bhyt='Có'";		
		$kq=mysqli_query($con,$sql);		
	}
	//Người hoạt động kháng chiến
	if (isset($_POST['hdkc']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Người hoạt động kháng chiến' as loai,'Cấp mới' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuyển 1' as xn from hosokc Where bhyt='Có'";		
		$kq=mysqli_query($con,$sql);		
	}	
} */
if (isset($_POST['chuyen']))
{	
	/* $key=explode('>',$_POST['sobg']);
	$chars=str_split($_POST["sobg"]);
	$count=0;
	foreach($chars as $char){
		if($char == '>'){
			$count++;
		}
	}
	$i=0;
	//echo $count;
	for($i=0;$i<$count;$i++){
		$nbh=explode('<',$key[$i]);
	$sql="Update ".ktnam($nbh[1])." Set xacnhan='Duyệt' Where idbhyt=".$nbh[0];
	$kq=mysqli_query($con,$sql);
	} */
}	
?>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Danh sách mua bảo hiểm y tế </h4>
		</div>
			<div class="modal-body">
<form role='form' method='POST' class='form-horizontal form-groups-bordered'>								
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModaldc();" class='btn btn-success'>
			<i class='entypo-print'></i>Tìm kiếm
		</a>				
		<label class='col-sm-2'>Trang số:</label>
<?php
$dieukien=$_GET['id'];$dkkhac="";
$cs=0;$sql="";
$ahs = explode('>',$_GET['id']);
$j = $ahs[0];
		echo "<div  class='col-sm-2' style='margin-top:-7px'>";
			echo "<select style='margin-left:-90px;' name='trang' class='form-control' id='trang'>";
	$ls =  array(array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20"));		
		
if (strlen($dieukien) > 15)
{
	$sql="select * from ".ktnam(date('Y'))." where xacnhan='Duyệt' and xa like '%".str_replace('_',' ',$ahs[21])."%' and huyen Like '%".str_replace('_',' ',$ahs[20])."%'";
	if ($ahs[2] != "")
		$dkkhac="loaidt='".$ahs[2]."'";
	if ($ahs[3] != "")
	{
		if ($dkkhac != "")
			$dkkhac=$dkkhac." or loaidt='".$ahs[3]."'";
		else
			$dkkhac=$dkkhac."loaidt='".$ahs[3]."'";
	}
	if ($ahs[4] != "")
	{
		if ($dkkhac != "")
			$dkkhac=$dkkhac." or loaidt='".$ahs[4]."'";
		else
			$dkkhac=$dkkhac."loaidt='".$ahs[4]."'";
	}
	if ($ahs[5] != "")
	{
		if ($dkkhac != "")
			$dkkhac=$dkkhac." or loaidt='".$ahs[5]."'";
		else
			$dkkhac=$dkkhac."loaidt='".$ahs[5]."'";
	}
	if ($ahs[6] != "")
	{
		if ($dkkhac != "")
			$dkkhac=$dkkhac." or loaidt='".$ahs[6]."'";
		else
			$dkkhac=$dkkhac."loaidt='".$ahs[6]."'";
	}
	if ($ahs[7] != "")
	{
		if ($dkkhac != "")
			$dkkhac=$dkkhac." or loaidt='".$ahs[7]."'";
		else
			$dkkhac=$dkkhac."loaidt='".$ahs[7]."'";
	}
	if ($ahs[8] != "")
	{
		if ($dkkhac != "")
			$dkkhac=$dkkhac." or loaidt='".$ahs[8]."'";
		else
			$dkkhac=$dkkhac."loaidt='".$ahs[8]."'";
	}
	if ($ahs[9] != "")
	{
		if ($dkkhac != "")
			$dkkhac=$dkkhac." or loaidt='".$ahs[9]."'";
		else
			$dkkhac=$dkkhac."loaidt='".$ahs[9]."'";
	}
	if ($ahs[10] != "")
	{
		if ($dkkhac != "")
			$dkkhac=$dkkhac." or loaidt='".$ahs[10]."'";
		else
			$dkkhac=$dkkhac."loaidt='".$ahs[10]."'";
	}
	if ($ahs[11] != "")
	{
		if ($dkkhac != "")
			$dkkhac=$dkkhac." or loaidt='".$ahs[11]."'";
		else
			$dkkhac=$dkkhac."loaidt='".$ahs[11]."'";
	}
	if ($ahs[12] != "")
	{
		if ($dkkhac != "")
			$dkkhac=$dkkhac." or loaidt='".$ahs[12]."'";
		else
			$dkkhac=$dkkhac."loaidt='".$ahs[12]."'";
	}
	if ($ahs[13] != "")
	{
		if ($dkkhac != "")
			$dkkhac=$dkkhac." or loaidt='".$ahs[13]."'";
		else
			$dkkhac=$dkkhac."loaidt='".$ahs[13]."'";
	}
	if ($ahs[14] != "")
	{
		if ($dkkhac != "")
			$dkkhac=$dkkhac." or loaidt='".$ahs[14]."'";
		else
			$dkkhac=$dkkhac."loaidt='".$ahs[14]."'";
	}
	if ($ahs[15] != "")
	{
		if ($dkkhac != "")
			$dkkhac=$dkkhac." or loaidt='".$ahs[15]."'";
		else
			$dkkhac=$dkkhac."loaidt='".$ahs[15]."'";
	}
	if ($ahs[16] != "")
	{
		if ($dkkhac != "")
			$dkkhac=$dkkhac." or loaidt='".$ahs[16]."'";
		else
			$dkkhac=$dkkhac."loaidt='".$ahs[16]."'";
	}
	if ($ahs[17] != "")
	{
		if ($dkkhac != "")
			$dkkhac=$dkkhac." or loaidt='".$ahs[17]."'";
		else
			$dkkhac=$dkkhac."loaidt='".$ahs[17]."'";
	}
	if ($ahs[18] != "")
	{
		if ($dkkhac != "")
			$dkkhac=$dkkhac." or loaidt='".$ahs[18]."'";
		else
			$dkkhac=$dkkhac."loaidt='".$ahs[18]."'";
	}
	if ($ahs[19] != "")
	{
		if ($dkkhac != "")
			$dkkhac=$dkkhac." or loaidt='".$ahs[19]."'";
		else
			$dkkhac=$dkkhac."loaidt='".$ahs[19]."'";
	}
	if ($dkkhac != "")
		$sql=$sql." and (".$dkkhac.")";
}
else
{
	$sql="select * from ".ktnam(date('Y'))." where xacnhan='Duyệt'";
}
//echo $sql;
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
					<th style="background-color:rgb(54, 169, 224)" width="5%"><strong style='color:rgb(255, 255, 225)'>Chọn</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="15%"><strong style='color:rgb(255, 255, 225)'>Họ tên</strong></th>					
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Ngày sinh</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="48%"><strong style='color:rgb(255, 255, 225)'>Nơi đăng ký khám bệnh</strong></th>
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
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>xacnhan</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>gioitinh</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Xã</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Huyện</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>idbhyt</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>thang</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>nam</strong></th>
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
					echo "<td><input type = 'Checkbox' name = 'KT' id = '".$ls[$i][17].'<'.$ls[$i][19]."' checked = 'checked'></td>";
					echo "<td style='text-align: left;'>".$ls[$i][0]."</td>";
					echo "<td>".$ls[$i][1]."</td>";	
					echo "<td>".$ls[$i][4]."</td>";
					echo "<td>".$ls[$i][6]."</td>";
					echo "<td>".$ls[$i][7]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][2]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][3]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][5]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][8]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][9]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][10]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][11]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][12]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][13]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][14]."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][15]."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][16]."</td>";
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
							<label for="field-3" class="col-sm-3 control-label">Tên huyện:</label>
							<div class="col-sm-9">
								<input name="tenhuyen" type="text" class="form-control" id="tenhuyen">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Tên xã:</label>
							<div class="col-sm-9">
								<input name="tenxa" type="text" class="form-control" id="tenxa">
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
<div class="modal fade" id="modal-8">
	<div class="modal-dialog">
		<div class="modal-content">				
			<div class="modal-body">				
					<form name="thoaitao" role='form' method='POST' class='form-horizontal form-groups-bordered'>
						<div id = "sTTKK1" class="form-group">	
							<label for="field-3" class="col-sm-3 control-label">Tên Huyện:</label>
							<div class="col-sm-9">								
								<select name="tenhuyentao" id="tenhuyentao" class="form-control">
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
								<select name="tenxatao" id="tenxatao" class="form-control">
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
							<label for="field-3" class="col-sm-6 control-label" style='text-align: left;'>Loại đối tượng tham gia bhyt:</label>							
							<label for="field-3" class="col-sm-6 control-label" style='text-align: left;'>Thân nhân tham gia bhyt:</label>	
							<div class="col-sm-6">
							<input type="checkbox" name="ah" checked = "checked" value="Yes" id="ah" />
							Anh hung lực lượng vũ trang, anh hung lao động							
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tnah" checked = "checked" value="Yes" id="tnah"/>
							Thân nhân Anh hung lực lượng vũ trang, anh hung lao động							
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="lt" checked = "checked" value="Yes" id="lt"/>
							Người hoạt động trước 01 tháng 01 năm 1945							
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tnlt" checked = "checked" value="Yes" id="tnlt"/>
							Thân nhân Người hoạt động trước 01 tháng 01 năm 1945							
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tkn" checked = "checked" value="Yes" id="tkn"/>
							Người hoạt động tiền khởi nghĩa						
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tntkn" checked = "checked" value="Yes" id="tntkn"/>
							Thân nhân Người hoạt động tiền khởi nghĩa							
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="bm" checked = "checked" value="Yes" id="bm"/>
							Bà mẹ Việt Nam anh hùng					
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tnbm" checked = "checked" value="Yes" id="tnbm"/>
							Thân nhân Bà mẹ Việt Nam anh hùng							
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tb" checked = "checked" value="Yes" id="tb"/>
							Thương binh và người hưởng chính sách như thương binh				
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tntb" checked = "checked" value="Yes" id="tntb"/>
							Thân nhân Thương binh							
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="bb" checked = "checked" value="Yes" id="bb"/>
							Bệnh binh				
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tnbb" checked = "checked" value="Yes" id="tnbb"/>
							Thân nhân Bệnh binh							
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="hh" checked = "checked" value="Yes" id="hh"/>
							Người hoạt động kháng chiến nhiễm chất độc hóa học				
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tnhh" checked = "checked" value="Yes" id="tnhh"/>
							Thân nhân Người nhiễm chất độc hóa học						
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="hdkc" checked = "checked" value="Yes" id="hdkc"/>
							Người hoạt động kháng chiến						
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tnls" checked = "checked" value="Yes" id="tnls"/>
							Thân nhân Liệt sỹ						
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="kctd" checked = "checked" value="Yes" id="kctd"/>
							Người hoạt động kháng chiến bị bắt, tù đày						
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tncc" checked = "checked" value="Yes" id="tncc"/>
							Thân nhân Người có công với cách mạng						
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="cc" checked = "checked" value="Yes" id="cc"/>
							Người có công với cách mạng						
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
<div class="modal fade" id="modal-9">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">				
					<form name="thoaichuyen" role='form' method='POST' enctype="multipart/form-data" class='form-horizontal form-groups-bordered'>
						<div id = "sTTKK" class="form-group">
							<h4 style = "text-align:center; color:rgb(10, 10, 10)">DUYỆT DANH SÁCH CẤP THẺ BẢO HIỂM Y TẾ</h4>	
							<h4 style = "text-align:center; color:rgb(10, 10, 10)">(Lưu ý)</h4>
							<label for="field-3" class="col-sm-12 control-label" style = "text-align: left;">-   Danh sách đã được duyệt sẽ không chỉnh sửa được</label>
							<input name="sobg" type="text" class="form-control" style = "Display:none;" id="sobg">
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
							<input type="submit" name="chuyen" class="btn btn-blue" value = "Cập nhật" id = "hhhh">							
					</form>						
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
    window.onsubmit = function() {
        document.thoaics.action = get_action();
		//document.thoaimoi.action = get_action1();
		document.thoaitao.action = get_action2();
		document.thoaichuyen.action = get_action3();
    }

    function get_action() {				
			return "dkbhyttinhtheodoi.php?id=" + $('#trang').val() + ">" + $('#idbhytcs').val();			
    }
	/* function get_action1() {				
			return "dkbhyttinh.php?id="+$('#trangm').val()+">0";			
    } */
	function get_action2() {
		b1="";b2="";b3="";b4="";b5="";b6="";b7="";b8="";b9="";b10="";b11="";b12="";b13="";b14="";b15="";b16="";b17="";b18="";
	if($('#tb').val()=="Yes")
		b1 = "Thương binh";
	if($('#tntb').val()=="Yes")
		b2 = "Thân nhân của thương binh";
	if($('#bb').val()=="Yes")
		b3 = "Bệnh binh";
	if($('#tnbb').val()=="Yes")
		b4 = "Thân nhân của bệnh binh";
	if($('#ah').val()=="Yes")
		b5 = "Anh hùng";
	if($('#tnah').val()=="Yes")
		b6 = "Thân nhân của anh hùng";
	if($('#bm').val()=="Yes")
		b7 = "Bà mẹ Việt Nam anh hùng";
	if($('#tnbm').val()=="Yes")
		b8 = "Thân nhân của bà mẹ";
	if($('#lt').val()=="Yes")
		b9 = "Người hoạt động trước 01/01/1945";
	if($('#tnlt').val()=="Yes")
		b10 = "Thân nhân của người hoạt động trước 01/01/1945";
	if($('#tkn').val()=="Yes")
		b11 = "Tiền khởi nghĩa";
	if($('#tntkn').val()=="Yes")
		b12 = "Thân nhân của người tiền khởi nghĩa";
	if($('#hh').val()=="Yes")
		b13 = "Người nhiễm chất độc hóa học";
	if($('#tnhh').val()=="Yes")
		b14 = "Thân nhân của người nhiễm chất độc hóa học";
	if($('#kctd').val()=="Yes")
		b15 = "Người bị địch bắt tù đày";
	if($('#tn').val()=="Yes")
		b16 = "Thân nhân của liệt sỹ";
	if($('#cc').val()=="Yes")
		b17 = "Người có công giúp đỡ cách mạng";
	if($('#hdkc').val()=='Yes')
		b18 = "Người hoạt động kháng chiến";
	giatri=$('#trangm').val()+">2016>"+b1+">"+b2+">"+b3+">"+b4+">"+b5+">"+b6+">"+b7+">"+b8+">"+b9+">"+b10+">"+b11+">"+b12+">"+b13+">"+b14+">"+b15+">"+b16+">"+b17+">"+b18+">"+$('#tenhuyentao').val()+">"+$('#tenxatao').val();			
	//alert(giatri);
	return "dkbhyttinhtheodoi.php?id="+giatri;			
    }
	function get_action3() {				
			return "dkbhyttinhtheodoi.php?id="+$('#trangm').val()+">2016";			
    }
</script>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>