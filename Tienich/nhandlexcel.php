<?php include("$_SERVER[DOCUMENT_ROOT]/Main/header.php");
include("$_SERVER[DOCUMENT_ROOT]/Main/general.php"); ?>	
<meta charset='utf-8' />										
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/menu.php")?>
				
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/header2.php"); ?>
<!------- HEADER ---------->  
<script src="/assets/News/jquery.min.js"></script>
<script src="/dist/jquery.inputmask.bundle.min.js"></script>
<script>
$(document).ready(function(){
    $(":input").inputmask();
});
</script>
<?php
if(isset($_POST["sua"]))
{
	$mysongs = simplexml_load_file('D:/aa/DV.xml');
	foreach ($mysongs as $songinfo):		
		$sqlin="Insert into hethongdv(tendonvi,tencaptren,capql,tendn)";
		$sqlin=$sqlin." Values('$songinfo->donvi','$songinfo->captren','$songinfo->cap','$songinfo->tendn')";
		$kq=mysqli_query($con,$sqlin);		
	endforeach;
	/* $mysongs = simplexml_load_file('D:/aa/abb.xml');
	foreach ($mysongs as $sif):		
		$sqlin="Insert into hosobb Set hosobo='$sif->hosobo',hosotinh='$sif->hosotinh',hoten='$sif->hoten',bidanh='$sif->bidanh',";
		$sqlin=$sqlin."ngaysinh='$sif->ngaysinh',gioitinh='$sif->gioitinh',quequan='$sif->quequan',truquan='$sif->truquan',";
		$sqlin=$sqlin."ngaynhapngu='$sif->ngaynhapngu',donvikhinghichedo='$sif->donvikhinghichedo',capbac='$sif->capbac',";
		$sqlin=$sqlin."thoigiancongtac='$sif->thoigiancongtac',thoiky='$sif->thoiky',tinhtrangbenhtat='$sif->tinhtrangbenhtat',";
		$sqlin=$sqlin."bbgiamdinhsongay='$sif->bbgiamdinhsongay',hoidonggiamdinh='$sif->hoidonggiamdinh',klmsld='$sif->klmsld',";
		$sqlin=$sqlin."tyledathuongtat='$sif->tyledathuongtat',vinhvien='$sif->vinhvien',khamlai='$sif->khamlai',";
		$sqlin=$sqlin."bbkhamlai='$sif->bbkhamlai',ketluanlaityle='$sif->ketluanlaityle',tyledathuongtatlai='$sif->tyledathuongtatlai',";
		$sqlin=$sqlin."quyetdinhtc='$sif->quyetdinhtc',capraqd='$sif->capraqd',ngayhuong='$sif->ngayhuong',";
		$sqlin=$sqlin."matcmotlan='$sif->matcmotlan',matchangthang='$sif->matchangthang',maphucapkv='$sif->maphucapkv',";
		$sqlin=$sqlin."maphucapdacbiet='$sif->maphucapdacbiet',ghichu='$sif->ghichu',tths=$sif->tths,";
		$sqlin=$sqlin."ngaymat='$sif->ngaymat',sslt='$sif->sslt',xa='$sif->xa',";
		$sqlin=$sqlin."huyen='$sif->huyen'";		
		$kq=mysqli_query($con,$sqlin);		
	endforeach; */
	/* $mysongs = simplexml_load_file('D:/aa/atnbb.xml');
	foreach ($mysongs as $sif):		
		$sqlin="Insert into thannhanbb Set idhsbb=$sif->IDHSbb,hoten='$sif->hoten',ngaysinh='$sif->ngaysinh',gioitinh='$sif->gioitinh',";
		$sqlin=$sqlin."quanhe='$sif->quanhe',nguyenquan='$sif->nguyenquan',truquan='$sif->truquan',";
		$sqlin=$sqlin."matrocap='$sif->matrocap',ngayhuong='$sif->ngayhuong',sosolinhtien='$sif->sosolinhtien'";		
		$kq=mysqli_query($con,$sqlin);		
	endforeach; */
}
?>
<?php 	
	if($madv[3]!="T???nh")
	{
		echo "<h3 style='text-align: center'>B???n ??ang ????ng nh???p b???ng t??i kho???n t???ng h???p.</br> V?? v???y b???n kh??ng th??? s??? d???ng ch???c n??ng n??y.</br> Xin l???i v?? s??? b???t ti???n n??y.</br> Xin ch??n th??nh c???m ??n!</h3>";
		echo "<br />";
	}
	else
	{	
?>
<h2>Nh???n d??? li???u t??? file excel</h2>
<br />
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">	
			<div class="panel-body">
		<form role="form" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-5">	
				  <button type="submit" name = "sua" class="btn btn-success">Nh???n d??? li???u</button>
				  <input type="button" class="btn btn-black" value="Kh??ng nh???n" onclick="window.location.href='/main.php'" />
				</div>
			</div>			
		</form> 
</div>	
	</div>
		</div>
			</div>	
	<?php } ?>
</div>
</div>
<!------ FOOTER --------->
<?php include("$_SERVER[DOCUMENT_ROOT]/Main/footer.php"); ?>