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
</script>
<script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() 
			{  
			   $('table tbody tr').dblclick(function() 
			   { 
					if ($(this).find('td:last').text() == "ncc")
					{						
						jQuery('#modal-6').modal('show', {backdrop: 'static'});
						$("#mahsbo").val($(this).find('td:nth-child(2)').text());
						$("#mahstinh").val($(this).find('td:nth-child(3)').text());
						$("#hoten").val($(this).find('td:nth-child(4)').text());
						$("#ngaysinh").val($(this).find('td:nth-child(8)').text());
						$("#gioitinh").val($(this).find('td:nth-child(9)').text());
						$("#loaidt").val($(this).find('td:nth-child(10)').text());
						$("#truquan").val($(this).find('td:nth-child(5)').text());
						$("#tinhtrangsk").val($(this).find('td:nth-child(6)').text());
						$("#lydo").val($(this).find('td:nth-child(14)').text());
						$("#idphuongtien").val($(this).find('td:nth-child(7)').text());
						$('#sTTKK').load('ajax_chinhsuanhap.php?id_a='+$(this).find('td:nth-child(7)').text());
						$("#tenxatao").val($(this).find('td:nth-child(12)').text().replace(/ /g,"_"));
						$("#sosoql").val($(this).find('td:nth-child(16)').text());
						$("#noiql").val($(this).find('td:nth-child(17)').text());
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
		window.location.href="chinhsuaptxaduyet.php?id="+this.value+">0";
  });
 });	
function xoa(bien)
{
	var sohoso2 = '';
	$.each($('table tbody tr'), function(){
		if ($(this).find('td:nth-child(8)').text() == "pt")
		sohoso2 += $(this).find('td:nth-child(7)').text() + "<" + $(this).find('td:nth-child(2)').text() + "<" + $(this).find('td:nth-child(3)').text() + "<" + $(this).find('td:nth-child(4)').text() + "<" + $(this).find('td:nth-child(5)').text() + "<" + $(this).find('td:nth-child(6)').text() + '>';
	});	
	//alert(bien);
	var giatri = "";	
	giatri = sohoso2.replace(bien,"");	
	giatri = giatri + "^" + bien;
	giatri = giatri.replace(/ /g,"_");
	$('#sTTKK').load('ajax_xoacs.php?id_a='+giatri);
} 
function showAjaxModalcds()
{		
	jQuery('#modal-9').modal('show', {backdrop: 'static'});
}
</script>
<script type="text/javascript">	
function kiemtraphuongtien() {
        var sohoso = '';
        $.each($("input[name='KT']:checked"), function(){
            sohoso += ($(this).attr('id')) + '>';
        });
        return sohoso;
    }
function themhd()
	{
		var sohoso2 = '';
		$.each($('table tbody tr'), function(){
			if ($(this).find('td:nth-child(8)').text() == "pt")
			sohoso2 += $(this).find('td:nth-child(7)').text() + "<" + $(this).find('td:nth-child(2)').text() + "<" + $(this).find('td:nth-child(3)').text() + "<" + $(this).find('td:nth-child(4)').text() + "<" + $(this).find('td:nth-child(5)').text() + "<" + $(this).find('td:nth-child(6)').text() + '>';
		});
		var giatri = "";			
		giatri = sohoso2 + ">" + kiemtraphuongtien();
		giatri = giatri.replace(/ /g,"_");
		$('#sTTKK').load('ajax_themcs.php?id_a='+giatri);
	}
$(document).ready(function() {
	  $('#hhhh').click(function() {
	   giatri = kiemtrahschon();   
	   $("#sobg").val(giatri);
	  });
	 });
function kiemtrahschon() {

        var sohoso1 = '';
        $.each($('table tbody tr'), function(){
			//if ($(this).find('td:nth-child(7)').text() == "phuongtien")
            sohoso1 += $(this).find('td:nth-child(7)').text() + "<" + $(this).find('td:nth-child(2)').text() + "<" + $(this).find('td:nth-child(3)').text() + "<" + $(this).find('td:nth-child(4)').text() + "<" + $(this).find('td:nth-child(5)').text() + "<" + $(this).find('td:nth-child(6)').text() + '>';
        });
        return sohoso1;
    }	 
