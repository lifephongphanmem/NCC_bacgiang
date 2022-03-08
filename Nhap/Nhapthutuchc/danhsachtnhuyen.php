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
<script>
$(document).ready(function() {
  $('#loaidoituong').change(function() {		
		$('#danhsach').load('ajax_danhsachhuyen.php?id_a=' + $('#loaidoituong').val() + '>' + $('#donvi').val());
  });
 });
 $(document).ready(function() {
  $('#donvi').change(function() {		
		$('#danhsach').load('ajax_danhsachhuyen.php?id_a=' + $('#loaidoituong').val() + '>' + $('#donvi').val());
  });
 });
</script>

<form name = "thoainhap" role='form' class='form-horizontal form-groups-bordered'>	
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Thông tin đối tượng người có công:</h4>
		</div>		
			<div class="modal-body">	
	<label for="field-3" class="col-sm-2 control-label">Loại đối tượng<span style="padding-left:0px; color:red;">*</span>:</label>
	<div class="col-sm-5">
		<select name="loaidoituong" id="loaidoituong" class="form-control">
			<option value="ah" selected="selected">Anh hùng lực lượng VTND, anh hùng lao động TKKC</option>
			<option value="bb">Bệnh binh</option>
			<option value="bm">Bà mẹ Việt Nam anh hùng</option>
			<option value="ls">Liệt sỹ</option>
			<option value="tb">Thương binh</option>
			<option value="hh">Người hđkc bị nhiễm chất độc hóa học</option>
			<option value="kc">Người hđkc giải phóng dân tộc, làm nghĩa vụ quốc tế được tặng huân, huy chương</option>
			<option value="cc">Người có công giúp đỡ cách mạng</option>
			<option value="td">Người hđkc bị địch bắt tù, đày</option>
			<option value="lt">Người hđcm trước ngày 01/01/1945</option>
			<option value="tkn">Người hđcm từ ngày 01/01/1945 đến khởi nghĩa tháng 8 năm 1945</option>
		</select>		
	</div>
	<label for="field-3" class="col-sm-2 control-label">Tên đơn vị:</label>
	<div class="col-sm-3">								
		<select name="donvi" id="donvi" class="form-control">
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
	<div id = "danhsach" class="table-responsive">
		<table class="table table-hover table-striped table-bordered table-advanced tablesorter display" id="table-2">
			<thead>
				<tr>					
					<th style="background-color:rgb(54, 169, 224)" width="5%"><strong style='color:rgb(255, 255, 225)'>STT</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="17%"><strong style='color:rgb(255, 255, 225)'>Họ tên người có công</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Ngày sinh</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="62%"><strong style='color:rgb(255, 255, 225)'>Trú quán</strong></th>
					<th style="background-color:rgb(54, 169, 224); display:none" width="8%"><strong style='color:rgb(255, 255, 225)'>idhs</strong></th>
					<th style="background-color:rgb(54, 169, 224)" width="8%"><strong style='color:rgb(255, 255, 225)'>Thao tác</strong></th>
				</tr>				
			</thead>
			<tbody id="rowlist" class="rowlist">
<?php	
			$i=0;
			$sql="select idhsah as idhs,hoten,ngaysinh,truquan from hosoah where huyen='".$madv[0]."'";
			$sql1=mysqli_query($con,$sql);
			while($row=mysqli_fetch_array($sql1)){		
			$i = $i + 1;
				echo "<tr>";
					echo "<td style='text-align: center;'>$i</td>";
					echo "<td style='text-align: left;'>".$row['hoten']."</td>";
					echo "<td style='text-align: center;'>".$row['ngaysinh']."</td>";
					echo "<td style='text-align: left;'>".$row['truquan']."</td>";
					echo "<td style='text-align: right;display:none'>".$row['idhs']."</td>";
					echo"<td>					
							<a href=\"thutuctnnccxhtchuyen.php?id=".$row['hoten'].'>'.$row['ngaysinh'].'>'.$row['truquan'].'>'.$row['idhs']."\"  title='Nhập hố sơ và thông tin liên quan' onclick=\"return confirm('Bạn muốn Nhập hố sơ này?')\" class='btn btn-success'>
								</i>
								Nhập hồ sơ
							</a>
						</td>";
				echo "</tr>";
			}	
?>				
			</tbody>
		</table>
	</div>
	</div>
	</div>
</form>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>