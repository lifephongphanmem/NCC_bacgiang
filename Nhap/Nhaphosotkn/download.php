<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$key=$_GET["id"];	
	if ( !is_file("$_SERVER[DOCUMENT_ROOT]".$key) || !is_readable("$_SERVER[DOCUMENT_ROOT]".$key) ) {
		echo "Loi: file khong ton tai!";
		exit(-1);
	} 
	$fp = fopen("$_SERVER[DOCUMENT_ROOT]".$key, "rb");	
	header('Content-type: application/octet-stream');
	header('Content-disposition: attachment; filename="'."$_SERVER[DOCUMENT_ROOT]".$key.'"');
	header('Content-length: ' . filesize("$_SERVER[DOCUMENT_ROOT]".$key));	
	fpassthru($fp);
	fclose($fp);
?>