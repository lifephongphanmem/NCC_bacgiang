<ul id="main-menu" class="main-menu">
	<!-- add class "multiple-expanded" to allow multiple submenus to open -->
	<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
	<li class="auto-inherit-active-class">
		<a style="border-top: 1px solid white;"  href="index.html">
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
				<a  href='/Nhap/Nhaphosohh/nhaphosoncc.php?id=1>0'>							
					<span  class='title'>Hồ sơ nhiễm chất độc hóa học</span>
				</a>												
			</li>
			<li>
				<a  href='/Nhap/Nhaphosokc/nhaphosoncc.php?id=1>0'>							
					<span  class='title'>Hồ sơ người hoạt động kháng chiến</span>
				</a>											
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
				<a  href='/Nhap/Nhaphosotd/nhaphosoncc.php?id=1>0'>							
					<span  class='title'>Hồ sơ bị bắt, tù đày</span>
				</a>											
			</li>
			<li>
				<a  href='/Nhap/Nhaphosocc/nhaphosoncc.php?id=1>0'>							
					<span  class='title'>Hồ sơ người có công với cách mạng</span>
				</a>											
			</li>
		</ul>
		</li>	
		<li>
		<a  href="index.html">
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
			}
			?>
		</ul>	
		</li>
		<li>
		<a  href="index.html">
			<i class="entypo-plus-squared"></i>
			<span class="title">Bảo hiểm y tế</span>
		</a>
		<ul>
			<?php
			if ($madv[3]=="Xã")
			{
				echo "<li>";
					echo "<a  href='/Nhap/Nhapbhyt/dkbhyt.php?id=1>0'>							
						<span style='color:black;' class='title'>Danh sách đăng ký bhyt</span>
					</a>";												
				echo "</li>";	
				echo "<li>";
					echo "<a  href='/Nhap/Nhapbhyt/dkbhyttheodoi.php?id=1>0'>							
						<span style='color:black;' class='title'>Theo dõi tình trạng bảo hiểm y tế</span>
					</a>";												
				echo "</li>";	
				echo "<li>";
					echo "<a  href='/Nhap/Nhapbhyt/dkbhytxacnhan.php?id=1>0'>							
						<span style='color:black;' class='title'>Cấp thẻ bảo hiểm y tế</span>
					</a>";												
				echo "</li>";
			}			
			if ($madv[3]=="Huyện")
			{
				echo "<li>";
					echo "<a  href='/Nhap/Nhapbhyt/dkbhythuyen.php?id=1>0'>							
						<span style='color:black;' class='title'>Danh sách đăng ký bhyt</span>
					</a>";												
				echo "</li>";
				echo "<li>";
					echo "<a  href='/Nhap/Nhapbhyt/dkbhyttheodoihuyen.php?id=1>0'>							
						<span style='color:black;' class='title'>Theo dõi tình trạng bảo hiểm y tế</span>
					</a>";												
				echo "</li>";
			}	
			if ($madv[3]=="Tỉnh")
			{
				echo "<li>";
					echo "<a  href='/Nhap/Nhapbhyt/dkbhyttinh.php?id=1>0'>							
						<span style='color:black;' class='title'>Danh sách đăng ký bhyt</span>
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
		}	
		if ($madv[3]=="Tỉnh")
		{
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
			
		?>	
		</ul>
		</li>
		<li>
		<a  href="index.html">
			<i class="entypo-tools"></i>
			<span class="title">Phương tiện trợ giúp</span>
		</a>
		<ul>
		<?php
		if($madv[3]=="Xã")
		{
			echo "<li>";
				echo "<a  href='/Nhap/Nhapphuongtien/dkphuongtien.php'>							
					<span style='color:black;' class='title'>Lập danh sách trang cấp phương tiện</span>
				</a>";												
			echo "</li>";	
			echo "<li>";
				echo "<a  href='/Nhap/Nhapphuongtien/chinhsuapt.php'>							
					<span style='color:black;' class='title'>Danh sách trang cấp phương tiện</span>
				</a>";												
			echo "</li>";
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
		<a  href="index.html">
			<i class="entypo-doc-text-inv"></i>
			<span class="title">Báo cáo thông kê</span>
		</a>
		<ul>
			<?php
			if ($madv[3]=="Xã")
			{
				echo "<li>";
					echo "<a  href='/Thoaikx/ThoaiDsDTDDxa.php'>	
									
						<span style='color:black;' class='title'>Lập danh sách đối tượng điều dưỡng</span>
					</a>";												
				echo "</li>";
				echo "<li>";
					echo "<a  href='/Thoaikx/ThoaiDsNCCDDxa.php'>	
														
						<span style='color:black;' class='title'>Danh sách đối tượng được điều dưỡng</span>
					</a>";												
				echo "</li>";
				echo "<li>";
					echo "<a  href='/Thoaikx/ThoaiDsCSTD05xa.php'>	
												
						<span style='color:black;' class='title'>Danh sách cấp sổ theo dõi phương tiện</span>
					</a>";												
				echo "</li>";
				echo "<li>";
					echo "<a  href='/Thoaikx/ThoaiSoQLCPT06xa.php'>	
									
						<span style='color:black;' class='title'>Sổ quản lý phương tiện, công cụ</span>
					</a>";												
				echo "</li>";
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
			}
			else if ($madv[3]=="Huyện")
			{
				echo "<li>";
				echo "<a  href='/Thoaikx/ThoaiDsDTDDhuyen.php'>	
											
					<span style='color:black;' class='title'>Lập danh sách đối tượng điều dưỡng</span>
				</a>";												
				echo "</li>";
				echo "<li>";
				echo "<a  href='/Thoaikx/ThoaiDsNCCDDhuyen.php'>	
									
					<span style='color:black;' class='title'>Danh sách đối tượng được điều dưỡng</span>
				</a>";												
				echo "</li>";
				echo "<li>";
					echo "<a  href='/Thoaikx/ThoaiDsCSTD05huyen.php'>	
												
						<span style='color:black;' class='title'>Danh sách cấp sổ theo dõi phương tiện</span>
					</a>";												
				echo "</li>";
				echo "<li>";
					echo "<a  href='/Thoaikx/ThoaiSoQLCPT06huyen.php'>	
													
						<span style='color:black;' class='title'>Sổ quản lý phương tiện, công cụ</span>
					</a>";												
				echo "</li>";
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
			}
			else
			{
				echo "<li>";
				echo "<a  href='/Thoaikx/ThoaiDsDTDDtinh.php'>	
												
					<span style='color:black;' class='title'>Lập danh sách đối tượng điều dưỡng</span>
				</a>";												
				echo "</li>";
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
			<li>
				<a  href='/Nhap/Nhapmolietsy/nghiatrang.php?id=1>0'>							
					<span style='color:black;' class='title'>Danh sách nghĩa trang</span>
				</a>												
			</li>
			<li>
				<a  href='/Nhap/Nhapbhyt/dmnkb.php?id=1>0'>							
					<span style='color:black;' class='title'>Danh sách nơi khám chữa bệnh</span>
				</a>												
			</li>
			<li>
				<a  href='/Nhap/Nhapphuongtien/dmphuongtien.php?id=1>0'>							
					<span style='color:black;' class='title'>Danh sách Dụng cụ, phương tiện</span>
				</a>												
			</li>
			<li>
				<a  href='/Nhap/Hethong/dmtrocap.php?id=1'>							
					<span style='color:black;' class='title'>Danh mục các khoản trợ cấp</span>
				</a>												
			</li>
			<li>
				<a  href='/Nhap/Hethong/hethongvanban.php'>							
					<span style='color:black;' class='title'>Hệ thống văn bản pháp luật</span>
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
			<li>
				<a style='color:black;' href="javascript:void(0);" onclick="javascipt:window.open('/data/upload/HdLife_NCC2016.pdf');" title = "Xem chi tiết hướng dẫn" class='popup'>Xem chi tiết hướng dẫn phần mềm</a>												
			</li>
		</ul>
		</li>	
</ul>