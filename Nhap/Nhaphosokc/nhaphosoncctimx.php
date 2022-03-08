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
function showAjaxModalgiayto()
{		
	window.location.href="nhapgiayto.php?id="+$("#soghi").val();	
}	
function showAjaxModaldc()
{		
	window.open("/Reports/Phieudoichieukct.php?id="+$("#soghi").val()+">"+$("#hotendc").val()+">"+$("#ngaysinhdc").val()+">"+$("#nguyenquandc").val()+">"+$("#truquandc").val()+">"+$("#mahsbodc").val()+">"+$("#mahstinhdc").val()+">"+$("#tthsdc").val()+">"+$("#tendv").val()+">"+$("#tenct").val()+">"+$("#quanly").val());	
}	
</script>

<script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() 
			{  
			   $('table tbody tr').click(function() 
			   { 
					if ($(this).find('td:last').text() == "ncc" && $(this).find('td:nth-child(55)').text() == "")
					{		
						$("#soghidc").val($(this).find('td:nth-child(7)').text());
						$("#soghi").val($(this).find('td:nth-child(7)').text());
						$("#hotendc").val($(this).find('td:nth-child(2)').text());
						$("#ngaysinhdc").val($(this).find('td:nth-child(3)').text());
						$("#nguyenquandc").val($(this).find('td:nth-child(5)').text());
						$("#truquandc").val($(this).find('td:nth-child(6)').text());
						$("#mahsbodc").val($(this).find('td:nth-child(22)').text());
						$("#mahstinhdc").val($(this).find('td:nth-child(23)').text());
						$("#tthsdc").val($(this).find('td:nth-child(20)').text());
						//$('#thannhan').load('ajax_thannhan.php?id_a=' + $(this).find('td:nth-child(7)').text());
						//$('#giayto').load('ajax_giayto.php?id_a=' + $(this).find('td:nth-child(7)').text());
					}
else
{
$("#soghidc").val($(this).find('td:nth-child(7)').text());
						$("#soghi").val($(this).find('td:nth-child(7)').text());
						$("#hotendc").val($(this).find('td:nth-child(2)').text());
						$("#ngaysinhdc").val($(this).find('td:nth-child(3)').text());
						$("#nguyenquandc").val($(this).find('td:nth-child(5)').text());
						$("#truquandc").val($(this).find('td:nth-child(6)').text());
						$("#mahsbodc").val($(this).find('td:nth-child(22)').text());
						$("#mahstinhdc").val($(this).find('td:nth-child(23)').text());
						$("#tthsdc").val($(this).find('td:nth-child(20)').text());
						//$('#thannhan').load('ajax_thannhan.php?id_a=' + $(this).find('td:nth-child(7)').text());
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
						//alert($(this).find('td:nth-child(39)').text());
						jQuery('#modal-7').modal('show', {backdrop: 'static'});
						$("#mahosobo").val($(this).find('td:nth-child(22)').text());	
						$("#mahosotinh").val($(this).find('td:nth-child(23)').text());
						$("#hoten").val($(this).find('td:nth-child(2)').text());
						$("#bidanh").val($(this).find('td:nth-child(8)').text());
						$("#ngaysinh").val($(this).find('td:nth-child(3)').text());
						$("#gioitinh").val($(this).find('td:nth-child(4)').text());
						$("#nguyenquan").val($(this).find('td:nth-child(5)').text());
						$("#truquan").val($(this).find('td:nth-child(6)').text());
						$("#tghoatdong").val($(this).find('td:nth-child(9)').text());
						$("#sonam").val($(this).find('td:nth-child(10)').text());
						$("#sothang").val($(this).find('td:nth-child(11)').text());
						$("#hhccp").val($(this).find('td:nth-child(12)').text());
						$("#hangcp").val($(this).find('td:nth-child(13)').text());
						$("#hhccm").val($(this).find('td:nth-child(14)').text());
						$("#hangcm").val($(this).find('td:nth-child(15)').text());
						$("#qdhhc").val($(this).find('td:nth-child(16)').text());
						$("#qdtcml").val($(this).find('td:nth-child(17)').text());
						$("#qdtcmtp").val($(this).find('td:nth-child(18)').text());
						$("#ngaymat").val($(this).find('td:nth-child(19)').text());						
						$("#idhskc").val($(this).find('td:nth-child(7)').text());
						$("#fileanhcu").val($(this).find('td:nth-child(21)').text());
	$("#bhytcs").val($(this).find('td:nth-child(24)').text());					
if ($(this).find('td:nth-child(25)').text()=="0000-00-00")	
	$("#ngaydccs").val("");
else
	$("#ngaydccs").val(ngaythang($(this).find('td:nth-child(25)').text()));
$("#noidccs").val($(this).find('td:nth-child(26)').text());
$("#phanloaidccs").val($(this).find('td:nth-child(27)').text());	
$("#nguoihuongcs").val($(this).find('td:nth-child(29)').text());				
						//$("#dd").src = $(this).find('td:nth-child(21)').text();
						document.getElementById("dd").src = $(this).find('td:nth-child(21)').text();
						var ddfile=$(this).find('td:nth-child(28)').text().lastIndexOf('/');
						document.getElementById("duongdan").href = "download.php?id=/data/upload"+$(this).find('td:nth-child(28)').text().substr(ddfile);
						if ($(this).find('td:nth-child(28)').text()=="")
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
			$fileup = $_POST['mahosotinhcs']."_".$path_parts['filename'].".".$path_parts['extension'];	
			move_uploaded_file($_FILES['fileacs']['tmp_name'],"$_SERVER[DOCUMENT_ROOT]/data/upload/".$fileup);
			$fileanh="/data/upload/".$fileup;				
		}
		// file đính kèm
			$filedkurl1 ="";
			$tmp_name1 = $_FILES['filedkcs']['tmp_name'];
			if($tmp_name1 != "")
			{				
				$path_parts1 = pathinfo($_FILES['filedkcs']['name']);
				$fileup1 = $_POST['mahosotinhcs']."_".$path_parts1['filename'].".".$path_parts1['extension'];	
				move_uploaded_file($_FILES['filedkcs']['tmp_name'],"$_SERVER[DOCUMENT_ROOT]/data/upload/".$fileup1);
				$filedkurl1="$_SERVER[DOCUMENT_ROOT]/data/upload/".$fileup1;				
			}
		// insert
		$sqlup = "Update hosokc Set mahosobo='".$_POST['mahosobocs']."', mahosotinh='".$_POST['mahosotinhcs']."', hoten='".$_POST['hotencs']."', bidanh='".$_POST['bidanhcs']."', ";
		$sqlup = $sqlup."ngaysinh='".$_POST['ngaysinhcs']."', gioitinh='".$_POST['gioitinhcs']."', nguyenquan='".$_POST['nguyenquancs']."', truquan='".$_POST['truquancs']."', ";
		$sqlup = $sqlup."tghoatdong='".$_POST['tghoatdongcs']."', sonam='".$_POST['sonamcs']."', sothang='".$_POST['sothangcs']."', hhccp='".$_POST['hhccpcs']."', ";
		$sqlup = $sqlup."hangcp='".$_POST['hangcpcs']."', hhccm='".$_POST['hhccmcs']."', hangcm='".$_POST['hangcmcs']."', ";
		$sqlup = $sqlup."qdhhc='".$_POST['qdhhccs']."', qdtcml='".$_POST['qdtcmlcs']."', qdtcmtp='".$_POST['qdtcmtpcs']."', ";
		$sqlup = $sqlup."ngaymat='".$_POST['ngaymatcs']."', bhyt='".$_POST['bhytcs']."', nguoihuong='".$_POST['nguoihuongcs']."', ";
		$sqlup = $sqlup."ngaydc='".doingay1($_POST['ngaydccs'])."', noidc='".$_POST['noidccs']."', phanloaidc='".$_POST['phanloaidccs']."'";
		if ($_POST['fileanhcu'] != $fileanh)
			$sqlup = $sqlup.",filea='".$fileanh."'";	
		if ($filedkurl1 != "")
			$sqlup = $sqlup.", filedk='".$filedkurl1."'";
		$sqlup = $sqlup." where idhskc = ".$_POST['idhskccs'];
		$kq=mysqli_query($con,$sqlup);
	}
}
if(isset($_POST["themmoi"]))
{	
	if ($madv[3]=="Tỉnh" && $_POST['xahuyen'] != '' && $_POST['hoten'] != "" && $_POST['ngaysinh'] != "" && $_POST['nguyenquan'] != "" && $_POST['truquan'] != "")
	{
		$xh=explode('-',$_POST['xahuyen']);
		$sqltths="Select max(ttkc) as ttkc From hethongdv where tendonvi='".str_replace('_',' ',$xh[1])."' and tencaptren='".str_replace('_',' ',$xh[0])."'";
		$sql1=mysqli_query($con,$sqltths);$sotths=0;	
		while($row=mysqli_fetch_array($sql1)){	
			$sotths=$row['ttkc'];
		}
		$sotths=$sotths+1;
		$fileanh ="";	
		$tmp_name = $_FILES['filea']['tmp_name'];
		if($tmp_name != "")
		{				
			$path_parts = pathinfo($_FILES['filea']['name']);
			$fileup = $_POST['mahosotinh']."_".$path_parts['filename'].".".$path_parts['extension'];	
			move_uploaded_file($_FILES['filea']['tmp_name'],"$_SERVER[DOCUMENT_ROOT]/data/upload/".$fileup);
			$fileanh="/data/upload/".$fileup;				
		}
		// file đính kèm
			$filedkurl1 ="";
			$tmp_name1 = $_FILES['filedk']['tmp_name'];
			if($tmp_name1 != "")
			{				
				$path_parts1 = pathinfo($_FILES['filedk']['name']);
				$fileup1 = $_POST['mahosotinh']."_".$path_parts['filename'].".".$path_parts['extension'];	
				move_uploaded_file($_FILES['filedk']['tmp_name'],"$_SERVER[DOCUMENT_ROOT]/data/upload/".$fileup1);
				$filedkurl1="$_SERVER[DOCUMENT_ROOT]/data/upload/".$fileup1;				
			}
		// insert
		$sqlup = "Insert into hosokc Set mahosobo='".$_POST['mahosobo']."', mahosotinh='".$_POST['mahosotinh']."', hoten='".$_POST['hoten']."', bidanh='".$_POST['bidanh']."', ";
		$sqlup = $sqlup."ngaysinh='".$_POST['ngaysinh']."', gioitinh='".$_POST['gioitinh']."', nguyenquan='".$_POST['nguyenquan']."', truquan='".$_POST['truquan']."', ";
		$sqlup = $sqlup."tghoatdong='".$_POST['tghoatdong']."', sonam='".$_POST['sonam']."', sothang='".$_POST['sothang']."', hhccp='".$_POST['hhccp']."', ";
		$sqlup = $sqlup."hangcp='".$_POST['hangcp']."', hhccm='".$_POST['hhccm']."', hangcm='".$_POST['hangcm']."', ";
		$sqlup = $sqlup."qdhhc='".$_POST['qdhhc']."', qdtcml='".$_POST['qdtcml']."', qdtcmtp='".$_POST['qdtcmtp']."', ";
		$sqlup = $sqlup."ngaymat='".$_POST['ngaymat']."', bhyt='".$_POST['bhyt']."', nguoihuong='".$_POST['nguoihuong']."', ";
		$sqlup = $sqlup."ngaydc='".doingay1($_POST['ngaydc'])."', noidc='".$_POST['noidc']."', phanloaidc='".$_POST['phanloaidc']."', tths=$sotths, xa='".str_replace('_',' ',$xh[1])."', huyen='".str_replace('_',' ',$xh[0])."'";
		if ($fileanh != "")
			$sqlup = $sqlup.", filea='".$fileanh."'";
		if ($filedkurl1 != "")
			$sqlup = $sqlup.", filedk='".$filedkurl1."'";
		//echo $sqlup;	
		$kq=mysqli_query($con,$sqlup);
		$sqluptt="Update hethongdv Set ttkc=$sotths,tongkc=tongkc+1 where tendonvi='".str_replace('_',' ',$xh[1])."' and tencaptren='".str_replace('_',' ',$xh[0])."'";
		$kq1=mysqli_query($con,$sqluptt);
		$sqluptt1="Update hethongdv Set tongkc=tongkc+1 where tendonvi='".$madv[0]."' and tencaptren='".$madv[1]."'";
		$kq2=mysqli_query($con,$sqluptt1);
	}
}
if (isset($_POST["dichuyen"]))
{
	if ($madv[3]=="Tỉnh")
	{
		$sqlup = "Update hosokc Set truquan='".$_POST['noidck']."',ngaydc='".doingay1($_POST['ngaydck'])."',noidc='".$_POST['noidck']."',phanloaidc='".$_POST['phanloaidck']."'";
		if ($_POST['phanloaidck'] == "Chuyển đi nội tỉnh")
		{
			if ($_POST['tenxak'] != "")
			{				
				$xahuyen=explode('-',$_POST['tenxak']);
				$sqltths="Select max(ttkc) as ttkc From hethongdv where tendonvi='".str_replace('_',' ',$xahuyen[1])."' and tencaptren='".str_replace('_',' ',$xahuyen[0])."'";
				$sql1=mysqli_query($con,$sqltths);$sotths=0;	
				while($row=mysqli_fetch_array($sql1)){	
					$sotths=$row['ttkc'];
				}
				$sotths=$sotths+1;
				$sqlup = $sqlup.",xa='".str_replace('_',' ',$xahuyen[1])."',huyen='".str_replace('_',' ',$xahuyen[0])."',tths=$sotths where idhskc=".$_POST['soghidc'];
				$sqluptt="Update hethongdv Set ttkc=$sotths,tongkc=tongkc+1 where tendonvi='".str_replace('_',' ',$xahuyen[1])."' and tencaptren='".str_replace('_',' ',$xahuyen[0])."'";
				$kq1=mysqli_query($con,$sqluptt);
				//$sqluptt1="Update hethongdv Set tongkc=tongkc+1 where tendonvi='".$madv[0]."' and tencaptren='".$madv[1]."'";
				//$kq2=mysqli_query($con,$sqluptt1);
			}
		}
if (strrpos($sqlup,"where")<=0)
			$sqlup = $sqlup." where idhskc=".$_POST['soghidc'];
		$kq=mysqli_query($con,$sqlup);
	}
}	
?>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Hồ sơ hoạt động kháng chiến làm nghĩa vụ quốc tế giải phóng dân tộc</h4>
		</div>
			<div class="modal-body">
<form role='form' method='POST' class='form-horizontal form-groups-bordered'>	
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
		$sql="select * from hosokc where xa like '".$huyenxa[1]."%' and huyen like '".$huyenxa[0]."%' and mahosobo like '%".$_POST['mabotim']."%' and mahosotinh Like '%".$_POST['matinhtim']."%' and hoten Like '%".str_replace("_"," ",$_POST['hotentim'])."%'";
	else
{
if ($madv[3]=="Xã")
		$sql="select * from hosokc where mahosobo like '%".$_POST['mabotim']."%' and mahosotinh Like '%".$_POST['matinhtim']."%' and hoten Like '%".str_replace("_"," ",$_POST['hotentim'])."%' and xa='".$madv[0]."'";
else if ($madv[3]=="Huyện")
$sql="select * from hosokc where mahosobo like '%".$_POST['mabotim']."%' and mahosotinh Like '%".$_POST['matinhtim']."%' and hoten Like '%".str_replace("_"," ",$_POST['hotentim'])."%' and huyen='".$madv[0]."'";
else
$sql="select * from hosokc where mahosobo like '%".$_POST['mabotim']."%' and mahosotinh Like '%".$_POST['matinhtim']."%' and hoten Like '%".str_replace("_"," ",$_POST['hotentim'])."%'";
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
		$sql="select * from hosokc where xa like '".$huyenxa[1]."%' and huyen like '".$huyenxa[0]."%' and mahosobo like '%".$ths[3]."%' and mahosotinh Like '%".$ths[4]."%' and hoten Like '%".str_replace("_"," ",$ths[5])."%'";
	else
{
if ($madv[3]=="Xã")
		$sql="select * from hosokc where mahosobo like '%".$ths[3]."%' and mahosotinh Like '%".$ths[4]."%' and hoten Like '%".str_replace("_"," ",$ths[5])."%' and xa='".$madv[0]."'";
else if ($madv[3]=="Huyện")
$sql="select * from hosokc where mahosobo like '%".$ths[3]."%' and mahosotinh Like '%".$ths[4]."%' and hoten Like '%".str_replace("_"," ",$ths[5])."%' and huyen='".$madv[0]."'";
else
$sql="select * from hosokc where mahosobo like '%".$ths[3]."%' and mahosotinh Like '%".$ths[4]."%' and hoten Like '%".str_replace("_"," ",$ths[5])."%'";
}
	$j = $ths[0];
	echo "<input name='timdonvi' type='text' class='form-control' style='display:none' id='timdonvi' value='".$ths[2]."'>";
	echo "<input name='timmabo' type='text' class='form-control' style='display:none' id='timmabo' value='".$ths[3]."'>";
	echo "<input name='timmatinh' type='text' class='form-control' style='display:none' id='timmatinh' value='".$ths[4]."'>";	
	echo "<input name='timhoten' type='text' class='form-control' style='display:none' id='timhoten' value='".$ths[5]."'>";
}
		echo "<div  class='col-sm-2' style='margin-top:-7px'>";
			echo "<select style='margin-left:-90px;' name='trang' class='form-control' id='trang'>";
	$ls =  array(array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28"));		
	$cs=0;
	//$sql="select * from hosokc";
	$sql1=mysqli_query($con,$sql);
	$kq = 0;$kq1 = 1;
	if ($j == 1)
		echo "<option selected='selected' value='$kq1'>$kq1</option>";
	else
		echo "<option value='$kq1'>$kq1</option>";
	while($row=mysqli_fetch_array($sql1)){
		$ls[$cs][0] = $row['hoten'];
		$ls[$cs][1] = $row['bidanh'];
		$ls[$cs][2] = $row['ngaysinh'];
		$ls[$cs][3] = $row['gioitinh'];
		$ls[$cs][4] = $row['nguyenquan'];
		$ls[$cs][5] = $row['truquan'];
		$ls[$cs][6] = $row['tghoatdong'];
		$ls[$cs][7] = $row['sonam'];
		$ls[$cs][8] = $row['sothang'];
		$ls[$cs][9] = $row['hhccp'];
		$ls[$cs][10] = $row['hangcp'];
		$ls[$cs][11] = $row['hhccm'];
		$ls[$cs][12] = $row['hangcm'];
		$ls[$cs][13] = $row['qdhhc'];
		$ls[$cs][14] = $row['qdtcml'];
		$ls[$cs][15] = $row['qdtcmtp'];
		$ls[$cs][16] = $row['ngaymat'];
		$ls[$cs][17] = $row['tths'];
		$ls[$cs][18] = $row['filea'];		
		$ls[$cs][19] = $row['mahosobo'];
		$ls[$cs][20] = $row['mahosotinh'];
		$ls[$cs][21] = $row['idhskc'];
		$ls[$cs][22] = $row['bhyt'];
		$ls[$cs][23] = $row['ngaydc'];
		$ls[$cs][24] = $row['noidc'];
		$ls[$cs][25] = $row['phanloaidc'];	
		$ls[$cs][26] = $row['filedk'];
		$ls[$cs][27] = $row['nguoihuong'];
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
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>idhskc</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>bidanh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>tghoatdong</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>sonam</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>sothang</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>hhccp</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>hangcp</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>hhccm</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>hangcm</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>qdhhc</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>qdtcml</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>qdtcmtp</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ngaymat</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>tths</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>filea</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>mahosobo</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>mahosotinh</strong></th>	
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
					echo "<td>".$ls[$i][17]."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][0]."</td>";
					echo "<td>".$ls[$i][2]."</td>";
					echo "<td>".$ls[$i][3]."</td>";
					echo "<td style='text-align: left;'>".catchuoi($ls[$i][4])."</td>";
					echo "<td style='text-align: left;'>".catchuoi($ls[$i][5])."</td>";					
					echo "<td style='text-align: left; display:none'>".$ls[$i][21]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][1]."</td>";
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
					echo "<td style='text-align: left; display:none'>".$ls[$i][22]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][23]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][24]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][25]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][26]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][27]."</td>";
					if ($madv[3]=="Tỉnh")
					{
						echo"<td>					
							<a href=\"xoatim.php?id=".$ls[$i][21].">".$tentim.">".$hsbotim.">".$hstinhtim.">".$hshotentim."\"  title='Xóa hố sơ và thông tin liên quan' onclick=\"return confirm('Bạn muốn xóa hố sơ này?')\" class='btn btn-red '>
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
		/* $ihs = $ahs[1];
		$sqlgt = "Select * From giaytokc Where idhskc = $ihs";	
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
								<input name="mahosobo" type="text" class="form-control" id="mahosobo">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Mã hồ sơ tỉnh:</label>
							<div class="col-sm-2">
								<input name="mahosotinh" type="text" class="form-control" id="mahosotinh">
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
							<label for="field-3" class="col-sm-2 control-label">Thời gian hoạt động:</label>
							<div class="col-sm-7">
								<input name="tghoatdong" type="text" class="form-control" id="tghoatdong">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Số tháng:</label>
							<div class="col-sm-3">
								<input name="sothang" type="text" class="form-control" id="sothang">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Số năm:</label>
							<div class="col-sm-2">
								<input name="sonam" type="text" class="form-control" id="sonam">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Huân huy chương CP:</label>
							<div class="col-sm-6">
								<select name="hhccp" id="hhccp" class="form-control">
									<option value="Huân chương chống Pháp">Huân chương chống Pháp</option>
									<option value="Huy chương chống Pháp">Huy chương chống Pháp</option>
									<option value=""></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Cấp hạng:</label>
							<div class="col-sm-2">
								<input name="hangcp" type="text" class="form-control" id="hangcp">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Huân huy chương CM:</label>
							<div class="col-sm-6">								
								<select name="hhccm" id="hhccm" class="form-control">
									<option value="Huân chương chống Mỹ">Huân chương chống Mỹ</option>
									<option value="Huy chương chống Mỹ">Huy chương chống Mỹ</option>
									<option value=""></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Cấp hạng:</label>
							<div class="col-sm-2">
								<input name="hangcm" type="text" class="form-control" id="hangcm">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Quyết định hhc:</label>
							<div class="col-sm-10">
								<input name="qdhhc" type="text" class="form-control" id="qdhhc">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Quyết định tcml:</label>
							<div class="col-sm-10">
								<input name="qdtcml" type="text" class="form-control" id="qdtcml">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Quyết định mtp:</label>
							<div class="col-sm-6">
								<input name="qdtcmtp" type="text" class="form-control" id="qdtcmtp">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ngày mất:</label>
							<div class="col-sm-2">
								<input name="ngaymat" type="text" class="form-control" data-mask="date" id="ngaymat">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Người hưởng:</label>
							<div class="col-sm-10">
								<input name="nguoihuong" type="text" class="form-control" id="nguoihuong">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Có BHYT:</label>
							<div class="col-sm-2">								
								<select name="bhyt" id="bhyt" class="form-control">
									<option value="Có">Có</option>
									<option value="Không">Không</option>
									<option value="" selected = "selected"></option>
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
							<div class="col-sm-10">
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
								<input name="mahosobocs" type="text" class="form-control" id="mahosobocs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Mã hồ sơ tỉnh:</label>
							<div class="col-sm-2">
								<input name="mahosotinhcs" type="text" class="form-control" id="mahosotinhcs">
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
							<label for="field-3" class="col-sm-2 control-label">Thời gian hoạt động:</label>
							<div class="col-sm-7">
								<input name="tghoatdongcs" type="text" class="form-control" id="tghoatdongcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Số tháng:</label>
							<div class="col-sm-3">
								<input name="sothangcs" type="text" class="form-control" id="sothangcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Số năm:</label>
							<div class="col-sm-2">
								<input name="sonamcs" type="text" class="form-control" id="sonamcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Huân huy chương CP:</label>
							<div class="col-sm-6">
								<select name="hhccpcs" id="hhccpcs" class="form-control">
									<option value="Huân chương chống Pháp">Huân chương chống Pháp</option>
									<option value="Huy chương chống Pháp">Huy chương chống Pháp</option>
									<option value=""></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Cấp hạng:</label>
							<div class="col-sm-2">
								<input name="hangcpcs" type="text" class="form-control" id="hangcpcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Huân huy chương CM:</label>
							<div class="col-sm-6">								
								<select name="hhccmcs" id="hhccmcs" class="form-control">
									<option value="Huân chương chống Mỹ">Huân chương chống Mỹ</option>
									<option value="Huy chương chống Mỹ">Huy chương chống Mỹ</option>
									<option value=""></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Cấp hạng:</label>
							<div class="col-sm-2">
								<input name="hangcmcs" type="text" class="form-control" id="hangcmcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Quyết định hhc:</label>
							<div class="col-sm-10">
								<input name="qdhhccs" type="text" class="form-control" id="qdhhccs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Quyết định tcml:</label>
							<div class="col-sm-10">
								<input name="qdtcmlcs" type="text" class="form-control" id="qdtcmlcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Quyết định mtp:</label>
							<div class="col-sm-6">
								<input name="qdtcmtpcs" type="text" class="form-control" id="qdtcmtpcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ngày mất:</label>
							<div class="col-sm-2">
								<input name="ngaymat" type="text" class="form-control" data-mask="date" id="ngaymat">
							</div>	
							<label for="field-3" class="col-sm-2 control-label">Người hưởng:</label>
							<div class="col-sm-10">
								<input name="nguoihuongcs" type="text" class="form-control" id="nguoihuongcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Có BHYT:</label>
							<div class="col-sm-2">								
								<select name="bhytcs" id="bhytcs" class="form-control">
									<option value="Có">Có</option>
									<option value="Không">Không</option>
									<option value=""></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Phân loại đi, đến:</label>
							<div class="col-sm-6">								
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
							<div class="col-sm-6">
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
								<input name="idhskccs" type="text" class="form-control" style="display:none" id="idhskccs">
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
			return "nhaphosoncctim.php?id=" + $('#trang').val() + ">" + $('#idhskccs').val();			
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