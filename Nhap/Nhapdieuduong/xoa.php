<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$key=$_GET["id"];		
	$xoa="DELETE FROM dieuduong Where iddieuduong=$key";
	$tt=mysqli_query($con,$xoa);
		if($tt) 
			{				
				header("location: dkdieuduong.php?id=1>0");
			}
		else "Có lỗi trong quá trình xóa!";	
?>
