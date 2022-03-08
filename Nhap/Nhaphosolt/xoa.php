<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
	$key=$_GET["id"];
$sqltn = "select idthannhanlt from thannhanlt where idhslt = $key";
$qrsql = mysqli_query($con,$sqltn);
while($row = mysqli_fetch_array($qrsql)){
	$data = array(
		"id_doituong"=> $key,
		"id_nhanthan"=> $row[0],
		"doituong"=> "tienkhangchien",
	);
	callAPI('POST','http://ansinhxahoi.bacgiang.gov.vn/api/asxh/nhanthan/delete',$data);
}
	$xoa="DELETE FROM hosolt Where idhslt=$key";
	$tt=mysqli_query($con,$xoa);
	$xoa="DELETE FROM giaytolt Where idhslt=$key";
	$tt=mysqli_query($con,$xoa);
	$xoa="DELETE FROM thannhanlt Where idhslt=$key";
	$tt=mysqli_query($con,$xoa);
	$data = array(
		"id_doituong"=> $key,
		"doituong"=> "tienkhangchien",
	);
	callAPI('POST','http://ansinhxahoi.bacgiang.gov.vn/api/asxh/delete',$data);
		if($tt)
			{				
				header("location: nhaphosoncc.php?id=1>0");
			}
		else "Có lỗi trong quá trình xóa!";	
?>
