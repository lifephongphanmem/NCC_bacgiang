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
			<h4 class="modal-title" style="text-align:center;"><strong>Báo cáo danh sách tăng giảm đối tượng</strong></h4>
		</div>
			<div class="modal-body">
				  <form name="thoai" role="form" method="Post" class="form-horizontal" action="bctanggiamhuyen.php">
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
						<div class="col-sm-12"><label>Phân loại tăng giảm: </label>
						<select name='noitrao' class='form-control' id='noitrao'  type='text'>
							<option value='Báo cáo tăng' selected = 'selected'>Báo cáo tăng</option>
							<option value='Báo cáo giảm'>Báo cáo giảm</option>
						</select>						
					</div>
					</div>	
					<div class="form-group">
						<div class="col-sm-12"><label>Ngày tháng quyết định từ: </label><input name="NTTu" class="form-control" data-mask="date" type="text"></div>
					</div>
					<div class="form-group">
						<div class="col-sm-12"><label>Ngày tháng quyết định đến: </label><input name="NTDen" class="form-control" data-mask="date" type="text"></div>
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