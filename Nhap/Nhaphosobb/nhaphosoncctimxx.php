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
//
function ngaythang(giatri)
{
	kq ="";
	if(giatri!="0000/00/00")			
		kq = giatri.substr(8,2)+"/"+ giatri.substr(5,2)+"/"+giatri.substr(0,4);		
	return kq;
}	
//
function showAjaxModaldchs()
{	
	if ($("#soghi").val() != "")	
		jQuery('#modal-dc').modal('show', {backdrop: 'static'});
	else
		alert("Bạn cần chọn hồ sơ cần di chuyển");	
}
function showAjaxModalserch()
{		
	jQuery('#modal-tim').modal('show', {backdrop: 'static'});	
}
function showAjaxModalthannhan()
{		
	window.location.href="nhapthannhan.php?id="+$("#soghi").val()+">"+$("#xadc").val()+">"+$("#huyendc").val()+">"+$("#hotendc").val();	
}
function showAjaxModalgiayto()
{		
	window.location.href="nhapgiayto.php?id="+$("#soghi").val();	
}	
function showAjaxModaldc()
{		
	window.open("/Reports/Phieudoichieubbt.php?id="+$("#soghi").val()+">"+$("#hotendc").val()+">"+$("#ngaysinhdc").val()+">"+$("#nguyenquandc").val()+">"+$("#truquandc").val()+">"+$("#mahsbodc").val()+">"+$("#mahstinhdc").val()+">"+$("#tthsdc").val()+">"+$("#ketluansgknlddc").val()+">"+$("#tendv").val()+">"+$("#tenct").val()+">"+$("#quanly").val());		
}	
function showAjaxModaltl()
{		
	window.open("/Reports/TrichLucHSBBt.php?id="+$("#soghi").val());	
}
</script>

<script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() 
			{  
			   $('table tbody tr').click(function() 
			   { 
					if ($(this).find('td:last').text() == "ncc")
					{
						//alert("bbbb"+ $(this).find('td:nth-child(37)').text());
						$("#soghidc").val($(this).find('td:nth-child(7)').text());
						$("#soghi").val($(this).find('td:nth-child(7)').text());
						$("#hotendc").val($(this).find('td:nth-child(2)').text());
						$("#ngaysinhdc").val($(this).find('td:nth-child(3)').text());
						$("#nguyenquandc").val($(this).find('td:nth-child(5)').text());
						$("#truquandc").val($(this).find('td:nth-child(6)').text());
						$("#mahsbodc").val($(this).find('td:nth-child(8)').text());
						$("#mahstinhdc").val($(this).find('td:nth-child(9)').text());
						$("#tthsdc").val($(this).find('td:nth-child(36)').text());
						$("#ketluansgknlddc").val($(this).find('td:nth-child(24)').text());
						$("#xadc").val($(this).find('td:nth-child(39)').text());
						$("#huyendc").val($(this).find('td:nth-child(40)').text());
						$('#thannhan').load('ajax_thannhan.php?id_a=' + $(this).find('td:nth-child(7)').text());
						$('#giayto').load('ajax_giayto.php?id_a=' + $(this).find('td:nth-child(7)').text());
					}
			   }); 
			}
		    		  
		);   
</script>
<script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() 
			{  
			   $('table tbody tr').dblclick(function() 
			   { 
					if ($(this).find('td:last').text() == "ncc")
					{
						jQuery('#modal-7').modal('show', {backdrop: 'static'});
						$("#hosobocs").val($(this).find('td:nth-child(8)').text());	
						$("#hosotinhcs").val($(this).find('td:nth-child(9)').text());
						$("#hotencs").val($(this).find('td:nth-child(2)').text());
						$("#bidanhcs").val($(this).find('td:nth-child(10)').text());
						$("#ngaysinhcs").val($(this).find('td:nth-child(3)').text());
						$("#gioitinhcs").val($(this).find('td:nth-child(4)').text());
						$("#quequancs").val($(this).find('td:nth-child(5)').text());
						$("#truquancs").val($(this).find('td:nth-child(6)').text());
						$("#ngaynhapngucs").val($(this).find('td:nth-child(11)').text());
						$("#donvikhinghichedocs").val($(this).find('td:nth-child(12)').text());
						$("#capbaccs").val($(this).find('td:nth-child(13)').text());
						$("#thoigiancongtaccs").val($(this).find('td:nth-child(14)').text());
						$("#thoikycs").val($(this).find('td:nth-child(15)').text());
						$("#tinhtrangbenhtatcs").val($(this).find('td:nth-child(16)').text());
						$("#bbgiamdinhsongaycs").val($(this).find('td:nth-child(17)').text());
						$("#hoidonggiamdinhcs").val($(this).find('td:nth-child(18)').text());
						$("#klmsldcs").val($(this).find('td:nth-child(19)').text());
						$("#tyledathuongtatcs").val($(this).find('td:nth-child(20)').text());
						$("#vinhviencs").val($(this).find('td:nth-child(21)').text());
						$("#khamlaics").val($(this).find('td:nth-child(22)').text());
						$("#bbkhamlaics").val($(this).find('td:nth-child(23)').text());
						$("#ketluanlaitylecs").val($(this).find('td:nth-child(24)').text());
						$("#tyledathuongtatlaics").val($(this).find('td:nth-child(25)').text());
						$("#quyetdinhtccs").val($(this).find('td:nth-child(26)').text());
						$("#capraqdcs").val($(this).find('td:nth-child(27)').text());
						$("#ngayhuongcs").val($(this).find('td:nth-child(28)').text());
						$("#matcmotlancs").val($(this).find('td:nth-child(29)').text());
						$("#matchangthangcs").val($(this).find('td:nth-child(30)').text());
						$("#maphucapkvcs").val($(this).find('td:nth-child(31)').text());
						$("#maphucapdacbietcs").val($(this).find('td:nth-child(32)').text());
						$("#ghichucs").val($(this).find('td:nth-child(33)').text());
						$("#loaiddcs").val($(this).find('td:nth-child(34)').text());
						$("#namddcccs").val($(this).find('td:nth-child(35)').text());
						$("#ngaymatcs").val($(this).find('td:nth-child(37)').text());
						$("#ssltcs").val($(this).find('td:nth-child(38)').text());												
						$("#idhsbbcs").val($(this).find('td:nth-child(7)').text());
						$("#fileanhcu").val($(this).find('td:nth-child(41)').text());
						$("#dieuduongcs").val($(this).find('td:nth-child(42)').text());
						$("#hinhthucddltcs").val($(this).find('td:nth-child(43)').text());
						$("#bhytcs").val($(this).find('td:nth-child(44)').text());
						if ($(this).find('td:nth-child(45)').text()=="0000-00-00")
							$("#ngaydccs").val("");
						else
							$("#ngaydccs").val(ngaythang($(this).find('td:nth-child(45)').text()));
$("#noidccs").val($(this).find('td:nth-child(46)').text());
$("#phanloaidccs").val($(this).find('td:nth-child(47)').text());
						document.getElementById("dd").src = $(this).find('td:nth-child(41)').text();
						var ddfile=$(this).find('td:nth-child(48)').text().lastIndexOf('/');
						document.getElementById("duongdan").href = "download.php?id=/data/upload"+$(this).find('td:nth-child(48)').text().substr(ddfile);
						if ($(this).find('td:nth-child(48)').text()=="")
							document.getElementById("duongdan").style = "display:none";
						else
							document.getElementById("duongdan").style = "color:rgb(245, 24, 63);display:show";
						$("#donvics").val($(this).find('td:nth-child(49)').text());
						$("#ngayxncs").val($(this).find('td:nth-child(50)').text());
						$("#thoigianctcs").val($(this).find('td:nth-child(51)').text());
						$("#thoigianvkkcs").val($(this).find('td:nth-child(52)').text());
						$("#ngaybbvdtcs").val($(this).find('td:nth-child(53)').text());
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
		window.location.href="nhaphosoncctim.php?id="+this.value+">0>"+$("#timdonvi").val()+">"+$("#timmabo").val()+">"+$("#timmatinh").val()+">"+$("#timhoten").val();
  });
 });		
