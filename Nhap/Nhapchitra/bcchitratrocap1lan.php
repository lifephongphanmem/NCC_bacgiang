<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>NCC</title>
    <style type="text/css">
        body {
            font: normal 14px time, serif;
        }

        table, p {
            width: 99%;
            margin: auto;
        }

        #tabcontent td, #tabcontent th {
            padding: 10px;
        }
        tr td:first-child {text-align: center;}
    @media print {
		   .in{
			  display: none !important;
		   }
		}
    </style>
	<link rel="stylesheet" href="/thoaikx/buttonPro.css"/>
</head>
<div class="in" style="margin-left: 900px;">
<input  type="submit" class="buttonPro medium blue" onclick="window.print()" value="In báo cáo"  />
<input type="button" class="buttonPro medium red" value="Thoát" onclick="window.location.href='<?php echo $_SERVER['HTTP_REFERER'];?>'" />	
</div>
<body>
<?php
	
$loaidoituongin = "";
$namquain = "";
$xain = "";
$tenhuyenin = "";

if(isset($_POST['inds'])){
	$loaidoituongin = $_POST['loaidoituongin'];
	$namquain = $_POST['namquain'];
	$xain = $_POST['xain'];
	$tenhuyenin = $_POST['tenhuyenin'];
}
?>
    <table cellspacing="0" cellpadding="0" border="0">        
		<tr>
			<td style="text-align: left;font-weight: bold;"><nobr>Đơn vị: <?php echo str_replace('_',' ',$xain);?></nobr></td>			
			<td style="text-align: right;font-weight: bold;"><nobr>Mẫu số: B07-QT-LĐTBXH</nobr></td>
		</tr>
	</table>
		<table cellspacing="0" cellpadding="0" border="0">
		<tr>
			<td  style='text-align: center;font-weight: bold;'>BÁO CÁO TÌNH HÌNH CHI TRẢ TRỢ CẤP MỘT LẦN</td>
		</tr>
		<tr>
            <td  style="text-align: center;font-weight: bold;">Quý: ...../Năm: .....</td>
		</tr>		
	</table>
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th rowspan="3" width="7%">STT</th>
			<th rowspan="3" width="20%">Loại trợ cấp</th>
			<th colspan="8"  width="%20">Số phải trả</th>
			<th colspan="4"  width="10%">Số đã trả</th>
			<th colspan="6" width="15%">Số chưa trả</th>
			<th rowspan="3" width="15%">Luỹ kế số tiền không phải trả từ đầu năm đến cuối quí này</th>
		</tr>
		<tr>
			<th colspan="2" >Chưa trả quí trước</th>
			<th colspan="2" >Số phát sinh tăng quí này</th>
			<th colspan="2"  >Cộng</th>
			<th colspan="2" >Luỹ kế từ đầu năm đến cuối quí này</th>
			<th colspan="2" >Quí này</th>
			<th colspan="2" >Luỹ kế từ đầu năm đến cuối quí này</th>
			<th colspan="2" >Tổng số</th>
			<th colspan="2" >Chuyển quí sau trả</th>
			<th colspan="2" >Thôi không phải trả</th>
		</tr>
		<tr>
			<th  >Số người</th>
			<th  >Số tiền</th>
			<th  >Số người</th>
			<th  >Số tiền</th>
			<th  >Số người</th>
			<th  >Số tiền</th>
			<th  >Số người</th>
			<th  >Số tiền</th>
			<th  >Số người</th>
			<th  >Số tiền</th>
			<th  >Số người</th>
			<th  >Số tiền</th>
			<th  >Số người</th>
			<th  >Số tiền</th>
			<th  >Số người</th>
			<th  >Số tiền</th>
			<th  >Số người</th>
			<th  >Số tiền</th>
		</tr>
		<tr>
			<th  >1</th>
			<th  >2</th>
			<th  >3</th>
			<th  >4</th>
			<th  >5</th>
			<th  >6</th>
			<th  >7=3+5</th>
			<th  >8=4+6</th>
			<th  >9</th>
			<th  >10</th>
			<th  >11</th>
			<th  >12</th>
			<th  >13</th>
			<th  >14</th>
			<th  >15</th>
			<th  >16</th>
			<th  >17</th>
			<th  >18</th>
			<th  >19</th>
			<th  >20</th>
			<th  >21</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Người hoạt động cách mạng trước ngày 01 tháng 01 năm 1945</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>2</td>
			<td>Người hoạt động cách mạng từ 01/01/1945 đến trước Tổng khởi nghĩa 19 tháng Tám năm 1945 </td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>

	</table>

<table >
	<tr>	
	</tr>
	<tr>
		<td width="30%"></td>
		<td width="30%"></td>
		<td width="40%" style="text-align: center;">............, ngày ... tháng ... năm ......</td>
	</tr>
	<tr>
		<td style="text-align: center;: center; font-weight: bold;">Người lập biểu</td>
		<td style="text-align: center;: center; font-weight: bold;">Kế toán trưởng</td>
		<td style="text-align: center; font-weight: bold;"> THỦ TRƯỞNG ĐƠN VỊ</td>
	</tr>
	<tr>
		<td style="text-align: center; font-style: italic;">(Ký, ghi rõ họ và tên)</td>
		<td style="text-align: center; font-style: italic;">(Ký, ghi rõ họ và tên)</td>
		<td style="text-align: center; font-style: italic;">(Ký, ghi rõ họ và tên, đóng dấu)</td>
	</tr>
</table>
</body>		
</html>	