</script>
<script type="text/javascript">
	$(document).ready(function() {
	  $('#hhhh1').click(function() {
	   giatri = kiemtrahschon1();   
	   $("#sobg1").val(giatri);	   
	  });
	 });	
	function kiemtrahschon1() {

        var sohoso = '';

        $.each($("input[name='KT']:checked"), function(){
            sohoso += ($(this).attr('id')) + '>';
        });
        return sohoso;
    }
</script>
<?php
function dinhdangsox($so)
	{
		$kq = "";
		if ($so > 0)
			$kq = number_format($so);
		return $kq;	
	}
function kieudoublex($so)
{
	$kq = 0;
	if ($so != "")
		$kq = (float)$so;
	else
		$kq = 0;	
	return $kq;	
}
/* if (isset($_POST['chuyen']))
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
	$sql="Update phuongtien Set chuyen='Duy???t' Where iddieuduong=".$key[$i];
	$kq=mysqli_query($con,$sql);
	}
}	 */
if(isset($_POST["capnhat"]))
{
	/* $sqlpt = "Update phuongtien Set hoten='".$_POST['hoten']."', ngaysinh='".$_POST['ngaysinh']."', gioitinh='".$_POST['gioitinh']."', ";
	$sqlpt = $sqlpt."truquan='".$_POST['truquan']."', mahsbo='".$_POST['mahsbo']."', mahstinh='".$_POST['mahstinh']."', loaidt='".$_POST['loaidt']."', ";
	$sqlpt = $sqlpt."tinhtrangsk='".$_POST['tinhtrangsk']."', lydo='".$_POST['lydo']."', xa='".str_replace('_',' ',$_POST['tenxatao'])."'";
	$sqlpt = $sqlpt." Where idphuongtien=".$_POST['idphuongtien'];
	$kqpt=mysqli_query($con,$sqlpt); */
	$key=explode('>',$_POST['sobg']);
	$chars=str_split($_POST["sobg"]);
	$count=0;
	foreach($chars as &$char)
	{
		if($char=='>')
		{
			$count++;
		}
	}
	$i=0;$sqlup="";
	for($i=0;$i<$count;$i++)
	{
		if ($key[$i] != "")
		{
			$kytu=explode('<',$key[$i]);
			$sqlup = "Update ctphuongtien Set ";
			$sqlup=$sqlup."ngaycap='".$kytu[4]."' Where idctpt=".$kytu[0];
			$kq=mysqli_query($con,$sqlup);
		}
	}
}	
?>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Danh s??ch ph????ng ti???n, d???ng c??? ch???nh h??nh ???????c duy???t</h4>
		</div>
			<div class="modal-body">
<form role='form' method='POST' class='form-horizontal form-groups-bordered'>
		<label class='col-sm-2'>Trang s???:</label>