</script>
<script>
$(document).ready(function(){
    $(":input").inputmask();
});
</script>
<?php
function doingay1($ngay)
{		
		$kq = substr($ngay,6,4) ."/". substr($ngay,3,2) . "/". substr($ngay,0,2);		
		return $kq;
}
if(isset($_POST["capnhatts"]))
{	
	if ($madv[3]=="Tỉnh" && $_POST['hotencs'] != "" && $_POST['ngaysinhcs'] != "" && $_POST['quequancs'] != "" && $_POST['truquancs'] != "")
	{
		$fileanh ="";	
		$tmp_name = $_FILES['fileacs']['tmp_name'];
		if($tmp_name != "")
		{				
			$path_parts = pathinfo($_FILES['fileacs']['name']);
			$fileup = $_POST['hosotinhcs']."_".$path_parts['filename'].".".$path_parts['extension'];	
			move_uploaded_file($_FILES['fileacs']['tmp_name'],"$_SERVER[DOCUMENT_ROOT]/data/upload/".$fileup);
			$fileanh="/data/upload/".$fileup;				
		}
		// file đính kèm
			$filedkurl1 ="";
			$tmp_name1 = $_FILES['filedkcs']['tmp_name'];
			if($tmp_name1 != "")
			{				
				$path_parts1 = pathinfo($_FILES['filedkcs']['name']);
				$fileup1 = $_POST['hosotinhcs']."_".$path_parts1['filename'].".".$path_parts1['extension'];	
				move_uploaded_file($_FILES['filedkcs']['tmp_name'],"$_SERVER[DOCUMENT_ROOT]/data/upload/".$fileup1);
				$filedkurl1="$_SERVER[DOCUMENT_ROOT]/data/upload/".$fileup1;				
			}
		// insert
		//echo $path_parts;
		$sqlup = "Update hosobb Set hosobo='".$_POST['hosobocs']."', hosotinh='".$_POST['hosotinhcs']."', hoten='".$_POST['hotencs']."', bidanh='".$_POST['bidanhcs']."', ";
		$sqlup = $sqlup."ngaysinh='".$_POST['ngaysinhcs']."',gioitinh='".$_POST['gioitinhcs']."', quequan='".$_POST['quequancs']."', truquan='".$_POST['truquancs']."', ";
		$sqlup = $sqlup."ngaynhapngu='".$_POST['ngaynhapngucs']."', donvikhinghichedo='".$_POST['donvikhinghichedocs']."', capbac='".$_POST['capbaccs']."', thoigiancongtac='".$_POST['thoigiancongtaccs']."', ";
		$sqlup = $sqlup."thoiky='".$_POST['thoikycs']."', tinhtrangbenhtat='".$_POST['tinhtrangbenhtatcs']."', bbgiamdinhsongay='".$_POST['bbgiamdinhsongaycs']."', ";
		$sqlup = $sqlup."hoidonggiamdinh='".$_POST['hoidonggiamdinhcs']."', klmsld='".$_POST['klmsldcs']."', tyledathuongtat='".$_POST['tyledathuongtatcs']."', ";
		$sqlup = $sqlup."vinhvien='".$_POST['vinhviencs']."', khamlai='".$_POST['khamlaics']."', bbkhamlai='".$_POST['bbkhamlaics']."', ";
		$sqlup = $sqlup."ketluanlaityle='".$_POST['ketluanlaitylecs']."', tyledathuongtatlai='".$_POST['tyledathuongtatlaics']."', quyetdinhtc='".$_POST['quyetdinhtccs']."', ";
		$sqlup = $sqlup."capraqd='".$_POST['capraqdcs']."', ngayhuong='".$_POST['ngayhuongcs']."', matcmotlan='".$_POST['matcmotlancs']."', matchangthang='".$_POST['matchangthangcs']."', ";
		$sqlup = $sqlup."maphucapkv='".$_POST['maphucapkvcs']."', maphucapdacbiet='".$_POST['maphucapdacbietcs']."', ghichu='".$_POST['ghichucs']."', loaidd='".$_POST['loaiddcs']."', ";
		$sqlup = $sqlup."namddcc='".$_POST['namddcccs']."', ngaymat='".$_POST['ngaymatcs']."', sslt='".$_POST['ssltcs']."'";
		$sqlup = $sqlup.", dieuduong='".$_POST['dieuduongcs']."', hinhthucddlt='".$_POST['hinhthucddltcs']."', bhyt='".$_POST['bhytcs']."', ";
		$sqlup = $sqlup."ngaydc='".doingay1($_POST['ngaydccs'])."', noidc='".$_POST['noidccs']."', phanloaidc='".$_POST['phanloaidccs']."', ";
		$sqlup = $sqlup."donvi='".$_POST['donvics']."', ngayxn='".$_POST['ngayxncs']."', thoigianct='".$_POST['thoigianctcs']."', thoigianvkk='".$_POST['thoigianvkkcs']."', ngaybbvdt='".$_POST['ngaybbvdtcs']."'";
		if ($_POST['fileanhcu'] != $fileanh)
		{
			if ($fileanh != "")
				$sqlup = $sqlup.", filea='".$fileanh."'";
		}
		if ($filedkurl1 != "")
			$sqlup = $sqlup.", filedk='".$filedkurl1."'";
		$sqlup = $sqlup." where idhsbb = ".$_POST['idhsbbcs'];
		//echo $sqlup;
		$kq=mysqli_query($con,$sqlup);
	}
}
if(isset($_POST["themmoi"]))
{	
	if ($madv[3]=="Tỉnh" && $_POST['xahuyen'] != '' && $_POST['hoten'] != "" && $_POST['ngaysinh'] != "" && $_POST['quequan'] != "" && $_POST['truquan'] != "")
	{
		$xh=explode('-',$_POST['xahuyen']);
		$sqltths="Select max(ttbb) as ttbb From hethongdv where tendonvi='".str_replace('_',' ',$xh[1])."' and tencaptren='".str_replace('_',' ',$xh[0])."'";
		$sql1=mysqli_query($con,$sqltths);$sotths=0;	
		while($row=mysqli_fetch_array($sql1)){	
			$sotths=$row['ttbb'];
		}
		$sotths=$sotths+1;
		$fileanh ="";	
		$tmp_name = $_FILES['filea']['tmp_name'];
		if($tmp_name != "")
		{				
			$path_parts = pathinfo($_FILES['filea']['name']);
			$fileup = $_POST['hosotinh']."_".$path_parts['filename'].".".$path_parts['extension'];	
			move_uploaded_file($_FILES['filea']['tmp_name'],"$_SERVER[DOCUMENT_ROOT]/data/upload/".$fileup);
			$fileanh="/data/upload/".$fileup;				
		}
		// file đính kèm
			$filedkurl1 ="";
			$tmp_name1 = $_FILES['filedk']['tmp_name'];
			if($tmp_name1 != "")
			{				
				$path_parts1 = pathinfo($_FILES['filedk']['name']);
				$fileup1 = $_POST['mahotinh']."_".$path_parts['filename'].".".$path_parts['extension'];	
				move_uploaded_file($_FILES['filedk']['tmp_name'],"$_SERVER[DOCUMENT_ROOT]/data/upload/".$fileup1);
				$filedkurl1="$_SERVER[DOCUMENT_ROOT]/data/upload/".$fileup1;				
			}
		// insert
		$sqlup = "Insert into hosobb Set hosobo='".$_POST['hosobo']."', hosotinh='".$_POST['hosotinh']."', hoten='".$_POST['hoten']."', bidanh='".$_POST['bidanh']."', ";
		$sqlup = $sqlup."ngaysinh='".$_POST['ngaysinh']."',gioitinh='".$_POST['gioitinh']."', quequan='".$_POST['quequan']."', truquan='".$_POST['truquan']."', ";
		$sqlup = $sqlup."ngaynhapngu='".$_POST['ngaynhapngu']."', donvikhinghichedo='".$_POST['donvikhinghichedo']."', capbac='".$_POST['capbac']."', thoigiancongtac='".$_POST['thoigiancongtac']."', ";
		$sqlup = $sqlup."thoiky='".$_POST['thoiky']."', tinhtrangbenhtat='".$_POST['tinhtrangbenhtat']."', bbgiamdinhsongay='".$_POST['bbgiamdinhsongay']."', ";
		$sqlup = $sqlup."hoidonggiamdinh='".$_POST['hoidonggiamdinh']."', klmsld='".$_POST['klmsld']."', tyledathuongtat='".$_POST['tyledathuongtat']."', ";
		$sqlup = $sqlup."vinhvien='".$_POST['vinhvien']."', khamlai='".$_POST['khamlai']."', bbkhamlai='".$_POST['bbkhamlai']."', ";
		$sqlup = $sqlup."ketluanlaityle='".$_POST['ketluanlaityle']."', tyledathuongtatlai='".$_POST['tyledathuongtatlai']."', quyetdinhtc='".$_POST['quyetdinhtc']."', ";
		$sqlup = $sqlup."capraqd='".$_POST['capraqd']."', ngayhuong='".$_POST['ngayhuong']."', matcmotlan='".$_POST['matcmotlan']."', matchangthang='".$_POST['matchangthang']."', ";
		$sqlup = $sqlup."maphucapkv='".$_POST['maphucapkv']."', maphucapdacbiet='".$_POST['maphucapdacbiet']."', ghichu='".$_POST['ghichu']."', loaidd='".$_POST['loaidd']."', ";
		$sqlup = $sqlup."namddcc='".$_POST['namddcc']."', ngaymat='".$_POST['ngaymat']."', sslt='".$_POST['sslt']."'";
		$sqlup = $sqlup.", dieuduong='".$_POST['dieuduong']."', hinhthucddlt='".$_POST['hinhthucddlt']."', bhyt='".$_POST['bhyt']."', ";
		$sqlup = $sqlup."ngaydc='".doingay1($_POST['ngaydc'])."', noidc='".$_POST['noidc']."', phanloaidc='".$_POST['phanloaidc']."', tths=$sotths, xa='".str_replace('_',' ',$xh[1])."', huyen='".str_replace('_',' ',$xh[0])."', ";
		$sqlup = $sqlup."donvi='".$_POST['donvi']."', ngayxn='".$_POST['ngayxn']."', thoigianct='".$_POST['thoigianct']."', thoigianvkk='".$_POST['thoigianvkk']."', ngaybbvdt='".$_POST['ngaybbvdt']."'";
		if ($fileanh != "")
			$sqlup = $sqlup.", filea='".$fileanh."'";
		if ($filedkurl1 != "")
			$sqlup = $sqlup.", filedk='".$filedkurl1."'";
		//echo $sqlup;	
		$kq=mysqli_query($con,$sqlup);
		$sqluptt="Update hethongdv Set ttbb=$sotths,tongbb=tongbb+1 where tendonvi='".str_replace('_',' ',$xh[1])."' and tencaptren='".str_replace('_',' ',$xh[0])."'";
		$kq1=mysqli_query($con,$sqluptt);
		$sqluptt1="Update hethongdv Set tongbb=tongbb+1 where tendonvi='".$madv[0]."' and tencaptren='".$madv[1]."'";
		$kq2=mysqli_query($con,$sqluptt1);
	}
}
if (isset($_POST["dichuyen"]))
{
	if ($madv[3]=="Tỉnh")
	{
		$sqlup = "Update hosobb Set truquan='".$_POST['noidck']."',ngaydc='".doingay1($_POST['ngaydck'])."',noidc='".$_POST['noidck']."',phanloaidc='".$_POST['phanloaidck']."'";
		if ($_POST['phanloaidck'] == "Chuyển đi nội tỉnh")
		{
			if ($_POST['tenxak'] != "")
			{				
				$xahuyen=explode('-',$_POST['tenxak']);
				$sqltths="Select max(ttbb) as ttbb From hethongdv where tendonvi='".str_replace('_',' ',$xahuyen[1])."' and tencaptren='".str_replace('_',' ',$xahuyen[0])."'";
				$sql1=mysqli_query($con,$sqltths);$sotths=0;	
				while($row=mysqli_fetch_array($sql1)){	
					$sotths=$row['ttbb'];
				}
				$sotths=$sotths+1;
				$sqlup = $sqlup.",xa='".str_replace('_',' ',$xahuyen[1])."',huyen='".str_replace('_',' ',$xahuyen[0])."',tths=$sotths where idhsbb=".$_POST['soghidc'];
				$sqluptt="Update hethongdv Set ttbb=$sotths,tongbb=tongah+1 where tendonvi='".str_replace('_',' ',$xahuyen[1])."' and tencaptren='".str_replace('_',' ',$xahuyen[0])."'";
				$kq1=mysqli_query($con,$sqluptt);
				//$sqluptt1="Update hethongdv Set tongbb=tongbb+1 where tendonvi='".$madv[0]."' and tencaptren='".$madv[1]."'";
				//$kq2=mysqli_query($con,$sqluptt1);
			}
		}
if (strrpos($sqlup,"where")<=0)
			$sqlup = $sqlup." where idhsbb=".$_POST['soghidc'];
		$kq=mysqli_query($con,$sqlup);
	}
}		
?>
 <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Hồ sơ bệnh binh</span></h4>
		</div>
			<div class="modal-body">
