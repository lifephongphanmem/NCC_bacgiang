<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	require("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
	$key=$_GET["id"];
	$sqltn = "select idthannhanbm from thannhanbm where idhsbm = $key";
	$qrsql = mysqli_query($con,$sqltn);
	while($row = mysqli_fetch_array($qrsql)){
		$data = array(
			"id_doituong"=> $key,
			"id_nhanthan"=> $row[0],
			"doituong"=> "bamevnah",
		);
		callAPI('POST','http://ansinhxahoi.bacgiang.gov.vn/api/asxh/nhanthan/delete',$data);
	}
	$xoa="DELETE FROM hosobm Where idhsbm=$key";
	$tt=mysqli_query($con,$xoa);
	$xoa="DELETE FROM giaytobm Where idhsbm=$key";
	$tt=mysqli_query($con,$xoa);
	$xoa="DELETE FROM thannhanbm Where idhsbm=$key";
	$tt=mysqli_query($con,$xoa);
	$data = array(
		"id_doituong"=> $key,
		"doituong"=> "bamevnah",
	);
	callAPI('POST','http://ansinhxahoi.bacgiang.gov.vn/api/asxh/delete',$data);
	if($tt)
	{
		header("location: nhaphosoncc.php?id=1>0");
	}
	else "Có lỗi trong quá trình xóa!";
?>
