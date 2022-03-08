<?php

require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");

  function add_person( $idhuyen, $tenxa, $maxa, $mahuyen)
  {
	$sql = "Insert into xa(tthuyen,tenxa,maxa,mahuyen) values($idhuyen,'$tenxa','$maxa','$mahuyen')";
	//echo $sql;	
	$kq = mysqli_query($con,$sql);
  }  
  if ($_FILES['file']['tmp_name'])
  {
	$dom = DOMDocument::load("D:/dmxa.xml");  
  //$dom = DOMDocument::load( $_FILES['file']['tmp_name'] );
  //$path_parts = pathinfo($_FILES['file']['name']);
  //echo $path_parts['filename'].".".$path_parts['extension'];
  $rows = $dom->getElementsByTagName( 'Row' );
  $first_row = true;
  foreach ($rows as $row)
  {	  
  if ( !$first_row )
  {
  
  $idhuyen = 0;  
  $tenxa = "";
  $maxa = "";
  $mahuyen="";
  $index = 1;
  $cells = $row->getElementsByTagName( 'Cell' );
  foreach( $cells as $cell )
  { 
  $ind = $cell->getAttribute( 'Index' );
  if ( $ind != null ) $index = $ind;
  
  if ( $index == 2 ) $idhuyen = $cell->nodeValue;
  if ( $index == 3 ) $tenxa = $cell->nodeValue;
  if ( $index == 4 ) $maxa = $cell->nodeValue;
  if ( $index == 5 ) $mahuyen = $cell->nodeValue;
  
  $index += 1;
  }  
  add_person( $idhuyen, $tenxa, $maxa, $mahuyen);
  }
  $first_row = false;
  }  
  //header("location: nhandlexcel.php");
  }
  ?>