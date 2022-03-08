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
			<h4 class="modal-title" style="text-align:center;"><strong>Danh sách người có công được điều dưỡng</strong></h4>
		</div>
			<div class="modal-body">
				  <form name="thoai" role="form" method="Post" class="form-horizontal" action="DsNCCDDtinh.php">
					<div class='form-group'>
						<div class='col-sm-12'>
							<label >Tên Huyện:</label>
							<select name='huyen' class='form-control' id='huyen'  type='text'>
								<option value='' selected = 'selected'></option>
							<?php
								$sql = "Select tenhuyen from huyen";
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
						<div class="col-sm-12"><label>Năm: </label><input name="nambc" class="form-control"  type="text"></div>
					</div>
					  <div class="form-group">
						  <div class="col-sm-12">
							  <label>Phân loại:</label>
							  <select name="phanloai" id="phanloai" class="form-control">
								  <option value=""></option>
								  <option value="Tập trung">Tập trung</option>
								  <option value="Tại nhà">Tại nhà</option>
							  </select>
						  </div>
					  </div>
					  <div class="form-group">
						  <div class="col-sm-12">
							  <label>Loại đối tượng:</label>
							  <select name="loaidoituong" id="loaidoituong" class="form-control">
								  <option value="" selected = "selected"></option>
								  <option value="Anh hùng" >Anh hung lực lượng vũ trang, anh hung lao động trong thời kỳ kháng chiến</option>
								  <option value="Người hoạt động trước 01/01/1945" >Người hoạt động cách mạng trước 01 tháng 01 năm 1945</option>
								  <option value="Tiền khởi nghĩa" >Người hoạt động cách mạng từ ngày 01 tháng 01 năm 1945 đến ngày khởi nghĩa tháng tám năm 1945</option>
								  <option value="Bà mẹ Việt Nam anh hùng" >Bà mẹ Việt Nam anh hùng</option>
								  <option value="Thương binh" >Thương binh và người hưởng chính sách như thương binh</option>
								  <option value="Bệnh binh" >Bệnh binh</option>
								  <option value="Người nhiễm chất độc hóa học" >Người hoạt động kháng chiến nhiễm chất độc hóa học</option>
								  <option value="Thân nhân liệt sỹ" >Thân nhân Liệt sỹ</option>
								  <option value="Tù đày" >Người hoạt động kháng chiến bị địch bắt, tù đày</option>
								  <option value="Người có công giúp đỡ cách mạng" >Người có công giúp đỡ cách mạng</option>
							  </select>
						  </div>
					  </div>

					<div style="text-align:center">
						<input name="xa" type="text" class="form-control" style = "Display:none;" id="xa" value = "<?php echo $madv[1];?>">
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
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>
</div>
</div>
