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
function showAjaxModaldchs()
{	
	if ($("#soghi").val() != "")	
		jQuery('#modal-dc').modal('show', {backdrop: 'static'});
	else
		alert("Bạn cần chọn hồ sơ cần di chuyển");	
}	
function showAjaxModalhs()
{		
	jQuery('#modal-6').modal('show', {backdrop: 'static'});	
}
function showAjaxModalgiayto()
{		
	window.location.href="nhapgiaytotn.php?id="+$("#soghi").val();	
}
function showAjaxModalserch()
{		
	jQuery('#modal-tim').modal('show', {backdrop: 'static'});	
}
function showAjaxModaldc()
{		
	window.location.href="/Reports/Phieudoichieuhhtn.php?id="+$("#soghi").val()+">"+$("#hotendc").val()+">"+$("#ngaysinhdc").val()+">"+$("#nguyenquandc").val()+">"+$("#truquandc").val()+">"+$("#mahsbodc").val()+">"+$("#tthsdc").val()+">"+$("#ketluansgknlddc").val()+">"+$("#tendv").val()+">"+$("#tenct").val()+">"+$("#quanly").val();	
}			
</script>
<script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() 
			{  
			   $('table tbody tr').click(function() 
			   { 
					$("#soghidc").val($(this).find('td:nth-child(20)').text());
					$("#soghi").val($(this).find('td:nth-child(20)').text());
					$("#hotendc").val($(this).find('td:nth-child(2)').text());
					$("#ngaysinhdc").val($(this).find('td:nth-child(3)').text());
					$("#nguyenquandc").val($(this).find('td:nth-child(7)').text());
					$("#truquandc").val($(this).find('td:nth-child(6)').text());
					$("#mahsbodc").val($(this).find('td:nth-child(25)').text());					
					$("#tthsdc").val($(this).find('td:nth-child(17)').text());
					$("#ketluansgknlddc").val($(this).find('td:nth-child(10)').text());
			   }); 
			}
		    		  
		);   
</script>
<script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() 
			{  
			   $('table tbody tr').dblclick(function() 
			   { 					
					jQuery('#modal-7').modal('show', {backdrop: 'static'});
					$("#hotencs").val($(this).find('td:nth-child(2)').text());	
					$("#ngaysinhcs").val($(this).find('td:nth-child(3)').text());
					$("#gioitinhcs").val($(this).find('td:nth-child(4)').text());
					$("#quanhecs").val($(this).find('td:nth-child(5)').text());
					$("#truquancs").val($(this).find('td:nth-child(6)').text());
					$("#nguyenquancs").val($(this).find('td:nth-child(7)').text());
					$("#bbgdsongaycs").val($(this).find('td:nth-child(8)').text());
					$("#tinhtrangddcs").val($(this).find('td:nth-child(9)').text());
					$("#tlsgknldcs").val($(this).find('td:nth-child(10)').text());
					$("#giaycnsongaycs").val($(this).find('td:nth-child(11)').text());
					$("#qdtcsongaycs").val($(this).find('td:nth-child(12)').text());
					$("#tcmotlancs").val($(this).find('td:nth-child(13)').text());
					$("#tchangthangcs").val($(this).find('td:nth-child(14)').text());
					$("#tcdacbietcs").val($(this).find('td:nth-child(15)').text());
					$("#tckhuvuccs").val($(this).find('td:nth-child(16)').text());
					$("#loaiddcs").val($(this).find('td:nth-child(18)').text());
					$("#namddlccs").val($(this).find('td:nth-child(19)').text());
					$("#idthannhancs").val($(this).find('td:nth-child(20)').text());
					$("#idhslscs").val($(this).find('td:nth-child(21)').text());
					$("#fileanhcu").val($(this).find('td:nth-child(22)').text());
					document.getElementById("dd").src = $(this).find('td:nth-child(22)').text();
					$("#bhytcs").val($(this).find('td:nth-child(23)').text());
					$("#ngaybhytcs").val($(this).find('td:nth-child(24)').text());
					$("#mahosocs").val($(this).find('td:nth-child(25)').text());
					$("#tenncccs").val($(this).find('td:nth-child(28)').text());
					$("#ngaymatcs").val($(this).find('td:nth-child(29)').text());
					giatri = $(this).find('td:nth-child(27)').text()+"-"+$(this).find('td:nth-child(26)').text();					
					giatri = giatri.replace(/ /g,"_");
					//alert(giatri);
					$("#xahuyencs").val(giatri);
			   }); 
			}
		    		  
		);