<form role='form' method='POST' class='form-horizontal form-groups-bordered'>				
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModalgiayto();" class='btn btn-success'>
			<i class='entypo-pencil'></i>Giấy tờ
		</a>
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModalthannhan();" class='btn btn-success'>
			<i class='entypo-pencil'></i>Thân nhân
		</a>
	<?php
		if ($madv[3]=="Tỉnh")
{
			echo "<a style = 'float:right; background-color:rgb(83, 181, 166)' onclick='showAjaxModalhs();' class='btn btn-success'>
				<i class='entypo-new'></i>Thêm hồ sơ
			</a>";
		
		echo "<a style = 'float:right; background-color:rgb(83, 181, 166)' onclick='showAjaxModaldc();' class='btn btn-success'>
			<i class='entypo-print'></i>Phiếu
		</a>";
		echo "<a style = 'float:right; background-color:rgb(83, 181, 166)' onclick='showAjaxModaltl();' class='btn btn-success'>
			<i class='entypo-print'></i>Trích lục
		</a>";
		echo "<a style = 'float:right; background-color:rgb(83, 181, 166)' onclick='showAjaxModaldchs();' class='btn btn-success'>
			Di chuyển
		</a>";

}
?>
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModalserch();" class='btn btn-success'>
			Tìm kiếm
		</a>
		<input name="soghi" type="text" class="form-control" style="display:none" id="soghi">
		<input name="hotendc" type="text" class="form-control" style="display:none" id="hotendc">
		<input name="ngaysinhdc" type="text" class="form-control" style="display:none" id="ngaysinhdc">
		<input name="nguyenquandc" type="text" class="form-control" style="display:none" id="nguyenquandc">
		<input name="truquandc" type="text" class="form-control" style="display:none" id="truquandc">
		<input name="mahsbodc" type="text" class="form-control" style="display:none" id="mahsbodc">
		<input name="mahstinhdc" type="text" class="form-control" style="display:none" id="mahstinhdc">
		<input name="tthsdc" type="text" class="form-control" style="display:none" id="tthsdc">
		<input name="ketluansgknlddc" type="text" class="form-control" style="display:none" id="ketluansgknlddc">
		<input name="xadc" type="text" class="form-control" style="display:none" id="xadc">
		<input name="huyendc" type="text" class="form-control" style="display:none" id="huyendc">
		<input name="tendv" type="text" class="form-control" style="display:none" id="tendv" value="<?php echo $madv[0]; ?>">
		<input name="tenct" type="text" class="form-control" style="display:none" id="tenct" value="<?php echo $madv[1]; ?>">
		<input name="quanly" type="text" class="form-control" style="display:none" id="quanly" value="<?php echo $madv[3]; ?>">
		<label class='col-sm-2'>Trang số:</label>
