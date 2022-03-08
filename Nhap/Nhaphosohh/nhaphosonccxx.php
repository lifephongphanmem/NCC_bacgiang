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
function showAjaxModalhoatdong()
{		
	window.location.href="nhaphoatdong.php?id="+$("#soghi").val();	
}
function showAjaxModalgiayto()
{		
	window.location.href="nhapgiayto.php?id="+$("#soghi").val();	
}	
function showAjaxModaldc()
{		
	window.location.href="/Reports/Phieudoichieuhh.php?id="+$("#soghi").val()+">"+$("#hotendc").val()+">"+$("#ngaysinhdc").val()+">"+$("#nguyenquandc").val()+">"+$("#truquandc").val()+">"+$("#mahsbodc").val()+">"+$("#mahstinhdc").val()+">"+$("#tthsdc").val()+">"+$("#ketluansgknlddc").val()+">"+$("#tendv").val()+">"+$("#tenct").val()+">"+$("#quanly").val();	
}	
function showAjaxModaltl()
{		
	window.location.href="/Reports/TrichLucHSCDDC.php?id="+$("#soghi").val();	
}
</script>

<script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() 
			{  
			   $('table tbody tr').click(function() 
			   { 
					if ($(this).find('td:last').text() == "ncc")
					{
						//alert("bbbb"+ $(this).find('td:nth-child(7)').text());
						$("#soghidc").val($(this).find('td:nth-child(7)').text());
						$("#soghi").val($(this).find('td:nth-child(7)').text());
						$("#hotendc").val($(this).find('td:nth-child(2)').text());
						$("#ngaysinhdc").val($(this).find('td:nth-child(3)').text());
						$("#nguyenquandc").val($(this).find('td:nth-child(5)').text());
						$("#truquandc").val($(this).find('td:nth-child(6)').text());
						$("#mahsbodc").val($(this).find('td:nth-child(8)').text());
						$("#mahstinhdc").val($(this).find('td:nth-child(9)').text());
						$("#tthsdc").val($(this).find('td:nth-child(26)').text());
						$("#ketluansgknlddc").val($(this).find('td:nth-child(15)').text());
						$("#xadc").val($(this).find('td:nth-child(39)').text());
						$("#huyendc").val($(this).find('td:nth-child(40)').text());
						$('#thannhan').load('ajax_thannhan.php?id_a=' + $(this).find('td:nth-child(7)').text());
						$('#giayto').load('ajax_giayto.php?id_a=' + $(this).find('td:nth-child(7)').text());
						$('#hoatdong').load('ajax_hoatdong.php?id_a=' + $(this).find('td:nth-child(7)').text());
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
						$("#mahosobocs").val($(this).find('td:nth-child(8)').text());	
						$("#mahosotinhcs").val($(this).find('td:nth-child(9)').text());
						$("#hotencs").val($(this).find('td:nth-child(2)').text());
						$("#bidanhcs").val($(this).find('td:nth-child(10)').text());
						$("#ngaysinhcs").val($(this).find('td:nth-child(3)').text());
						$("#gioitinhcs").val($(this).find('td:nth-child(4)').text());
						$("#nguyenquancs").val($(this).find('td:nth-child(5)').text());
						$("#truquancs").val($(this).find('td:nth-child(6)').text());
						$("#tinhtrangbenhcs").val($(this).find('td:nth-child(11)').text());
						$("#bbgdsongaycs").val($(this).find('td:nth-child(12)').text());
						$("#hoidongcs").val($(this).find('td:nth-child(13)').text());
						$("#ketquacs").val($(this).find('td:nth-child(14)').text());
						$("#tlsgknldcs").val($(this).find('td:nth-child(15)').text());
						$("#giaycnbhhcs").val($(this).find('td:nth-child(16)').text());
						$("#qdtcsongaycs").val($(this).find('td:nth-child(17)').text());
						$("#ngayhuongcs").val($(this).find('td:nth-child(18)').text());
						$("#tcmotlancs").val($(this).find('td:nth-child(19)').text());
						$("#tchangthangcs").val($(this).find('td:nth-child(20)').text());
						$("#tcdacbietcs").val($(this).find('td:nth-child(21)').text());
						$("#phucapkvcs").val($(this).find('td:nth-child(22)').text());
						$("#sosotccs").val($(this).find('td:nth-child(23)').text());
						$("#loaiddcs").val($(this).find('td:nth-child(24)').text());
						$("#namddlccs").val($(this).find('td:nth-child(25)').text());											
						$("#idhshhcs").val($(this).find('td:nth-child(7)').text());
						$("#fileanhcu").val($(this).find('td:nth-child(27)').text());
						$("#dieuduongcs").val($(this).find('td:nth-child(28)').text());
						$("#hinhthucddltcs").val($(this).find('td:nth-child(29)').text());
						$("#bhytcs").val($(this).find('td:nth-child(30)').text());
						if ($(this).find('td:nth-child(31)').text()=="0000-00-00")
							$("#ngaydccs").val("");
						else	
							$("#ngaydccs").val(ngaythang($(this).find('td:nth-child(31)').text()));
$("#noidccs").val($(this).find('td:nth-child(32)').text());
$("#phanloaidccs").val($(this).find('td:nth-child(33)').text());
						document.getElementById("dd").src = $(this).find('td:nth-child(27)').text();
						var ddfile=$(this).find('td:nth-child(34)').text().lastIndexOf('/');
						document.getElementById("duongdan").href = "download.php?id=/data/upload"+$(this).find('td:nth-child(34)').text().substr(ddfile);
						if ($(this).find('td:nth-child(34)').text()=="")
							document.getElementById("duongdan").style = "display:none";
						else
							document.getElementById("duongdan").style = "color:rgb(245, 24, 63);display:show";
						$("#ngaynhapnghucs").val($(this).find('td:nth-child(35)').text());
						$("#giaytocmcs").val($(this).find('td:nth-child(36)').text());
						$("#coquandvcs").val($(this).find('td:nth-child(37)').text());
						$("#ghichucs").val($(this).find('td:nth-child(38)').text());
						$("#ngaymatcs").val($(this).find('td:nth-child(41)').text());
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
		$sqlup = "Update hosohh Set mahosobo='".$_POST['mahosobocs']."', mahosotinh='".$_POST['mahosotinhcs']."', hoten='".$_POST['hotencs']."', bidanh='".$_POST['bidanhcs']."', ";
		$sqlup = $sqlup."ngaysinh='".$_POST['ngaysinhcs']."',gioitinh='".$_POST['gioitinhcs']."', nguyenquan='".$_POST['nguyenquancs']."', truquan='".$_POST['truquancs']."', ";
		$sqlup = $sqlup."tinhtrangbenh='".$_POST['tinhtrangbenhcs']."', bbgdsongay='".$_POST['bbgdsongaycs']."', hoidong='".$_POST['hoidongcs']."', ketqua='".$_POST['ketquacs']."', ";
		$sqlup = $sqlup."tlsgknld=".$_POST['tlsgknldcs'].", giaycnbhh='".$_POST['giaycnbhhcs']."', qdtcsongay='".$_POST['qdtcsongaycs']."', ";
		$sqlup = $sqlup."ngayhuong='".$_POST['ngayhuongcs']."', tcmotlan='".$_POST['tcmotlancs']."', tchangthang='".$_POST['tchangthangcs']."', ";
		$sqlup = $sqlup."tcdacbiet='".$_POST['tcdacbietcs']."', phucapkv='".$_POST['phucapkvcs']."', sosotc='".$_POST['sosotccs']."', ";
		$sqlup = $sqlup."loaidd='".$_POST['loaiddcs']."', namddlc='".$_POST['namddlccs']."', ";
		$sqlup = $sqlup."dieuduong='".$_POST['dieuduongcs']."', hinhthucddlt='".$_POST['hinhthucddltcs']."', bhyt='".$_POST['bhytcs']."', ";
		$sqlup = $sqlup."ngaydc='".doingay1($_POST['ngaydccs'])."', noidc='".$_POST['noidccs']."', phanloaidc='".$_POST['phanloaidccs']."', ";
		$sqlup = $sqlup."ngaynhapnghu='".$_POST['ngaynhapnghucs']."', giaytocm='".$_POST['giaytocmcs']."', coquandv='".$_POST['coquandvcs']."', ghichu='".$_POST['ghichucs']."', ngaymat='".$_POST['ngaymatcs']."'";
		if ($_POST['fileanhcu'] != $fileanh)
		{
			if ($fileanh != "")
				$sqlup = $sqlup.", filea='".$fileanh."'";
		}
		if ($filedkurl1 != "")
			$sqlup = $sqlup.", filedk='".$filedkurl1."'";
		$sqlup = $sqlup." where idhshh = ".$_POST['idhshhcs'];	
		//echo $sqlup;	
		$kq=mysqli_query($con,$sqlup);
	}
}
if(isset($_POST["themmoi"]))
{	
	if ($madv[3]=="Tỉnh" && $_POST['xahuyen'] != '' && $_POST['hoten'] != "" && $_POST['ngaysinh'] != "" && $_POST['nguyenquan'] != "" && $_POST['truquan'] != "")
	{
		$xh=explode('-',$_POST['xahuyen']);
		$sqltths="Select max(tthh) as tthh From hethongdv where tendonvi='".str_replace('_',' ',$xh[1])."' and tencaptren='".str_replace('_',' ',$xh[0])."'";
		$sql1=mysqli_query($con,$sqltths);$sotths=0;	
		while($row=mysqli_fetch_array($sql1)){	
			$sotths=$row['tthh'];
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
		$sqlup = "Insert into hosohh Set mahosobo='".$_POST['mahosobo']."', mahosotinh='".$_POST['mahosotinh']."', hoten='".$_POST['hoten']."', bidanh='".$_POST['bidanh']."', ";
		$sqlup = $sqlup."ngaysinh='".$_POST['ngaysinh']."',gioitinh='".$_POST['gioitinh']."', nguyenquan='".$_POST['nguyenquan']."', truquan='".$_POST['truquan']."', ";
		$sqlup = $sqlup."tinhtrangbenh='".$_POST['tinhtrangbenh']."', bbgdsongay='".$_POST['bbgdsongay']."', hoidong='".$_POST['hoidong']."', ketqua='".$_POST['ketqua']."', ";
		$sqlup = $sqlup."tlsgknld=".$_POST['tlsgknld'].", giaycnbhh='".$_POST['giaycnbhh']."', qdtcsongay='".$_POST['qdtcsongay']."', ";
		$sqlup = $sqlup."ngayhuong='".$_POST['ngayhuong']."', tcmotlan='".$_POST['tcmotlan']."', tchangthang='".$_POST['tchangthang']."', ";
		$sqlup = $sqlup."tcdacbiet='".$_POST['tcdacbiet']."', phucapkv='".$_POST['phucapkv']."', sosotc='".$_POST['sosotc']."', ";
		$sqlup = $sqlup."loaidd='".$_POST['loaidd']."', namddlc='".$_POST['namddlc']."', ";	
		$sqlup = $sqlup."dieuduong='".$_POST['dieuduong']."', hinhthucddlt='".$_POST['hinhthucddlt']."', bhyt='".$_POST['bhyt']."', ";
		$sqlup = $sqlup."ngaydc='".doingay1($_POST['ngaydc'])."', noidc='".$_POST['noidc']."', phanloaidc='".$_POST['phanloaidc']."', tths=$sotths, xa='".str_replace('_',' ',$xh[1])."', huyen='".str_replace('_',' ',$xh[0])."', ";
		$sqlup = $sqlup."ngaynhapnghu='".$_POST['ngaynhapnghu']."', giaytocm='".$_POST['giaytocm']."', coquandv='".$_POST['coquandv']."', ghichu='".$_POST['ghichu']."', ngaymat='".$_POST['ngaymat']."'";
		if ($fileanh != "")
			$sqlup = $sqlup.", filea='".$fileanh."'";
		if ($filedkurl1 != "")
			$sqlup = $sqlup.", filedk='".$filedkurl1."'";
		//echo $sqlup;	
		$kq=mysqli_query($con,$sqlup);
		$sqluptt="Update hethongdv Set tthh=$sotths,tonghh=tonghh+1 where tendonvi='".str_replace('_',' ',$xh[1])."' and tencaptren='".str_replace('_',' ',$xh[0])."'";
		$kq1=mysqli_query($con,$sqluptt);
		$sqluptt1="Update hethongdv Set tonghh=tonghh+1 where tendonvi='".$madv[0]."' and tencaptren='".$madv[1]."'";
		$kq2=mysqli_query($con,$sqluptt1);
	}
}
if (isset($_POST["dichuyen"]))
{
	if ($madv[3]=="Tỉnh")
	{
		$sqlup = "Update hosohh Set truquan='".$_POST['noidck']."',ngaydc='".doingay1($_POST['ngaydck'])."',noidc='".$_POST['noidck']."',phanloaidc='".$_POST['phanloaidck']."'";
		if ($_POST['phanloaidck'] == "Chuyển đi nội tỉnh")
		{
			if ($_POST['tenxak'] != "")
			{				
				$xahuyen=explode('-',$_POST['tenxak']);
				$sqltths="Select max(tthh) as tthh From hethongdv where tendonvi='".str_replace('_',' ',$xahuyen[1])."' and tencaptren='".str_replace('_',' ',$xahuyen[0])."'";
				$sql1=mysqli_query($con,$sqltths);$sotths=0;	
				while($row=mysqli_fetch_array($sql1)){	
					$sotths=$row['tthh'];
				}
				$sotths=$sotths+1;
				$sqlup = $sqlup.",xa='".str_replace('_',' ',$xahuyen[1])."',huyen='".str_replace('_',' ',$xahuyen[0])."',tths=$sotths where idhshh=".$_POST['soghidc'];
				$sqluptt="Update hethongdv Set tthh=$sotths,tonghh=tonghh+1 where tendonvi='".str_replace('_',' ',$xahuyen[1])."' and tencaptren='".str_replace('_',' ',$xahuyen[0])."'";
				$kq1=mysqli_query($con,$sqluptt);
				//$sqluptt1="Update hethongdv Set tonghh=tonghh+1 where tendonvi='".$madv[0]."' and tencaptren='".$madv[1]."'";
				//$kq2=mysqli_query($con,$sqluptt1);
			}
		}
		$kq=mysqli_query($con,$sqlup);
	}
}		
?>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Hồ sơ người hoạt động kháng chiến bị nhiễm CĐHH  <span style = "float:right">Tổng hồ sơ: <?php echo $madv[12];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></h4>
		</div>
			<div class="modal-body">
<form role='form' method='POST' class='form-horizontal form-groups-bordered'>				
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModalgiayto();" class='btn btn-success'>
			<i class='entypo-pencil'></i>Giấy tờ
		</a>
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModalthannhan();" class='btn btn-success'>
			<i class='entypo-pencil'></i>Thân nhân
		</a>
		<a style = "float:right; background-color:rgb(83, 181, 166)" onclick="showAjaxModalhoatdong();" class='btn btn-success'>
			<i class='entypo-pencil'></i>Hoạt động
		</a>
	<?php	
	if ($madv[3]=="Tỉnh")
{	
		echo "<a style = 'float:right; background-color:rgb(83, 181, 166)' onclick='showAjaxModalhs();' class='btn btn-success'>
			<i class='entypo-new'></i>Thêm hs
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
$ahs = explode('>',$_GET['id']);
$j = $ahs[0];$kq=0;$sotr=0;$sotr= (int)($madv[12]/5);$sotrthieu=$madv[12]/5;
		if ($sotrthieu-$sotr >0)
	$sotr=$sotr+1;
$sotr=$sotr+1;
		echo "<div  class='col-sm-2' style='margin-top:-7px'>";
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
	$ls =  array(array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33","34","35","36","37","38","39","40"));		
	$cs=0;
	if ($madv[3]=="Tỉnh")
		$sql="select * from hosohh LIMIT ".(5*($j-1)).",5";
	else if ($madv[3]=="Huyện")
		$sql="select * from hosohh where huyen='$madv[0]' LIMIT ".(5*($j-1)).",5";
	else if ($madv[3]=="Xã")
		$sql="select * from hosohh where xa='$madv[0]' and huyen='$madv[1]' LIMIT ".(5*($j-1)).",5";
	//$sql="select * from hosohh";
	$sql1=mysqli_query($con,$sql);	
	while($row=mysqli_fetch_array($sql1)){
		$ls[$cs][0] = $row['mahosobo'];
		$ls[$cs][1] = $row['mahosotinh'];
		$ls[$cs][2] = $row['hoten'];
		$ls[$cs][3] = $row['bidanh'];
		$ls[$cs][4] = $row['ngaysinh'];
		$ls[$cs][5] = $row['gioitinh'];
		$ls[$cs][6] = $row['nguyenquan'];
		$ls[$cs][7] = $row['truquan'];
		$ls[$cs][8] = $row['tinhtrangbenh'];
		$ls[$cs][9] = $row['bbgdsongay'];
		$ls[$cs][10] = $row['hoidong'];
		$ls[$cs][11] = $row['ketqua'];
		$ls[$cs][12] = $row['tlsgknld'];
		$ls[$cs][13] = $row['giaycnbhh'];
		$ls[$cs][14] = $row['qdtcsongay'];
		$ls[$cs][15] = $row['ngayhuong'];
		$ls[$cs][16] = $row['tcmotlan'];
		$ls[$cs][17] = $row['tchangthang'];
		$ls[$cs][18] = $row['tcdacbiet'];
		$ls[$cs][19] = $row['phucapkv'];
		$ls[$cs][20] = $row['sosotc'];
		$ls[$cs][21] = $row['loaidd'];
		$ls[$cs][22] = $row['namddlc'];
		$ls[$cs][23] = $row['tths'];
		$ls[$cs][24] = $row['filea'];
		$ls[$cs][25] = $row['idhshh'];
		$ls[$cs][26] = $row['dieuduong'];
		$ls[$cs][27] = $row['hinhthucddlt'];
		$ls[$cs][28] = $row['bhyt'];
		$ls[$cs][29] = $row['ngaydc'];
		$ls[$cs][30] = $row['noidc'];
		$ls[$cs][31] = $row['phanloaidc'];	
		$ls[$cs][32] = $row['filedk'];
		$ls[$cs][33] = $row['ngaynhapnghu'];
		$ls[$cs][34] = $row['giaytocm'];
		$ls[$cs][35] = $row['coquandv'];
		$ls[$cs][36] = $row['ghichu'];
		$ls[$cs][37] = $row['xa'];
		$ls[$cs][38] = $row['huyen'];
		$ls[$cs][39] = $row['ngaymat'];
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
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>idhshh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>mahosobo</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>mahosotinh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>bidanh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>tinhtrangbenh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>bbgdsongay</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>hoidong</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ketqua</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>tlsgknld</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>giaycnbhh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>qdtcsongay</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ngayhuong</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>tcmotlan</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>tchangthang</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>tcdacbiet</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>phucapkv</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>sosotc</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>loaidd</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>namddlc</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>tths</strong></th>
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
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>xa</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>huyen</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ngaymat</strong></th>
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
					echo "<td>".$ls[$i][23]."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][2]."</td>";
					echo "<td>".$ls[$i][4]."</td>";
					echo "<td>".$ls[$i][5]."</td>";
					echo "<td style='text-align: left;'>".catchuoi($ls[$i][6])."</td>";
					echo "<td style='text-align: left;'>".catchuoi($ls[$i][7])."</td>";					
					echo "<td style='text-align: left; display:none'>".$ls[$i][25]."</td>";
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
					if ($madv[3]=="Tỉnh")
					{
						echo"<td>					
							<a href=\"xoa.php?id=".$ls[$i][25]."\"  title='Xóa hố sơ và thông tin liên quan' onclick=\"return confirm('Bạn muốn xóa hố sơ này?')\" class='btn btn-red '>
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
	<div id = "hoatdong" class="table-responsive">
		<table class="table table-hover table-striped table-bordered table-advanced tablesorter display" id="table-3">
			<thead>
				<tr>
					<th style="background-color:rgb(54, 169, 224)" width="6%"><strong style='color:rgb(255, 255, 225)'>STT</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="12%"><strong style='color:rgb(255, 255, 225)'>Thời gian từ</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="12%"><strong style='color:rgb(255, 255, 225)'>Thời gian đến</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="35%"><strong style='color:rgb(255, 255, 225)'>Cơ quan, đơn vị</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="35%"><strong style='color:rgb(255, 255, 225)'>Địa bàn hoạt động</strong></th>				
				</tr>				
			</thead>
	<?php		
	/* $ihs = $ahs[1];	
	$sqltn = "Select * From quatrinhhdhh Where idhshh = $ihs";	
	$i3 = 0;	
	$qrcttn = mysqli_query($con,$sqltn);			
			echo "<tbody id='rowlist' class='rowlist'>";
	while($rcttn=@mysqli_fetch_array($qrcttn))
		{	
			$i3 = $i3 + 1;
				echo "<tr>";
					echo "<td>".$i3."</td>";
					echo "<td style='text-align: left;'>".$rcttn['tgtu']."</td>";
					echo "<td style='text-align: left;'>".$rcttn['tgden']."</td>";
					echo "<td style='text-align: left;'>".$rcttn['coquan']."</td>";
					echo "<td style='text-align: left;'>".$rcttn['diaban']."</td>";
				echo "</tr>";
		}		
			echo "</tbody>"; */
	?>		
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
	$sqltn = "Select * From thannhanhh Where idhshh = $ihs";	
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
		/* $sqlgt = "Select * From giaytohh Where idhshh = $ihs";	
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
							<label for="field-3" class="col-sm-2 control-label">Ngày nhập ngũ:</label>
							<div class="col-sm-3">
								<input name="ngaynhapnghu" type="text" class="form-control" id="ngaynhapnghu">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Đơn vị:</label>
							<div class="col-sm-2">
								<input name="coquandv" type="text" class="form-control" id="coquandv">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Giấy tờ chứng minh:</label>
							<div class="col-sm-7">
								<input name="giaytocm" type="text" class="form-control" id="giaytocm">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tình trạng bệnh:</label>
							<div class="col-sm-10">
								<input name="tinhtrangbenh" type="text" class="form-control" id="tinhtrangbenh">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Biên bản giám định:</label>
							<div class="col-sm-10">
								<input name="bbgdsongay" type="text" class="form-control" id="bbgdsongay">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Hội đồng giám định:</label>
							<div class="col-sm-6">
								<input name="hoidong" type="text" class="form-control" id="hoidong">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Kết quả giám định:</label>
							<div class="col-sm-2">
								<input name="ketqua" type="text" class="form-control" id="ketqua">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tỉ lệ sgknlđ:</label>
							<div class="col-sm-2">
								<input name="tlsgknld" type="text" class="form-control" id="tlsgknld">
							</div>
							<label for="field-3" class="col-sm-2 control-label">giấy chứng nhận NHH:</label>
							<div class="col-sm-2">
								<input name="giaycnbhh" type="text" class="form-control" id="giaycnbhh">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Quyết định số, ngày:</label>
							<div class="col-sm-2">
								<input name="qdtcsongay" type="text" class="form-control" id="qdtcsongay">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ngày hưởng trợ cấp:</label>
							<div class="col-sm-2">
								<input name="ngayhuong" type="text" class="form-control" data-mask="date" id="ngayhuong">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Trợ cấp hàng tháng:</label>
							<div class="col-sm-6">
								<input name="tchangthang" type="text" class="form-control" data-mask="fdecimal" id="tchangthang">
							</div>							
							<label for="field-3" class="col-sm-2 control-label">trợ cấp một lần:</label>							
							<div class="col-sm-2">
								<input name="tcmotlan" type="text" class="form-control" data-mask="fdecimal" id="tcmotlan">		
							</div>	
							<label for="field-3" class="col-sm-2 control-label">Trợ cấp đặc biệt:</label>							
							<div class="col-sm-2">	
								<input name="tcdacbiet" type="text" class="form-control" data-mask="fdecimal" id="tcdacbiet">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Phụ cấp khu vực:</label>							
							<div class="col-sm-2">	
								<input name="phucapkv" type="text" class="form-control" data-mask="fdecimal" id="phucapkv">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Số sổ trợ cấp:</label>
							<div class="col-sm-2">
								<input name="sosotc" type="text" class="form-control" id="sosotc">
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
							<label for="field-3" class="col-sm-2 control-label">Năm điều dưỡng</label>
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
							<label for="field-3" class="col-sm-2 control-label">Ngày mất:</label>
							<div class="col-sm-2">
								<input name="ngaymat" type="text" class="form-control" data-mask="date" id="ngaymat">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ghi chú:</label>
							<div class="col-sm-6">
								<input name="ghichu" type="text" class="form-control" id="ghichu">
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
							<label for="field-3" class="col-sm-2 control-label">Ngày nhập ngũ:</label>
							<div class="col-sm-3">
								<input name="ngaynhapnghucs" type="text" class="form-control" data-mask="date" id="ngaynhapnghucs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Đơn vị:</label>
							<div class="col-sm-2">
								<input name="coquandvcs" type="text" class="form-control" id="coquandvcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Giấy tờ chứng minh:</label>
							<div class="col-sm-7">
								<input name="giaytocmcs" type="text" class="form-control" id="giaytocmcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tình trạng bệnh:</label>
							<div class="col-sm-10">
								<input name="tinhtrangbenhcs" type="text" class="form-control" id="tinhtrangbenhcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Biên bản giám định:</label>
							<div class="col-sm-10">
								<input name="bbgdsongaycs" type="text" class="form-control" id="bbgdsongaycs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Hội đồng giám định:</label>
							<div class="col-sm-6">
								<input name="hoidongcs" type="text" class="form-control" id="hoidongcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Kết quả giám định:</label>
							<div class="col-sm-2">
								<input name="ketquacs" type="text" class="form-control" id="ketquacs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tỉ lệ sgknlđ:</label>
							<div class="col-sm-2">
								<input name="tlsgknldcs" type="text" class="form-control" id="tlsgknldcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">giấy chứng nhận NHH:</label>
							<div class="col-sm-2">
								<input name="giaycnbhhcs" type="text" class="form-control" id="giaycnbhhcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Quyết định số, ngày:</label>
							<div class="col-sm-2">
								<input name="qdtcsongaycs" type="text" class="form-control" id="qdtcsongaycs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ngày hưởng trợ cấp:</label>
							<div class="col-sm-2">
								<input name="ngayhuongcs" type="text" class="form-control" data-mask="date" id="ngayhuongcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Trợ cấp hàng tháng:</label>
							<div class="col-sm-6">		
								<input name="tchangthangcs" type="text" class="form-control" data-mask="fdecimal" id="tchangthangcs">
							</div>							
							<label for="field-3" class="col-sm-2 control-label">trợ cấp một lần:</label>							
							<div class="col-sm-2">
								<input name="tcmotlancs" type="text" class="form-control" id="tcmotlancs">								
							</div>	
							<label for="field-3" class="col-sm-2 control-label">Trợ cấp đặc biệt:</label>							
							<div class="col-sm-2">	
								<input name="tcdacbietcs" type="text" class="form-control" data-mask="fdecimal" id="tcdacbietcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Phụ cấp khu vực:</label>							
							<div class="col-sm-2">
								<input name="phucapkvcs" type="text" class="form-control" data-mask="fdecimal" id="phucapkvcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Số sổ trợ cấp:</label>
							<div class="col-sm-2">
								<input name="sosotccs" type="text" class="form-control" id="sosotccs">
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
							<label for="field-3" class="col-sm-2 control-label">Năm điều dưỡng</label>
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
							<label for="field-3" class="col-sm-2 control-label">Ngày mất:</label>
							<div class="col-sm-2">
								<input name="ngaymatcs" type="text" class="form-control" data-mask="date" id="ngaymatcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ghi chú:</label>
							<div class="col-sm-6">
								<input name="ghichucs" type="text" class="form-control" id="ghichucs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tên file:</label> 						
							<div class="col-sm-10">								
								<input type="file" id="filedkcs" name="filedkcs" class="form-control"/>	
								</br>
								<a href="#" id = "duongdan" style='color:rgb(245, 24, 63)'>Click vào đây để download file về máy</a>
								<input class="form-control" name="filedkcu" style="display:none">
							</div>
							<div class="col-sm-10">
								<input name="idhshhcs" type="text" class="form-control" style="display:none" id="idhshhcs">
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
    }

    function get_action() {				
			return "nhaphosoncc.php?id=" + $('#trang').val() + ">" + $('#idhshhcs').val();			
    }
	function get_action1() {				
			return "nhaphosoncc.php?id="+$('#trangm').val()+">0";			
    }
	function get_action2() {				
			return "nhaphosoncctim.php";			
    }
</script>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>