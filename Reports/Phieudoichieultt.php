<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>NGƯỜI CÓ CÔNG</title>
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
</div>
<body>
<?php	
	$chuoi = explode('>',$_GET['id']);	
?>
    <table cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td style="text-align: left;">
			<?php
				if ($chuoi[10]=="Tỉnh")
					echo "<nobr>".$chuoi[9]."</nobr>";
				else if ($chuoi[10]=="Huyện")
				{					
					echo "<nobr>".$chuoi[9]."</nobr>";
				}
				else if ($chuoi[10]=="Xã")
					echo "<nobr>UBND ".$chuoi[9]."</nobr>";
			?>
            </td>            
        </tr>
		<tr>
            <td style="font-weight: bold;text-align: left;">
			<?php
				if ($chuoi[10]=="Tỉnh")
					echo "<nobr>".$chuoi[8]."</nobr>";
				else if ($chuoi[10]=="Huyện")
				{					
					echo "<nobr>UBND ".$chuoi[8]."</nobr>";
				}
				else if ($chuoi[10]=="Xã")
					echo "<nobr>UBND ".$chuoi[8]."</nobr>";
			?>
            </td>            
        </tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="0">
		<tr></tr>
		<tr></tr>
		<tr></tr>
        <tr>
            <td style="font-weight: bold;text-align: center;">
				<nobr>PHIẾU ĐỐI CHIỀU HỒ SƠ NGƯỜI HOẠT ĐỘNG CÁCH MẠNG</nobr>
				<nobr>TRƯỚC NGÀY 01 THÁNG 01 NĂM 1945</nobr>
            </td>            
        </tr>
		<tr>
            <td>
				<nobr>Số thứ tự hồ sơ: <?php echo $chuoi[7]; ?></nobr>
            </td>            
        </tr>
	</table>
	<table cellspacing="0" cellpadding="0" border="0">
		<tr></tr>
		<tr></tr>		
        <tr>
            <td style="text-align: left;">
				<nobr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Họ và tên: <?php echo $chuoi[1]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Năm sinh: ".$chuoi[2]; ?></nobr>
            </td>			
        </tr>
		<tr>
            <td style="text-align: left;">
				<nobr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quê quán: <?php echo $chuoi[3]; ?> </nobr>
            </td>			
        </tr>
		<tr>
            <td style="text-align: left;">
				<nobr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Trú quán: <?php echo $chuoi[4]; ?></nobr>
            </td>			
        </tr>
		<tr>
            <td style="text-align: left;">
				<nobr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Số hồ sơ bộ: <?php echo $chuoi[5]; ?></nobr>
            </td>			
        </tr>
		<tr>
            <td style="text-align: left;">
				<nobr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Số hồ sơ tỉnh: <?php echo $chuoi[6]; ?></nobr>
            </td>			
        </tr>		
	</table>
	<table cellspacing="0" cellpadding="0" border="0">
		<tr>
            <td style="font-weight: bold;text-align: left;">
				<nobr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Các giấy tờ trong hồ sơ gồm: </nobr>
            </td>			
        </tr>
	</table>	
	<table cellspacing="0" cellpadding="0" border="1" style="margin: 20px auto; border-collapse: collapse;">
		<tr>
			<th width="8%">STT</th>
			<th width="72%">Tên giấy tờ</th>
			<th width="12%">Số lượng</th>
			<th width="8%">Ghi chú</th>						
		</tr>		
<?php
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");
	$sql = "Select * From giaytolt where idhslt = ".$chuoi[0]." order by chitiet";
	$queryct = mysqli_query($con,$sql);$i=0;$nhom="";$nhom1="";
	while($rowct = mysqli_fetch_array($queryct)){
		$i=$i+1;
		$nhom = $rowct['tengiayto'];
		if ($nhom!=$nhom1)		
		{
			echo "<tr>";		
				echo "<td style='text-align: center;'>".$i."</td>";
				echo "<td style='text-align: left;'>".$rowct['tengiayto']."</td>";	
				if ($rowct['tengiayto'] == "Các giấy tờ khác")
				{					
						/* echo "<td style='text-align: center;'></td>";
						echo "<td></td>";
					echo "</tr>";
					echo "<tr>";		
						echo "<td style='font-style: italic;text-align: center;'></td>";
						echo "<td style='font-style: italic;text-align: left;'>- ".$rowct['chitiet']."</td>";
						echo "<td style='font-style: italic;text-align: center;'>".$rowct['soluong']."</td>";
						echo "<td></td>";
					echo "</tr>"; */
					if ($rowct['chitiet'] != "")
					{
						echo "<td style='text-align: center;'></td>";
						echo "<td></td>";
						echo "</tr>";
						echo "<tr>";		
							echo "<td style='font-style: italic;text-align: center;'></td>";
							echo "<td style='font-style: italic;text-align: left;'>- ".$rowct['chitiet']."</td>";
							echo "<td style='font-style: italic;text-align: center;'>".$rowct['soluong']."</td>";
							echo "<td></td>";
						echo "</tr>";
					}
					else
					{
						echo "<td style='text-align: center;'>".$rowct['soluong']."</td>";
						echo "<td></td>";
					}	
				}
				else
				{
						echo "<td style='text-align: center;'>".$rowct['soluong']."</td>";
						echo "<td></td>";
					echo "</tr>";
				}
				
		}
		
		if ($nhom==$nhom1)		
		{
			//$cs=$cs + $rowct['soluong'];
			echo "<tr>";		
				echo "<td style='font-style: italic;text-align: center;'></td>";
				echo "<td style='font-style: italic;text-align: left;'>- ".$rowct['chitiet']."</td>";
				echo "<td style='font-style: italic;text-align: center;'>".$rowct['soluong']."</td>";
				echo "<td></td>";
			echo "</tr>";
		}
		$nhom1 = $rowct['tengiayto'];
	}
?>
	</table>
	<table>
		<tr></tr>
		<tr>
			<td></td>
			<td></td>
			<td style="text-align: center;">............, ngày ... tháng ... năm ......</td>
		</tr>
		<tr>
			<td style="text-align: center; font-weight: bold;">Người lập biểu</td>
			<td></td>
			<td style="text-align: center; font-weight: bold;">Thủ trưởng đơn vị</td>			
		</tr>
		<tr>
			<td style="text-align: center; font-style: italic;">(Ký, ghi rõ họ tên)</td>
			<td></td>
			<td style="text-align: center; font-style: italic;">(Ký, đóng dấu, ghi rõ họ tên)</td>
		</tr>
	</table>
</body>		
</html>	