<?php
$sql="";$tentim="";$hsbotim="";$hstinhtim="";$hshotentim="";$j=0;
if(isset($_POST['timkiem'])){
	//echo $_POST['tenxatim'];
	$tentim=$_POST['tenxatim'];$hsbotim=$_POST['mabotim'];$hstinhtim=$_POST['matinhtim'];$hshotentim=str_replace("_"," ",$_POST['hotentim']);		
	$tenhuyenxa = str_replace("_"," ",$_POST['tenxatim']);	
	$huyenxa=explode(' - ',$tenhuyenxa);
	if ($_POST['tenxatim'] != "")
		$sql="select * from hosobb where xa like '".$huyenxa[1]."%' and huyen like '".$huyenxa[0]."%' and hosobo like '%".$_POST['mabotim']."%' and hosotinh Like '%".$_POST['matinhtim']."%' and hoten Like '%".str_replace("_"," ",$_POST['hotentim'])."%'";
	else
	{
		if ($madv[3]=="Xã")
			$sql="select * from hosobb where hosobo like '%".$_POST['mabotim']."%' and hosotinh Like '%".$_POST['matinhtim']."%' and hoten Like '%".str_replace("_"," ",$_POST['hotentim'])."%' and xa='".$madv[0]."'";
		else if ($madv[3]=="Huyện")
			$sql="select * from hosobb where hosobo like '%".$_POST['mabotim']."%' and hosotinh Like '%".$_POST['matinhtim']."%' and hoten Like '%".str_replace("_"," ",$_POST['hotentim'])."%' and huyen='".$madv[0]."'";
		else
			$sql="select * from hosobb where hosobo like '%".$_POST['mabotim']."%' and hosotinh Like '%".$_POST['matinhtim']."%' and hoten Like '%".str_replace("_"," ",$_POST['hotentim'])."%'";
	}
	//echo $sql;
	echo "<input name='timdonvi' type='text' class='form-control' style='display:none' id='timdonvi' value='".$_POST['tenxatim']."'>";
	echo "<input name='timmabo' type='text' class='form-control' style='display:none' id='timmabo' value='".$_POST['mabotim']."'>";
	echo "<input name='timmatinh' type='text' class='form-control' style='display:none' id='timmatinh' value='".$_POST['matinhtim']."'>";	
	echo "<input name='timhoten' type='text' class='form-control' style='display:none' id='timhoten' value='".$_POST['hotentim']."'>";
	$j=1;
}
else
{
	$ths = explode('>',$_GET['id']);
	$tenhuyenxa = str_replace("_"," ",$ths[2]);	
	$huyenxa=explode(' - ',$tenhuyenxa);
	if ($ths[2] != "")
		$sql="select * from hosobb where xa like '".$huyenxa[1]."%' and huyen like '".$huyenxa[0]."%' and hosobo like '%".$ths[3]."%' and hosotinh Like '%".$ths[4]."%' and hoten Like '%".str_replace("_"," ",$ths[5])."%'";
	else
	{
		if ($madv[3]=="Xã")
			$sql="select * from hosobb where hosobo like '%".$ths[3]."%' and hosotinh Like '%".$ths[4]."%' and hoten Like '%".str_replace("_"," ",$ths[5])."%' and xa='".$madv[0]."'";
		else if ($madv[3]=="Huyện")
			$sql="select * from hosobb where hosobo like '%".$ths[3]."%' and hosotinh Like '%".$ths[4]."%' and hoten Like '%".str_replace("_"," ",$ths[5])."%' and huyen='".$madv[0]."'";
		else
			$sql="select * from hosobb where hosobo like '%".$ths[3]."%' and hosotinh Like '%".$ths[4]."%' and hoten Like '%".str_replace("_"," ",$ths[5])."%'";
	}
	//echo $sql;
	$j = $ths[0];
	echo "<input name='timdonvi' type='text' class='form-control' style='display:none' id='timdonvi' value='".$ths[2]."'>";
	echo "<input name='timmabo' type='text' class='form-control' style='display:none' id='timmabo' value='".$ths[3]."'>";
	echo "<input name='timmatinh' type='text' class='form-control' style='display:none' id='timmatinh' value='".$ths[4]."'>";	
	echo "<input name='timhoten' type='text' class='form-control' style='display:none' id='timhoten' value='".$ths[5]."'>";
}
		echo "<div  class='col-sm-2' style='margin-top:-7px'>";
			echo "<select style='margin-left:-90px;' name='trang' class='form-control' id='trang'>";
	$ls =  array(array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41","42","43","44","45","46","47","48","49","50","51","52"));		
	$cs=0;
	//$sql="select * from hosobb";
	$sql1=mysqli_query($con,$sql);
	$kq = 0;$kq1 = 1;
	if ($j == 1)
		echo "<option selected='selected' value='$kq1'>$kq1</option>";
	else
		echo "<option value='$kq1'>$kq1</option>";
	while($row=mysqli_fetch_array($sql1)){
		$ls[$cs][0] = $row['hosobo'];
		$ls[$cs][1] = $row['hosotinh'];
		$ls[$cs][2] = $row['hoten'];
		$ls[$cs][3] = $row['bidanh'];
		$ls[$cs][4] = $row['ngaysinh'];
		$ls[$cs][5] = $row['gioitinh'];
		$ls[$cs][6] = $row['quequan'];
		$ls[$cs][7] = $row['truquan'];
		$ls[$cs][8] = $row['ngaynhapngu'];
		$ls[$cs][9] = $row['donvikhinghichedo'];
		$ls[$cs][10] = $row['capbac'];
		$ls[$cs][11] = $row['thoigiancongtac'];
		$ls[$cs][12] = $row['thoiky'];
		$ls[$cs][13] = $row['tinhtrangbenhtat'];
		$ls[$cs][14] = $row['bbgiamdinhsongay'];
		$ls[$cs][15] = $row['hoidonggiamdinh'];
		$ls[$cs][16] = $row['klmsld'];
		$ls[$cs][17] = $row['tyledathuongtat'];
		$ls[$cs][18] = $row['vinhvien'];
		$ls[$cs][19] = $row['khamlai'];
		$ls[$cs][20] = $row['bbkhamlai'];
		$ls[$cs][21] = $row['ketluanlaityle'];
		$ls[$cs][22] = $row['tyledathuongtatlai'];
		$ls[$cs][23] = $row['quyetdinhtc'];
		$ls[$cs][24] = $row['capraqd'];
		$ls[$cs][25] = $row['ngayhuong'];
		$ls[$cs][26] = $row['matcmotlan'];
		$ls[$cs][27] = $row['matchangthang'];
		$ls[$cs][28] = $row['maphucapkv'];
		$ls[$cs][29] = $row['maphucapdacbiet'];
		$ls[$cs][30] = $row['ghichu'];
		$ls[$cs][31] = $row['loaidd'];
		$ls[$cs][32] = $row['namddcc'];
		$ls[$cs][33] = $row['tths'];
		$ls[$cs][34] = $row['ngaymat'];
		$ls[$cs][35] = $row['sslt'];
		$ls[$cs][36] = $row['xa'];
		$ls[$cs][37] = $row['huyen'];
		$ls[$cs][38] = $row['idhsbb'];
		$ls[$cs][39] = $row['filea'];
		$ls[$cs][40] = $row['dieuduong'];
		$ls[$cs][41] = $row['hinhthucddlt'];
		$ls[$cs][42] = $row['bhyt'];
		$ls[$cs][43] = $row['ngaydc'];
		$ls[$cs][44] = $row['noidc'];
		$ls[$cs][45] = $row['phanloaidc'];	
		$ls[$cs][46] = $row['filedk'];
		$ls[$cs][47] = $row['donvi'];
		$ls[$cs][48] = $row['ngayxn'];
		$ls[$cs][49] = $row['thoigianct'];
		$ls[$cs][50] = $row['thoigianvkk'];
		$ls[$cs][51] = $row['ngaybbvdt'];
		$cs = $cs + 1;
	$kq=$kq + 1;
	if ($kq == 5)
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
					<th style="background-color:rgb(54, 169, 224)" width="6%"><strong style='color:rgb(255, 255, 225)'>STT</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="20%"><strong style='color:rgb(255, 255, 225)'>Họ và tên</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Ngày sinh</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="6%"><strong style='color:rgb(255, 255, 225)'>Giới tính</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="30%"><strong style='color:rgb(255, 255, 225)'>Nguyên quán</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="30%"><strong style='color:rgb(255, 255, 225)'>Trú quán</strong></th>					
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>IDhsbb</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>hosobo</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>hosotinh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>bidanh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ngaynhapngu</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>donvikhinghichedo</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>capbac</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>thoigiancongtac</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>thoiky</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>tinhtrangbenhtat</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>bbgiamdinhsongay</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>hoidonggiamdinh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>klmsld</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>tyledathuongtat</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>vinhvien</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>khamlai</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>bbkhamlai</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ketluanlaityle</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>tyledathuongtatlai</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>quyetdinhtc</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>capraqd</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ngayhuong</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>matcmotlan</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>matchangthang</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>maphucapkv</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>maphucapdacbiet</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ghichu</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>loaidd</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>namddcc</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>tths</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ngaymat</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>sslt</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>xa</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>huyen</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>filea</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>dieuduong</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>hinhthucddlt</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>bhyt</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>bhyt</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>bhyt</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>bhyt</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>bhyt</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>bhyt</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>bhyt</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>bhyt</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>bhyt</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>bhyt</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="7%"><strong style='color:rgb(255, 255, 225)'>Thao tác</strong></th>
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
			for($i=($j - 1)*5;$i<5*$j;$i++)
			{
				$a = $i + 1;
				if ($i < $cs)
				{					
				echo "<tr>";
					echo "<td>".$ls[$i][33]."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][2]."</td>";
					echo "<td>".$ls[$i][4]."</td>";
					echo "<td>".$ls[$i][5]."</td>";
					echo "<td style='text-align: left;'>".catchuoi($ls[$i][6])."</td>";
					echo "<td style='text-align: left;'>".catchuoi($ls[$i][7])."</td>";					
					echo "<td style='text-align: left; display:none'>".$ls[$i][38]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][0]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][1]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][3]."</td>";
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
					echo "<td style='text-align: left; display:none'>".$ls[$i][20]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][21]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][22]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][23]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][24]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][25]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][26]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][27]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][28]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][29]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][30]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][31]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][32]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][33]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][34]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][35]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][36]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][37]."</td>";	
					echo "<td style='text-align: left; display:none'>".$ls[$i][39]."</td>";	