</script>
<script>
$(document).ready(function(){
    $(":input").inputmask();
});
</script>
<?php
$ihs = explode('>',$_GET['id']);	
if(isset($_POST["capnhatts"]))
{	
	if ($madv[3]=="Tỉnh")
	{
		$xhcs=explode('-',$_POST['xahuyencs']);	
		$fileanh ="";	
		$tmp_name = $_FILES['fileacs']['tmp_name'];
		if($tmp_name != "")
		{				
			$path_parts = pathinfo($_FILES['fileacs']['name']);
			$fileup = $path_parts['filename'].".".$path_parts['extension'];	
			move_uploaded_file($_FILES['fileacs']['tmp_name'],"$_SERVER[DOCUMENT_ROOT]/data/upload/".$fileup);
			$fileanh="/data/upload/".$fileup;				
		}
		$sqlup = "Update thannhanhh Set hoten='".$_POST['hotencs']."', ngaysinh='".$_POST['ngaysinhcs']."', gioitinh='".$_POST['gioitinhcs']."', quanhe='".$_POST['quanhecs']."', ";
		$sqlup = $sqlup."truquan='".$_POST['truquancs']."', nguyenquan='".$_POST['nguyenquancs']."', bbgdsongay='".$_POST['bbgdsongaycs']."', tinhtrangdd='".$_POST['tinhtrangddcs']."', ";
		$sqlup = $sqlup."tlsgknld='".$_POST['tlsgknldcs']."', giaycnsongay='".$_POST['giaycnsongaycs']."', qdtcsongay='".$_POST['qdtcsongaycs']."', tcmotlan='".$_POST['tcmotlancs']."', ";
		$sqlup = $sqlup."tchangthang='".$_POST['tchangthangcs']."', tcdacbiet='".$_POST['tcdacbietcs']."', tckhuvuc='".$_POST['tckhuvuccs']."', bhyt='".$_POST['bhytcs']."', ";
		$sqlup = $sqlup."loaidd='".$_POST['loaiddcs']."', namddlc='".$_POST['namddlccs']."', ngaybhyt='".$_POST['ngaybhytcs']."', mahoso='".$_POST['mahosocs']."', xa='".str_replace('_',' ',$xhcs[1])."', huyen='".str_replace('_',' ',$xhcs[0])."',tenncc='".$_POST['tenncccs']."',ngaymat='".$_POST['ngaymatcs']."'";
		if ($_POST['fileanhcu'] != $fileanh)
			$sqlup = $sqlup.",filea='".$fileanh."'";
		$sqlup = $sqlup." Where idthannhanhh=".$_POST['idthannhancs'];
		//echo $sqlup;	
		$kq=mysqli_query($con,$sqlup);
	}
}
if(isset($_POST["themmoi"]))
{		
	if ($madv[3]=="Tỉnh")
	{
		$xh=explode('-',$_POST['xahuyen']);		
		$sqltths="Select max(tnhh) as tnhh From hethongdv where tendonvi='".str_replace('_',' ',$xh[1])."' and tencaptren='".str_replace('_',' ',$xh[0])."'";
		$sql1=mysqli_query($con,$sqltths);$sotths=0;	
		while($row=mysqli_fetch_array($sql1)){	
			$sotths=$row['tnhh'];
		}
		$sotths=$sotths+1;
		$fileanh ="";	
		$tmp_name = $_FILES['filea']['tmp_name'];
		if($tmp_name != "")
		{				
			$path_parts = pathinfo($_FILES['filea']['name']);
			$fileup = $path_parts['filename'].".".$path_parts['extension'];	
			move_uploaded_file($_FILES['filea']['tmp_name'],"$_SERVER[DOCUMENT_ROOT]/data/upload/".$fileup);
			$fileanh="/data/upload/".$fileup;				
		}
		$sqlup = "Insert into thannhanhh Set hoten='".$_POST['hoten']."', ngaysinh='".$_POST['ngaysinh']."', gioitinh='".$_POST['gioitinh']."', quanhe='".$_POST['quanhe']."', ";
		$sqlup = $sqlup."truquan='".$_POST['truquan']."', nguyenquan='".$_POST['nguyenquan']."', bbgdsongay='".$_POST['bbgdsongay']."', tinhtrangdd='".$_POST['tinhtrangdd']."', ";
		$sqlup = $sqlup."tlsgknld='".$_POST['tlsgknld']."', giaycnsongay='".$_POST['giaycnsongay']."', qdtcsongay='".$_POST['qdtcsongay']."', tcmotlan='".$_POST['tcmotlan']."', tths=$sotths,";
		$sqlup = $sqlup."tchangthang='".$_POST['tchangthang']."', tcdacbiet='".$_POST['tcdacbiet']."', tckhuvuc='".$_POST['tckhuvuc']."', ";
		$sqlup = $sqlup."loaidd='".$_POST['loaidd']."', namddlc='".$_POST['namddlc']."', idhshh =0, filea='".$fileanh."', bhyt='".$_POST['bhyt']."', ngaybhyt='".$_POST['ngaybhyt']."', mahoso='".$_POST['mahoso']."', xa='".str_replace('_',' ',$xh[1])."', huyen='".str_replace('_',' ',$xh[0])."',tenncc='".$_POST['tenncc']."',ngaymat='".$_POST['ngaymat']."'";						
		//echo $sqlup;
		$kq=mysqli_query($con,$sqlup);
		//$kq=mysqli_query($con,$sqlup);
		$sqluptt="Update hethongdv Set tnhh=$sotths Where tendonvi='".str_replace('_',' ',$xh[1])."' and tencaptren='".str_replace('_',' ',$xh[0])."'";
		$kqxx=mysqli_query($con,$sqluptt);
	}
}	
if(isset($_POST["timkiem"]))
{
	if ($_POST['tenxatim'] != "")
		header("location: nhapthannhantim.php?id=2>".str_replace(' ','_',$_POST['hotentim']).">".$_POST['tenxatim']);
	else
		header("location: nhapthannhantim.php?id=2>".str_replace(' ','_',$_POST['hotentim']).">");
}
if (isset($_POST["dichuyen"]))
{
	if ($madv[3]=="Tỉnh")
	{
		$sqlup = "Update thannhanhh Set truquan='".$_POST['noidck']."',dchs='".$_POST['ngaydck']."',noicdcd='".$_POST['noidck']."'";
		if ($_POST['phanloaidck'] == "Chuyển đi nội tỉnh")
		{
			if ($_POST['tenxak'] != "")
			{				
				$xahuyen=explode('-',$_POST['tenxak']);
				$sqltths="Select max(tnhh) as tnhh From hethongdv where tendonvi='".str_replace('_',' ',$xahuyen[1])."' and tencaptren='".str_replace('_',' ',$xahuyen[0])."'";
				$sql1=mysqli_query($con,$sqltths);$sotths=0;	
				while($row=mysqli_fetch_array($sql1)){	
					$sotths=$row['tnhh'];
				}
				$sotths=$sotths+1;
				$sqlup = $sqlup.",xa='".str_replace('_',' ',$xahuyen[1])."',huyen='".str_replace('_',' ',$xahuyen[0])."',tths=$sotths where idthannhanhh=".$_POST['soghidc'];
				$sqluptt="Update hethongdv Set tnhh=$sotths where tendonvi='".str_replace('_',' ',$xahuyen[1])."' and tencaptren='".str_replace('_',' ',$xahuyen[0])."'";
				$kq1=mysqli_query($con,$sqluptt);
				//$sqluptt1="Update hethongdv Set tonghh=tonghh+1 where tendonvi='".$madv[0]."' and tencaptren='".$madv[1]."'";
				//$kq2=mysqli_query($con,$sqluptt1);
			}
		}
if (strrpos($sqlup,"where")<=0)
			$sqlup = $sqlup." where idthannhanhh=".$_POST['soghidc'];
		$kq=mysqli_query($con,$sqlup);
	}
}		
?>
<form role='form' method='POST' class='form-horizontal form-groups-bordered'>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Danh sách thân nhân nhiễm chất độc hóa học
			<a style = "float:right; color:rgb(255, 255, 225)" onclick="showAjaxModalserch();" href = "#">
				Tìm kiếm
			</a>
			<?php
				if ($madv[3]=="Tỉnh")
				{	
					echo "<strong style = 'float:right'>&nbsp;&nbsp;||&nbsp;&nbsp;</strong>";
					echo "<a style = 'float:right; color:rgb(255, 255, 225)' onclick='showAjaxModalhs();' href = '#'>
						Thêm thân nhân
					</a>";
					
			echo "<strong style = 'float:right'>&nbsp;&nbsp;||&nbsp;&nbsp;</strong>";
			echo "<a style = 'float:right; color:rgb(255, 255, 225)' onclick='showAjaxModalgiayto();' href = '#'>
				Thêm giấy tờ
			</a>";
			echo "<strong style = 'float:right'>&nbsp;&nbsp;||&nbsp;&nbsp;</strong>";
			echo "<a style = 'float:right; color:rgb(255, 255, 225)' onclick='showAjaxModaldc();' href = '#'>
				Phiếu
			</a>";	
			echo "<strong style = 'float:right'>&nbsp;&nbsp;||&nbsp;&nbsp;</strong>";
			echo "<a style = 'float:right; color:rgb(255, 255, 225)' onclick='showAjaxModaldchs();' href = '#'>
				Di chuyển
			</a>";
	}
			?>
			<input name="soghi" type="text" class="form-control" style="display:none" id="soghi">
			<input name="hotendc" type="text" class="form-control" style="display:none" id="hotendc">
			<input name="ngaysinhdc" type="text" class="form-control" style="display:none" id="ngaysinhdc">
			<input name="nguyenquandc" type="text" class="form-control" style="display:none" id="nguyenquandc">
			<input name="truquandc" type="text" class="form-control" style="display:none" id="truquandc">
			<input name="mahsbodc" type="text" class="form-control" style="display:none" id="mahsbodc">
			<input name="tthsdc" type="text" class="form-control" style="display:none" id="tthsdc">
			<input name="ketluansgknlddc" type="text" class="form-control" style="display:none" id="ketluansgknlddc">
			<input name="tendv" type="text" class="form-control" style="display:none" id="tendv" value="<?php echo $madv[0]; ?>">
			<input name="tenct" type="text" class="form-control" style="display:none" id="tenct" value="<?php echo $madv[1]; ?>">
			<input name="quanly" type="text" class="form-control" style="display:none" id="quanly" value="<?php echo $madv[3]; ?>">
			</h4>
		</div>
			<div class="modal-body">

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
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>nguyenquan</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>bbgdsongay</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>tinhtrangdd</strong></th>					
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>tlsgknld</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>giaycnsongay</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>qdtcsongay</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>tcmotlan</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>tchangthang</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>tcdacbiet</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>tckhuvuc</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>tths</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>loaidd</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>namddlc</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>idthannhanhh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>idhshh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>filea</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>filea</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>filea</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>filea</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>xa</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>huyen</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>tencc</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ngaymat</strong></th>
					<th style="background-color:rgb(16, 78, 211); " width="30%"><strong>Thao tác</strong></th>
				</tr>				
			</thead>
	<?php
	$sqltn="";
	if ($ihs[0]=="1")
		$sqltn = "Select * From thannhanhh where quanhe not like 'Vợ' LIMIT 1,20";	
	else
	{
		$tenhuyenxa = str_replace("_"," ",$ihs[2]);	
		$huyenxa=explode(' - ',$tenhuyenxa);
		if ($tenhuyenxa != "")
			$sqltn = "Select * From thannhanhh Where quanhe not like 'Vợ' and hoten Like '%".str_replace('_',' ',$ihs[1])."%' and xa like '".$huyenxa[1]."%' and huyen like '".$huyenxa[0]."%'";
			//$sqltn = "Select * From thannhanhh LIMIT 1,20";	
		else
			$sqltn = "Select * From thannhanhh Where  quanhe not like 'Vợ' and hoten Like '%".str_replace('_',' ',$ihs[1])."%'";
	}
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
					echo "<td style='text-align: left;'>".$rcttn['truquan']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['nguyenquan']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['bbgdsongay']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['tinhtrangdd']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['tlsgknld']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['giaycnsongay']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['qdtcsongay']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['tcmotlan']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['tchangthang']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['tcdacbiet']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['tckhuvuc']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['tths']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['loaidd']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['namddlc']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['idthannhanhh']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['idhshh']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['filea']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['bhyt']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['ngaybhyt']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['mahoso']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['xa']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['huyen']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['tenncc']."</td>";
					echo "<td style='text-align: left; display:none'>".$rcttn['ngaymat']."</td>";
					if ($madv[3]=="Tỉnh")
					{
						echo"<td>					
							<a href=\"xoatn.php?id=".$rcttn['idthannhanhh']."\"  title='Xóa thông tin đối tượng' onclick=\"return confirm('Bạn muốn xóa hố sơ này?')\" class='btn btn-red '>
								</i>
								Xóa
							</a>
						</td>";
					}
					else
						echo "<td></td>";
				echo "</tr>";
		}		
			echo "</tbody>";
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
							<label for="field-3" class="col-sm-2 control-label">Mã hồ sơ:</label>
							<div class="col-sm-3">
								<input name="mahoso" type="text" class="form-control" id="mahoso">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Họ và tên:</label>
							<div class="col-sm-2">
								<input name="hoten" type="text" class="form-control" id="hoten">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Quan hệ:</label>
							<div class="col-sm-7">
								<input name="quanhe" type="text" class="form-control" id="quanhe">
							</div>		
							<label for="field-3" class="col-sm-2 control-label">Ngày sinh:</label>
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
							<label for="field-3" class="col-sm-2 control-label">Nguyên quán:</label>
							<div class="col-sm-7">
								<input name="nguyenquan" type="text" class="form-control" id="nguyenquan">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Trú quán:</label>
							<div class="col-sm-7">
								<input name="truquan" type="text" class="form-control" id="truquan">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ngày mất:</label>
							<div class="col-sm-3">
								<input name="ngaymat" type="text" class="form-control" id="ngaymat">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Biên bản giám định:</label>
							<div class="col-sm-2">
								<input name="bbgdsongay" type="text" class="form-control" id="bbgdsongay">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tình trạng dị dạng:</label>
							<div class="col-sm-3">
								<input name="tinhtrangdd" type="text" class="form-control" id="tinhtrangdd">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tỉ lệ sgknlđ:</label>
							<div class="col-sm-2">
								<input name="tlsgknld" type="text" class="form-control" id="tlsgknld">
							</div>	
							<label for="field-3" class="col-sm-2 control-label">Giấy chứng nhận:</label>
							<div class="col-sm-10">
								<input name="giaycnsongay" type="text" class="form-control" id="giaycnsongay">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Quyết định trợ cấp:</label>
							<div class="col-sm-2">
								<input name="qdtcsongay" type="text" class="form-control" id="qdtcsongay">
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
							<div class="col-sm-6">	
								<input name="tcdacbiet" type="text" class="form-control" data-mask="fdecimal" id="tcdacbiet">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Phụ cấp khu vực:</label>							
							<div class="col-sm-2">	
								<input name="tckhuvuc" type="text" class="form-control" data-mask="fdecimal" id="tckhuvuc">
							</div>							
							<label for="field-3" class="col-sm-2 control-label">Loại điều dưỡng:</label>
							<div class="col-sm-2">								
								<select name="loaidd" id="loaidd" class="form-control">
									<option value="Hai năm một lần">Hai năm một lần</option>
									<option value="Một năm một lần">Một năm một lần</option>
									<option value="" selected = "selected"></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Năm ĐD lần cuối:</label>
							<div class="col-sm-2">
								<input name="namddlc" type="text" class="form-control" id="namddlc">
							</div>
							<label for="field-3" class="col-sm-2 control-label">BHYT:</label>
							<div class="col-sm-2">								
								<select name="bhyt" id="bhyt" class="form-control">
									<option value="Có">Có</option>
									<option value="Không">Không</option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Thời điểm hưởng:</label>
							<div class="col-sm-6">
								<input name="ngaybhyt" type="text" class="form-control" data-mask="date" id="ngaybhyt">
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
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tên người có công:</label>
							<div class="col-sm-10">
								<input name="tenncc" type="text" class="form-control" id="tenncc">
							</div>
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
							<label for="field-3" class="col-sm-2 control-label">Mã hồ sơ:</label>
							<div class="col-sm-3">
								<input name="mahosocs" type="text" class="form-control" id="mahosocs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Họ và tên:</label>
							<div class="col-sm-2">
								<input name="hotencs" type="text" class="form-control" id="hotencs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Quan hệ:</label>
							<div class="col-sm-7">
								<input name="quanhecs" type="text" class="form-control" id="quanhecs">
							</div>		
							<label for="field-3" class="col-sm-2 control-label">Ngày sinh:</label>
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
							<label for="field-3" class="col-sm-2 control-label">Nguyên quán:</label>
							<div class="col-sm-7">
								<input name="nguyenquancs" type="text" class="form-control" id="nguyenquancs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Trú quán:</label>
							<div class="col-sm-7">
								<input name="truquancs" type="text" class="form-control" id="truquancs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Ngày mất:</label>
							<div class="col-sm-3">
								<input name="ngaymatcs" type="text" class="form-control" id="ngaymatcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Biên bản giám định:</label>
							<div class="col-sm-2">
								<input name="bbgdsongaycs" type="text" class="form-control" id="bbgdsongaycs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tình trạng dị dạng:</label>
							<div class="col-sm-3">
								<input name="tinhtrangddcs" type="text" class="form-control" id="tinhtrangddcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tỉ lệ sgknlđ:</label>
							<div class="col-sm-2">
								<input name="tlsgknldcs" type="text" class="form-control" id="tlsgknldcs">
							</div>	
							<label for="field-3" class="col-sm-2 control-label">Giấy chứng nhận:</label>
							<div class="col-sm-10">
								<input name="giaycnsongaycs" type="text" class="form-control" id="giaycnsongaycs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Quyết định trợ cấp:</label>
							<div class="col-sm-2">
								<input name="qdtcsongaycs" type="text" class="form-control" id="qdtcsongaycs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Trợ cấp hàng tháng:</label>
							<div class="col-sm-6">	
								<input name="tchangthangcs" type="text" class="form-control" data-mask="fdecimal" id="tchangthangcs">
							</div>							
							<label for="field-3" class="col-sm-2 control-label">trợ cấp một lần:</label>							
							<div class="col-sm-2">
								<input name="tcmotlancs" type="text" class="form-control" data-mask="fdecimal" id="tcmotlancs">		
							</div>	
							<label for="field-3" class="col-sm-2 control-label">Trợ cấp đặc biệt:</label>							
							<div class="col-sm-6">		
								<input name="tcdacbietcs" type="text" class="form-control" data-mask="fdecimal" id="tcdacbietcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Phụ cấp khu vực:</label>							
							<div class="col-sm-2">
								<input name="tckhuvuccs" type="text" class="form-control" data-mask="fdecimal" id="tckhuvuccs">
							</div>							
							<label for="field-3" class="col-sm-2 control-label">Loại điều dưỡng:</label>
							<div class="col-sm-2">								
								<select name="loaiddcs" id="loaiddcs" class="form-control">
									<option value="Hai năm một lần">Hai năm một lần</option>
									<option value="Một năm một lần">Một năm một lần</option>
									<option value=""></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Năm ĐD lần cuối:</label>
							<div class="col-sm-2">
								<input name="namddlccs" type="text" class="form-control" id="namddlccs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">BHYT:</label>
							<div class="col-sm-2">								
								<select name="bhytcs" id="bhytcs" class="form-control">
									<option value="Có">Có</option>
									<option value="Không">Không</option>
									<option value=""></option>
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Thời điểm hưởng:</label>
							<div class="col-sm-6">
								<input name="ngaybhytcs" type="text" class="form-control" data-mask="date" id="ngaybhytcs">
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tên xã:</label>
							<div class="col-sm-10">								
								<select name="xahuyencs" id="xahuyencs" class="form-control">
									<?php
									$sqltcml = "Select tenxa,tenhuyen From xa inner join huyen on xa.tthuyen=huyen.tthuyen";
									$qrtcml = mysqli_query($con,$sqltcml);			
									while($rtcml=@mysqli_fetch_array($qrtcml))
									{
										echo "<option value=".str_replace(' ','_',$rtcml['tenhuyen']).'-'.str_replace(' ','_',$rtcml['tenxa']).">".$rtcml['tenhuyen'].' - '.$rtcml['tenxa']."</option>";
									}
									?>									
								</select>
							</div>
							<label for="field-3" class="col-sm-2 control-label">Tên người có công:</label>
							<div class="col-sm-10">
								<input name="tenncccs" type="text" class="form-control" id="tenncccs">
							</div>
							<div class="col-sm-10">
								<input name="idthannhancs" type="text" class="form-control" style="display:none" id="idthannhancs">
							</div>
							<div class="col-sm-10">
								<input name="idhslscs" type="text" class="form-control" style="display:none" id="idhslscs">
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
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>