<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
	$key=explode('>',$_GET["id"]);
$sqltn = "select idthannhan from thannhanls where idhsls = $key[0]";
$qrsql = mysqli_query($con,$sqltn);
while($row = mysqli_fetch_array($qrsql)){
	$data = array(
		"id_doituong"=> $key[0],
		"id_nhanthan"=> $row[0],
		"doituong"=> "lietsy",
	);
	callAPI('POST','http://ansinhxahoi.bacgiang.gov.vn/api/asxh/nhanthan/delete',$data);
}
	$xoa="DELETE FROM hosols Where idhsls=$key[0]";
	$tt=mysqli_query($con,$xoa);
	$xoa="DELETE FROM giaytols Where idhsls=$key[0]";
	$tt=mysqli_query($con,$xoa);
	$xoa="DELETE FROM thannhanls Where idhsls=$key[0]";
	$data = array(
		"id_doituong"=> $key[0],
		"doituong"=> "lietsy",
	);
	callAPI('POST','http://ansinhxahoi.bacgiang.gov.vn/api/asxh/delete',$data);
	$tt=mysqli_query($con,$xoa);
		if($tt) 
			{
				header("location: nhaphosoncc.php?id=1>0");
			}
		else "Có lỗi trong quá trình xóa!";	
?>