echo "<td style='text-align: left; display:none'>".$ls[$i][40]."</td>";
echo "<td style='text-align: left; display:none'>".$ls[$i][41]."</td>";
echo "<td style='text-align: left; display:none'>".$ls[$i][42]."</td>";
echo "<td style='text-align: left; display:none'>".$ls[$i][43]."</td>";	
echo "<td style='text-align: left; display:none'>".$ls[$i][44]."</td>";	
echo "<td style='text-align: left; display:none'>".$ls[$i][45]."</td>";	
echo "<td style='text-align: left; display:none'>".$ls[$i][46]."</td>";	
					if ($madv[3]=="Tỉnh")
					{
						echo"<td>					
							<a href=\"xoatim.php?id=".$ls[$i][38].">".$tentim.">".$hsbotim.">".$hstinhtim.">".$hshotentim."\"  title='Xóa hố sơ và thông tin liên quan' onclick=\"return confirm('Bạn muốn xóa hố sơ này?')\" class='btn btn-red '>
								</i>
								Xóa
							</a>
						</td>";
					}
					else
						echo "<td></td>";	
					echo "<td style='text-align: left; display:none'>ncc</td>";
				echo "</tr>";
				}
			}
?>				
			</tbody>
		</table>
	</div>	
	<div id = "thannhan" class="table-responsive">
		<table class="table table-hover table-striped table-bordered table-advanced tablesorter display" id="table-3">
			<thead>
				<tr>
					<th style="background-color:rgb(54, 169, 224)" width="6%"><strong style='color:rgb(255, 255, 225)'>STT</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="20%"><strong style='color:rgb(255, 255, 225)'>Họ và tên</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Năm sinh</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="6%"><strong style='color:rgb(255, 255, 225)'>Giới tính</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="15%"><strong style='color:rgb(255, 255, 225)'>Quan hệ</strong></th>	
					<th style="background-color:rgb(54, 169, 224)" width="45%"><strong style='color:rgb(255, 255, 225)'>Trú Quán</strong></th>						
				</tr>				
			</thead>
	<?php		
	/* $ihs = $ahs[1];	
	$sqltn = "Select * From thannhanbb Where idhsbb = $ihs";	
	$i1 = 0;	
	$qrcttn = mysqli_query($con,$sqltn);			
			echo "<tbody id='rowlist' class='rowlist'>";
	while($rcttn=@mysqli_fetch_array($qrcttn))
		{	
			$i1 = $i1 + 1;
				echo "<tr>";
					echo "<td>".$i1."</td>";
					echo "<td style='text-align: left;'>".$rcttn['hoten']."</td>";
					echo "<td>".$rcttn['ngaysinh']."</td>";
					echo "<td>".$rcttn['gioitinh']."</td>";
					echo "<td style='text-align: left;'>".$rcttn['quanhe']."</td>";
					echo "<td style='text-align: left;'>".catchuoi($rcttn['truquan'])."</td>";
				echo "</tr>";
		}		
			echo "</tbody>"; */
	?>		
		</table>
	</div>
	<div id = "giayto" class="table-responsive">
		<table class="table table-hover table-striped table-bordered table-advanced tablesorter display" id="table-4">
			<thead>
				<tr>
					<th style="background-color:rgb(54, 169, 224)" width="6%"><strong style='color:rgb(255, 255, 225)'>STT</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="45%"><strong style='color:rgb(255, 255, 225)'>Tên giấy tờ</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="45%"><strong style='color:rgb(255, 255, 225)'>Chi tiết</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="4%"><strong style='color:rgb(255, 255, 225)'>Số lượng</strong></th>					
				</tr>				
			</thead>
	<?php		
		/* $sqlgt = "Select * From giaytobb Where idhsbb = $ihs";	
		$i2 = 0;	
		$qrctgt = mysqli_query($con,$sqlgt);
			echo "<tbody id='rowlist' class='rowlist'>";
		while($rctgt=@mysqli_fetch_array($qrctgt))
			{	
				$i2 = $i2 + 1;
				echo "<tr>";
					echo "<td>".$i2."</td>";
					echo "<td style='text-align: left;'>".$rctgt['tengiayto']."</td>";
					echo "<td style='text-align: left;'>".$rctgt['chitiet']."</td>";
					echo "<td>".$rctgt['soluong']."</td>";									
				echo "</tr>";	
			}		
			echo "</tbody>"; */
	?>		
		</table>
	</div>
