<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	require("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
	$key=explode('>',$_GET["id"]);
$sqltn = "select idthannhanbm from thannhanbm where idhsbm = $key[0]";
$qrsql = mysqli_query($con,$sqltn);
while($row = mysqli_fetch_array($qrsql)){
	$data = array(
		"id_doituong"=> $key[0],
		"id_nhanthan"=> $row[0],
		"doituong"=> "bamevnah",
	);
	callAPI('POST','http://ansinhxahoi.bacgiang.gov.vn/api/asxh/nhanthan/delete',$data);
}
	$xoa="DELETE FROM hosobm Where idhsbm=$key[0]";
	$tt=mysqli_query($con,$xoa);
	$xoa="DELETE FROM giaytobm Where idhsbm=$key[0]";
	$tt=mysqli_query($con,$xoa);
	$xoa="DELETE FROM thannhanbm Where idhsbm=$key[0]";
	$tt=mysqli_query($con,$xoa);	
		if($tt) 
			{
				header("location: nhaphosoncc.php?id=1>0");
			}
		else "Có lỗi trong quá trình xóa!";
	$data = array(
		"id_doituong"=> $key[0],
		"doituong"=> "bamevnah",
	);
	callAPI('POST','http://ansinhxahoi.bacgiang.gov.vn/api/asxh/delete',$data);
?>
