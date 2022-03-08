<?php
function dulieumotcot(PHPExcel $aa,$tencot,$dulieu,$bold,$name,$size,$traiphai,$dinhdang,$cotmerger,$dorong,$wrap)
{
	if ($dorong > 0)
		$aa->getActiveSheet()->getColumnDimension(substr($tencot,0,1))->setWidth($dorong);
	if ($cotmerger != "")
		$aa->setActiveSheetIndex(0)->setCellValue($tencot,$dulieu)->mergeCells($tencot.':'.$cotmerger);
	else
		$aa->setActiveSheetIndex(0)->setCellValue($tencot,$dulieu);
	if ($bold == "B")
		$aa->getActiveSheet()->getStyle($tencot)->getFont()->setBold(true)->setName($name)->setSize($size);
	else if ($bold == "I")
		$aa->getActiveSheet()->getStyle($tencot)->getFont()->setItalic(true)->setName($name)->setSize($size);
	else if ($bold == "BI")
	{
		$aa->getActiveSheet()->getStyle($tencot)->getFont()->setBold(true)->setName($name)->setSize($size);
		$aa->getActiveSheet()->getStyle($tencot)->getFont()->setItalic(true)->setName($name)->setSize($size);
	}
	else
		$aa->getActiveSheet()->getStyle($tencot)->getFont()->setName($name)->setSize($size);
	$aa->getActiveSheet()->getStyle($tencot)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
	if ($traiphai == "T")
		$aa->getActiveSheet()->getStyle($tencot)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
	else if ($traiphai == "P")
		$aa->getActiveSheet()->getStyle($tencot)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
	else
		$aa->getActiveSheet()->getStyle($tencot)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	if ($dinhdang == "BT")
		$aa->getActiveSheet()->getStyle($tencot)->getNumberFormat()->setFormatCode('#,###');
	else if ($dinhdang == "1P")
		$aa->getActiveSheet()->getStyle($tencot)->getNumberFormat()->setFormatCode('#,###.#');
	else if ($dinhdang == "2P")
		$aa->getActiveSheet()->getStyle($tencot)->getNumberFormat()->setFormatCode('#,###.##');
	if ($wrap == "C")
		$aa->getActiveSheet()->getStyle($tencot)->getAlignment()->setWrapText(true);
}
function kedong(PHPExcel $aa,$tencotdau,$tencotcuoi,$sodong,$kieu)
{
	if ($kieu == "Mỏng")
		$aa->getActiveSheet()->getStyle($tencotdau.':'.$tencotcuoi,$sodong)->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
	else if ($kieu == "Dày")
		$aa->getActiveSheet()->getStyle($tencotdau.':'.$tencotcuoi,$sodong)->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THICK);
	else if ($kieu == "Đốt")
		$aa->getActiveSheet()->getStyle($tencotdau.':'.$tencotcuoi,$sodong)->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_DASHDOT);
}
function dinhdangfont(PHPExcel $aa,$tencotdau,$tencotcuoi,$sodong,$tenfont,$sosize)
{	
	$aa->getActiveSheet()->getStyle($tencotdau.':'.$tencotcuoi,$sodong)->getFont()->setName($tenfont)->setSize($sosize);
	$aa->getActiveSheet()->getStyle($tencotdau.':'.$tencotcuoi,$sodong)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
}
function dinhdangBI(PHPExcel $aa,$tencotdau,$tencotcuoi,$sodong,$dam)
{
	if ($dam == "B")
		$aa->getActiveSheet()->getStyle($tencotdau.':'.$tencotcuoi,$sodong)->getFont()->setBold(true);
	else if ($dam == "I")
		$aa->getActiveSheet()->getStyle($tencotdau.':'.$tencotcuoi,$sodong)->getFont()->setItalic(true);
	else if ($dam == "BI")
	{
		$aa->getActiveSheet()->getStyle($tencotdau.':'.$tencotcuoi,$sodong)->getFont()->setBold(true);
		$aa->getActiveSheet()->getStyle($tencotdau.':'.$tencotcuoi,$sodong)->getFont()->setItalic(true);
	}	
}
function dinhdangle(PHPExcel $aa,$tencotdau,$tencotcuoi,$sodong,$tenle)
{
	if ($tenle == "T")
		$aa->getActiveSheet()->getStyle($tencotdau.':'.$tencotcuoi,$sodong)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
	else if ($tenle == "P")
		$aa->getActiveSheet()->getStyle($tencotdau.':'.$tencotcuoi,$sodong)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
	else
		$aa->getActiveSheet()->getStyle($tencotdau.':'.$tencotcuoi,$sodong)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
}
function dinhdangsoxls(PHPExcel $aa,$tencotdau,$tencotcuoi,$sodong,$sodau)
{
	if ($sodau == "BT")
		$aa->getActiveSheet()->getStyle($tencotdau.':'.$tencotcuoi,$sodong)->getNumberFormat()->setFormatCode('#,###');
	else if ($sodau == "1P")
		$aa->getActiveSheet()->getStyle($tencotdau.':'.$tencotcuoi,$sodong)->getNumberFormat()->setFormatCode('#,###.#');
	else if ($sodau == "2P")
		$aa->getActiveSheet()->getStyle($tencotdau.':'.$tencotcuoi,$sodong)->getNumberFormat()->setFormatCode('#,###.##');
}
function dinhdangxuongdong(PHPExcel $aa,$tencotdau,$tencotcuoi,$sodong)
{
	$aa->getActiveSheet()->getStyle($tencotdau.':'.$tencotcuoi,$sodong)->getAlignment()->setWrapText(true);
}
function dinhdangheight(PHPExcel $aa,$dong,$dorong)
{
	$aa->getActiveSheet()->getRowDimension($dong)->setRowHeight($dorong);
}
function taofile(PHPExcel $aa,$tenbaocao,$duongdan,$kieu)
{
	if ($kieu == "P")
		$aa->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_PORTRAIT);
	else
		$aa->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
	$aa->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);
	$aa->getActiveSheet()->getPageSetup()->setFitToPage(true);
	$aa->getActiveSheet()->getPageSetup()->setFitToWidth(1);
	$aa->getActiveSheet()->getPageSetup()->setFitToHeight(0);
	$aa -> createSheet ();

	$objWriter = new PHPExcel_Writer_Excel5 ($aa);
	//$objWriter = PHPExcel_IOFactory::createWriter($aa, 'Excel2007');
	$location = $duongdan.'\\'.$tenbaocao;//'bc.xls';//duong dan file
	$objWriter-> save ($location);
	//$objWriter->save('php://output');


	//$objWriter = new PHPExcel_Writer_Excel5 ($aa);
	//$location = $duongdan.'\\'.$tenbaocao;//'bc.xls';//duong dan file
	//$objWriter-> save ($location);
}
?>