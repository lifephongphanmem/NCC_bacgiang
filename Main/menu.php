<ul id="main-menu" class="main-menu">
	<!-- add class "multiple-expanded" to allow multiple submenus to open -->
	<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
	<li class="auto-inherit-active-class">
		<a style="border-top: 1px solid white;<?php
		if ($madv[22]=="TT")
			echo "Display: none";?> "  href="index.html">
			<i class="entypo-folder"></i>
			<span class="title">Hồ sơ người có công</span>
		</a>
		<ul>
			<li>
				<a style="border-top: 1px solid white;"  href='/Nhap/Nhaphosobm/nhaphosoncc.php?id=1>0'>							
					<span  class='title'>Hồ sơ bà mẹ Việt Nam anh hùng</span>
				</a>												
			</li>
			<li>
				<a  href='/Nhap/Nhaphosols/nhaphosoncc.php?id=1>0'>							
					<span  class='title'>Hồ sơ liệt sỹ</span>
				</a>												
			</li>
			<li>
				<a  href='/Nhap/Nhaphosotb/nhaphosoncc.php?id=1>0'>							
					<span  class='title'>Hồ sơ thương binh</span>
				</a>												
			</li>
			<li>
				<a  href='/Nhap/Nhaphosobb/nhaphosoncc.php?id=1>0'>							
					<span  class='title'>Hồ sơ bệnh binh</span>
				</a>												
			</li>	
			<li>
				<a  href="index.html">					
					<span class="title">Hồ sơ nhiễm chất độc hóa học</span>
				</a>
				<ul>
					<li>
						<a  href='/Nhap/Nhaphosohh/nhaphosoncc.php?id=1>0'>							
							<span  class='title'>Hồ sơ nhiễm chất độc hóa học trực tiếp</span>
						</a>
					</li>
					<li>
						<a  href='/Nhap/Nhaphosohh/nhapthannhantim.php?id=1'>							
							<span  class='title'>Hồ sơ nhiễm chất độc hóa học gián tiếp</span>
						</a>
					</li>
				</ul>													
			</li>
			<li>				
				<a  href="index.html">					
					<span class="title">Hồ sơ người hoạt động kháng chiến</span>
				</a>
				<ul>
					<li>
						<a  href='/Nhap/Nhaphosokc/nhaphosoncc.php?id=1>0>1'>							
							<span  class='title'>Một lần</span>
						</a>
					</li>
					<li>
						<a  href='/Nhap/Nhaphosokc/nhaphosoncc.php?id=1>0>0'>							
							<span  class='title'>Hàng tháng</span>
						</a>
					</li>
				</ul>						
			</li>	
			<li>
				<a  href='/Nhap/Nhaphosotkn/nhaphosoncc.php?id=1>0'>							
					<span  class='title'>Hồ sơ tiền khởi nghĩa</span>
				</a>											
			</li>	
			<li>
				<a  href='/Nhap/Nhaphosolt/nhaphosoncc.php?id=1>0'>							
					<span  class='title'>Hồ sơ người hoạt động trước cách mạng</span>
				</a>											
			</li>
			<li>
				<a  href='/Nhap/Nhaphosoah/nhaphosoncc.php?id=1>0'>							
					<span  class='title'>Hồ sơ anh hùng</span>
				</a>											
			</li>
			<li>
				<a  href="index.html">					
					<span class="title">Hồ sơ bị bắt, tù đày</span>
				</a>
				<ul>
					<li>
						<a  href='/Nhap/Nhaphosotd/nhaphosoncc.php?id=1>0>1'>							
							<span  class='title'>Một lần</span>
						</a>
					</li>
					<li>
						<a  href='/Nhap/Nhaphosotd/nhaphosoncc.php?id=1>0>0'>							
							<span  class='title'>Hàng tháng</span>
						</a>
					</li>
				</ul>				
			</li>
			<li>				
						<a  href='/Nhap/Nhaphosocc/nhaphosoncc.php?id=1>0>'>							
							<span  class='title'>Người có công giúp đỡ cách mạng</span>
						</a>
			</li>
		</ul>
		</li>	
		<li>
		<a  style="<?php
		if ($madv[22]=="TT")
			echo "Display: none";?> " href="index.html">
			<i class="entypo-box"></i>
			<span class="title">Thông tin mộ</span>
		</a>
		<ul>			
			<?php
			if ($madv[3]=="Xã")
			{
				echo "<li>";
					echo "<a href='/Nhap/Nhapmolietsy/molietsynt.php?id=1>0'>							
						<span style='color:black;' class='title'>Danh sách mộ liệt sỹ</span>
					</a>";												
				echo "</li>";
			}
			if ($madv[3]=="Huyện")
			{
				echo "<li>";
					echo "<a  href='/Nhap/Nhapmolietsy/molietsynthuyen.php?id=1>0'>							
						<span style='color:black;' class='title'>Danh sách mộ liệt sỹ</span>
					</a>";												
				echo "</li>";
			}
			if ($madv[3]=="Tỉnh")
			{
				echo "<li>";
					echo "<a  href='/Nhap/Nhapmolietsy/molietsynttinh.php?id=1>0'>							
						<span style='color:black;' class='title'>Danh sách mộ liệt sỹ</span>
					</a>";												
				echo "</li>";
				$sqlkp="select COUNT(idkpmo) as SBG from kinhphimo where phanloai='GDQL'";
				$sql1kp=mysqli_query($con,$sqlkp);$sbgmo=0;
				while($rowkp=mysqli_fetch_array($sql1kp)){
					$sbgmo=$rowkp['SBG'];
				}
				echo "<li>";
					echo "<a  href='/Nhap/Kinhphimo/kinhphimo.php?id=1>".$sbgmo."'>							
						<span style='color:black;' class='title'>Kính phí xây dựng mộ gia đình quản lý</span>
					</a>";												
				echo "</li>";
				$sqlkpnt="select COUNT(idkpmo) as SBG from kinhphimo where phanloai='NT'";
				$sql1kpnt=mysqli_query($con,$sqlkpnt);$sbgmont=0;
				while($rowkpnt=mysqli_fetch_array($sql1kpnt)){
					$sbgmont=$rowkpnt['SBG'];
				}
				echo "<li>";
					echo "<a  href='/Nhap/Kinhphimo/kinhphimont.php?id=1>".$sbgmont."'>							
						<span style='color:black;' class='title'>Kính phí xây dựng mộ trong nghĩa trang</span>
					</a>";												
				echo "</li>";
			}
			?>
		</ul>	
		</li>
		<li>
		<a style="<?php
		if ($madv[22]=="TT")
			echo "Display: none";?> "  href="index.html">
			<i class="entypo-plus-squared"></i>
			<span class="title">Bảo hiểm y tế</span>
		</a>
		<ul>
			<?php
			if ($madv[3]=="Xã")
			{
				$sqlbh="select COUNT(idbh) as SBG from baohiem where xa='".$madv[0]."'";
				$sql1bh=mysqli_query($con,$sqlbh);$sbg=0;
				while($rowbh=mysqli_fetch_array($sql1bh)){
					$sbg=$rowbh['SBG'];
				}
				echo "<li>";
					echo "<a  href='/Nhap/Nhapbhyt/baohiemxabg.php?id=1>".$sbg."'>							
						<span style='color:black;' class='title'>Danh sách mua bảo hiểm y tế</span>
					</a>";												
				echo "</li>";
			}			
			if ($madv[3]=="Huyện")				
			{				
				$sqlbh="select COUNT(idbh) as SBG from baohiem where huyen='".$madv[0]."'";
				$sql1bh=mysqli_query($con,$sqlbh);$sbg=0;
				while($rowbh=mysqli_fetch_array($sql1bh)){
					$sbg=$rowbh['SBG'];
				}
				echo "<li>";
					echo "<a  href='/Nhap/Nhapbhyt/baohiemhuyenbg.php?id=1>".$sbg.">>>>>'>							
						<span style='color:black;' class='title'>Danh sách mua bảo hiểm y tế</span>
					</a>";												
				echo "</li>";	
			}	
			if ($madv[3]=="Tỉnh")
			{
				$sqlbh="select COUNT(idbh) as SBG from baohiem";
				$sql1bh=mysqli_query($con,$sqlbh);$sbg=0;
				while($rowbh=mysqli_fetch_array($sql1bh)){
					$sbg=$rowbh['SBG'];
				}
				echo "<li>";
					echo "<a  href='/Nhap/Nhapbhyt/baohiemtinhbg.php?id=1>".$sbg.">>>>>'>							
						<span style='color:black;' class='title'>Danh sách mua bảo hiểm y tế</span>
					</a>";												
				echo "</li>";
			}			
			?>
		</ul>
		</li>
		<li>
		<a  href="index.html">
			<i class="entypo-user-add"></i>
			<span class="title">Điều dưỡng</span>
		</a>
		<ul>
		<?php
		if ($madv[3]=="Xã")
		{	
			echo "<li>";
				echo "<a  href='/Nhap/Nhapdieuduong/dkdieuduong.php?id=1>0'>
					<span style='color:black;' class='title'>Lập danh sách đi điều dưỡng</span>
				</a>";
			echo "</li>";
			echo "<li>";
				echo "<a  href='/Nhap/Nhapdieuduong/dkdieuduongchitra.php?id=1>0'>							
					<span style='color:black;' class='title'>Danh sách hồ sơ điều dưỡng</span>
				</a>";												
			echo "</li>";
			echo "<li>";
			echo "<a  href='/Nhap/Nhapdieuduong/dkdieuduongtra.php?id=1>0'>
					<span style='color:black;' class='title'>Danh sách điều dưỡng trả lại</span>
				</a>";
			echo "</li>";
		}
		if ($madv[3]=="Huyện")
		{
			echo "<li>";
				echo "<a  href='/Nhap/Nhapdieuduong/dkdieuduonghuyen.php?id=1>0'>							
					<span style='color:black;' class='title'>Lập danh sách đi điều dưỡng</span>
				</a>";												
			echo "</li>";
			echo "<li>";
				echo "<a  href='/Nhap/Nhapdieuduong/dkdieuduonghuyenchitra.php?id=1>0'>							
					<span style='color:black;' class='title'>Danh sách hồ sơ điều dưỡng</span>
				</a>";												
			echo "</li>";
			echo "<li>";
			echo "<a  href='/Nhap/Nhapdieuduong/dkdieuduonghuyentra.php?id=1>0'>
					<span style='color:black;' class='title'>Danh sách điều dưỡng trả lại</span>
				</a>";
			echo "</li>";
		}	
		if ($madv[3]=="Tỉnh" && $madv[22]!="TT")
		{
			echo "<li>";
			echo "<a  href='/Nhap/Nhapdieuduong/dsdieuduongtinh.php?id=1>0'>
					<span style='color:black;' class='title'>Danh sách điều dưỡng</span>
				</a>";
			echo "</li>";
			echo "<li>";
				echo "<a  href='/Nhap/Nhapdieuduong/dkdieuduongtinh.php?id=1>0'>							
					<span style='color:black;' class='title'>Duyệt danh sách điều dưỡng</span>
				</a>";												
			echo "</li>";
			echo "<li>";
				echo "<a  href='/Nhap/Nhapdieuduong/dkdieuduongtinhchitra.php?id=1>0'>							
					<span style='color:black;' class='title'>Danh sách hồ sơ điều dưỡng</span>
				</a>";												
			echo "</li>";
		}
		if ($madv[22]=="TT")
		{
			echo "<li>";
			echo "<a  href='/Nhap/Nhapdieuduong/dsdieuduongtrungtam.php?id=1>0'>
					<span style='color:black;' class='title'>Danh sách điều dưỡng</span>
				</a>";
			echo "</li>";
		}
			
		?>	
		</ul>
		</li>
		<li>
		<a style="<?php
		if ($madv[22]=="TT")
			echo "Display: none";?> "  href="index.html">
			<i class="entypo-tools"></i>
			<span class="title">Phương tiện trợ giúp</span>
		</a>
		<ul>
		<?php
		if($madv[3]=="Xã")
		{
			//echo "<li>";
				//echo "<a  href='/Nhap/Nhapphuongtien/dkphuongtien.php'>
					//<span style='color:black;' class='title'>Lập danh sách trang cấp phương tiện</span>
				//</a>";
			//echo "</li>";
			//echo "<li>";
			//	echo "<a  href='/Nhap/Nhapphuongtien/chinhsuapt.php'>
			//		<span style='color:black;' class='title'>Danh sách trang cấp phương tiện</span>
			//	</a>";
			//echo "</li>";
			echo "<li>";
				echo "<a  href='/Nhap/Nhapphuongtien/chinhsuaptxaduyet.php'>							
					<span style='color:black;' class='title'>Danh sách duyệt trang cấp phương tiện</span>
				</a>";												
			echo "</li>";
		}
		if($madv[3]=="Huyện")
		{
			echo "<li>";
				echo "<a  href='/Nhap/Nhapphuongtien/dkphuongtienhuyen.php'>							
					<span style='color:black;' class='title'>Lập danh sách trang cấp phương tiện</span>
				</a>";												
			echo "</li>";	
			echo "<li>";
				echo "<a  href='/Nhap/Nhapphuongtien/chinhsuapthuyen.php'>							
					<span style='color:black;' class='title'>Danh sách trang cấp phương tiện</span>
				</a>";												
			echo "</li>";
			echo "<li>";
				echo "<a  href='/Nhap/Nhapphuongtien/chinhsuapthuyenduyet.php'>							
					<span style='color:black;' class='title'>Danh sách duyệt trang cấp phương tiện</span>
				</a>";												
			echo "</li>";
		}
		if($madv[3]=="Tỉnh")
		{
			echo "<li>";
				echo "<a  href='/Nhap/Nhapphuongtien/chinhsuapttinh.php?id=1>0'>							
					<span style='color:black;' class='title'>Duyệt danh sách đề nghị trang cấp phương tiện</span>
				</a>";												
			echo "</li>";
		}
		?>	
		</ul>
		</li>
		<li>
		<a style="<?php
		if ($madv[22]=="TT")
			echo "Display: none";?> " href="index.html">
			<i class="entypo-tools"></i>
			<span class="title">Quà tết và 27/7</span>
		</a>
		<ul>
		<?php
		if($madv[3]=="Xã")
		{
			echo "<li>";
				echo "<a  href='/Nhap/Nhapquatet27/dkquatet27xa.php?id=1>'>							
					<span style='color:black;' class='title'>Danh sách nhận quà tết, 27/7</span>
				</a>";												
			echo "</li>";
		}
		if($madv[3]=="Huyện")
		{
			echo "<li>";
				echo "<a  href='/Nhap/Nhapquatet27/dkquatet27.php?id=1>'>							
					<span style='color:black;' class='title'>Danh sách quà tết, 27/7</span>
				</a>";												
			echo "</li>";
			//echo "<li>";
				//echo "<a  href='/Nhap/Nhapquatet27/dkquatet27danggiaiquyet.php?id=1>'>							
					//<span style='color:black;' class='title'>Hồ sơ quà tết đang giải quyết</span>
				//</a>";												
			//echo "</li>";
			//echo "<li>";
				//echo "<a  href='/Nhap/Nhapquatet27/dkquatet27giaiquyet.php?id=1>'>							
					//<span style='color:black;' class='title'>Hồ sơ quà tết đã giải quyết</span>
				//</a>";												
			//echo "</li>";
		}
		if($madv[3]=="Tỉnh")
		{
			echo "<li>";
				echo "<a  href='/Nhap/Nhapquatet27/dkquatet27tinh.php?id=1>'>							
					<span style='color:black;' class='title'>Danh sách xin hưởng quà tết, 27/7</span>
				</a>";												
			echo "</li>";
			echo "<li>";
				echo "<a  href='/Nhap/Nhapquatet27/dkquatet27tinhduyet.php?id=1>'>							
					<span style='color:black;' class='title'>Danh sách hồ sơ duyệt quà tết, 27/7</span>
				</a>";												
			echo "</li>";
		}
		?>	
		</ul>
		</li>
	<li>
		<a		href="index.html"><i class="entypo-doc-text-inv"></i>
			<span class="title">Chi trả trợ cấp</span>
		</a>
		<ul>
			<li>
				<a  href='/Nhap/Hethong/dmtrocap.php?id=1'>
					<span  class='title'>Danh mục trợ cấp - phụ cấp</span>
				</a>
			</li>
			<li>
				<a  href='/Nhap/Nhapchitra/danhsachhoso.php?id=1'>
					<span  class='title'>Danh sách hồ sơ đối tượng hưởng</span>
				</a>
			</li>
			<li>
				<a  href='/Nhap/Nhapchitra/chitrahangthang.php?id=1'>
					<span  class='title'>Danh sách hồ sơ chi trả hàng tháng</span>
				</a>
			</li>
			<li>
				<a  href='/Nhap/Nhapchitra/chitramotlan.php?id=1'>
					<span  class='title'>Danh sách hồ sơ chi trả một lần</span>
				</a>
			</li>
			<li>
				<a  href='/Nhap/Nhapchitra/chitradotxuat.php?id=1'>
					<span  class='title'>Danh sách hồ sơ chi trả đột xuất</span>
				</a>
			</li>
			<li>
				<a  href='/Nhap/Nhapchitra/index.php'>
					<span  class='title'>Báo cáo chi trả</span>
				</a>
			</li>
		</ul>
	</li>
		<li>
		<a style="<?php
		if ($madv[22]=="TT")
			echo "Display: none";?> " href="index.html">
			<i class="entypo-doc-text-inv"></i>
			<span class="title">Báo cáo thông kê</span>
		</a>
		<ul>
			<?php
			if ($madv[3]=="Xã")
			{
				echo "<li>";
				echo "<a  href='/Thoaikx/ThoaiHosonccxa.php'>
					<span style='color:black;' class='title'>Danh sách hồ sơ người có công</span>
				</a>";												
				echo "</li>";
				//echo "<li>";
					//echo "<a  href='/Thoaikx/ThoaiDsDTDDxa.php'>	
									
						//<span style='color:black;' class='title'>Lập danh sách đối tượng điều dưỡng</span>
					//</a>";												
				//echo "</li>";
				echo "<li>";
					echo "<a  href='/Thoaikx/ThoaiDsNCCDDxa.php'>	
														
						<span style='color:black;' class='title'>Danh sách đối tượng được điều dưỡng</span>
					</a>";												
				echo "</li>";
				//echo "<li>";
					//echo "<a  href='/Thoaikx/ThoaiDsCSTD05xa.php'>	
												
						//<span style='color:black;' class='title'>Danh sách cấp sổ theo dõi phương tiện</span>
					//</a>";												
				//echo "</li>";
				//echo "<li>";
					//echo "<a  href='/Thoaikx/ThoaiSoQLCPT06xa.php'>	
									
						//<span style='color:black;' class='title'>Sổ quản lý phương tiện, công cụ</span>
					//</a>";												
				//echo "</li>";
				echo "<li>";
					echo "<a  href='/Thoaikx/ThoaiDsNCCCPT07bxa.php'>	
												
						<span style='color:black;' class='title'>Danh sách NCC và thân nhân được trang cấp</span>
					</a>";												
				echo "</li>";
				echo "<li>";
					echo "<a  href='/Thoaikx/ThoaiDsthamgiabhyt.php'>	
								
						<span style='color:black;' class='title'>Danh sách tham gia bảo hiểm y tế</span>
					</a>";												
				echo "</li>";
				//echo "<li>";
					//echo "<a  href='/Thoaikx/Thoaitheodoitraoqdxa.php'>											
						//<span style='color:black;' class='title'>Danh sách theo dõi trao quyết định</span>
					//</a>";												
				//echo "</li>";
				//echo "<li>";
					//echo "<a  href='/Thoaikx/Thoaitanggiamxa.php'>											
						//<span style='color:black;' class='title'>Báo cáo tình hình tăng, giảm đối tượng</span>
					//</a>";												
				//echo "</li>";
				//echo "<li>";
					//echo "<a  href='/Thoaikx/Thoaibchosocdcdxa.php'>											
						//<span style='color:black;' class='title'>Báo cáo hồ sơ chuyển đi, chuyển đến</span>
					//</a>";												
				//echo "</li>";
				echo "<li>";
					echo "<a  href='/Thoaikx/Thoaiquatetxa.php'>											
						<span style='color:black;' class='title'>Báo cáo tình hình quà tết, 27/7</span>
					</a>";												
				echo "</li>";
			}
			else if ($madv[3]=="Huyện")
			{
				echo "<li>";
				echo "<a  href='/Thoaikx/ThoaiHosoncchuyen.php'>
					<span style='color:black;' class='title'>Danh sách hồ sơ người có công</span>
				</a>";												
				echo "</li>";
				//echo "<li>";
				//echo "<a  href='/Thoaikx/ThoaiDsDTDDhuyen.php'>	
											
					//<span style='color:black;' class='title'>Lập danh sách đối tượng điều dưỡng</span>
				//</a>";												
				echo "</li>";
				echo "<li>";
				echo "<a  href='/Thoaikx/ThoaiDsNCCDDhuyen.php'>	
									
					<span style='color:black;' class='title'>Danh sách đối tượng được điều dưỡng</span>
				</a>";												
				echo "</li>";
				//echo "<li>";
					//echo "<a  href='/Thoaikx/ThoaiDsCSTD05huyen.php'>	
												
						//<span style='color:black;' class='title'>Danh sách cấp sổ theo dõi phương tiện</span>
					//</a>";												
				//echo "</li>";
				//echo "<li>";
					//echo "<a  href='/Thoaikx/ThoaiSoQLCPT06huyen.php'>	
													
						//<span style='color:black;' class='title'>Sổ quản lý phương tiện, công cụ</span>
					//</a>";												
				//echo "</li>";
				echo "<li>";
					echo "<a  href='/Thoaikx/ThoaiDsNCCCPT07bhuyen.php'>	
											
						<span style='color:black;' class='title'>Danh sách NCC và thân nhân được trang cấp</span>
					</a>";												
				echo "</li>";
				echo "<li>";
					echo "<a  href='/Thoaikx/ThoaiDsthamgiabhythuyen.php'>	
										
						<span style='color:black;' class='title'>Danh sách tham gia bảo hiểm y tế</span>
					</a>";												
				echo "</li>";
				//echo "<li>";
					//echo "<a  href='/Thoaikx/Thoaitheodoitraoqdhuyen.php'>											
						//<span style='color:black;' class='title'>Danh sách theo dõi trao quyết định</span>
					//</a>";												
				//echo "</li>";
				//echo "<li>";
				//	echo "<a  href='/Thoaikx/Thoaitanggiamhuyen.php'><span style='color:black;' class='title'>Báo cáo tình hình tăng, giảm đối tượng</span></a>";
				//echo "</li>";
				echo "<li>";
					echo "<a  href='/Thoaikx/Thoaibchosocdcdhuyen.php'>											
						<span style='color:black;' class='title'>Báo cáo hồ sơ chuyển đi, chuyển đến</span>
					</a>";												
				echo "</li>";
				echo "<li>";
					echo "<a  href='/Thoaikx/Thoaiquatethuyen.php'>											
						<span style='color:black;' class='title'>Báo cáo tình hình quà tết, 27/7</span>
					</a>";												
				echo "</li>";
			}
			else
			{
				echo "<li>";
				echo "<a  href='/Thoaikx/ThoaiHosoncc.php'>
					<span style='color:black;' class='title'>Danh sách hồ sơ người có công</span>
				</a>";												
				echo "</li>";
				echo "<li>";
				echo "<a  href='/Reports/tonghopmo.php'>
					<span style='color:black;' class='title'>Danh sách tổng hợp mộ liệt sỹ</span>
				</a>";												
				echo "</li>";
				//echo "<li>";
				//echo "<a  href='/Thoaikx/ThoaiDsDTDDtinh.php'><span style='color:black;' class='title'>Lập danh sách đối tượng điều dưỡng</span></a>";
				//echo "</li>";
				echo "<li>";
				echo "<a  href='/Thoaikx/ThoaiDsNCCDDtinh.php'>	
												
					<span style='color:black;' class='title'>Danh sách đối tượng được điều dưỡng</span>
				</a>";												
				echo "</li>";
				echo "<li>";
					echo "<a  href='/Thoaikx/ThoaiDsCSTD05tinh.php'>	
											
						<span style='color:black;' class='title'>Danh sách cấp sổ theo dõi phương tiện</span>
					</a>";												
				echo "</li>";
				echo "<li>";
					echo "<a  href='/Thoaikx/ThoaiSoQLCPT06tinh.php'>	
													
						<span style='color:black;' class='title'>Sổ quản lý phương tiện, công cụ</span>
					</a>";												
				echo "</li>";
				echo "<li>";
					echo "<a  href='/Thoaikx/ThoaiDsNCCCPT07btinh.php'>	
							
						<span style='color:black;' class='title'>Danh sách NCC và thân nhân được trang cấp</span>
					</a>";												
				echo "</li>";
				echo "<li>";
					echo "<a  href='/Thoaikx/ThoaiDsthamgiabhyttinh.php'>	
											
						<span style='color:black;' class='title'>Danh sách tham gia bảo hiểm y tế</span>
					</a>";												
				echo "</li>";
				echo "<li>";
				//echo "<li>";
					//echo "<a  href='/Thoaikx/Thoaitheodoitraoqdtinh.php'>											
						//<span style='color:black;' class='title'>Danh sách theo dõi trao quyết định</span>
					//</a>";												
				//echo "</li>";
				echo "<li>";
					echo "<a  href='/Thoaikx/Thoaitanggiamtinh.php'>											
						<span style='color:black;' class='title'>Báo cáo tình hình tăng, giảm đối tượng</span>
					</a>";												
				echo "</li>";
				echo "<li>";
					echo "<a  href='/Thoaikx/Thoaibchosocdcdtinh.php'>											
						<span style='color:black;' class='title'>Báo cáo hồ sơ chuyển đi, chuyển đến</span>
					</a>";												
				echo "</li>";
				echo "<li>";
					echo "<a  href='/Thoaikx/Thoaiquatettinh.php'>											
						<span style='color:black;' class='title'>Báo cáo tình hình quà tết, 27/7</span>
					</a>";												
				echo "</li>";
				echo "<li>";
					echo "<a  href='/Thoaikx/ThoaiABC.php'>											
						<span style='color:black;' class='title'>Thông kê người có công</span>
					</a>";
				echo "</li>";
				echo "<li>";
				echo "<a  href='/Thoaikx/ThoaiQDPBKP.php'>
						<span style='color:black;' class='title'>Quyết định phân bổ kinh phí</span>
					</a>";
				echo "</li>";
				echo "<li>";
				echo "<a  href='/Thoaikx/ThoaiQDDDTN.php'>
						<span style='color:black;' class='title'>Quyết định điều dưỡng tại nhà</span>
					</a>";
				echo "</li>";
				echo "<li>";
				echo "<a  href='/Thoaikx/ThoaiQDDDTT.php'>
						<span style='color:black;' class='title'>Quyết định điều dưỡng tập trung</span>
					</a>";
				echo "</li>";
				echo "<li>";
				echo "<a  href='/Thoaikx/ThoaiQDDDThTh.php'>
						<span style='color:black;' class='title'>Quyết định điều dưỡng thay thế</span>
					</a>";
				echo "</li>";

				echo "<li>";
				echo "<a  href='/Thoaikx/ThoaiBcTKGiayTo.php'>
						<span style='color:black;' class='title'>Thống kê giấy tờ</span>
					</a>";
				echo "</li>";
			}
			?>
		</ul>
		</li>
		<li>
		<a style=" display: none " href="index.html">
			<i class="entypo-info-circled"></i>
			<span class="title">Hồ sơ thủ tục xin hưởng trợ cấp</span>
		</a>
		<ul>
		<?php
		if ($madv[3]=="Tỉnh")	
		{	
			echo "<li>";
				echo "<a href='/Nhap/Nhapthutuchc/danhsachthutucduyettinh.php?id=1'>							
						<span style='color:black;' class='title'>Duyệt hồ sơ xin hưởng trợ cấp</span>
					</a>";
			echo "</li>";
			echo "<li>";
				echo "<a href='/Nhap/Nhapthutuchc/danhsachthutucduyettinhxem.php?id=1'>							
						<span style='color:black;' class='title'>Hồ sơ đã giải quyết</span>
					</a>";
			echo "</li>";
		}
		else if ($madv[3]=="Huyện")
		{
			echo "<li>";
				echo "<a href='/Nhap/Nhapthutuchc/thutucnccxhtchuyen.php'>							
						<span style='color:black;' class='title'>Hồ sơ người có công xin hưởng trợ cấp</span>
					</a>";
			echo "</li>";
			echo "<li>";
				echo "<a href='/Nhap/Nhapthutuchc/danhsachtnhuyen.php'>							
						<span style='color:black;' class='title'>Hồ sơ thân nhân người có công xin hưởng trợ cấp</span>
					</a>";
			echo "</li>";
			echo "<li>";
				echo "<a href='/Nhap/Nhapthutuchc/danhsachthutuchuyen.php?id=1'>							
						<span style='color:black;' class='title'>Theo dõi hồ sơ xin hưởng trợ cấp</span>
					</a>";
			echo "</li>";
			echo "<li>";
				echo "<a href='/Nhap/Nhapthutuchc/danhsachthutucchitrahuyen.php?id=1'>							
						<span style='color:black;' class='title'>Chi trả hồ sơ xin hưởng trợ cấp</span>
					</a>";
			echo "</li>";
		}
		else
		{
			echo "<li>";
				echo "<a href='/Nhap/Nhapthutuchc/thutucnccxhtc.php'>							
						<span style='color:black;' class='title'>Hồ sơ người có công xin hưởng trợ cấp</span>
					</a>";
			echo "</li>";
			echo "<li>";
				echo "<a href='/Nhap/Nhapthutuchc/danhsachtnxa.php'>							
						<span style='color:black;' class='title'>Hồ sơ thân nhân người có công xin hưởng trợ cấp</span>
					</a>";
			echo "</li>";
			echo "<li>";
				echo "<a href='/Nhap/Nhapthutuchc/danhsachthutuc.php?id=1'>							
						<span style='color:black;' class='title'>Theo dõi hồ sơ xin hưởng trợ cấp</span>
					</a>";
			echo "</li>";
			echo "<li>";
				echo "<a href='/Nhap/Nhapthutuchc/danhsachthutucchitra.php?id=1'>							
						<span style='color:black;' class='title'>Chi trả hồ sơ xin hưởng trợ cấp</span>
					</a>";
			echo "</li>";
		}
		?>	
		</ul>
		</li>
		<li>
		<a  href="index.html">
			<i class="entypo-network"></i>
			<span class="title">Hệ thống</span>
		</a>
		<ul>
			<li style="<?php
			if ($madv[22]=="TT")
				echo "Display: none";?>">
				<a  href='/Nhap/Hethong/dmdonvi.php?id=0'>
					<span style='color:black;' class='title'>Danh sách đơn vị</span>
				</a>
			</li>
			<li style="<?php
			if ($madv[22]=="TT")
				echo "Display: none";?>">
				<a  href='/Nhap/Nhapmolietsy/nghiatrang.php?id=1>0'>							
					<span style='color:black;' class='title'>Danh sách nghĩa trang</span>
				</a>												
			</li>
			<li style="<?php
			if ($madv[22]=="TT")
				echo "Display: none";?>">
				<a  href='/Nhap/Nhapbhyt/dmnkb.php?id=1>0'>							
					<span style='color:black;' class='title'>Danh sách nơi khám chữa bệnh</span>
				</a>												
			</li>
			<li style="<?php
			if ($madv[22]=="TT")
				echo "Display: none";?>">
				<a  href='/Nhap/Nhapphuongtien/dmphuongtien.php?id=1>0'>							
					<span style='color:black;' class='title'>Danh sách Dụng cụ, phương tiện</span>
				</a>												
			</li>
			<li style="<?php
			if ($madv[22]=="TT")
				echo "Display: none";?>">
				<a  href='/Nhap/Hethong/dmtrocap.php?id=1'>							
					<span style='color:black;' class='title'>Danh mục các khoản trợ cấp</span>
				</a>												
			</li>
			<li style="<?php
			if ($madv[22]=="TT")
				echo "Display: none";?>">
				<a  href='/Nhap/Hethong/hethongvanban.php'>							
					<span style='color:black;' class='title'>Hệ thống văn bản pháp luật</span>
				</a>												
			</li>
			<li>
				<a  href='/Nhap/Hethong/thaydoithongtin.php'>							
					<span style='color:black;' class='title'>Thay đổi thông tin tài khoản</span>
				</a>												
			</li>
			<li style="<?php
			if ($madv[22]=="TT")
				echo "Display: none";?>">
				<a  href='/danhsach.php'>							
					<span style='color:black;' class='title'>Danh Sách Hồ Sơ giải quyết chế độ</span>
				</a>												
			</li>
			<li style="<?php
			if ($madv[22]=="TT")
				echo "Display: none";?>">
				<a  href='/Nhap/Hethong/update.php'>
					<span style='color:black;' class='title'>Update</span>
				</a>
			</li>
		</ul>
		</li>
		<li>
		<a  href="index.html">
			<i class="entypo-info-circled"></i>
			<span class="title">Trợ giúp</span>
		</a>
		<ul>
		<?php
		if ($madv[3]=="Tỉnh" && $madv[22]!="TT")
		{	
			echo "<li>";
				echo "<a style='color:black;' href='javascript:void(0);' onclick='javascipt:window.open(\"/data/upload/HdLife_NCC2016_TINH.pdf\");' title = 'Xem chi tiết hướng dẫn' class='popup'>Xem chi tiết hướng dẫn phần mềm</a>";												
			echo "</li>";
			echo "<li>";
				echo "<a href='/Tienich/ThoaiXuatExcel.php'>
						<span style='color:black;' class='title'>Xuất dữ liệu ra file excel</span>
					</a>";
			echo "</li>";
			echo "<li>";
			echo "<a href='/Tienich/importExcel.php'>
						<span style='color:black;' class='title'>Nhận dữ liệu từ file excel</span>
					</a>";
			echo "</li>";
		}
		else if ($madv[3]=="Huyện")
		{
			echo "<li>";
				echo "<a style='color:black;' href='javascript:void(0);' onclick='javascipt:window.open(\"/data/upload/HdLife_NCC2016_HUYEN.pdf\");' title = 'Xem chi tiết hướng dẫn' class='popup'>Xem chi tiết hướng dẫn phần mềm</a>";												
			echo "</li>";
		}
		else
		{
			echo "<li>";
				echo "<a style='color:black;' href='javascript:void(0);' onclick='javascipt:window.open(\"/data/upload/HdLife_NCC2016_XA.pdf\");' title = 'Xem chi tiết hướng dẫn' class='popup'>Xem chi tiết hướng dẫn phần mềm</a>";												
			echo "</li>";
		}
		if($madv[4] == 'sldcuocsong')
		{
			echo "<li>";
			echo "<a href='/Tienich/ThoaiXuatExcelDSDV.php'>
						<span style='color:black;' class='title'>Xuất danh sách đơn vị ra file excel</span>
					</a>";
			echo "</li>";
		}
		?>	
		</ul>
		</li>	
</ul>