<?php
//$dieukien=$_GET['id'];
//$ahs = explode('>',$_GET['id']);$dkkhac="";
$j = 1;//$ahs[0];
		echo "<div  class='col-sm-2' style='margin-top:-7px'>";
			echo "<select style='margin-left:-90px;' name='trang' class='form-control' id='trang'>";
	$ls =  array(array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16"));		
	$cs=0;$sql="";
	/* if (strlen($dieukien) > 5)
	{
		$sql="select * from phuongtien where and chuyen='Chuy???n 2' and xa like '%".str_replace('_',' ',$ahs[2])."%' and huyen Like '%".str_replace('_',' ',$ahs[1])."%'";
	}
	else
	{ */
		$sql="select * from phuongtien where chuyen='Duy???t' and xa='".$madv[0]."'";
	//}
	//echo $sql;
	$sql1=mysqli_query($con,$sql);
	$kq = 0;$kq1 = 1;
	if ($j == 1)
		echo "<option selected='selected' value='$kq1'>$kq1</option>";
	else
		echo "<option value='$kq1'>$kq1</option>";
	while($row=mysqli_fetch_array($sql1)){					
		$ls[$cs][0] = $row['idphuongtien'];
		$ls[$cs][1] = $row['hoten'];
		$ls[$cs][2] = $row['ngaysinh'];
		$ls[$cs][3] = $row['gioitinh'];
		$ls[$cs][4] = $row['truquan'];
		$ls[$cs][5] = $row['mahsbo'];
		$ls[$cs][6] = $row['mahstinh'];
		$ls[$cs][7] = $row['loaidt'];
		$ls[$cs][8] = $row['tinhtrangsk'];
		$ls[$cs][9] = $row['tylesgknld'];
		$ls[$cs][10] = $row['xa'];
		$ls[$cs][11] = $row['huyen'];
		$ls[$cs][12] = $row['lydo'];
		$ls[$cs][13] = $row['chuyen'];
		$ls[$cs][14] = $row['sosoql'];
		$ls[$cs][15] = $row['noiql'];
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
					<th style="background-color:rgb(54, 169, 224)" width="4%"><strong style='color:rgb(255, 255, 225)'>Ch???n</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="10%"><strong style='color:rgb(255, 255, 225)'>M?? b???</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="10%"><strong style='color:rgb(255, 255, 225)'>M?? t???nh</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="20%"><strong style='color:rgb(255, 255, 225)'>H??? v?? t??n</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="28%"><strong style='color:rgb(255, 255, 225)'>Tr?? qu??n</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="20%"><strong style='color:rgb(255, 255, 225)'>T??nh tr???ng b???nh</strong></th>					
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>idphuongtien</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>ngaysinh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>gioitinh</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>loaidt</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>tylesgknld</strong></th>
					<th style="background-color:rgb(54, 169, 224); display:none" width="8%"><strong style='color:rgb(255, 255, 225)'>????n v???</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>huyen</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>lydo</strong></th>
					<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>chuyen</strong></th>
<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>chuyen</strong></th>
<th style="background-color:rgb(16, 78, 211); display:none" width="30%"><strong>chuyen</strong></th>					
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
			for($i=($j - 1)*15;$i<15*$j;$i++)
			{
				//$a = $i + 1;
				if ($i < $cs)
				{					
				echo "<tr>";					
					echo "<td><input type = 'Checkbox' name = 'KT' id = '".$ls[$i][0]."' checked = 'checked'></td>";
					echo "<td style='text-align: left;'>".$ls[$i][5]."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][6]."</td>";
					echo "<td style='text-align: left;'>".$ls[$i][1]."</td>";
					echo "<td style='text-align: left;'>".catchuoi($ls[$i][4])."</td>";
					echo "<td style='text-align: left;'>".catchuoi($ls[$i][8])."</td>";					
					echo "<td style='text-align: left; display:none'>".$ls[$i][0]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][2]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][3]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][7]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][9]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][10]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][11]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][12]."</td>";
					echo "<td style='text-align: left; display:none'>".$ls[$i][13]."</td>";	
