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
if(isset($_POST["capnhatts"]))
	{	
		$sqlup = "Update ".ktnam($_POST['namcs'])." Set hoten='".$_POST['hotencs']."', ngaysinh='".$_POST['ngaysinhcs']."', gioitinh='".$_POST['gioitinhcs']."'";
		$sqlup = $sqlup.", truquan='".$_POST['truquancs']."', mandk='".$_POST['mandkcs']."', socmnd='".$_POST['socmndcs']."', thtu='".$_POST['thtucs']."'";
		$sqlup = $sqlup.", thden='".$_POST['thdencs']."', sotien='".$_POST['sotiencs']."', phanloai='".$_POST['phanloaics']."', loaidt='".$_POST['loaidtcs']."', xa='".str_replace('_',' ',$_POST['tenxacs'])."', thang=".$_POST['thangcs'].", nam=".$_POST['namcs'];
		$sqlup = $sqlup." where idbhyt = ".$_POST['idbhytcs'];
		$kq=mysqli_query($con,$sqlup);
	}
if(isset($_POST["themmoi"]))
	{	
		$sqlup = "Insert into ".ktnam($_POST['nam'])." Set hoten='".$_POST['hoten']."', ngaysinh='".$_POST['ngaysinh']."', gioitinh='".$_POST['gioitinh']."'";
		$sqlup = $sqlup.", truquan='".$_POST['truquan']."', mandk='".$_POST['mandk']."', socmnd='".$_POST['socmnd']."', thtu='".$_POST['thtu']."'";
		$sqlup = $sqlup.", thden='".$_POST['thden']."', sotien='".$_POST['sotien']."', phanloai='".$_POST['phanloai']."', loaidt='".$_POST['loaidt']."'";
		$sqlup = $sqlup.", xa='".str_replace('_',' ',$_POST['tenxa'])."', huyen='".$madv[0]."', xacnhan='Chuy???n 1', thang=".$_POST['thang'].", nam=".$_POST['nam'];
		$kq=mysqli_query($con,$sqlup);
	}
