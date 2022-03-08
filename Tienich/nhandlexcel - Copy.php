<?php include("$_SERVER[DOCUMENT_ROOT]/Main/header.php");
include("$_SERVER[DOCUMENT_ROOT]/Main/general.php"); ?>	
<meta charset='utf-8' />										
<ul id="main-menu" class="main-menu">
	<!-- add class "multiple-expanded" to allow multiple submenus to open -->
	<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
	<li class="auto-inherit-active-class">
		<a href="index.html">
			<i class="entypo-gauge"></i>
			<span class="title">Hồ sơ người có công</span>
		</a>
		<ul>
			<li>
				<a  href='/Nhap/Nhaphosols/nhaphosoncc.php?id=1>0'>							
					<span class='title'>Hồ sơ liệt sỹ</span>
				</a>												
			</li>
			<li>
				<a  href='/Nhap/Nhaphosotb/nhaphosoncc.php?id=1>0'>							
					<span class='title'>Hồ sơ thương binh</span>
				</a>												
			</li>
			<li>
				<a  href='/Nhap/Nhaphosobb/nhaphosoncc.php?id=1>0'>							
					<span class='title'>Hồ sơ bệnh binh</span>
				</a>												
			</li>			
		</ul>
	</li>				
</ul>
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/header2.php"); ?>
<!------- HEADER ---------->  
<script src="/assets/News/jquery.min.js"></script>
<script src="/dist/jquery.inputmask.bundle.min.js"></script>
<script>
$(document).ready(function(){
    $(":input").inputmask();
});
</script>
<?php 	
	if($madv[3]!="Tỉnh")
	{
		echo "<h3 style='text-align: center'>Bạn đang đăng nhập bằng tài khoản tổng hợp.</br> Vì vậy bạn không thể sử dụng chức năng này.</br> Xin lỗi vì sự bất tiện này.</br> Xin chân thành cảm ơn!</h3>";
		echo "<br />";
	}
	else
	{	
?>
<h2>Nhận dữ liệu từ file excel</h2>
<br />
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">	
			<div class="panel-body">
		<form role="form" action = "importxls.php" method="POST" enctype="multipart/form-data">
			 <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
			<div class="form-group">
				<label for="field-1" class="col-sm-3 control-label">Tên file:</label>
				<div class="col-sm-5">
					<input type="file" name="file" class="form-control"/>
				</div>
			</div>			
			
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-5">	
				  <button type="submit" name = "sua" class="btn btn-success">Nhận dữ liệu</button>
				  <input type="button" class="btn btn-black" value="Không nhận" onclick="window.location.href='/main.php'" />
				</div>
			</div>			
		</form> 
</div>	
	</div>
		</div>
			</div>	
	<?php } ?>
</div>
</div>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>