<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");			
	$xoa="DELETE FROM baohiem Where idbh=".$_GET['id'];
	$tt=mysqli_query($con,$xoa);
		if($tt) 
			{				
				header("location: baohiemxabg.php?id=1>0");
			}
		else "Có lỗi trong quá trình xóa!";	
?>
