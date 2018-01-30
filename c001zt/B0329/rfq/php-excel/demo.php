
<?php
 require_once 'PHPExcel.class.php'; 
$str = "title";
    $filename = mb_convert_encoding("表格主题/题目","gb2312","utf-8");    
    //实例化类
    $objExcel = new PHPExcel();
    $objWriter = new PHPExcel_Writer_Excel5($objExcel);
    $objExcel->setActiveSheetIndex(0);  //当前sheet
    $objActSheet = $objExcel->getActiveSheet();
    $objActSheet->setTitle($str);   //Sheet标题

    $objActSheet->mergeCells('A1:AL2'); //合并单元格 
    $objStyleA1 = $objActSheet->getStyle('A1');
    $objAlignA1 = $objStyleA1->getAlignment();
//    $objAlignA1->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);    //左右居中
    $objAlignA1->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);  //上下居中
    //字体及颜色
    $objFontA1 = $objStyleA1->getFont();
    $objFontA1->setName('黑体');
    $objFontA1->setSize(12);
    $objFontA1->getColor()->setARGB('FFFF0000');
    //设置宽度
    $objActSheet->getColumnDimension('A')->setWidth(25);
    $objActSheet->getColumnDimension('B')->setWidth(25);
    $objActSheet->getColumnDimension('C')->setWidth(25);

    //設定背景色
    $objExcel->getActiveSheet()->getStyle(3)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
    $objExcel->getActiveSheet()->getStyle(3)->getFill()->getStartColor()->setARGB($title_back);
    //设定A1的值
    $objActSheet->setCellValue('A1', $str);
   //设置A5边框
        $objStyleS = $objExcel->getActiveSheet()->getStyle('A5');
        $objBorderA5 = $objStyleS->getBorders();
        $objBorderA5->getTop()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
//设置上边框的颜色
        $objBorderA5 ->getTop()->getColor()->setARGB('FFFF0000' ); 
        $objBorderA5->getBottom()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
        $objBorderA5->getLeft()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
        $objBorderA5->getRight()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);