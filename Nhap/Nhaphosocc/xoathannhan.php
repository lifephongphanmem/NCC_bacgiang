<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	require("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
	$key=$_GET["id"];
	$iddoituong =0;
	$sqldt = "Select idhscc from thannhancc where idthannhancc = $key";
	$qrsqldt = mysqli_query($con,$sqldt);
	while($row = mysqli_fetch_array($qrsqldt))
	{
		$iddoituong = $row[0];
	}
	$xoa="DELETE  FROM thannhancc Where idthannhancc=$key";
	$tt=mysqli_query($con,$xoa);
	if($tt)
	{
		$data = array(
			"id_doituong"=> $iddoituong,
			"id_nhanthan"=> $key,
			"doituong"=> "giupdocm",
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