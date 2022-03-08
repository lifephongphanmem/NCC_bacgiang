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
			<h4 class="modal-title" style="text-align:center;"><strong>Danh sách hồ sơ người có công</strong></h4>
		</div>
			<div class="modal-body">
				  <form name="thoai" role="form" method="Post" class="form-horizontal" action="Hosonccxa.php">					
					<div class="form-group">
						<div class='col-sm-12'>
							<label>Loại đối tượng:</label>
							<select name='loaidoituong' class='form-control' id='loaidoituong'  type='text'>
								<option value='ah' selected = 'selected'>Anh hùng LLVTND, anh hùng LĐTKKC</option>	
								<option value='tb'>Thương binh</option>
								<option value='bb'>Bệnh binh</option>
								<option value='ls'>Liệt sỹ</option>
								<option value='hh'>Người HĐKC bị nhiễm chất độc hóa học</option>
								<option value='hhtn'>Con đẻ người HĐKC bị nhiễm chất độc hóa học</option>
								<option value='bm'>Bà mẹ Việt Nam anh hùng</option>
								<option value='kc'>Người HĐKC, là nghĩa vụ quốc tế được tặng huân, huy chương</option>
								<option value='cc'>Người có công giúp đỡ cách mạng</option>
								<option value='td'>Người HĐKC bị địch bắt tù đày</option>								
								<option value='lt'>Người hoạt động cách mạng trước ngày 01/01/1945</option>
								<option value='tkn'>Người HĐCM từ ngày 01/01/1945 đến ngày khởi nghĩa tháng 8 năm 1945</option>																
							</select>
						</div>
					</div>							
					</div>  							
					<div style="text-align:center">		
						<input name="xa" type="text" class="form-control" style = "Display:none;" id="xa" value = "<?php echo $madv[0];?>">	
						<input name="huyen" type="text" class="form-control" style = "Display:none;" id="huyen" value = "<?php echo $madv[1];?>">	
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