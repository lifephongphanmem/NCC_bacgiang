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
function showinds()
{		
	window.location.href="/Thoaikx/Dsdangkybhyttinh.php?id="+$("#xadc").val();
}
function showinds()
{
	jQuery('#modal-2').modal('show', {backdrop: 'static'});	
	//window.location.href="/Thoaikx/Dsdangkybhythuyen.php?id="+$("#huyendc").val();
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
		$sqlup = $sqlup.", xa='".str_replace('_',' ',$_POST['tenxa'])."', huyen='".$madv[0]."', xacnhan='Chuy???n 1'";
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
	//th????ng binh
	if (isset($_POST['tb']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Th????ng binh' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn from hosotb Where bhyt='C??'";		
		$kq=mysqli_query($con,$sql);		
	}
	if (isset($_POST['tntb']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Th??n nh??n c???a th????ng binh' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn from thannhantb Where bhyt='C??'";		
		$kq=mysqli_query($con,$sql);		
	}
	//b???nh binh
	if (isset($_POST['bb']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'B???nh binh' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn from hosobb Where bhyt='C??'";		
		$kq=mysqli_query($con,$sql);		
	}
	if (isset($_POST['tnbb']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Th??n nh??n c???a b???nh binh' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn from thannhanbb Where bhyt='C??'";		
		$kq=mysqli_query($con,$sql);		
	}
	//anh h??ng
	if (isset($_POST['ah']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Anh h??ng' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn from hosoah Where bhyt='C??'";		
		$kq=mysqli_query($con,$sql);		
	}
	if (isset($_POST['tnbb']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Th??n nh??n c???a anh h??ng' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn from thannhanah Where bhyt='C??'";		
		$kq=mysqli_query($con,$sql);		
	}
	//B?? m???
	if (isset($_POST['bm']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,'N???' as gioitinh,truquan,'B?? m??? Vi???t Nam anh h??ng' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn from hosobm Where bhyt='C??'";		
		$kq=mysqli_query($con,$sql);		
	}
	if (isset($_POST['tnbm']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Th??n nh??n c???a anh h??ng' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn from thannhanbm Where bhyt='C??'";		
		$kq=mysqli_query($con,$sql);		
	}
	//Tr?????c ng??y 01/01/1945
	if (isset($_POST['lt']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Ng?????i ho???t ?????ng tr?????c 01/01/1945' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn from hosolt Where bhyt='C??'";		
		$kq=mysqli_query($con,$sql);		
	}
	if (isset($_POST['tnlt']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Th??n nh??n c???a ng?????i ho???t ?????ng tr?????c 01/01/1945' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn from thannhanlt Where bhyt='C??'";		
		$kq=mysqli_query($con,$sql);		
	}
	//Ti???n kh???i ngh??a
	if (isset($_POST['tkn']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Ti???n kh???i ngh??a' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn from hosotkn Where bhyt='C??'";		
		$kq=mysqli_query($con,$sql);		
	}
	if (isset($_POST['tntkn']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Th??n nh??n c???a ng?????i ti???n kh???i ngh??a' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn from thannhantkn Where bhyt='C??'";		
		$kq=mysqli_query($con,$sql);		
	}
	//Ng?????i nhi???m ch???t ?????c h??a h???c
	if (isset($_POST['hh']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Ng?????i nhi???m ch???t ?????c h??a h???c' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn from hosohh Where bhyt='C??'";		
		$kq=mysqli_query($con,$sql);		
	}
	if (isset($_POST['tnhh']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Th??n nh??n c???a ng?????i nhi???m ch???t ?????c h??a h???c' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn from thannhanhh Where bhyt='C??'";		
		$kq=mysqli_query($con,$sql);		
	}
	//B??? b???t t?? ????y
	if (isset($_POST['kctd']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Ng?????i nhi???m ch???t ?????c h??a h???c' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn from hosotd Where bhyt='C??'";		
		$kq=mysqli_query($con,$sql);		
	}
	//th??n nh??n li???t s???
	if (isset($_POST['tn']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Th??n nh??n c???a ng?????i nhi???m ch???t ?????c h??a h???c' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn from thannhanhh Where bhyt='C??'";		
		$kq=mysqli_query($con,$sql);		
	}
	//Ng?????i c?? c??ng c??ch m???ng
	if (isset($_POST['cc']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Ng?????i c?? c??ng gi??p ????? c??ch m???ng' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn from hosocc Where bhyt='C??'";		
		$kq=mysqli_query($con,$sql);		
	}
	//Ng?????i ho???t ?????ng kh??ng chi???n
	if (isset($_POST['hdkc']))
	{
		$sql = "Insert into bhyt16(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Ng?????i ho???t ?????ng kh??ng chi???n' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn from hosokc Where bhyt='C??'";		
		$kq=mysqli_query($con,$sql);		
	}	
} */
if (isset($_POST['chuyen']))
{	
	$key=explode('>',$_POST['sobg']);
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
	$sql="Update ".ktnam($nbh[1])." Set xacnhan='Duy???t' Where idbhyt=".$nbh[0];
	$kq=mysqli_query($con,$sql);
	}
}	
?>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Danh s??ch mua b???o hi???m y t??? </h4>
		</div>
			<div class="modal-body">
<form role='form' method='POST' class='form-horizontal form-groups-bordered'>								
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModaldc();" class='btn btn-success'>
			<i class='entypo-print'></i>T??m ki???m
		</a>
		<a style = "float:right; background-color:rgb(83, 181, 166); display:none" onclick="showAjaxModalcds();" class='btn btn-success'>
			<i class='entypo-print'></i>Duy???t danh s??ch
		</a>
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showinds();" class='btn btn-success'>
			<i class='entypo-print'></i>In danh s??ch
		</a>
		<input name="xadc" type="text" class="form-control" style="display:none" id="xadc" value = "<?php echo $madv[0];?>">
		<label class='col-sm-2'>Trang s???:</label>
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
	$sql="select * from ".ktnam($ahs[1])." where xacnhan='Duy???t' and xa like '%".str_replace('_',' ',$ahs[21])."%' and huyen Like '%".str_replace('_',' ',$ahs[20])."%'";
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
	$sql="select * from ".ktnam(date('Y'))." where xacnhan='Duy???t'";
}

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
					<th style="background-color:rgb(54, 169, 224)" width="15%"><strong style='color:rgb(255, 255, 225)'>H??? t??n</strong></th>					
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Ng??y sinh</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="48%"><strong style='color:rgb(255, 255, 225)'>N??i ????ng k?? kh??m b???nh</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>T??? ng??y</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>?????n ng??y</strong></th>
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
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>X??</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Huy???n</strong></th>
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
					//echo "<td><input type = 'Checkbox' name = 'KT' id = '".$ls[$i][17].'<'.$ls[$i][19]."' checked = 'checked'></td>";
					echo "<td>".($i+1)."</td>";	
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
							<label for="field-3" class="col-sm-3 control-label">N??i ????ng k?? kh??m b???nh:</label>
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
							<label for="field-3" class="col-sm-3 control-label">S??? CMND:</label>
							<div class="col-sm-9">
								<input name="socmndcs" type="text" class="form-control" id="socmndcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Th???i h???n t???:</label>
							<div class="col-sm-3">
								<input name="thtucs" type="text" class="form-control" data-mask="date" id="thtucs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Th???i h???n ?????n:</label>
							<div class="col-sm-3">
								<input name="thdencs" type="text" class="form-control" data-mask="date" id="thdencs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">S??? ti???n ????ng:</label>
							<div class="col-sm-3">
								<input name="sotiencs" type="text" class="form-control" id="sotiencs">
							</div>							
							<label for="field-3" class="col-sm-3 control-label">Ph??n lo???i:</label>
							<div class="col-sm-3">								
								<select name="phanloaics" id="phanloaics" class="form-control">
									<option value="C???p m???i">C???p m???i</option>
									<option value="C???p l???i">C???p l???i</option>
									<option value="C???p ?????i">C???p ?????i</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-3 control-label">Lo???i ?????i t?????ng:</label>
							<div class="col-sm-9">
								<input name="loaidtcs" type="text" class="form-control" id="loaidtcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">T??n huy???n:</label>
							<div class="col-sm-9">
								<input name="tenhuyen" type="text" class="form-control" id="tenhuyen">
							</div>
							<label for="field-3" class="col-sm-3 control-label">T??n x??:</label>
							<div class="col-sm-9">
								<input name="tenxa" type="text" class="form-control" id="tenxa">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Th??ng bhyt:</label>
							<div class="col-sm-3">
								<input name="thangcs" type="text" class="form-control" id="thangcs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">N??m bhyt:</label>
							<div class="col-sm-3">
								<input name="namcs" type="text" class="form-control" id="namcs">
							</div>
							<div class="col-sm-10">
								<input name="idbhytcs" type="text" class="form-control" style="display:none" id="idbhytcs">
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
							<label for="field-3" class="col-sm-3 control-label">T??n Huy???n:</label>
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
							<label for="field-3" class="col-sm-3 control-label">T??n x??:</label>
							<div class="col-sm-9">								
								<select name="tenxatao" id="tenxatao" class="form-control">
									<?php
									$sqltcml = "Select xa.tenxa,huyen.tenhuyen From xa inner join huyen on xa.tthuyen=huyen.tthuyen";
									$qrtcml = mysqli_query($con,$sqltcml);			
									while($rtcml=@mysqli_fetch_array($qrtcml))
									{
										echo "<option value=".str_replace(' ','_',$rtcml['tenxa']).">".$rtcml['tenhuyen'].' - '.$rtcml['tenxa']."</option>";
									}
									?>
									<option value="" selected = "selected"></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-3 control-label">N??m bhyt c???n t??m:</label>
							<div class="col-sm-9">
								<input name="namtk" type="text" class="form-control" id="namtk">
							</div>
							<label for="field-3" class="col-sm-6 control-label" style='text-align: left;'>Lo???i ?????i t?????ng tham gia bhyt:</label>							
							<label for="field-3" class="col-sm-6 control-label" style='text-align: left;'>Th??n nh??n tham gia bhyt:</label>	
							<div class="col-sm-6">
							<input type="checkbox" name="ah" checked = "checked" value="Yes" id="ah" />
							Anh hung l???c l?????ng v?? trang, anh hung lao ?????ng							
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tnah" checked = "checked" value="Yes" id="tnah"/>
							Th??n nh??n Anh hung l???c l?????ng v?? trang, anh hung lao ?????ng							
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="lt" checked = "checked" value="Yes" id="lt"/>
							Ng?????i ho???t ?????ng tr?????c 01 th??ng 01 n??m 1945							
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tnlt" checked = "checked" value="Yes" id="tnlt"/>
							Th??n nh??n Ng?????i ho???t ?????ng tr?????c 01 th??ng 01 n??m 1945							
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tkn" checked = "checked" value="Yes" id="tkn"/>
							Ng?????i ho???t ?????ng ti???n kh???i ngh??a						
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tntkn" checked = "checked" value="Yes" id="tntkn"/>
							Th??n nh??n Ng?????i ho???t ?????ng ti???n kh???i ngh??a							
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="bm" checked = "checked" value="Yes" id="bm"/>
							B?? m??? Vi???t Nam anh h??ng					
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tnbm" checked = "checked" value="Yes" id="tnbm"/>
							Th??n nh??n B?? m??? Vi???t Nam anh h??ng							
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tb" checked = "checked" value="Yes" id="tb"/>
							Th????ng binh v?? ng?????i h?????ng ch??nh s??ch nh?? th????ng binh				
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tntb" checked = "checked" value="Yes" id="tntb"/>
							Th??n nh??n Th????ng binh							
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="bb" checked = "checked" value="Yes" id="bb"/>
							B???nh binh				
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tnbb" checked = "checked" value="Yes" id="tnbb"/>
							Th??n nh??n B???nh binh							
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="hh" checked = "checked" value="Yes" id="hh"/>
							Ng?????i ho???t ?????ng kh??ng chi???n nhi???m ch???t ?????c h??a h???c				
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tnhh" checked = "checked" value="Yes" id="tnhh"/>
							Th??n nh??n Ng?????i nhi???m ch???t ?????c h??a h???c						
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="hdkc" checked = "checked" value="Yes" id="hdkc"/>
							Ng?????i ho???t ?????ng kh??ng chi???n						
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tnls" checked = "checked" value="Yes" id="tnls"/>
							Th??n nh??n Li???t s???						
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="kctd" checked = "checked" value="Yes" id="kctd"/>
							Ng?????i ho???t ?????ng kh??ng chi???n b??? b???t, t?? ????y						
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tncc" checked = "checked" value="Yes" id="tncc"/>
							Th??n nh??n Ng?????i c?? c??ng v???i c??ch m???ng						
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="cc" checked = "checked" value="Yes" id="cc"/>
							Ng?????i c?? c??ng v???i c??ch m???ng						
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
							<input type="submit" name="taobhyt" class="btn btn-blue" value = "T??m ki???m">							
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
							<h4 style = "text-align:center; color:rgb(10, 10, 10)">DUY???T DANH S??CH C???P TH??? B???O HI???M Y T???</h4>	
							<h4 style = "text-align:center; color:rgb(10, 10, 10)">(L??u ??)</h4>
							<label for="field-3" class="col-sm-12 control-label" style = "text-align: left;">-   Danh s??ch ???? ???????c duy???t s??? kh??ng ch???nh s???a ???????c</label>
							<input name="sobg" type="text" class="form-control" style = "Display:none;" id="sobg">
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">????ng</button>
							<input type="submit" name="chuyen" class="btn btn-blue" value = "C???p nh???t" id = "hhhh">							
					</form>						
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-2">
	<div class="modal-dialog">
		<div class="modal-content">				
			<div class="modal-body">				
					<form name="thoaiin" role='form' method='POST' action="/Thoaikx/Dsdangkybhyttinh.php" class='form-horizontal form-groups-bordered'>
						<div id = "sTTKK1" class="form-group">
							<label for="field-3" class="col-sm-3 control-label">T??n ????n v???:</label>
							<div class="col-sm-9">								
								<select name="huyenkx" id="huyenkx" class="form-control">
									<?php
									$sqltcml = "Select xa.tenxa,huyen.tenhuyen From xa inner join huyen on xa.tthuyen=huyen.tthuyen";
									$qrtcml = mysqli_query($con,$sqltcml);			
									while($rtcml=@mysqli_fetch_array($qrtcml))
									{
										echo "<option value=".str_replace(' ','_',$rtcml['tenxa']).">".$rtcml['tenhuyen'].' - '.$rtcml['tenxa']."</option>";
									}
									?>
									<option value="" selected = "selected"></option>
								</select>
							</div>																
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">????ng</button>
							<input type="submit" name="create1" class="btn btn-blue" value = "T???o b??o c??o">	
							<input name="tinhkx" type="text" style="display:none" class="form-control" id="tinhkx" value = "<?php echo $madv[0];?>">								
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
			return "dkbhyttinh.php?id=" + $('#trang').val() + ">" + $('#idbhytcs').val();			
    }
	/* function get_action1() {				
			return "dkbhyttinh.php?id="+$('#trangm').val()+">0";			
    } */
	function get_action2() {
		b1="";b2="";b3="";b4="";b5="";b6="";b7="";b8="";b9="";b10="";b11="";b12="";b13="";b14="";b15="";b16="";b17="";b18="";
	if($('#tb').val()=="Yes")
		b1 = "Th????ng binh";
	if($('#tntb').val()=="Yes")
		b2 = "Th??n nh??n c???a th????ng binh";
	if($('#bb').val()=="Yes")
		b3 = "B???nh binh";
	if($('#tnbb').val()=="Yes")
		b4 = "Th??n nh??n c???a b???nh binh";
	if($('#ah').val()=="Yes")
		b5 = "Anh h??ng";
	if($('#tnah').val()=="Yes")
		b6 = "Th??n nh??n c???a anh h??ng";
	if($('#bm').val()=="Yes")
		b7 = "B?? m??? Vi???t Nam anh h??ng";
	if($('#tnbm').val()=="Yes")
		b8 = "Th??n nh??n c???a b?? m???";
	if($('#lt').val()=="Yes")
		b9 = "Ng?????i ho???t ?????ng tr?????c 01/01/1945";
	if($('#tnlt').val()=="Yes")
		b10 = "Th??n nh??n c???a ng?????i ho???t ?????ng tr?????c 01/01/1945";
	if($('#tkn').val()=="Yes")
		b11 = "Ti???n kh???i ngh??a";
	if($('#tntkn').val()=="Yes")
		b12 = "Th??n nh??n c???a ng?????i ti???n kh???i ngh??a";
	if($('#hh').val()=="Yes")
		b13 = "Ng?????i nhi???m ch???t ?????c h??a h???c";
	if($('#tnhh').val()=="Yes")
		b14 = "Th??n nh??n c???a ng?????i nhi???m ch???t ?????c h??a h???c";
	if($('#kctd').val()=="Yes")
		b15 = "Ng?????i b??? ?????ch b???t t?? ????y";
	if($('#tn').val()=="Yes")
		b16 = "Th??n nh??n c???a li???t s???";
	if($('#cc').val()=="Yes")
		b17 = "Ng?????i c?? c??ng gi??p ????? c??ch m???ng";
	if($('#hdkc').val()=='Yes')
		b18 = "Ng?????i ho???t ?????ng kh??ng chi???n";
	giatri=$('#trangm').val()+">"+$('#namtk').val()+">"+b1+">"+b2+">"+b3+">"+b4+">"+b5+">"+b6+">"+b7+">"+b8+">"+b9+">"+b10+">"+b11+">"+b12+">"+b13+">"+b14+">"+b15+">"+b16+">"+b17+">"+b18+">"+$('#tenhuyentao').val()+">"+$('#tenxatao').val();			
	//alert(giatri);
	return "dkbhyttinh.php?id="+giatri;			
    }
	function get_action3() {				
			return "dkbhyttinh.php?id="+$('#trangm').val()+">2016";			
    }
</script>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>