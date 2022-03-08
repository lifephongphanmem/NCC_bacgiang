<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
	$key=explode('>',$_GET["id"]);
$sqltn = "select idthannhancc from thannhancc where idhscc = $key[0]";
$qrsql = mysqli_query($con,$sqltn);
while($row = mysqli_fetch_array($qrsql)){
	$data = array(
		"id_doituong"=> $key,
		"id_nhanthan"=> $row[0],
		"doituong"=> "giupdocm",
	);
	callAPI('POST','http://ansinhxahoi.bacgiang.gov.vn/api/asxh/nhanthan/delete',$data);
}
	$xoa="DELETE FROM hosocc Where idhscc=$key[0]";
	$tt=mysqli_query($con,$xoa);
	$xoa="DELETE FROM giaytocc Where idhscc=$key[0]";
	$tt=mysqli_query($con,$xoa);
	$xoa="DELETE FROM thannhancc Where idhscc=$key[0]";
	$tt=mysqli_query($con,$xoa);
$data = array(
	"id_doituong"=> $key[0],
	"doituong"=> "giupdocm",
);
callAPI('POST','http://ansinhxahoi.bacgiang.gov.vn/api/asxh/delete',$data);
		if($tt)
			{
				header("location: nhaphosoncc.php?id=1>0");
			}
		else "Có lỗi trong quá trình xóa!";	
?>
