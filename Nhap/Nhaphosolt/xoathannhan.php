<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	require("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
	$key=$_GET["id"];
	$iddoituong =0;
	$sqldt = "Select idhslt from thannhanlt where idthannhanlt = $key";
	$qrsqldt = mysqli_query($con,$sqldt);
	while($row = mysqli_fetch_array($qrsqldt))
	{
		$iddoituong = $row[0];
	}
	$xoa="DELETE  FROM thannhanlt Where idthannhanlt=$key";
	$tt=mysqli_query($con,$xoa);
	if($tt)
	{
		$data = array(
			"id_doituong"=> $iddoituong,
			"id_nhanthan"=> $key,
			"doituong"=> "tienkhangchien",
		);
		callAPI('POST','http://ansinhxahoi.bacgiang.gov.vn/api/asxh/nhanthan/delete',$data);
		//header("location: nhapthannhan.php?id=1>0");
	}
	else "Có lỗi trong quá trình xóa!";
?>
</br>
<a class='btn btn-red ' href='nhapthannhan.php?id=1>0'>
	Trở lại Danh sách thân nhân hồ sơ
</a>