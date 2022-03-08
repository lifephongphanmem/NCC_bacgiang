<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
require("/Main/connect.php");
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link id="Link1" rel="shortcut icon" href="Images/favicon.png" type="image/x-icon" />
<link rel="stylesheet" href="Css/style.css" media="screen" type="text/css" />
<link rel="stylesheet" href="Css/frame.css" media="screen" type="text/css" />
<link rel="stylesheet" href="Css/mtrackingstyle.css" media="screen" type="text/css" />
</head>
<body>
<?php 

if (!empty($_POST["login"]))
	{
		// Dùng hàm addslashes() để tránh SQL injection, dùng hàm md5() để mã hóa password
		$username = addslashes( $_POST['username'] );
		$password = md5( addslashes( $_POST['password'] ) );
		// Lấy thông tin của username đã nhập trong table members
		$sql_query = @mysql_query("SELECT tendonvi,tencaptren,madonvi,capql,tendn,ttdv,nlb,ptkt,tongah,tongbb,tongbm,tongcc,tonghh,tongkc,tongls,tonglt,tongtb,tongtd,tongtkn FROM hethongdv WHERE tendn='$username' and makhau='$password'");
		$member = @mysql_fetch_array( $sql_query );
		$abc = $member[0].">".$member[1].">".$member[2].">".$member[3].">".$member[4].">".$member[5].">".$member[6].">".$member[7].">".$member[8].">".$member[9].">".$member[10].">".$member[11].">".$member[12].">".$member[13].">".$member[14].">".$member[15].">".$member[16].">".$member[17].">".$member[18];
		// Nếu username này không tồn tại thì....
		if ( @mysql_num_rows( $sql_query ) <= 0 )
		{
			echo "<font color='red'>Mật khẩu sai, yêu cầu nhập lại</font>";
		}		
		else {
		// Khởi động phiên làm việc (session)
		$_SESSION['user_id'] = $abc;
		// Thông báo đăng nhập thành công
		header("Location: main.php");
		}
	}
?>
<div class="top">
  <div class="header">
    <div class="logo">
      <h1 ><a id="logo-bg" href="./" title="Smart Motor"></a></h1>
    </div>
    <div class="navigation">
      <ul class="clearfix" >
		<li><a id="menu-help" href="javascript:void(0);" onclick="javascipt:window.open('/data/upload/HdLife_NCC2016.pdf');" target="_blank" class="menu-help">Trợ giúp</a></li>
        <li><a id="menu-contact" href="#" class="menu-contact">Liên hệ</a></li>
      </ul>
    </div>
    <div id="acc-box" class="shopping clearfix">
		
	</div>
  </div>
</div>

<table id="wrapper" width="100%" height="100%">
  <tr>
    <td width="100%" height="100%" class="td-new-bg-2"><div id="content-bg" class="pr new-bg-2 clearfix">
        <div class="login-box">
          <h2 id="login-box-title">Đăng nhập hệ thống</h2>
		  <form id="lg-form" name="lg-form" action=""  method="post">
          <ul class="clearfix">
            <li class="clearfix">
              <label id="login-box-label-username">Tên đăng nhập</label>
              <input type="text" class="p-input" name ="username" id ="username"  />
            </li>
            <li class="clearfix">
              <label id="login-box-label-password">Mật khẩu</label>
              <input type="password" class="p-input" name ="password" id ="password"  />
            </li>
            <li>
              <input type="submit" name="login" value="Đăng nhập"  class="m-btn-02" />
            </li>
          </ul>
		  </form>
        </div>
      </div>
	  </td>
  </tr>
  <tr>
    <td><div id="footer" class="footer-2" style="margin-top:0">Giải Pháp Được Phát Triển Bởi Công Ty TNHH Phát Triển Phần Mềm Cuộc Sống</div></td>
  </tr>
</table>
</body>
</html>