</form>	
<div class="modal fade" id="modal-6">
	<div class="modal-dialog">
		<div class="modal-content">				
			<div class="modal-body">				
					<form name="thoaimoi" role='form' method='POST' enctype="multipart/form-data" class='form-horizontal form-groups-bordered'>
						<div id = "sTTKK1" class="form-group">
							<div class="col-sm-3">
								<div class="fileinput fileinput-new" data-provides="fileinput">
									<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput">
										<img src="http://placehold.it/200x150" alt="...">
									</div>
									<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
									<div>
										<span class="btn btn-white btn-file">
											<span class="fileinput-new">Chọn ảnh</span>
											<span class="fileinput-exists">Thay đổi</span>
											<input type="file" name="filea"  id="filea" accept="image/*">
										</span>
										<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Bỏ	</a>
									</div>
								</div>	
							</div>	
							<label for="field-3" class="col-sm-2 control-label">Mã hồ sơ bộ:</label>
							<div class="col-sm-3">
								<input name="hosobo" type="text" class="form-control" id="hosobo">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Mã hồ sơ tỉnh:</label>
							<div class="col-sm-2">
								<input name="hosotinh" type="text" class="form-control" id="hosotinh">
							</div>		
							<label for="field-3" class="col-sm-2 control-label">Họ và tên<span style="padding-left:0px; color:red;">*</span>:</label>
							<div class="col-sm-3">
								<input name="hoten" type="text" class="form-control" id="hoten">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Bí danh:</label>
							<div class="col-sm-2">
								<input name="bidanh" type="text" class="form-control" id="bidanh">
							</div>		
							<label for="field-3" class="col-sm-2 control-label">Ngày sinh<span style="padding-left:0px; color:red;">*</span>:</label>
							<div class="col-sm-3">
								<input name="ngaysinh" type="text" class="form-control" id="ngaysinh">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Giới tính:</label>
							<div class="col-sm-2">
								<select name="gioitinh" id="gioitinh" class="form-control">
									<option value="Nam">Nam</option>
									<option value="Nữ">Nữ</option>
									<option value=""></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Nguyên quán<span style="padding-left:0px; color:red;">*</span>:</label>
							<div class="col-sm-7">
								<input name="quequan" type="text" class="form-control" id="quequan">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Trú quán<span style="padding-left:0px; color:red;">*</span>:</label>
							<div class="col-sm-7">
								<input name="truquan" type="text" class="form-control" id="truquan">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ngày nhập ngũ:</label>
							<div class="col-sm-3">
								<input name="ngaynhapngu" type="text" class="form-control" id="ngaynhapngu">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Đơn vị nghỉ chế độ:</label>
							<div class="col-sm-2">
								<input name="donvikhinghichedo" type="text" class="form-control" id="donvikhinghichedo">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Cấp bậc:</label>
							<div class="col-sm-3">
								<input name="capbac" type="text" class="form-control" id="capbac">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Thời gian công tác:</label>
							<div class="col-sm-2">
								<input name="thoigiancongtac" type="text" class="form-control" id="thoigiancongtac">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Thời kỳ:</label>
							<div class="col-sm-2">
								<input name="thoiky" type="text" class="form-control" id="thoiky">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Biên bản giám định:</label>
							<div class="col-sm-2">
								<input name="bbgiamdinhsongay" type="text" class="form-control" id="bbgiamdinhsongay">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Hội đồng giám định:</label>
							<div class="col-sm-2">
								<input name="hoidonggiamdinh" type="text" class="form-control" id="hoidonggiamdinh">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tỉ lệ suy giảm knlđ:</label>
							<div class="col-sm-2">
								<input name="klmsld" type="text" class="form-control" id="klmsld">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tỉ lệ thương tật:</label>
							<div class="col-sm-2">
								<input name="tyledathuongtat" type="text" class="form-control" id="tyledathuongtat">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Vĩnh viễn:</label>
							<div class="col-sm-2">								
								<select name="vinhvien" id="vinhvien" class="form-control">
									<option value="Vĩnh viễn">Vĩnh viễn</option>
									<option value="Tạm thời">Tạm thời</option>
									<option value="" selected = "selected"></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tình trạng bệnh:</label>
							<div class="col-sm-10">
								<input name="tinhtrangbenhtat" type="text" class="form-control" id="tinhtrangbenhtat">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Khám lại:</label>
							<div class="col-sm-2">
								<input name="khamlai" type="text" class="form-control" id="khamlai">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Biên bản khám lại:</label>
							<div class="col-sm-2">
								<input name="bbkhamlai" type="text" class="form-control" id="bbkhamlai">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Kết luận lại tỉ lệ:</label>
							<div class="col-sm-2">
								<input name="ketluanlaityle" type="text" class="form-control" id="ketluanlaityle">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tỉ lệ thương tật</label>
							<div class="col-sm-2">
								<input name="tyledathuongtatlai" type="text" class="form-control" id="tyledathuongtatlai">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Quyết định trợ cấp:</label>
							<div class="col-sm-2">
								<input name="quyetdinhtc" type="text" class="form-control" id="quyetdinhtc">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Cấp ra quyết định:</label>
							<div class="col-sm-2">
								<input name="capraqd" type="text" class="form-control" id="capraqd">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ngày hưởng trợ cấp:</label>
							<div class="col-sm-2">
								<input name="ngayhuong" type="text" class="form-control" id="ngayhuong">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Trợ cấp một lần:</label>
							<div class="col-sm-2">
								<input name="matcmotlan" type="text" class="form-control" data-mask="fdecimal" id="matcmotlan">		
							</div>
							<label for="field-3" class="col-sm-2 control-label">Trợ cấp khu vực:</label>
							<div class="col-sm-2">	
								<input name="maphucapkv" type="text" class="form-control" data-mask="fdecimal" id="maphucapkv">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Phụ cấp đặc biệt:</label>
							<div class="col-sm-2">	
								<input name="maphucapdacbiet" type="text" class="form-control" data-mask="fdecimal" id="maphucapdacbiet">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Trợ cấp hàng tháng:</label>
							<div class="col-sm-6">
								<input name="matchangthang" type="text" class="form-control" data-mask="fdecimal" id="matchangthang">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Số sổ lĩnh tiền:</label>
							<div class="col-sm-6">
								<input name="sslt" type="text" class="form-control" id="sslt">
							</div>							
							<label for="field-3" class="col-sm-2 control-label">Điều dưỡng:</label>
							<div class="col-sm-2">								
								<select name="dieuduong" id="dieuduong" class="form-control">
									<option value="Có">Có</option>
									<option value="Không">Không</option>
									<option value="" selected = "selected"></option>
								</select>
							</div>	
							<label for="field-3" class="col-sm-2 control-label">Loại điều dưỡng:</label>
							<div class="col-sm-2">								
								<select name="loaidd" id="loaidd" class="form-control">
									<option value="Hai năm một lần">Hai năm một lần</option>
									<option value="Một năm một lần">Một năm một lần</option>
									<option value="" selected = "selected"></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Năm điều dưỡng cc:</label>
							<div class="col-sm-2">
								<input name="namddcc" type="text" class="form-control" id="namddcc">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Hình thức lần cuối:</label>
							<div class="col-sm-2">								
								<select name="hinhthucddlt" id="hinhthucddlt" class="form-control">
									<option value="Tập trung">Tập trung</option>
									<option value="Tại nhà">Tại nhà</option>
									<option value="" selected = "selected"></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Có BHYT:</label>
							<div class="col-sm-2">								
								<select name="bhyt" id="bhyt" class="form-control">
									<option value="Có">Có</option>
									<option value="Không">Không</option>
									<option value="" selected = "selected"></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ngày mất:</label>
							<div class="col-sm-2">
								<input name="ngaymat" type="text" class="form-control" data-mask="date" id="ngaymat">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ghi chú:</label>
							<div class="col-sm-2">
								<input name="ghichu" type="text" class="form-control" id="ghichu">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Phân loại đi, đến:</label>
							<div class="col-sm-2">								
								<select name="phanloaidc" id="phanloaidc" class="form-control">
									<option value="Chuyển đi nội tỉnh">Chuyển đi nội tỉnh</option>
									<option value="Chuyển đi ngoại tỉnh">Chuyển đi ngoại tỉnh</option>									
									<option value="Chuyển đến từ ngoại tỉnh">Chuyển đến từ ngoại tỉnh</option>
									<option value="" selected = "selected"></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ngày đi, đến:</label>
							<div class="col-sm-2">
								<input name="ngaydc" type="text" class="form-control" data-mask="date" id="ngaydc">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Nơi đi, đến</label>
							<div class="col-sm-2">
								<input name="noidc" type="text" class="form-control" id="noidc">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tên xã:</label>
							<div class="col-sm-10">								
								<select name="xahuyen" id="xahuyen" class="form-control">
									<?php
									$sqltcml = "Select tenxa,tenhuyen From xa inner join huyen on xa.tthuyen=huyen.tthuyen";
									$qrtcml = mysqli_query($con,$sqltcml);			
									while($rtcml=@mysqli_fetch_array($qrtcml))
									{
										echo "<option value=".str_replace(' ','_',$rtcml['tenhuyen']).'-'.str_replace(' ','_',$rtcml['tenxa']).">".$rtcml['tenhuyen'].' - '.$rtcml['tenxa']."</option>";
									}
									?>
									<option value=""></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tên file:</label>
							<div class="col-sm-10">
								<input type="file" id="filedk" name="filedk" class="form-control"/>											
							</div>
							<input name="trangm" type="text" class="form-control" style="display:none" id="trangm" value = "<?php 
							if ($kq == 5) 
							{ 
								$kq1 = $kq1 + 1;
								echo $kq1;
							} 
							else 
								echo $kq1; ?>
							">	
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
					<?php
						if ($madv[3]=="Tỉnh")
							echo "<input type='submit' name='themmoi' class='btn btn-blue' value = 'Thêm mới'>";
					?>		
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
							<div class="col-sm-3">							
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<input class="form-control" name="fileanhcu" style="display:none" id = "fileanhcu">
								<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput">
									<img name = "dd" alt="..." id = "dd">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
								<div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new">Chọn ảnh</span>
										<span class="fileinput-exists">Thay đổi</span>
										<input type="file" name="fileacs"  id="fileacs" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Bỏ	</a>
								</div>
							</div>	
						</div>		
							<label for="field-3" class="col-sm-2 control-label">Mã hồ sơ bộ:</label>
							<div class="col-sm-3">
								<input name="hosobocs" type="text" class="form-control" id="hosobocs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Mã hồ sơ tỉnh:</label>
							<div class="col-sm-2">
								<input name="hosotinhcs" type="text" class="form-control" id="hosotinhcs">
							</div>		
							<label for="field-3" class="col-sm-2 control-label">Họ và tên<span style="padding-left:0px; color:red;">*</span>:</label>
							<div class="col-sm-3">
								<input name="hotencs" type="text" class="form-control" id="hotencs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Bí danh:</label>
							<div class="col-sm-2">
								<input name="bidanhcs" type="text" class="form-control" id="bidanhcs">
							</div>		
							<label for="field-3" class="col-sm-2 control-label">Ngày sinh<span style="padding-left:0px; color:red;">*</span>:</label>
							<div class="col-sm-3">
								<input name="ngaysinhcs" type="text" class="form-control" id="ngaysinhcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Giới tính:</label>
							<div class="col-sm-2">
								<select name="gioitinhcs" id="gioitinhcs" class="form-control">
									<option value="Nam">Nam</option>
									<option value="Nữ">Nữ</option>
									<option value=""></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Nguyên quán<span style="padding-left:0px; color:red;">*</span>:</label>
							<div class="col-sm-7">
								<input name="quequancs" type="text" class="form-control" id="quequancs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Trú quán<span style="padding-left:0px; color:red;">*</span>:</label>
							<div class="col-sm-7">
								<input name="truquancs" type="text" class="form-control" id="truquancs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ngày nhập ngũ:</label>
							<div class="col-sm-3">
								<input name="ngaynhapngucs" type="text" class="form-control" id="ngaynhapngucs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Đơn vị nghỉ chế độ:</label>
							<div class="col-sm-2">
								<input name="donvikhinghichedocs" type="text" class="form-control" id="donvikhinghichedocs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Cấp bậc:</label>
							<div class="col-sm-3">
								<input name="capbaccs" type="text" class="form-control" id="capbaccs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Thời gian công tác:</label>
							<div class="col-sm-2">
								<input name="thoigiancongtaccs" type="text" class="form-control" id="thoigiancongtaccs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Thời kỳ:</label>
							<div class="col-sm-2">
								<input name="thoikycs" type="text" class="form-control" id="thoikycs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Biên bản giám định:</label>
							<div class="col-sm-2">
								<input name="bbgiamdinhsongaycs" type="text" class="form-control" id="bbgiamdinhsongaycs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Hội đồng giám định:</label>
							<div class="col-sm-2">
								<input name="hoidonggiamdinhcs" type="text" class="form-control" id="hoidonggiamdinhcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tỉ lệ suy giảm knlđ:</label>
							<div class="col-sm-2">
								<input name="klmsldcs" type="text" class="form-control" id="klmsldcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tỉ lệ thương tật:</label>
							<div class="col-sm-2">
								<input name="tyledathuongtatcs" type="text" class="form-control" id="tyledathuongtatcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Vĩnh viễn:</label>
							<div class="col-sm-2">								
								<select name="vinhviencs" id="vinhviencs" class="form-control">
									<option value="Vĩnh viễn">Vĩnh viễn</option>
									<option value="Tạm thời">Tạm thời</option>
									<option value=""></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tình trạng bệnh:</label>
							<div class="col-sm-10">
								<input name="tinhtrangbenhtatcs" type="text" class="form-control" id="tinhtrangbenhtatcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Khám lại:</label>
							<div class="col-sm-2">
								<input name="khamlaics" type="text" class="form-control" id="khamlaics">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Biên bản khám lại:</label>
							<div class="col-sm-2">
								<input name="bbkhamlaics" type="text" class="form-control" id="bbkhamlaics">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Kết luận lại tỉ lệ:</label>
							<div class="col-sm-2">
								<input name="ketluanlaitylecs" type="text" class="form-control" id="ketluanlaitylecs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tỉ lệ thương tật</label>
							<div class="col-sm-2">
								<input name="tyledathuongtatlaics" type="text" class="form-control" id="tyledathuongtatlaics">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Quyết định trợ cấp:</label>
							<div class="col-sm-2">
								<input name="quyetdinhtccs" type="text" class="form-control" id="quyetdinhtccs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Cấp ra quyết định:</label>
							<div class="col-sm-2">
								<input name="capraqdcs" type="text" class="form-control" id="capraqdcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ngày hưởng trợ cấp:</label>
							<div class="col-sm-2">
								<input name="ngayhuongcs" type="text" class="form-control" data-mask="date" id="ngayhuongcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Trợ cấp một lần:</label>
							<div class="col-sm-2">	
								<input name="matcmotlancs" type="text" class="form-control" data-mask="fdecimal" id="matcmotlancs">		
							</div>
							<label for="field-3" class="col-sm-2 control-label">Trợ cấp khu vực:</label>
							<div class="col-sm-2">
								<input name="maphucapkvcs" type="text" class="form-control" data-mask="fdecimal" id="maphucapkvcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Phụ cấp đặc biệt:</label>
							<div class="col-sm-2">
								<input name="maphucapdacbietcs" type="text" class="form-control" data-mask="fdecimal" id="maphucapdacbietcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Trợ cấp hàng tháng:</label>
							<div class="col-sm-6">	
								<input name="matchangthangcs" type="text" class="form-control" data-mask="fdecimal" id="matchangthangcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Số sổ lĩnh tiền:</label>
							<div class="col-sm-6">
								<input name="ssltcs" type="text" class="form-control" id="ssltcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Điều dưỡng:</label>
							<div class="col-sm-2">								
								<select name="dieuduongcs" id="dieuduongcs" class="form-control">
									<option value="Có">Có</option>
									<option value="Không">Không</option>	
									<option value=""></option>
								</select>
							</div>	
							<label for="field-3" class="col-sm-2 control-label">Loại điều dưỡng:</label>
							<div class="col-sm-2">								
								<select name="loaiddcs" id="loaiddcs" class="form-control">
									<option value="Hai năm một lần">Hai năm một lần</option>
									<option value="Một năm một lần">Một năm một lần</option>
									<option value=""></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Năm điều dưỡng cc:</label>
							<div class="col-sm-2">
								<input name="namddcccs" type="text" class="form-control" id="namddcccs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Hình thức lần cuối:</label>
							<div class="col-sm-2">								
								<select name="hinhthucddltcs" id="hinhthucddltcs" class="form-control">
									<option value="Tập trung">Tập trung</option>
									<option value="Tại nhà">Tại nhà</option>
									<option value=""></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Có BHYT:</label>
							<div class="col-sm-2">								
								<select name="bhytcs" id="bhytcs" class="form-control">
									<option value="Có">Có</option>
									<option value="Không">Không</option>
									<option value=""></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ngày mất:</label>
							<div class="col-sm-2">
								<input name="ngaymatcs" type="text" class="form-control" data-mask="date" id="ngaymatcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ghi chú:</label>
							<div class="col-sm-2">
								<input name="ghichucs" type="text" class="form-control" id="ghichucs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Phân loại đi, đến:</label>
							<div class="col-sm-2">								
								<select name="phanloaidccs" id="phanloaidccs" class="form-control">
									<option value="Chuyển đi nội tỉnh">Chuyển đi nội tỉnh</option>
									<option value="Chuyển đi ngoại tỉnh">Chuyển đi ngoại tỉnh</option>									
									<option value="Chuyển đến từ ngoại tỉnh">Chuyển đến từ ngoại tỉnh</option>
									<option value=""></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ngày đi, đến:</label>
							<div class="col-sm-2">
								<input name="ngaydccs" type="text" class="form-control" data-mask="date" id="ngaydccs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Nơi đi, đến</label>
							<div class="col-sm-2">
								<input name="noidccs" type="text" class="form-control" id="noidccs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tên file:</label> 						
							<div class="col-sm-10">								
								<input type="file" id="filedkcs" name="filedkcs" class="form-control"/>	
								</br>
								<a href="#" id = "duongdan" style='color:rgb(245, 24, 63)'>Click vào đây để download file về máy</a>
								<input class="form-control" name="filedkcu" style="display:none">
							</div>
							<div class="col-sm-10">
								<input name="idhsbbcs" type="text" class="form-control" style="display:none" id="idhsbbcs">
							</div>
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
					<?php
						if ($madv[3]=="Tỉnh")
							echo "<input type='submit' name='capnhatts' class='btn btn-blue' value = 'Cập nhật'>";	
					?>		
					</form>						
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-dc">
	<div class="modal-dialog">
		<div class="modal-content">				
			<div class="modal-body">				
					<form name="thoaidc" role='form' method='POST' class='form-horizontal form-groups-bordered'>
						<div id = "sTTKK2" class="form-group">							
							<label for="field-3" class="col-sm-2 control-label">Phân loại đi, đến:</label>
							<div class="col-sm-10">								
								<select name="phanloaidck" id="phanloaidck" class="form-control">
									<option value="Chuyển đi nội tỉnh">Chuyển đi nội tỉnh</option>
									<option value="Chuyển đi ngoại tỉnh">Chuyển đi ngoại tỉnh</option>									
									<option value="Chuyển đến từ ngoại tỉnh">Chuyển đến từ ngoại tỉnh</option>
									<option value="" selected = "selected"></option>
								</select>
							</div>
							
							<label for="field-3" class="col-sm-2 control-label">Tên đơn vị đến:</label>
							<div class="col-sm-10">								
								<select name="tenxak" id="tenxak" class="form-control">
									<?php
									$sqltcml = "Select tenxa,tenhuyen From xa inner join huyen on xa.tthuyen=huyen.tthuyen";
									$qrtcml = mysqli_query($con,$sqltcml);			
									while($rtcml=@mysqli_fetch_array($qrtcml))
									{
										echo "<option value=".str_replace(' ','_',$rtcml['tenhuyen']).'-'.str_replace(' ','_',$rtcml['tenxa']).">".$rtcml['tenhuyen'].' - '.$rtcml['tenxa']."</option>";
									}
									?>
									<option value="" selected = "selected"></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ngày đi, đến:</label>
							<div class="col-sm-10">
								<input name="ngaydck" type="text" class="form-control" data-mask="date" id="ngaydck">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Nơi đi, đến</label>
							<div class="col-sm-10">
								<input name="noidck" type="text" class="form-control" id="noidck">
							</div>
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
							<input type="submit" name="dichuyen" class="btn btn-blue" value = "Di chuyển">	