echo "<td style='text-align: left; display:none'>".$ls[$i][14]."</td>";
echo "<td style='text-align: left; display:none'>".$ls[$i][15]."</td>";					
					echo "<td style='text-align: left; display:none'>ncc</td>";
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
						<input name="xoa" type="text" style="display:none" class="form-control" id="xoa">	
						<h3><strong>Th??ng tin v??? ?????i t?????ng:</strong><button type="button" style = "float:right" class="btn btn-black" data-dismiss="modal">????ng</button><input type="submit" name="capnhat" class="btn btn-info" value = "C???p nh???t" style = "float:right" id = "hhhh"></h3>
						<legend></legend>
						<label for="field-3" class="col-sm-2 control-label">M?? h??? s?? b???:</label>
						<div class="col-sm-4">
							<input name="mahsbo" type="text" class="form-control" id="mahsbo">
							<input name="idphuongtien" type="text" style="display:none" class="form-control" id="idphuongtien">
							<input name="sobg" type="text" style="display:none" class="form-control" id="sobg">
						</div>
						<label for="field-3" class="col-sm-2 control-label">M?? h??? s?? t???nh:</label>
						<div class="col-sm-4">
							<input name="mahstinh" type="text" class="form-control" id="mahstinh">
						</div>
						<label for="field-3" class="col-sm-2 control-label">H??? t??n ?????i t?????ng:</label>
						<div class="col-sm-4">
							<input name="hoten" type="text" class="form-control" id="hoten">
						</div>
						<label for="field-3" class="col-sm-2 control-label">Ng??y sinh:</label>
						<div class="col-sm-4">
							<input name="ngaysinh" type="text" class="form-control" id="ngaysinh">
						</div>
						<label for="field-3" class="col-sm-2 control-label">Gi???i t??nh:</label>
						<div class="col-sm-4">		
							<select name="gioitinh" id="gioitinh" class="form-control">
								<option value="Nam">Nam</option>
								<option value="N???">N???</option>
							</select>
						</div>
						<label for="field-3" class="col-sm-2 control-label">Lo???i ?????i t?????ng:</label>
						<div class="col-sm-4">
							<input name="loaidt" type="text" class="form-control" id="loaidt">
						</div>
						<label for="field-3" class="col-sm-2 control-label">Tr?? qu??n:</label>
						<div class="col-sm-10">
							<input name="truquan" type="text" class="form-control" id="truquan">
						</div>
						<label for="field-3" class="col-sm-2 control-label">T??nh tr???ng b???nh t???t:</label>
						<div class="col-sm-10">
							<input name="tinhtrangsk" type="text" class="form-control" id="tinhtrangsk">
						</div>
						<label for="field-3" class="col-sm-2 control-label">L?? do trang c???p:</label>
						<div class="col-sm-10">
							<input name="lydo" type="text" class="form-control" id="lydo">
						</div>
						<label for="field-3" class="col-sm-2 control-label">T??n x??:</label>
						<div class="col-sm-10">								
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
						<label for="field-3" class="col-sm-2 control-label">S??? s??? trang c???p:</label>
						<div class="col-sm-4">
							<input name="sosoql" type="text" class="form-control" id="sosoql">
						</div>
						<label for="field-3" class="col-sm-2 control-label">N??i qu???n l??:</label>
						<div class="col-sm-4">
							<input name="noiql" type="text" class="form-control" id="noiql">
						</div>
						<h3><strong>Chi ti???t ph????ng ti???n, c??ng c???:</strong></h3>
						<div id = "sTTKK" class="table-responsive">
							<table class="table table-hover table-striped table-bordered table-advanced tablesorter display" id="table-2">
								<thead>
									<tr>					
										<th style="background-color:rgb(54, 169, 224)" width="5%"><strong style='color:rgb(255, 255, 225)'>STT</strong></th>
										<th style="background-color:rgb(54, 169, 224)" width="50%"><strong style='color:rgb(255, 255, 225)'>T??n ph????ng ti???n, d???ng c???</strong></th>
										<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Ni??n h???n</strong></th>
										<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>S??? ti???n</strong></th>
										<th style="background-color:rgb(54, 169, 224)" width="12%"><strong style='color:rgb(255, 255, 225)'>Ng??y tr???</strong></th>	
										<th style="background-color:rgb(16, 78, 211); display:none" width="12%"><strong>phanloai</strong></th>
										<th style="background-color:rgb(16, 78, 211); display:none" width="12%"><strong>phanloai</strong></th>
										<th style="background-color:rgb(16, 78, 211); display:none" width="12%"><strong>phanloai</strong></th>
										<th style="background-color:rgb(16, 78, 211)" width="9%"><strong>Thao t??c</strong></th>					
									</tr>				
								</thead>
								<tbody id="rowlist" class="rowlist">				
								</tbody>
							</table>
						</div>
					</form>						
			</div>
		</div>
	</div>
