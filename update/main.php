<?php include("/Main/header.php"); 
//$capdonvi = $ma[8];
?>
 <style> 
/* ---------------- VD1 --------------*/
	.vd1_container {
		position: relative;
		margin: 10px auto;
		width: 100%;
		height: 150px;
		z-index: 1;
	}
	.face.back {
		display: none;
	}

	.vd1_container {
		-webkit-perspective: 1000px;
		-moz-perspective: 1000px;
		-o-perspective: 1000px;
		-ms-perspective: 1000px;
		perspective: 1000px;
	}
	.vd1_card {
		width: 100%;
		height: 100%;
		-webkit-transform-style: preserve-3d;
		-webkit-transition: all 0.3s linear;
		-moz-transform-style: preserve-3d;
		-moz-transition: all 0.3s linear;
		-o-transform-style: preserve-3d;
		-o-transition: all 0.3s linear;
		-ms-transform-style: preserve-3d;
		-ms-transition: all 0.3s linear;						
		transform-style: preserve-3d;
		transition: all 0.3s linear;		
	}
	.vd1_container:hover .vd1_card, .vd1_container.hover_effect .vd1_card {
		-webkit-transform: rotateY(180deg);
		-moz-transform: rotateY(180deg);
		-o-transform: rotateY(180deg);
		-ms-transform: rotateY(180deg);
		transform: rotateY(180deg);
		
		
	}
	.face {
		position: absolute;
		width: 100%;
		height: 100%;
		-webkit-backface-visibility: hidden;
		-moz-backface-visibility: hidden;
		-o-backface-visibility: hidden;
		-ms-backface-visibility: hidden;
		backface-visibility: hidden;								
	}
	.face.back {
		display: block;
		-webkit-transform: rotateY(180deg);
		-webkit-box-sizing: border-box;
		-moz-transform: rotateY(180deg);
		-moz-box-sizing: border-box;
		-o-transform: rotateY(180deg);
		-o-box-sizing: border-box;		
		-ms-transform: rotateY(180deg);
		-ms-box-sizing: border-box;
		transform: rotateY(180deg);
		box-sizing: border-box;				
		text-align: center;
		background-color: #aaa;
	}

	</style>
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/menu.php")?>
<?php include("/Main/header2.php"); ?>
<!-- Begin Giao diện UI trang chủ  -->
	
	<div class="row">
			<a>	
			<div class="col-sm-4 ">
				<div id="div1" class="vd1_container">
					<div class="vd1_card" class="shadow">
						<div class="front face">
							<img src="Images/1.png" style="width: 100%;height: 100%;"/>
						</div>
						<a href="/Nhap/Nhapmolietsy/molietsynt.php?id=1>0"><div class="back face center">
							<img src="Images/1a.png" style="width: 100%;height: 100%;"/>
						</div></a>
						</div>
				</div>
			</div>	
			</a>
			<a >	
			<div class="col-sm-4 ">
				<div id="div1" class="vd1_container">
					<div class="vd1_card" class="shadow">
						<div class="front face">
							<img src="Images/2.png" style="width: 100%;height: 100%;"/>
						</div>
						<a href="/Nhap/Nhapmolietsy/nghiatrang.php?id=1>0"><div class="back face center">
							<img src="Images/1a.png" style="width: 100%;height: 100%;"/>
						</div></a>
						</div>
				</div>
			</div>
			</a>
			<a>
			<div class="col-sm-4 ">		
				<div id="div1" class="vd1_container">
					<div class="vd1_card" class="shadow">
						<div class="front face">
							<img src="Images/3.png" style="width: 100%;height: 100%;"/>
						</div>
						<a href="/Nhap/Hethong/hethongvanban.php"><div class="back face center">
							<img src="Images/1a.png" style="width: 100%;height: 100%;"/>
						</div></a>
						</div>
				</div>	
			</div>	
			</a>
			<a>	
			<div class="col-sm-4 col-xs-6">
				<div id="div1" class="vd1_container">
					<div class="vd1_card" class="shadow">
						<div class="front face">
							<img src="Images/4.png" style="width: 100%;height: 100%;"/>
						</div>
						<a href="/Nhap/Nhapbhyt/dkbhyttinh.php?id=1>0"><div class="back face center">
							<img src="Images/1a.png" style="width: 100%;height: 100%;"/>
						</div></a>
						</div>
				</div>
			</div>	
			</a>
			<a >	
			<div class="col-sm-4 col-xs-6">
				<div id="div1" class="vd1_container">
					<div class="vd1_card" class="shadow">
						<div class="front face">
							<img src="Images/5.png" style="width: 100%;height: 100%;"/>
						</div>
						<a href="/Nhap/Nhapphuongtien/chinhsuapttinh.php?id=1>0"><div class="back face center">
							<img src="Images/1a.png" style="width: 100%;height: 100%;"/>
						</div></a>
						</div>
				</div>
			</div>
			</a>
			<a>
			<div class="col-sm-4 col-xs-6">		
				<div id="div1" class="vd1_container">
					<div class="vd1_card" class="shadow">
						<div class="front face">
							<img src="Images/6.png" style="width: 100%;height: 100%;"/>
						</div>
						<a href="/Nhap/Nhapdieuduong/dkdieuduong.php?id=1>0"><div class="back face center">
							<img src="Images/1a.png" style="width: 100%;height: 100%;"/>
						</div></a>
						</div>
				</div>	
			</div>	
			</a>		
		</div>
				
 <!-- End Giao diện UI trang chủ -->          
<?php include("/Main/general.php"); ?>
<?php include("/Main/footer.php"); ?>
