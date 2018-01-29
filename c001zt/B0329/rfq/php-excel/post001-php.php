<?php
$name = $_POST['name'];
$city = $_POST['city'];


echo "<h1>xxx $name 在 $city </h1>";
date_default_timezone_set("Asia/Taipei");
echo "The time is " . date("h:i:s a");

// by Mark, 2016/5/13 14:30
date_default_timezone_set("Asia/Taipei");


/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
//date_default_timezone_set('Europe/London');

define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

/** Include PHPExcel */
//require_once '../Build/PHPExcel.phar';

// NOTE by Mark 2016/5/12 3:24, 昆山
// 相信是原作者改版多次但未更新本範例
require_once '../Classes/PHPExcel.php'; 
echo "__FILE__===> ".__FILE__ , EOL;
echo "pathinfo(__FILE__, PATHINFO_BASENAME)===> ". pathinfo(__FILE__, PATHINFO_BASENAME) , EOL;
echo "pathinfo(__FILE__, PATHINFO_DIRNAME)===> ". pathinfo(__FILE__, PATHINFO_DIRNAME) , EOL;
$defaultOutputFile= pathinfo(__FILE__, PATHINFO_DIRNAME).DIRECTORY_SEPARATOR."results".DIRECTORY_SEPARATOR."result123.xlsx";
echo "\$defaultOutputFile===> ".$defaultOutputFile , EOL;
// Create new PHPExcel object
echo date('H:i:s') , " Create new PHPExcel object" , EOL;
$objPHPExcel = new PHPExcel();

// Set document properties
echo date('H:i:s') , " Set document properties" , EOL;
$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
							 ->setLastModifiedBy("Maarten Balliauw")
							 ->setTitle("PHPExcel Test Document")
							 ->setSubject("PHPExcel Test Document")
							 ->setDescription("Test document for PHPExcel, generated using PHP classes.")
							 ->setKeywords("office PHPExcel php")
							 ->setCategory("Test result file");


// Add some data
echo date('H:i:s') , " Add some data" , EOL;
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Hello')
            ->setCellValue('B2', 'world!')
            ->setCellValue('C1', 'Hello')
            ->setCellValue('D2', 'world!');

// Miscellaneous glyphs, UTF-8
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A4', 'Miscellaneous glyphs')
            ->setCellValue('A5', '中文可以嗎?éàèùâêîôûëïüÿäöüç');

// Rename worksheet
echo date('H:i:s') , " Rename worksheet" , EOL;
$objPHPExcel->getActiveSheet()->setTitle('Simple');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Save Excel 2007 file
echo date('H:i:s') , " Write to Excel2007 format" , EOL;
$callStartTime = microtime(true);

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save($defaultOutputFile);
//$objWriter->save(str_replace('.php', '.xlsx', __FILE__));






$callEndTime = microtime(true);
$callTime = $callEndTime - $callStartTime;

echo date('H:i:s') , " File written to " , $defaultOutputFile;
echo 'Call time to write Workbook was ' , sprintf('%.4f',$callTime) , " seconds" , EOL;
echo 'Check Excel file NEED TO GET PHP FILE    --- results/result123.xlsx' , EOL;