</div>
<div id="modal-quatrinhdd" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content row">
				<div class="modal-header modal-header-primary">
					<h4 id="modal-login-label" class="modal-title">Ch???n danh s??ch ph????ng ti??n, c??ng c??? ch???nh h??nh</h4>
				</div>
				<div class="modal-body">
					<div class="form-horizontal">
						<div id = "phuongtien" class="table-responsive">
							<table class="table table-hover table-striped table-bordered table-advanced tablesorter display" id="table-3">
								<thead>
									<tr>					
										<th style="background-color:rgb(54, 169, 224)" width="5%"><strong style='color:rgb(255, 255, 225)'>Ch???n</strong></th>
										<th style="background-color:rgb(54, 169, 224)" width="29%"><strong style='color:rgb(255, 255, 225)'>Ph??n lo???i</strong></th>	
										<th style="background-color:rgb(54, 169, 224)" width="50%"><strong style='color:rgb(255, 255, 225)'>T??n ph????ng ti???n, c??ng c???</strong></th>					
										<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Ni??n h???n</strong></th>
										<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>S??? ti???n</strong></th>	
										<th style="background-color:rgb(54, 169, 224); display:none" width="8%"><strong>pt</strong></th>
									</tr>									
								</thead>
								<tbody id="rowlist" class="rowlist">
	<?php
	$sqldmpt = "Select * From dmphuongtien";
	$qrdmpt = mysqli_query($con,$sqldmpt);$gop="";
	while($rdmpt=@mysqli_fetch_array($qrdmpt))
	{
		$gop="<".$rdmpt['tenphuongtien']."<".$rdmpt['nienhan']."<".$rdmpt['sotien']."<<<";
									echo "<tr>";
										echo "<td><input type = 'Checkbox' name = 'KT' id = '$gop'></td>";
										echo "<td style='text-align: left; color:#0F0F10'>".$rdmpt['phanloai']."</td>";
										echo "<td style='text-align: left; color:#0F0F10'>".$rdmpt['tenphuongtien']."</td>";
										echo "<td style='text-align: left; color:#0F0F10'>".$rdmpt['nienhan']."</td>";
										echo "<td style='text-align: right; color:#0F0F10'>".dinhdangsox(kieudoublex($rdmpt['sotien']))."</td>";
										echo "<td style='text-align: right; color:#0F0F10; display:none'>pt</td>";
									echo "</tr>";
	}
	?>	
								</tbody>
							</table>
						</div>						
					</div>
				</div>
				<div class="modal-footer">
					<form id="" method="GET" action="#" accept-charset="UTF-8">
						<a type="button" data-dismiss="modal" class="btn btn-default">H???y thao t??c</a>
						<a type="button" id="hoatdongt" onclick = "themhd();" data-dismiss="modal" class="btn btn-primary">?????ng ??</a>
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
							<h4 style = "text-align:center; color:rgb(10, 10, 10)">CHUY???N DANH S??CH ????NG K?? PH????NG TI???N L??N C???P TR??N</h4>	
							<h4 style = "text-align:center; color:rgb(10, 10, 10)">(L??u ??)</h4>
							<label for="field-3" class="col-sm-12 control-label" style = "text-align: left;">-   Danh s??ch chuy???n l??n s??? kh??ng ch???nh s???a ???????c</label>
							<label for="field-3" class="col-sm-12 control-label" style = "text-align: left;">-   N???u mu???n ch???nh s???a c???n y??u c???u c??n b??? c???p tr??n chuy???n tr??? l???i</label>
							<label for="field-3" class="col-sm-12 control-label" style = "text-align: left;">-   N???u thi???u h??? s?? bhyt c?? th??? l???p th??m ????? chuy???n l??n</label>
							<input name="sobg1" type="text" class="form-control" style = "Display:none;" id="sobg1">
						</div>
							<button type="button" class="btn btn-black" data-dismiss="modal">????ng</button>
							<input type="submit" name="chuyen" class="btn btn-blue" value = "C???p nh???t" id = "hhhh1">							
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
								<select name="tenhuyentim" id="tenhuyentim" class="form-control">
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
								<select name="tenxatim" id="tenxatim" class="form-control">
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
<script type="text/javascript">
    window.onsubmit = function() { 
		document.thoaitao.action = get_action2();
    }
	function get_action2() {
			return "chinhsuaptxaduyet.php?id=1>"+$('#tenhuyentim').val()+">"+$('#tenxatim').val()";			
    }
</script>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>