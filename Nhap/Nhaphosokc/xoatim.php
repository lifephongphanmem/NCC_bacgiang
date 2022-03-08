<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
	$key=explode('>',$_GET["id"]);		
	$xoa="DELETE FROM hosokc Where idhskc=$key[0]";
	$tt=mysqli_query($con,$xoa);
	$xoa="DELETE FROM giaytokc Where idhskc=$key[0]";		
	$tt=mysqli_query($con,$xoa);
		if($tt) 
			{
				header("location: nhaphosoncc.php?id=1>0");
			}
		else "Có lỗi trong quá trình xóa!";	
?>
