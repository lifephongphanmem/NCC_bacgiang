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
			<h4 class="modal-title" style="text-align:center;"><strong>Quyết định điều dưỡng tại nhà</strong></h4>
		</div>
			<div class="modal-body">
				  <form name="thoai" onsubmit="return kt()" role="form" method="Post" class="form-horizontal" action="QDDDTN.php">
					  <div class='form-group'>
						  <div class='col-sm-12'>
							  <label>Tên Huyện:</label>
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
					  <input name="inqd" type="checkbox" id="inqd" >Chỉ in danh sách</input>
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
	   alert('Xin vui lòng chọn huyện cần tạo!');
	   document.forms['thoai'].huyen.focus();
	   return false;
   }
   else  if (frm.huyen.value=='')
   {

	   alert('Xin vui lòng nhập năm báo cáo!');
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