if (isset($_POST["taobhyt"]))
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
		$sql = "Insert into ".ktnam($_POST['nambh'])."(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan,thang,nam)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Th????ng binh' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn,".$_POST['thangbh']." as thangbh,".$_POST['nambh']." as nambh from hosotb Where bhyt='C??' and xa='".str_replace('_',' ',$_POST['tenxatao'])."' and huyen='".$madv[0]."'";		
		//echo $sql;
		$kq=mysqli_query($con,$sql);		
	}
	if (isset($_POST['tntb']))
	{
		$sql = "Insert into ".ktnam($_POST['nambh'])."(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan,thang,nam)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Th??n nh??n c???a th????ng binh' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn,".$_POST['thangbh']." as thangbh,".$_POST['nambh']." as nambh from thannhantb Where bhyt='C??' and xa='".str_replace('_',' ',$_POST['tenxatao'])."' and huyen='".$madv[0]."'";		
		$kq=mysqli_query($con,$sql);		
	}
	//b???nh binh
	if (isset($_POST['bb']))
	{
		$sql = "Insert into ".ktnam($_POST['nambh'])."(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan,thang,nam)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'B???nh binh' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn,".$_POST['thangbh']." as thangbh,".$_POST['nambh']." as nambh from hosobb Where bhyt='C??' and xa='".str_replace('_',' ',$_POST['tenxatao'])."' and huyen='".$madv[0]."'";		
		$kq=mysqli_query($con,$sql);		
	}
	if (isset($_POST['tnbb']))
	{
		$sql = "Insert into ".ktnam($_POST['nambh'])."(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan,thang,nam)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Th??n nh??n c???a b???nh binh' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn,".$_POST['thangbh']." as thangbh,".$_POST['nambh']." as nambh from thannhanbb Where bhyt='C??' and xa='".str_replace('_',' ',$_POST['tenxatao'])."' and huyen='".$madv[0]."'";		
		$kq=mysqli_query($con,$sql);		
	}
	//anh h??ng
	if (isset($_POST['ah']))
	{
		$sql = "Insert into ".ktnam($_POST['nambh'])."(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan,thang,nam)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Anh h??ng' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn,".$_POST['thangbh']." as thangbh,".$_POST['nambh']." as nambh from hosoah Where bhyt='C??' and xa='".str_replace('_',' ',$_POST['tenxatao'])."' and huyen='".$madv[0]."'";		
		$kq=mysqli_query($con,$sql);		
	}
	if (isset($_POST['tnah']))
	{
		$sql = "Insert into ".ktnam($_POST['nambh'])."(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan,thang,nam)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Th??n nh??n c???a anh h??ng' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn,".$_POST['thangbh']." as thangbh,".$_POST['nambh']." as nambh from thannhanah Where bhyt='C??' and xa='".str_replace('_',' ',$_POST['tenxatao'])."' and huyen='".$madv[0]."'";		
		$kq=mysqli_query($con,$sql);		
	}
	//B?? m???
	if (isset($_POST['bm']))
	{
		$sql = "Insert into ".ktnam($_POST['nambh'])."(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan,thang,nam)";
		$sql = $sql." Select hoten,ngaysinh,'N???' as gioitinh,truquan,'B?? m??? Vi???t Nam anh h??ng' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn,".$_POST['thangbh']." as thangbh,".$_POST['nambh']." as nambh from hosobm Where bhyt='C??' and xa='".str_replace('_',' ',$_POST['tenxatao'])."' and huyen='".$madv[0]."'";		
		$kq=mysqli_query($con,$sql);		
	}
	if (isset($_POST['tnbm']))
	{
		$sql = "Insert into ".ktnam($_POST['nambh'])."(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan,thang,nam)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Th??n nh??n c???a b?? m???' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn,".$_POST['thangbh']." as thangbh,".$_POST['nambh']." as nambh from thannhanbm Where bhyt='C??' and xa='".str_replace('_',' ',$_POST['tenxatao'])."' and huyen='".$madv[0]."'";		
		$kq=mysqli_query($con,$sql);		
	}
	//Tr?????c ng??y 01/01/1945
	if (isset($_POST['lt']))
	{
		$sql = "Insert into ".ktnam($_POST['nambh'])."(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan,thang,nam)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Ng?????i ho???t ?????ng tr?????c 01/01/1945' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn,".$_POST['thangbh']." as thangbh,".$_POST['nambh']." as nambh from hosolt Where bhyt='C??' and xa='".str_replace('_',' ',$_POST['tenxatao'])."' and huyen='".$madv[0]."'";		
		$kq=mysqli_query($con,$sql);		
	}
	if (isset($_POST['tnlt']))
	{
		$sql = "Insert into ".ktnam($_POST['nambh'])."(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan,thang,nam)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Th??n nh??n c???a ng?????i ho???t ?????ng tr?????c 01/01/1945' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn,".$_POST['thangbh']." as thangbh,".$_POST['nambh']." as nambh from thannhanlt Where bhyt='C??' and xa='".str_replace('_',' ',$_POST['tenxatao'])."' and huyen='".$madv[0]."'";		
		$kq=mysqli_query($con,$sql);		
	}
	//Ti???n kh???i ngh??a
	if (isset($_POST['tkn']))
	{
		$sql = "Insert into ".ktnam($_POST['nambh'])."(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan,thang,nam)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Ti???n kh???i ngh??a' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn,".$_POST['thangbh']." as thangbh,".$_POST['nambh']." as nambh from hosotkn Where bhyt='C??' and xa='".str_replace('_',' ',$_POST['tenxatao'])."' and huyen='".$madv[0]."'";		
		$kq=mysqli_query($con,$sql);		
	}
	if (isset($_POST['tntkn']))
	{
		$sql = "Insert into ".ktnam($_POST['nambh'])."(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan,thang,nam)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Th??n nh??n c???a ng?????i ti???n kh???i ngh??a' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn,".$_POST['thangbh']." as thangbh,".$_POST['nambh']." as nambh from thannhantkn Where bhyt='C??' and xa='".str_replace('_',' ',$_POST['tenxatao'])."' and huyen='".$madv[0]."'";		
		$kq=mysqli_query($con,$sql);		
	}
	//Ng?????i nhi???m ch???t ?????c h??a h???c
	if (isset($_POST['hh']))
	{
		$sql = "Insert into ".ktnam($_POST['nambh'])."(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan,thang,nam)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Ng?????i nhi???m ch???t ?????c h??a h???c' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn,".$_POST['thangbh']." as thangbh,".$_POST['nambh']." as nambh from hosohh Where bhyt='C??' and xa='".str_replace('_',' ',$_POST['tenxatao'])."' and huyen='".$madv[0]."'";		
		$kq=mysqli_query($con,$sql);		
	}
	if (isset($_POST['tnhh']))
	{
		$sql = "Insert into ".ktnam($_POST['nambh'])."(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan,thang,nam)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Th??n nh??n c???a ng?????i nhi???m ch???t ?????c h??a h???c' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn,".$_POST['thangbh']." as thangbh,".$_POST['nambh']." as nambh from thannhanhh Where bhyt='C??' and xa='".str_replace('_',' ',$_POST['tenxatao'])."' and huyen='".$madv[0]."'";		
		$kq=mysqli_query($con,$sql);		
	}
	//B??? b???t t?? ????y
	if (isset($_POST['kctd']))
	{
		$sql = "Insert into ".ktnam($_POST['nambh'])."(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan,thang,nam)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Ng?????i b??? ?????ch b???t t?? ????y' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn,".$_POST['thangbh']." as thangbh,".$_POST['nambh']." as nambh from hosotd Where bhyt='C??' and xa='".str_replace('_',' ',$_POST['tenxatao'])."' and huyen='".$madv[0]."'";		
		$kq=mysqli_query($con,$sql);		
	}
	//th??n nh??n li???t s???
	if (isset($_POST['tn']))
	{
		$sql = "Insert into ".ktnam($_POST['nambh'])."(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan,thang,nam)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Th??n nh??n c???a li???t s???' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn,".$_POST['thangbh']." as thangbh,".$_POST['nambh']." as nambh from thannhanhh Where bhyt='C??' and xa='".str_replace('_',' ',$_POST['tenxatao'])."' and huyen='".$madv[0]."'";		
		$kq=mysqli_query($con,$sql);		
	}
	//Ng?????i c?? c??ng c??ch m???ng
	if (isset($_POST['cc']))
	{
		$sql = "Insert into ".ktnam($_POST['nambh'])."(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan,thang,nam)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Ng?????i c?? c??ng gi??p ????? c??ch m???ng' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn,".$_POST['thangbh']." as thangbh,".$_POST['nambh']." as nambh from hosocc Where bhyt='C??' and xa='".str_replace('_',' ',$_POST['tenxatao'])."' and huyen='".$madv[0]."'";		
		$kq=mysqli_query($con,$sql);		
	}
	//Ng?????i ho???t ?????ng kh??ng chi???n
	if (isset($_POST['hdkc']))
	{
		$sql = "Insert into ".ktnam($_POST['nambh'])."(hoten,ngaysinh,gioitinh,truquan,loaidt,phanloai,sotien,thtu,thden,mandk,noidk,xa,huyen,xacnhan,thang,nam)";
		$sql = $sql." Select hoten,ngaysinh,gioitinh,truquan,'Ng?????i ho???t ?????ng kh??ng chi???n' as loai,'C???p m???i' as ploai,'".$_POST['sotienbh'];
		$sql = $sql."' as stien,'".$_POST['thbhtu']."' as tu,'".$_POST['thbhden']."' as den,'".$_POST['noidkbh']."' as noi,'".$noidkbhyt."' as n,'".str_replace('_',' ',$_POST['tenxatao'])."' as xa,'".$madv[0]."' as huyen,'Chuy???n 1' as xn,".$_POST['thangbh']." as thangbh,".$_POST['nambh']." as nambh from hosokc Where bhyt='C??' and xa='".str_replace('_',' ',$_POST['tenxatao'])."' and huyen='".$madv[0]."'";		
		$kq=mysqli_query($con,$sql);		
	}	
}
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
			<h4 class="modal-title">????ng k?? b???o hi???m y t??? </h4>
		</div>
			<div class="modal-body">
