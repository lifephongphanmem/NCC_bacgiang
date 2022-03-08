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
function showAjaxModalserch()
{		
	jQuery('#modal-tim').modal('show', {backdrop: 'static'});	
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
	window.open("/Reports/Phieudoichieuaht.php?id="+$("#soghi").val()+">"+$("#hotendc").val()+">"+$("#ngaysinhdc").val()+">"+$("#nguyenquandc").val()+">"+$("#truquandc").val()+">"+$("#mahsbodc").val()+">"+$("#mahstinhdc").val()+">"+$("#tthsdc").val()+">"+$("#tendv").val()+">"+$("#tenct").val()+">"+$("#quanly").val());	
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
</script>

<script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() 
			{  
			   $('table tbody tr').click(function() 
			   { 
					if ($(this).find('td:last').text() == "ncc" && $(this).find('td:nth-child(34)').text() == "")
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
						$("#tthsdc").val($(this).find('td:nth-child(19)').text());
						$("#xadc").val($(this).find('td:nth-child(20)').text());
						$("#huyendc").val($(this).find('td:nth-child(21)').text());
						$('#thannhan').load('ajax_thannhan.php?id_a=' + $(this).find('td:nth-child(7)').text());
						$('#giayto').load('ajax_giayto.php?id_a=' + $(this).find('td:nth-child(7)').text());
						$("#xaAPI").val($(this).find('td:nth-child(34)').text());
						$("#huyenAPI").val($(this).find('td:nth-child(35)').text());
					}
else
{
$("#soghidc").val($(this).find('td:nth-child(7)').text());
						$("#soghi").val($(this).find('td:nth-child(7)').text());
						$("#hotendc").val($(this).find('td:nth-child(2)').text());
						$("#ngaysinhdc").val($(this).find('td:nth-child(3)').text());
						$("#nguyenquandc").val($(this).find('td:nth-child(5)').text());
						$("#truquandc").val($(this).find('td:nth-child(6)').text());
						$("#mahsbodc").val($(this).find('td:nth-child(8)').text());
						$("#mahstinhdc").val($(this).find('td:nth-child(9)').text());
						$("#tthsdc").val($(this).find('td:nth-child(19)').text());
						$("#xadc").val($(this).find('td:nth-child(20)').text());
						$("#huyendc").val($(this).find('td:nth-child(21)').text());
						$('#thannhan').load('ajax_thannhan.php?id_a=' + $(this).find('td:nth-child(7)').text());
						$('#giayto').load('ajax_giayto.php?id_a=' + $(this).find('td:nth-child(7)').text());
						$("#xaAPI").val($(this).find('td:nth-child(34)').text());
						$("#huyenAPI").val($(this).find('td:nth-child(35)').text());
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
						$("#hotencs").val($(this).find('td:nth-child(2)').text());	
						$("#ngaysinhcs").val($(this).find('td:nth-child(3)').text());
						$("#gioitinhcs").val($(this).find('td:nth-child(4)').text());
						$("#nguyenquancs").val($(this).find('td:nth-child(5)').text());
						$("#truquancs").val($(this).find('td:nth-child(6)').text());
						//$("#idhstkncs").val($(this).find('td:nth-child(7)').text());
						$("#mahobocs").val($(this).find('td:nth-child(8)').text());
						$("#mahotinhcs").val($(this).find('td:nth-child(9)').text());
						$("#bidanhcs").val($(this).find('td:nth-child(10)').text());
						$("#coquandvcs").val($(this).find('td:nth-child(11)').text());
						$("#danhhieucs").val($(this).find('td:nth-child(12)').text());
						$("#quyetdinhsocs").val($(this).find('td:nth-child(13)').text());
						$("#qdtccs").val($(this).find('td:nth-child(14)').text());
						$("#mpckvcs").val($(this).find('td:nth-child(15)').text());
						$("#mpcdbcs").val($(this).find('td:nth-child(16)').text());
						$("#mtchtcs").val($(this).find('td:nth-child(17)').text());
						$("#sosotccs").val($(this).find('td:nth-child(18)').text());						
						$("#namddlccs").val($(this).find('td:nth-child(22)').text());
						$("#loaiddcs").val($(this).find('td:nth-child(23)').text());
						$("#fileanhcu").val($(this).find('td:nth-child(24)').text());
						$("#ngaymatcs").val($(this).find('td:nth-child(25)').text());						
						$("#ghichucs").val($(this).find('td:nth-child(26)').text());
						$("#idhsahcs").val($(this).find('td:nth-child(7)').text());
$("#dieuduongcs").val($(this).find('td:nth-child(27)').text());
$("#hinhthucddltcs").val($(this).find('td:nth-child(28)').text());
$("#bhytcs").val($(this).find('td:nth-child(29)').text());
if ($(this).find('td:nth-child(30)').text()=="0000-00-00")
	$("#ngaydccs").val("");
else
	$("#ngaydccs").val(ngaythang($(this).find('td:nth-child(30)').text()));	
$("#ngaydccs").val(ngaythang($(this).find('td:nth-child(30)').text()));
$("#noidccs").val($(this).find('td:nth-child(31)').text());
$("#phanloaidccs").val($(this).find('td:nth-child(32)').text());					
						document.getElementById("dd").src = $(this).find('td:nth-child(24)').text();
						var ddfile=$(this).find('td:nth-child(33)').text().lastIndexOf('/');
						document.getElementById("duongdan").href = "download.php?id=/data/upload"+$(this).find('td:nth-child(33)').text().substr(ddfile);
						if ($(this).find('td:nth-child(33)').text()=="")
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
		window.location.href="nhaphosoncctim.php?id="+this.value+">0>"+$("#timdonvi").val()+">"+$("#timmabo").val()+">"+$("#timmatinh").val()+">"+$("#timhoten").val();
  });
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
			$fileup = $_POST['mahotinhcs']."_".$path_parts['filename'].".".$path_parts['extension'];	
			move_uploaded_file($_FILES['fileacs']['tmp_name'],"$_SERVER[DOCUMENT_ROOT]/data/upload/".$fileup);
			$fileanh="/data/upload/".$fileup;				
		}
		// file đính kèm
			$filedkurl1 ="";
			$tmp_name1 = $_FILES['filedkcs']['tmp_name'];
			if($tmp_name1 != "")
			{				
				$path_parts1 = pathinfo($_FILES['filedkcs']['name']);
				$fileup1 = $_POST['mahotinhcs']."_".$path_parts1['filename'].".".$path_parts1['extension'];	
				move_uploaded_file($_FILES['filedkcs']['tmp_name'],"$_SERVER[DOCUMENT_ROOT]/data/upload/".$fileup1);
				$filedkurl1="$_SERVER[DOCUMENT_ROOT]/data/upload/".$fileup1;				
			}
		// insert
		$gioitinhAPI = gioitinhAPI($_POST['gioitinhcs']);
		$sqlup = "Update hosoah Set mahobo='".$_POST['mahobocs']."', mahotinh='".$_POST['mahotinhcs']."', hoten='".$_POST['hotencs']."', bidanh='".$_POST['bidanhcs']."', ";
		$sqlup = $sqlup."ngaysinh='".$_POST['ngaysinhcs']."',gioitinh='".$_POST['gioitinhcs']."', nguyenquan='".$_POST['nguyenquancs']."', truquan='".$_POST['truquancs']."', ";
		$sqlup = $sqlup."coquandv='".$_POST['coquandvcs']."', danhhieu='".$_POST['danhhieucs']."', quyetdinhso='".$_POST['quyetdinhsocs']."', mpckv='".$_POST['mpckvcs']."', ";
		$sqlup = $sqlup."mpcdb='".$_POST['mpcdbcs']."', mtcht='".$_POST['mtchtcs']."', ";
		$sqlup = $sqlup."sosotc='".$_POST['sosotccs']."', namddlc='".$_POST['namddlccs']."', loaidd='".$_POST['loaiddcs']."', ";
		$sqlup = $sqlup."ngaymat='".$_POST['ngaymatcs']."', ghichu='".$_POST['ghichucs']."', dieuduong='".$_POST['dieuduongcs']."', hinhthucddlt='".$_POST['hinhthucddltcs']."', bhyt='".$_POST['bhytcs']."', ";
		$sqlup = $sqlup."ngaydc='".doingay1($_POST['ngaydccs'])."', noidc='".$_POST['noidccs']."', phanloaidc='".$_POST['phanloaidccs']."',gioitinhAPI=$gioitinhAPI";
		
		if ($_POST['fileanhcu'] != $fileanh)
		{
			if ($fileanh != "")
				$sqlup = $sqlup.", filea='".$fileanh."'";
		}
		if ($filedkurl1 != "")
			$sqlup = $sqlup.", filedk='".$filedkurl1."'";
		$sqlup = $sqlup." where idhsah = ".$_POST['idhsahcs'];
		//echo $sqlup;
		$kq=mysqli_query($con,$sqlup);
		//API
		$hoten = $namsinh = $dantoc= $tongiao = "";
		$maxaAPI = 0;
		$mahuyenAPI = 0;
		$sqltt = "Select hoten,ngaysinh,maxaAPI,mahuyenAPI from hosoah WHERE idhsah = ".$_POST['idhsahcs'];
		$qrsqltt = mysqli_query($con,$sqltt);
		while ($tt = mysqli_fetch_array($qrsqltt))
		{
			$hoten = $tt['hoten'];
			$namsinh = $tt['ngaysinh'];
			$dantoc = $tt['dantoc'];
			if ($dantoc != "Kinh")
				$dantoc = "0";
			else
				$dantoc = "01";
			$tongiao = "00";
			$maxaAPI = $tt['maxaAPI'];
			$mahuyenAPI = $tt['mahuyenAPI'];
		}
		$data = array(
			"id_doituong"=> $_POST['idhsahcs'],
			"hoten"=> $hoten,
			"namsinh"=> $namsinh,
			"gioitinh"=> $gioitinhAPI,
			"dantoc"=> $dantoc,
			"tongiao"=> $tongiao,
			"quocgia"=> "VN",
			"xa_nguyenquan"=> $maxaAPI,
			"huyen_nguyenquan"=> $mahuyenAPI,
			"tinh_nguyenquan"=> "26",
			"xa_noio"=> $maxaAPI,
			"huyen_noio"=> $mahuyenAPI,
			"tinh_noio"=> "26",
			"doituong"=> "anhhung",
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
		$sqltths="Select max(ttah) as ttah From hethongdv where tendonvi='".str_replace('_',' ',$xh[1])."' and tencaptren='".str_replace('_',' ',$xh[0])."'";
		$sql1=mysqli_query($con,$sqltths);$sotths=0;	
		while($row=mysqli_fetch_array($sql1)){	
			$sotths=$row['ttah'];
		}
		$sotths=$sotths+1;
		$fileanh ="";	
		$tmp_name = $_FILES['filea']['tmp_name'];
		if($tmp_name != "")
		{				
			$path_parts = pathinfo($_FILES['filea']['name']);
			$fileup = $_POST['mahotinh']."_".$path_parts['filename'].".".$path_parts['extension'];	
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
		$gioitinhAPI = gioitinhAPI($_POST['gioitinh']);
		$sqlup = "Insert into hosoah Set mahobo='".$_POST['mahobo']."', mahotinh='".$_POST['mahotinh']."', hoten='".$_POST['hoten']."', bidanh='".$_POST['bidanh']."', ";
		$sqlup = $sqlup."ngaysinh='".$_POST['ngaysinh']."',gioitinh='".$_POST['gioitinh']."', nguyenquan='".$_POST['nguyenquan']."', truquan='".$_POST['truquan']."', ";
		$sqlup = $sqlup."coquandv='".$_POST['coquandv']."', danhhieu='".$_POST['danhhieu']."', quyetdinhso='".$_POST['quyetdinhso']."', mpckv='".$_POST['mpckv']."', ";
		$sqlup = $sqlup."mpcdb='".$_POST['mpcdb']."', mtcht='".$_POST['mtcht']."', ";
		$sqlup = $sqlup."sosotc='".$_POST['sosotc']."', namddlc='".$_POST['namddlc']."', loaidd='".$_POST['loaidd']."', ";
		$sqlup = $sqlup."ngaymat='".$_POST['ngaymat']."', ghichu='".$_POST['ghichu']."', dieuduong='".$_POST['dieuduong']."', hinhthucddlt='".$_POST['hinhthucddlt']."', bhyt='".$_POST['bhyt']."'";
		$sqlup = $sqlup."ngaydc='".doingay1($_POST['ngaydc'])."', noidc='".$_POST['noidc']."', phanloaidc='".$_POST['phanloaidc']."', tths=$sotths, xa='".str_replace('_',' ',$xh[1])."', huyen='".str_replace('_',' ',$xh[0])."'";
		$sqlup = $sqlup.",gioitinhAPI=$gioitinhAPI, maxaAPI='".str_replace('_',' ',$xh[2])."', mahuyenAPI='".str_replace('_',' ',$xh[3])."'";
		if ($fileanh != "")
			$sqlup = $sqlup.", filea='".$fileanh."'";
		if ($filedkurl1 != "")
			$sqlup = $sqlup.", filedk='".$filedkurl1."'";
		//echo $sqlup;	
		$kq=mysqli_query($con,$sqlup);
		$sqluptt="Update hethongdv Set ttah=$sotths,tongah=tongah+1 where tendonvi='".str_replace('_',' ',$xh[1])."' and tencaptren='".str_replace('_',' ',$xh[0])."'";
		$kq1=mysqli_query($con,$sqluptt);
		$sqluptt1="Update hethongdv Set tongah=tongah+1 where tendonvi='".$madv[0]."' and tencaptren='".$madv[1]."'";
		$kq2=mysqli_query($con,$sqluptt1);
		//API
		$result = mysqli_query($con,"select MAX(idhsah) FROM hosoah");
		while ($row = mysqli_fetch_array($result)){
			$highest_id = $row[0];
		}
		$dantoc = "0";
		$tongiao = "00";
		$data = array(
			"id_doituong"=> $highest_id,
			"hoten"=> $_POST['hoten'],
			"namsinh"=> $_POST['ngaysinh'],
			"gioitinh"=> $gioitinhAPI,
			"dantoc"=> $dantoc,
			"tongiao"=> $tongiao,
			"quocgia"=> "VN",
			"xa_nguyenquan"=> str_replace('_',' ',$xh[2]),
			"huyen_nguyenquan"=> str_replace('_',' ',$xh[3]),
			"tinh_nguyenquan"=> "26",
			"xa_noio"=> str_replace('_',' ',$xh[2]),
			"huyen_noio"=> str_replace('_',' ',$xh[3]),
			"tinh_noio"=> "26",
			"doituong"=> "anhhung",
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
		$sqlup = "Update hosoah Set truquan='".$_POST['noidck']."',ngaydc='".doingay1($_POST['ngaydck'])."',noidc='".$_POST['noidck']."',phanloaidc='".$_POST['phanloaidck']."'";
		if ($_POST['phanloaidck'] == "Chuyển đi nội tỉnh")
		{
			if ($_POST['tenxak'] != "")
			{				
				$xahuyen=explode('-',$_POST['tenxak']);
				$sqltths="Select max(ttah) as ttah From hethongdv where tendonvi='".str_replace('_',' ',$xahuyen[1])."' and tencaptren='".str_replace('_',' ',$xahuyen[0])."'";
				$sql1=mysqli_query($con,$sqltths);$sotths=0;	
				while($row=mysqli_fetch_array($sql1)){	
					$sotths=$row['ttah'];
				}
				$sotths=$sotths+1;
				$sqlup = $sqlup.",xa='".str_replace('_',' ',$xahuyen[1])."',huyen='".str_replace('_',' ',$xahuyen[0])."',tths=$sotths where idhsah=".$_POST['soghidc'];
				$sqluptt="Update hethongdv Set ttah=$sotths,tongah=tongah+1 where tendonvi='".str_replace('_',' ',$xahuyen[1])."' and tencaptren='".str_replace('_',' ',$xahuyen[0])."'";
				$kq1=mysqli_query($con,$sqluptt);
				$sqluptt1="Update hethongdv Set tongah=tongah+1 where tendonvi='".$madv[0]."' and tencaptren='".$madv[1]."'";
				$kq2=mysqli_query($con,$sqluptt1);
			}
		}
if (strrpos($sqlup,"where")<=0)
			$sqlup = $sqlup." where idhsah=".$_POST['soghidc'];
		$kq=mysqli_query($con,$sqlup);
	}
}	
?>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Hồ sơ anh hùng LĐ,LLVT</h4>
		</div>
			<div class="modal-body">
<form role='form' method='POST' class='form-horizontal form-groups-bordered'>			
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModalthannhan();" class='btn btn-success'>
			Thân nhân
		</a>
	<?php
		if ($madv[3]=="Tỉnh")
{
echo "<a style = 'float:right; background-color:rgb(83, 181, 166)' onclick='showAjaxModalgiayto();' class='btn btn-success'>
			Giấy tờ
		</a>";
			echo "<a style = 'float:right; background-color:rgb(83, 181, 166)' onclick='showAjaxModalhs();' class='btn btn-success'>
				Thêm hồ sơ
			</a>";
		
		echo "<a style = 'float:right; background-color:rgb(83, 181, 166)' onclick='showAjaxModaldc();' class='btn btn-success'>
			<i class='entypo-print'></i>Phiếu đối chiếu
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
		<input name="huyenAPI" type="text" class="form-control" style="display:none" id="huyenAPI">
		<input name="xaAPI" type="text" class="form-control" style="display:none" id="xaAPI">
		<input name="tendv" type="text" class="form-control" style="display:none" id="tendv" value="<?php echo $madv[0]; ?>">
		<input name="tenct" type="text" class="form-control" style="display:none" id="tenct" value="<?php echo $madv[1]; ?>">
		<input name="quanly" type="text" class="form-control" style="display:none" id="quanly" value="<?php echo $madv[3]; ?>">
		<label class='col-sm-2'>Trang số:</label>
<?php
//$ahs = explode('>',$_GET['id']);
$sql="";$tentim="";$hsbotim="";$hstinhtim="";$hshotentim="";$j=0;
if(isset($_POST['timkiem'])){
	//echo $_POST['tenxatim'];
	$tentim=$_POST['tenxatim'];$hsbotim=$_POST['mabotim'];$hstinhtim=$_POST['matinhtim'];$hshotentim=str_replace("_"," ",$_POST['hotentim']);	
	$tenhuyenxa = str_replace("_"," ",$_POST['tenxatim']);	
	$huyenxa=explode(' - ',$tenhuyenxa);
	if ($_POST['tenxatim'] != "")
		$sql="select * from hosoah where xa like '".$huyenxa[1]."%' and huyen like '".$huyenxa[0]."%' and mahobo like '%".$_POST['mabotim']."%' and mahotinh Like '%".$_POST['matinhtim']."%' and hoten Like '%".str_replace("_"," ",$_POST['hotentim'])."%'";
	else
	{
		if ($madv[3]=="Xã")
			$sql="select * from hosoah where mahobo like '%".$_POST['mabotim']."%' and mahotinh Like '%".$_POST['matinhtim']."%' and hoten Like '%".str_replace("_"," ",$_POST['hotentim'])."%' and xa='".$madv[0]."'";
		else if ($madv[3]=="Huyện")
			$sql="select * from hosoah where mahobo like '%".$_POST['mabotim']."%' and mahotinh Like '%".$_POST['matinhtim']."%' and hoten Like '%".str_replace("_"," ",$_POST['hotentim'])."%' and huyen='".$madv[0]."'";
		else
			$sql="select * from hosoah where mahobo like '%".$_POST['mabotim']."%' and mahotinh Like '%".$_POST['matinhtim']."%' and hoten Like '%".str_replace("_"," ",$_POST['hotentim'])."%'";
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
		$sql="select * from hosoah where xa like '".$huyenxa[1]."%' and huyen like '".$huyenxa[0]."%' and mahobo like '%".$ths[3]."%' and mahotinh Like '%".$ths[4]."%' and hoten Like '%".str_replace("_"," ",$ths[5])."%'";
	else
	{
		if ($madv[3]=="Xã")
			$sql="select * from hosoah where mahobo like '%".$ths[3]."%' and mahotinh Like '%".$ths[4]."%' and hoten Like '%".str_replace("_"," ",$ths[5])."%' and xa='".$madv[0]."'";
		else if ($madv[3]=="Huyện")
			$sql="select * from hosoah where mahobo like '%".$ths[3]."%' and mahotinh Like '%".$ths[4]."%' and hoten Like '%".str_replace("_"," ",$ths[5])."%' and huyen='".$madv[0]."'";
		else
			$sql="select * from hosoah where mahobo like '%".$ths[3]."%' and mahotinh Like '%".$ths[4]."%' and hoten Like '%".str_replace("_"," ",$ths[5])."%'";
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
	$ls =  array(array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32"));		
	$cs=0;
	//$sql="select * from hosoah";
	$sql1=mysqli_query($con,$sql);
	$kq = 0;$kq1 = 1;
	if ($j == 1)
		echo "<option selected='selected' value='$kq1'>$kq1</option>";
	else
		echo "<option value='$kq1'>$kq1</option>";
	while($row=mysqli_fetch_array($sql1)){					
		$ls[$cs][0] = $row['hoten'];
		$ls[$cs][1] = $row['ngaysinh'];
		$ls[$cs][2] = $row['gioitinh'];
		$ls[$cs][3] = $row['nguyenquan'];
		$ls[$cs][4] = $row['truquan'];
		$ls[$cs][5] = $row['idhsah'];
		$ls[$cs][6] = $row['mahobo'];
		$ls[$cs][7] = $row['mahotinh'];
		$ls[$cs][8] = $row['bidanh'];
		$ls[$cs][9] = $row['coquandv'];
		$ls[$cs][10] = $row['danhhieu'];
		$ls[$cs][11] = $row['quyetdinhso'];
		$ls[$cs][12] = $row['qdtc'];
		$ls[$cs][13] = $row['mpckv'];
		$ls[$cs][14] = $row['mpcdb'];
		$ls[$cs][15] = $row['mtcht'];
		$ls[$cs][16] = $row['sosotc'];
		$ls[$cs][17] = $row['tths'];
		$ls[$cs][18] = $row['xa'];		
		$ls[$cs][19] = $row['huyen'];
		$ls[$cs][20] = $row['namddlc'];
		$ls[$cs][21] = $row['loaidd'];
		$ls[$cs][22] = $row['filea'];
		$ls[$cs][23] = $row['ngaymat'];
		$ls[$cs][24] = $row['ghichu'];
		$ls[$cs][25] = $row['dieuduong'];
		$ls[$cs][26] = $row['hinhthucddlt'];
		$ls[$cs][27] = $row['bhyt'];
		$ls[$cs][28] = $row['ngaydc'];
		$ls[$cs][29] = $row['noidc'];
		$ls[$cs][30] = $row['phanloaidc'];	
		$ls[$cs][31] = $row['filedk'];
		$ls[$cs][32] = $row['maxaAPI'];
		$ls[$cs][33] = $row['mahuyenAPI'];
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
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>idhsah</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>mahobo</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>mahotinh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>bidanh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>coquandv</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>danhhieu</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>quyetdinhso</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>qdtc</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>mpckv</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>mpcdb</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>mtcht</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>sosotc</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>tths</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>xa</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>huyen</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>namddlc</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>loaidd</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>filea</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ngaymat</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ghichu</strong></th>	
<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>dieuduong</strong></th>
<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>hinhthucddlt</strong></th>
<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>bhyt</strong></th>	
<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>bhyt</strong></th>
<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>bhyt</strong></th>
<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>bhyt</strong></th>	
<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>bhyt</strong></th>
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
			for($i=($j - 1)*5;$i<5*$j;$i++)
			{
				$a = $i + 1;
				if ($i < $cs)
				{					
				echo "<tr>";					
					echo "<td>".$ls[$i][17]."</td>";
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
				if ($madv[3]=="Tỉnh")
					{
						echo"<td>					
							<a href=\"xoatim.php?id=".$ls[$i][5].">".$tentim.">".$hsbotim.">".$hstinhtim.">".$hshotentim."\"  title='Xóa hố sơ và thông tin liên quan' onclick=\"return confirm('Bạn muốn xóa hố sơ này?')\" class='btn btn-red '>
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
	/* $ihs = 0;	
	$sqltn = "Select * From thannhanah Where idhsah = $ihs";	
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
		/* $sqlgt = "Select * From giaytoah Where idhsah = $ihs";	
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
								<input name="mahobo" type="text" class="form-control" id="mahobo">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Mã hồ sơ tỉnh:</label>
							<div class="col-sm-2">
								<input name="mahotinh" type="text" class="form-control" id="mahotinh">
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
							<label for="field-3" class="col-sm-2 control-label">Cơ quan, đơn vị:</label>
							<div class="col-sm-7">
								<input name="coquandv" type="text" class="form-control" id="coquandv">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Danh hiệu:</label>
							<div class="col-sm-7">								
								<select name="danhhieu" id="danhhieu" class="form-control">
									<option value="Anh hùng lực lượng vũ trang">Anh hùng lực lượng vũ trang</option>
									<option value="Anh hùng lao động trong thời kỳ kháng chiến">Anh hùng lao động trong thời kỳ kháng chiến</option>
									<option value="" selected = "selected"></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Quyết định số:</label>
							<div class="col-sm-2">
								<input name="quyetdinhso" type="text" class="form-control" id="quyetdinhso">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Quyết định trợ cấp:</label>
							<div class="col-sm-2">
								<input name="qdtc" type="text" class="form-control" id="qdtc">
							</div>							
							<label for="field-3" class="col-sm-2 control-label">Trợ cấp khu vực:</label>
							<div class="col-sm-2">	
								<input name="mpckv" type="text" class="form-control" data-mask="fdecimal" id="mpckv">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Phụ cấp đặc biệt:</label>
							<div class="col-sm-2">
								<input name="mpcdb" type="text" class="form-control" data-mask="fdecimal" id="mpcdb">								
							</div>
							<label for="field-3" class="col-sm-2 control-label">Trợ cấp hàng tháng:</label>
							<div class="col-sm-6">
								<input name="mtcht" type="text" class="form-control" data-mask="fdecimal" id="mtcht">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Số sổ lĩnh tiền:</label>
							<div class="col-sm-2">
								<input name="sosotc" type="text" class="form-control" id="sosotc">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ngày mất:</label>
							<div class="col-sm-2">
								<input name="ngaymat" type="text" class="form-control" data-mask="date" id="ngaymat">
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
								<input name="namddlc" type="text" class="form-control" id="namddlc">
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
							<label for="field-3" class="col-sm-2 control-label">Ghi chú:</label>
							<div class="col-sm-6">
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
								<input name="mahobocs" type="text" class="form-control" id="mahobocs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Mã hồ sơ tỉnh:</label>
							<div class="col-sm-2">
								<input name="mahotinhcs" type="text" class="form-control" id="mahotinhcs">
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
							<label for="field-3" class="col-sm-2 control-label">Cơ quan, đơn vị:</label>
							<div class="col-sm-7">
								<input name="coquandvcs" type="text" class="form-control" id="coquandvcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Danh hiệu:</label>
							<div class="col-sm-7">								
								<select name="danhhieucs" id="danhhieucs" class="form-control">
									<option value="Anh hùng lực lượng vũ trang">Anh hùng lực lượng vũ trang</option>
									<option value="Anh hùng lao động trong thời kỳ kháng chiến">Anh hùng lao động trong thời kỳ kháng chiến</option>
									<option value=""></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Quyết định số:</label>
							<div class="col-sm-2">
								<input name="quyetdinhsocs" type="text" class="form-control" id="quyetdinhsocs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Quyết định trợ cấp:</label>
							<div class="col-sm-2">
								<input name="qdtccs" type="text" class="form-control" id="qdtccs">
							</div>							
							<label for="field-3" class="col-sm-2 control-label">Trợ cấp khu vực:</label>
							<div class="col-sm-2">	
								<input name="mpckvcs" type="text" class="form-control" data-mask="fdecimal" id="mpckvcs">								
							</div>
							<label for="field-3" class="col-sm-2 control-label">Phụ cấp đặc biệt:</label>
							<div class="col-sm-2">	
								<input name="mpcdbcs" type="text" class="form-control" data-mask="fdecimal" id="mpcdbcs">								
							</div>
							<label for="field-3" class="col-sm-2 control-label">Trợ cấp hàng tháng:</label>
							<div class="col-sm-6">	
								<input name="mtchtcs" type="text" class="form-control" data-mask="fdecimal" id="mtchtcs">								
							</div>
							<label for="field-3" class="col-sm-2 control-label">Số sổ lĩnh tiền:</label>
							<div class="col-sm-2">
								<input name="sosotccs" type="text" class="form-control" id="sosotccs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ngày mất:</label>
							<div class="col-sm-2">
								<input name="ngaymatcs" type="text" class="form-control" data-mask="date" id="ngaymatcs">
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
								<input name="namddlccs" type="text" class="form-control" id="namddlccs">
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
							<label for="field-3" class="col-sm-2 control-label">Ghi chú:</label>
							<div class="col-sm-6">
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
								<input name="idhsahcs" type="text" class="form-control" style="display:none" id="idhsahcs">
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
<script type="text/javascript">
    window.onsubmit = function() {
        document.thoaics.action = get_action();
		document.thoaimoi.action = get_action1();
		document.thoaitim.action = get_action2();
		document.thoaidc.action = get_action3();
    }

    function get_action() {				
			return "nhaphosoncc.php?id=" + $('#trang').val() + ">0" ;
    }
	function get_action1() {				
			return "nhaphosoncc.php?id="+$('#trangm').val()+">0";
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