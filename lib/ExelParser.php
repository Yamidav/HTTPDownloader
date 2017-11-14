<?php

namespace App;

class ExelParser {
	
	public function parse ($path){
	$xls = \PHPExcel_IOFactory::load($path);
	$xls->setActiveSheetIndex(0);
	$sheet = $xls->getActiveSheet();
	 $value = $sheet->getCellByColumnAndRow('A', 1)->getValue();
	 echo $value;
	}
}