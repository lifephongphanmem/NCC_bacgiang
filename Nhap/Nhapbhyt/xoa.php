<?php
function ktnam($nam)
{
	$kq="";
	if ($nam==2016)
		$kq="bhyt16";
	else if ($nam==2017)
		$kq="bhyt17";
	else if ($nam==2018)
		$kq="bhyt18";
	else if ($nam==2019)
		$kq="bhyt19";
	else if ($nam==2020)
		$kq="bhyt20";
	return $kq;
}
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$key=explode('<',$_GET["id"]);		
	$xoa="DELETE FROM ".ktnam($key[1])." Where idbhyt=$key[0]";
	$tt=mysqli_query($con,$xoa);
		if($tt) 
			{				
				header("location: dkbhyt.php?id=1>0");
			}
		else "Có lỗi trong quá trình xóa!";	
?>
