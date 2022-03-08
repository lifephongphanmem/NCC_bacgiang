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

<?php

if(isset($_POST["capnhat"]))
{	
	if($_POST['matkhaumoi']==$_POST['xacnhanmk'])
	{
		$sql="Update hethongdv Set makhau='".MD5($_POST['matkhaumoi'])."'";
		$sql=$sql." Where tendonvi='".$madv[0]."' and tendn='".$_POST['tendncu']."'";
		$tt=mysqli_query($con,$sql);
		if($tt) 
		{
			echo '<script>alert("Đã cập nhật dữ liệu thành công")</script>';
		}
	}
	else
	{
		echo '<script>alert("Cần nhập chính xác mật khẩu")</script>';
	}
}
?>
<form role='form' method='POST' class='form-horizontal form-groups-bordered'>		
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Thay đổi thông tin tài khoản
			<input type="submit" name="capnhat" class="btn btn-info" value = "Cập nhật" style = "float:right; background-color:rgb(83, 181, 166)">			
			</h4>
		</div>
	<label for="field-3" class="col-sm-3 control-label">Tên đăng nhập cũ:</label>
	<div class="col-sm-9">
		<input name="tendncu" type="text" class="form-control" id="tendncu">		
	</div>
	<label for="field-3" class="col-sm-3 control-label">Mật khẩu cũ:</label>
	<div class="col-sm-9">
		<input name="matkhaucu" type="password" class="form-control" id="matkhaucu">
	</div>
	<label for="field-3" class="col-sm-3 control-label">Mật khẩu mới:</label>
	<div class="col-sm-9">		
		<input name="matkhaumoi" type="password" class="form-control" id="matkhaumoi">
	</div>	
	<label for="field-3" class="col-sm-3 control-label">Xác nhận lại mật khẩu:</label>
	<div class="col-sm-9">		
		<input name="xacnhanmk" type="password" class="form-control" id="xacnhanmk">
	</div>	
</form>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>