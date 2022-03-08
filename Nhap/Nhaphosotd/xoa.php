<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
require("$_SERVER[DOCUMENT_ROOT]/Main/general.php");
	$key=$_GET["id"];
$sqltn = "select idthannhantd from thannhantd where idhstd = $key";
$qrsql = mysqli_query($con,$sqltn);
while($row = mysqli_fetch_array($qrsql)){
	$data = array(
		"id_doituong"=> $key,
		"id_nhanthan"=> $row[0],
		"doituong"=> "tuday",
	);
	callAPI('POST','http://ansinhxahoi.bacgiang.gov.vn/api/asxh/nhanthan/delete',$data);
}
	$xoa="DELETE FROM hosotd Where idhstd=$key";
	$tt=mysqli_query($con,$xoa);
	$xoa="DELETE FROM giaytotd Where idhstd=$key";
	$tt=mysqli_query($con,$xoa);
	$xoa="DELETE FROM thannhantd Where idhstd=$key";
	$tt=mysqli_query($con,$xoa);
$data = array(
	"id_doituong"=> $key,
	"doituong"=> "tuday",
);
callAPI('POST','http://ansinhxahoi.bacgiang.gov.vn/api/asxh/delete',$data);
		if($tt)
			{				
				header("location: nhaphosoncc.php?id=1>0>1");
			}
		else "Có lỗi trong quá trình xóa!";	
?>
