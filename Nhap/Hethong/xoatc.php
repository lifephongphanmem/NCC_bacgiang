<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$key=$_GET["id"];		
	$xoa="DELETE FROM dmtrocap Where tttrocap=$key";
	$tt=mysqli_query($con,$xoa);
		if($tt) 
			{				
				header("location: dmtrocap.php?id=1");
			}
		else "Có lỗi trong quá trình xóa!";	
?>
