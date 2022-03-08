<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
	$key=$_GET["id"];
$sqltn = "select idthannhantkn from thannhantkn where idhstkn = $key";
$qrsql = mysqli_query($con,$sqltn);
while($row = mysqli_fetch_array($qrsql)){
	$data = array(
		"id_doituong"=> $key,
		"id_nhanthan"=> $row[0],
		"doituong"=> "hoatdongcm",
	);
	callAPI('POST','http://ansinhxahoi.bacgiang.gov.vn/api/asxh/nhanthan/delete',$data);
}
	$xoa="DELETE FROM hosotkn Where idhstkn=$key";
	$tt=mysqli_query($con,$xoa);
	$xoa="DELETE FROM giaytotkn Where idhstkn=$key";
	$tt=mysqli_query($con,$xoa);
	$xoa="DELETE FROM thannhantkn Where idhstkn=$key";
	$tt=mysqli_query($con,$xoa);
$data = array(
	"id_doituong"=> $key,
	"doituong"=> "hoatdongcm",
);
callAPI('POST','http://ansinhxahoi.bacgiang.gov.vn/api/asxh/delete',$data);
		if($tt)
			{				
				header("location: nhaphosoncc.php?id=1>0");
			}
		else "Có lỗi trong quá trình xóa!";	
?>