<form role='form' method='POST' class='form-horizontal form-groups-bordered'>						
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModalhs();" class='btn btn-success'>
			<i class='entypo-new'></i>Th??m m???i
		</a>
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModaldc();" class='btn btn-success'>
			<i class='entypo-print'></i>T???o ????ng k??
		</a>
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModalcds();" class='btn btn-success'>
			<i class='entypo-print'></i>Duy???t, chuy???n l??n s??
		</a>
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showinds();" class='btn btn-success'>
			<i class='entypo-print'></i>In danh s??ch
		</a>
		<input name="huyendc" type="text" class="form-control" style="display:none" id="huyendc"  value = "<?php echo $madv[0];?>">
		<label class='col-sm-2'>Trang s???:</label>
<?php
$ahs = explode('>',$_GET['id']);
$j = $ahs[0];
		echo "<div  class='col-sm-2' style='margin-top:-7px'>";
			echo "<select style='margin-left:-90px;' name='trang' class='form-control' id='trang'>";
	$ls =  array(array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20"));		
	$cs=0;
	$sql="select * from ".ktnam(date('Y'))." where xacnhan='Chuy???n 1' and huyen='".$madv[0]."'";
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
					<th style="background-color:rgb(54, 169, 224)" width="5%"><strong style='color:rgb(255, 255, 225)'>Ch???n</strong></th>
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
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>????n v???</strong></th>
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
							<label for="field-3" class="col-sm-3 control-label">H??? t??n ?????i t?????ng:</label>
							<div class="col-sm-9">
								<input name="hoten" type="text" class="form-control" id="hoten">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Ng??y sinh:</label>
							<div class="col-sm-3">
								<input name="ngaysinh" type="text" class="form-control" data-mask="date" id="ngaysinh">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Gi???i t??nh:</label>
							<div class="col-sm-3">								
								<select name="gioitinh" id="gioitinh" class="form-control">
									<option value="Nam">Nam</option>
									<option value="N???">N???</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-3 control-label">Tr?? qu??n:</label>
							<div class="col-sm-9">
								<input name="truquan" type="text" class="form-control" id="truquan">
							</div>
							<label for="field-3" class="col-sm-3 control-label">N??i ????ng k?? kh??m b???nh:</label>
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
							<label for="field-3" class="col-sm-3 control-label">S??? CMND:</label>
							<div class="col-sm-9">
								<input name="socmnd" type="text" class="form-control" id="socmnd">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Th???i h???n t???:</label>
							<div class="col-sm-3">
								<input name="thtu" type="text" class="form-control" data-mask="date" id="thtu">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Th???i h???n ?????n:</label>
							<div class="col-sm-3">
								<input name="thden" type="text" class="form-control" data-mask="date" id="thden">
							</div>
							<label for="field-3" class="col-sm-3 control-label">S??? ti???n ????ng:</label>
							<div class="col-sm-3">
								<input name="sotien" type="text" class="form-control" data-mask="fdecimal" id="sotien">
							</div>							
							<label for="field-3" class="col-sm-3 control-label">Ph??n lo???i:</label>
							<div class="col-sm-3">								
								<select name="phanloai" id="phanloai" class="form-control">
									<option value="C???p m???i">C???p m???i</option>
									<option value="C???p l???i">C???p l???i</option>
									<option value="C???p ?????i">C???p ?????i</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-3 control-label">Lo???i ?????i t?????ng:</label>
							<div class="col-sm-9">
								<input name="loaidt" type="text" class="form-control" id="loaidt">
							</div>
							<label for="field-3" class="col-sm-3 control-label">T??n x??:</label>
							<div class="col-sm-9">								
								<select name="tenxa" id="tenxa" class="form-control">
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
							<label for="field-3" class="col-sm-3 control-label">Th??ng bhyt:</label>
							<div class="col-sm-3">
								<input name="thang" type="text" class="form-control" id="thang">
							</div>
							<label for="field-3" class="col-sm-3 control-label">N??m bhyt:</label>
							<div class="col-sm-3">
								<input name="nam" type="text" class="form-control" id="nam">
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
							<input type="submit" name="themmoi" class="btn btn-blue" value = "Th??m m???i">							
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
							<label for="field-3" class="col-sm-3 control-label">H??? t??n ?????i t?????ng:</label>
							<div class="col-sm-9">
								<input name="hotencs" type="text" class="form-control" id="hotencs">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Ng??y sinh:</label>
							<div class="col-sm-3">
								<input name="ngaysinhcs" type="text" class="form-control" data-mask="date" id="ngaysinhcs">
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
								<input name="sotiencs" type="text" class="form-control" data-mask="fdecimal" id="sotiencs">
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
							<label for="field-3" class="col-sm-3 control-label">T??n x??:</label>
							<div class="col-sm-9">								
								<select name="tenxacs" id="tenxacs" class="form-control">
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
							<label for="field-3" class="col-sm-3 control-label">Th??ng ????ng k?? b???o hi???m:</label>
							<div class="col-sm-3">
								<input name="thangbh" type="text" class="form-control" id="thangbh">
							</div>
							<label for="field-3" class="col-sm-3 control-label">N??m ????ng k?? b???o hi???m:</label>
							<div class="col-sm-3">
								<input name="nambh" type="text" class="form-control" id="nambh">
							</div>
							<label for="field-3" class="col-sm-3 control-label">S??? ti???n ????ng b???o hi???m:</label>
							<div class="col-sm-9">
								<input name="sotienbh" type="text" class="form-control" data-mask="fdecimal" id="sotienbh">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Th???i h???n th??? t???:</label>							
							<div class="col-sm-3">
								<input name="thbhtu" type="text" class="form-control" data-mask="date" id="thbhtu">
							</div>
							<label for="field-3" class="col-sm-3 control-label">Th???i h???n th??? ?????n:</label>							
							<div class="col-sm-3">
								<input name="thbhden" type="text" class="form-control" data-mask="date" id="thbhden">
							</div>
							<label for="field-3" class="col-sm-3 control-label">N??i ????ng k?? kh??m b???nh:</label>
							<div class="col-sm-9">								
								<select name="noidkbh" id="noidkbh" class="form-control">
									<?php	
									$sqltcml = "Select mankb,tnkb From danhmuckb";	
									echo $sqltcml;
									$qrtcml = mysqli_query($con,$sqltcml);			
									while($rtcml=@mysqli_fetch_array($qrtcml))
									{										
										echo "<option value=".$rtcml['mankb'].">".$rtcml['tnkb']."</option>";
									}
									?>
									<option value="" selected = "selected"></option>
								</select>
							</div>	
							<label for="field-3" class="col-sm-3 control-label">T??n x??:</label>
							<div class="col-sm-9">								
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
							<label for="field-3" class="col-sm-6 control-label" style='text-align: left;'>Lo???i ?????i t?????ng tham gia bhyt:</label>							
							<label for="field-3" class="col-sm-6 control-label" style='text-align: left;'>Th??n nh??n tham gia bhyt:</label>	
							<div class="col-sm-6">
							<input type="checkbox" name="ah" checked = "checked" value="Yes" />
							Anh hung l???c l?????ng v?? trang, anh hung lao ?????ng							
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tnah" checked = "checked" value="Yes" />
							Th??n nh??n Anh hung l???c l?????ng v?? trang, anh hung lao ?????ng							
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="lt" checked = "checked" value="Yes" />
							Ng?????i ho???t ?????ng tr?????c 01 th??ng 01 n??m 1945							
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tnlt" checked = "checked" value="Yes" />
							Th??n nh??n Ng?????i ho???t ?????ng tr?????c 01 th??ng 01 n??m 1945							
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tkn" checked = "checked" value="Yes" />
							Ng?????i ho???t ?????ng ti???n kh???i ngh??a						
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tntkn" checked = "checked" value="Yes" />
							Th??n nh??n Ng?????i ho???t ?????ng ti???n kh???i ngh??a							
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="bm" checked = "checked" value="Yes" />
							B?? m??? Vi???t Nam anh h??ng					
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tnbm" checked = "checked" value="Yes" />
							Th??n nh??n B?? m??? Vi???t Nam anh h??ng							
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tb" checked = "checked" value="Yes" />
							Th????ng binh v?? ng?????i h?????ng ch??nh s??ch nh?? th????ng binh				
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tntb" checked = "checked" value="Yes" />
							Th??n nh??n Th????ng binh							
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="bb" checked = "checked" value="Yes" />
							B???nh binh				
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tnbb" checked = "checked" value="Yes" />
							Th??n nh??n B???nh binh							
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="hh" checked = "checked" value="Yes" />
							Ng?????i ho???t ?????ng kh??ng chi???n nhi???m ch???t ?????c h??a h???c				
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tnhh" checked = "checked" value="Yes" />
							Th??n nh??n Ng?????i nhi???m ch???t ?????c h??a h???c						
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="hdkc" checked = "checked" value="Yes" />
							Ng?????i ho???t ?????ng kh??ng chi???n						
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tnls" checked = "checked" value="Yes" />
							Th??n nh??n Li???t s???						
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="kctd" checked = "checked" value="Yes" />
							Ng?????i ho???t ?????ng kh??ng chi???n b??? b???t, t?? ????y						
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="tncc" checked = "checked" value="Yes" />
							Th??n nh??n Ng?????i c?? c??ng v???i c??ch m???ng						
							</div>
							<div class="col-sm-6">
							<input type="checkbox" name="cc" checked = "checked" value="Yes" />
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
							<input type="submit" name="taobhyt" class="btn btn-blue" value = "T???o danh s??ch">							
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
							<h4 style = "text-align:center; color:rgb(10, 10, 10)">CHUY???N DANH S??CH ????NG K?? BHYT L??N C???P TR??N</h4>	
							<h4 style = "text-align:center; color:rgb(10, 10, 10)">(L??u ??)</h4>
							<label for="field-3" class="col-sm-12 control-label" style = "text-align: left;">-   Danh s??ch chuy???n l??n s??? kh??ng ch???nh s???a ???????c</label>
							<label for="field-3" class="col-sm-12 control-label" style = "text-align: left;">-   N???u mu???n ch???nh s???a c???n y??u c???u c??n b??? c???p tr??n chuy???n tr??? l???i</label>
							<label for="field-3" class="col-sm-12 control-label" style = "text-align: left;">-   N???u thi???u h??? s?? bhyt c?? th??? l???p th??m ????? chuy???n l??n</label>
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
					<form name="thoaiin" role='form' method='POST' action="/Thoaikx/Dsdangkybhythuyen.php" class='form-horizontal form-groups-bordered'>
						<div id = "sTTKK1" class="form-group">
							<label for="field-3" class="col-sm-3 control-label">T??n ????n v???:</label>
							<div class="col-sm-9">								
								<select name="huyenkx" id="huyenkx" class="form-control">
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
		document.thoaimoi.action = get_action1();
		document.thoaitao.action = get_action2();
		document.thoaichuyen.action = get_action3();
    }

    function get_action() {				
			return "dkbhythuyen.php?id=" + $('#trang').val() + ">" + $('#idbhytcs').val();			
    }
	function get_action1() {				
			return "dkbhythuyen.php?id="+$('#trangm').val()+">0";			
    }
	function get_action2() {				
			return "dkbhythuyen.php?id="+$('#trangm').val()+">2016";			
    }
	function get_action3() {				
			return "dkbhythuyen.php?id="+$('#trangm').val()+">2016";			
    }
</script>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>