<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$key=$_GET["id"];		
	$xoa="DELETE FROM thannhanhh Where idthannhanhh=$key";
	$tt=mysqli_query($con,$xoa);	
		if($tt) 
			{				
				header("location: nhapthannhantim.php?id=1");
			}
		else "Có lỗi trong quá trình xóa!";	
?>
