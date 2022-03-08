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
			<h4 class="modal-title" style="text-align:center;"><strong>Danh sách quà tết, 27/7</strong></h4>
		</div>
			<div class="modal-body">
				  <form name="thoai" role="form" method="Post" class="form-horizontal" action="quatethuyen.php">
					<div class="form-group">
						<div class="col-sm-12"><label>Năm: </label><input name="nambc" class="form-control"  type="text"></div>
					</div>	
					<div class="form-group">
						<div class="col-sm-12"><label>Nội dung: </label>						
						<select name="noidung" id="noidung" class="form-control">
							<option value="Quà tết nguyên đán">Quà tết nguyên đán</option>
							<option value="Quà 27/7">Quà 27/7</option>
						</select>
					</div>	
					</div> 
					<div class="form-group">
						<div class="col-sm-12"><label>Tên xã: </label>						
						<select name="tenxatao" id="tenxatao" class="form-control">
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
					</div>
					<div style="text-align:center">	
						<input name="huyen" type="text" class="form-control" style = "Display:none;" id="huyen" value = "<?php echo $madv[0];?>">
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