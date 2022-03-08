<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$key=$_GET["id"];		
	$xoa="DELETE FROM quatet27 Where idquatet27=$key";
	$tt=mysqli_query($con,$xoa);	
		if($tt) 
			{				
				header("location: dkquatet27.php?id=1>2016");
			}
		else "Có lỗi trong quá trình xóa!";	
?>
