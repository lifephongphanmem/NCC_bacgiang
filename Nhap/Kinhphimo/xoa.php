<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$key=explode('-',$_GET["id"]);		
	$xoa="DELETE FROM kinhphimo Where idkpmo=$key[0]";
	$tt=mysqli_query($con,$xoa);
		if($tt) 
			{				
				header("location: kinhphimo.php?id=1>".$key[1]);
			}
		else "Có lỗi trong quá trình xóa!";	
?>
