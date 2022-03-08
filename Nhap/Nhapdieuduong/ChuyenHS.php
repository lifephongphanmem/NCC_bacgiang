<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$key=$_GET["id"];
	$sql="Update dieuduong Set chuyen='Chuyển 1',lydokhongduyet='Không đi điều dưỡng tập trung',tinhtra = '1' Where iddieuduong=".$key;
	$kq=mysqli_query($con,$sql);
		if($kq)
			{				
				header("location: dkdieuduongtinhchitra.php?id=1>0");
			}
		else "Có lỗi trong quá trình chuyển!";
?>