<input name="soghidc" type="text" class="form-control" style="display:none" id="soghidc">							
					</form>						
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal-tim">
	<div class="modal-dialog">
		<div class="modal-content">				
			<div class="modal-body">				
					<form name="thoaitim" role='form' method='POST' class='form-horizontal form-groups-bordered'>
						<div id = "sTTKK2" class="form-group">																					
							<label for="field-3" class="col-sm-2 control-label">Tên đơn vị đến:</label>
							<div class="col-sm-10">								
								<select name="tenxatim" id="tenxatim" class="form-control">
									<?php
									$sqltcml = "Select tenxa,tenhuyen From xa inner join huyen on xa.tthuyen=huyen.tthuyen";
if ($madv[3]=="Xã")
$sqltcml=$sqltcml." Where xa.tenxa='".$madv[0]."'";
else if ($madv[3]=="Huyện")
$sqltcml=$sqltcml." Where huyen.tenhuyen='".$madv[0]."'";
									$qrtcml = mysqli_query($con,$sqltcml);			
									while($rtcml=@mysqli_fetch_array($qrtcml))
									{
										echo "<option value=".str_replace(' ','_',$rtcml['tenhuyen']).'_-_'.str_replace(' ','_',$rtcml['tenxa']).">".$rtcml['tenhuyen'].' - '.$rtcml['tenxa']."</option>";
									}
									?>
									<option value="" selected = "selected"></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Mã hồ sơ bộ:</label>
							<div class="col-sm-10">
								<input name="mabotim" type="text" class="form-control" id="mabotim">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Mã hồ sơ tỉnh</label>
							<div class="col-sm-10">
								<input name="matinhtim" type="text" class="form-control" id="matinhtim">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Họ và tên</label>
							<div class="col-sm-10">
								<input name="hotentim" type="text" class="form-control" id="hotentim">
							</div>
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
							<input type="submit" name="timkiem" class="btn btn-blue" value = "Tìm kiếm">							
					</form>						
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
    window.onsubmit = function() {
        document.thoaics.action = get_action();
		document.thoaimoi.action = get_action1();
		document.thoaitim.action = get_action2();
		document.thoaidc.action = get_action3();
    }

    function get_action() {				
			return "nhaphosoncctim.php?id=" + $('#trang').val() + ">" + $('#idhsbbcs').val();			
    }
	function get_action1() {				
			return "nhaphosoncctim.php?id="+$('#trangm').val()+">0";			
    }
	function get_action2() {				
			return "nhaphosoncctim.php";			
    }
	function get_action3() {				
			return "nhaphosoncc.php?id=1>0";			
    }
</script>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>