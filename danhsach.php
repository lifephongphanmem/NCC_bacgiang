<?php include("Main/header.php"); 
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
<?php include("Main/header2.php"); ?>
<!-- Nội dung danh sách  -->
	<p style="color:#2a566b; text-align:center;font-size:20px;"><b>Danh Sách Các Mẫu Hồ Sơ</b></p>
	<div class="col-md-4">
			
				<div class="panel panel-dark" data-collapsed="1">
					
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Anh Hùng</div>
						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body">
						
						<a href="#"onclick="AH1()" ><p style="text-align:center;">Mẫu AH1</p></a>
						<script>
						function AH1() {
							window.open("/MAUBAOCAO/MAH1.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="AH2()" ><p style="text-align:center;">Mẫu AH2</p></a>
						<script>
						function AH2() {
							window.open("/MAUBAOCAO/MAH2.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="AH3()" ><p style="text-align:center;">Mẫu AH3</p></a>
						<script>
						function AH3() {
							window.open("/MAUBAOCAO/MAH3.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="AH4()" ><p style="text-align:center;">Mẫu AH4</p></a>
						<script>
						function AH4() {
							window.open("/MAUBAOCAO/MAH4.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						
					</div>
					
				</div>
				
	</div>
	<div class="col-md-4">
			
				<div class="panel panel-dark" data-collapsed="1">
					
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Bệnh Binh</div>
						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body">
						
						<a href="#"onclick="BB1()" ><p style="text-align:center;">Mẫu BB1</p></a>
						<script>
						function BB1() {
							window.open("/MAUBAOCAO/MBB1.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="BB2()" ><p style="text-align:center;">Mẫu BB2</p></a>
						<script>
						function BB2() {
							window.open("/MAUBAOCAO/MBB2.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="BB3()" ><p style="text-align:center;">Mẫu BB3</p></a>
						<script>
						function BB3() {
							window.open("/MAUBAOCAO/MBB3.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="BB4()" ><p style="text-align:center;">Mẫu BB4</p></a>
						<script>
						function BB4() {
							window.open("/MAUBAOCAO/MBB4.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						
						
					</div>
					
				</div>
				
	</div>
	<div class="col-md-4">
			
				<div class="panel panel-dark" data-collapsed="1">
					
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Bảo Hiểm Y Tế</div>
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body">
						
						<a href="#"onclick="BH1()" ><p style="text-align:center;">Mẫu BH1</p></a>
						<script>
						function BH1() {
							window.open("/MAUBAOCAO/MBH1.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="BH2()" ><p style="text-align:center;">Mẫu BH2</p></a>
						<script>
						function BH2() {
							window.open("/MAUBAOCAO/MBH2.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
							
					</div>
					
				</div>
				
	</div>
	<div class="col-md-4">
			
				<div class="panel panel-dark" data-collapsed="1">
					
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Bà Mẹ Việt Nam Anh Hùng</div>
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body">
						
						<a href="#"onclick="BM1()" ><p style="text-align:center;">Mẫu BM1</p></a>
						<script>
						function BM1() {
							window.open("/MAUBAOCAO/MBM1.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="BM2()" ><p style="text-align:center;">Mẫu BM2</p></a>
						<script>
						function BM2() {
							window.open("/MAUBAOCAO/MBM2.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="BM3()" ><p style="text-align:center;">Mẫu BM3</p></a>
						<script>
						function BM3() {
							window.open("/MAUBAOCAO/MBM3.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="BM4()" ><p style="text-align:center;">Mẫu BM4</p></a>
						<script>
						function BM4() {
							window.open("/MAUBAOCAO/MBM4.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
							
					</div>
					
				</div>
				
	</div>
	<div class="col-md-4">
			
				<div class="panel panel-dark" data-collapsed="1">
					
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Mẫu Đơn Đề Nghị</div>
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body">
						
						<a href="#"onclick="C()" ><p style="text-align:center;">Mẫu C</p></a>
						<script>
						function C() {
							window.open("/MAUBAOCAO/MC.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
							
					</div>
					
				</div>
				
	</div>
	<div class="col-md-4">
			
				<div class="panel panel-dark" data-collapsed="1">
					
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Người Có Công Giúp Đỡ CM</div>
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body">
						
						<a href="#"onclick="CC1()" ><p style="text-align:center;">Mẫu CC1</p></a>
						<script>
						function CC1() {
							window.open("/MAUBAOCAO/MCC1.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="CC2()" ><p style="text-align:center;">Mẫu CC2</p></a>
						<script>
						function CC2() {
							window.open("/MAUBAOCAO/MCC2.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="CC3()" ><p style="text-align:center;">Mẫu CC3</p></a>
						<script>
						function CC3() {
							window.open("/MAUBAOCAO/MCC3.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
							
					</div>
					
				</div>
				
	</div>
	<div class="col-md-4">
			
				<div class="panel panel-dark" data-collapsed="1">
					
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Người Nhiễm Chất Độc Hóa Học</div>
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body">
						
						<a href="#"onclick="HH1()" ><p style="text-align:center;">Mẫu HH1</p></a>
						<script>
						function HH1() {
							window.open("/MAUBAOCAO/MHH1.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="HH2()" ><p style="text-align:center;">Mẫu HH2</p></a>
						<script>
						function HH2() {
							window.open("/MAUBAOCAO/MHH2.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="HH3()" ><p style="text-align:center;">Mẫu HH3</p></a>
						<script>
						function HH3() {
							window.open("/MAUBAOCAO/MHH3.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="HH4()" ><p style="text-align:center;">Mẫu HH4</p></a>
						<script>
						function HH4() {
							window.open("/MAUBAOCAO/MHH4.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="HH5()" ><p style="text-align:center;">Mẫu HH5</p></a>
						<script>
						function HH5() {
							window.open("/MAUBAOCAO/MHH5.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="HH6()" ><p style="text-align:center;">Mẫu HH6</p></a>
						<script>
						function HH6() {
							window.open("/MAUBAOCAO/MHH6.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="HH7()" ><p style="text-align:center;">Mẫu HH7</p></a>
						<script>
						function HH7() {
							window.open("/MAUBAOCAO/MHH7.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
							
					</div>
					
				</div>
				
	</div>
	<div class="col-md-4">
			
				<div class="panel panel-dark" data-collapsed="1">
					
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Người Hoạt Động Kháng Chiến</div>
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body">
						
						<a href="#"onclick="KC1()" ><p style="text-align:center;">Mẫu KC1</p></a>
						<script>
						function KC1() {
							window.open("/MAUBAOCAO/MKC1.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="KC2()" ><p style="text-align:center;"> Mẫu KC2</p></a>
						<script>
						function KC2() {
							window.open("/MAUBAOCAO/MKC2.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
							
					</div>
					
				</div>
				
	</div>
	<div class="col-md-4">
			
				<div class="panel panel-dark" data-collapsed="1">
					
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Liệt Sỹ</div>
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body">
						
						<a href="#"onclick="LS1()" ><p style="text-align:center;">Mẫu LS1</p></a>
						<script>
						function LS1() {
							window.open("/MAUBAOCAO/MLS1.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="LS2()" ><p style="text-align:center;">Mẫu LS2</p></a>
						<script>
						function LS2() {
							window.open("/MAUBAOCAO/MLS2.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="LS3()" ><p style="text-align:center;">Mẫu LS3</p></a>
						<script>
						function LS3() {
							window.open("/MAUBAOCAO/MLS3.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="LS4()" ><p style="text-align:center;">Mẫu LS4</p></a>
						<script>
						function LS4() {
							window.open("/MAUBAOCAO/MLS4.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="LS5()" ><p style="text-align:center;">Mẫu LS5</p></a>
						<script>
						function LS5() {
							window.open("/MAUBAOCAO/MLS5.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="LS6()" ><p style="text-align:center;">Mẫu LS6</p></a>
						<script>
						function LS6() {
							window.open("/MAUBAOCAO/MLS6.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="LS7()" ><p style="text-align:center;">Mẫu LS7</p></a>
						<script>
						function LS7() {
							window.open("/MAUBAOCAO/MLS7.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="LS8()" ><p style="text-align:center;">Mẫu LS8</p></a>
						<script>
						function LS8() {
							window.open("/MAUBAOCAO/MLS8.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
							
					</div>
					
				</div>
				
	</div>
	<div class="col-md-4">
			
				<div class="panel panel-dark" data-collapsed="1">
					
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Hoạt Động CM trước 01/01/1945</div>
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body">
						
						<a href="#"onclick="LT1()" ><p style="text-align:center;">Mẫu LT1</p></a>
						<script>
						function LT1() {
							window.open("/MAUBAOCAO/MLT1.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="LT2()" ><p style="text-align:center;">Mẫu LT2</p></a>
						<script>
						function LT2() {
							window.open("/MAUBAOCAO/MLT2.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="LT3()" ><p style="text-align:center;">Mẫu LT3</p></a>
						<script>
						function LT3() {
							window.open("/MAUBAOCAO/MLT3.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="LT4()" ><p style="text-align:center;">Mẫu LT4</p></a>
						<script>
						function LT4() {
							window.open("/MAUBAOCAO/MLT4.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="LT5()" ><p style="text-align:center;">Mẫu LT5</p></a>
						<script>
						function LT5() {
							window.open("/MAUBAOCAO/MLT5.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
							
					</div>
					
				</div>
				
	</div>
	<div class="col-md-4">
			
				<div class="panel panel-dark" data-collapsed="1">
					
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Thương Binh</div>
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body">
						
						<a href="#"onclick="TB1()" ><p style="text-align:center;">Mẫu TB1</p></a>
						<script>
						function TB1() {
							window.open("/MAUBAOCAO/MTB1.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="TB2()" ><p style="text-align:center;">Mẫu TB2</p></a>
						<script>
						function TB2() {
							window.open("/MAUBAOCAO/MTB2.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="TB3()" ><p style="text-align:center;">Mẫu TB3</p></a>
						<script>
						function TB3() {
							window.open("/MAUBAOCAO/MTB3.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="TB4()" ><p style="text-align:center;">Mẫu TB4</p></a>
						<script>
						function TB4() {
							window.open("/MAUBAOCAO/MTB4.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="TB5()" ><p style="text-align:center;">Mẫu TB5</p></a>
						<script>
						function TB5() {
							window.open("/MAUBAOCAO/MTB5.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="TB6()" ><p style="text-align:center;">Mẫu TB6</p></a>
						<script>
						function TB6() {
							window.open("/MAUBAOCAO/MTB6.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
							
					</div>
					
				</div>
				
	</div>
	<div class="col-md-4">
			
				<div class="panel panel-dark" data-collapsed="1">
					
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Tù Đày</div>
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body">
						
						<a href="#"onclick="TĐ1()" ><p style="text-align:center;">Mẫu TĐ1</p></a>
						<script>
						function TĐ1() {
							window.open("/MAUBAOCAO/MTD1.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="TĐ2()" ><p style="text-align:center;">Mẫu TĐ2</p></a>
						<script>
						function TĐ2() {
							window.open("/MAUBAOCAO/MTD2.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="TĐ3()" ><p style="text-align:center;">Mẫu TĐ3</p></a>
						<script>
						function TĐ3() {
							window.open("/MAUBAOCAO/MTD3.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="TĐ4()" ><p style="text-align:center;">Mẫu TĐ4</p></a>
						<script>
						function TĐ4() {
							window.open("/MAUBAOCAO/MTD4.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="TĐ5()" ><p style="text-align:center;">Mẫu TĐ5</p></a>
						<script>
						function TĐ5() {
							window.open("/MAUBAOCAO/MTD5.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
							
					</div>
					
				</div>
				
	</div>
	<div class="col-md-4">
			
				<div class="panel panel-dark" data-collapsed="1">
					
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">HĐCM từ 01/01/1945-08/1945</div>
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body">
						
						<a href="#"onclick="TKN1()" ><p style="text-align:center;">Mẫu TKN1</p></a>
						<script>
						function TKN1() {
							window.open("/MAUBAOCAO/MTKN1.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="TKN2()" ><p style="text-align:center;">Mẫu TKN2</p></a>
						<script>
						function TKN2() {
							window.open("/MAUBAOCAO/MTKN2.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="TKN3()" ><p style="text-align:center;">Mẫu TKN3</p></a>
						<script>
						function TKN3() {
							window.open("/MAUBAOCAO/MTKN3.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="TKN4()" ><p style="text-align:center;">Mẫu TKN4</p></a>
						<script>
						function TKN4() {
							window.open("/MAUBAOCAO/MTKN4.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="TKN5()" ><p style="text-align:center;">Mẫu TKN5</p></a>
						<script>
						function TKN5() {
							window.open("/MAUBAOCAO/MTKN5.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
							
					</div>
					
				</div>
				
	</div>
	<div class="col-md-4">
			
				<div class="panel panel-dark" data-collapsed="1">
					
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Tổ Quốc Ghi Công</div>
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body">
						
						<a href="#"onclick="TQ1()" ><p style="text-align:center;">Mẫu TQ1</p></a>
						<script>
						function TQ1() {
							window.open("/MAUBAOCAO/MTQ1.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="TQ2()" ><p style="text-align:center;">Mẫu TQ2</p></a>
						<script>
						function TQ2() {
							window.open("/MAUBAOCAO/MTQ2.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
							
					</div>
					
				</div>
				
	</div>
	<div class="col-md-4">
			
				<div class="panel panel-dark" data-collapsed="1">
					
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">NCC Cách Mạng Từ Trần</div>
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body">
						
						<a href="#"onclick="TT1()" ><p style="text-align:center;">Mẫu TT1</p></a>
						<script>
						function TT1() {
							window.open("/MAUBAOCAO/MTT1.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
						<a href="#"onclick="TT2()" ><p style="text-align:center;">Mẫu TT2</p></a>
						<script>
						function TT2() {
							window.open("/MAUBAOCAO/MTT2.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
							
					</div>
					
				</div>
				
	</div>
	<div class="col-md-4">
			
				<div class="panel panel-dark" data-collapsed="1">
					
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Biên Bản Ủy Quyền</div>
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<!-- panel body -->
					<div class="panel-body">
						
						<a href="#"onclick="UQ()" ><p style="text-align:center;"> Mẫu UQ</p></a>
						<script>
						function UQ() {
							window.open("/MAUBAOCAO/MUQ.html", "_blank", 
							"toolbar=yes,scrollbars=yes,resizable=yes,top=0,left=300,width=760,height=650");
						}
						</script>
							
					</div>
					
				</div>
				
	</div>
		
	
				
 <!-- End Nội dung danh sách -->          
<?php include("Main/general.php"); ?>
<?php include("Main/footer.php"); ?>
