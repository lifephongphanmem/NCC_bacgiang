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
function showAjaxModaldchs()
{	
	if ($("#soghi").val() != "")	
		jQuery('#modal-dc').modal('show', {backdrop: 'static'});
	else
		alert("Bạn cần chọn hồ sơ cần di chuyển");	
}
		function sync(){
			alert("Dữ liệu đã được đồng bộ hóa với cổng ASXH");
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
function showAjaxModalserch()
{		
	jQuery('#modal-tim').modal('show', {backdrop: 'static'});	
}
function showAjaxModalserchTN()
{
	jQuery('#modal-timTN').modal('show', {backdrop: 'static'});
}
function showAjaxModalserchDV()
{
	jQuery('#modal-timDV').modal('show', {backdrop: 'static'});
}
function showAjaxModalthannhan()
{
	window.location.href="nhapthannhan.php?id="+$("#soghi").val()+">"+$("#xadc").val()+">"+$("#huyendc").val()+">"+$("#hotendc").val()+">"+$("#xaAPI").val()+">"+$("#huyenAPI").val();
}
function showAjaxModalgiayto()
{		
	window.location.href="nhapgiayto.php?id="+$("#soghi").val();	
}	
function showAjaxModaldc()
{		
	window.location.href="/Reports/Phieudoichieuls.php?id="+$("#soghi").val()+">"+$("#hotendc").val()+">"+$("#ngaysinhdc").val()+">"+$("#nguyenquandc").val()+">"+$("#truquandc").val()+">"+$("#mahsbodc").val()+">"+$("#mahstinhdc").val()+">"+$("#tthsdc").val()+">"+$("#tendv").val()+">"+$("#tenct").val()+">"+$("#quanly").val();	
}	
function showAjaxModaltl()
{		
	window.location.href="/Reports/TrichLucHSLS.php?id="+$("#soghi").val();	
}
</script>

<script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() 
			{  
			   $('table tbody tr').click(function() 
			   { 
					if ($(this).find('td:last').text() == "ncc" && $(this).find('td:nth-child(49)').text()=="")
					{
						$("#soghidc").val($(this).find('td:nth-child(7)').text());
						$("#soghi").val($(this).find('td:nth-child(7)').text());
						$("#hotendc").val($(this).find('td:nth-child(2)').text());
						$("#ngaysinhdc").val($(this).find('td:nth-child(3)').text());
						$("#nguyenquandc").val($(this).find('td:nth-child(5)').text());
						$("#truquandc").val($(this).find('td:nth-child(6)').text());
						$("#mahsbodc").val($(this).find('td:nth-child(35)').text());
						$("#mahstinhdc").val($(this).find('td:nth-child(36)').text());
						$("#tthsdc").val($(this).find('td:nth-child(38)').text());
						$("#xadc").val($(this).find('td:nth-child(47)').text());
						$("#huyendc").val($(this).find('td:nth-child(48)').text());
						$('#thannhan').load('ajax_thannhan.php?id_a=' + $(this).find('td:nth-child(7)').text());
						$('#giayto').load('ajax_giayto.php?id_a=' + $(this).find('td:nth-child(7)').text());
						$("#xaAPI").val($(this).find('td:nth-child(49)').text());
						$("#huyenAPI").val($(this).find('td:nth-child(50)').text());
					}
					else
					{
						$("#soghidc").val($(this).find('td:nth-child(7)').text());
						$("#soghi").val($(this).find('td:nth-child(7)').text());
						$("#hotendc").val($(this).find('td:nth-child(2)').text());
						$("#ngaysinhdc").val($(this).find('td:nth-child(3)').text());
						$("#nguyenquandc").val($(this).find('td:nth-child(5)').text());
						$("#truquandc").val($(this).find('td:nth-child(6)').text());
						$("#mahsbodc").val($(this).find('td:nth-child(35)').text());
						$("#mahstinhdc").val($(this).find('td:nth-child(36)').text());
						$("#tthsdc").val($(this).find('td:nth-child(38)').text());
						$("#xadc").val($(this).find('td:nth-child(47)').text());
						$("#huyendc").val($(this).find('td:nth-child(48)').text());
						$('#thannhan').load('ajax_thannhan.php?id_a=' + $(this).find('td:nth-child(7)').text());
						$('#giayto').load('ajax_giayto.php?id_a=' + $(this).find('td:nth-child(7)').text());
						$("#xaAPI").val($(this).find('td:nth-child(49)').text());
						$("#huyenAPI").val($(this).find('td:nth-child(50)').text());
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
					if ($(this).find('td:last').text() == "ncc" )
					{
						//alert($(this).find('td:nth-child(39)').text());
						jQuery('#modal-7').modal('show', {backdrop: 'static'});
						$("#hotencs").val($(this).find('td:nth-child(2)').text());	
						$("#ngaysinhcs").val($(this).find('td:nth-child(3)').text());
						$("#gioitinhcs").val($(this).find('td:nth-child(4)').text());
						$("#nguyenquancs").val($(this).find('td:nth-child(5)').text());
						$("#truquancs").val($(this).find('td:nth-child(6)').text());
						$("#ngaynhapngucs").val($(this).find('td:nth-child(8)').text());
						$("#capbaccs").val($(this).find('td:nth-child(9)').text());
						$("#chucvucs").val($(this).find('td:nth-child(10)').text());
						$("#coquandvcs").val($(this).find('td:nth-child(11)').text());
						$("#loaidoituongcs").val($(this).find('td:nth-child(12)').text());
						$("#ngayhisinhcs").val($(this).find('td:nth-child(13)').text());
						$("#noihisinhcs").val($(this).find('td:nth-child(14)').text());
						$("#donvihisinhcs").val($(this).find('td:nth-child(15)').text());
						$("#truonghophisinhcs").val($(this).find('td:nth-child(16)').text());
						$("#noiantangcs").val($(this).find('td:nth-child(17)').text());
						$("#giaybaotucs").val($(this).find('td:nth-child(18)').text());
						$("#ngaybaotucs").val($(this).find('td:nth-child(19)').text());
						$("#donvithongbaocs").val($(this).find('td:nth-child(20)').text());
						$("#bangtoquocghicongcs").val($(this).find('td:nth-child(21)').text());
						$("#thoikycs").val($(this).find('td:nth-child(22)').text());
						$("#loaimolietsycs").val($(this).find('td:nth-child(23)').text());
						$("#tennghiatrangcs").val($(this).find('td:nth-child(24)').text());
						$("#somocs").val($(this).find('td:nth-child(25)').text());
						$("#hangcs").val($(this).find('td:nth-child(26)').text());
						$("#khucs").val($(this).find('td:nth-child(27)').text());
						$("#locs").val($(this).find('td:nth-child(28)').text());
						$("#thongtindivatcs").val($(this).find('td:nth-child(29)').text());
						$("#donviquytapcs").val($(this).find('td:nth-child(30)').text());
						$("#diadiemquytapcs").val($(this).find('td:nth-child(31)').text());
						$("#nguoidichuyenmocs").val($(this).find('td:nth-child(32)').text());
						$("#diaphuongantangkhidichuyencs").val($(this).find('td:nth-child(33)').text());
						$("#loaimocs").val($(this).find('td:nth-child(34)').text());
						$("#mahsbocs").val($(this).find('td:nth-child(35)').text());
						$("#mahstinhcs").val($(this).find('td:nth-child(36)').text());
						$("#bidanhcs").val($(this).find('td:nth-child(37)').text());
						$("#idhslscs").val($(this).find('td:nth-child(7)').text());
						$("#fileanhcu").val($(this).find('td:nth-child(39)').text());
						$("#mochccs").val($(this).find('td:nth-child(40)').text());
						$("#ngaychuyendencs").val($(this).find('td:nth-child(41)').text());
						$("#thongtincs").val($(this).find('td:nth-child(42)').text());
						//$("#dd").src = $(this).find('td:nth-child(39)').text();
					if ($(this).find('td:nth-child(43)').text()=="0000-00-00")
						$("#ngaydccs").val("");
					else	
						$("#ngaydccs").val(ngaythang($(this).find('td:nth-child(43)').text()));
						$("#noidccs").val($(this).find('td:nth-child(44)').text());
						$("#phanloaidccs").val($(this).find('td:nth-child(45)').text());
						document.getElementById("dd").src = $(this).find('td:nth-child(39)').text();
						var ddfile=$(this).find('td:nth-child(46)').text().lastIndexOf('/');
						document.getElementById("duongdan").href = "download.php?id=/data/upload"+$(this).find('td:nth-child(46)').text().substr(ddfile);
						if ($(this).find('td:nth-child(46)').text()=="")
							document.getElementById("duongdan").style = "display:none";
						else
							document.getElementById("duongdan").style = "color:rgb(245, 24, 63);display:show";
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
		window.location.href="nhaphosoncc.php?id="+this.value+">0";
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
	if ($madv[3]=="Tỉnh" && $_POST['hotencs'] != "" && $_POST['ngaysinhcs'] != "" && $_POST['nguyenquancs'] != "" && $_POST['truquancs'] != "")
	{
		$fileanh ="";	
		$tmp_name = $_FILES['fileacs']['tmp_name'];
		if($tmp_name != "")
		{				
			$path_parts = pathinfo($_FILES['fileacs']['name']);
			$fileup = $_POST['mahstinhcs']."_".$path_parts['filename'].".".$path_parts['extension'];	
			move_uploaded_file($_FILES['fileacs']['tmp_name'],"$_SERVER[DOCUMENT_ROOT]/data/upload/".$fileup);
			$fileanh="/data/upload/".$fileup;				
		}
		// file đính kèm
			$filedkurl1 ="";
			$tmp_name1 = $_FILES['filedkcs']['tmp_name'];
			if($tmp_name1 != "")
			{				
				$path_parts1 = pathinfo($_FILES['filedkcs']['name']);
				$fileup1 = $_POST['mahstinhcs']."_".$path_parts1['filename'].".".$path_parts1['extension'];	
				move_uploaded_file($_FILES['filedkcs']['tmp_name'],"$_SERVER[DOCUMENT_ROOT]/data/upload/".$fileup1);
				$filedkurl1="$_SERVER[DOCUMENT_ROOT]/data/upload/".$fileup1;				
			}
		// insert
		$gioitinhAPI = gioitinhAPI($_POST['gioitinhcs']);
		$sqlup = "Update hosols Set mahsbo='".$_POST['mahsbocs']."', mahstinh='".$_POST['mahstinhcs']."', hoten='".$_POST['hotencs']."', ngaysinh='".$_POST['ngaysinhcs']."', ";
		$sqlup = $sqlup."nguyenquan='".$_POST['nguyenquancs']."', truquan='".$_POST['truquancs']."', gioitinh='".$_POST['gioitinhcs']."', ngaynhapngu='".$_POST['ngaynhapngucs']."', ";
		$sqlup = $sqlup."chucvu='".$_POST['chucvucs']."', capbac='".$_POST['capbaccs']."', coquandv='".$_POST['coquandvcs']."', bidanh='".$_POST['bidanhcs']."', ";
		$sqlup = $sqlup."loaidoituong='".$_POST['loaidoituongcs']."', ngayhisinh='".$_POST['ngayhisinhcs']."', noihisinh='".$_POST['noihisinhcs']."', ";
		$sqlup = $sqlup."donvihisinh='".$_POST['donvihisinhcs']."', truonghophisinh='".$_POST['truonghophisinhcs']."', noiantang='".$_POST['noiantangcs']."', ";
		$sqlup = $sqlup."giaybaotu='".$_POST['giaybaotucs']."', ngaybaotu='".$_POST['ngaybaotucs']."', donvithongbao='".$_POST['donvithongbaocs']."', ";
		$sqlup = $sqlup."bangtoquocghicong='".$_POST['bangtoquocghicongcs']."', thoiky='".$_POST['thoikycs']."', loaimolietsy='".$_POST['loaimolietsycs']."', ";
		$sqlup = $sqlup."tennghiatrang='".$_POST['tennghiatrangcs']."', somo='".$_POST['somocs']."', hang='".$_POST['hangcs']."', khu='".$_POST['khucs']."', ";
		$sqlup = $sqlup."lo='".$_POST['locs']."', thongtindivat='".$_POST['thongtindivatcs']."', plquytap='".$_POST['donviquytapcs']."', diadiemquytap='".$_POST['diadiemquytapcs']."', ";
		$sqlup = $sqlup."nguoidichuyenmo='".$_POST['nguoidichuyenmocs']."', diaphuongantangkhidichuyen='".$_POST['diaphuongantangkhidichuyencs']."', ";
		$sqlup = $sqlup."loaimo='".$_POST['loaimocs']."',mochc='".$_POST['mochccs']."',ngaychuyenden='".$_POST['ngaychuyendencs']."',thongtin='".$_POST['thongtincs']."', ";
		$sqlup = $sqlup."ngaydc='".doingay1($_POST['ngaydccs'])."', noidc='".$_POST['noidccs']."', phanloaidc='".$_POST['phanloaidccs']."',gioitinhAPI=$gioitinhAPI";
		if ($_POST['fileanhcu'] != $fileanh)
		{
			if ($fileanh != "")
				$sqlup = $sqlup.", filea='".$fileanh."'";
		}
		if ($filedkurl1 != "")
			$sqlup = $sqlup.", filedk='".$filedkurl1."'";			
		$sqlup = $sqlup." where idhsls = ".$_POST['idhslscs'];		
		$kq=mysqli_query($con,$sqlup);
		//API
		$hoten = $namsinh = $dantoc= $tongiao = "";
		$maxaAPI = 0;
		$mahuyenAPI = 0;
		$sqltt = "Select hoten,ngaysinh,maxaAPI,mahuyenAPI from hosols WHERE idhsls = ".$_POST['idhslscs'];
		$qrsqltt = mysqli_query($con,$sqltt);
		while ($tt = mysqli_fetch_array($qrsqltt))
		{
			$hoten = $tt['hoten'];
			$namsinh = $tt['ngaysinh'];
			$dantoc = "0";
			$tongiao = "00";
			$maxaAPI = $tt['maxaAPI'];
			$mahuyenAPI = $tt['mahuyenAPI'];
		}
		$data = array(
			"id_doituong"=> $_POST['idhslscs'],
			"hoten"=> $hoten,
			"namsinh"=> $namsinh,
			"gioitinh"=> 3,
			"dantoc"=> $dantoc,
			"tongiao"=> $tongiao,
			"quocgia"=> "VN",
			"xa_nguyenquan"=> $maxaAPI,
			"huyen_nguyenquan"=> $mahuyenAPI,
			"tinh_nguyenquan"=> "26",
			"xa_noio"=> $maxaAPI,
			"huyen_noio"=> $mahuyenAPI,
			"tinh_noio"=> "26",
			"doituong"=> "lietsy",
		);
		//$data_string = json_encode($data);
		//print_r($data_string);
		callAPI('POST','http://ansinhxahoi.bacgiang.gov.vn/api/asxh/update',$data);
	}
}
if(isset($_POST["themmoi"]))
{	
	if ($madv[3]=="Tỉnh" && $_POST['xahuyen'] != '' && $_POST['hoten'] != "" && $_POST['ngaysinh'] != "" && $_POST['nguyenquan'] != "" && $_POST['truquan'] != "")
	{
		$xh=explode('-',$_POST['xahuyen']);
		$sqltths="Select max(ttls) as ttls From hethongdv where tendonvi='".str_replace('_',' ',$xh[1])."' and tencaptren='".str_replace('_',' ',$xh[0])."'";
		//echo $sqltths;
		$sql1=mysqli_query($con,$sqltths);$sotths=0;	
		while($row=mysqli_fetch_array($sql1)){	
			$sotths=$row['ttls'];
		}
		$sotths=$sotths+1;
		// file ảnh
		$fileanh ="";	
		$tmp_name = $_FILES['filea']['tmp_name'];
		if($tmp_name != "")
		{				
			$path_parts = pathinfo($_FILES['filea']['name']);
			$fileup = $_POST['mahstinh']."_".$path_parts['filename'].".".$path_parts['extension'];	
			move_uploaded_file($_FILES['filea']['tmp_name'],"$_SERVER[DOCUMENT_ROOT]/data/upload/".$fileup);
			$fileanh="/data/upload/".$fileup;				
		}
		// file đính kèm
			$filedkurl1 ="";
			$tmp_name1 = $_FILES['filedk']['tmp_name'];
			if($tmp_name1 != "")
			{				
				$path_parts1 = pathinfo($_FILES['filedk']['name']);
				$fileup1 = $_POST['mahstinh']."_".$path_parts['filename'].".".$path_parts['extension'];	
				move_uploaded_file($_FILES['filedk']['tmp_name'],"$_SERVER[DOCUMENT_ROOT]/data/upload/".$fileup1);
				$filedkurl1="$_SERVER[DOCUMENT_ROOT]/data/upload/".$fileup1;				
			}
		// insert
		$gioitinhAPI = gioitinhAPI($_POST['gioitinh']);
		$sqlup = "Insert into hosols Set mahsbo='".$_POST['mahsbo']."', mahstinh='".$_POST['mahstinh']."', hoten='".$_POST['hoten']."', ngaysinh='".$_POST['ngaysinh']."', ";
		$sqlup = $sqlup."nguyenquan='".$_POST['nguyenquan']."', truquan='".$_POST['truquan']."', gioitinh='".$_POST['gioitinh']."', ngaynhapngu='".$_POST['ngaynhapngu']."', ";
		$sqlup = $sqlup."chucvu='".$_POST['chucvu']."', capbac='".$_POST['capbac']."', coquandv='".$_POST['coquandv']."', bidanh='".$_POST['bidanh']."', ";
		$sqlup = $sqlup."loaidoituong='".$_POST['loaidoituong']."', ngayhisinh='".$_POST['ngayhisinh']."', noihisinh='".$_POST['noihisinh']."', ";
		$sqlup = $sqlup."donvihisinh='".$_POST['donvihisinh']."', truonghophisinh='".$_POST['truonghophisinh']."', noiantang='".$_POST['noiantang']."', ";
		$sqlup = $sqlup."giaybaotu='".$_POST['giaybaotu']."', ngaybaotu='".$_POST['ngaybaotu']."', donvithongbao='".$_POST['donvithongbao']."', ";
		$sqlup = $sqlup."bangtoquocghicong='".$_POST['bangtoquocghicong']."', thoiky='".$_POST['thoiky']."', loaimolietsy='".$_POST['loaimolietsy']."', ";
		$sqlup = $sqlup."tennghiatrang='".$_POST['tennghiatrang']."', somo='".$_POST['somo']."', hang='".$_POST['hang']."', khu='".$_POST['khu']."', ";
		$sqlup = $sqlup."lo='".$_POST['lo']."', thongtindivat='".$_POST['thongtindivat']."', plquytap='".$_POST['donviquytap']."', diadiemquytap='".$_POST['diadiemquytap']."', ";
		$sqlup = $sqlup."nguoidichuyenmo='".$_POST['nguoidichuyenmo']."', diaphuongantangkhidichuyen='".$_POST['diaphuongantangkhidichuyen']."', ";
		$sqlup = $sqlup."loaimo='".$_POST['loaimo']."', mochc='".$_POST['mochc']."',ngaychuyenden='".$_POST['ngaychuyenden']."',thongtin='".$_POST['thongtin']."', ";
		$sqlup = $sqlup."ngaydc='".doingay1($_POST['ngaydc'])."', noidc='".$_POST['noidc']."', phanloaidc='".$_POST['phanloaidc']."', tths=$sotths, xa='".str_replace('_',' ',$xh[1])."', huyen='".str_replace('_',' ',$xh[0])."'";
		$sqlup = $sqlup.",gioitinhAPI=$gioitinhAPI, maxaAPI='".str_replace('_',' ',$xh[2])."', mahuyenAPI='".str_replace('_',' ',$xh[3])."'";
		if ($fileanh != "")
			$sqlup = $sqlup.", filea='".$fileanh."'";
		if ($filedkurl1 != "")
			$sqlup = $sqlup.", filedk='".$filedkurl1."'";
		//echo $sqlup;	
		$kq=mysqli_query($con,$sqlup);
		$sqluptt="Update hethongdv Set ttls=$sotths,tongls=tongls+1 where tendonvi='".str_replace('_',' ',$xh[1])."' and tencaptren='".str_replace('_',' ',$xh[0])."'";
		$kq1=mysqli_query($con,$sqluptt);
		$sqluptt1="Update hethongdv Set tongls=tongls+1 where tendonvi='".$madv[0]."' and tencaptren='".$madv[1]."'";		
		$kq2=mysqli_query($con,$sqluptt1);
		//$kq=mysqli_query($con,$sqlup);
		//API
		$result = mysqli_query($con,"select MAX(idhsls) FROM hosols");
		while ($row = mysqli_fetch_array($result)){
			$highest_id = $row[0];
		}

		$data = array(
			"id_doituong"=> $highest_id,
			"hoten"=> $_POST['hoten'],
			"namsinh"=> $_POST['ngaysinh'],
			"gioitinh"=> $gioitinhAPI,
			"dantoc"=> "0",
			"tongiao"=> "00",
			"quocgia"=> "VN",
			"xa_nguyenquan"=> str_replace('_',' ',$xh[2]),
			"huyen_nguyenquan"=> str_replace('_',' ',$xh[3]),
			"tinh_nguyenquan"=> "26",
			"xa_noio"=> str_replace('_',' ',$xh[2]),
			"huyen_noio"=> str_replace('_',' ',$xh[3]),
			"tinh_noio"=> "26",
			"doituong"=> "lietsy",
		);
		//$data_string = json_encode($data);
		//print_r($data_string);
		callAPI('POST','http://ansinhxahoi.bacgiang.gov.vn/api/asxh/insert',$data);
	}
}
if (isset($_POST["dichuyen"]))
{
	if ($madv[3]=="Tỉnh")
	{
		$sqlup = "Update hosols Set ngaydc='".doingay1($_POST['ngaydck'])."',noidc='".$_POST['noidck']."',phanloaidc='".$_POST['phanloaidck']."'";
		if ($_POST['phanloaidck'] == "Chuyển đi nội tỉnh")
		{
			if ($_POST['tenxak'] != "")
			{
				//echo $_POST['tenxak'];		
				$xahuyen=explode('-',$_POST['tenxak']);
				$sqltths="Select max(ttls) as ttls From hethongdv where tendonvi='".str_replace('_',' ',$xahuyen[1])."' and tencaptren='".str_replace('_',' ',$xahuyen[0])."'";
				$sql1=mysqli_query($con,$sqltths);$sotths=0;	
				while($row=mysqli_fetch_array($sql1)){	
					$sotths=$row['ttls'];
				}
				$sotths=$sotths+1;
				$sqlup = $sqlup.",xa='".str_replace('_',' ',$xahuyen[1])."',huyen='".str_replace('_',' ',$xahuyen[0])."',tths=$sotths where idhsls=".$_POST['soghidc'];
				$sqluptt="Update hethongdv Set ttls=$sotths,tongls=tongls+1 where tendonvi='".str_replace('_',' ',$xahuyen[1])."' and tencaptren='".str_replace('_',' ',$xahuyen[0])."'";
				$kq1=mysqli_query($con,$sqluptt);
				//$sqluptt1="Update hethongdv Set tongls=tongls+1 where tendonvi='".$madv[0]."' and tencaptren='".$madv[1]."'";
				//$kq2=mysqli_query($con,$sqluptt1);
			}
		}
		//echo $sqlup;
		$kq=mysqli_query($con,$sqlup);
	}
}		
?>

 <div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Hồ sơ liệt sĩ <span style = "float:right">Tổng hồ sơ: <?php echo $madv[14];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></h4>
		</div>
			<div class="modal-body">
<form role='form' method='POST' class='form-horizontal form-groups-bordered'>
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModalthannhan();" class='btn btn-success'>
			<i class='entypo-pencil'></i>Thân nhân
		</a>
	<?php
	if ($madv[3]=="Tỉnh")
{
echo "<a style = 'float:right; background-color:rgb(83, 181, 166)' onclick='showAjaxModalgiayto();' class='btn btn-success'>
			Giấy tờ
		</a>";
		echo "<a style = 'float:right; background-color:rgb(83, 181, 166)' onclick='showAjaxModalhs();' class='btn btn-success'>
			<i class='entypo-new'></i>Thêm hồ sơ
		</a>";		
		echo "<a style = 'float:right; background-color:rgb(83, 181, 166)' onclick='showAjaxModaldc();' class='btn btn-success'>
			<i class='entypo-print'></i>Phiếu
		</a>";
		echo "<a style = 'float:right; background-color:rgb(83, 181, 166)' onclick='showAjaxModaldchs();' class='btn btn-success'>
			Di chuyển
		</a>";
	echo "<a style = 'float:right; background-color:rgb(83, 181, 166)' onclick='showAjaxModaltl();' class='btn btn-success'>
			<i class='entypo-print'></i>Trích lục
</a>";
	echo "<a style = 'float:right; background-color:rgb(83, 181, 166)' onclick='showAjaxModalserchTN();' class='btn btn-success'>
TK theo TN
</a>";
	echo "<a style = 'float:right; background-color:rgb(83, 181, 166)' onclick='showAjaxModalserchDV();' class='btn btn-success'>
TK theo ĐV
</a>";
	echo "<a style = 'float:right; background-color:rgb(83, 181, 166)' onclick='sync();' class='btn btn-success'>
			Kiểm tra đồng bộ
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
		<input name="xadc" type="text" class="form-control" style="display:none" id="xadc">
		<input name="huyendc" type="text" class="form-control" style="display:none" id="huyendc">
		<input name="huyenAPI" type="text" class="form-control" style="display:none" id="huyenAPI">
		<input name="xaAPI" type="text" class="form-control" style="display:none" id="xaAPI">
		<input name="tendv" type="text" class="form-control" style="display:none" id="tendv" value="<?php echo $madv[0]; ?>">
		<input name="tenct" type="text" class="form-control" style="display:none" id="tenct" value="<?php echo $madv[1]; ?>">
		<input name="quanly" type="text" class="form-control" style="display:none" id="quanly" value="<?php echo $madv[3]; ?>">
		<label class='col-sm-2'>Trang số:</label>
<?php
$ahs = explode('>',$_GET['id']);
$j = $ahs[0];$kq=0;$sotr=0;$sotr= (int)($madv[14]/5);$sotrthieu=$madv[14]/5;
if ($sotrthieu-$sotr >0)
	$sotr=$sotr+1;
$sotr=$sotr+1;
		echo "<div  class='col-sm-1' style='margin-top:-7px'>";
			echo "<select style='margin-left:-90px;' name='trang' class='form-control' id='trang'>";
					
	// abc	
		for($n=0;$n<$sotr;$n++)
		{
						
				$kq = $kq + 1;
				if ($j == $kq)	
					echo "<option selected='selected' value='$kq'>$kq</option>";	
				else
					echo "<option value='$kq'>$kq</option>";	
			
		}
		echo "</select>";
		echo "</div>";
	// abc
	$ls =  array(array("A","B","C","D","E",0,"1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40","41"));		
	$cs=0;
	$sql="";
	if ($madv[3]=="Tỉnh")
		$sql="select * from hosols LIMIT ".(5*($j-1)).",5";
	else if ($madv[3]=="Huyện")
		$sql="select * from hosols where huyen='$madv[0]' LIMIT ".(5*($j-1)).",5";
	else if ($madv[3]=="Xã")
		$sql="select * from hosols where xa='$madv[0]' and huyen='$madv[1]' LIMIT ".(5*($j-1)).",5";	
	$sql1=mysqli_query($con,$sql);		
	while($row=mysqli_fetch_array($sql1)){
		$ls[$cs][0] = $row['hoten'];
		$ls[$cs][1] = $row['ngaysinh'];
		$ls[$cs][2] = $row['gioitinh'];
		$ls[$cs][3] = $row['nguyenquan'];
		$ls[$cs][4] = $row['truquan'];
		$ls[$cs][5] = $row['idhsls'];
		$ls[$cs][6] = $row['ngaynhapngu'];
		$ls[$cs][7] = $row['capbac'];
		$ls[$cs][8] = $row['chucvu'];
		$ls[$cs][9] = $row['coquandv'];
		$ls[$cs][10] = $row['loaidoituong'];
		$ls[$cs][11] = $row['ngayhisinh'];
		$ls[$cs][12] = $row['noihisinh'];
		$ls[$cs][13] = $row['donvihisinh'];
		$ls[$cs][14] = $row['truonghophisinh'];
		$ls[$cs][15] = $row['noiantang'];
		$ls[$cs][16] = $row['giaybaotu'];
		$ls[$cs][17] = $row['ngaybaotu'];
		$ls[$cs][18] = $row['donvithongbao'];
		$ls[$cs][19] = $row['bangtoquocghicong'];
		$ls[$cs][20] = $row['thoiky'];
		$ls[$cs][21] = $row['loaimolietsy'];
		$ls[$cs][22] = $row['tennghiatrang'];
		$ls[$cs][23] = $row['somo'];
		$ls[$cs][24] = $row['hang'];
		$ls[$cs][25] = $row['khu'];
		$ls[$cs][26] = $row['lo'];
		$ls[$cs][27] = $row['thongtindivat'];
		$ls[$cs][28] = $row['plquytap'];
		$ls[$cs][29] = $row['diadiemquytap'];
		$ls[$cs][30] = $row['nguoidichuyenmo'];
		$ls[$cs][31] = $row['diaphuongantangkhidichuyen'];
		$ls[$cs][32] = $row['loaimo'];
		$ls[$cs][33] = $row['mahsbo'];
		$ls[$cs][34] = $row['mahstinh'];
		$ls[$cs][35] = $row['bidanh'];
		$ls[$cs][36] = $row['tths'];
		$ls[$cs][37] = $row['filea'];
		$ls[$cs][38] = $row['mochc'];
		$ls[$cs][39] = $row['ngaychuyenden'];
		$ls[$cs][40] = $row['thongtin'];
		$ls[$cs][41] = $row['ngaydc'];
		$ls[$cs][42] = $row['noidc'];
		$ls[$cs][43] = $row['phanloaidc'];
		$ls[$cs][44] = $row['filedk'];
		$ls[$cs][45] = $row['xa'];
		$ls[$cs][46] = $row['huyen'];
		$ls[$cs][47] = $row['maxaAPI'];
		$ls[$cs][48] = $row['mahuyenAPI'];
		$cs = $cs + 1;	
	}
	//if ($j == 0)
		//echo "<option selected='selected' value='$kq1'>$kq1</option>";		
			
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
					<th style="background-color:rgb(54, 169, 224); display:none" width="30%"><strong>IDhsls</strong></th>
					<th style="background-color:rgb(54, 169, 224); display:none" width="30%"><strong>ngaynhapngu</strong></th>
					<th style="background-color:rgb(54, 169, 224); display:none" width="30%"><strong>capbac</strong></th>
					<th style="background-color:rgb(54, 169, 224); display:none" width="30%"><strong>chucvu</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>donvi</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>loaidoituong</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ngayhisinh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>noihisinh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>donvihisinh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>truonghophisinh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>noiantang</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>giaybaotu</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ngaybaotu</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>donvibaotu</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>bangtoquoc</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>thoiky</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>moquanly</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>nghiatrang</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>somo</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>hang</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>khu</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>lo</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>divat</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>quytap</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>daidiemquytap</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>nguoidichuyen</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>diaphuongantnag</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>thongtinmo</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>mahsbo</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>mahstinh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>bidanh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>tths</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>filea</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>mochc</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ngaychuyenden</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>thongtin</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>thongtin</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>thongtin</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>thongtin</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>thongtin</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>xa</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>huyen</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>maxaAPI</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>mahuyenAPI</strong></th>
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
			for($i=0;$i<$cs;$i++)
			{
				$a = $i + 1;
				if ($i < $cs)
				{					
				echo "<tr>";
					echo "<td>".$ls[$i][36]."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][0]."</td>";
					echo "<td>".$ls[$i][1]."</td>";
					echo "<td>".$ls[$i][2]."</td>";
					echo "<td style='text-align: left;'>".catchuoi($ls[$i][3])."</td>";
					echo "<td style='text-align: left;'>".catchuoi($ls[$i][4])."</td>";					
					echo "<td style='text-align: left; display:none'>".$ls[$i][5]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][6]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][7]."</td>";
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
					echo "<td style='text-align: left; display:none'>".$ls[$i][38]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][39]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][40]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][41]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][42]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][43]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][44]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][45]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][46]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][47]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][48]."</td>";
					if ($madv[3]=="Tỉnh")
					{
						echo"<td>					
							<a href=\"xoa.php?id=".$ls[$i][5]."\"  title='Xóa hố sơ và thông tin liên quan' onclick=\"return confirm('Bạn muốn xóa hố sơ này?')\" class='btn btn-red '>
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
					<th style="background-color:rgb(54, 169, 224);" width="20%"><strong style='color:rgb(255, 255, 225)'>Họ và tên</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Năm sinh</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="6%"><strong style='color:rgb(255, 255, 225)'>Giới tính</strong></th>
					<th style="background-color:rgb(54, 169, 224);" width="15%"><strong style='color:rgb(255, 255, 225)'>Quan hệ</strong></th>	
					<th style="background-color:rgb(54, 169, 224);" width="45%"><strong style='color:rgb(255, 255, 225)'>Trú Quán</strong></th>						
				</tr>				
			</thead>
	<?php		
	$ihs = $ahs[1];	
	$sqltn = "Select * From thannhanls Where idhsls = $ihs";	
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
			echo "</tbody>";
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
		$sqlgt = "Select * From giaytols Where idhsls = $ihs";	
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
			echo "</tbody>";
	?>		
		</table>
	</div>
</form>	

  </div>
			</div>		
	</div>
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
								<input name="mahsbo" type="text" class="form-control" id="mahsbo">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Mã hồ sơ tỉnh:</label>
							<div class="col-sm-2">
								<input name="mahstinh" type="text" class="form-control" id="mahstinh">
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
								<input name="nguyenquan" type="text" class="form-control" id="nguyenquan">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Trú quán<span style="padding-left:0px; color:red;">*</span>:</label>
							<div class="col-sm-7">
								<input name="truquan" type="text" class="form-control" id="truquan">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ngày nhập ngũ:</label>
							<div class="col-sm-3">
								<input name="ngaynhapngu" type="text" class="form-control" id="ngaynhapngu">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Cấp bậc:</label>
							<div class="col-sm-2">
								<input name="capbac" type="text" class="form-control" id="capbac">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Chức vụ:</label>
							<div class="col-sm-3">
								<input name="chucvu" type="text" class="form-control" id="chucvu">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Cơ quan đơn vị:</label>
							<div class="col-sm-2">
								<input name="coquandv" type="text" class="form-control" id="coquandv">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Loại đối tượng:</label>
							<div class="col-sm-2">																								
								<select name="loaidoituong" id="loaidoituong" class="form-control">
									<option value="1. Bộ đội">1. Bộ đội</option>
									<option value="2. Công an">2. Công an</option>
									<option value="3. Chuyên gia">3. Chuyên gia</option>
									<option value="4. Dân quân, Du kích">4. Dân quân, Du kích</option>
									<option value="5. Thanh niên xung phong">5. Thanh niên xung phong</option>
									<option value="6. Thương binh chết do vết thương tái phát">6. Thương binh chết do vết thương tái phát</option>
									<option value="7. Khác">7. Khác</option>
									<option value=""></option>
								</select>							
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ngày hi sinh:</label>
							<div class="col-sm-2">
								<input name="ngayhisinh" type="text" class="form-control" id="ngayhisinh">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Nơi hi sinh:</label>
							<div class="col-sm-2">
								<input name="noihisinh" type="text" class="form-control" id="noihisinh">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Đơn vị hi sinh:</label>
							<div class="col-sm-2">
								<input name="donvihisinh" type="text" class="form-control" id="donvihisinh">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Trường hợp hi sinh:</label>
							<div class="col-sm-2">
								<input name="truonghophisinh" type="text" class="form-control" id="truonghophisinh">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Nơi an táng:</label>
							<div class="col-sm-2">
								<input name="noiantang" type="text" class="form-control" id="noiantang">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Giấy báo tử:</label>
							<div class="col-sm-2">
								<input name="giaybaotu" type="text" class="form-control" id="giaybaotu">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ngày báo tử:</label>
							<div class="col-sm-2">
								<input name="ngaybaotu" type="text" class="form-control" id="ngaybaotu">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Đơn vị báo tử:</label>
							<div class="col-sm-2">
								<input name="donvithongbao" type="text" class="form-control" id="donvithongbao">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Bằng tổ quốc:</label>
							<div class="col-sm-6">
								<input name="bangtoquocghicong" type="text" class="form-control" id="bangtoquocghicong">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Thời kỳ</label>
							<div class="col-sm-2">								
								<select name="thoiky" id="thoiky" class="form-control">
									<option value="Chống mỹ">Chống mỹ</option>
									<option value="Chống pháp">Chống pháp</option>
									<option value="Khác">Khác</option>
									<option value="KXD">Không xác định</option>
									<option value="all" selected>Tất cả</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Thông tin mộ:</label>
							<div class="col-sm-2">								
								<select name="loaimolietsy" id="loaimolietsy" class="form-control">
									<option value="1. Có thông tin phần mộ">1. Có thông tin phần mộ</option>
									<option value="2. Chưa có thông tin phần mộ">2. Chưa có thông tin phần mộ</option>
									<option value=""></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Nghĩa trang nội tỉnh:</label>
							<div class="col-sm-6">
								<input name="tennghiatrang" type="text" class="form-control" id="tennghiatrang">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Nơi hy sinh:</label>
							<div class="col-sm-2">								
								<select name="somo" id="somo" class="form-control">
									<option value="1. Trong nước">1. Trong nước</option>
									<option value="2. Lào">2. Lào</option>
									<option value="3. Campuchia">3. Campuchia</option>
									<option value="4. Chưa xác định">4. Chưa xác định</option>
									<option value="5. Khác">5. Khác</option>
									<option value=""></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Cụ thể khác:</label>
							<div class="col-sm-2">
								<input name="hang" type="text" class="form-control" id="hang">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Nơi hy sinh GĐCC:</label>
							<div class="col-sm-2">
								<input name="khu" type="text" class="form-control" id="khu">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Nơi an táng:</label>
							<div class="col-sm-2">								
								<select name="lo" id="lo" class="form-control">
									<option value="1. Trong nước">1. Trong nước</option>
									<option value="2. Lào">2. Lào</option>
									<option value="3. Campuchia">3. Campuchia</option>
									<option value="4. Chưa xác định">4. Chưa xác định</option>
									<option value="5. Khác">5. Khác</option>
									<option value=""></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Nơi an táng GĐCC:</label>
							<div class="col-sm-6">
								<input name="thongtindivat" type="text" class="form-control" id="thongtindivat">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Có người thờ cúng:</label>
							<div class="col-sm-2">								
								<select name="donviquytap" id="donviquytap" class="form-control">
									<option value="1. Có">1. Có</option>
									<option value="2. Không">2. Không</option>
									<option value=""></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Vị trí mộ:</label>
							<div class="col-sm-6">								
								<select name="diadiemquytap" id="diadiemquytap" class="form-control">
									<option value="1. Nằm trong nghĩa trang Liệt sĩ">1. Nằm trong nghĩa trang Liệt sĩ</option>
									<option value="2. Nằm trong nghĩa trang gia đình">2. Nằm trong nghĩa trang gia đình</option>
									<option value=""></option>
								</select>
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
							<label for="field-3" class="col-sm-2 control-label">KP xây dựng mộ:</label>
							<div class="col-sm-2">								
								<select name="loaimo" id="loaimo" class="form-control">
									<option value="Đã cấp">Đã cấp</option>									
									<option value="" selected = "selected"></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Theo quyết định:</label>
							<div class="col-sm-6">
								<input name="nguoidichuyenmo" type="text" class="form-control" id="nguoidichuyenmo">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tên xã:</label>
							<div class="col-sm-10">								
								<select name="xahuyen" id="xahuyen" class="form-control">
									<?php
									$sqltcml = "Select tenxa,tenhuyen,xa.mahuyen,maAPI From xa inner join huyen on xa.tthuyen=huyen.tthuyen";
									$qrtcml = mysqli_query($con,$sqltcml);
									while($rtcml=@mysqli_fetch_array($qrtcml))
									{
										echo "<option value=".str_replace(' ','_',$rtcml['tenhuyen']).'-'.str_replace(' ','_',$rtcml['tenxa']).'-'.$rtcml['maAPI'].'-'.$rtcml['mahuyen'].">".$rtcml['tenhuyen'].' - '.$rtcml['tenxa']."</option>";
									}
									?>
									<option value=""></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tên file:</label>
							<div class="col-sm-10">
								<input type="file" id="filedk" name="filedk" class="form-control"/>											
							</div>
							<label for="field-3" class="col-sm-2 control-label" style="display:none">Ngày di chuyển:</label>
							<div class="col-sm-2">
								<input name="ngaychuyenden" type="text" class="form-control" style="display:none" id="ngaychuyenden">
							</div>
							<label for="field-3" class="col-sm-2 control-label" style="display:none">Đơn vị, cá nhân dc:</label>
							<div class="col-sm-2">
								<input name="nguoidichuyenmo1" type="text" class="form-control" style="display:none" id="nguoidichuyenmo1">
							</div>
							<label for="field-3" class="col-sm-2 control-label" style="display:none">Địa phương an táng:</label>
							<div class="col-sm-6">
								<input name="diaphuongantangkhidichuyen" type="text" class="form-control" style="display:none" id="diaphuongantangkhidichuyen">
							</div>
							<label for="field-3" class="col-sm-2 control-label" style="display:none">Thông tin trên mộ:</label>
							<div class="col-sm-2">
								<input name="loaimo1" type="text" class="form-control" style="display:none" id="loaimo1">
							</div>	
							<label for="field-3" class="col-sm-2 control-label" style="display:none">Mộ có hài cốt:</label>
							<div class="col-sm-2">
								<input name="mochc" type="text" class="form-control" style="display:none" id="mochc">
							</div>	
							<label for="field-3" class="col-sm-2 control-label" style="display:none">Có thông tin mộ:</label>
							<div class="col-sm-2">
								<input name="thongtin" type="text" class="form-control" style="display:none" id="thongtin">
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
								<input name="mahsbocs" type="text" class="form-control" id="mahsbocs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Mã hồ sơ tỉnh:</label>
							<div class="col-sm-2">
								<input name="mahstinhcs" type="text" class="form-control" id="mahstinhcs">
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
								<input name="nguyenquancs" type="text" class="form-control" id="nguyenquancs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Trú quán<span style="padding-left:0px; color:red;">*</span>:</label>
							<div class="col-sm-7">
								<input name="truquancs" type="text" class="form-control" id="truquancs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ngày nhập ngũ:</label>
							<div class="col-sm-3">
								<input name="ngaynhapngucs" type="text" class="form-control" id="ngaynhapngucs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Cấp bậc:</label>
							<div class="col-sm-2">
								<input name="capbaccs" type="text" class="form-control" id="capbaccs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Chức vụ:</label>
							<div class="col-sm-3">
								<input name="chucvucs" type="text" class="form-control" id="chucvucs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Cơ quan đơn vị:</label>
							<div class="col-sm-2">
								<input name="coquandvcs" type="text" class="form-control" id="coquandvcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Loại đối tượng:</label>
							<div class="col-sm-2">								
								<select name="loaidoituongcs" id="loaidoituongcs" class="form-control">
									<option value="1. Bộ đội">1. Bộ đội</option>
									<option value="2. Công an">2. Công an</option>
									<option value="3. Chuyên gia">3. Chuyên gia</option>
									<option value="4. Dân quân, Du kích">4. Dân quân, Du kích</option>
									<option value="5. Thanh niên xung phong">5. Thanh niên xung phong</option>
									<option value="6. Thương binh chết do vết thương tái phát">6. Thương binh chết do vết thương tái phát</option>
									<option value="7. Khác">7. Khác</option>
									<option value=""></option>
								</select>	
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ngày hi sinh:</label>
							<div class="col-sm-2">
								<input name="ngayhisinhcs" type="text" class="form-control" id="ngayhisinhcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Nơi hi sinh:</label>
							<div class="col-sm-2">
								<input name="noihisinhcs" type="text" class="form-control" id="noihisinhcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Đơn vị hi sinh:</label>
							<div class="col-sm-2">
								<input name="donvihisinhcs" type="text" class="form-control" id="donvihisinhcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Trường hợp hi sinh:</label>
							<div class="col-sm-2">
								<input name="truonghophisinhcs" type="text" class="form-control" id="truonghophisinhcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Nơi an táng:</label>
							<div class="col-sm-2">
								<input name="noiantangcs" type="text" class="form-control" id="noiantangcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Giấy báo tử:</label>
							<div class="col-sm-2">
								<input name="giaybaotucs" type="text" class="form-control" id="giaybaotucs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ngày báo tử:</label>
							<div class="col-sm-2">
								<input name="ngaybaotucs" type="text" class="form-control" id="ngaybaotucs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Đơn vị báo tử:</label>
							<div class="col-sm-2">
								<input name="donvithongbaocs" type="text" class="form-control" id="donvithongbaocs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Bằng tổ quốc:</label>
							<div class="col-sm-6">
								<input name="bangtoquocghicongcs" type="text" class="form-control" id="bangtoquocghicongcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Thời kỳ</label>
							<div class="col-sm-2">								
								<select name="thoikycs" id="thoikycs" class="form-control">
									<option value="Chống mỹ">Chống mỹ</option>
									<option value="Chống pháp">Chống pháp</option>
									<option value="Khác">Khác</option>
									<option value=""></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Thông tin mộ:</label>
							<div class="col-sm-2">								
								<select name="loaimolietsycs" id="loaimolietsycs" class="form-control">
									<option value="1. Có thông tin phần mộ">1. Có thông tin phần mộ</option>
									<option value="2. Chưa có thông tin phần mộ">2. Chưa có thông tin phần mộ</option>
									<option value=""></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Nghĩa trang nội tỉnh:</label>
							<div class="col-sm-6">
								<input name="tennghiatrangcs" type="text" class="form-control" id="tennghiatrangcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Nơi hy sinh:</label>
							<div class="col-sm-2">								
								<select name="somocs" id="somocs" class="form-control">
									<option value="1. Trong nước">1. Trong nước</option>
									<option value="2. Lào">2. Lào</option>
									<option value="3. Campuchia">3. Campuchia</option>
									<option value="4. Chưa xác định">4. Chưa xác định</option>
									<option value="5. Khác">5. Khác</option>
									<option value=""></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Cụ thể khác:</label>
							<div class="col-sm-2">
								<input name="hangcs" type="text" class="form-control" id="hangcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Nơi hy sinh GĐCC:</label>
							<div class="col-sm-2">
								<input name="khucs" type="text" class="form-control" id="khucs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Nơi an táng:</label>
							<div class="col-sm-2">								
								<select name="locs" id="locs" class="form-control">
									<option value="1. Trong nước">1. Trong nước</option>
									<option value="2. Lào">2. Lào</option>
									<option value="3. Campuchia">3. Campuchia</option>
									<option value="4. Chưa xác định">4. Chưa xác định</option>
									<option value="5. Khác">5. Khác</option>
									<option value=""></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Nơi an táng GĐCC:</label>
							<div class="col-sm-6">
								<input name="thongtindivatcs" type="text" class="form-control" id="thongtindivatcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Có người thờ cúng:</label>
							<div class="col-sm-2">								
								<select name="donviquytapcs" id="donviquytapcs" class="form-control">
									<option value="1. Có">1. Có</option>
									<option value="2. Không">2. Không</option>
									<option value=""></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Vị trí mộ:</label>
							<div class="col-sm-6">								
								<select name="diadiemquytapcs" id="diadiemquytapcs" class="form-control">
									<option value="1. Nằm trong nghĩa trang Liệt sĩ">1. Nằm trong nghĩa trang Liệt sĩ</option>
									<option value="2. Nằm trong nghĩa trang gia đình">2. Nằm trong nghĩa trang gia đình</option>
									<option value=""></option>
								</select>
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
							<label for="field-3" class="col-sm-2 control-label">KP xây dựng mộ:</label>
							<div class="col-sm-2">								
								<select name="loaimocs" id="loaimocs" class="form-control">
									<option value="Đã cấp">Đã cấp</option>									
									<option value=""></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Theo quyết định:</label>
							<div class="col-sm-6">
								<input name="nguoidichuyenmocs" type="text" class="form-control" id="nguoidichuyenmocs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tên file:</label> 						
							<div class="col-sm-10">								
								<input type="file" id="filedkcs" name="filedkcs" class="form-control"/>	
								</br>
								<a href="#" id = "duongdan" style='color:rgb(245, 24, 63)'>Click vào đây để download file về máy</a>
								<input class="form-control" name="filedkcu" style="display:none">
							</div>
							<div class="col-sm-10">
								<input name="idhslscs" type="text" class="form-control" style="display:none" id="idhslscs">
							</div>
							<label for="field-3" class="col-sm-2 control-label" style="display:none">Đơn vị, cá nhân dc:</label>
							<div class="col-sm-2">
								<input name="nguoidichuyenmocs1" type="text" class="form-control" style="display:none" id="nguoidichuyenmocs1">
							</div>
							<label for="field-3" class="col-sm-2 control-label" style="display:none">Địa phương an táng:</label>
							<div class="col-sm-6">
								<input name="diaphuongantangkhidichuyencs" type="text" class="form-control" style="display:none" id="diaphuongantangkhidichuyencs">
							</div>
							<label for="field-3" class="col-sm-2 control-label" style="display:none">Thông tin trên mộ:</label>
							<div class="col-sm-2">
								<input name="loaimocs1" type="text" class="form-control" style="display:none" id="loaimocs1">
							</div>							
							<label for="field-3" class="col-sm-2 control-label" style="display:none">Mộ có hài cốt:</label>
							<div class="col-sm-6">
								<input name="mochccs" type="text" class="form-control" style="display:none" id="mochccs">
							</div>	
							<label for="field-3" class="col-sm-2 control-label" style="display:none">Có thông tin mộ:</label>
							<div class="col-sm-6">
								<input name="thongtincs" type="text" class="form-control" style="display:none" id="thongtincs">
							</div>
							<label for="field-3" class="col-sm-2 control-label" style="display:none">Ngày di chuyển:</label>
							<div class="col-sm-2">
								<input name="ngaychuyendencs" type="text" class="form-control" style="display:none" id="ngaychuyendencs">
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
									$sqltcml = "Select tenxa,tenhuyen,xa.mahuyen,maAPI From xa inner join huyen on xa.tthuyen=huyen.tthuyen";
									$qrtcml = mysqli_query($con,$sqltcml);
									while($rtcml=@mysqli_fetch_array($qrtcml))
									{
										echo "<option value=".str_replace(' ','_',$rtcml['tenhuyen']).'-'.str_replace(' ','_',$rtcml['tenxa']).'-'.$rtcml['maAPI'].'-'.$rtcml['mahuyen'].">".$rtcml['tenhuyen'].' - '.$rtcml['tenxa']."</option>";
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
	<div class="modal fade" id="modal-timTN">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<form name="thoaitimTN" role='form' method='POST' class='form-horizontal form-groups-bordered'>
						<div id = "sTTKK2" class="form-group">
							<label for="field-3" class="col-sm-2 control-label">Họ và tên</label>
							<div class="col-sm-10">
								<input name="hotentim" type="text" class="form-control" id="hotentim">
							</div>
						</div>
						<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
						<input type="submit" name="timkiemTN" class="btn btn-blue" value = "Tìm kiếm">
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal-timDV">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<form name="thoaitimDV" role='form' method='POST' class='form-horizontal form-groups-bordered'>
						<div id = "sTTKK2" class="form-group">
							<label for="field-3" class="col-sm-2 control-label">Huyện:</label>
							<div class="col-sm-10">
								<select name="huyen" id="huyen" class="form-control">
									<?php
									$sqltcml = "Select DISTINCT huyen From hosols";
									$qrtcml = mysqli_query($con,$sqltcml);
									while($rtcml=mysqli_fetch_array($qrtcml))
									{
										echo "<option value=".str_replace(' ','_',$rtcml['huyen']).">".$rtcml['huyen']."</option>";
									}
									?>
									<option value="" selected = "selected"></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Họ và tên:</label>
							<div class="col-sm-10">
								<input name="hoten" type="text" class="form-control" id="hoten">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tên đơn vị HS:</label>
							<div class="col-sm-10">
								<input name="donvihisinh" type="text" class="form-control" id="donvihisinh">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ngày hi sinh</label>
							<div class="col-sm-10">
								<input name="ngayhisinh" type="text" class="form-control" id="ngayhisinh">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Nơi hi sinh:</label>
							<div class="col-sm-10">
								<input name="noihisinh" type="text" class="form-control" id="noihisinh">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Thời kỳ</label>
							<div class="col-sm-2">
								<select name="thoiky" id="thoiky" class="form-control">
									<option value="Chống mỹ">Chống mỹ</option>
									<option value="Chống pháp">Chống pháp</option>
									<option value="Khác">Khác</option>
									<option value="KXD">Không xác định</option>
									<option value="all" selected>Tất cả</option>
								</select>
							</div>
						</div>
						<button type="button" class="btn btn-black" data-dismiss="modal">Đóng</button>
						<input type="submit" name="timkiemDV" class="btn btn-blue" value = "Tìm kiếm">
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
		document.thoaitimTN.action = get_action2();
		document.thoaitimDV.action = get_action2();
    }

    function get_action() {				
			return "nhaphosoncc.php?id=" + $('#trang').val() + ">" + $('#idhslscs').val();			
    }
	function get_action1() {				
			return "nhaphosoncc.php?id=1>0";			
    }
	function get_action2() {				
			return "nhaphosoncctim.php";			
    }	
</script>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>