<?php include("$_SERVER[DOCUMENT_ROOT]/Main/header.php");
include("$_SERVER[DOCUMENT_ROOT]/Main/general.php"); ?>	
<meta charset='utf-8' />										
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/menu.php")?>
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/header2.php"); ?>
<!--------- Header ----------->
<script src="/assets/News/jquery.min.js"></script>
<script src="/dist/jquery.inputmask.bundle.min.js"></script>
<script>
$(document).ready(function(){
    $(":input").inputmask();
});
</script>	

	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title" style="text-align:center;"><strong>Báo cáo danh sách hồ sơ chuyển đi, chuyển đến</strong></h4>
		</div>
			<div class="modal-body">
				  <form name="thoai" role="form" method="Post" class="form-horizontal" action="bchosocdcdhuyen.php">
					<div class='form-group'>
						<div class='col-sm-12'>
							<label>Tên đơn vị:</label>
							<select name='huyen' class='form-control' id='huyen'  type='text'>
								<option value='' selected = 'selected'></option>
							<?php
								$sql = "Select tenxa from xa inner join huyen on xa.tthuyen=huyen.tthuyen Where huyen.tenhuyen='".$madv[0]."'";
								$qrsql = mysqli_query($con,$sql);
								while($row =mysqli_fetch_array($qrsql))
								{	
									echo "<option value='$row[0]'>$row[0]</option>";
								}
							?>	
							</select>
						</div>					
						</div>
					<div class="form-group">
						<div class="col-sm-12"><label>Phân loại chuyển đi, đến: </label>
						<select name='noitrao' class='form-control' id='noitrao'  type='text'>
							<option value='Chuyển đi nội tỉnh'>Chuyển đi nội tỉnh</option>
							<option value='Chuyển đi ngoại tỉnh'>Chuyển đi ngoại tỉnh</option>
							<option value='Chuyển đến từ ngoại tỉnh' selected = 'selected'>Chuyển đến từ ngoại tỉnh</option>
						</select>						
						</div>
					</div>	
					<div class="form-group">
						<div class="col-sm-12"><label>Loại đối tượng: </label>
						<select name='ldt' class='form-control' id='ldt'  type='text'>
							<option value='ah'>Anh hùng lực lượng VTND, anh hùng lao động TKKC</option>
							<option value='bb'>Bệnh binh</option>
							<option value='bm'>Bà mẹ Việt Nam Anh hùng</option>
							<option value='cc'>Người có công giúp đỡ cách mạng</option>
							<option value='hh'>Người hđkc bị nhiễm chất độc hóa học</option>
							<option value='kc'>Người hđkc làm nghĩa vụ quốc tê được tặng huân, huy chương</option>
							<option value='ls'>Liệt sỹ</option>
							<option value='lt'>Người hđcm trước ngày 01/01/1945</option>
							<option value='tb'>Thương binh</option>
							<option value='td'>Người hđkc bị địch bắt tù, đày</option>
							<option value='tkn'>Người hđcm từ ngày 01/01/1945 đến ngày khởi nghĩa tháng 8/1945</option>							
						</select>						
						</div>
					</div>	
					<div class="form-group">
						<div class="col-sm-12"><label>Ngày tháng di chuyển từ: </label><input name="NTTu" class="form-control" data-mask="date" type="text"></div>
					</div>
					<div class="form-group">
						<div class="col-sm-12"><label>Ngày tháng di chuyển đến: </label><input name="NTDen" class="form-control" data-mask="date" type="text"></div>
					</div>
					</div>  							
					<div style="text-align:center">		
						<input name="xa" type="text" class="form-control" style = "Display:none;" id="xa" value = "<?php echo $madv[0];?>">	
						<button type="submit" name="create" class="btn btn-sm btn-success">Tạo báo cáo</button>
						<button type="reset" name="reset" class="btn btn-sm btn-danger" onclick="window.location.href='/main.php'">Không tạo</button> 
					</div>					
				  </form>
			</div>		
	</div>
</div>
<script language="javascript" type="text/javascript">
document.forms['thoai'].name.focus();
function set_focus()
{
   document.forms['thoai'].name.focus();
}
function kt()
{
   var frm = window.document.thoai;         
   if(frm.nambc.value=='')
   {
      alert('Xin vui lòng nhập năm báo cáo !');            
      document.forms['thoai'].nambc.focus();
      return false;
   }
   else                        
      return true;    
}
</script>
<!----------- Footer ------------->
</div>
</div>
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>