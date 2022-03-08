<!DOCTYPE html>
<html lang="en">
<?php 
$madv = "";
ob_start();
session_start();
require("connect.php");
if ( !$_SESSION['user_id'] )
{ 
    header('location: index.php');
}
else
{
	if (isset($_SESSION['user_id']))
	{
		$madv=explode('>',$_SESSION['user_id']);
	}
}
?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8"></meta>
	<title>GPNCC</title>

	<link rel="stylesheet" href="/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="/assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/assets/css/neon-core.css">
	<link rel="stylesheet" href="/assets/css/neon-theme.css">
	<link rel="stylesheet" href="/assets/css/neon-forms.css">
	<link rel="stylesheet" href="/assets/css/custom.css">	
	<link rel="stylesheet" href="/assets/css/main.css">
	<script src="/assets/js/jquery-1.11.0.min.js"></script>
	<link rel="stylesheet" href="/assets/css/skins/purple.css">
	<script>$.noConflict();</script>
	<!-- Begin UI Trang chủ -->

  <!-- End UI trang chủ -->

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="page-body" data-url="http://neon.dev">
<div class="menutop">	
	<h4 style="font-size:14px; line-height:2;" class="modal-title"><img style="width: 15px;" src='\Images\nguoi.png'>&nbsp;HỆ THỐNG QUẢN LÝ NGƯỜI CÓ CÔNG VỚI CÁCH MẠNG<span style = "float:right">Đơn vị: <?php echo $madv[0].' - '.$madv[1];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></h4>

</div>
<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	<div class="sidebar-menu">
		<div class="sidebar-menu-inner">
		<header class="logo-env">
				<!-- logo -->
				<div class="logo">
					<a href="/main.php">
						<img src="/Images/home.png" width="32" alt="" />
					</a>
					<a style="padding-left:40px;" href="/logout.php">
						<img src="/Images/logout.png" width="32" alt="" />
					</a>
				</div>
			
			<!-- logo collapse icon -->
				<div class="sidebar-collapse">
					<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
						<i class="entypo-menu"></i>
					</a>
				</div>		
				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
						<i class="entypo-menu"></i>
					</a>
				</div>
		
			</header>
			
			