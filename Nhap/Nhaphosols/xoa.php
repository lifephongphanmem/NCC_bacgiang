<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
	$key=$_GET["id"];
	$sqltn = "select idthannhan from thannhanls where idhsls = $key";
	$qrsql = mysqli_query($con,$sqltn);
	while($row = mysqli_fetch_array($qrsql)){
		$data = array(
			"id_doituong"=> $key,
			"id_nhanthan"=> $row[0],
			"doituong"=> "lietsy",
		);
		callAPI('POST','http://ansinhxahoi.bacgiang.gov.vn/api/asxh/nhanthan/delete',$data);
	}
	$xoa="DELETE FROM hosols Where idhsls=$key";
	$tt=mysqli_query($con,$xoa);
	$xoa="DELETE FROM giaytols Where idhsls=$key";
	$tt=mysqli_query($con,$xoa);
	$xoa="DELETE FROM thannhanls Where idhsls=$key";
	$data = array(
		"id_doituong"=> $key,
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
